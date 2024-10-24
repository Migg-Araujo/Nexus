<?php include 'header.php';?>
<script>
    var titleElement = document.querySelector('title');
    titleElement.innerText = "Math Blog | Início";
</script>
<main>
    <section id='home' class='home'>
        <h3>&#128075; Seja bem-vindo à sua</h3>
        <h1>Rede Social Educativa</h1>
        <p>focada nas suas dificuldades de aprendizado</p>

        <p class="quiz-text">Responda o quiz para ter acesso à rede social</p>
        <button onclick="<?php echo "window.location.href = '".INCLUDE_PATH.'quiz'."'";?>">Quiz</button>
        <div class="arrow" id="arrow" onclick=down()></div>
    </section>

    <section id='about' class="about">
        <div class="about-div">
            <h1>About Me</h1>
            <p>Hello, my name is <strong>Miguel</strong>, I'm a <strong>Programmer</strong> and passionate about <strong>Mathematics</strong>, I created this website with the aim of improving my programming skills and making a blog about what I love most, <strong>Mathematics</strong>.</p>
        </div>

        <div class="img-div">
            <img src="<?php echo INCLUDE_PATH; ?>/src/photo.jpg"/>
        </div>
    </section>
    
    <section class="about">
        <div class="about-div">
            <h1>About Me</h1>
            <p>Hello, my name is <strong>Miguel</strong>, I'm a <strong>Programmer</strong> and passionate about <strong>Mathematics</strong>, I created this website with the aim of improving my programming skills and making a blog about what I love most, <strong>Mathematics</strong>.</p>
        </div>

        <div class="img-div">
            <img src="<?php echo INCLUDE_PATH; ?>/src/photo.jpg"/>
        </div>
    </section>
</main>
<?php include 'footer.php';?>