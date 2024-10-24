<?php include 'header.php';
if(!isset($_SESSION['user'])){
    header('Location: login');    
}

include __DIR__.'/../config/sql/DBcreate.php';
$sql = "SELECT * FROM USER_TABLE WHERE ID_USER LIKE  1";
    $sql_query = $conn->query($sql);

    $user = $sql_query->fetch_assoc();
   
?>
<script>
    var titleElement = document.querySelector('title');
    titleElement.innerText = "Math Blog | <?php echo $_SESSION['name']; ?>";
</script>
<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/user.css">
<main>
    <div class='container'>
        <h1>Your Profile</h1>
        <img src="<?php echo INCLUDE_PATH; ?>/src/user-white.svg"/>
        <p>Name: Lorem Ipsum</p>
        <p>Username: <?php echo $user['USERNAME'];?></p>
        <p>Email: <?php echo $user['EMAIL'];?></p>

        <button onclick="window.location.href='<?php echo INCLUDE_PATH;?>profile'">EDIT</button>
    </div>
    <div class='container'>
    <h1>Your Post</h1>
    
        <p>Post: 0</p>
        <p>Views: 0</p>
        <p>Likes: 0</p>
        <p>Followers: 0</p>

        <button>POSTS</button>
    </div>
</main>
<?php include 'footer.php';?>