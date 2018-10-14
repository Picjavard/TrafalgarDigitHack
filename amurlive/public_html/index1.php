<!doctype html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="shortcut icon" href="photo/favicon.ico" type="image/x-icon" />

		
		<title>AMSU</title>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
			<div class="container text-center">
				<a class="navbar-brand d-none d-xl-block" href="index.php">
					<img src="photo/1.png" width="100" height="25" class="d-inline-block align-top" alt="Лого">
				</a>
				<a class="navbar-brand d-xl-none" href="index.php">
					<img src="photo/1.png" width="100" height="25" class="d-inline-block align-top" alt="Лого">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarToggler">
					<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Главная <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="merop.php">Мероприятия</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="onas.php">О нас</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>


<? 
  $login = "Trafalgar";
  
  $ID = "2";
  $ID2 = "3";


  $host = 'localhost'; // адрес сервера 
  $database = 't999168r_bd'; // имя базы данных
  $user = 't999168r_bd'; // имя пользователя
  $password = 'trafalgar'; // пароль
  $link = mysqli_connect($host, $user, $password, $database);
  if ( !$link ) die("Error");

  // /* проверка соединения */
  // if ( mysqli_connect_errno() ) {
  //   printf("Не удалось подключиться: %s\n", mysqli_connect_error());
  //   exit();
  // }
  // else {
  //   printf("Удалось подключиться: %s\n", mysqli_get_host_info($link));
  // }
  $result  =  mysqli_query( $link,  "SELECT Ticket.ID From Ticket Where Ticket.ID_User = $ID" );
  

//   if ( !$result ) echo "Произошла ошибка: "  .  mysqli_error();
//   else echo "Данные получены.<br>";

  $row  =  mysqli_fetch_row($result)  ;
  //echo "Логин: $row[0]";
  //var_dump($row[0]);
  $id_pay = $row[0];
  $result  =  mysqli_query( $link,  "SELECT Ticket.ID From Ticket Where Ticket.ID_User = $ID2" );
  $row  =  mysqli_fetch_row($result)  ;
  $id_pay2=$row[0];
mysqli_close($link);

  $login = "Trafalgar";
  
//   var_dump($row[0]);
//   var_dump(md5($id_pay+$ID));
//   var_dump(md5($id_pay2+$ID2));
  $qr= md5($id_pay+$ID);
  $qr2= md5($id_pay2+$ID2);

   echo '<div class="card mt-3 text-center col-12  align-self-center"">';

   echo "<br>Cсылка на твой билет, $login - <a href='/qrtest/index.php?data=$qr'>like that</a> or <a href='/qrtest/index.php?data=$qr2'>like that</a></div><hr/>"
?>



<?php
// header('Content-type: text/html; charset=UTF-8');
// if (count($_REQUEST)>0){
//     require_once 'apiEngine.php';
//     foreach ($_REQUEST as $apiFunctionName => $apiFunctionParams) {
//         $APIEngine=new APIEngine($apiFunctionName,$apiFunctionParams);
//         echo $APIEngine->callApiFunction(); 
//         break;
//     }
// }else{
//     $jsonError->error='No function called';
//     echo json_encode($jsonError);
// }
?>
<div class="container-fluid mt-3 pl-0 pr-0 footer">
	  	<div class="container">
			<div class="row pt-3">
				<div class="w-100"></div>
				<div class="col text-center">
					<img class="" src="photo/geo.png" width="105" height="105" alt="geo"/>
					<h6 class="mt-3">Благовещенск, Игнатьевское шоссе, 21</h6>
				</div>
				<div class="col-1"></div>
				<div class="col text-center">
					<img class="" src="photo/phone-call.png" width="105" height="105" alt="geo"/>
					<h6 class="mt-3">+79485940394</h6>
				</div>
				<div class="col-1"></div>
				<div class="col text-center">
					<img class="" src="photo/mail.png" width="105" height="105" alt="geo"/>
					<h6 class="mt-3">test@gmail.com</h6>
				</div>
				<div class="w-100"></div>
				<div class="col-6"><p>© Амурский государственный университет, 2018</p></div>
				<div class="col-1"></div>
				<div class="col">Разработка сайта: TRAFALGAR</div>
				<div class="w-100"></div>
				<p></p>
			</div>	
		</div>
	</div>
			  	

		<script src="js/jquery-3.3.1.slim.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>