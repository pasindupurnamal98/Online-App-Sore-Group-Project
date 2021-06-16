<?php
 //Linking the configuration file
 require 'adminpanel_config.php';

 if(isset($_POST['search'])){

    $search=mysqli_real_escape_string($con,$POST['data']);
     $sql="SELECT * FROM user_details WHERE User_id LIKE '%data%' OR First_name LIKE '%data%' OR Last_name LIKE '%data%' OR email LIKE '%data%' OR Mobile_no LIKE '%data%' OR NIC LIKE '%data%' ";
     $result=mysqli_query($con,$sql);
     $query_result=mysqli_num_rows($result);
    
     if($query_result>0){
         while($row=mysqli_fetch_assoc($result)){
            echo "<p>.$row['User_id'].</p>";
            echo "<p>.$row['First_name'].</p>";
             echo "<p>.$row['Last_name'].</p>";
             echo"<p>.$row['email'].</p>";
             echo"<p>.$row['Mobile_no'].</p>";
             echo"<p>.$row['NIC'].</p>";
         }
     }

     else{
        echo '<script type="text/javascript"> alert("Results Not Found")</script>'; 
     }
     $con->close();
    }
?>