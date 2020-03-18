<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php echo $title ?> -
        <?php echo $sitename ?> |
        <?php echo $tagline ?>
    </title>
    <link href="https://fonts.googleapis.com/css?family=Allerta|Marck+Script|Monoton|Sorts+Mill+Goudy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Marck+Script|Monoton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Marck+Script|Monoton|Sorts+Mill+Goudy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Allerta|Concert+One|Marck+Script|Monoton|Sorts+Mill+Goudy&display=swap" rel="stylesheet">
</head>
<style>
    body {
        font-family: 'Sorts Mill Goudy', serif;
        font-size: 15px;
        color: whitesmoke;
        background: #000000;
    }

    /* Style the header */
    .header1 {
        background-color: #000000;
        padding: 10px;
        align-content: flex-end;
        top: 0;
        position: fixed;
        width: 100%;
        z-index: 1;


    }

    .s2 {
        font-family: 'Allerta', sans-serif;
        color: whitesmoke;
        font-size: 10px;
    }

    .s1 {
        font-family: 'Marck Script', cursive;
        font-size: 30px;
        color: gold;
    }

    .s3 {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 15px;
        color: whitesmoke;
    }

    .static {
        position: relative;
        top: 10px;
        left: 30px;
    }
</style>


<div class="header1">
    <div class="s1">
        <nav class="navbar navbar-dark bg-dark">
            <h1>
                <?php echo $sitename ?>
            </h1>
        </nav>
    </div>
</div>
</nav>
<br><br><br><br><br><br>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">&nbsp;</a>
        </div>
        <ul class="nav navbar-nav">

            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="popular.php">Popular Movies</a></li>
            <li><a href="now-playing.php">Now Playing Movies</a></li>
            <li><a href="upcoming.php">Upcoming Movies</a></li>
            <li><a href="tv-series.php">TV SERIES</a></li>
        </ul>
        <div class="align-left">
            <div class="col-lg-10">
                <form class="form-inline my-2 my-lg-0" action="search.php" method="get">
                    <input class="form-control" type="text" name="search" placeholder="Cari Film" required>
                    <div class="col-auto my-2">
                        <select name="channel" class="custom-select mr-sm-2" id="inlineFormCustomSelect" required>
                            <option class="from-control" value="movie">Movie</option>
                            <option class="from-control" value="tv">TV Show</option>
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submit">CARI</button>
                </form>
            </div>
        </div>
    </div>
</nav>