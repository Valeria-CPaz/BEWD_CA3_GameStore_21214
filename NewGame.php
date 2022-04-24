<?php
include 'Connection.php';
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
    <div class="container">
       <h1>Add new game</h1>
       <form method="post" action="handleNewGames.php" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="forName" class="form-label">Game Name</label>
                <input type="text" class="form-control" id=""  name="name" aria-describedby="nameInput">
            </div>
            <div class="mb-3">
                <label for="forConsole" class="form-label">Console</label>
                <select class="form-select"  name="console" aria-label="Default select example">
                    <option selected>Select console</option>
                    <option value="xbox">Xbox One</option>
                    <option value="ps4">PS4</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="forGenre" class="form-label">Game Genre</label>
                <select class="form-select"  name="genre" aria-label="Default select example">
                    <option selected>Select game genre</option>
                    <option value="shooter">Shooter</option>
                    <option value="rpg">RPG</option>
                    <option value="rts">Real-time strategy</option>
                    <option value="puzzle">Puzzle</option>
                    <option value="moba">MOBA</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="forAvailability" class="form-label">Available</label>
                <select class="form-select"  name="available" aria-label="Default select example">
                    <option selected>Select option</option>
                    <option value="yes">Available</option>
                    <option value="no">Not Available</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="forPrice" class="form-label">Price</label>
                <input type="number" class="form-control" id=""  name="price" aria-describedby="priceInput">
            </div>
            <div class="mb-3">
                <input type="file" name="image" id="imageToUpload">
            </div>
            <button type="submit" class="btn btn-primary">Submit Game</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

