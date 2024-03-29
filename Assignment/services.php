<?php
include("include/connect.php");
include("include/start.php");
include("include/header.php");
?>

<div class="services">
    <h2>Our Sevices</h2>


<?php
$imageData = getImage($conn);
$images = $imageData['images'];
echo '<div class="service-container">';
if(count($images) > 0){
    foreach($images as $img){
        
        echo'<div class="service-img">
        <img src="'.DRL.'photos/'.$img['service_image'].'" alt="patient health monitoring by the doctor" >
        <p>'.$img['service_name'].'</p>
    </div>';
   
    }
}
echo'</div>';    
    ?>
</div>

<?php
include('./include/footer.php');
?>

</body>
</html>