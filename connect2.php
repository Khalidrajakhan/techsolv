<?php
<?php
$Full_Name =$_POST['Full_Name'];
$Phone_Number =$_POST['Phone_Number'];
$Email =$_POST['Email'];
$Subject =$_POST['Subject'];
$Message =$_POST['Message'];




 // database connection
 $conn =new mysqli('localhost','root','','test');
 if($conn->connect_error){
    die('error messages :' .$conn->connect_error);

 }
 else{
    $stmt =$conn-> prepare ("insert into contact_form(Full_Name,Phone_Number,Email,Subject,Message
    ) values(?,?,?,?,?)");
    $stmt->bind_param("sisss",$Full_Name,$Phone_Number,$Email,$Subject,$Message);
    $stmt->execute();
    echo "success message...";
    $stmt->close();
    $conn->close();
 }

 ?>

 ?>
