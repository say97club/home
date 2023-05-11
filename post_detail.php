<!DOCTYPE html>
<html>
<head>
	<title>게시글 상세보기</title>
	<meta charset="UTF-8">
	<style>
		body {
			margin: 0;
			padding: 0;
		}
		
		.container {
			max-width: 1200px;
			margin: 0 auto;
			padding: 50px;
		}
		
		h1 {
			text-align: center;
			margin-bottom: 30px;
		}
		
		.post {
			background-color: #f2f2f2;
			padding: 20px;
			margin-bottom: 30px;
			border-radius: 10px;
			box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
		}
		
		.post-title {
			font-size: 28px;
			font-weight: bold;
			margin-bottom: 10px;
		}
		
		.post-meta {
			font-size: 14px;
			color: #666;
			margin-bottom: 10px;
		}
		
		.post-body {
			font-size: 16px;
			line-height: 1.6;
			margin-bottom: 20px;
		}
		
		.comment {
			background-color: #fff;
			padding: 20px;
			margin-bottom: 20px;
			border-radius: 10px;
			box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
		}
		
		.comment-meta {
			font-size: 14px;
			color: #666;
			margin-bottom: 10px;
		}
		
		.comment-body {
			font-size: 16px;
			line-height: 1.6;
		}
		
		.comment-form {
			margin-top: 30px;
		}
		
		.comment-form label {
			display: block;
			font-size: 16px;
			font-weight: bold;
			margin-bottom: 10px;
		}
		
		.comment-form input[type=text], .comment-form textarea {
			display: block;
			width: 100%;
			padding: 10px;
			border-radius: 5px;
			border: 1px solid #ccc;
			box-sizing: border-box;
			margin-bottom: 20px;
		}
		
		.comment-form textarea {
			height: 200px;
		}
		
		.comment-form input[type=submit] {
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
		
		.back-button {
			background-color: #ccc;
			color: #fff;
			padding: 10px 20px;
			text-align: center;
			text-decoration: none;
			font-size: 16px;
			margin: 4px;
			cursor: pointer;
			border-radius: 10
