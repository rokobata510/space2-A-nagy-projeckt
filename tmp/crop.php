<?php

function crop_im($file, $max_resolution){

    if(file_exists($file)){

        $original_image = imagecreatefromjpeg($file);

        $original_width = imagesx($original_image);
        $original_height = imagesy($original_image);

        //try max width first
        if($original_height > $original_width){
            //if tall
            $ratio = $max_resolution / $original_width;
            $new_width = $max_resolution;
            $new_height = $original_height * $ratio;

            $diff = $new_height - $new_width;
            $x = 0;
            $y = $diff;

        }else{
            //if wide
            $ratio = $max_resolution / $original_height;
            $new_height = $max_resolution;
            $new_width = $original_width * $ratio;

            $diff = $new_width - $new_height;
            $x = $diff;
            $y = 0;

        }


        if($original_image){

            $new_image = imagecreatetruecolor($new_width, $new_height);
            imagecopyresampled($new_image, $original_image, 0, 0, 0, 0, $new_width, $new_height, $original_width, $original_height);

            $new_crop_image = imagecreatetruecolor($max_resolution, $max_resolution);
            imagecopyresampled($new_crop_image, $new_image, 0, 0, 0, 0, $max_resolution, $max_resolution, $max_resolution, $max_resolution);
                                                   //push  left, down, right, up


            imagejpeg($new_crop_image, $file, 90);

        }

    }

}

$img_arr = include 'imgarr.php';
//$file = 'ron.jpg';
$file = $img_arr[1];
crop_im($file, "300");
echo "<img src='$file' style=''/>";

// if($_SERVER['REQUEST_METHOD']=="POST"){


//     if(isset($_FILES['image']) && $_FILES['image']['type'] == 'image/jpeg'){

//         move_uploaded_file($_FILES['image']['tmp_name'], $_FILES['image']['name']);

//         $file = $_FILES['image']['name'];

//         //resize file
//         crop_im($file, "300");

//         echo "<img src='$file' style=''/>";

//     }else{

//         echo "file not supported";
//     }
    
// }

?>


<!-- <form method='post' enctype='multipart/form-data'>

    <input type='file' name='image'/><br/>
    <input type='submit' value='post'/>

</form> -->