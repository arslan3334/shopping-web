<?php
session_start();


// print_r($_REQUEST);

//role => 1=admin,2=teacher,3=students    status=>1=active,0=inactive

if ($_REQUEST['login']) {


$users=["user1"=>
[
"username"=>"arsal",
"fullname"=>"Arsalan NISAR",
"password"=>123,
 ] ,  

"user2"=>[ 
 "username"=>"khan",
 "fullname"=>"KHAN Sayed",
"password"=>1234,

  ],

"user3"=>[
"username"=>"ahmed",
 "fullname"=>"AHMED ALI",
"password"=>12345,
],

"user4"=>[
"username"=>"asif",
 "fullname"=>"ASIF AHMED",
"password"=>123456,
]
];


$flag=true;


foreach ($users as $key => $value) {

	if ($_REQUEST['username']==$value['username'] && $_REQUEST['password']==$value['password']) {
      $flag=false;
       
          
              $_SESSION['data']=$value;

				header("location:maindash.php");
}

			
		}


		
	}

if ($flag) 
	
{
header("location:index.php?msg=invalid username/password");

}









?>