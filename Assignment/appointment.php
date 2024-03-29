     <?php
include("./include/start.php");
include("include/header.php");
    ?>
    <form method="post">
       <div class="form"> 
        <h1>Enter your details to book an appointment</h1><br/>
    Enter your name:<br/><br/>
    <input type="text" name="patient_name" required><br/><br/>
    Enter your email:<br/><br/>
    <input type="text" name="email" required><br/><br/>
    Enter email password:<br/><br/>
    <input type="password" name="email_pwd" required><br/><br/>
   <p class="book"> <input type="submit" name="submit" value="book appointment"></p>
   
</div>
</form>

    <?php
    if(isset($_POST["submit"])){
        $patient_name=$_POST["patient_name"];
        $email=$_POST["email"];
        $email_pwd=$_POST["email_pwd"];
      $conn=new mysqli('localhost','root','','hospital');
      if(!$conn ){
        echo'connection failed ';
      }
      
       $sql="INSERT INTO bookings(email,patient_name,email_pwd)
      VALUES('$email','$patient_name','$email_pwd')";
      $result=$conn->query($sql);
      echo "<script>alert('hello $patient_name you have successfully booked and appointment the date will be sent to your email')</script>";
    }
      ?>
      
   <?php
include('./include/footer.php');
?>

</body>
</html>