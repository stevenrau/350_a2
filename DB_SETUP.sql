-- Create and select the database
CREATE DATABASE IF NOT EXISTS music ;
USE music ;


-- Create the three tables

CREATE TABLE IF NOT EXISTS artists
(
  id             int(6)       UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name           varchar(50)  NOT NULL,
  thumbnail_url  varchar(256) DEFAULT '/350_a2/artist_thumbnail/default.png'
           -- Artist thumnbnail img URL can be empty since we want to allow creating an
           -- artist without providing a thumbnail image.
           -- If thumbnail image is provided for an album, it will be stored in
           -- a file folder and the location will be saved here
);

CREATE TABLE IF NOT EXISTS albums
(
  id           int(6)         UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  title        varchar(50)    NOT NULL,
  artist_id    int(6)         UNSIGNED NOT NULL,
  artwork_url  varchar(256)   DEFAULT '/350_a2/artwork/default.png',
           -- Artwork URL can be empty since we want to allow creating an
           -- album without providing artwork
           -- If atwork is provided for an album, it will be stored in a file
           -- folder and the location will be saved here
  FOREIGN KEY (artist_id)  REFERENCES artists(id) ON DELETE CASCADE ON UPDATE CASCADE
           -- Cascade DELETE from parent table 'artists' to this child table
           -- i.e. If an artist is deleted from the artist table, all records
           --      involving that atist in this child table are also deleted
);

CREATE TABLE IF NOT EXISTS tracks
(
  id         int(6)       UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  title      varchar(50)  NOT NULL,
  artist_id  int(6)       UNSIGNED NOT NULL,
  album_id   int(6)       UNSIGNED,
  FOREIGN KEY (artist_id) REFERENCES artists(id) ON DELETE CASCADE ON UPDATE CASCADE,
           -- Cascade DELETE from parent table 'artists' to this child table
           -- i.e. If an artist is deleted from the artist table, all records
           --      involving that atist in this child table are also deleted
  FOREIGN KEY (album_id)  REFERENCES albums(id) ON DELETE CASCADE ON UPDATE CASCADE
);


-- Insert into a table
INSERT INTO artists(name) VALUES ('John Denver');
INSERT INTO artists(name) VALUES ('deadmau5');

