<?php
    $id = $_POST["id"];

    $pass = $_POST["pass"];
    $email  = $_POST["email"];
          
    $con = mysqli_connect("localhost", "user1", "12345", "sample");
    $sql = "update members set pass='$pass', email='$email'";
    $sql .= " where id='$id'";
    mysqli_query($con, $sql);

    mysqli_close($con);     

    echo "<script>alert(\"{$id}의 가입정보가 업데이트 되었습니다.\");</script>";

    echo "
	      <script>
	          location.href = 'mypage.php';
	      </script>
	  ";
?>

   
