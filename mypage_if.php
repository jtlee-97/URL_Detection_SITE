<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./css/mypage_if.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Gugi&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Sunflower:wght@300&display=swap" rel="stylesheet">
        <style>
            .tds {
                text-align: center;
                /*border-right : 1px solid #444444;*/
            }
            input {
                font-family: "Asap", sans-serif;
                display: block;
                border-radius: 5px;
                font-size: 16px;
                font-family: 'Roboto', sans-serif;
                background: black;
                color: wheat;
                width: 100%;
                border: 3px solid whitesmoke;
                border-color: whitesmoke;
                padding: 10px 10px;
                margin: 15px -10px;
            }
            input:hover {
                background-color: rgba(255, 255, 255, 0);
                box-shadow: 0px 15px 20px rgba(46, 89, 229, 0.521);
                transform: translateY(-7px);
            }
        </style>
    </head>

    <body> 
        <form class="login" method="post" action="login.php">
            <table>
                <tr>
                    <td class="tds"><h3 style='text-align:center; font-family: "Sunflower";text-shadow: -2px 0 #000, 0 2px #000, 2px 0 #000, 0 -2px #000;'>로그인</h3></td>
                    <td><input type="text" name="id" placeholder="Username"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="tds"><button class="buttoniflogin" onclick="check_input()">LOGIN</button></td>
                    <td><input type="password" name="pass" placeholder="Password"></td>
                </tr>
            </table>
        </form>

        <form class="signUp" method="post" action="member_insert.php">
            <table>
                <tr>
                    <td class="tds"><h3 style='text-align:center; font-family: "Sunflower";text-shadow: -2px 0 #000, 0 2px #000, 2px 0 #000, 0 -2px #000;'>회원가입</h3></td>
                    <td><input type="text" name="id" placeholder="ID"></td>
                </tr>
                <tr>
                    <td class="tds"><h4 style='color: rgba(187, 180, 180, 0.766); text-align:center; font-family: "Sunflower";text-shadow: -2px 0 #000, 0 2px #000, 2px 0 #000, 0 -2px #000;'>3가지 모두 기입</h4></td>
                    <td><input type="text" name="pass" placeholder="PassWord"></td>
                </tr>
                <tr>
                    <td class="tds"><button class="buttonifsignup">SIGN UP</button></td>
                    <td><input type="text" name="email" placeholder="Email"></td>
                </tr>
            </table>
        </form>
        
	</body>
</html>


