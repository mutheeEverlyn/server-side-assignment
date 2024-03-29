<?php

require_once '../includes/html_start.php';

if(isset($_GET['service_id'])){

    $service_id =$_GET['service_id'];

    $img = $_GET['title'];//gets title of image to be deleted

echo '
<div class="form_container">
<h2>Are you sure you want to delete:'.$img.'</h2>
<form method="post" action=" '.deleteService($conn).'"  enctype="multipart/form-data">
  
    <div class="form_group">       
        <input type="hidden" name="service_name" value="'.$service_id.'">
    </div>

    <div class="form_group">
        <input type="submit" name="deleteService" value="Delete Image">
    </div>
</form>
</div>';
}
?>


</body>
</html>


