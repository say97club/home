<!DOCTYPE html>
<html>
<head>
	<title>로그인</title>
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
		
		ul {
			list-style-type: none;
			margin: 50px;
			padding: 0;
		}
		
		li {
			margin: 10px;
			font-size: 20px;
		}
	</style>
</head>
<body>
	<h1>로그인</h1>
	<form method="post" action="login.php">
		<label for="username">사용자 이름:</label>
		<input type="text" name="username" required>
		<label for="password">비밀번호:</label>
		<input type="password" name="password" required>
		<input type="submit" value="로그인">
	</form>
	<ul>
		<li><a href="register.php">회원가입</a></li>
	</ul>
</body>
</html>
