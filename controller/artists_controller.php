<?php

include_once("../../model/artists.php");

class Artists_Controller
{
     public $artists;

     public function invoke()
     {

          if (!isset($_GET['artist']))
          {
               // no special artist is requested, we'll show a list of all available artists
               $this->artists = Artist::getArtistsList();
          }
          else
          {
               echo "Looking for a single artist<br>";
          }
     }
}


?>
