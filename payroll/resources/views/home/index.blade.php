@extends('MasterPage')

@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="homePage.css">
        <link rel="stylesheet" href="homePage2.css">
    </head>

    <body>

        {{-- <section class="header">
                <video autoplay loop class="video-background" muted plays-inline>
                        <source src="images/VidBg" type="video/mp4">
                </video>
        </section> --}}

        <h1 contenteditable="false" class="titre"><i class="fa fa-cog " style="color: red"></i>LGR PAIE</h1>
        <div class="box">
            <span style="--i:1;"> <img src="images/bulletin de paie.png" alt=""></span>
            <span style="--i:2;"> <img src="images/pesence.jpg" alt=""></span>
            <span style="--i:3;"> <img src="images/salaries.jpg" alt=""></span>
            <span style="--i:4;"> <img src="images/statistiques.jpg" alt=""></span>
            <span style="--i:5;"> <img src="images/bulletin de paie.png" alt=""></span>
            <span style="--i:6;"> <img src="images/pesence.jpg" alt=""></span>
            <span style="--i:7;"> <img src="images/salaries.jpg" alt=""></span>
            <span style="--i:8;"> <img src="images/statistiques.jpg" alt=""></span>
        </div>

        <div class="para1">
            <h3>LGRPAIE !</h3>
            <h4><span class="blanc"> C'est la Bonne Solution Pour Gerer Votre Entreprise </span></h4>
            <h5><i class="fa fa-folder-open" aria-hidden="true"></i><span class="blanc">Ajouter , modifier et supprimer les inforamations d'un salarie</span> </h5>
            <h5><i class="fa fa-folder-open" aria-hidden="true"></i><span class="blanc">Noter la presence des salaries </span> </h5>
            <h5><i class="fa fa-folder-open" aria-hidden="true"></i><span class="blanc">Gerer les depences , les salaires et les primes des salaries </span> </h5>
        </div>

    </body>
</html>

<style>
    body
    {
        margin: 0;
        padding: 0;
    }
    .para1{
        margin-top:200px;
        text-align: center;
        width: 100%;
        height:200px;
        /* background: gray;
        background: transparent 50%; */
        margin-bottom: 20px;
        border-radius: 3px;

    }
    .blanc{
        color: white;
    }
    .titre{
        font-family:cursive;
    }

    .header
    {
        height: 100vh;
    }
    h3,.fa{
        color: yellow;
    }
</style>
@endsection
