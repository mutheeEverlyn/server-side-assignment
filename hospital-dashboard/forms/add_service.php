<?php

require_once '../includes/html_start.php';
?>
    
<?php

echo '<div class="form_container">
<form action="'.addService($conn).'" method="post" enctype="multipart/form-data">
    <div class="form_group">
        <label for="image">upload image</label><br>
        <input type="file" name="service_image">
    </div>
    <div class="form_group">
        <label for="title">image title</label><br>
        <input type="text" name="service_name">
    </div>
    <div class="form_group">
        <input type="submit" name="addService" id="add" value="add image">
    </div>
</form>
</div>';
?>


</body>
</html>


