<?php 

var_dump($_POST);
if(!empty($_POST)) {
$first = isset($_POST['firstNumb']) ? $_POST['firstNumb']: '';
$second = isset($_POST['secondNumb']) ? $_POST['secondNumb']: '';
$sign = isset($_POST['operation']) ? $_POST['operation']: '';
$result ;
$error = [];

if (!is_numeric($first) && $first == '' ||
		!is_numeric($second) && $second == '') {
	$error [] = 'Please Enter a number';
}
else {
	$result = 0;
switch ($sign) {
	case '+': 
		$result = $first + $second;
		break;
	case '-':
		$result = $first - $second;
		break;
	case '*':
		$result = $first * $second;
		break;
	case '/':
		$result = $first / $second;
}
}
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
<form action="#" method="post">
	<input type="text" name="firstNumb" />
	
	<select name="operation" id="">
	
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="/">/</option>
		<option value="*">*</option>
		
	</select>

	<input type="text" name="secondNumb"/>
	
	<button type="submit">Calculate</button>
	
	<?php foreach ($error as $e):?>
	<p style=color:red;><?= $e?></p> 
	<?php endforeach;?>
	
	<p><?= $result?></p>
	</form>
</body>
</html>
