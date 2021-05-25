<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./css/mypage_if.css">
    </head>

    <body>
        <form class="login" method="post" action="login.php">
            <h4>로그인</h4>
            <input type="text" name="id" placeholder="Username">
            <input type="password" name="pass" placeholder="Password">
            <div class="login_button_div">
                <button class="buttoniflogin" onclick="check_input()">LOGIN</button>
            </div>
        </form>
        <form class="signUp" method="post" action="member_insert.php">
            <h4>회원가입</h4>
            <input type="text" name="id" placeholder="ID">
            <input type="text" name="pass" placeholder="PassWord">
            <input type="text" name="email" placeholder="Email">
            <button class="buttonifsignup">SIGN UP</button>
        </form>
        </div>
	</body>
</html>


