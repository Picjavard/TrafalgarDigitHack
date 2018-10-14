<!doctype html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="shortcut icon" href="photo/favicon.ico" type="image/x-icon" />
		
		<title>AMSU</title>
	</head>
	<body>
		<?
		$host = 'localhost'; // адрес сервера 
		$database = 't999168r_bd'; // имя базы данных
		$user = 't999168r_bd'; // имя пользователя
		$password = 'trafalgar'; // пароль
		$link = mysqli_connect($host, $user, $password, $database);
		if ( !$link ) die("Error");

		// /* проверка соединения */
		// if ( mysqli_connect_errno() ) {
		// 	printf("Не удалось подключиться: %s\n", mysqli_connect_error());
		// 	exit();
		// }
		// else {
		// 	printf("Удалось подключиться: %s\n", mysqli_get_host_info($link));
		// }
		//$result  =  mysqli_query( $link,  "SELECT Ticket.ID From Ticket Where Ticket.ID_User = $ID" );
		

		// if ( !$result ) echo "Произошла ошибка: "  .  mysqli_error();
		// else echo "Данные получены.<br>";

		// while (  $row  =  mysqli_fetch_row($result)  )
		// {
		// 	echo "Логин: $row[0]";
		// }

		mysqli_close($link);



?>


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
						<li class="nav-item">
							<a class="nav-link" href="index.php">Главная</a>
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
		
		<article class="container my-3">
			<div class="row">
				<div class="w-100"></div>
				<div class="col-12">
					<h2 class="text-justify text-center">Регистрация </h2>
				</div>
				<div class="w-100"></div>
				<div class="card col-12 py-3" style="width: -3rem;">
					<form action="save_user.php" id="nameform" method="post">
					<div class="input-group mb-3">
						<div class="input-group-prepend col-">
							<span class="input-group-text zakinp" id="login">Логин</span>
						</div>
						<input type="text" name="login" class="form-control" placeholder="Введите уникальное имя пользователя" aria-label="Username" aria-describedby="basic-addon1">
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text zakinp" id="password">Пароль</span>
						</div>
						<input type="text" name="password"class="form-control" placeholder="Укажите пароль ЛК" aria-label="Usermail" aria-describedby="basic-addon1">
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text zakinp" id="name">Имя</span>
						</div>
						<input type="text" class="form-control" placeholder="Укажите ваше имя" aria-label="Usertel" aria-describedby="basic-addon1">
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text zakinp" id="surname">Фамилия</span>
						</div>
						<input type="text" class="form-control" placeholder="Укажите вашу фамилию" aria-label="Usertel" aria-describedby="basic-addon1">
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text zakinp" id="patr">Отчество</span>
						</div>
						<input type="text" class="form-control" placeholder="Укажите ваше отчество" aria-label="Usertel" aria-describedby="basic-addon1">
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text zakinp" id="description">Степень</span>
						</div>
						<input type="text" class="form-control" placeholder="Например магистр, бакалавр" aria-label="Usertel" aria-describedby="basic-addon1">
					</div>
					</form>
					<div>
						<form>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroupFileAddon01">Прикрепить фото</span>
								</div>
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
									<label class="custom-file-label" for="inputGroupFile01">Выберите фото</label>
								</div>
							</div>
							
						</form>
						<button type="submit" name="submit" form="nameform" class="btn btn-outline-dark float-right" value="Submit">Отправить заказ</button>
					</div>
					
				</div>
			</div>
		</article>
		
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