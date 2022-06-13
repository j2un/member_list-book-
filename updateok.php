<?php
include("./dbcon.php");

$no = $_POST["no"];
$num = $_POST["num"];
$name = $_POST["name"];
$major = $_POST["major"];
$addr = $_POST["addr"];

$sql = "UPDATE member SET snum='$num', sname='$name', smajor='$major', saddr='$addr' WHERE sno=".$no;

if (mysqli_query($conn, $sql)) {
  echo "정보가 수정되었습니다.";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

<div>
<a href="./input.php">도서입력</a>
<a href="./list.php">도서목록</a>
</div>