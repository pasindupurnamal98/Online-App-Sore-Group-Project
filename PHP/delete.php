<?php
 //Linking the configuration file
 require 'adminpanel_config.php';

 if(isset($_POST['delete'])){
     $User_id=$_POST['id'];

     $sql="DELETE FROM user_details WHERE User_id='$_POST[id]'";

     if($con->query($sql)){

        echo '<script type="text/javascript"> 
         alert("Deleted Sucessfully");
         window.location.href = "../Admin_login_page/Admin_page.php";
     </script>';

     }
     else{
        echo '<script type="text/javascript"> alert("Data not deleted")</script>';
     }
     $con->close();
    }

?>