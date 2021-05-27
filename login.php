<?php
    $id   = $_POST["id"];
    $pass = $_POST["pass"];

   $con = mysqli_connect("localhost", "user1", "12345", "sample");
   $sql = "select * from members where id='$id'";
   /* sample 데이터베이스로 접속 후 select 문을 통해 id가 입력값과 같은 테이블요소를 가져온다. */
   $result = mysqli_query($con, $sql);

   $num_match = mysqli_num_rows($result);

   if(!$num_match) 
   {
     echo("
           <script>
             window.alert('등록되지 않은 아이디입니다!')
             history.go(-1)
           </script>
         ");
    }
    else
    {
        $row = mysqli_fetch_array($result);
        $db_pass = $row["pass"];

        mysqli_close($con);

        if($pass != $db_pass)
        {

           echo("
              <script>
                window.alert('비밀번호가 틀립니다!')
                history.go(-1)
              </script>
           ");
           exit;
        }
        else
        {
            session_start();
            $_SESSION["userid"] = $row["id"];

            echo("
              <script>
                location.href = 'index.php';
              </script>
            ");
        }
     }        
?>
