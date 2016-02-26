<?php

     include_once("connection.php");

     class Artist
     {
          // Define the artist's attributes
          public $id;
          public $name;
          public $thumbnail_url;

          public function __construct($id, $name, $tumbnail_url)
          {
               $this->id = $id;
               $this->name = $name;
               $this->thumbnail_url = $tumbnail_url;
          }


          /*
           * Static function to get all artists from the DB in a list
           */
          public static function getArtistsList()
          {
               $list = [];
               $db = Database::getInstance();
               $req = $db->query('SELECT * FROM artists');

               // Create a list of all artists from the database results
               while ($artist = $req->fetch_assoc())
               {
                    $list[] = new Artist($artist['id'], $artist['name'], $artist['thumbnail_url']);
               }

               return $list;
          }
     }


?>
