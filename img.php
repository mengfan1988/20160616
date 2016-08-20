<?php
include './Image.class.php';
include './Image/Driver/GIF.class.php';
include './Image/Driver/Gd.class.php';
include './Image/Driver/Imagick.class.php';
use Core\Image;
$image=new Image;
$image->open('1.jpg');
//echo $image->height().'<br>';//获取图片长度
//echo $image->width().'<br>';//获取图片宽度
//echo $image->mime().'<br>';//返回图片mime类型
//echo $image->type().'<br>';
//var_dump($image->size());


