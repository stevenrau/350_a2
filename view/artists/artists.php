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

        <div id="artists_main">
            <h2> Artists  </h2>
            <h3 class="operation_header"> Possible Operations: </h3>
            <ul id="operation_list">
                <li class="operation_list"
                    ><a class="operation_list" href="artistDisplay.php"> View all artists </a>
                </li>
                <li class="operation_list">
                    <a class="operation_list" href="artistAdd.php"> Add an artist </a>
                </li>
                <li class="operation_list">
                    <a class="operation_list" href="artistSearch.php"> Search for an artist </a>
                </li>
            </ul>
        </div>


        <footer>
            <small id="footer_copyright">Copyright &copy; 2016 Steven Rau</small>
        </footer>

    </body>

</html>
