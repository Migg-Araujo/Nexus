<?php include 'header.php';
if(!isset($_SESSION['user'])){
    header('Location: login');
}
?>
<main></main>
<?php include 'footer.php';?>