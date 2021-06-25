<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>FINAL-Search</title>
        <link rel="stylesheet" type="text/css" href="./css/examine.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300&display=swap" rel="stylesheet">
        <style>
            @import url(//fonts.googleapis.com/earlyaccess/nanumpenscript.css);
            h3 {
                font-family: 'Nanum Pen Script', cursive;
            }
        </style>
    </head>

    <body class="index_body">
        <header>
            <?php include "header.php";?>
        </header>
        
        <section>
            <div class = "area" style="height: 650px;">
                <div class = "area_area">
                    <!-- Main Contents 시작 -->
                    <h2 style='color : rgba(161, 202, 67, 0.664); text-align:center; font-size:60px;'>악성 URL 검색하기</h2>
                    
                    <!--input 문자열 post로 result.php에 전송-->
                    <form name="url_form" method="post" action="result.php"> 
                        <div class="container">
                            <input placeholder='Search...' type="text" name="char_url">
                            <p>&nbsp;&nbsp;&nbsp;</p>
                            <button onclick="location.href='result.php'">Enter</button>
                        </div>
                    </form>
                    <!-- Main Contents 종료 -->
                </div>
            </div>
        </section>
        
        <footer>
    	    <?php include "footer.php";?>
        </footer>
    </body>
</html>