<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <title>CRM</title>
    </head>
    <body>
    <div class="container">
            <ul class="nav justify-content-center bg-dark">
            <h2 class="text-light">My mini CRM</h2>
            <li class="nav-item">
                <a class="nav-link active" href="#">Listings</a>
                </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Ajouter Client</a>
                </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Ajouter Entreprise</a>
                </li>
            </ul>

        <header>
        <div class="row no-gutters">
            <div class="col-12">
                <h1>Listing Clients/Entreprises</h1>
            </div>
            <div class="col-12">
                <ul class="nav nav-tabs nav-justified">
                    <li><a href="#">Clients()</a></li>
                    <li><a href="#">Entreprise()</a></li>
                </ul>
            </div>
            <nav class="navbar navbar-light bg-light">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="button"><i class="fas fa-ban"></i></button>
                </form>
            </nav>
        </div>
    </header>

    <main>
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      Collapsible Group Item #1
    </button>
    </h5>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
  <div class="card-body">

  </div>
    </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Collapsible Group Item #2
                    </button>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">

                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Collapsible Group Item #3
                    </button>
                </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
            </main>
    </div>
    </body>


    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</html>
