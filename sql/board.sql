create table board (
   num int not null auto_increment,
   id char(15) not null,
   subject char(200) not null,
   content text not null,        
   regist_day char(20) not null,
   hit int not null,
   primary key(num)
);


INSERT INTO `board` (`num`, `id`, `subject`, `content`, `regist_day`, `hit`) VALUES (NULL, 'jongtae', 'Naver의 URL을 검사하였고, 그에 대한 결과입니다.', '2021학년도 1학기 웹프로그래밍 수업의 기말 프로젝트, 악성 URL 멈춰!를 제작 및 개발한 이종태학생입니다. Naver 홈페이지의 올바른 공식적 주소는 www.naver.com 입니다!', '2021-05-24 (13:00)', '2');
INSERT INTO `board` (`num`, `id`, `subject`, `content`, `regist_day`, `hit`) VALUES (NULL, 'quenpyo', 'Youtube의 URL을 검사하였고, 그에 대한 결과입니다.', '2021학년도 1학기 웹프로그래밍 수업의 기말 프로젝트, 악성 URL 멈춰!를 제작 및 개발한 박근표학생입니다. Youtube 홈페이지의 올바른 공식적 주소는 www.youtube.com 입니다!', '2021-05-24 (13:00)', '1');
INSERT INTO `board` (`num`, `id`, `subject`, `content`, `regist_day`, `hit`) VALUES (NULL, 'test01', '악성 URL 검출 사이트의 회원정보 수정관련 문의입니다.', '현재 회원가입 정보 수정을 하는데 문제가 생겨서 처리가 되지 않았습니다. 이에대한 수정 및 검토 부탁드립니다.', '2021-05-24 (13:00)', '3');

