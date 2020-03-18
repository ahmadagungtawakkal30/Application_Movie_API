<?php
include "conf/info.php";

$id_movie = $_GET['id'];
include_once "api/api_movie_id.php";
include_once "api/api_movie_video_id.php";
include_once "api/api_movie_similar.php";
$title = "Detail Movie (" . $movie_id->original_title . ")";
include_once "header.php";

?>
<div class="s3">
  <?php
  if (isset($_GET['id'])) {
    $id_movie = $_GET['id'];
  ?>
    <h1><?php echo $movie_id->original_title ?></h1>
    <?php
    echo "<h4>~ " . $movie_id->tagline . " ~</h4>";
    ?>


    <center>
      <?php

      foreach ($movie_video_id->results as $video) {
        echo '<iframe width="640" height="420" src="' . "https://www.youtube.com/embed/" . $video->key . '" frameborder="0" allowfullscreen></iframe>';
      }
      ?>

      <hr>
      <img src="<?php echo $imgurl_1 ?><?php echo $movie_id->backdrop_path ?>"></center>
    <br><br>
    <div class="static">
      <p>Title : <?php echo $movie_id->original_title ?></p>
      <p>Tagline : <?php echo $movie_id->tagline ?></p>
      <p>Genres :
        <?php
        foreach ($movie_id->genres as $g) {
          echo '<span>' . $g->name . '</span> ';
        }
        ?>
      </p>
      <p>Overview : <?php echo $movie_id->overview ?></p>
      <p>Release Date : <?php $rel = date('d F Y', strtotime($movie_id->release_date));
                        echo $rel ?></p>
      <p>Production Companies :
        <?php
        foreach ($movie_id->production_companies as $pc) {
          echo $pc->name . " ";
        }
        ?>
      </p>
      <p>Production Countries:
        <?php
        foreach ($movie_id->production_countries as $pco) {
          echo $pco->name . "&nbsp;&nbsp;";
        }
        ?>
      </p>
      <p>Budget: $ <?php echo $movie_id->budget ?> </p>
      <p>Vote Average : <?php echo $movie_id->vote_average ?></p>
      <p>Vote Count : <?php echo $movie_id->vote_count ?></p>

    </div>
    <hr>
    <h3>Similar Movies</h3>
    <ul>
      <center>
        <?php
        $arr = $movie_similar_id->results;
        $chunks = array_chunk($arr, 4);
        echo '<table border="0" width="500">';
        foreach ($chunks as $chunk) {
          echo '<tr width="5000">';

          foreach ($chunk as $p) {

            echo '<td><a href="movie.php?id=' . $p->id . '"><img src="http://image.tmdb.org/t/p/w300' . $p->poster_path . '"><h4>' . $p->original_title . " (" . substr($p->release_date, 0, 4) . ")</h4><h5><em>Rate : " . $p->vote_average . " |  Vote : " . $p->vote_count . "</em></h5></a></td>";
          }
          echo '</tr>';
        }
        echo '</table></center>';
        ?>
      </center>
    </ul>


  <?php
  } else {
    echo "<h5>Movie tidak ditemukan.</h5>";
  }
  ?>

  <?php
  include_once "footer.php";
  ?>