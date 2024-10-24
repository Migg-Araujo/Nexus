<?php
    if(isset($_SESSION['user'])){
        header('Location: user');
    }
    
    include __DIR__.'/../config/sql/DBcreate.php';

    if(isset($_POST['userEmail'])){
        $userEmail = strtolower($conn->real_escape_string($_POST['userEmail']));
        $password = strtolower($conn->real_escape_string($_POST['password']));

        $sql = "SELECT * FROM USER_TABLE WHERE EMAIL LIKE '$userEmail' or LOWER(USERNAME) LIKE '$userEmail' LIMIT 1";
        $sql_query = $conn->query($sql);

        $user = $sql_query->fetch_assoc();

        if(isset($user) && password_verify($password, $user['PASSWORD'])){
            include __DIR__.'/../config/sessionStart.php';

            $_SESSION['user'] = $user['ID_USER'];
            $_SESSION['name'] = $user['USERNAME'];

            header('Location: user');
        }else{
            echo "<p class ='msg-alert'>Incorrect Email or Password</p>";
        }
    }
?>

<?php include 'header.php';?>
<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/login.css">
<main>
    <div class="login-area">
        <div class="close" onclick="window.location.href='<?php echo INCLUDE_PATH; ?>'"></div>
        <div class="sign-in-area">
                <h1>Sign In</h1>
                <form action="?" method="POST">
                    <input type="text" placeholder="User or Email" autocomplete="off" required name='userEmail'>
                    <input type="password" placeholder="Password" autocomplete="off" required name='password'>
                    <a href="">Forget Your Password?</a>
                    <input type="submit" value="SIGN IN">
                </form>
        </div>
        <div class="sign-up-area">
            <h1>Sign Up</h1>
            <p>Don't have an account?</p>
            <button onclick="<?php echo "window.location.href = '".INCLUDE_PATH."signup'";?>">SIGN UP</button>
        </div>
    </div>
</main>
