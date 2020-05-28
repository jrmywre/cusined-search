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
                <h2>SCALLOP CEVICHE IN LECHE DE TIGRE</h2>
                    <p>In a country known for its fascinating, wide-ranging cuisine, ceviche just may be Perus national dish. Combinations of sparklingly fresh raw fish marinated in a piquant dressing (often made with ají amarillo and lime juice) are served everywhere, from the lowliest fish shacks to the finest restaurants.</p>
            </div>
            <img class="right-img" src="./images/scallop-ceviche.jpg" alt="Roasted butternut squash">
        </section>
        <div class="directions-wrapper">
        <section class="instruction">
        <p> 
            <h3>How to Make Ceviche</h3>
                <ol>
                    <li>Steam sweet potato in a steamer rack, covered, over simmering water until just tender, 7 to 10 minutes. Cool to room temperature.</li>
                    <li>Meanwhile, cook choclo (if using) in a medium pot of well-salted boiling water, stirring occasionally, until heated through, about 3 minutes. Transfer with a slotted spoon to a bowl, reserving liquid in pot, and cool to room temperature.</li>
                    <li>Return choclo-cooking water to a boil (or use 4 cups fresh water if not using choclo). Add scallops and poach at a bare simmer, stirring occasionally, until barely cooked through, about 1 minute. Drain well and cool to room temperature.</li>
                    <li>Halve onion lengthwise, then very thinly slice using slicer. Soak in a bowl of cold water 5 minutes, then drain well and pat dry.</li>
                    <li>Stir together lime juice, pisco, chile paste, and 1/4 teaspoon salt in a large bowl, then gently stir in sweet potato, choclo, scallops, onion, bell pepper, cilantro, and salt to taste.</li>
                    <li>Serve ceviche on small plates, drizzled with any remaining lime juice mixture from bowl.</li>
                </ol>
        </p>
        </section>
        <section class="ingredients">
            <p>
                <h3>Ingredients</h3>
                    <ul>
                        <li>1 cup diced (1/3-inch) peeled sweet potato</li>
                        <li>1 cup frozen choclo kernels (optional)</li>
                        <li>1 pound sea scallops, tough ligament removed from side and scallops halved horizontally</li>
                        <li>1 small red onion</li>
                        <li>1/2 cup fresh lime juice /li>   
                        <li>2 tablespoons pisco(South American Brandy)</li>
                        <li>2 tablespoons bottled ají amarillo or ají mirasol paste </li>
                        <li>3 tablespoons finely chopped red bell pepper</li>
                        <li>3 tablespoons chopped cilantro</li>
                        <li>Equipment: an adjustable-blade slicer</li>
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