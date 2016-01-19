<?php

setImageHeaders();
returnImageData(chooseRandomPic('icons'));

function chooseRandomPic($dir = '.'){
    $files = glob($dir . '/*.*');
    $file = array_rand($files);
    return $files[$file];
}

function setImageHeaders(){
	header('Content-Type: image/jpeg');
}

function returnImageData($image){
    readfile($image);
}



