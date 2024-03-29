<?php
$conn = mysqli_connect("localhost","root","","hospital");
if(!$conn){
    echo '<h2>you are not Connected</h2>';
}

function addService($conn)
{
    if(isset($_POST['addService'])){

        $service_name = htmlentities($_POST['service_name']);

        $service_image = $_FILES['service_image']['name'];
        $temp_image = $_FILES['service_image']['tmp_name'];

        $rename_image = uniqid().$service_image;
        $directory = '../photos/'.$rename_image;
        move_uploaded_file($temp_image, $directory);

        $stmt = "INSERT INTO services(service_name, service_image)
        VALUES('$service_name', '$rename_image')";

        $query = mysqli_query($conn, $stmt);

        if($query){
            header("Location: ../index.php");
        }

    }
}

function getService($conn)
{    $stmt = "SELECT * FROM services ORDER BY service_id";

    $result = mysqli_query($conn, $stmt);

    $images = [];

    if(mysqli_num_rows($result) > 0){

        while($row = mysqli_fetch_assoc($result)){

            $images[] = [
                'service_id'     => $row['service_id'],
                'service_name'    => $row['service_name'],
                'service_image'  => $row['service_image'],
            ];
        }
        return[
            'images' => $images
        ];
    }
}

//getting a single image

function getsingleimage($conn,$service_id){
    $sql = "SELECT * FROM services WHERE service_id = '$service_id'";
    //execute the sql
    $result = mysqli_query($conn,$sql);
    //check if there are any row returned
    if(mysqli_num_rows($result) > 0){
        //initialize an empty array
        $images = [];
        //itterate through the array
        while($row = mysqli_fetch_assoc($result)){
            //store the retrieved info into your array
            $images[] = [
                'service_id' => $row['service_id'],
                'service_name' => $row['service_name'],
                'service_image' => $row['service_image'],
            ];
        }
        return[
            'images' => $images
        ];
    }
}

//updating function

function updateimage($conn)
{
    if (isset($_POST['updateImage'])) {
    $service_id = $_GET['service_id'];
    $service_name = $_POST['service_name'];    

    $new_image = $_FILES['new_image']['name'];
    $old_image = $_POST['old_image'];

    if(!empty($new_image)){
        $rename_image = uniqid().$new_image;
        $temp_image = $_FILES['new_image']['tmp_name'];

        $directory ="../photos/".$rename_image;

        // move_uploaded_file($temp_service_image,$directory);
        $sql = "UPDATE services SET service_id ='$service_id',service_name ='$service_name',
        service_image='$new_image' WHERE service_id='$service_id'";

    }else{
        $sql = "UPDATE services SET service_id ='$service_id',service_name ='$service_name',
        service_image='$old_image' WHERE service_id='$service_id'";

    }
    $result = mysqli_query($conn,$sql);

    if ($result) {
        if (!empty($new_image)) {
            move_uploaded_file($temp_image, $directory);
        }
        //show the id of object to be updated
        header("Location: ../index.php?service_id=$service_id");
        exit();
    } else {
        echo 'Error';
    }
}
}

// deleting images from the database and also the dashboard and also the folder photo

function deleteService($conn)
{
    if (isset($_POST['deleteService'])) {

        $service_id = $_POST['service_name'];
        // $image_title=$_POST['image_title'];

        $statement = "DELETE FROM services WHERE service_id='$service_id'";

        $result = mysqli_query($conn, $statement);
        if ($result) {
            // echo 'image delete';
            header("Location: ../index.php");
            exit();
        }
    }
    
    
}
?>