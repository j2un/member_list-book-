<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>도서정보입력</title>
</head>
<body>
<form action="inputok.php" method="post">
<div>
관리번호 <input type="text" name="num">
</div>
<div>
도서명 <input type="text" name="name">
</div>
<div>
출판사
<input type="radio" name="major" value="드림북스">드림북스
<input type="radio" name="major" value="대원씨아이">대원씨아이
<input type="radio" name="major" value="디앤씨미디어">디앤씨미디어
<input type="radio" name="major" value="문예춘추사">문예춘추사
</div>
<div>
소유 도서관 목록
<select name="addr">
    <option value="중앙도서관">중앙도서관</option>
    <option value="수정도서관">수정도서관</option>
    <option value="판교도서관">판교도서관</option>
    <option value="중원도서관">중원도서관</option>
</select>
</div>
<input type="submit">
</form>
</body>
</html>