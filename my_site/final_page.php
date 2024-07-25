<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Para Você</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Helvetica&family=Courgette&family=Patrick+Hand&display=swap');

        body {
            font-family: 'Helvetica', Arial, sans-serif;
            background-color: #000; /* Fundo preto */
            color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            position: relative;
        }

        body::before {
            content: '❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            text-align: center;
            font-size: 1.5em;
            color: red;
        }

        body::after {
            content: '❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            text-align: center;
            font-size: 1.5em;
            color: red;
        }

        .container {
            max-width: 800px;
            width: 100%;
            margin: 20px;
            padding: 20px;
            background-color: #1c1c1c; /* Fundo cinza escuro */
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
            border-radius: 10px;
        }

        header {
            text-align: center;
            background-color: #4b0082; /* Roxo */
            color: #fff;
            padding: 20px;
            border-radius: 10px 10px 0 0;
            font-family: 'Patrick Hand', cursive;
        }

        header h1 {
            margin: 0;
            font-size: 2.2em;
            color: #fff;
            text-shadow: 2px 2px 0 #FF0000, -2px 2px 0 #FF0000, 2px -2px 0 #FF0000, -2px -2px 0 #FF0000;
        }

        .section {
            margin: 20px 0;
            text-align: center;
        }

        .section button {
            background-color: #4b0082; /* Roxo */
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 1.2em;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .section button:hover {
            background-color: #800080; /* Roxo escuro */
        }

        .content {
            background-color: #2e2e2e; /* Cinza mais claro */
            padding: 20px;
            border-radius: 5px;
            margin-top: 10px;
            box-shadow: 0 0 5px rgba(255, 255, 255, 0.2);
            display: none;
        }

        textarea {
            width: 100%;
            height: 100px;
            border-radius: 5px;
            padding: 10px;
            border: 1px solid #ccc;
            resize: none;
            background-color: #f9f9f9;
            color: #000;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #4b0082; /* Roxo */
            color: #fff;
            border-radius: 0 0 10px 10px;
        }

        .album-cover {
            width: 200px;
            height: 200px;
            margin: 20px auto;
            background-image: url('static/css/album.jpg');
            background-size: cover;
            background-position: center;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Para Você, Leticia</h1>
        </header>
        
        <div class="section" id="poems-section">
            <button onclick="toggleSection('poems')">Poemas</button>
            <div class="content" id="poems">
                <h2>Poemas</h2>
                <p>No turbilhão da mente, ideias se entrelaçam,<br>
                Nessa escuridão em um quarto sem luz.<br>
                Sentidos, palavras, ações, num enigma se amontoam.<br>
                Te vejo jogar, de Irelia e fico em graça o qual ruim você é.<br>
                Mas em seus trejeitos, um fascínio me inundam.<br>
                Sua beleza, como o entardecer do sol, vermelho o qual me intriga,<br>
                Um mistério que seu olhar não desvenda.<br>
                "Caua", você me chama, apelido que me irrita<br>
                mas no fim, isso não faz parte?<br>
                Em nossa relação, um misto de ódio e simpatia.<br>
                Xingamentos e afetos, um paradoxo que me intriga,<br>
                Um sentimento único, que em meu peito irradia.<br>
                Leveza me invade quando estamos juntos,<br>
                Mesmo em meio às piadinhas e pseudo desavenças, um laço se constrói.<br>
                Talvez essas coisas sejam um lado moeda, num jogo que se constrói.<br>
                Um sentimento complexo, que em meu ser se anima.</p>
                <p>Em cada olhar, um mistério escondido,<br>
                No silêncio da noite, nossos sorrisos são ouvidos.<br>
                Caminhamos juntos, por trilhas desconhecidas,<br>
                Seu toque suave, todas as minhas feridas.<br>
                Sinto seu perfume, cheiro de terra molhada,<br>
                Na chuva dançamos, alma apaixonada.<br>
                Seu sorriso ilumina os dias mais sombrios,<br>
                Com você, todos os medos são desafios.<br>
                Nossa história é escrita com cada momento,<br>
                Em nossas mãos, carregamos o firmamento.<br>
                Leticia, com você, encontrei meu lugar,<br>
                Em seu coração, desejo sempre estar.</p>
                <p>Em noites calmas, sob o brilho da lua,<br>
                Seu riso suave, minha paz insinua.<br>
                Cada palavra sua, um carinho ao ouvido,<br>
                Cada toque seu, um sonho vivido.<br>
                Caminhos incertos que juntos traçamos,<br>
                Em meio às tempestades, sempre nos encontramos.<br>
                Na simplicidade do seu jeito, encontro meu abrigo,<br>
                Em seus olhos, vejo mais que um amigo.<br>
                Leticia, em cada detalhe seu, me perco e me acho,<br>
                Seu amor é o caminho que sempre refaço.<br>
                Com você, aprendi o que é amar,<br>
                Em sua companhia, quero sempre estar.</p>
            </div>
        </div>

        <div class="section" id="music-section">
            <button onclick="toggleSection('music')">Músicas para você</button>
            <div class="content" id="music">
                <h2>Músicas para você</h2>
                <ul>
                    <li>Tame Impala - New Person, Same Old Mistakes</li>
                    <li>Joji - Sanctuary</li>
                    <li>Você — Tim Maia</li>
                    <li>And I Love Her - Kurt Cobain</li>
                </ul>
            </div>
        </div>

        <div class="section" id="my-music-section">
            <button onclick="toggleSection('my-music')">Música que eu fiz para você</button>
            <div class="content" id="my-music">
                <h2>Música que eu fiz para você</h2>
                <div class="album-cover"></div>
                <audio controls>
                    <source src="static/let.mp3" type="audio/mpeg">
                    Seu navegador não suporta o elemento de áudio.
                </audio>
            </div>
        </div>

        <div class="section" id="things-to-see-section">
            <button onclick="toggleSection('things-to-see')">Coisas que quero ver com você</button>
            <div class="content" id="things-to-see">
                <h2>Coisas que quero ver com você</h2>
                <ul>
                    <li>Friends</li>
                    <li>How I Met Your Mother</li>
                    <li>Better Call Saul</li>
                    <li>The Boys</li>
                </ul>
                <textarea id="user-list" placeholder="Adicione outras coisas que você gostaria de ver comigo..."></textarea>
                <button onclick="saveUserList()">Salvar Lista</button>
            </div>
        </div>

        <div class="section" id="message-section">
            <button onclick="toggleSection('message')">Recadinho</button>
            <div class="content" id="message">
                <h2>Recadinho</h2>
                <textarea id="user-message" placeholder="Digite seu recado aqui..."></textarea>
                <p>Bom, esse é meu recado por enquanto, na verdade um pedido: sabe aquela vez que eu pedi pra você não me machucar? Então, te peço novamente, se você for sumir beleza, eu entendo, só tenta me avisar, ok? Eu te espero.<br>Se tiver algo pra dizer, é só escrever no campo abaixo ou me dizer por mensagem.</p>
                <button onclick="sendMessage()">Enviar</button>
            </div>
        </div>

        <div class="section" id="apps-section">
            <button onclick="toggleSection('apps')">Links dos aplicativos que fiz para você</button>
            <div class="content" id="apps">
                <h2>Links dos aplicativos que fiz para você</h2>
                <ul>
                    <li><a href="https://gofile.io/d/pn7aOc" target="_blank">App 1</a></li>
                    <li><a href="https://gofile.io/d/QAeLQa" target="_blank">App 2</a></li>
                </ul>
            </div>
        </div>

        <footer>
            <p>Feito com amor por Kaya ou Cauê KKKKKKKKKKKKK</p>
        </footer>
    </div>

    <script>
        function toggleSection(id) {
            var section = document.getElementById(id);
            if (section.style.display === "none" || section.style.display === "") {
                section.style.display = "block";
            } else {
                section.style.display = "none";
            }
        }

        function saveUserList() {
            var userList = document.getElementById("user-list").value;
            localStorage.setItem("userList", userList);
            alert("Lista salva!");
        }

        window.onload = function() {
            var savedList = localStorage.getItem("userList");
            if (savedList) {
                document.getElementById("user-list").value = savedList;
            }
        }

        function sendMessage() {
            var userMessage = document.getElementById("user-message").value;
            alert("Mensagem enviada: " + userMessage);
            document.getElementById("user-message").value = "";
        }
    </script>
</body>
</html>
