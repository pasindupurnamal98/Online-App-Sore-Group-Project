<?php
//Linking the configuration file
require 'adminpanel_config.php';


$User_id = $_POST['u_id'];
$First_name = $_POST['fname'];
$Last_name = $_POST['lname'];
$email = $_POST['email'];
$Mobile_no = $_POST['m_no'];
$NIC = $_POST['nic'];

$sql = "INSERT INTO user_details VALUES('$User_id','$First_name','$Last_name','$email','$Mobile_no','$NIC')";
if ($con->query($sql)) {
    echo '<script type="text/javascript"> 
    alert("Insert Successfull");
    window.location.href = "../html/insertdata_form.html";
</script>';
} else {
    echo '<script type="text/javascript"> alert("Error")</script>';
}
$con->close();
?>