<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Product Page</title>
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Gateway System</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Categories</a>
      </li>
    </ul>
  </div>
</nav>

<?php
require 'config.php';
$sql="SELECT * FROM product";
$result = mysqli_query($conn,$sql);
?>

<div class="container">
  <div class="row">
<?php
while($row=mysqli_fetch_array($result))
{
?>
<div class="col-lg-4 mt-3 mb-3">
  <div class="card-deck">
    <div class="card border-info p-2">
      <img src="<?= $row['product_image']; ?> class="card-img-top" height="320">
      <h5 class="card-title">Product : <?=$row['product_name'];?></h5>
      <h3>Price : <?= number_format($row['product_price']); ?>/-</h3>
      <a href="order.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-block btn-lg">Buy Now</a>
    </div>
  </div>
</div>
<?php } ?>
  </div>
</div>
</body>
</html>