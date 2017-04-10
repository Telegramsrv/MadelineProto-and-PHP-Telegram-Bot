---
title: inputMediaUploadedDocument
description: inputMediaUploadedDocument attributes, type and example
---
## Constructor: inputMediaUploadedDocument  
[Back to constructors index](index.md)



### Attributes:

| Name     |    Type       | Required |
|----------|:-------------:|---------:|
|file|[InputFile](../types/InputFile.md) | Required|
|mime\_type|[string](../types/string.md) | Required|
|attributes|Array of [DocumentAttribute](../types/DocumentAttribute.md) | Required|
|caption|[string](../types/string.md) | Required|
|stickers|Array of [InputDocument](../types/InputDocument.md) | Optional|



### Type: [InputMedia](../types/InputMedia.md)


### Example:

```
$inputMediaUploadedDocument = ['_' => 'inputMediaUploadedDocument', 'file' => InputFile, 'mime_type' => string, 'attributes' => [Vector t], 'caption' => string, 'stickers' => [Vector t], ];
```  

