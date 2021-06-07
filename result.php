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
                font-family: "Sunflower", sans-serif;
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
                width : 80%; 
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
    	    <?php
                include "header.php";
                ini_set('display_errors', '0'); //Error 무시
            ?>
            
        </header>
	    <section>
            <?php
                require 'vendor/autoload.php';
                $url = $_POST["char_url"]; 
                    
                $send = [
                    'json' =>[
                        "payload" => $_POST["char_url"] 
                    ]
                ];
                $client = new GuzzleHttp\Client();

                $res = $client->request('post', 'http://tumbalong.c11.kr/get-result/details', 
                    $send
                );
                
                $call = $res->getBody()->getContents();
                //$num = preg_replace("/[^0-9]*/s", "", $call);
                $num = preg_replace('/[^\-\.\d]+/', ',', $call);
                if(strpos($call, "ok") !== false){
                    $check_result = "정상사이트";
                }
                else{
                    $check_result = "피싱사이트";
                }
                
                $result = explode(',',$num,12);
            ?>

            <div class = "area">
                <div class = "area_area">
                        <h3 style='color : rgba(0, 0, 0, 0.451); text-shadow: -2px 0 #f5f5f5, 0 2px #f5f5f5, 2px 0 #f5f5f5, 0 -2px #f5f5f5;'>검사 결과</h3>
                        <table class="tables01">
                            <colgroup> <!--table 너비를 조정-->
                                <col width="40%" />
                                <col width="60%" />
                            </colgroup>
                            <tr>
                                <td><h3 style="color: rgba(245, 245, 245, 0.851);">검색한 URL 정보</h3></td>
                                <td><h4 style="color: rgba(245, 245, 245, 0.851);"><?=$url?></h4></td> <!--examine.php에서 검색한 URL 문자열 출력-->
                            </tr>
                            <tr>
                                <td><h3 style="color: rgba(245, 245, 245, 0.851);">종합 진단 결과</h3></td>
                                <?php 
                                    if($check_result == "정상사이트"){ 
                                        echo "<td><h3 style='color : rgb(51,255,51,0.724);'>정상 사이트</h3></td>";
                                    }
                                    if($check_result == "피싱사이트") {
                                        echo "<td><h3 style='color : rgb(255,51,51,0.724);'>피싱 사이트</h3></td>";
                                    }
                                ?>
                            </tr>
                        </table>
                        <table class="tables02">
                            <colgroup> <!--table 너비를 조정-->
                                <col width="80%" />
                                <col width="20%" />
                            </colgroup>
                            <th style='border-bottom : 1px solid #444444;'>
                                <h3 style='color : black; text-shadow: -1px 0 #f5f5f5, 0 1px #f5f5f5, 1px 0 #f5f5f5, 0 -1px #f5f5f5;'>상세 검사 항목</h3>
                            </th>
                            <th style='border-bottom : 1px solid #444444;'>
                                <h3 style='color : black; text-shadow: -1px 0 #f5f5f5, 0 1px #f5f5f5, 1px 0 #f5f5f5, 0 -1px #f5f5f5;'>결과</h3>
                            </th>
                            <tr>
                            <tr>
                                <td><h4>URL IP주소 포함에 따른 검사결과</h4></td>
                                <?php
                                    if($result[1] == 1){
                                        echo "<td><h4 style='color : rgb(51,255,51,0.724);'>안전</h4></td>";
                                    }
                                    if($result[1] == 0){
                                        echo "<td><h4 style='color : rgb(255,255,51,0.724);'>의심</h4></td>";
                                    }
                                    if($result[1] == -1) {
                                        echo "<td><h4 style='color : rgb(255,51,51,0.724);'>위험</h4></td>";
                                    }
                                ?>
                            </tr>
                            <tr>
                                <td><h4>URL 길이에 따른 검사결과</h4></td>
                                <?php
                                    if($result[2] == 1){
                                        echo "<td><h4 style='color : rgb(51,255,51,0.724);'>안전</h4></td>";
                                    }
                                    if($result[2] == 0){
                                        echo "<td><h4 style='color : rgb(255,255,51,0.724);'>의심</h4></td>";
                                    }
                                    if($result[2] == -1) {
                                        echo "<td><h4 style='color : rgb(255,51,51,0.724);'>위험</h4></td>";
                                    }
                                ?>
                            </tr>
                            <tr>
                                <td><h4>URL에 @가 포함되었는지에 따른 검사결과</h4></td>
                                <?php
                                    if($result[3] == 1){
                                        echo "<td><h4 style='color : rgb(51,255,51,0.724);'>안전</h4></td>";
                                    }
                                    if($result[3] == 0){
                                        echo "<td><h4 style='color : rgb(255,255,51,0.724);'>의심</h4></td>";
                                    }
                                    if($result[3] == -1) {
                                        echo "<td><h4 style='color : rgb(255,51,51,0.724);'>위험</h4></td>";
                                    }
                                ?>
                            </tr>
                            <tr>
                                <td><h4>URL에 -가 포함되었는지에 따른 검사결과</h4></td>
                                <?php
                                    if($result[4] == 1){
                                        echo "<td><h4 style='color : rgb(51,255,51,0.724);'>안전</h4></td>";
                                    }
                                    if($result[4] == 0){
                                        echo "<td><h4 style='color : rgb(255,255,51,0.724);'>의심</h4></td>";
                                    }
                                    if($result[4] == -1) {
                                        echo "<td><h4 style='color : rgb(255,51,51,0.724);'>위험</h4></td>";
                                    }
                                ?>
                            </tr>
                            <tr>
                                <td><h4>URL 내의 서브도메인 개수에 따른 검사결과</h4></td>
                                <?php
                                    if($result[5] == 1){
                                        echo "<td><h4 style='color : rgb(51,255,51,0.724);'>안전</h4></td>";
                                    }
                                    if($result[5] == 0){
                                        echo "<td><h4 style='color : rgb(255,255,51,0.724);'>의심</h4></td>";
                                    }
                                    if($result[5] == -1) {
                                        echo "<td><h4 style='color : rgb(255,51,51,0.724);'>위험</h4></td>";
                                    }
                                ?>
                            </tr>
                            <tr>
                                <td><h4>신뢰할 수 있는 ssl인증서에 따른 검사결과</h4></td>
                                <?php
                                    if($result[6] == 1){
                                        echo "<td><h4 style='color : rgb(51,255,51,0.724);'>안전</h4></td>";
                                    }
                                    if($result[6] == 0){
                                        echo "<td><h4 style='color : rgb(255,255,51,0.724);'>의심</h4></td>";
                                    }
                                    if($result[6] == -1) {
                                        echo "<td><h4 style='color : rgb(255,51,51,0.724);'>위험</h4></td>";
                                    }
                                ?>
                            </tr>
                            <tr>
                                <td><h4>도메인 유효기간에 따른 검사결과</h4></td>
                                <?php
                                    if($result[7] == 1){
                                        echo "<td><h4 style='color : rgb(51,255,51,0.724);'>안전</h4></td>";
                                    }
                                    if($result[7] == 0){
                                        echo "<td><h4 style='color : rgb(255,255,51,0.724);'>의심</h4></td>";
                                    }
                                    if($result[7] == -1) {
                                        echo "<td><h4 style='color : rgb(255,51,51,0.724);'>위험</h4></td>";
                                    }
                                ?>
                            </tr>
                            <tr>
                                <td><h4>http:// 이후 //가 나오는지에 따른 검사결과</h4></td>
                                <?php
                                    if($result[8] == 1){
                                        echo "<td><h4 style='color : rgb(51,255,51,0.724);'>안전</h4></td>";
                                    }
                                    if($result[8] == 0){
                                        echo "<td><h4 style='color : rgb(255,255,51,0.724);'>의심</h4></td>";
                                    }
                                    if($result[8] == -1) {
                                        echo "<td><h4 style='color : rgb(255,51,51,0.724);'>위험</h4></td>";
                                    }
                                ?>
                            </tr>
                            <tr>
                                <td><h4>비정상 포트에 따른 검사결과</h4></td>
                                <?php
                                    if($result[9] == 1){
                                        echo "<td><h4 style='color : rgb(51,255,51,0.724);'>안전</h4></td>";
                                    }
                                    if($result[9] == 0){
                                        echo "<td><h4 style='color : rgb(255,255,51,0.724);'>의심</h4></td>";
                                    }
                                    if($result[9] == -1) {
                                        echo "<td><h4 style='color : rgb(255,51,51,0.724);'>위험</h4></td>";
                                    }
                                ?>
                            </tr>
                            <tr>
                                <td><h4>트래픽 확인에 따른 검사결과</h4></td>
                                <?php
                                    if($result[10] == 1){
                                        echo "<td><h4 style='color : rgb(51,255,51,0.724);'>안전</h4></td>";
                                    }
                                    if($result[10] == 0){
                                        echo "<td><h4 style='color : rgb(255,255,51,0.724);'>의심</h4></td>";
                                    }
                                    if($result[10] == -1) {
                                        echo "<td><h4 style='color : rgb(255,51,51,0.724);'>위험</h4></td>";
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
