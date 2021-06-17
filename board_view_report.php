<!DOCTYPE html>
<html>
	<head> 
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="./css/common.css">
		<link rel="stylesheet" type="text/css" href="./css/board.css">
		<style>
			.area_view {
				width : 80%;
				height: 80%;
				margin: 20px;
				border-top: 3px solid #444444;
				border-color : rgba(209, 208, 208, 0.147);
				color: #fff;
				margin-left : auto; 
                margin-right : auto;
			}	
			.area_view_content {
				width: 70%;
				margin: 20px;
				border: 3px solid #444444;
				border-color : rgba(209, 208, 208, 0.08);
                border-radius : 10px;
				color: #fff;
				margin-left : auto; 
                margin-right : auto;
				margin-top : 30px;
			}	
			.area_view_content li{
				text-align : left;
			}
			li {
				list-style : none;
			}
			.col1 {
				color : rgb(153, 153, 204);
			}
			.col2 {
				color : rgb(204, 255, 255);
			}
			span {
				background-color : #a1468600;
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
						<h2 style='color : rgba(161, 202, 67, 0.664); text-align:center;'>신고 내용 확인</h2>
			<?php
				$num  = $_GET["num"];
				$page  = $_GET["page"];

				$con = mysqli_connect("localhost", "user1", "12345", "sample");
				$sql = "select * from board where num=$num";
				$result = mysqli_query($con, $sql);

				$row = mysqli_fetch_array($result);
				$id      = $row["id"];
				$regist_day = $row["regist_day"];
				$subject    = $row["subject"];
				$content    = $row["content"];
				$hit          = $row["hit"];

				$content = str_replace(" ", "&nbsp;", $content);
				$content = str_replace("\n", "<br>", $content);

				$new_hit = $hit + 1;
				$sql = "update board set hit=$new_hit where num=$num";   
				mysqli_query($con, $sql);
			?>		
					<div class="area_view">
						<ul id="view_content">
							<li style='font-family: "Sunflower", sans-serif; font-size: 30px;'>
								<span class="col1"><b>제목 :</b> <?=$subject?></span>
							</li>
							<li style='font-family: "Sunflower", sans-serif; font-size: 25px;'>
								<span class="col2"><b>작성자 :</b> <?=$id?><b>&nbsp;&nbsp;&nbsp;&nbsp;작성날짜 :</b> <?=$regist_day?></span>
							</li>
							<div class="area_view_content">
								<li style='font-family: "Sunflower", sans-serif; font-size: 25px;'>
									<?=$content?>
								</li>		
							</div>
						</ul>
					</div>
				</div> 
			</div>
		</section> 
		<footer>
			<?php include "footer.php";?>
		</footer>
	</body>
</html>
