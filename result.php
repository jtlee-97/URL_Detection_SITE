<!DOCTYPE html>
<html>
    <head> 
        <meta charset="utf-8">
        <title>FINAL_INDEX</title>
        <link rel="stylesheet" type="text/css" href="./css/index.css"> 
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Yeon+Sung&display=swap" rel="stylesheet">
        <style>
            @import url(//fonts.googleapis.com/earlyaccess/nanumpenscript.css);
            h3 {
                font-family: 'Nanum Pen Script', cursive;
            }
            h4 {
                margin-left : auto;
                margin-right : auto;
                font-family : 'Yeon Sung', cursive;
                font-size : 20px;
                text-align : center;
                text-shadow: 1px 2px 1px gray;
            }
            .tables01 {
                border : 3px solid #444444;
                border-color : gray;
                border-radius : 10px;
                margin-left : auto; 
                margin-right : auto;
                margin-top : 20px;
                width : 50%; 
            }
            .tables02 {
                border : 3px solid #444444;
                border-color : gray;
                border-radius : 10px;
                margin-left : auto; 
                margin-right : auto;
                margin-top : 20px;
                width : 80%; 
            }
        </style>

    </head>
    
    <body class="index_body"> 
	    <header>
    	    <?php include "header.php";?>
        </header>
	    <section>
            <?php
                // 여기에 각 항목별의 결과값을 배열 값으로 저장시킴.
                $result = array(1, -1, -1, 0, 1, 0, -1, 0, 1, -1);
                //examine.php에서 form으로 받아온 url 문자열
                $url = $_POST["char_url"]; 
            ?>

            <div class = "area">
                <div class = "area_area">
                        <h3>검사 결과</h3>
                        <table class="tables01">
                            <tr>
                                <td><h4>검색한 URL 정보</h4></td>
                                <td><h4><?=$url?></h4></td> <!--examine.php에서 검색한 URL 문자열 출력-->
                            </tr>
                            <tr>
                                <td><h4>종합 진단 결과</h4></td>
                                <?php //종합결과가 따로 받아오지 않으면 가져온 result로 판별하기위해 만든 파트
                                    $sum = 0;
                                    for($i=0; $i<10; $i++){
                                        $sum += $result[$i];
                                    }
                                    if($sum == 10){ 
                                        //임의로 모든 검사값이 다 1일때만 최종 정상이라서 10개 1인 $sum == 10으로 정의해둠
                                        echo "<td><h4 style='color : green;'>정상 사이트</h4></td>";
                                    }
                                    if($sum != 10) {
                                        echo "<td><h4 style='color : red;'>피싱 사이트</h4></td>";
                                    }
                                ?>
                            </tr>
                        </table>
                        <table class="tables02">
                            <colgroup> <!--table 너비를 조정-->
                                <col width="80%" />
                                <col width="20%" />
                            </colgroup>
                            <tr>
                                <td><h4>URL IP주소 포함에 따른 검사결과</h4></td>
                                <?php
                                    if($result[0] == 1){
                                        echo "<td><h4 style='color : green;'>안전</h4></td>";
                                    }
                                    if($result[0] == 0){
                                        echo "<td><h4 style='color : yellow;'>의심</h4></td>";
                                    }
                                    if($result[0] == -1) {
                                        echo "<td><h4 style='color : red;'>위험</h4></td>";
                                    }
                                ?>
                            </tr>
                            <tr>
                                <td><h4>URL 길이에 따른 검사결과</h4></td>
                                <?php
                                    if($result[1] == 1){
                                        echo "<td><h4 style='color : green;'>안전</h4></td>";
                                    }
                                    if($result[1] == 0){
                                        echo "<td><h4 style='color : yellow;'>의심</h4></td>";
                                    }
                                    if($result[1] == -1) {
                                        echo "<td><h4 style='color : red;'>위험</h4></td>";
                                    }
                                ?>
                            </tr>
                            <tr>
                                <td><h4>URL에 @가 포함되었는지에 따른 검사결과</h4></td>
                                <?php
                                    if($result[2] == 1){
                                        echo "<td><h4 style='color : green;'>안전</h4></td>";
                                    }
                                    if($result[2] == 0){
                                        echo "<td><h4 style='color : yellow;'>의심</h4></td>";
                                    }
                                    if($result[2] == -1) {
                                        echo "<td><h4 style='color : red;'>위험</h4></td>";
                                    }
                                ?>
                            </tr>
                            <tr>
                                <td><h4>URL에 -가 포함되었는지에 따른 검사결과</h4></td>
                                <?php
                                    if($result[3] == 1){
                                        echo "<td><h4 style='color : green;'>안전</h4></td>";
                                    }
                                    if($result[3] == 0){
                                        echo "<td><h4 style='color : yellow;'>의심</h4></td>";
                                    }
                                    if($result[3] == -1) {
                                        echo "<td><h4 style='color : red;'>위험</h4></td>";
                                    }
                                ?>
                            </tr>
                            <tr>
                                <td><h4>URL 내의 서브도메인 개수에 따른 검사결과</h4></td>
                                <?php
                                    if($result[4] == 1){
                                        echo "<td><h4 style='color : green;'>안전</h4></td>";
                                    }
                                    if($result[4] == 0){
                                        echo "<td><h4 style='color : yellow;'>의심</h4></td>";
                                    }
                                    if($result[4] == -1) {
                                        echo "<td><h4 style='color : red;'>위험</h4></td>";
                                    }
                                ?>
                            </tr>
                            <tr>
                                <td><h4>신뢰할 수 있는 ssl인증서에 따른 검사결과</h4></td>
                                <?php
                                    if($result[5] == 1){
                                        echo "<td><h4 style='color : green;'>안전</h4></td>";
                                    }
                                    if($result[5] == 0){
                                        echo "<td><h4 style='color : yellow;'>의심</h4></td>";
                                    }
                                    if($result[5] == -1) {
                                        echo "<td><h4 style='color : red;'>위험</h4></td>";
                                    }
                                ?>
                            </tr>
                            <tr>
                                <td><h4>도메인 유효기간에 따른 검사결과</h4></td>
                                <?php
                                    if($result[6] == 1){
                                        echo "<td><h4 style='color : green;'>안전</h4></td>";
                                    }
                                    if($result[6] == 0){
                                        echo "<td><h4 style='color : yellow;'>의심</h4></td>";
                                    }
                                    if($result[6] == -1) {
                                        echo "<td><h4 style='color : red;'>위험</h4></td>";
                                    }
                                ?>
                            </tr>
                            <tr>
                                <td><h4>http:// 이후 //가 나오는지에 따른 검사결과</h4></td>
                                <?php
                                    if($result[7] == 1){
                                        echo "<td><h4 style='color : green;'>안전</h4></td>";
                                    }
                                    if($result[7] == 0){
                                        echo "<td><h4 style='color : yellow;'>의심</h4></td>";
                                    }
                                    if($result[7] == -1) {
                                        echo "<td><h4 style='color : red;'>위험</h4></td>";
                                    }
                                ?>
                            </tr>
                            <tr>
                                <td><h4>비정상 포트에 따른 검사결과</h4></td>
                                <?php
                                    if($result[8] == 1){
                                        echo "<td><h4 style='color : green;'>안전</h4></td>";
                                    }
                                    if($result[8] == 0){
                                        echo "<td><h4 style='color : yellow;'>의심</h4></td>";
                                    }
                                    if($result[8] == -1) {
                                        echo "<td><h4 style='color : red;'>위험</h4></td>";
                                    }
                                ?>
                            </tr>
                            <tr>
                                <td><h4>트래픽 확인에 따른 검사결과</h4></td>
                                <?php
                                    if($result[9] == 1){
                                        echo "<td><h4 style='color : green;'>안전</h4></td>";
                                    }
                                    if($result[9] == 0){
                                        echo "<td><h4 style='color : yellow;'>의심</h4></td>";
                                    }
                                    if($result[9] == -1) {
                                        echo "<td><h4 style='color : red;'>위험</h4></td>";
                                    }
                                ?>
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
