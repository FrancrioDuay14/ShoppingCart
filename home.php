<?php
    $arrProducts= array(
        array(
            'name'        => "Brown Shirt",
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex sunt maxime similique consectetur quis delectus suscipit, deserunt necessitatibus adipisci voluptatibus, quos mollitia debitis rerum temporibus itaque eos. Dolorem, dolor fuga.",
            'price'       => "550",
            'photo1'      => "produc1A.jpg",
            'photo2'      => "produc1B.jpg",
        ),
        array(
            'name'        => "Gray Shirt",
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex sunt maxime similique consectetur quis delectus suscipit, deserunt necessitatibus adipisci voluptatibus, quos mollitia debitis rerum temporibus itaque eos. Dolorem, dolor fuga.",
            'price'       => "550",
            'photo1'      => "produc2A.jpg",
            'photo2'      => "produc2B.jpg",
        ),
        array(
            'name'        => "White Blazer",
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex sunt maxime similique consectetur quis delectus suscipit, deserunt necessitatibus adipisci voluptatibus, quos mollitia debitis rerum temporibus itaque eos. Dolorem, dolor fuga.",
            'price'       => "750",
            'photo1'      => "produc3A.jpg",
            'photo2'      => "produc3B.jpg",
        ),
        array(
            'name'        => "Dark Blue Polo Shirt",
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex sunt maxime similique consectetur quis delectus suscipit, deserunt necessitatibus adipisci voluptatibus, quos mollitia debitis rerum temporibus itaque eos. Dolorem, dolor fuga.",
            'price'       => "600",
            'photo1'      => "produc4A.jpg",
            'photo2'      => "produc4B.jpg",
        ),
        array(
            'name'        => "Dark Blue Long Sleeve",
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex sunt maxime similique consectetur quis delectus suscipit, deserunt necessitatibus adipisci voluptatibus, quos mollitia debitis rerum temporibus itaque eos. Dolorem, dolor fuga.",
            'price'       => "800",
            'photo1'      => "produc5A.jpg",
            'photo2'      => "produc5B.jpg",
        ),
        array(
            'name'        => "White Long Sleeve",
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex sunt maxime similique consectetur quis delectus suscipit, deserunt necessitatibus adipisci voluptatibus, quos mollitia debitis rerum temporibus itaque eos. Dolorem, dolor fuga.",
            'price'       => "800",
            'photo1'      => "produc6A.jpg",
            'photo2'      => "produc6B.jpg",
        ),
        array(
            'name'        => "Dark Blue Blazer",
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex sunt maxime similique consectetur quis delectus suscipit, deserunt necessitatibus adipisci voluptatibus, quos mollitia debitis rerum temporibus itaque eos. Dolorem, dolor fuga.",
            'price'       => "750",
            'photo1'      => "produc7A.jpg",
            'photo2'      => "produc7B.jpg",
        ),
        array(
            'name'        => "Floral Polo",
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex sunt maxime similique consectetur quis delectus suscipit, deserunt necessitatibus adipisci voluptatibus, quos mollitia debitis rerum temporibus itaque eos. Dolorem, dolor fuga.",
            'price'       => "650",
            'photo1'      => "produc8A.jpg",
            'photo2'      => "produc8B.jpg",
        )

    );

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
    <title>Document</title>
</head>
<body>
    <div class="container pt-5">
            <div class="row">
                <div class="col-md-11">
                    <h1><i class="fa-brands fa-shopify"></i>Learn IT Easy Online Shop</h1>
                </div>
                <div class="col-mid-1 text-right">
                    <a href="" class="btn btn-primary">
                    <i class="fa-solid fa-cart-shopping"></i>Cart<span class="badge badge-light">0</span>
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
                                    <a href="#">
                                        <img class="pic-1" src="img/<?php echo $prodValue['photo1'];?>">
                                        <img class="pic-2" src="img/<?php echo $prodValue['photo2'];?>">
                                    </a>
                                    <a class="add-to-cart" href="">Add to cart</a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><?php echo $prodValue['name'] . ' ';?><span span class="badge badge-dark"> <?php echo '₱ ' . $prodValue['price'];?></span></h3>

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