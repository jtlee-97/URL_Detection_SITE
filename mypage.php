<?php
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
?>	

<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>FINAL-MYPAGE</title>
        <link rel="stylesheet" type="text/css" href="./css/mypage.css">
        <script type="text/javascript" src="./js/login.js"></script>
    </head>

    <body class="index_body">
        <header>
            <?php include "header.php";?>
        </header>
        
        <section>
            <div class = "area">
                <p></p>
                <h2 style='color : rgba(161, 202, 67, 0.664); text-align:center; font-size:60px;'>마이 페이지</h2>
                <p></p>
                <p></p>
                <div class = "area_area">
                    <?php
                        if(!$userid) {
                    ?>
                                <?php include "mypage_if.php"; ?>
                    <?php
                        }
                        else {
                    ?>
                                <?php include "mypage_else.php"; ?>
                    <?php
                        }
                    ?>
                </div>
                <p></p>
                <p></p>
            </div>
        </section>
        
        <footer>
    	    <?php include "footer.php";?>
        </footer>
    </body>
</html>