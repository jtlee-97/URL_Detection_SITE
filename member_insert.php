<?php
    $id   = $_POST["id"];
    $pass = $_POST["pass"];
    $email  = $_POST["email"];

    $regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장

              
    $con = mysqli_connect("localhost", "user1", "12345", "sample");

	$sql = "insert into members(id, pass, email, regist_day) ";
	$sql .= "values('$id', '$pass','$email', '$regist_day')";

	mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행
    mysqli_close($con);     

    echo "
	        <script>
                window.alert('회원가입이 완료되었습니다! 로그인해주세요!')
	            location.href = 'index.php';
	        </script>
	  ";
?>

   
