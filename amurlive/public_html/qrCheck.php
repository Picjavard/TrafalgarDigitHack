<!DOCTYPE html>
<!doctype html>
<html lang="ru">
	<head>
		<meta charset="utf-8">

  
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
  //   printf("Не удалось подключиться: %s\n", mysqli_connect_error());
  //   exit();
  // }
  // else {
  //   printf("Удалось подключиться: %s\n", mysqli_get_host_info($link));
  // }
  $data = "".$_GET["data"];
  $result  =  mysqli_query( $link,  "SELECT * FROM `Ticket` AS t JOIN `Accounts`AS ac ON ac.ID_Accounts = t.ID_User WHERE t.Hesh_Sm = '$data'" );
  

  // if ( !$result ) echo "Произошла ошибка: "  .  mysqli_error();
  // else { 
  //   echo "Данные получены.<br>";
  // }
  
  // //$result  =  mysqli_query( $link,  "SELECT Ticket.Hesh_Sm From Ticket Where Ticket.ID_User = 2" );
  // //  printf("ErrorY"); 
  // //  printf(",%s,%s,",$_GET["data"],$row[0]);
  // // printf("ErrorY"); 

  // printf("ErrorY"); 
//var_dump($hash1,$hash2);
if($row  =  mysqli_fetch_row($result)){
  echo "   OK  N: $row[0]; Login: $row[5];"; 

}
else{
  echo "   Error"; 
}
mysqli_close($link);



?>


</body>
</html>