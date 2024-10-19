<?php ob_start(); ?>
<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Portal Literario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="./css/style.css">

    </script>
      <style></style>

      <header class="text-body-tertiary">
        <div class="container-lg bg-color">
          <div class="container-lg ">
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
               <!- logo- >
               <div class="text-danger">
                 <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-book " viewBox="0 0 16 16">
                   <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/>
                 </svg> <strong>Portal Literario</strong>
               </div>  <!- fim logo- >
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
  <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/>
</svg> Categoria</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA1MCA1MCIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgNTAgNTAiPjxj aXJjbGUgZmlsbD0iI2VlZSIgY3g9IjI1IiBjeT0iMjUiIHI9IjI1Ii8+PHBhdGggZmlsbD0iIzY2NiIgZD0iTTE5Ljg5IDIxLjI1YzAtMi43NiAyLjI5LTUgNS4xMS01 czUuMTEgMi4yNCA1LjExIDUtMi4yOSA1LTUuMTEgNS01LjExLTIuMjQtNS4xMS01em0tNC4yNiAxNC4xN2gxLjdjMC00LjE0IDMuNDQtNy41IDcuNjctNy41czcuNjcg My4zNiA3LjY3IDcuNWgxLjcxYzAtMy44My0yLjQyLTcuMTItNS44NC04LjQ5IDEuOTYtMS4xNyAzLjI4LTMuMjcgMy4yOC01LjY4IDAtMy42OC0zLjA2LTYuNjctNi44 Mi02LjY3cy02LjgyIDIuOTktNi44MiA2LjY3YzAgMi40MSAxLjMyIDQuNTEgMy4yOCA1LjY4LTMuNDIgMS4zNy01LjgzIDQuNjYtNS44MyA4LjQ5eiIvPjwvc3ZnPg==" alt="mdo" width="32" height="32" class="rounded-circle">
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Cadastro</a>
                      <a class="dropdown-item" href="#">Estou lendo</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Sistema</a>
                      <a class="dropdown-item" href="#">Perfil</a>
                      <a class="dropdown-item" href="#">Loggof</a>
                      <a class="dropdown-item" href="#">Login</a>

                    </div>

                  </li>
                </ul>
              </div>
            </nav> <br>

          </div>

        </div>
      </header>

<body class="bg-light">
