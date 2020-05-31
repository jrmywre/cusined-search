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
                <h2>Roasted Butternut Squash Soup</h2>
                <p>Making soup from butternut squash is one of our go-to moves during the fall. Fortunately for you, it could not be easier. ROAST THE SQUASH...</p>
                <a href="butternut-recipe.php" class="btn btn-primary" role="button" aria-pressed="true">Get Cooking</a>
                <a href="searchform.php" class="btn btn-secondary" role="button" aria-pressed="true">Ingredients</a>
            </div>
            <img class="right-img" src="./images/soups-seeds.jpg" alt="Roasted butternut squash">
        </section>

        <section class="right-wrapper">
            <div class="right-column">
                <h2>Farfalle pesto with Roasted Tomatoes</h2>
                <p>Roasted Tomato Pesto Pasta is so easy to make in only 20 minutes!  Flavorful parmesan basil pesto and juicy burst roast tomatoes make this irresistible!</p>
                <a href="pesto-recipe.php" class="btn btn-primary" role="button" aria-pressed="true">Get Cooking</a>
                <a href="searchform.php" class="btn btn-secondary" role="button" aria-pressed="true">Ingredients</a>
            </div>
            <img class="left-img" src="./images/farfalle-pesto.jpg" alt="Picture of food in a bowl">
        </section>

        <section class="left-wrapper">
            <div class="left-column">
                <h2>Classic Cheeseburger</h2>
                <p>The All-American Cheeseburger has certain non-negotiable elements: American cheese is one of them. Rather than unwrap individual singles, get sliced cheese from your nearest deli counter — it tastes better and melts slower and more evenly. Dill pickle chips, sliced red onion and tomato, crisp lettuce leaves, ketchup and mayo are also involved.</p>
                <a href="burger-recipe.php" class="btn btn-primary" role="button" aria-pressed="true">Get Cooking</a>
                <a href="searchform.php" class="btn btn-secondary" role="button" aria-pressed="true">Ingredients</a>
            </div>
            
            <img class="right-img" src="./images/cheese-burger.jpg" alt="Picture of food in a bowl">
        </section>
    </div>    

    <div class="bottom-container">
    <a href="recipes.php" class="btn btn-secondary" role="button" aria-pressed="true">More Recipes</a>
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
</body>
<script src="app.js"></script>

</html>