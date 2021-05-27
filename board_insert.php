<meta charset="utf-8">
<?php
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";

    if ( !$userid )
    {
        echo("
                    <script>
                    alert('게시판 글쓰기는 로그인 후 이용해 주세요!');
                    history.go(-1)
                    </script>
        ");
                exit;
    }

    $subject = $_POST["subject"];
    $content = $_POST["content"];

	$subject = htmlspecialchars($subject, ENT_QUOTES);
	$content = htmlspecialchars($content, ENT_QUOTES);

	$regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장

	$con = mysqli_connect("localhost", "user1", "12345", "sample");

	$sql = "insert into board (id, subject, content, regist_day, hit) ";
	$sql .= "values('$userid', '$subject', '$content', '$regist_day', 0)";
	mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행

	echo "
	   <script>
	    location.href = 'board_report_list.php';
	   </script>
	";
?>

  
