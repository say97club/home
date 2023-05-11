<!DOCTYPE html>
<html>
<head>
	<title>회원 탈퇴</title>
	<meta charset="UTF-8">
	<style>
		form {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin: 50px;
		}
		
		input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			padding: 10px 20px;
			text-align: center;
			text-decoration: none;
			font-size: 16px;
			margin: 4px;
			cursor: pointer;
			border-radius: 10px;
			box-sizing: border-box;
			width: 200px;
			border: none;
		}
		
		label {
			margin: 10px;
		}
		
		input[type="text"], input[type="password"] {
			padding: 5px;
			width: 300px;
			border-radius: 5px;
			border: 1px solid #ccc;
			box-sizing: border-box;
		}
		
		h1 {
			text-align: center;
		}
	</style>
</head>
<body>
	<h1>회원 탈퇴</h1>
	<form method="post" action="delete_action.php">
		<label for="password">비밀번호:</label>
		<input type="password" name="password" required>
		<label for="confirm_password">비밀번호 확인:</label>
		<input type="password" name="confirm_password" required>
		<input type="submit" value="회원 탈퇴">
	</form>
</body>
</html>
