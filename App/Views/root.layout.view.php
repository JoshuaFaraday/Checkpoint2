<html>
    <head>
        <title>AdkovaGameDatabase</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="ukazka/public/1.css">
    </head>
    <body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="?c=Home"=Home">
            <img src="ukazka/img/game__storage__play__server__database-512.png" alt="database">
        </a>


        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>


        <!-- Links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="?c=Home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?c=Home&a=Kontakt">Kontakt</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?c=Home&a=About">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="?c=blog&a=add">Pridat recenziu</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="?c=blog">Recenzie</a>
                </li>



<!--                <a class="p-2 text-white active" href="?c=blog">Blog</a>-->
<!--                <a class="p-2 text-white active" href="?c=blog&a=add">Pridat recenziu</a>-->



            </ul>
        </div>
    </nav>
    <div class="web-content">
        <?= $contentHTML ?>
    </div>
    </body>
</html>
