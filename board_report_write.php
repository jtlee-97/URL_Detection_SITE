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
                width: 80%;
                border: 3px solid #444444;
                border-color: gray;
                border-radius : 2em;
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
                background: black;
                color: wheat;
                border: 3px solid whitesmoke;
                border-color: whitesmoke;
            }
        </style>
    </head>
<body> 
<header>
    <?php include "header.php";?>
</header>  
<section>
    <div class="area">
        <div class="area_area">
            <h3>신고 작성하기</h3>
            <form  name="board_form" method="post" action="board_insert.php" enctype="multipart/form-data">
                <table>
                    <colgroup> <!--table 너비를 조정-->
                        <col width="25%" />
                        <col width="55%" />
                    </colgroup>
                    <tr>
                        <td>작성자</td>
                        <td><?=$userid?></td>
                    </tr>
                    <tr>
                        <td>제목</td>
                        <td><input name="subject" type="text"></td>
                    </tr>
                    <tr>
                        <td>내용</td>
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
