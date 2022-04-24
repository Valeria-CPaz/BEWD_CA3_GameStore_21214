<?php 
    include 'Connection.php';

    $sql = "SELECT * FROM games WHERE id=".$_GET['id'];

    $result = $conn->query($sql);
    $games = $result->fetch_assoc();
  

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Game Store</title>
  </head>
  <body>
    <?php include 'NavBar.php' ?>
    <div class="container">
        <h3>Edit Game</h3>
        <form action="EditGame.php" method="POST">
            <input type="hidden" value="<?=$_GET['id']?>" name="id">
            <div class="mb-3">
                <label for="forName" class="form-label">Game Name</label>
                <input  type="text" 
                        class="form-control" 
                        id="name"  
                        name="name" 
                        aria-describedby="nameHlep" 
                        value="<?= $games['name'] ?>">
            </div>
            <div class="mb-3">
                <label for="forConsole" class="form-label">Console</label>
                <select class="form-select" id="console" name="console" aria-describedby="consoleHelp" value="<?= $games['console'] ?>">
                    <option selected>Select Console</option>
                    <option <?= ($games['console'] === 'xbox')? 'selected' : null ?> value="xbox">Xbox One</option>
                    <option <?= ($games['console'] === 'ps4')? 'selected' : null ?> value="ps4">PS4</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="forGenre" class="form-label">Genre</label>
                <select class="form-select" id="genre" name="genre" aria-describedby="genreHelp" value="<?= $games['genre'] ?>">
                    <option selected>Select Genre</option>
                    <option <?= ($games['genre'] === 'shooter')? 'selected' : null ?> value="shooter">Shooter</option>
                    <option <?= ($games['genre'] === 'rpg')? 'selected' : null ?> value="rpg">Rpg</option>
                    <option <?= ($games['genre'] === 'rts')? 'selected' : null ?> value="rts">Real-time strategy</option>
                    <option <?= ($games['genre'] === 'puzzle')? 'selected' : null ?> value="puzzle">Puzzle</option>
                    <option <?= ($games['genre'] === 'moba')? 'selected' : null ?> value="moba">MOBA</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="forGenre" class="form-label">Available</label>
                <select class="form-select" id="available" name="available" aria-describedby="availableHelp" value="<?= $games['available'] ?>">
                <option selected>Select Availability</option>
                    <option <?= ($games['available'] === 'yes')? 'selected' : null ?> value="yes">Yes</option>
                    <option <?= ($games['available'] === 'no')? 'selected' : null ?> value="no">No</option>
                </select>
            </div>          
            <div class="mb-3">
                <label for="forPrice" class="form-label">Price</label>
                <input type="number" class="form-control" id="price"  name="price" aria-describedby="priceHelp" value="<?= $games['price'] ?>">
            </div>        
            <button type="submit" class="btn btn-primary">Submit Game</button>
        </form>
    </div>

         




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>