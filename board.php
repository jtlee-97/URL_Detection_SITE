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
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Gugi&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Sunflower:wght@300&display=swap" rel="stylesheet">
    </head>

    <body class="index_body">
        <header>
            <?php include "header.php";?>
        </header>
        
        <section>
            <div class="area">
               <div class="area_area">
               <h2 style='color : rgba(161, 202, 67, 0.664); text-align:center; font-size:60px;'>게시판</h2>
                    <p style= 'text-align:center; font-family: "Sunflower", sans-serif; font-size: 30px;'>
                        개발자 / 관리자의 공지사항과 다른 유저들의 신고 목록을 확인하세요
                    </p>
                    <p></p>
                    <p></p>
                    <p></p>
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
                    <p></p>
                    <p></p>
                    <p></p>
                    <table class='tables'>
                        <tr style='text-align:center;'>
                            <td colspan='2'><h3 style='color : rgba(192, 202, 165, 0.664); border-bottom: thick double rgba(209, 208, 208, 0.247);'>게시판 사용방법</h3></td>
                            <!--<td>1</td>-->
                        </tr>
                        <colgroup> <!--table 너비를 조정-->
                                <col width="30%" />
                                <col width="70%" />
                        </colgroup>
                        <tr>
                            <td style='font-family: "Shadows Into Light", cursive; font-size: 40px; text-align: center; border-right: 3px solid #444444; border-color: rgba(209, 208, 208, 0.247);'>
                                <button class="button_notice2">공지 사항</button>
                            </td>
                            <td style='font-family: "Sunflower", sans-serif; font-size: 20px;'>개발자 및 관리자가 작성한 홈페이지 공지사항을 확인할 수 있습니다.</td>
                        </tr>
                        <tr>
                            <td style='font-family: "Shadows Into Light", cursive; font-size: 40px; text-align: center; border-right: 3px solid #444444; border-color: rgba(209, 208, 208, 0.247);'>
                                <button class="button_rep_list2">신고 목록</button>
                            </td>
                            <td style='font-family: "Sunflower", sans-serif; font-size: 20px;'>다른 유저들이 작성한 홈페이지 관련 신고 및 문의사항을 확인할 수 있습니다.</td>
                        </tr>
                        <tr>
                            <td style='font-family: "Shadows Into Light", cursive; font-size: 40px; text-align: center; border-right: 3px solid #444444; border-color: rgba(209, 208, 208, 0.247);'>
                                <button class="button_rep_write2">신고 작성</button>
                            </td>
                            <td style='font-family: "Sunflower", sans-serif; font-size: 20px;'>신고를 작성할 수 있습니다. 로그인이 필요한 기능입니다.</td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>

        <footer>
    	    <?php include "footer.php";?>
        </footer>
    </body>
</html>