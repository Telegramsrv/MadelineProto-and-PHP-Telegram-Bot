<?php
/*
Copyright 2016-2017 Daniil Gentili
(https://daniil.it)
This file is part of MadelineProto.
MadelineProto is free software: you can redistribute it and/or modify it under the terms of the GNU Affero General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
MadelineProto is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
See the GNU Affero General Public License for more details.
You should have received a copy of the GNU General Public License along with MadelineProto.
If not, see <http://www.gnu.org/licenses/>.
*/

namespace danog\MadelineProto\MTProtoTools;

trait Crypt
{
    public function aes_calculate($msg_key, $auth_key, $direction = 'to server')
    {
        $x = ($direction === 'to server') ? 0 : 8;
        $sha1_a = sha1($msg_key.substr($auth_key, $x, ($x + 32) - $x), true);
        $sha1_b = sha1(substr($auth_key, ($x + 32), ($x + 48) - ($x + 32)).$msg_key.substr($auth_key, (48 + $x), (64 + $x) - (48 + $x)), true);
        $sha1_c = sha1(substr($auth_key, ($x + 64), ($x + 96) - ($x + 64)).$msg_key, true);
        $sha1_d = sha1($msg_key.substr($auth_key, ($x + 96), ($x + 128) - ($x + 96)), true);
        $aes_key = substr($sha1_a, 0, 8 - 0).substr($sha1_b, 8, 20 - 8).substr($sha1_c, 4, 16 - 4);
        $aes_iv = substr($sha1_a, 8, 20 - 8).substr($sha1_b, 0, 8 - 0).substr($sha1_c, 16, 20 - 16).substr($sha1_d, 0, 8 - 0);

        return [$aes_key, $aes_iv];
    }

    public function ige_encrypt($message, $key, $iv)
    {
        return $this->_ige($message, $key, $iv, 'encrypt');
    }

    public function ige_decrypt($message, $key, $iv)
    {
        return $this->_ige($message, $key, $iv, 'decrypt');
    }

    /**
     * Given a key, given an iv, and message
     * do whatever operation asked in the operation field.
     * Operation will be checked for: "decrypt" and "encrypt" strings.
     * Returns the message encrypted/decrypted.
     * message must be a multiple by 16 bytes (for division in 16 byte blocks)
     * key must be 32 byte
     * iv must be 32 byte (it's not internally used in AES 256 ECB, but it's
     * needed for IGE).
     */
    public function _ige($message, $key, $iv, $operation = 'decrypt')
    {
        if (strlen($key) != 32) {
            throw new \danog\MadelineProto\Exception('key must be 32 bytes long (was '.strlen($key).' bytes)');
        }
        if (strlen($iv) != 32) {
            throw new \danog\MadelineProto\Exception('iv must be 32 bytes long (was '.strlen($iv).' bytes)');
        }
        $cipher = new \phpseclib\Crypt\AES(\phpseclib\Crypt\AES::MODE_ECB);
        $cipher->setKey($key);
        $cipher->paddable = false;
        $blocksize = $cipher->block_size;
        if ((strlen($message) % $blocksize) != 0) {
            throw new \danog\MadelineProto\Exception('message must be a multiple of 16 bytes (try adding '.(16 - (strlen($message) % 16)).' bytes of padding)');
        }
        $ivp = substr($iv, 0, $blocksize);
        $ivp2 = substr($iv, $blocksize);
        $ciphered = '';
        for ($i = 0; $i <= strlen($message); $i += $blocksize) {
            $indata = substr($message, $i, $blocksize);
            if ($operation === 'decrypt') {
                $xored = $indata ^ $ivp2;
                $decrypt_xored = $cipher->decrypt($xored);
                $outdata = $decrypt_xored ^ $ivp;
                $ivp = $indata;
                $ivp2 = $outdata;
            } elseif ($operation === 'encrypt') {
                $xored = $indata ^ $ivp;
                $encrypt_xored = $cipher->encrypt($xored);
                $outdata = $encrypt_xored ^ $ivp2;
                $ivp = $outdata;
                $ivp2 = $indata;
            } else {
                throw new \danog\MadelineProto\Exception('Crypt: operation must be either \'decrypt\' or \'encrypt\'');
            }
            $ciphered .= $outdata;
        }

        return $ciphered;
    }
}
