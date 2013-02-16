<?php

require('header.inc');

?>







<?php

  // Создать короткие имена переменных

  //$DOCUMENT_ROOT = $HTTP_SERVER_VARS['DOCUMENT_ROOT'];

?>

<html>

<head>

  <title>Автозапчасти от Боба - Заказы клиентов</title>

</head>

<body>

<h1>Лабораторная работа № 2 по теме сохранение и востановление данных посредством текстовых файлов</h1>

<h2>Автозапчасти от Боба</h2>

<h3>Заказы клиентов</h3>

<?php










//подключаемся к базе данных




$hostname="us-cdbr-azure-west-b.cleardb.com";

$user="bdb2f929fc3e63";

$password="d690678f";

$db="nazimovAx12eEUib";
















if(!$link = mysql_connect($hostname, $user, $password))




{

//echo "<br> Не могу соединиться с сервером базы данных <br>";

exit();

}

//echo "<br> Cоедининение с сервером базы данных прошло успешно <br>";







if (!mysql_select_db($db, $link))

{ 

//echo "<br> Не могу выбрать базу данных<br>";

exit();

}

else

{

//echo "<br> Выбор базы данных прошел успешно <br>";

}










?>

</body>

</html>










<?php

require('footer.inc');

?>

