<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Le spécialiste de l'info sur ONE PIECE</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="/css/visu.css"/>
    </head>
    <body>
        <header>
            <!--Menu qui s'ouvre afin de pouvoir sélectionner l'un des différent equipage que l'on souhaite voir-->
            <?php include('menu.php');?>
        </header>
        <main>
            <!--Début de la page du personnage-->
            <section class="descP">
                <h1></h1>
                <p>#</p>
                <p>#</p>
                <p>#</p>
                <p>#</p>
            </section>
            <!--Fin de la présentation classique et début du sommaire des carac du perso-->
            <aside>
                <h1 id="Summary"> Sommaire</h1> 
                <ol>    
                    <li><a href="#App"> Apparence</a> 
                        <ol>
                            <li><a href="#AG"> Apparence Générale</a></li>
                            <li><a href="#APoE"> Apparence Pré Elipse</a></li>
                            <li><a href="#APrE"> Apparence Post Elipse</a></li>
                        </ol>
                    </li>
                    <li><a href="#Pers"> Personnalité</a> </li>
                    <li><a href="#Gal"> Galerie</a> </li>
                </ol>
            </aside>
            <section class="descP">
                <h1 id="App">Apparence</h1>
                    <h2 id="AG"> <a href="#Summary">Apparence Générale</a></h2>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <h2 id="APoE"> <a href="#Summary">Apparence Pré Elipse</a></h2>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <h2 id="APrE"> <a href="#Summary">Apparence Post Elipse</a></h2>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
            </section>
            <section class="descP">
                <h1 id="Pers"> <a href="#Summary">Personnalité</a></h1>
                    <p></p>
                    <p></p>
                    <figure>
                        <figcaption class="imgLeg"></figcaption>
                    </figure>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <figure>
                        <figcaption class="imgLeg"></figcaption>
                    </figure>
            </section>
            <section>
                <h1 id="Gal"><a href="#Summary">Galerie</a></h1>
                    <ul>
                        <li><img src="" alt=""></li>
                    </ul>
            </section>
        </main>
    </body>
</html>