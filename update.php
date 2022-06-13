<?php
    include("./dbcon.php");

    $no = $_GET["no"];

$sql = "SELECT * FROM member where sno=".$no;
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $numprt = $row["snum"];
        $nameprt = $row["sname"];
        $majorprt = $row["smajor"];
        $addrprt = $row["saddr"];
    }
} else {
  echo "0 results";
}
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>도서정보수정</title>
</head>
<body>
<form action="updateok.php" method="post">
<input type="hidden" name="no" value="<?php echo $no; ?>">
<div>
학번 <input type="text" name="num" value='<?php echo $numprt; ?>'>
</div>
<div>
성명 <input type="text" name="name" value='<?php echo $nameprt; ?>'>
</div>
<div>
학과
<input type="radio" name="major" value="드림북스" <?php if($majorprt == "드림북스") echo "checked"; ?> >드림북스
<input type="radio" name="major" value="대원씨아이" <?php if($majorprt == "대원씨아이") echo "checked"; ?> >대원씨아이
<input type="radio" name="major" value="디앤씨미디어" <?php if($majorprt == "디앤씨미디어") echo "checked"; ?> >디앤씨미디어
<input type="radio" name="major" value="문예춘추사" <?php if($majorprt == "문예춘추사") echo "checked"; ?> >문예춘추사
<div>
주소
<select name="addr">
    <option value="중앙도서관" <?php if($addrprt == "중앙도서관") echo "selected"; ?> >중앙도서관</option>
    <option value="수정도서관" <?php if($addrprt == "수정도서관") echo "selected"; ?> >수정도서관</option>
    <option value="판교도서관" <?php if($addrprt == "판교도서관") echo "selected"; ?> >판교도서관</option>
    <option value="중원도서관" <?php if($addrprt == "중원도서관") echo "selected"; ?> >중원도서관</option>
</select>
</div>
<input type="submit" value="수정">
</body>
</html>