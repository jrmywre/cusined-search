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
                <h2>Classic Cheeseburger</h2>
                    <p>The All-American Cheeseburger has certain non-negotiable elements: American cheese is one of them. Rather than unwrap individual singles, get sliced cheese from your nearest deli counter — it tastes better and melts slower and more evenly. Dill pickle chips, sliced red onion and tomato, crisp lettuce leaves, ketchup and mayo are also involved.</p>                
            </div>
            <img class="right-img" src="./images/cheese-burger.jpg" alt="Picture of food in a bowl">
        </section>
        <div class="directions-wrapper">
        <section class="instruction">
        <p> 
            <h3>Instructions</h3>
                <ol>
                    <li>In a large bowl, mix ground beef, onion powder, salt and pepper until just combined. Do not overmix, or your patties will be tough. </li>
                    <li>Divide into six portions and form patties, without pressing too hard. They should be uniform in thickness. Smooth out any cracks using your fingers. Make these right before you grill them, so they stay at room temperature. </li>
                    <li>Preheat your grill, grill pan or cast-iron skillet to high heat and add burger patties. If using a grill, cover with the lid.</li>
                    <li>Cook until the crust that forms on the bottom of the burger releases it from the pan or grate — about 2 minutes. Gently test, but don't flip it until it gets to this point. When burgers lift up easily, flip, add two slices of cheese to each, close lid if using a grill, and cook on the other side for another 2-3 minutes for medium to medium rare. </li>
                    <li>Remove burgers with a sturdy metal spatula and transfer to a plate. Allow to rest for several minutes, then transfer to buns.</li>
                    <li>Garnish as desired and serve immediately. </li> 
                </ol>
        </p>
        </section>
        <section class="ingredients">
            <p>
                <h3>Ingredients</h3>
                    <ul>
                        <li>2 pounds freshly ground chuck, (at least 80% lean, a.k.a. 80/20)</li>
                        <li>1 teaspoon salt</li>
                        <li>1 teaspoon freshly ground black pepper</li>
                        <li>12 slices deli-counter American cheese</li>
                        <li>6 large burger buns, preferably homemade, toasted if desired</li>
                            <h3>To garnish</h3>    
                                <li>ketchup</li>
                                <li>mayonnaise</li>
                                <li>sliced red onion</li>
                                <li>sliced tomatoes</li>
                                <li>sliced pickles</li>
                                <li>fresh lettuce leaves</li>
                    </ul>
            </p>    
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