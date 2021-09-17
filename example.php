<?php
require_once "vendor/autoload.php";

use duaton\paint\Elements\AvatarBuilder;


$faceBuilder = new AvatarBuilder();
$faceBuilder->build($_POST['settings']);
echo base64_encode(file_get_contents('final_img.png'));
