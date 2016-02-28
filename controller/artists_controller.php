<?php

include_once("../../model/artists.php");

class Artists_Controller
{
     /**
      * Get a list of all artists
      */
     public function getAllArtists()
     {
          return Artist::getArtistsList();
     }

     /**
      * Gets an artist specified by the provided ID
      */
     public function getArtist()
     {
          // If the artistId is not set in the URL, redirect to the error page
          if (!isset($_GET['artistId']))
          {
              // header("Location: ../../error.php");
               die("ERROR: Missing artist ID");
          }

          //Get the artist from the model using the ID passed in the url
          return Artist::getArtistById($_GET["artistId"]);
     }

     /**
      * Updates an artist's name
      *
      * @param[in] artistId       ID of the artist to update
      * @param[in] newArtistName  The new name to give to the artist with the given ID
      */
     public function updateArtistName($artistId, $newArtistName)
     {
          if(0 == strlen($newArtistName))
          {
               // Display an alert window and return if the field was empty
               echo "<script type=\"text/javascript\">
                         alert(\"The new name field cannot be empty\");
                    </script>";

               return;
          }
     }

     /**
      * Stores a new thumbnail image for a given artist
      *
      * @param[in] artistId    ID of the artist to update
      * @param[in] imageName   Filename of uplaoded image (from _FILES['newThumbnail']['name'])
      * @param[in] tmpImgName  Filename of temp image upload (from _FILES['newThumbnail']['tmp_name'])
      */
     public function uploadArtistThumbnail($artistId, $imageName, $tmpImgName)
     {
          // Grab the artist with the given ID
          $artist = Artist::getArtistById($artistId);

          // Set the destination loaction. Use the artist's name as the image name
          $newFileName = $artist->name . "." . pathinfo($imageName, PATHINFO_EXTENSION);
          $uploadDir = "../../artist_thumbnail/";
          $uploadFile = $uploadDir . $newFileName;

          // Copy the tmp img to the destination location
          if (!move_uploaded_file($tmpImgName, $uploadFile))
          {
              die("ERROR: Possible file upload attack!");
          }

          // Use absolute path to the image in the DB
          $absolutePath = "/350_a2/artist_thumbnail/" . $newFileName;
          $success = Artist::updateArtistThumbUrl($artistId, $absolutePath);

          if ($success)
          {
               // Display an alert window and return if the field was empty
               echo "<script type=\"text/javascript\">
                         alert(\"Successfully uploaded new artist image\");
                    </script>";
          }
          else
          {
               // Display an alert window and return if the field was empty
               echo "<script type=\"text/javascript\">
                         alert(\"ERROR: Could not upload new artist image\");
                    </script>";
          }
     }
}


?>
