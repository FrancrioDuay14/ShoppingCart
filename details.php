<?php
    session_start();
    require_once("products.php");
    if(isset($_POST['btnProcess'])) {


        if(isset($_SESSION['cartItems'][$_POST['hdnKey']][$_POST['radSize']]))
            $_SESSION['cartItems'][$_POST['hdnKey']][$_POST['radSize']] += $_POST['txtQuantity']; 
        else
            $_SESSION['cartItems'][$_POST['hdnKey']][$_POST['radSize']] = $_POST['txtQuantity']; 

        
        $_SESSION['totalQuantity'] += $_POST['txtQuantity'];
        header("location:confirm.php");
    }
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
    <div class="container pt-5">
            <div class="row">
                <div class="col-md-11">
                    <h1><i class="fa-brands fa-shopify"></i>Learn IT Easy Online Shop</h1>
                </div>
                <div class="col-mid-1 text-right">
                    <a href="cart.php" class="btn btn-primary">
                    <i class="fa-solid fa-cart-shopping"></i>Cart <span class="badge badge-light">
                    <?php echo (isset($_SESSION['totalQuantity']) ? $_SESSION['totalQuantity'] : "0"); ?>
                    </span>
                    </a>
                </div>
            </div>
        <hr>
        <form action="" method="post">
        <div class="row">
            <?php if(isset($_GET['k']) && isset($arrProducts[$_GET['k']])) : ?>
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="product-grid2 card">
                            <div class="product-image2">
                                <a href="">
                                    <img class="pic-1" src="img/<?php echo $arrProducts[$_GET['k']]['photo1']; ?>">
                                    <img class="pic-2" src="img/<?php echo $arrProducts[$_GET['k']]['photo1']; ?>">
                                </a>                            
                            </div>                        
                        </div>
                    </div>         
                    <div class="col-md-8">
                        <h3><?php echo $arrProducts[$_GET['k']]['name'];?>
                            <span span class="badge badge-dark"><?php echo '₱ ' . $arrProducts[$_GET['k']]['price'];?></span>
                        </h3>
                         <p><?php echo $arrProducts[$_GET['k']]['description'];?></p>
                         <hr>
                         <input type="hidden" name="hdnKey" value="<?php echo $_GET['k']; ?>">
                        <h3 class="title">Select Size:</h3>
                        <input type="radio" name="radSize" id="radXS" value="XS" checked>
                        <label for="radXS" class="pr-3">XS</label>
                        <input type="radio" name="radSize" id="radSM" value="SM">
                        <label for="radSM" class="pr-3">SM</label>
                        <input type="radio" name="radSize" id="radMD" value="MD">
                        <label for="radMD" class="pr-3">MD</label>
                        <input type="radio" name="radSize" id="radLG" value="LG">
                        <label for="radLG" class="pr-3">LG</label>
                        <input type="radio" name="radSize" id="radXL" value="XL">
                        <label for="radXL" class="pr-3">XL</label>                        
                        <hr>      
                        <h3 class="title">Enter Quantity:</h3>
                        <input type="number" name="txtQuantity" id="txtQuantity" class="form-control" placeholder="0" min="1" max="100" required>
                        <br>
                        <button type="submit" name="btnProcess" class="btn btn-dark btn-lg"><i class="fa fa-check-circle"></i> Confirm Product Purchase</button>
                        <a href="index.php" class="btn btn-danger btn-lg"><i class="fa fa-arrow-left"></i> Cancel / Go Back</a>
                    </div>
            <?php endif; ?>
         </form>                 
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
</html>