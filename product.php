<?php include 'header.php'; ?>
<?php
include 'db.php' ;

if(!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
$username = $_SESSION['username'];

$sql = "SELECT * FROM products" ;
$result = mysqli_query($conn ,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <main>
        <h2>Products</h2>
        <div class="SearchBar">
        <input type="text" id="searchBar" placeholder="Search for products...">
        <style>
            .SearchBar{
                text-align: center;
             }
             .SearchBar button{
                color: white;
             }
        </style>
        <button onclick="searchProduct()">Search</button>
        </div>
        <div id="productList">
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <div class="product">
                    <img src="<?php echo $row['image'] ; ?>" alt="<?php echo $row['name'] ; ?>" width="200" class="products_img">
                    <aside>
                        <div><h2>Description:</h2></div>
                        <?php echo $row['description']; ?>
                        <p>Lorem ipsum dolor sit amet 
                            consectetur adipisicing elit.
                             Necessitatibus maxime unde impedit
                              reprehenderit voluptatem laboriosam 
                              aut optio ab assumenda voluptates in itaque,
                               sequi, veniam temporibus incidunt magni,
                                ex illo! Necessitatibus.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                             Ipsam qui iure distinctio voluptates quaerat aliquam
                              dolorum perspiciatis provident eos delectus, laborum, 
                              excepturi, officia sed. Perspiciatis sequi aut
                               doloribus ad consectetur.</p>
                    </aside>
                    <h3><?php echo $row['name']; ?></h3>
                    <p>
                        Price:<?php echo $row['price']; ?> DT
                    </p>
                    <form action="buy.php" method="post">
                        <input type="hidden" name="product_id" value="<?php echo $row['id'] ;?>">
                        <button type="submit"><a>Buy Now</a></button>
                    </form>
                </div>
            <?php endwhile; ?>
        </div>    
    </main>
    <script src="search.js"></script>
</body>
</html>