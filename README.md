# PHPConnectMySQL
Practice PHP Connect MySQL in MAMP


# create table

create table NumToString(num int(2),string varchar(4));
create table main(id int(11),string varchar(80));

# select

select name from main where 
SUBSTR(name, 1, 1) in (select string from NumToString where num=6) and 
SUBSTR(name, 2, 1) in (select string from NumToString where num=8) and 
1=1

# insert

insert  maintable (id,name,num,isdel,gendate) values(3,'OTTOR','',0,now())

# rename

RENAME TABLE 'maintable' TO 'main';
RENAME TABLE maintable TO main;
