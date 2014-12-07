<?PHP 
$mysqli = new mysqli("localhost", "root", "");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo 'Database has been connected... <br> Now installing...';
$sql = "drop database if exists hotel;  
create database hotel;
use hotel;
create table customer (cust_id int not null auto_increment, first_name varchar(20), last_name varchar(20), cust_email varchar (30), gender varchar(10), address varchar(30), phone_no varchar(10), credit_card varchar(16), password varchar(20), primary key(cust_id));

create table review (rev_id int not null auto_increment, cust_name varchar (40), cust_email varchar (30) not null, comments varchar(100), rating int not null, primary key (rev_id));

create table room_price (room_price_id int not null auto_increment, room_type varchar (20), room_price int, primary key (room_price_id));

create table packages (pack_no int not null auto_increment, pack_type varchar(20), room_type varchar (20), active varchar(3), primary key (pack_no));

create table rooms (room_no int not null, type varchar(20), check_in varchar(20), check_out varchar(20), status varchar(20), cust_id int, primary key (room_no), foreign key (cust_id) references customer(cust_id));

create table employee (emp_id int not null auto_increment, first_name varchar(20), last_name varchar(20), email varchar (30), emp_type varchar(20), gender varchar(6), salary int not null, phone int not null, password varchar(20), emp_pic varchar(100), primary key(emp_id));

create table food(food_id int not null auto_increment, food_name varchar(30), type varchar(10), food_price int not null, cust_id int, paid varchar(3), primary key (food_id), foreign key (cust_id) references customer(cust_id));

create table bill(bill_no int not null auto_increment, date varchar(20), amount int not null, cust_id int not null, primary key (bill_no), foreign key (cust_id) references customer(cust_id));

create table facilities(fac_id int not null auto_increment, type varchar(50), rate int not null, cust_id int, paid varchar(3), primary key (fac_id), foreign key(cust_id) references customer(cust_id));

create table notification(not_id int not null auto_increment, not_type varchar(50), cust_id int, descr varchar(200), primary key (not_id), foreign key(cust_id) references customer(cust_id));

insert into customer values (null,'Adam','Smith', 'adam.smith@gmail.com', 'Male','Mirpur','8905106', '6871445632772520','password');
insert into customer values (null,'Lady','Gaga', 'lady.gaga@gmail.com', 'Female','Fokirapul','9675948', '8843315121484920','password');
insert into customer values (null,'Nicki','Minaj', 'nicki.minaj@gmail.com', 'Female','Hatirzill','9516602', '6837265344336629','password');
insert into customer values (null,'Justin','Beiber', 'justin.beiber@gmail.com', 'Male','Khamarbari','9302013', '6857622967101634','password');
insert into customer values (null,'Roger','Federer', 'roger.federer@gmail.com', 'Male','Banani','9175926', '8691534694749862','password');
insert into customer values (null,'Novak','Djokovic', 'novak.djokovic@gmail.com', 'Male','Gulshan','9546107', '5930184982251376','password');

insert into review values (null, 'Farhan', 'farhan@yahoo.com', 'great','5');
insert into review values (null, 'Shahrin', 'shahrin@yahoo.com', 'bad','1');

insert into room_price values (null, 'Single', '400');
insert into room_price values (null, 'Double', '700');
insert into room_price values (null, 'Triple', '1000');
insert into room_price values (null, 'Eid', '4000');
insert into room_price values (null, 'Summer', '4500');
insert into room_price values (null, 'Honeymoon', '6000');
insert into room_price values (null, 'Executive', '5000');
insert into room_price values (null, 'Anniversary', '3500');

insert into packages values (null,'Eid','Single','Yes');
insert into packages values (null,'Summer','Single','No');
insert into packages values (null,'Honeymoon','Single','No');
insert into packages values (null,'Executive','Single','No');
insert into packages values (null,'Anniversary','Single','No');

insert into rooms values (101,'Single','12/01/2014','12/31/2014','Verified','3');
insert into rooms values (102,'Single','12/05/2014','12/31/2014','Booked', '1');
insert into rooms values (103,'Single','','','Vacant', null);
insert into rooms values (104,'Single','','','Vacant', null);
insert into rooms values (105,'Single','','','Vacant', null);
insert into rooms values (201,'Double','12/01/2014','12/31/2014','Booked', '2');
insert into rooms values (202,'Double','','','Vacant', null);
insert into rooms values (203,'Double','','','Vacant', null);
insert into rooms values (204,'Double','','','Vacant', null);
insert into rooms values (205,'Double','','','Vacant', null);
insert into rooms values (301,'Triple','12/05/2014','12/07/2014','Filled', 4);
insert into rooms values (302,'Triple','','','Vacant', null);
insert into rooms values (303,'Triple','','','Vacant', null);
insert into rooms values (304,'Triple','','','Vacant', null);
insert into rooms values (305,'Triple','','','Vacant', null);
insert into rooms values (401,'Single','','','Vacant', null);
insert into rooms values (402,'Double','','','Vacant', null);
insert into rooms values (403,'Triple','','','Vacant', null);

insert into employee values (null,'Abu','Foysal','foysal@gmail.com','Manager','Male','420','4204200','password','1.jpg');
insert into employee values (null,'Farhan Sadick','Zawad','farhan@gmail.com','Manager','Male','60000','9839635','password','2.jpg');
insert into employee values (null,'Burhan','Uddin','burhan@gmail.com','Laundry','Male','10000','9675016','password','3.jpg');
insert into employee values (null,'Shahrin','Manzur','shahrin@gmail.com','Room Service','Female','9500','9564870','password','4.jpg');
insert into employee values (null,'Ahmad','Rahman','farabi@gmail.com','Janitor','Male','5000','8968414','password','5.jpg');
insert into employee values (null,'Touhidur','Rahaman','mama@gmail.com','Room Service','Male','9500','9713305','password','6.jpg');
insert into employee values (null,'Arshad','Arafat','mugdha@gmail.com','Receptionist','Male','9500','9169815','password','7.jpg');

insert into notification values(null, 'Booking', '1', 'A new booking is made, verify it!');
insert into notification values(null, 'Booking', '2', 'A new booking is made, verify it!');";
		   
if (!$mysqli->multi_query($sql)) {
    echo "Multi query failed: (" . $mysqli->errno . ") " . $mysqli->error;
}

do {
    if ($res = $mysqli->store_result()) {
        var_dump($res->fetch_all(MYSQLI_ASSOC));
        $res->free();
    }
} while ($mysqli->more_results() && $mysqli->next_result());
echo"<br>Completed!<br><a href='hotel_home/index.php'>Visit The Hotel Management Software</a>";
?>
