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
                <h2>ROASTED BUTTERNUT SQUASH SOUP</h2>
                    <p>Making soup from butternut squash is one of our go-to moves during the fall. Fortunately for you, it could not be easier. ROAST THE SQUASH...</p>
                        <h3>Roasted Butternut Yields Major Flavor</h3>
                            <p>Most of this soup’s flavor comes from the cooking method, which starts with roasting the butternut squash to bring out its caramelized best. Bonus! That means you don’t have to peel and chop the squash. Once the squash is out of the oven, you can start sautéing some shallot and garlic.</p>
            </div>
            <img class="right-img" src="./images/soups-seeds.jpg" alt="Roasted butternut squash">
        </section>
        <div class="directions-wrapper">
        <section class="instruction">
        <p> 
            <h3>Instructions</h3>
                <ol>
                    <li>Preheat the oven to 425 degrees Fahrenheit and line a rimmed baking sheet with parchment paper. Place the butternut squash on the pan and drizzle each half with just enough olive oil to lightly coat the squash on the inside (about ½ teaspoon each). Rub the oil over the inside of the squash and sprinkle it with salt and pepper. </li>
                    <li>Turn the squash face down and roast until it is tender and completely cooked through, about 40 to 50 minutes (don’t worry if the skin or flesh browns—that’s good for flavor). Set the squash aside until it’s cool enough to handle, about 10 minutes. </li>
                    <li>Meanwhile, in a large soup pot, warm 1 tablespoon olive oil over medium heat until shimmering (if your blender has a soup preset, use a medium skillet to minimize dishes.) Add the chopped shallot and 1 teaspoon salt. Cook, stirring often, until the shallot has softened and is starting to turn golden on the edges, about 3 to 4 minutes. Add the garlic and cook until fragrant, about 1 minute, stirring frequently. Transfer the contents to your stand blender (see notes on how to use an immersion blender instead).</li>
                    <li>Use a large spoon to scoop the butternut squash flesh into your blender. Discard the tough skin. Add the maple syrup, nutmeg and a few twists of freshly ground black pepper to the blender. Pour in 3 cups vegetable broth, being careful not to fill the container past the maximum fill line (you can work in batches if necessary, and stir in any remaining broth later).</li>
                    <li>Securely fasten the lid. Blend on high (or select the soup preset, if available), being careful to avoid hot steam escaping from the lid. Stop once your soup is ultra creamy and warmed through.</li>
                    <li>If you would like to thin out your soup a bit more, stir in the remaining cup of broth. Add 1 to 2 tablespoons butter or olive oil, to taste, and blend well. Taste and stir in more salt and pepper, if necessary.</li>
                    <li>If your soup is piping hot from the blending process, you can pour it into serving bowls. If not, pour it back into your soup pot and warm the soup over medium heat, stirring often, until it’s nice and steamy. I like to top individual bowls with some extra black pepper.</li>
                </ol>
        </p>
        </section>
        <section class="ingredients">
            <p>
                <h3>Ingredients</h3>
                    <ul>
                        <li>1 large butternut squash (about 3 pounds), halved vertically* and seeds removed</li>
                        <li>1 tablespoon olive oil, plus more for drizzling</li>
                        <li>½ cup chopped shallot (about 1 large shallot bulb)</li>
                        <li>12 slices deli-counter American cheese</li>
                        <li>1 teaspoon salt</li>   
                        <li>4 garlic cloves, pressed or minced</li>
                        <li>1 teaspoon maple syrup</li>
                        <li>⅛ teaspoon ground nutmeg</li>
                        <li>Freshly ground black pepper, to taste</li>
                        <li>3 to 4 cups (24 to 32 ounces) vegetable broth, as needed</li>
                        <li>1 to 2 tablespoons butter, to taste</li>
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