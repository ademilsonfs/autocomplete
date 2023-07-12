<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Automplete</title>
</head>

<body>
    <div class="container">
        <div class="mt-5">
            <h2>Busca....</h2>
            <input class="form-control" type="text" placeholder="Digite sua Busca" id="busca">
            <label for="busca" class="label-control">produto</label>
            <div class="d-none" id="autocomplete"></div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/underscore@1.13.6/underscore-umd-min.js"></script>
    <script src="js/autocomplete.js"></script>

</body>

</html>