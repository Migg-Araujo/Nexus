<script>
    var titleElement = document.querySelector('title');
    titleElement.innerText = "Nexus | Quiz";
</script>
<?php
if(isset($_SESSION['user']) && $_SESSION['userType'] == 0 && $_SESSION['userSet'] == 0){
}else if(isset($_SESSION['user']) && $_SESSION['userType'] == 0){
    header('Location: studentArea');
}else if(isset($_SESSION['user']) && $_SESSION['userType'] == 1){
    header('Location: teacherArea');
}else{
    header('Location: home');
}
?>

<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/quiz.css">
<main>
<div class="alert" id="alert">Por favor, selecione uma opção antes de continuar.</div>
<div id="quiz-container">
    <div class="progress-bar">
        <div id="progress-bar"></div>
    </div>
        <div id="question-container">
            <div class="question-area">
                <div class="foxus"></div>
                <div class="question sb2"><h2 id="question-text" class=" h2" id="h2">Pergunta 1</h2></div>
            </div>
            <div id="options-container">
                <div class="option" data-value="1">Opção 1</div>
                <div class="option" data-value="2">Opção 2</div>
                <div class="option" data-value="3">Opção 3</div>
                <div class="option" data-value="4">Opção 4</div>
            </div>
        </div>
        <div id="navigation-buttons">
            <button id="back-button" class="nav-button" disabled>Voltar</button>
            <button id="next-button" class="nav-button">Próxima</button>
            <button id="submit-button" class="nav-button">Finalizar</button>
        </div>
    </div>

    <script>
        const questions = [
            { question: "Em relação à Matemática você: ", options: ["Possui facilidade, dominando seus principais conteúdos, como fórmulas e contas.", "Possui facilidade, porém tem dificuldades com contas complexas ou com decorar fórmulas.", "Acha difícil, porém consegue dominar o conteúdo com o tempo.", "Possui grandes dificuldades e acha que precisa de um ensino mais focado para dominar o conteúdo.", "Nenhuma das anteriores."] },
            { question: "Pergunta 2", options: ["Opção 1", "Opção 2", "Opção 3", "Opção 4", "Opção 5"] },
            { question: "Pergunta 3", options: ["Opção 1", "Opção 2", "Opção 3", "Opção 4", "Opção 5"] },
            { question: "Pergunta 4", options: ["Opção 1", "Opção 2", "Opção 3", "Opção 4", "Opção 5"] },
            { question: "Pergunta 5", options: ["Opção 1", "Opção 2", "Opção 3", "Opção 4", "Opção 5"] },
            { question: "Pergunta 6", options: ["Opção 1", "Opção 2", "Opção 3", "Opção 4", "Opção 5"] },
            { question: "Pergunta 7", options: ["Opção 1", "Opção 2", "Opção 3", "Opção 4", "Opção 5"] },
            { question: "Pergunta 8", options: ["Opção 1", "Opção 2", "Opção 3", "Opção 4", "Opção 5"] },
            { question: "Pergunta 9", options: ["Opção 1", "Opção 2", "Opção 3", "Opção 4", "Opção 5"] },
            { question: "Pergunta 10", options: ["Opção 1", "Opção 2", "Opção 3", "Opção 4", "Opção 5"] }
        ];

        let currentQuestion = 0;
        let answers = new Array(questions.length).fill(null);

        document.addEventListener("DOMContentLoaded", () => {
            updateQuestion();

            document.getElementById("next-button").addEventListener("click", () => {
                if (answers[currentQuestion] !== null) {
                    currentQuestion++;
                    document.getElementById("progress-bar").style.width = (currentQuestion + 1)*10 + "%";
                    
                    updateQuestion();
                } else {
                    runAnimation();
                }
            });

            document.getElementById("back-button").addEventListener("click", () => {
                if (currentQuestion > 0) {
                    currentQuestion--;
                    document.getElementById("progress-bar").style.width = (currentQuestion + 1)*10 + "%";
                    updateQuestion();
                }
            });

            document.getElementById("submit-button").addEventListener("click", submitAnswers);
        });

        function updateQuestion() {
            const questionText = document.getElementById("question-text");
            const optionsContainer = document.getElementById("options-container");
            const backButton = document.getElementById("back-button");
            const nextButton = document.getElementById("next-button");
            const submitButton = document.getElementById("submit-button");

            questionText.textContent = questions[currentQuestion].question;;

            optionsContainer.innerHTML = questions[currentQuestion].options
                .map((option, index) => 
                    `<div class="option ${answers[currentQuestion] == index + 1 ? "selected" : ""}" data-value="${index + 1}">${option}</div>`)
                .join("");

            const options = document.querySelectorAll(".option");
            options.forEach(option => {
                option.addEventListener("click", () => selectOption(option));
            });

            backButton.disabled = currentQuestion === 0;
            nextButton.style.display = currentQuestion === questions.length - 1 ? "none" : "block";
            submitButton.style.display = currentQuestion === questions.length - 1 ? "block" : "none";
        }

        function selectOption(option) {
            const options = document.querySelectorAll(".option");
            options.forEach(opt => opt.classList.remove("selected"));
            option.classList.add("selected");
            answers[currentQuestion] = option.dataset.value;
        }

        function submitAnswers() {
            console.log("Respostas enviadas:", answers);

            fetch("<?php echo INCLUDE_PATH; ?>config/sql/submit.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify(answers),
            })
            .then(response => response.text())
            .then(data => {
                console.log(data);
            })
            .catch(error => console.error("Erro:", error));
            
            /*window.location.href = "<?php //echo INCLUDE_PATH; ?>/pages/studentArea.php";*/
        }

        function runAnimation() {
            const alert = document.getElementById("alert");

            alert.classList.remove("animate");
            void alert.offsetWidth;

            alert.classList.add("animate");
        }        
    </script>
    </main>