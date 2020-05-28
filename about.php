<?php 
    include_once 'includes/dbh-inc.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/media.css">

    <link rel="stylesheet" href="styles/menu.css"
    <link rel="stylesheet" href="styles/search.css">
    <link rel="stylesheet" href="styles/btn-styles.css">
    <link rel="stylesheet" href="styles/footer.css">

    <title>Cuisined.</title>
</head>
<body>
    <div class="hero-bg">
            <header>
                <a href="index.php" class="logo">Cuisined.</a>
            </header>

            <div class="menu-wrap">
                <input type="checkbox" class="toggler">
                    <div class="hamburger"><div></div></div>
                        <div class="menu">
                            <div>
                                <div>
                                    <ul class="nav-links">
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="recipes.php">Recipes</a></li>
                                        <li><a href="searchform.php">Ingredients</a></li>
                                        <li><a href="about.php">About Us</a></li>
                                    </ul> 
                                </div>
                            </div>
                        </div>
                </div>

            <div class="form-container">
                <h1>Explore new Recipes </h1>
                <form action="searchresults.php" method="POST" class="form-right">
                    <input class="searchbar" type="text" name="search" id="searchBar" placeholder="" value="Find a Recipe" maxlength="30" autocomplete="off" onmousedown="active();" onBlur="inactive();"
                      aria-label="Search">
                      <a name="search" <i class="fas fa-search" aria-hidden="true"></i></a>

                  </form>
            </div>
       
    </div>
    <div class="middle-container">
        <section class="left-wrapper">
            <div class="left-column">
                <h2>About Us</h2>
                <p>Sed velit lectus, porttitor eu convallis sit amet, semper eget mauris. Integer in pulvinar mauris. Donec facilisis placerat magna sed cursus. Mauris vel tristique arcu. Duis congue orci id libero dictum sollicitudin. Curabitur dapibus arcu leo, condimentum tempus augue </p>
                <p>a, iaculis orci. Aenean et augue aliquam, consectetur dolor vitae, volutpat lorem. Aliquam erat volutpat. Condimentum sed. Aliquam sed auctor ex. Nunc quis neque non eros dictum scelerisque ut ac urna. Etiam vel felis molestie, malesuada neque</p>
                <p>Donec feugiat ut lectus sed posuere. Aliquam erat volutpat. Vivamus sollicitudin arcu hendrerit erat ultrices, tristique dictum urna mattis. Nam sodales molestie tellus convallis aliquam.</p>
                <p>Etiam sit amet leo efficitur leo commodo auctor quis sed est. Praesent dictum accumsan lorem sit amet dapibus.</p>
                <p>Curabitur dapibus dictum consectetur. Curabitur vel odio purus. Suspendisse eget dolor ut massa accumsan porta Lorem ipsum dolor sit amet, consectetur adipiscing elit donec consectetur semper nunc in molestie. </p>
                <p>malesuada neque tempus, bibendum mauris. Nullam sit amet rhoncus nisl. Quisque non vehicula dui. Vestibulum neque tortor, placerat sit amet Suspendisse lacinia quam eros, vitae viverra velit fringilla non. In sed enim ut massa suscipit lobortis</p>
            </div>
            <img class="right-img" src="./images/artichokes.jpg" alt="Roasted Artichokes on a pan">
        </section>
    </div>    

    <div class="bottom-container">
    </div>
    <footer>
        <div class="footer-left">
            <p>All rights reserved<p>
            <p>Copyright 2020 &copy;</p>
        </div>

        <div class="footer-middle">
            <a href="index.php">Home</a>
            <a href="recipes.php">Recipes</a>
            <a href="searchform.php">Ingredients</a>
            <a href="about.php">About Us</a>
        </div>
        <div class="footer-right">
            <h4>Follow us on Social Media: </h4>
                <a href="" <i class="fab fa-linkedin"></i></a>
                <a href="" <i class="fab fa-twitter"></i></a>
                <a href="" <i class="fab fa-facebook-f"></i></a>
                <a href="" <i class="fab fa-instagram"></i></a>
        </div>
    </footer>
    <script src="app.js"></script>

</body>
</html>