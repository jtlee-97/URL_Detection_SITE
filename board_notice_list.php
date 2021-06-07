<!--
	[DB 직접 기입하기]
	INSERT INTO `notice` (`num`, `id`, `subject`, `content`, `regist_day`, `hit`) VALUES (NULL, '', '', '2021-05-10 (11:00)', '0');

-->

<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./css/board.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Gugi&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Sunflower:wght@300&display=swap" rel="stylesheet">
        <style>
        <style>
            th {
                font-family: "Sunflower", sans-serif;
            }
            li {
                list-style:none;
            }
            #page_num {	text-align: center;	margin: 30px 0 }
            #page_num li { display: inline; }
            a {
                color : white;
                font-size : 20px;
                background-color : #a1468600;
                font-family: "Sunflower", sans-serif;
            }
            th{
                text-overflow: ellipsis;
                overflow: hidden;
            }
            table {
                table-layout: fixed;
            }
        </style>
    </head>

    <body class="index_body">
        <header>
            <?php include "header.php";?>
        </header>
        
        <section>
            <div class="area">
                <div class="area_area">
                    <h3 style='color : rgba(161, 202, 67, 0.664); text-align:center;'>공지 사항</h3>
                    <p></p>
                    <p></p>
                    <table style='border: 3px solid #444444; border-color: rgba(200, 200, 200, 0.7); border-radius : 10px;'>
                        <colgroup> <!--table 너비를 조정-->
                            <col width="10%" />
                            <col width="45%" />
                            <col width="15%" />
                            <col width="20%" />
                            <col width="10%" />
                        </colgroup>
                        
                        <th style='font-size: 23px; text-align:center; font-family: "Sunflower";text-shadow: -2px 0 #000, 0 2px #000, 2px 0 #000, 0 -2px #000;'>번호</th>
                        <th style='font-size: 23px; text-align:center; font-family: "Sunflower";text-shadow: -2px 0 #000, 0 2px #000, 2px 0 #000, 0 -2px #000;'>제목</th>
                        <th style='font-size: 23px; text-align:center; font-family: "Sunflower";text-shadow: -2px 0 #000, 0 2px #000, 2px 0 #000, 0 -2px #000;'>글쓴이</th>
                        <th style='font-size: 23px; text-align:center; font-family: "Sunflower";text-shadow: -2px 0 #000, 0 2px #000, 2px 0 #000, 0 -2px #000;'>등록일</th>
                        <th style='font-size: 23px; text-align:center; font-family: "Sunflower";text-shadow: -2px 0 #000, 0 2px #000, 2px 0 #000, 0 -2px #000;'>조회</th>
                    </table>

                    <?php
                        if (isset($_GET["page"]))
                            $page = $_GET["page"];
                        else
                            $page = 1;

                        $con = mysqli_connect("localhost", "user1", "12345", "sample");
                        $sql = "select * from notice order by num desc";
                        $result = mysqli_query($con, $sql);
                        $total_record = mysqli_num_rows($result); // 전체 글 수

                        $scale = 4;

                        // 전체 페이지 수($total_page) 계산 
                        if ($total_record % $scale == 0)     
                            $total_page = floor($total_record/$scale);      
                        else
                            $total_page = floor($total_record/$scale) + 1; 
                    
                        // 표시할 페이지($page)에 따라 $start 계산  
                        $start = ($page - 1) * $scale;      

                        $number = $total_record - $start;

                    for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)
                    {
                        mysqli_data_seek($result, $i);
                        // 가져올 레코드로 위치(포인터) 이동
                        $row = mysqli_fetch_array($result);
                        // 하나의 레코드 가져오기
                        $num         = $row["num"];
                        $id          = $row["id"];
                        $subject     = $row["subject"];
                        $regist_day  = $row["regist_day"];
                        $hit         = $row["hit"];
                    ?>
                                    <table style='border-bottom: 2px solid #444444; border-color: rgba(200, 200, 200, 0.4); border-radius : 10px;'>
                                        <colgroup> <!--table 너비를 조정-->
                                            <col width="10%" />
                                            <col width="40%" />
                                            <col width="20%" />
                                            <col width="20%" />
                                            <col width="10%" />
                                        </colgroup>
                                        
                                        <th style='border-right: 2px solid #444444; border-left: 2px solid #444444; border-color: rgba(200, 200, 200, 0.25);'><?=$number?></th>
                                        <th style='border-right: 2px solid #444444; border-color: rgba(200, 200, 200, 0.25);'><a style='font-family: "Sunflower", sans-serif; text-decoration: none;' href="board_view_notice.php?num=<?=$num?>&page=<?=$page?>"><?=$subject?></a></th>
                                        <th style='border-right: 2px solid #444444; border-color: rgba(200, 200, 200, 0.25);'><?=$id?></th>
                                        <th style='border-right: 2px solid #444444; border-color: rgba(200, 200, 200, 0.25);'><?=$regist_day?></th>
                                        <th style='border-right: 2px solid #444444; border-color: rgba(200, 200, 200, 0.25);'><?=$hit?></th>
                                    </table>
                    <?php
                        $number--;
                    }
                    mysqli_close($con);

                    ?>
                                </ul>
                                <ul id="page_num"> 	
                    <?php
                        if ($total_page>=2 && $page >= 2)	
                        {
                            $new_page = $page-1;
                            echo "<li><a href='board_notice_list.php?page=$new_page'>◀ 이전</a> </li>";
                        }		
                        else 
                            echo "<li>&nbsp;</li>";

                        // 게시판 목록 하단에 페이지 링크 번호 출력
                        for ($i=1; $i<=$total_page; $i++)
                        {
                            if ($page == $i)     // 현재 페이지 번호 링크 안함
                            {
                                echo "<li><b> $i </b></li>";
                            }
                            else
                            {
                                echo "<li><a href='board_notice_list.php?page=$i'> $i </a><li>";
                            }
                        }
                        if ($total_page>=2 && $page != $total_page)		
                        {
                            $new_page = $page+1;	
                            echo "<li> <a href='board_notice_list.php?page=$new_page'>다음 ▶</a> </li>";
                        }
                        else 
                            echo "<li>&nbsp;</li>";
                    ?>
                                </ul> <!-- page -->	   

                                <!--버튼 만들기 (목록 / 글쓰긴데 안해도 될듯) : 한다면 뒤로가기 정도?-->
                                
                </div>
            </div>
        </section>

        <footer>
    	    <?php include "footer.php";?>
        </footer>
    </body>
</html>