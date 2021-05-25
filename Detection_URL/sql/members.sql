create table members (
    num int not null auto_increment,
    id char(15) not null,
    pass char(15) not null,
    email char(80),
    regist_day char(20),
    primary key(num)
);

INSERT INTO `members` (`num`, `id`, `pass`, `email`, `regist_day`) VALUES (NULL, 'jongtae', '1234', '20160720@gm.hannam.ac.kr', '2021-05-24 (10:00)');
INSERT INTO `members` (`num`, `id`, `pass`, `email`, `regist_day`) VALUES (NULL, 'quenpyo', '6789', 'visualappclass@gmail.com', '2021-05-24 (10:00)');
