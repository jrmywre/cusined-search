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
                <h2>SHRIMP DUMPINGS IN BACON DASHI</h2>
                <p>The easiest pasta dish you will ever make with just 5 ingredients in 15 min, loaded with Parmesan and crisp bacon goodness!</p>
                <p>This dish is a deli egg-bacon-and-cheese-on-a-roll that has been pasta-fied, fancified, fetishized and turned into an Italian tradition that, like many inviolate Italian traditions, is actually far less old than the Mayflower. Because America may have contributed to its creation, carbonara is Exhibit A in the back-and-forth between Italy and the United States when it comes to food. Remember: the main goal is creaminess.</p>
            </div>
            <img class="right-img" src="./images/dumpling-soup.jpg" alt="dumplings in a bowl">
        </section>
        <div class="directions-wrapper">
        <section class="instruction">
        <p> 
            <h3>How to Make Dumplings</h3>
                <ol>
                    <li>In a large bowl, combine shrimp, pork, cabbage, green onions, ginger, sesame oil, mirin, salt and pepper, to taste.</li>
                    <li>To assemble the dumplings, place wrappers on a work surface. Spoon 1 tablespoon of the shrimp mixture into the center of each wrapper. Using your finger, rub the edges of the wrappers with water. Fold the dough over the filling to create a half-moon shape, pinching the edges to seal.</li>
                    <li>Heat vegetable oil in a large skillet over medium heat. Add dumplings in a single layer and cook until golden and crisp, about 2-3 minutes per side.</li>
                    <li>Serve immediately with soy sauce, if desired.</li>
                </ol>

            <h3>How to Make Dashi</h3>
                <ol>
                    <li>Rinse the konbu under running water, then combine it with the water in a medium saucepan. Bring the water to a simmer over medium heat and turn off the stove. Let steep for 10 minutes.</li>
                    <li>Remove the konbu from the pot and add the bacon. Bring to a boil, then turn the heat down so the water simmers gently. Simmer for 30 minutes.</li>
                    <li>Strain the bacon from the dashi, and chill the broth until the fat separates and hardens into a solid cap on top of it. Remove and discard the fat and use the dashi or store it. Bacon dashi will keep, covered, for a few days in the refrigerator.</li>
                </ol>
        </p>
        </section>
        <section class="ingredients">
            <p>
                <h3>Ingredients</h3>
                    <h3>For Dumplings</h3>
                    <ul>
                        <li>1 pound shrimp, peeled, deveined and diced</li>
                        <li>8 ounces ground pork</li>
                        <li>1 cup shredded green cabbage</li>
                        <li>2 green onions, thinly sliced</li>
                        <li>1 tablespoon freshly grated ginger</li>
                        <li>1 teaspoon sesame oil</li>
                        <li>1 teaspoon mirin</li>
                        <li>Kosher salt and freshly ground black pepper, to taste</li>
                        <li>36 2-inch won ton wrappers</li>
                        <li>2 tablespoons vegetable oil</li>
                        <li>Soy sauce, for serving</li>
                    </ul>

                    <h3>For Dashi</h3>
                    <ul>
                        <li>Two 3-by-6-inch pieces konbu (kelp)</li>
                        <li>8 cups water</li>
                        <li>1/2 pound smoky bacon, preferably Benton’s</li>
                        <li>Handful of Bonito</li> 
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
</body>
<script src="app.js"></script>

</html>