<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./css/index.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Gugi&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Sunflower:wght@300&display=swap" rel="stylesheet">
        <style>
            h2{
                font-family: 'Gugi', cursive;
            }
            p {
                font-family : 'Nanum Gothic Coding', monospace;
            }
            .tables {
                border : 3px solid #444444;
                border-color : rgba(209, 208, 208, 0.247);
                border-radius : 10px;
                margin-left : auto; 
                margin-right : auto;
                margin-top : 20px;
                width : 80%; 
                text-align : left;
            }
            .tables li{
                text-align : left;
                font-size : 17px;
            }
        </style>
    </head>

    <body>
        <section>
            <div class = "area">
                <div class = "area_area">
                    <!-- Main Contents 시작 -->
                    <h2 style='color : rgba(161, 202, 67, 0.664); text-align:center;'>악성 URL을 검색하여 안전하게 확인하세요</h2>
                    <p></p>
                    <p style="text-align:center;">
                        악성 URL 검색 홈페이지인 LOGO는 악성 URL을 직접 접속하지 않고 머신러닝을 통해 분석된 데이터를 기반으로 악성 URL인지 감지하여 위험정보를 알려줍니다.
                    </p>
                    <p></p>
                    <table class='tables'>
                        <tr style='text-align:center;'>
                            <td colspan='2'><h3 style='color : rgba(192, 202, 165, 0.864); border-bottom: thick double rgba(209, 208, 208, 0.247);'>홈페이지 사용방법</h3></td>
                            <!--<td>1</td>-->
                        </tr>
                        <colgroup> <!--table 너비를 조정-->
                                <col width="25%" />
                                <col width="75%" />
                        </colgroup>
                        <tr>
                            <td style='font-family: "Shadows Into Light", cursive; font-size: 40px; text-align: center; border-right: 3px solid #444444; border-color: rgba(209, 208, 208, 0.247);'>HOME</td>
                            <td style='font-family: "Sunflower", sans-serif; font-size: 20px;'>Home 메뉴에서는 홈페이지의 사용방법과 정보를 알 수 있습니다.</td>
                        </tr>
                        <tr>
                            <td style='font-family: "Shadows Into Light", cursive; font-size: 40px; text-align: center; border-right: 3px solid #444444; border-color: rgba(209, 208, 208, 0.247);'>Search</td>
                            <td style='font-family: "Sunflower", sans-serif; font-size: 20px;'>Search 메뉴에서는 주 기능인 URL 검사를 진행할 수 있습니다.</td>
                        </tr>
                        <tr>
                            <td style='border-right: 3px solid #444444; border-color: rgba(209, 208, 208, 0.247);'></td>
                            <td style='color:rgba(256, 256, 256, 0.747);'>
                                <li> 검색창에 검사하고 싶은 URL을 입력하세요.</li>
                                <li> 우측의 검사하기 버튼을 누르거나 키보드의 ENTER 키를 통해 검사결과를 확인하세요.</li>
                                <li> 검사 창에서 전반적인 검사 결과와 검사에 사용된 상세 검사요소들에 대한 결과를 확인해보세요.</li>
                            </td>
                        </tr>
                        <tr>
                            <td style='font-family: "Shadows Into Light", cursive; font-size: 40px; text-align: center; border-right: 3px solid #444444; border-color: rgba(209, 208, 208, 0.247);'>Board</td>
                            <td style='font-family: "Sunflower", sans-serif; font-size: 20px;'>공지사항과 신고접수 게시판을 이용할 수 있습니다. 게시물 작성에는 로그인이 필요로 합니다.</td>
                        </tr>
                        <tr>
                            <td style='border-right: 3px solid #444444; border-color: rgba(209, 208, 208, 0.247);'></td>
                            <td style='color:rgba(256, 256, 256, 0.747);'>
                                <li> 공지사항 / 신고 게시판 / 신고하기 총 3개로 구성되어 있습니다.</li>
                                <li> 공지사항에서는 개발자 및 관리자의 홈페이지 관련 공지를 확인하실 수 있습니다.</li>
                                <li> 신고 게시판에서는 다른 유저들이 URL이나 기타 홈페이지에 대한 버그에 대한 의견을 주실 수 있습니다.</li>
                                <li> 신고하기는 직접 본인이 신고 게시판에 올리고 싶은 글을 올릴 수 있습니다. 로그인 후 사용해주세요.</li>
                            </td>
                        </tr>
                        <tr>
                            <td style='font-family: "Shadows Into Light", cursive; font-size: 40px; text-align: center; border-right: 3px solid #444444; border-color: rgba(209, 208, 208, 0.247);'>MyPage</td>
                            <td style='font-family: "Sunflower", sans-serif; font-size: 20px;'>MyPage 메뉴에서는 나의 로그인 개인정보 및 회원가입 등 계정 정보에 대한 수정을 진행할 수 있습니다.</td>
                        </tr>
                        <tr>
                            <td style='border-right: 3px solid #444444; border-color: rgba(209, 208, 208, 0.247);'></td>
                            <td style='color:rgba(256, 256, 256, 0.747);'>
                                <li> 내 정보를 확인할 수 있는 마이페이지에서는 로그인 / 회원가입 / 정보수정이 가능합니다.</li>
                                <li> 로그인을 하지 않은 초기 화면은 로그인과 회원가입을 할 수 있는 화면이 나옵니다.</li>
                                <li> 로그인을 하면 개인정보를 수정할 수 있는 화면이 나오며, 수정을 진행할 수 있습니다.</li>
                            </td>
                        </tr>
                    </table>
                    <!-- Main Contents 종료 -->
                </div>
            </div>
        </section>
    </body>
</html>