<script>
    var titleElement = document.querySelector('title');
    titleElement.innerText = "Nexus | Área do Professor";
</script>

<?php
    if(isset($_SESSION['user']) && $_SESSION['userType'] == 0){
        header('Location: studentArea');
    }else if(isset($_SESSION['user'])){
        header('Location: teacherArea');
    }
    
    include __DIR__.'/../config/sql/DBcreate.php';

    if(isset($_POST['email'])){
        $email = strtolower($conn->real_escape_string($_POST['email']));
        $password = strtolower($conn->real_escape_string($_POST['password']));

        $sql = "SELECT * FROM TEACHER JOIN USER_TABLE ON TEACHER.ID_USER = USER_TABLE.ID_USER WHERE EMAIL LIKE '$email' LIMIT 1";
        $sql_query = $conn->query($sql);

        $user = $sql_query->fetch_assoc();

        if(isset($user) && password_verify($password, $user['PASSWORD'])){
            include __DIR__.'/../config/sessionStart.php';

            $_SESSION['user'] = $user['ID_TEACHER'];
            $_SESSION['userType'] = 1;
            $_SESSION['name'] = $user['USERNAME'];

            header('Location: teacherArea');
        }else{
            echo "<p class ='msg-alert'>Email ou Senha incorreto.</p>";
        }
    }
?>

<?php include 'header.php';?>
<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/login.css">
<main>
    <div class="login-area">
        <div class="close" onclick="window.location.href='<?php echo INCLUDE_PATH; ?>'"></div>
                <h1>Área do Professor</h1>
                <form action="?" method="POST">
                    <input type="text" placeholder="Email" autocomplete="off" required name='email'>
                    <input type="password" placeholder="Senha" autocomplete="off" required name='password'>
                    <a href="">Esqueceu sua senha?</a>
                    <input type="submit" value="Entrar">
                </form>
                <div class="google">
                    <div></div>
                    <p>Entrar com<br>Google</p>
                </div>
    </div>
</main>
