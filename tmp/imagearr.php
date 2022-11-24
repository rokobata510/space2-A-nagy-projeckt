<?php

    $img_arr = array(
        array("meme", "space/img/memes.jpg"), 
        array("knowledge", "space/img/knowledge.jpg"),
        array("ron", "space/img/ron.jpg")
    );
    
 
    $rand_i = rand(0, sizeof($img_arr));
    return $img_arr[$rand_i];
    //print_r($img_arr[$rand_i]);
    
?>
