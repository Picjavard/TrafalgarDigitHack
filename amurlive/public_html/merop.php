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
						<li class="nav-item">
							<a class="nav-link" href="index.php">Главная</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="merop.php">Мероприятия<span class="sr-only">(current)</span></a>
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
				<h4 class="container-fluid text-center mb-3">Мероприятия</h4> 
			 <?php
                            $sql = mysqli_query( $link, "SELECT Info_Event.Name_Event, Info_Event.Description, Info_Event.Image FROM Info_Event");
                            
                            while($result = mysqli_fetch_array($sql)){
                            echo '<div class="col-lg"></div>
                            <div class="card mt-3 text-center col-12 col-lg-3 align-self-center" style="width: 18rem;">
							<img class="card-img-top" src="..." alt="">
					<div class="card-body">' ;
					echo "<a href='tramer.php'><img src='{$result['Image']}' heigth=140 width=140 alt=''/></a> </div>";
                            echo $result['Name_Event']."<br>".$result['Description'].
                            	"</div>";
                            
                            }
                          ?> 
				<div class="col-auto"></div>
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