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
                text-align: center;
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
                width: 70%;
                border-top: none;
                border-right: none;
                border-left: none;
                border-bottom: 1px solid gray;
            }
            .areas {
                height: 80%;
                width: 40%;
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
                    alert("??????????????? ???????????????!");    
                    document.member_form.pass.focus();
                    return;
                }

                if (!document.member_form.pass_confirm.value)
                {
                    alert("????????????????????? ???????????????!");    
                    document.member_form.pass_confirm.focus();
                    return;
                }

                if (!document.member_form.email.value)
                {
                    alert("????????? ????????? ???????????????!");    
                    document.member_form.email1.focus();
                    return;
                }

                if (document.member_form.pass.value != 
                        document.member_form.pass_confirm.value)
                {
                    alert("??????????????? ???????????? ????????????.\n?????? ????????? ?????????!");
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
                <h2 style='color : rgba(161, 202, 67, 0.664); text-align:center; font-size:60px;'>??????????????????</h2>
                <div class = "area_area">

                    <div class = "areas">
                        <form  name="member_form" method="post" action="member_modify.php">
                            <input type="hidden" name="id" value="<?php echo $userid;?>"/> <!--POST ???????????? userid ??? ??????-->
                            <table class="tabless">
                                <th class="th_header">
                                    <h3>???????????? ??????</h3> 
                                </th>
                                <th class="th_header"> 
                                    <button class="button_change" onclick="check_input_modify()">????????????</button>
                                </th>
                            </table>

                            <table class="tables">
                                <th class="th_left" width="200"><h4 style='color: rgba(220, 220, 220, 0.766); text-align:center; font-family: "Sunflower";text-shadow: -2px 0 #000, 0 2px #000, 2px 0 #000, 0 -2px #000;'>??? ??? ???</h4></td>
                                <th class="th_right_id" style='font-family: "Sunflower"; text-align: center;'><?=$userid?></th>
                            </table>

                            <table class="tabless">
                                <th class="th_left" width="200"><h4 style='color: rgba(220, 220, 220, 0.766); text-align:center; font-family: "Sunflower";text-shadow: -2px 0 #000, 0 2px #000, 2px 0 #000, 0 -2px #000;'>?????? ??????</h4></td>
                                <th class="th_right"><input class="inputs" type="password" name="pass" style="color:wheat;"></th>
                            </table>
                            <table class="tabless">
                                <th class="th_left" width="200"><h4 style='color: rgba(220, 220, 220, 0.766); text-align:center; font-family: "Sunflower";text-shadow: -2px 0 #000, 0 2px #000, 2px 0 #000, 0 -2px #000;'>???????????? ??????</h4></td>
                                <th class="th_right"><input class="inputs" type="password" name="pass_confirm" style="color:wheat;"></th>
                            </table>
                            <table class="tabless">
                                <th class="th_left" width="200"><h4 style='color: rgba(220, 220, 220, 0.766); text-align:center; font-family: "Sunflower";text-shadow: -2px 0 #000, 0 2px #000, 2px 0 #000, 0 -2px #000;'>??? ??? ???</h4></td>
                                <th class="th_right" style='font-family: "Sunflower";'> <input class="inputs" type="text" name="email" style="color:wheat;"></th>
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