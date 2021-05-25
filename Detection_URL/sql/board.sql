create table board (
   num int not null auto_increment,
   id char(15) not null,
   subject char(200) not null,
   content text not null,        
   regist_day char(20) not null,
   hit int not null,
   primary key(num)
);


INSERT INTO `board` (`num`, `id`, `subject`, `content`, `regist_day`, `hit`) VALUES (NULL, 'jongtae', 'Naver의 URL을 검사하였고, 그에 대한 결과입니다.', '2021학년도 1학기 웹프로그래밍 수업의 기말 프로젝트, 악성 URL 멈춰!를 제작 및 개발한 이종태학생입니다. Naver 홈페이지의 올바른 공식적 주소는 www.naver.com 입니다!', '2021-05-24 (13:00)', '0');
INSERT INTO `board` (`num`, `id`, `subject`, `content`, `regist_day`, `hit`) VALUES (NULL, 'quenpyo', 'Youtube의 URL을 검사하였고, 그에 대한 결과입니다.', '2021학년도 1학기 웹프로그래밍 수업의 기말 프로젝트, 악성 URL 멈춰!를 제작 및 개발한 박근표학생입니다. Youtube 홈페이지의 올바른 공식적 주소는 www.youtube.com 입니다!', '2021-05-24 (13:00)', '0');

