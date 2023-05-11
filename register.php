<?php
// 데이터베이스 연결 정보 설정
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// 데이터베이스 연결 생성
$conn = new mysqli($servername, $username, $password, $dbname);

// 연결 오류 확인
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// POST 요청 처리
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 사용자 이름 및 비밀번호 추출
    $username = $_POST["username"];
    $password = $_POST["password"];

    // 데이터베이스에 사용자 등록
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "회원가입이 완료되었습니다.";
    } else {
        echo "오류: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
