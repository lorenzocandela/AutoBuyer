<!DOCTYPE html>
<html lang="it">
<head>
    <link rel="stylesheet" href="degular.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AutoBuyer</title>

    <link rel="stylesheet" href="style.css?v=0.9">
</head>
<body style="text-align: center">

    <div class="container">
        <div class="menu sx">
            <div class="indice">
                <span class="in"><a href="#" onclick="location.reload(); return false;"><img style="width: 30px; margin-top: 10px; margin-left: 5px;" src="./img/logo-autobuyer.png"></a></span>
            </div>
            <div class="indice indice-sez">
                <span class="sez"><a href="#" onclick="changeInclude(event, 'explore')"><img src="./img/ico/explore.svg"> Explore</a></span>
                <span class="sez"><a href="#" onclick="changeInclude(event, 'ordini')"><img src="./img/ico/ordini.svg"> Ordini</a></span>
                <span class="sez"><a href="#" onclick="changeInclude(event, 'inbox')"><img src="./img/ico/inbox.svg"> Inbox</a></span>
                <span class="sez"><a href="#" onclick="changeInclude(event, 'gestionale')"><img src="./img/ico/gestionale.svg"> Gestionale</a></span>
                <span class="sez"><a href="#" onclick="changeInclude(event, 'chat')"><img src="./img/ico/chat.svg"> Chat</a></span>
                <span class="sez"><a href="#" onclick="changeInclude(event, 'note')"><img src="./img/ico/note.svg"> Note</a></span>
                <span class="sez"><a href="#" onclick="changeInclude(event, 'settings')"><img src="./img/ico/settings.svg"> Impostazioni</a></span>
            </div>
        </div>

        <div class="dx">
            <?php
                $page = isset($_GET['page']) ? $_GET['page'] : 'default';
                $file_to_include = './routing/' . $page . '.php';
                if (file_exists($file_to_include)) {
                    include $file_to_include;
                } else {
                    include './routing/about.php';
                }
            ?>
        </div>
    </div>

    <script>
        function changeInclude(event, file) {
            //toglge + evento active
            event.preventDefault();
            document.querySelectorAll('.indice-sez .sez').forEach(function(span) {
                span.classList.remove('active');
            });
            event.currentTarget.parentElement.classList.add('active');
            window.location.search = '?page=' + file;
        }

        document.addEventListener('DOMContentLoaded', function() {
            const params = new URLSearchParams(window.location.search);
            const page = params.get('page') || 'about';
            document.querySelectorAll('.indice-sez .sez').forEach(function(span) {
                const a = span.querySelector('a');
                if (a && a.getAttribute('onclick') && a.getAttribute('onclick').includes("'" + page + "'")) {
                    span.classList.add('active');
                }
            });
        });
    </script>  
    <script src="main.js"></script>
</body>
</html>
