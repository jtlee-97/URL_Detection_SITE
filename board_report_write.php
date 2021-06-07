<?php
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
?>	
<!DOCTYPE html>
<html>
    <head> 
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="./css/board.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Sunflower:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Gugi&display=swap" rel="stylesheet">
        <script>
            function check_input() {
                if (!document.board_form.subject.value)
                {
                    alert("제목을 입력하세요!");
                    document.board_form.subject.focus();
                    return;
                }
                if (!document.board_form.content.value)
                {
                    alert("내용을 입력하세요!");    
                    document.board_form.content.focus();
                    return;
                }
                document.board_form.submit();
            }
        </script>
        <style>
            table {
                width: 60%;
            }
            input {
                width : 80%;
                background: black;
                color: wheat;
                border: 3px solid whitesmoke;
                border-color: whitesmoke;
            }
            textarea {
                width : 80%;
                height : 200px;
                background: black;
                color: wheat;
                border: 3px solid whitesmoke;
                border-color: whitesmoke;
            }
        </style>
    </head>
<body class="index_body"> 
<header>
    <?php include "header.php";?>
</header>  
<section>
    <div class="area">
        <div class="area_area">
            <h3 style='color : rgba(161, 202, 67, 0.664); text-align:center;'>신고 작성</h3>
            <p></p>
            <form  name="board_form" method="post" action="board_insert.php" enctype="multipart/form-data">
                <table style='border: 3px solid #444444; border-color: rgba(200, 200, 200, 0.1); border-radius : 25px;'>
                    <colgroup> <!--table 너비를 조정-->
                        <col width="25%" />
                        <col width="55%" />
                    </colgroup>
                    <tr>
                        <td><h4 style='font-size: 30px; color: rgba(220, 220, 220, 0.766); text-align:center; font-family: "Sunflower";text-shadow: -2px 0 #000, 0 2px #000, 2px 0 #000, 0 -2px #000;'>작&nbsp;성&nbsp;자</h4></td>
                        <td><?=$userid?></td>
                    </tr>
                    <tr>
                        <td><h4 style='font-size: 30px; color: rgba(220, 220, 220, 0.766); text-align:center; font-family: "Sunflower";text-shadow: -2px 0 #000, 0 2px #000, 2px 0 #000, 0 -2px #000;'>제&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;목</h4></td>
                        <td><input name="subject" type="text"></td>
                    </tr>
                    <tr>
                        <td><h4 style='font-size: 30px; color: rgba(220, 220, 220, 0.766); text-align:center; font-family: "Sunflower";text-shadow: -2px 0 #000, 0 2px #000, 2px 0 #000, 0 -2px #000;'>내&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;용</h4></td>
                        <td><textarea name="content"></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button class="button_rep_write" onclick="check_input()">작성 완료</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</section> 
<footer>
    <?php include "footer.php";?>
</footer>
</body>
</html>
