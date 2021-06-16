    <?php
    $con = mysqli_connect("localhost", "root", " ", "admin_login");
    if (isset($_POST['log'])) {
      $username = mysqli_real_escape_string($con, $_POST['name']);
      $password = mysqli_real_escape_string($con, $_POST['password']);

      if ($username != "" && $password = "") {
        $sql = "SELECT Admin_id FROM admin_login WHERE Admin_user_name='$username' and Admin_password='$password'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if ($count == 1) {
          header("location: ../html/admin_panel2.html");
        }
      }
    }
    ?>