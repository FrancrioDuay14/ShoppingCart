<?php 
    session_start();
    require_once("products.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="css/shopcart.css">
    <title>Learn IT Easy Online Shop | Product</title>
</head>
<body>
    <div class="container">
            <div class="row mt-5">
                <div class="col-10">
                    <h1><i class="fa fa-store"></i> Learn IT Easy Online Shop</h1>
                </div>
                <div class="col-2 text-right">
                    <a href="cart.php" class="btn btn-primary">
                        <i class="fa fa-shopping-cart"></i> Cart
                        <span class="badge badge-light">                        
                            <?php echo (isset($_SESSION['totalQuantity']) ? $_SESSION['totalQuantity'] : "0"); ?>
                        </span>
                    </a>
            </div>            
        </div>
        <hr>
        <div class="row mt-3">
            <?php if (isset($arrProducts)) : ?>
                <?php  foreach ($arrProducts as $product => $prodValue) { ?>
                            <div class="col-md-3 col-sm-6">
                                <div class="product-grid2">
                                    <div class="product-image2">
                                        <a href="details.php?k=<?php echo $product?>">
                                            <img class="pic-1" src="img/<?php echo $prodValue['photo1'];?>">
                                            <img class="pic-2" src="img/<?php echo $prodValue['photo2'];?>">
                                        </a>
                                        <a class="add-to-cart" href="details.php?k=<?php echo $product?>">Add to cart</a>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="title"><?php echo $prodValue['name'] . ' ';?>
                                            <span span class="badge badge-dark"> <?php echo '₱ ' . $prodValue['price'];?></span>
                                        </h3>
                                    </div>
                                </div>  
                            </div>             
                <?php }?>          
            <?php endif; ?>
        </div>  
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
</html>