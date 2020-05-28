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
                <h2>Rustic Sourdough</h2>
                    <p>Delicious and simple sourdough bread: Yes. You. Can. Truly, there is nothing tricky about making sourdough bread: if you can make yeasted bread, you can make sourdough bread. There is video guidance for every step of the way. Let’s do this</p>
                    <p>This dish is a deli egg-bacon-and-cheese-on-a-roll that has been pasta-fied, fancified, fetishized and turned into an Italian tradition that, like many inviolate Italian traditions, is actually far less old than the Mayflower. Because America may have contributed to its creation, carbonara is Exhibit A in the back-and-forth between Italy and the United States when it comes to food. Remember: the main goal is creaminess.</p>
            </div>
            <img class="right-img" src="./images/sourdough-mobile.jpg" alt="Sourdough bread">
        </section>
        <div class="directions-wrapper">
        <section class="instruction">
        <p> 
            <h3>Making the active starter</h3>
                <ol>
                    <ul><h3>Day 1:</h3> Combine the pumpernickel or whole wheat flour with the cool water in a non-reactive container. Glass, crockery, stainless steel, or food-grade plastic all work fine for this. Make sure the container is large enough to hold your starter as it grows; we recommend at least 1-quart capacity.</li>
                    <li>Stir everything together thoroughly; make sure there's no dry flour anywhere. Cover the container loosely and let the mixture sit at warm room temperature (about 70°F) for 24 hours. See "tips," below, for advice about growing starters in a cold house.</li>
                    <li><h3>Day 2:</h3> You may see no activity at all in the first 24 hours, or you may see a bit of growth or bubbling. Either way, discard half the starter (113 grams, about 1/2 cup), and add to the remainder a scant 1 cup (113 grams) Unbleached All-Purpose Flour, and 1/2 cup (113 grams) cool water (if your house is warm); or lukewarm water (if it's cold).</li>
                    <li>Mix well, cover, and let the mixture rest at room temperature for 24 hours.</li>
                    <li><h3>Day 3:</h3> By the third day, you'll likely see some activity — bubbling; a fresh, fruity aroma, and some evidence of expansion. It's now time to begin two feedings daily, as evenly spaced as your schedule allows. For each feeding, weigh out 113 grams starter; this will be a generous 1/2 cup, once it's thoroughly stirred down. Discard any remaining starter.</li>
                    <li>Add a scant 1 cup (113 grams) Unbleached All-Purpose Flour, and 1/2 cup (113 grams) water to the 113 grams starter. Mix the starter, flour, and water, cover, and let the mixture rest at room temperature for approximately 12 hours before repeating.</li>
                    <li><h3>Day 4:</h3> Weigh out 113 grams starter, and discard any remaining starter. Repeat step #6.</li>
                    <li><h3>Day 5:</h3> Weigh out 113 grams starter, and discard any remaining starter. Repeat step #6. By the end of day #5, the starter should have at least doubled in volume. You'll see lots of bubbles; there may be some little "rivulets" on the surface, full of finer bubbles. Also, the starter should have a tangy aroma — pleasingly acidic, but not overpowering. If your starter hasn't risen much and isn't showing lots of bubbles, repeat discarding and feeding every 12 hours on day 6, and day 7, if necessary — as long as it takes to create a vigorous (risen, bubbly) starter.</li>
                    <li>Once the starter is ready, give it one last feeding. Discard all but 113 grams (a generous 1/2 cup). Feed as usual. Let the starter rest at room temperature for 6 to 8 hours; it should be active, with bubbles breaking the surface</li>
                    <li>Remove however much starter you need for your recipe — typically no more than 227 grams, about 1 cup. If your recipe calls for more than 1 cup of starter, give it a couple of feedings without discarding, until you've made enough for your recipe plus 113 grams to keep and feed again.</li>
                    <li>Transfer the remaining 113 grams of starter to its permanent home: a crock, jar, or whatever you'd like to store it in long-term. Feed this reserved starter with 1 scant cup (113 grams) of flour and 1/2 cup (113 grams) water, and let it rest at room temperature for several hours, to get going, before covering it. If you're storing starter in a screw-top jar, screw the top on loosely rather than airtight.</li>
                    <li>Store this starter in the refrigerator, and feed it regularly; we recommend feeding it with a scant 1 cup (113 grams) flour and 1/2 cup (113 grams) water once a week.</li>
                </ol>
            <h3>How to Make Sourdough</h3>
                <ol>
                    <li>Make the dough: In the evening, whisk the starter and water together in a large bowl with a fork or spatula. Add the flour and salt. Mix to combine, finishing by hand if necessary to form a rough dough. Cover with a towel and let rest for 30 minutes. </li>
                    <li>Stretch and fold. After 30 minutes, grab a corner of the dough and pull it up and into the center. Repeat until you’ve performed this series of folds 4 to 5 times with the dough. Let dough rest for another 30 minutes and repeat the stretching and folding action. If you have the time: do this twice more for a total of 4 times in 2 hours.</li>
                    <li>Bulk Fermentation (first rise): Cover the bowl with a towel and let rise overnight at room temperature, about 8 to 10 hours at 70°F (21°C). The dough is ready when it has doubled in size, has a few bubbles on the surface, and jiggles when you move the bowl from side to side.</li>
                    <li>Shape: In the morning, coax the dough onto a lightly floured surface. Gently shape it into a round fold the top down to the center, turn the dough, fold the top down to the center, turn the dough; repeat until you’ve come full circle. If you have a bench scraper, use it to push and pull the dough to create tension.</li>
                    <li>Let the dough rest seam side up rest for 30 minutes. Meanwhile, line an 8-inch (20-cm) bowl or proofing basket with a towel (flour sack towels are ideal) and dust with flour (preferably rice flour, which doesn’t burn the way all-purpose flour does). Using a bench scraper or your hands, shape it again as described in step 4. Place the round into your lined bowl, seam side up.</li>
                    <li>Proof (second rise): Cover the dough and refrigerate for 6 hours or for as long as 48 hours</li>
                    <li>Place a Dutch oven in your oven, and preheat your oven to 550°F (290°C). Cut a piece of parchment to fit the size of your baking pot.</li>
                    <li>Score: Place the parchment over the dough and invert the bowl to release. Using the tip of a small knife or a razor blade, score the dough however you wish — a simple “X” is nice. Use the parchment to carefully transfer the dough into the preheated baking pot.</li>
                    <li>Bake: Carefully cover the pot, close the oven, and reduce the heat to 450°F (230°C). Bake the dough for 30 minutes, covered. Remove the lid, lower the temperature to 400ºF (200ºC) and continue to bake for 10 – 15 minutes more. If necessary, lift the loaf out of the pot, and bake directly on the oven rack for the last 5 to 10 minutes. Cool on a wire rack for 1 hour before slicing.</li>
                </ol>
        </p>
        </section>
        <section class="ingredients">
            <p>
                <h3>Ingredients</h3>
                    <h3>For the Sourdough</h3>
                    <ul>
                        <li>50 – 100 g (1⁄4 – 1/2 cup) bubbly, active starter,</li>
                        <li>375 g (1 1/2 cups plus 1 tbsp) warm water</li>
                        <li>500 g (4 cups plus 2 tbsp) bread flour</li>
                        <li>9 to 11 g fine sea salt</li>
                    </ul>
                   <h3>For the starter</h3>
                        <ul>
                            <li>1 cup (113g) whole rye (pumpernickel) or whole wheat flour</li>
                            <li>1/2 cup (113g) cool water</li>
                        </ul>
                    <h3>Feed your starter</h3>
                        <ul>
                            <li>scant 1 cup (113g) Unbleached All-Purpose Flour</li>
                            <li>1/2 cup (113g) cool water (if your house is warm), or lukewarm water (if your house is cool)</li>
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