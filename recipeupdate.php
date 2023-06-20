
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KA Recipe Updates</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/templatemo-tiya-golf-club.css" rel="stylesheet">  
    <link href="css/recipe_style.css" rel="stylesheet">
    <style>
      .card-container {
          display: flex;
          justify-content: center;
          align-items: center;
          flex-wrap: wrap;
          margin-top: 2em;
      }

      .card {
          max-width: 400px;
          margin: 10px;
          text-align: center;
          display: flex;
          flex-direction: column;
          justify-content: flex-start;
      }

      .card img {
          width: 100%;
      }

      .container {
          padding: 10px;
      }
  </style>
</head>

<body>
<?php include 'navbar.php'?>
<section class="hero-section hero-50 d-flex justify-content-center align-items-center" id="section_1">
  <div class="section-overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-12 text-center">
          <h1 class="text-white mb-1 pb-2">30 Days 30 Recipes</h1>
          <h4 class="text-white mb-4  span">A Celebration of Delectable Recipes!</h4>
          <a href="#view_recipe" class="btn custom-btn smoothscroll me-3">View Recipes</a>
        </div>
      </div>
    </div>
  <svg viewBox="0 0 1962 178" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="#ffffff" d="M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z" stroke-width="0"></path> <path fill="#ffffff" d="M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z" stroke-width="0"></path> <path fill="#ffffff" d="M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z" stroke-width="0"></path></svg>
</section>

<?php
echo '<div id="view_recipe", style="text-align: center; padding-top: 6em; padding-bot: 3em"><h2>Delightful . Appetizing . Wonderful</h2> ';

?>
<script>
    // Function to set equal height for all cards
    function setEqualHeight() {
        var cards = document.getElementsByClassName("card");
        var maxHeight = 0;

        // Find the maximum height among all cards
        for (var i = 0; i < cards.length; i++) {
            maxHeight = Math.max(maxHeight, cards[i].offsetHeight);
        }

        // Set the maximum height to all cards
        for (var j = 0; j < cards.length; j++) {
            cards[j].style.height = maxHeight + "px";
        }
    }

    // Call the function when the page finishes loading
    window.addEventListener("load", setEqualHeight);
</script>

<div class="card-container ">
    <?php
	
    // Database configuration
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'osp_website';

    // Create a database connection
    $conn = new mysqli($host, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

// Fetch recipe data from the database
    $sql01 = "SELECT * FROM recipe";
    $result = $conn->query($sql01);


    // Fetch recipe data from the database
    $sql02 = "SELECT * FROM recipe";
    $result = $conn->query($sql02);
	    // Loop through the result and create recipe cards
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $recipeName = $row['Nme'];
            $recipeImage = $row['imagepath'];
            $recipeIngredients = $row['Ingredients'];
            $recipeInstruction = $row['Instruction'];

            echo '<div class="card">';
			      echo '<a href="'. $recipeInstruction .'"><img src="images/' . $recipeImage . '" alt="Avatar" style="width:100%"></a>';
            echo '<div class="container">';
            echo '<h4><b>' . $recipeName . '</b></h4>';
			      echo '<b>Ingredients:</b>';
            echo '<br>'. $recipeIngredients .'</br>' ;
            echo '</div>';
            echo '</div>';
        }
    }

    // Close the database connection
    $conn->close();
    ?>

</div>
<?php include 'footer.php'?>
</body>
</html>
