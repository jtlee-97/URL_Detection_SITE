create table notice (
   num int not null auto_increment,
   id char(15) not null,
   subject char(200) not null,
   content text not null,        
   regist_day char(20) not null,
   hit int not null,
   primary key(num)
);

INSERT INTO `notice` (`num`, `id`, `subject`, `content`, `regist_day`, `hit`) VALUES (NULL, 'jongtae', '개발자 이종태입니다.', '2021학년도 1학기 웹프로그래밍 수업의 기말 프로젝트, 악성 URL 멈춰!를 제작 및 개발한 이종태학생입니다.', '2021-05-24 (12:00)', '0');
INSERT INTO `notice` (`num`, `id`, `subject`, `content`, `regist_day`, `hit`) VALUES (NULL, 'quenpyo', '개발자 박근표입니다.', '2021학년도 1학기 웹프로그래밍 수업의 기말 프로젝트, 악성 URL 멈춰!를 제작 및 개발한 박근표학생입니다.', '2021-05-24 (12:00)', '0');
INSERT INTO `notice` (`num`, `id`, `subject`, `content`, `regist_day`, `hit`) VALUES (NULL, '관리자', '악성 URL 검출사이트 "악성 URL 멈춰! 입니다."', '2021학년도 1학기 웹프로그래밍 수업의 기말 프로젝트, 악성 URL 멈춰!는 악성 URL을 직접 접속하지 않고, 해당 URL을 머신러닝을 통해 분석된 데이터를 기반으로 악성 URL인지 감지하여 위험정보를 알려주는 악성 URL 검출사이트입니다. 이용해주셔서 감사합니다!', '2021-05-24 (12:00)', '0');
