<?php


function randomString($n)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $str = '';
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $str .= $characters[$index];
    }

    return $str;
}

function deleteIMGDirectory($dir)
{
    //img delete
    unlink($dir);

    //img folder delete
    $imageDIR = explode("/", $dir);
    array_pop($imageDIR);
    $imgString = implode('/', $imageDIR);
    rmdir($imgString);
   
}
