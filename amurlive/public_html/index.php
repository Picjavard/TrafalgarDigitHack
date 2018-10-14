<!doctype html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="shortcut icon" href="photo/favicon.ico" type="image/x-icon" />
		
		<title>AMSU</title>
		
		<?php
    $host="localhost";
    $user="t999168r_bd";
    $pass="trafalgar"; 
    $db_name="t999168r_bd";
    $link=mysqli_connect($host,$user,$pass,$db_name);
   
        ?> 
        
	</head>
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
		
		<div class="container-fluid my-auto">
		  <div class="row">
			<div id="carouselExampleControls" class="col-12 mr-0 ml-0 pl-0 pr-0 carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block w-100" src="photo/scroll1.jpg" alt="Первое фото">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="photo/scroll1.jpg" alt="Второе фото">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="photo/scroll1.jpg" alt="Третье фото">
						</div>
					</div>
					<a class=" carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Назад</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Следующая</span>
					</a>
					<div class="carousel-caption d-none d-md-block sizescrollo">
						<h2>ВСЕ МЕРОПРИЯТИЯ АМГУ В ОДНОМ МЕСТЕ</h2>
						<h5>АМГУ - все сложится</h5>
						<form> 
						<button formaction="index1.php" class="btn btn-outline-light col-3">Вход</button>
						<button formaction="reg.php" class="btn btn-outline-light col-3">Регистрация</button>
					</form>
					</div>
			  		<div class="carousel-caption d-md-none sizescrollt">
						<h6>ВСЕ МЕРОПРИЯТИЯ АМГУ В ОДНОМ МЕСТЕ</h6>
						<h6>АМГУ - все сложится</h6>
						<form>
						<button formaction="index1.php"  class="btn btn-outline-light col-5">Вход</button>
						<button formaction="reg.php" class="btn btn-outline-light col-5">Регистрация</button>
						</form>
					</div> 
				</div>
		  </div>
		</div>
	<div class="container mt-3">
			<div class="row">
				<div class="w-100"></div>
				<div class="container col-12">
					<h2 class="text-center">О Нас</h2>
					<p class="text-center">Амгу это не только учёба и научная деятельность, но и прекрасная возможность попробовать себя в творчестве. </p>
				</div>
				<div class="mt-3 text-center col-12 col-lg-3 align-self-center" style="width: 18rem;">
					<img class="card-img-top align-self-center" src="photo/mero1.png" width="80" height="80" alt="Card image cap">
					<div class="card-body">
						<h6>Маштабные мероприятия</h6>
						<p class="card-text">Мероприятия регионального и всероссийского уровня</p>
					</div>
				</div>
				<div class="col-lg"></div>
				<div class="mt-3 text-center col-12 col-lg-3 align-self-center" style="width: 18rem;">
					<img class="card-img-top align-self-center" src="photo/mero2.png" width="80" height="80" alt="Card image cap">
					<div class="card-body">
						<h6>Университетские мероприятия</h6>
						<p class="card-text">Мероприятия проводимые в рамках университета </p>
					</div>
				</div>
				<div class="col-lg"></div>
				<div class="mt-3 text-center col-12 col-lg-3 align-self-center" style="width: 18rem;">
					<img class="card-img-top align-self-center" src="photo/mero3.png" width="80" height="80" alt="Card image cap">
					<div class="card-body">
						<h6>Онлайн трансляции</h6>
						<p class="card-text">Удаленное присудствие на мероприятиях всероссийского уровня</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
		  <div class="row">
				<div class="w-100"></div>
				<img class="col-12 mt-5 pr-0 pl-0 d-none d-md-block" src="photo/manual.jpg" alt="Инструкция"/>
			<img class="col-12 mt-5 pr-0 pl-0 d-md-none" src="photo/manual_min.jpg" alt="Инструкция"/>
			<div class="w-100"></div>
			</div>
		</div>
	<div class="container mt-3">
			<div class="row">
				<div class="w-100"></div>
				<div class="container col-12">
					<h2 class="text-center">Список мероприятий</h2>
				</div>
				
                        <?php
                            $sql = mysqli_query( $link, "SELECT Info_Event.Name_Event, Info_Event.Description, Info_Event.Image FROM Info_Event LIMIT 6");
                            
                            while($result = mysqli_fetch_array($sql)){
                            echo '<div class="col-lg"></div>
                            <div class="card mt-3 text-center col-12 col-lg-3 align-self-start" style="width: 18rem;">
					<img class="card-img-top" src="..." alt="">
					<div class="card-body">' ;
					echo "<img src='{$result['Image']}' heigth=140 width=140 alt=''/> </div>";
                            echo $result['Name_Event']."<br>".$result['Description'].
                            	"</div>";
                            
                            }
                          ?> 
                          
				
				
			</div>
		</div>
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