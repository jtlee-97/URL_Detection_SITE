<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./css/mypage_else.css">
        <style>
            .tds{
                text-align: center;
                border-right : 1px solid #444444;
            }
            .areas {
                height: 80%;
                margin: 20px;
                color: white;
                background-color : rgb(83, 30, 30);
                box-shadow: 0px 7px 10px rgba(229, 211, 46, 0.4);
            }
        </style>
    </head>

    <body>
        <!--DB : members / Userid에 해당하는 정보 가져오기-->
        <?php    
            $con = mysqli_connect("localhost", "user1", "12345", "sample"); //db 접속 명령
            $sql    = "select * from members where id='$userid'"; //db Select 명령 저장 (id 해당 정보)
            $result = mysqli_query($con, $sql); //접속 및 명령을 query함수를 통해 결과를 저장
            $row    = mysqli_fetch_array($result); //결과값을 인자, 배열형태로 한개씩 데이터 잘라 저장

            $pass = $row["pass"]; //데이터 결과값 배열 중 pass에 해당하는 데이터를 저장
        
            $email = explode("@", $row["email"]); //explode : 특정 문자열 기준으로 나눔
            $email1 = $email[0]; // 이메일 @ 기준으로 나눈 앞부분
            $email2 = $email[1]; // 이메일 @ 기준으로 나눈 뒷부분

            mysqli_close($con); // SQL 서버 닫기
        ?>

        <section> 
            <div class = "areas">
                <div class = "area_area">
                    <form name="id_form" method="post" action="member_modify_form.php">
                        <input type="hidden" name="userid" value="<?php echo $userid;?>"/>
                        <table>
                            <tr>
                                <td class="tds"><h3>회원정보</h3> </td>
                                <td>아이디</td>
                                <td><?=$userid?></td>
                            </tr>
                            <tr>
                                <td class="tds"><button class="button_change" type="submit">변경하기</button></td>
                                <td>이메일</td>
                                <td><?=$email1?>@<?=$email2?></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>    
            <div class="wrap">
                <button class="button_logout" onclick="location.href='logout.php'">LOGOUT</button>
            </div>
        </section>
	</body>
</html>