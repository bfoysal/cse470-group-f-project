<?PHP 
$mysqli = new mysqli("localhost", "root", "");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo 'Database has been connected... <br> Now installing...';
$sql = "drop database if exists hotel;  
create database hotel;
use hotel;
create table customer (cust_id int not null auto_increment, first_name varchar(20), last_name varchar(20), cust_email varchar (30), gender varchar(10), address varchar(30), phone_no varchar(10), credit_card int(16), password varchar(20), primary key(cust_id));

create table review (rev_id int not null auto_increment, cust_name varchar (40), cust_email varchar (30) not null, comments varchar(100), rating int not null, primary key (rev_id));

create table room_price (room_price_id int not null auto_increment, room_type varchar (20), room_price int, primary key (room_price_id));

create table packages (pack_no int not null auto_increment, pack_type varchar(20), room_type varchar(20), price int not null, cust_id int not null, primary key (pack_no, pack_type), foreign key (cust_id) references customer(cust_id));

create table rooms (room_no int not null, type varchar(20), check_in varchar(20), check_out varchar(20), status varchar(20), pack_no int, cust_id int, primary key (room_no), foreign key (cust_id) references customer(cust_id), foreign key (pack_no) references packages(pack_no));

create table employee (emp_id int not null auto_increment, first_name varchar(20), last_name varchar(20), email varchar (30), emp_type varchar(20), gender varchar(6), salary int not null, phone int not null, password varchar(20), emp_pic varchar(100), primary key(emp_id));

create table food(food_id int not null auto_increment, food_name varchar(30), type varchar(10), food_price int not null, primary key (food_id));

create table order_index(order_id int not null auto_increment, cust_id int not null, food_id int not null, primary key(order_id), foreign key(cust_id) references customer(cust_id), foreign key(food_id) references food(food_id));

create table bill(bill_no int not null auto_increment, date varchar(20), amount int not null, cust_id int not null, primary key (bill_no), foreign key (cust_id) references customer(cust_id));

create table facilities(fac_id int not null auto_increment, type varchar(50), rate int not null, cust_id int, primary key (fac_id), foreign key(cust_id) references customer(cust_id));

create table facilities_index(fac_index_id int not null auto_increment, cust_id int not null, fac_id int not null, primary key(fac_index_id), foreign key(cust_id) references customer(cust_id), foreign key(fac_id) references facilities(fac_id));

create table notification(not_id int not null auto_increment, not_type varchar(50), cust_id int, descr varchar(200), primary key (not_id), foreign key(cust_id) references customer(cust_id));

insert into customer values (null,'Adam','Smith', 'adam.smith@gmail.com', 'male','Mirpur','12997', '1111111111111111','password');
insert into customer values (null,'Lady','Gaga', 'lady.gaga@gmail.com', 'female','Fokirapul','12788', '2222222222222222','password');
insert into customer values (null,'Nicki','Minaj', 'nicki.minaj@gmail.com', 'female','Hatirzill','98756', '33','password');
insert into customer values (null,'Justin','Beiber', 'justin.beiber@gmail.com', 'male','Khamarbari','92874', '55','password');
insert into customer values (null,'Roger','Federer', 'roger.federer@gmail.com', 'male','Banani','97322', '6666','password');
insert into customer values (null,'Novak','Djokovic', 'novak.djokovic@gmail.com', 'male','Gulshan','92479', '777','password');

insert into review values (null, 'farhan', 'farhan@yahoo.com', 'great','5');
insert into review values (null, 'shahrin', 'shahrin@yahoo.com', 'bad','1');

insert into room_price values (null, 'single', '400');
insert into room_price values (null, 'double', '700');
insert into room_price values (null, 'triple', '1000');

insert into packages values (null,'eid','single','40000','1');
insert into packages values (null,'summer','double','45000','2');
insert into packages values (null,'honeymoon','single','60000','3');
insert into packages values (null,'executive','single','50000','4');
insert into packages values (null,'anniversary','triple','35000','5');

insert into rooms values (101,'single','','','filled', null, null);
insert into rooms values (102,'single','','','booked', null, null);
insert into rooms values (103,'single','','','vacant', null, null);
insert into rooms values (104,'single','','','vacant', null, null);
insert into rooms values (105,'single','','','vacant', null, null);
insert into rooms values (201,'double','','','filled', null, null);
insert into rooms values (202,'double','','','vacant', null, null);
insert into rooms values (203,'double','','','vacant', null, null);
insert into rooms values (204,'double','','','vacant', null, null);
insert into rooms values (205,'double','','','vacant', null, null);
insert into rooms values (301,'triple','','','filled', null, null);
insert into rooms values (302,'triple','','','vacant', null, null);
insert into rooms values (303,'triple','','','vacant', null, null);
insert into rooms values (304,'triple','','','vacant', null, null);
insert into rooms values (305,'triple','','','vacant', null, null);

insert into employee values (null,'Super','Admin','abu.foysal07@gmail.com','Admin','male','','','admin','default.jpg');
insert into employee values (null,'Raju','Ahmed','raju@gmail.com','Manager','male','60000','20397','password','default.jpg');
insert into employee values (null,'Nantu','Sorkar','nantu@gmail.com','Laundry','male','10000','29187','password','default.jpg');
insert into employee values (null,'Shahrin','Manzur','shahrin@gmail.com','Room Service','female','9500','12893','password','default.jpg');
insert into employee values (null,'Shibli','Hosen','shibli@gmail.com','Janitor','male','5000','21871','password','default.jpg');
insert into employee values (null,'Rita','Akhter','rita@gmail.com','Room Service','female','9500','28327','password','default.jpg');

insert into food values (null,'Happy Morning','breakfast','2000');
insert into food values (null,'Breakfast Delight','breakfast','3500');
insert into food values (null,'Sea Food Delight','lunch','4500');
insert into food values (null,'Kashmiri Palate','dinner','4000');
insert into food values (null,'Dhakaiya Palate','dinner','4500');

insert into facilities values(null,'Spa','2500', null);
insert into facilities values(null,'Transport','3000', null);
insert into facilities values(null,'Pool','2000', null);
insert into facilities values(null,'Gym','1500', null);
insert into facilities values(null,'Laundry','1000', null);
insert into facilities values(null,'Newspaper','500', null);

insert into notification values(null, 'booking', '1', 'A new booking is made, verify it!');
insert into notification values(null, 'booking', '2', 'A new booking is made, verify it!');";
		   
if (!$mysqli->multi_query($sql)) {
    echo "Multi query failed: (" . $mysqli->errno . ") " . $mysqli->error;
}

do {
    if ($res = $mysqli->store_result()) {
        var_dump($res->fetch_all(MYSQLI_ASSOC));
        $res->free();
    }
} while ($mysqli->more_results() && $mysqli->next_result());
echo"<br>Completed!";
?>
