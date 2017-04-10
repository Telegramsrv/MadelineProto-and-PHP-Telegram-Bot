<?php
/*
Copyright 2016-2017 Daniil Gentili
(https://daniil.it)
This file is part of MadelineProto.
MadelineProto is free software: you can redistribute it and/or modify it under the terms of the GNU Affero General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
MadelineProto is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
See the GNU Affero General Public License for more details.
You should have received a copy of the GNU General Public License along with the MadelineProto.
If not, see <http://www.gnu.org/licenses/>.
*/

namespace danog\MadelineProto;

class RSA
{
    use \danog\MadelineProto\TL\TL;
    use \danog\MadelineProto\Tools;

    public $keydata = [];

    public function __construct($rsa_key)
    {
        \danog\MadelineProto\Logger::log(['Istantiating \phpseclib\Crypt\RSA...'], Logger::ULTRA_VERBOSE);
        $key = new \phpseclib\Crypt\RSA();

        \danog\MadelineProto\Logger::log(['Loading key...'], Logger::ULTRA_VERBOSE);
        if (method_exists($key, 'load')) {
            $key->load($rsa_key);
        } else {
            $key->loadKey($rsa_key);
        }
        $this->keydata = ['n' => $key->modulus, 'e' => $key->exponent];

        \danog\MadelineProto\Logger::log(['Computing fingerprint...'], Logger::ULTRA_VERBOSE);
        $this->keydata['fp'] = \danog\PHP\Struct::unpack('<q', substr(
            sha1(
                $this->serialize_object(
                    ['type' => 'bytes'],
                    $this->keydata['n']->toBytes()
                )
                .
                $this->serialize_object(
                    ['type' => 'bytes'],
                    $this->keydata['e']->toBytes()
                ),
                true
            ),
            -8
        ))[0];

        return $this->keydata;
    }

    public function encrypt($data)
    {
        \danog\MadelineProto\Logger::log(['Encrypting with rsa key...'], Logger::VERBOSE);

        return (new \phpseclib\Math\BigInteger($data, 256))->powMod($this->keydata['e'], $this->keydata['n'])->toBytes();
    }
}
