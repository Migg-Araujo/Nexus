<?php include 'header.php';?>
<script>
    var titleElement = document.querySelector('title');
    titleElement.innerText = "Nexus | Início";
</script>
<main>
    <section id='home' class='home'>
        <h3>&#128075; Seja bem-vindo à sua</h3>
        <h1>Rede Social Educativa</h1>
        <p>focada nas suas dificuldades de aprendizado</p>

        <p class="quiz-text">Responda o quiz para ter acesso à rede social</p>
        <button onclick="<?php echo "window.location.href = '".INCLUDE_PATH.'loginStudent'."'";?>">Quiz</button>
        <div class="arrow" id="arrow" onclick=down()></div>
    </section>

    <section id='about' class="about">
        <div class="about-div">
            <h3>Aprendizado colaborativo</h3>
            <p>Conecte-se com outros usuários através de comunidades de ensino, com chat de texto e voz.</p>
            <div class="container">
                <div class="foxus"></div>
                <div class="box sb1">Olá sou a Foxus, estou aqui para te ajudar com qualquer dúvida!</div>
            </div>
        </div>

        <div class="img-div">
            <div class="exp-img"></div>
        </div>
    </section>
    
    <section class="about">
        <div class="img-div">
            <div class="about-img"></div>
        </div>

        <div class="about-div">
            <h1>QUEM SOMOS</h1>
            <p>O projeto Nexus iniciou-se em 2024 como uma ferramenta de auxilio aos alunos do ensino médio, desenvolvido pelos integrantes:<br />
            <br />Miguel de Araújo Bizerra
            <br />Murilo Torres de Araújo
            <br /> Nathan Hiago de Sena
            <br />Pedro Henrique Pereira 
            <br /> Renam da Silva Andrade
            <br /> Vinicius Santos Xarelli</p>
        </div>
    </section>
</main>
<?php include 'footer.php';?>