<?php
include __DIR__.'/../config/sessionStart.php';

include __DIR__.'/../config/sql/DBcreate.php';

$sql = "UPDATE student SET USER_SET = 1 WHERE STUDENT.ID_STUDENT = ". $_SESSION["user"];
$sql_query = $conn->query($sql);

header('Location: studentArea');
?>