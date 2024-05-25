<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>
    <!--------------- Bootstrap ---------------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--------------- My Style --------------->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <nav class="navbar navbar-dark">
        <a class="navbar-brand" href="#">
            <img src="https://upload.wikimedia.org/wikipedia/commons/2/26/Spotify_logo_with_text.svg" height="30" alt="Spotify">
        </a>
    </nav>
    <div id="app" class="container">
        <div class="row">
            <div v-for="disco in dischi" class="col-md-4">
                <div class="album">
                    <img :src="disco.poster" :alt="" class="img-fluid">
                    <div class="album-title">{{ disco.title }}</div>
                    <div class="album-author">{{ disco.author }}</div>
                    <div class="album-year">{{ disco.year }}</div>
                    <div class="album-genre">{{ disco.genre }}</div>
                </div>
            </div>
        </div>
    </div>

    <!--------------  VueJS -------------->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-------------- Axios -------------->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-------------- My-JS-w-Vue -------------->
    <script src="assets/js/app.js"></script>
</body>
</html>
