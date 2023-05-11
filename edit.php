<!DOCTYPE html>
<html>
<head>
	<title>회원 정보 수정</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>회원 정보 수정</h1>
	<form method="POST" action="process_edit.php">
		<label for="name">이름:</label>
		<input type="text" id="name" name="name"><br><br>

		<label for="email">이메일:</label>
		<input type="email" id="email" name="email"><br><br>

		<label for="phone">전화번호:</label>
		<input type="text" id="phone" name="phone"><br><br>

		<label for="address">주소:</label>
		<input type="text" id="address" name="address"><br><br>

		<label for="password">비밀번호:</label>
		<input type="password" id="password" name="password"><br><br>

		<label for="confirm_password">비밀번호 확인:</label>
		<input type="password" id="confirm_password" name="confirm_password"><br><br>

		<input type="submit" value="수정">
	</form>
</body>
</html>
