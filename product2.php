<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the E-commerce Website</title>
    <link rel="stylesheet" href="CSS/styles.css"> 
</head>
<main>
    <div class="Tuto">
      <h2> Products Page   </h2>
    </div>
    <aside>Lorem ipsum dolor, 
        sit amet consectetur adipisicing elit. 
        Nihil deleniti, hic explicabo magni adipisci
         quos sint, consequatur repudiandae consectetur 
         nesciunt sequi facere officiis nam inventore 
         culpa vero optio voluptas alias?
         Lorem ipsum dolor sit, amet consectetur
          adipisicing elit. Cupiditate mollitia 
          sunt et non possimus eveniet voluptas voluptates, 
          reiciendis enim nostrum, praesentium iusto amet quidem
           rem quasi,
          natus vitae ipsa optio.
</aside> 
<img src="images/VERONICA.jpg" alt="image of cup of juice" height="200" width="200" class="product"><br>        
<form action="buy.php" method="post" class="buy" >

      <p>  Orange juice  <br>
           Price : 4 DT
      </p>
    <input type="hidden" name="amount" value="10000">
    <input type="submit" value="Buy Now">
</form>
</main>
</body>
</html>
