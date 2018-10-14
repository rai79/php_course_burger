<?php
require_once ('../../vendor/autoload.php');

use Intervention\Image\ImageManagerStatic as Image;

Image::configure(array('driver' => 'imagick'));
//Инициализируем полный путь к шрифту
putenv('GDFONTPATH=' . realpath(getcwd()));
// Открываем картинку
$image = Image::make('../img/hasky.jpg');
$image->text( //Вставляем ватермарк
    'Mr.Burger',
    $image->width() / 2,
    $image->height() / 2,
    function ($font) {
        $font->file('BebasNeue Bold.ttf')
            ->size('224');
        $font->color(array(255, 0, 0, 0.5));
        $font->align('center');
        $font->valign('center');
    })
    ->rotate(45) //поворачиваем
    ->widen(200) //уменьшаем до 200 по ширине с сохранением пропорций
    ->save('../img/hasky-wm.jpg');
echo 'watermarked';
