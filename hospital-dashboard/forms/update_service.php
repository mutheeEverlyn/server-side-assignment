<?php

require_once '../includes/html_start.php';

if(isset($_GET['service_id'])){

    $service_id=$_GET['service_id'];

    $get_image=getsingleimage($conn,$service_id);
    $images =$get_image['images'];
    var_dump($images);

    //retrieve the current image file name
    //0 represent first element of the array
    // var_dump($images);
    $old_image=$images[0]['service_image'];



echo '
<div class="form_container">
<form method="post" action="'.updateImage($conn).'"  enctype="multipart/form-data">
    <div class="form_group">
        <label for="image">current image</label><br>
        <img src="../photos/'.$images[0]['service_image'].'" alt="">
    </div>
    <div class="form_group">
        <label for="image">new image</label><br>
        <input type="file" name="new_image" value="new_image">
    </div>
    <div class="form_group">       
        <input type="hidden" name="old_image" value="'.$old_image.'">
    </div>
    <div class="form_group">
        <label for="title">image title</label><br>
        <input type="text" name="service_name" value="'.$images[0]['service_name'].'">
    </div>
    <div class="form_group">       
    <input type="hidden" name="service_id" value="'.$images[0]['service_id'].'">
    </div>
    <div class="form_group">
        <input type="submit" name="updateImage" value="Update Image">
    </div>
</form>
</div>';
}
?>

hello

</body>
</html>


