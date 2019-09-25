<? 
	$connection = mysqli_connect("localhost", "root", "", "web2");
	if (!$connection) {
	    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
	    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	}

	$result = mysqli_query($connection, "SELECT * FROM angajati");
	
	
?>
<!doctype html>
<html>
<head></head>
<body>
	<table border="1">
	<? while($angajat = mysqli_fetch_assoc($result)){?>
	<tr>
		<td><?= $angajat['name']?></td>
	</tr>
	<? }?>
</table>
</body>
</html>