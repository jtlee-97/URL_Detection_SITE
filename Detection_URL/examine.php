<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>FINAL-Search</title>
        <link rel="stylesheet" type="text/css" href="./css/examine.css">
        <style>
            @import url(//fonts.googleapis.com/earlyaccess/nanumpenscript.css);
            h3 {
                font-family: 'Nanum Pen Script', cursive;
            }
        </style>
    </head>

    <body>
        <header>
            <?php include "header.php";?>
        </header>
        
        <section>
            <div class = "area">
                <div class = "area_area">
                    <h1>EXAMINE</h1>

                    <!-- Main Contents 시작 -->
                    <h3>악성 URL 검색하기</h3>
                    <div class="container">
                        <input placeholder='Search...' type="text">
                        <p>&nbsp;&nbsp;&nbsp;</p>
                        <button>진단결과 확인</button>
                    </div>
                    <!-- Main Contents 종료 -->
                </div>
            </div>
        </section>
        
        <footer>
    	    <?php include "footer.php";?>
        </footer>
    </body>
</html>