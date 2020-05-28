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
        <div class="recipe-container">
                    <?php 
                        if (isset($_POST['search'])) {
                            $search = mysqli_real_escape_string($conn, $_POST['search']);
                            $sql = "SELECT * FROM article WHERE a_title LIKE '%$search%' OR a_text like '%$search%' OR a_ingredients like '%$search%' OR
                                a_author LIKE '%$search%'";
                            $result = mysqli_query($conn, $sql);
                            $queryResult = mysqli_num_rows($result);

                            if($queryResult > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echO "<a href='".$row['a_link']."'><div class='recipe-box'>
                                        <h3>".$row['a_title']."</h3>
                                        <p>".$row['a_text']."</p>
                                        </div></a>";
                                }
                            } else {
                                echo "There are no recipes matching your search";
                            };
                        }
                    ?>
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