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

    <body>
        <header>
            <?php include "header.php";?>
        </header>
        
        <section>
            <div class = "area">
                <h1>MyPage</h1>
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

                    <!-- Main Contents 시작 -->
                    
                    <!-- Main Contents 종료 -->
                </div>
            </div>
        </section>
        
        <footer>
    	    <?php include "footer.php";?>
        </footer>
    </body>
</html>