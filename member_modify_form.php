<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./css/mypage_else.css">
        <link rel="stylesheet" type="text/css" href="./css/mypage.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Gugi&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Sunflower:wght@300&display=swap" rel="stylesheet">
        <style>
            .tables {
                border-top : 1px solid #444444;
                border-collapse : collapse;
                width : 100%;
            }
            .th_left {
                text-align: center;
                border-right : 1px solid #444444;
            }
            .th_right {
                text-align: left;
                border-left : 1px solid #444444;
            }
            .th_right_id {
                text-align: center;
                border-left : 1px solid #444444;
            }
            .th_header {
                text-align: center;
            }
            .tabless {
                border-collapse : collapse;
                width : 100%;
            }
            .inputs {
                border-top: none;
                border-right: none;
                border-left: none;
                border-bottom: 1px solid gray;
            }
            .areas {
                height: 80%;
                margin: 20px;
                color: white;
                background-color : rgb(50, 50, 60, 0.425);
                box-shadow: 0px 7px 10px rgba(150, 150, 150, 0.4);
                border-radius : 2em;
            }
            .areas2 {
                height: 80%;
                margin: 20px;
                color: white;
                background-color : rgb(50, 50, 60, 0.125);
                border-radius : 10px;
            }
        </style>

        <script>
            function check_input_modify()
            {
                if (!document.member_form.pass.value)
                {
                    alert("비밀번호를 입력하세요!");    
                    document.member_form.pass.focus();
                    return;
                }

                if (!document.member_form.pass_confirm.value)
                {
                    alert("비밀번호확인을 입력하세요!");    
                    document.member_form.pass_confirm.focus();
                    return;
                }

                if (!document.member_form.email1.value)
                {
                    alert("이메일 주소를 입력하세요!");    
                    document.member_form.email1.focus();
                    return;
                }

                if (!document.member_form.email2.value)
                {
                    alert("이메일 주소를 입력하세요!");    
                    document.member_form.email2.focus();
                    return;
                }

                if (document.member_form.pass.value != 
                        document.member_form.pass_confirm.value)
                {
                    alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요!");
                    document.member_form.pass.focus();
                    document.member_form.pass.select();
                    return;
                }

                document.member_form.submit();
            }
        </script>
    </head>

    <body class="index_body">
        <header>
            <?php include "header.php";?>
        </header>

        <?php   
            $userid = $_POST["userid"];
        ?>

        <section>
            <div class = "area">
                <h2 style='color : rgba(161, 202, 67, 0.664); text-align:center; font-size:60px;'>개인정보수정</h2>
                <div class = "area_area">

                    <div class = "areas">
                        <form  name="member_form" method="post" action="member_modify.php">
                            <input type="hidden" name="id" value="<?php echo $userid;?>"/> <!--POST 방식으로 userid 값 전달-->
                            <table class="tabless">
                                <th class="th_header">
                                    <h3>회원정보 수정</h3> 
                                </th>
                                <th class="th_header"> 
                                    <button class="button_change" onclick="check_input_modify()">변경하기</button>
                                </th>
                            </table>

                            <table class="tables">
                                <th class="th_left" width="200"><h4 style='color: rgba(220, 220, 220, 0.766); text-align:center; font-family: "Sunflower";text-shadow: -2px 0 #000, 0 2px #000, 2px 0 #000, 0 -2px #000;'>아 이 디</h4></td>
                                <th class="th_right_id" style='font-family: "Sunflower"; text-align: left; padding-left:30px;'><?=$userid?></th>
                            </table>

                            <table class="tabless">
                                <th class="th_left" width="200"><h4 style='color: rgba(220, 220, 220, 0.766); text-align:center; font-family: "Sunflower";text-shadow: -2px 0 #000, 0 2px #000, 2px 0 #000, 0 -2px #000;'>비밀 번호</h4></td>
                                <th class="th_right"><input class="inputs" type="password" name="pass" style="color:wheat;"></th>
                            </table>
                            <table class="tabless">
                                <th class="th_left" width="200"><h4 style='color: rgba(220, 220, 220, 0.766); text-align:center; font-family: "Sunflower";text-shadow: -2px 0 #000, 0 2px #000, 2px 0 #000, 0 -2px #000;'>비밀번호 확인</h4></td>
                                <th class="th_right"><input class="inputs" type="password" name="pass_confirm" style="color:wheat;"></th>
                            </table>
                            <table class="tabless">
                                <th class="th_left" width="200"><h4 style='color: rgba(220, 220, 220, 0.766); text-align:center; font-family: "Sunflower";text-shadow: -2px 0 #000, 0 2px #000, 2px 0 #000, 0 -2px #000;'>이 메 일</h4></td>
                                <th class="th_right" style='font-family: "Sunflower";'> <input class="inputs" type="text" name="email1" style="color:wheat;">
                                        @
                                        <input class="inputs" type="text" name="email2" style="color:wheat;">
                                </th>
                            </table>
                        </form>
                        <div class="areas2">
                            <button class="button_logout" onclick="location.href='logout.php' ">LOGOUT</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <?php include "footer.php";?>
        </footer>
	</body>
</html>