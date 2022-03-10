<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="Emma Geo Kanfany">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-static/">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Festive&display=swap" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        footer{
    position: absolute;
    bottom: 5;
    left: 5;
    right: 5;
    background: #111;
    height: auto;
    width: 100vw;
    font-family: "Open Sans";
    padding-top: 40px;
    color: #fff;
}
.footer-content{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
}
.footer-content h3{
    font-size: 1.8rem;
    font-weight: 400;
    text-transform: capitalize;
    line-height: 3rem;
}
.footer-content p{
    max-width: 500px;
    margin: 10px auto;
    line-height: 28px;
    font-size: 14px;
}
.social-links{
    list-style: none;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 1rem 0 3rem 0;
}
.social-links li{
    margin: 0 10px;
}
.social-links a{
    text-decoration: none;
    color: #fff;
}
.social-links a i{
    font-size: 1.1rem;
    transition: color .4s ease;

}
.social-links a:hover i{
    color: aqua;
}

.footer-bottom{
    background: #000;
    width: 100vw;
    padding: 20px 0;
    text-align: center;
}
.footer-bottom p{
    font-size: 14px;
    word-spacing: 2px;
    text-transform: capitalize;
}
.footer-bottom span{
    text-transform: uppercase;
    opacity: .4;
    font-weight: 200;
}

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }
        img{
            /*width: 400px;
            height: auto;*/
            object-fit: cover;
            object-position: bottom top;
            box-shadow: 0 0 10px white;
            border-radius: 8px;
            display: block;
            position: absolute;
            top: 80px;
            right: 20px;
            width: 50%;
            opacity: 1;
        }
        .info{
            margin-left: -5%;
            margin-top: 2%;
        }
        .info h1{
            font-size: 70px;
            color: #212121;
            margin-top: 20px;
            
        }
        .info a{
            background: #212121;
            padding: 10px 18px;
            text-decoration: none;
            color: #fff;
            display: inline-block;
            margin: 30px 0;
            border-radius: 5px;
            
        }
        @media (max-width: 1200px){
        img{
            /*width: 400px;
            height: auto;*/
            object-fit: cover;
            /*object-position:bottom right;*/
            box-shadow: 0 0 10px white;
            border-radius: 8px;
            display: block;
            position: absolute;
            top: 400px;
            right: 100px;
            left: 100px;
            width: 30%;
            opacity: 1;
        }
            .container-fluid{
                text-align: center;
            }
        }

    </style>

    <!-- Custom styles for this template -->
    <link href="navbar-top.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

</head>
<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
        <div class="container-fluid"> <!--fluid c-a-d s'adapte à la taille d'écran-->
            <a class="navbar-brand" href="#">RH<span style="color:#ff4321">PLUS</span></a><!--brand pour la mise en forme-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="accueil.php"s>Accueil</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="candidature.php">Zone de candidature</a>
                </li>
            </ul>
            <form class="d-flex">
                <a class="btn btn-outline-success" type="submit" href="inscription.php">s'inscrire</a>&nbsp;
                <a class="btn btn-outline-success" type="submit" href="connexion.php">connexion</a>
            </form>
            </div>
        </div>
    </nav>
    <br/>

    <div class="container">
    
        <div class="info">
                <h1>RH<span style="color:#ff4321">PLUS</span>&#63;</h1>
            <p style="text-align: justify;letter-spacing: 3px;text-indent: 50px;">
                Est un espace qui met en relation les employés,<br/>
                
                les candidats et l'entreprise ... &#9786;<br/>
                <br/>
                Si vous êtes à la recherche d'un emploi,  <br/>
                vous pouvez postuler auprès de notre entreprise <br/>
                en accédant à ce lien &#8681;.
                <br/>  
            </p>   
            <a href="candidature.php" role="button">postuler &raquo;</a>
            
        </div>
        <div class="img-box">
            <img style="opacity:1; right:12px;" src="../images/candidat.jpg">  
        </div>
    </div>

        <br><br><br><br><br><br>  

    <footer>
        <div class="footer-content">
            <h3>Contact</h3>
            <p>
            Mermoz, Dakar<br/>
                    90000 / Dakar<br/>
                    N° Tél : +221 77 116 60 73 <br/>
                    kanfanyemma22@gmail.com<br/>
            </p>
            <ul class="social-links">
            <li><a href="https://www.facebook.com/emmageo"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="https://www.twitter.com/emmageo3"><i class="fab fa-twitter"></i></a></li>
            <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://www.linkedin.com/in/"><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy;2022 contact. designed by <span>Emma Geo Kanfany</span></p>
        </div>
      
    </footer>


    
</body>
</html>