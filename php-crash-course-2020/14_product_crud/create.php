<?php 

 $pdo = new PDO ("mysql:host=localhost;port=3306;dbname=products_crud","root","");
 $pdo->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
 $pdo->setAttribute (PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); 
 $pdo->setAttribute (PDO::ATTR_EMULATE_PREPARES, false); 


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <link rel="stylesheet" href="app.css"> 
</head>
  <body>
    <h1>Create New Products</h1>
            <form action="" method="post">
                    <div class="mb-3">
                        <label  >Product Image</label>
                        <br>
                        <input type="file" >
                    </div>
                    <div class="mb-3">
                        <label  >Product Title</label>
                        <input type="text" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label  >Product Description</label>
                        <textarea class="form-control"></textarea> 
                    </div>
                    <div class="mb-3">
                        <label  >Product Price</label>
                        <input type="number" step="0.1" class="form-control" >
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
  </body>
</html>  