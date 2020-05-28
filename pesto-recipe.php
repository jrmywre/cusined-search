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
                <h2>FARFALLE PESTO WITH ROASTED TOMATOES</h2>
                <p>Roasted Tomato Pesto Pasta is so easy to make in only 20 minutes!  Flavorful parmesan basil pesto and juicy burst roast tomatoes make this irresistible!</p>
            </div>
            <img class="right-img" src="./images/farfalle-pesto.jpg" alt="Roasted butternut squash">
        </section>
        <div class="directions-wrapper">
        <section class="instruction">
        <p> 
            <h3>Directions</h3>
                <ol>
                    <li>First things first, preheat your oven.  While that’s working, I like to gather all of my ingredients for the pesto, wash and dry my cherry tomatoes, and get a pot of water boiling for the spaghetti. Dump the tomatoes onto a baking sheet, drizzle with olive oil, and season them liberally with salt and pepper.  Now, they go in the oven for 20 minutes.</li>
                    <li>While the tomatoes roast, get your pasta cooking, and make the pesto.  For the pesto, add all of your ingredients into a food processor (or blender if that’s all you have).</li>
                    <li>In a food processor with the motor running, drop in 3 of the roasted garlic cloves and finely chop. Add the nuts, cheese, 1 teaspoon salt and 1/2 teaspoon pepper and pulse to finely chop. Add the basil and pulse to finely chop. With the motor running, add the remaining 2/3 cup oil, blending to combine.</li>
                    <li>Place the lid on your processor and pulse the pesto about 5-6 times.  Now, stream in the olive oil with the processor on low until your pesto is nice and smooth.</li>
                    <li>Pour the pesto into a large bowl, and add 1/2 cup of the cooking liquid from the spaghetti.</li>
                    <li>Add the drained spaghetti to the bowl and toss everything together with tongs to make sure the pasta is well coated.  You can add more cooking liquid if needed to thin the sauce more.</li>
                    <li>Now, get your roasted tomatoes out of the oven!  Scoop them on to the top of the pasta, and if desired toss them in gently with tongs.</li>
                </ol>
        </p>
        </section>
        <section class="ingredients">
            <p>
                <h3>Ingredients</h3>
                    <ul>
                        <li>1 head garlic</li>
                        <li>2/3 cup extra-virgin olive oil, plus some for drizzling garlic</li>
                        <li>1/2 cup pine nuts</li>
                        <li>3/4 cup grated Parmigiano-Reggiano</li>
                        <li>Kosher salt</li>   
                        <li>Freshly ground black pepper</li>
                        <li> 3 cups fresh basil</li>
                        <li>1 pound farfalle pasta</li>
                        <li>pint cherry or grape tomatoes</li>
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