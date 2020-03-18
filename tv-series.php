<?php
include "conf/info.php";
$title = "TV Series";
include_once "header.php";
?>

<center>
  <br>
  <br<br>
    <h1>~ On Air TV Show ~</h1><br>
    <br<br>
      <?php
      include_once "api/api_tv.php";
      ?>
      <hr>
      <ul>
        <?php
        $arr = $tv_onair->results;
        $chunks = array_chunk($arr, 4);
        echo '<table border="0" width="500">';
        foreach ($chunks as $chunk) {
          echo '<tr height="600">';

          foreach ($chunk as $p) {

            echo '<td ><a href="tvshow.php?id=' . $p->id . '"><img src="http://image.tmdb.org/t/p/w300' . $p->poster_path . '"><h4>' . $p->original_name . " </h4><h5><em>First Air Date : " . $p->first_air_date .  "</em></h5><h5><em>Rate : " . $p->vote_average . " |  Vote : " . $p->vote_count . "</em></h5></a></h4>";
          }
          echo '</tr>';
        }
        echo '</table>';
        ?>
      </ul>
      <hr><br>
      <br<br>
        <h1>~ Top Rated TV Show ~</h1><br>
        <br<br>
          <hr>
          <ul>
            <?php
            $arr = $tv_top->results;
            $chunks = array_chunk($arr, 4);
            echo '<table border="0" width="500">';
            foreach ($chunks as $chunk) {
              echo '<tr width="5000">';

              foreach ($chunk as $p) {
                echo '<td ><a href="tvshow.php?id=' . $p->id . '"><img src="http://image.tmdb.org/t/p/w300' . $p->poster_path . '"><h4>' . $p->original_name . " </h4><h5><em>First Air Date : " . $p->first_air_date .  "</em></h5><h5><em>Rate : " . $p->vote_average . " |  Vote : " . $p->vote_count . "</em></h5></a></h4>";
              }
              echo '</tr>';
            }
            echo '</table>';
            ?>
          </ul>

</center>


<?php
include_once "footer.php";
?>