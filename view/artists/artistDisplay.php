<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="/350_a2/a2Style.css">
        <title>Artists</title>
    </head>

    <body>
        <header>
            <a href="/350_a2/index.php"><img id="header_logo" src="/350_a2/icons/site_logo.png" alt="logo" width='15%' height='auto' /></a>
            <h1 id="site_title">Steven Rau - Music Database</h1>
            <nav>
                <a class="navigation" href="/350_a2/index.php">Home</a> |
                <a class="navigation" href="/350_a2/view/tracks/tracks.php">Tracks</a> |
                <a class="navigation" href="/350_a2/view/artists/artists.php">Artists</a> |
                <a class="navigation" href="/350_a2/view/albums/albums.php">Albums</a>
            </nav>
        </header>

        <div id="home_main">
            <div id="main_text"> Artists display </div>
        </div>

        <?php
            // Include the artists controller file
            include("../../controller/artists_controller.php");

            $controller = new Artists_Controller();
            $controller->invoke();

            if (isset($artists))
            {
                echo "artists is set!<br>";
            }
            foreach ($controller->artists as $curArtist)
            {
                echo '<p> Name: ' . $curArtist->name . "   URL: " . $curArtist->thumbnail_url;
            }

        ?>


        <footer>
            <small id="footer_copyright">Copyright &copy; 2016 Steven Rau</small>
        </footer>

    </body>

</html>