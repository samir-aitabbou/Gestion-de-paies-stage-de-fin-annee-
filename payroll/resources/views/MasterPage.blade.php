<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LGRPAIE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">


</head>

<body>
   <div class="d-flex" id="wrapper">
      <!--  side bare start here -->
     <div class="bg-white" id="sidebar-wrapper">
        <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
            <p>
                <i class="fa fa-cog fa-spin" style="color: red"></i>LGRPAIE
            </p>

            <div class="list-group list-groug-flush my-3">
                <a href="#" class="list-group-item list-group-item-action   second-text active">
                    <i class="fas fa-tachometer-alt"></i> Dashboard
                </a>

                    <div class="dropdown list-group-item list-group-item-action  bg-transparent second-text fw-bold">
                        <a href="/"  class="btn btn-secondary mb-4">Acceuil</a>
                        <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-chart-line me-2"></i>statistiques
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="/statistiques">Statistique</a></li>
                        </ul>
                    </div>
                    <div class="dropdown list-group-item list-group-item-action  bg-transparent second-text fw-bold">
                        <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user"></i> ︁salarie
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="{{Route('salaries.index')}}">ajouter un salarie</a></li>
                            <li><a class="dropdown-item" href="/All_salaries">liste des salaries</a></li>
                        </ul>
                    </div>
                    <div class="dropdown list-group-item list-group-item-action  bg-transparent second-text fw-bold">
                        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-calendar"></i> feuille de presence
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="/marquer_abscence">noter la présence</a></li>
                          <li><a class="dropdown-item" href="/liste_presence">liste de présence</a></li>

                        </ul>
                    </div>
                    <div class="dropdown list-group-item list-group-item-action  bg-transparent second-text fw-bold">
                        <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-folder-open"></i> bulletin de paie
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="/depences_par_année">Dépenses</a></li>
                          <li><a class="dropdown-item" href="/salaire">Salaires</a></li>
                          <li><a class="dropdown-item" href="/primes">Primes</a></li>
                        </ul>
                    </div>
                    <div class="dropdown list-group-item list-group-item-action  bg-transparent second-text fw-bold">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-wrench"></i> parametre
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="#">primes</a></li>
                          <li><a class="dropdown-item" href="#">heures supplimentaires</a></li>
                        </ul>
                    </div>
                    <a href="#" class="list-group-item list-group-item-action  bg-transparent second-text fw-bold" id="logout">
                        <i class="fas fa-sign-out-alt" ></i> log out
                    </a>
            </div>
        </div>
     </div>

      <!--  side bare ends here -->

      <div id="page-content-wrapper">
          <nav class="navbar navbar-expand-lg navbarlight bg-transparent py-4 px-4">
              {{-- <div class="d-flex align-item-center">
               <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                  <h2 class="fs-2 me-0">Dashboard</h2>
              </div> --}}

              {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
               data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
               aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggle-icone"></span>
              </button> --}}

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                      <li class="nav-item-dropdown">
                          <a href="" class="nav-link dropdown-toggle second-text fw-bold" id="navbarSupportedContent"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user me-2"></i> samir ait-abbou
                          </a>

                          <ul class="dropdown-menu" aria-labelledby="navbarDropDown">
                              <li>  <a href="#" class="dropdown-item"> Profile</a>  </li>
                              <li>  <a href="#" class="dropdown-item"> Se déconnecter</a>  </li>
                          </ul>
                      </li>
                  </ul>
              </div>
          </nav>

          <!---- Contenu --->
          <div class="container-fluid px-4">
              @yield('content')
          </div>
      </div>
   </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        var el = document.getElementById("wrapper")
        var toggleButton = document.getElementById("menu-toggle")
        toggleButton.onclick = function()
        {
          el.classList.toggle("toggled")
            // document.getElementById("wrapper").style.color = "black";
        }
    </script>
</body>
</html>







