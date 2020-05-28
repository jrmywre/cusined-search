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
                <h2>Classic Cheese Burger</h2>
                <p>The All-American Cheeseburger has certain non-negotiable elements: American cheese is one of them. Rather than unwrap individual singles, get sliced cheese from your nearest deli counter — it tastes better and melts slower and more evenly. Dill pickle chips, sliced red onion and tomato, crisp lettuce leaves, ketchup and mayo are also involved.</p>
                <a href="burger-recipe.php" class="btn btn-primary" role="button" aria-pressed="true">Get Cooking</a>
            </div>
            <img class="left-img" src="./images/cheese-burger.jpg" alt="Picture of food in a bowl">
        </section>

        <section class="left-wrapper">
            <div class="left-column">
                <h2>Roasted Squash Soup</h2>
                <p>Making soup from butternut squash is one of our go-to moves during the fall. Fortunately for you, it could not be easier. ROAST THE SQUASH...</p>
                <a href="butternut-recipe.php" class="btn btn-primary" role="button" aria-pressed="true">Get Cooking</a>
            </div>
            <img class="left-img" src="./images/soups-seeds.jpg" alt="Picture of food in a bowl">
        </section>

        <section class="left-wrapper">
            <div class="left-column">
                <h2>Farfalle pesto with Roasted Tomatoes</h2>
                <p>Roasted Tomato Pesto Pasta is so easy to make in only 20 minutes!  Flavorful parmesan basil pesto and juicy burst roast tomatoes make this irresistible!</p>
                <a href="pesto-recipe.php" class="btn btn-primary" role="button" aria-pressed="true">Get Cooking</a>
            </div>
            <img class="left-img" src="./images/farfalle-pesto.jpg" alt="Picture of food in a bowl">
        </section>

        <section class="left-wrapper">
            <div class="left-column">
                <h2>Scallop Ceviche in Leche De Tigre</h2>
                <p>In a country known for its fascinating, wide-ranging cuisine, ceviche just may be Perus national dish. Combinations of sparklingly fresh raw fish marinated in a piquant dressing (often made with ají amarillo and lime juice) are served everywhere, from the lowliest fish shacks to the finest restaurants.</p>
                <a href="ceviche-recipe.php" class="btn btn-primary" role="button" aria-pressed="true">Get Cooking</a>
            </div>
            <img class="left-img" src="./images/scallop-ceviche.jpg" alt="Picture of food in a bowl">
        </section>

        <section class="left-wrapper">
            <div class="left-column">
                <h2>Spaghetti Carbonara</h2>
                <p>The easiest pasta dish you will ever make with just 5 ingredients in 15 min, loaded with Parmesan and crisp bacon goodness!</p>
                <a href="carbonara-recipe.php" class="btn btn-primary" role="button" aria-pressed="true">Get Cooking</a>
            </div>
            <img class="left-img" src="./images/pasta-mobile.jpg" alt="Picture of food in a bowl">
        </section>

        <section class="left-wrapper">
            <div class="left-column">
                <h2>Shrimp Dumplings in Bacon Dashi</h2>
                <p>You can enjoy this Shrimp Dumpling dashi with so many things like eggs, fried tofu, or ramen noodles, just to name a few. Garnish with sliced green onions, thinly sliced red chiles, and toasted sesame seeds</p>
                <a href="dumpling-recipe.php" class="btn btn-primary" role="button" aria-pressed="true">Get Cooking</a>
            </div>
            <img class="left-img" src="./images/dumpling-soup.jpg" alt="Picture of food in a bowl">
        </section>
        <section class="left-wrapper">
            <div class="left-column">
                <h2>Rustic Sourdough</h2>
                <p>Delicious and simple sourdough bread: Yes. You. Can. Truly, there is nothing tricky about making sourdough bread: if you can make yeasted bread, you can make sourdough bread. There is video guidance for every step of the way. Let’s do this</p>
                <a href="sourdough-recipe.php" class="btn btn-primary" role="button" aria-pressed="true">Get Cooking</a>
            </div>
            <img class="left-img" src="./images/sourdough-mobile.jpg" alt="Picture of food in a bowl">
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