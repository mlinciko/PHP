<?php
function addWaterSign($image) {
    header('content-type: image/png');
    $add = $image; // Source directory location

    $add2="assets/images/$image"; // Destination directory location 
    $water_img="assets/images/water-sign.png"; // Water Image file

    $img_ar=GetImageSize($add); // reading source image size
    $img_wt_ar=GetImageSize($water_img); // reading water image size
    $location_height=0; // Location of water mark
    $location_width=0;  // Location of water mark

    $im=ImageCreateFromPng($add);  // for main image
    $water_img1=ImageCreateFromPng($water_img); // for water image
    $newimage=imagecreatetruecolor($img_ar[0],$img_ar[1]);//
    imageCopyResized($newimage,$im,0,0,0,0,$img_ar[0],$img_ar[1],$img_ar[0],$img_ar[1]);
    $t=ImageCopy($newimage,$water_img1,$location_width,$location_height,0,0,$img_wt_ar[0],$img_wt_ar[1]);

    ImagePng($newimage,$add2);
    chmod("$add2",0666);
    unlink("$image");
}
?>