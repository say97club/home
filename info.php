<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>내 정보 입력하기</title>
  </head>
  <body>
    <h1>내 정보 입력하기</h1>
    <form action="process.php" method="post">
      <label for="name">이름:</label>
      <input type="text" id="name" name="name" required><br><br>
      <label for="email">이메일:</label>
      <input type="email" id="email" name="email" required><br><br>
      <label for="phone">전화번호:</label>
      <input type="tel" id="phone" name="phone" required><br><br>
      <label for="address">주소:</label>
      <input type="text" id="address" name="address" required><br><br>
      <input type="submit" value="제출">
    </form>
  </body>
</html>
