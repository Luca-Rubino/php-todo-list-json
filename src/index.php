<?php 

// header("location: page/server.php")

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootsrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- personal css -->
    <link rel="stylesheet" href="./css/style.css">
    <title>Todolist-Api</title>
</head>
<body>
    <header>
        <h1>Todolist-Api</h1>
    </header>
    <main id="app">
        <section class="container">
            <div class="row">
            <h2 class="text-success-emphasis px-2">Lista impegni</h2>
            </div>
            <div class="row">
                <article class="col-6">
                    <ol class="list-group" v-for="todoElement in todoList" :class="todoElement.completato ? 'text-decoration-line-through' : ''">
                        <li class="list-group-item text-center">
                            <p>{{ todoElement.compito }}</p>
                        </li>
                    </ol>
                </article>
            </div>
        </section>
    </main>
    <footer></footer>
    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.2/axios.min.js" integrity="sha512-JSCFHhKDilTRRXe9ak/FJ28dcpOJxzQaCd3Xg8MyF6XFjODhy/YMCM8HW0TFDckNHWUewW+kfvhin43hKtJxAw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- vue3 -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- bootsrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- personal js -->
     <script src="./js/script.js"></script>
</body>
</html>