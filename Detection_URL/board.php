<?php
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
?>	
<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>FINAL-MYPAGE</title>
        <link rel="stylesheet" type="text/css" href="./css/board.css">
    </head>

    <body>
        <header>
            <?php include "header.php";?>
        </header>
        
        <section>>
            <div class="area">
               
                <table>
                    <th><button class="button_notice" onclick="location.href='board_notice_list.php'">공지 사항</button></th>
                    <th><button class="button_rep_list" onclick="location.href='board_report_list.php'">신고 목록</button></th>
                    <?php 
                        if($userid) {
                    ?>
                                        <th><button class="button_rep_write" onclick="location.href='board_report_write.php'">신고 작성</button></th>
                    <?php
                        } else {
                    ?>
                                        <th><button class="button_rep_write" onclick="alert('로그인을 해야 사용가능한 영역입니다!')">신고 작성</button></th>
                    <?php
                        }
                    ?>
                </table>

            </div>
        </section>

        <footer>
    	    <?php include "footer.php";?>
        </footer>
    </body>
</html>