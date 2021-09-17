# Paint by Numbers

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)

## Install

Via Composer

``` bash
$ composer require duaton/paint-by-numbers
```

## Usage

Case 1:

``` php
$avatar = new Avatar();

$faces = new \duaton\paint\Base\Faces();
$ears = new \duaton\paint\Base\Ears();
$eyes = new \duaton\paint\Base\Eyes();
$mouths = new \duaton\paint\Base\Mouths();
$noses = new \duaton\paint\Base\Noses();

$avatarPaint->face($faces->default())
        ->ears($ears->default())
        ->eyes($eyes->default())
        ->mouth($mouths->default())
        ->nose($noses->default())
        ->save('full path to directory/fileName.png');
```

Case 2:

``` php

$faces = new \duaton\paint\Base\Faces();
$ears = new \duaton\paint\Base\Ears();
$eyes = new \duaton\paint\Base\Eyes();
$mouths = new \duaton\paint\Base\Mouths();
$noses = new \duaton\paint\Base\Noses();


$avatar = new Avatar([
        'face' => $faces->default(), 
        'hair' => '', 
        'ears' => $ears->default(), 
        'eyes' => $eyes->default(), 
        'mouth' => $mouths->default(), 
        'beard' => '', 
        'nose' => $noses->default(), 
]);

$avatar->save('full path to directory/fileName.png');
```


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
