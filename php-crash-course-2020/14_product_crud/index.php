<?php 

 $pdo = new PDO ("mysql:host=localhost;port=3306;dbname=products_crud","root","");
 $pdo->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
 $pdo->setAttribute (PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); 
 $pdo->setAttribute (PDO::ATTR_EMULATE_PREPARES, false); 

 $statememt = $pdo->prepare("SELECT * FROM products ORDER BY create_date DESC");
 $statememt->execute();
 $produts = $statememt->fetchAll(PDO::FETCH_ASSOC); 
//  echo '<pre>';
//    var_dump($produts); 
//  echo '<pre>'; 

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
    <h1>Products CRUD</h1>
    <p>
         <a href="create.php" class="btn btn-success">Create Product</a>
    </p>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Title</th>
      <th scope="col">Price</th>
      <th scope="col">Create Date </th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
          <?php foreach ($produts as $i => $product) : ?> 
                <tr>
                        <th scope="row">
                            <?php echo $i+1;?>
                        </th>
                        <td scope="row">
                            <?php echo $product['title'];?>
                        </td>
                        <td></td>
                        <td scope="row">
                            <?php echo $product['price'];?>
                        </td>
                        <td scope="row">
                            <?php echo $product['create_date'];?>
                        </td>
                        <td>
                             <button class="btn btn-sm btn-outline-primary">Edit</button>
                             <button class="btn btn-sm   btn-outline-danger">Delete</button>
                        </td>
                </tr>
          <?php endforeach?>
  </tbody>
</table>
  </body>
</html>  