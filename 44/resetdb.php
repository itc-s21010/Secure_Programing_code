<?php
  header('Content-Type: text/html; charset=UTF-8');
  $db = new PDO("mysql:host=127.0.0.1;dbname=wasbook", "wasbook", "wasbook");
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $db->query("SET NAMES utf8");
  $sql = <<<EOS

drop table books;
drop table users;

CREATE TABLE books (
    id varchar(10),
    title character varying(250),
    author character varying(250),
    publisher character varying(250),
    date character varying(250),
    price integer,
    comment character varying(400)
);

CREATE TABLE users (
    id character varying(16),
    pwd character varying(16),
mail character varying(32),
    name character varying(32),
    addr character varying(64),
    tel character varying(16)
);

INSERT INTO books VALUES ('1001', '夏の夜の夢','Shakespeare', '青森書籍', '1979/01', 600, '');
INSERT INTO books VALUES ('1002', 'ハムレット','Shakespeare', '岩手書房', '1997/04', 1260, '');
INSERT INTO books VALUES ('1003', 'マクベス','Shakespeare', '山形出版', '2001/05', 1530, '');
INSERT INTO books VALUES ('1004', 'リア王','Shakespeare','秋田公論社', '2004/07', 1890, '');

INSERT INTO users VALUES ('yamada', 'pass1', 'yamada@example.jp', '山田太一', '神奈川県川崎市', '046-;
INSERT INTO users VALUES ('tanaka', 'pass1', 'takana@example.com', '山石京子', '東京都港区三田', '03-;
INSERT INTO users VALUES ('sato', 'password', 'sato@example.net', '佐藤一志', '神奈川県横浜市', '045-;

EOS;

  $db->query($sql);
?>
<body>
データベースをリセットしました
</body>

