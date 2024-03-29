<?php

require_once './includes/html_start.php';
?>

<?php
//linking to access images from the database 
$all_services = getService($conn);
// calling the associative array
$services = $all_services['images'];


echo'<div class="container">

 <a href="./forms/add_service.php">adding images</a>
 <form action="" method="post" enctype="multipart/form-data">
<table border="1">
    <tr>
        <th>#</th>
        <th>Service Name</th>
        <th>Photo</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>';
    if(count($services) > 0){
        foreach($services as $service){
            echo'<tr>
            <td>'.$service['service_id'].'</td>
            <td>'.$service['service_name'].'</td>
            <td><img src="photos/'.$service['service_image'].'" alt=""></td>
            <td><a href="./forms/update_service.php?service_id='.$service['service_id'].'">Update</a></td>
            <td><a href="./forms/remove_service.php?service_id='.$service['service_id'].'&title='.$service['service_name'].'">Delete</a></td>
            </tr>';
        }
    }
    
echo'</table>
</form>
</div>';?>


 

