<?php
 //Linking the configuration file
 require 'adminpanel_config.php';

 if(isset($_POST['update'])){
     $User_id=$_POST['id'];

     $sql="UPDATE user_details SET First_name='$_POST[fname]',Last_name='$_POST[laname]',email='$_POST[email]',Mobile_no='$_POST[m_no]' WHERE User_id='$_POST[id]'";

     if($con->query($sql)){
        echo '<script type="text/javascript"> 
        alert("Updated Sucessfully");
        window.location.href = "../Admin_login_page/Admin_page.php";
    </script>';
     }
     else{
        echo '<script type="text/javascript"> alert("Data not updated")</script>';
     }
     $con->close();
    }

?>