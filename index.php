<?php
$logo = imagecreatefromstring(file_get_contents('logo.png'));
$qrcode = imagecreatefromstring(file_get_contents('qrcode.jpg'));

imagecopymerge($qrcode, $logo, 150, 150, 0, 0, 130, 130, 100);
imagepng($qrcode, 'demo.png');

// 输出到浏览器
header('Content-Type: image/png');
imagepng($qrcode);
