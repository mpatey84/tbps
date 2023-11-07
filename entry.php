<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TB Pools Entry Form</title>
    <link rel="icon" type="image/jpeg" href="icons/tb pools-logos.jpeg">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Genos:ital,wght@1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://kit.fontawesome.com/8b9d1a2b6e.js" crossorigin="anonymous"></script>
</head>

<body>
    <header id="tbPoolsHead">
        <img id="logo" src="IMAGES/images/tb pools-logos.jpeg" alt="T B Pools">
        
    </header>

    <main id="tbPoolsMain">

        <nav class="navbar">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="standings.html">STANDINGS</a></li>
                <li><a href="entry.html">ENTRY FORM</a></li>
            </ul>
        </nav><br>
        
        <form id="entry" action="action_page.php" method="post">
            <h2></h2>
            <p></p>
                <div id="t_name_box">
                    <label class="team_info" for="team_name">TEAM NAME:</label>
                    <input type="text" id="team_name" name="team_name" placeholder="get the puck outta here" required>
                    <label class="team_info" for="first_name">FIRST NAME:</label>
                    <input type="text" id="first_name" name="first_name" placeholder="Joe" required>
                    <label class="team_info" for="last_name">LAST NAME:</label>
                    <input type="text" id="last_name" name="last_name" placeholder="Smith" required>
                    <label class="team_info" for="email">EMAIL:</label>
                    <input type="text" id="email" name="email" placeholder="win@tbpool.com" required>
                </div>
                <br>
                <h1 class="div-names">atlantic division</h1>
                <br>
                <div id="for">

                    <div class="pair">
                        <select name="af1" id="af1" aria-placeholder="Atlantic Forward 1" class="picks" required>
                            <option value="" disabled selected>Select Player</option>
                                <?php
                                    $servername = "localhost";
                                    $username = "mpatey84";
                                    $password = "NotRealBacon";
                                    $database = "tb_pools";

                                    // Create connection
                                    $conn = new mysqli($servername, $username, $password, $database);

                                    // Check connection
                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    }

                                    // Query to retrieve data from the 'atldiv' table in 'tb_pools' database
                                    $sql = "SELECT * FROM atldivforward ORDER BY AtlDivForwards DESC";

                                    // Perform the query and store the result in a variable
                                    $result = $conn->query($sql);

                                    // Check if the query was successful
                                    if ($result->num_rows > 0) {
                                        // Loop through the database results and generate options for each select dropdown
                                        while ($row = $result->fetch_assoc()) {
                                            echo '<option value="' . $row['AtlDivForwards'] . '">' . $row['AtlDivForwards'] . '</option>';
                                        }
                                    } else {
                                        // No results from the database, handle it accordingly
                                        echo "No data available";
                                    }

                                    // Close the database connection
                                    $conn->close();
                                ?>
                        </select>
                        <input type="radio" id="atlF1" class="custom-radio" name="fordbl" value="atlF1" required>
                        <label class="star" for="atlF1">
                            <i class="fas fa-fire"></i>
                        </label>
                    </div>

                    <div class="pair">
                        <select name="af2" id="af2" aria-placeholder="Atlantic Forward 2" class="picks" required>
                            <option value="" disabled selected>Select Player</option>
                                <?php
                                    $servername = "localhost";
                                    $username = "mpatey84";
                                    $password = "NotRealBacon";
                                    $database = "tb_pools";

                                    // Create connection
                                    $conn = new mysqli($servername, $username, $password, $database);

                                    // Check connection
                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    }

                                    // Query to retrieve data from the 'atldiv' table in 'tb_pools' database
                                    $sql = "SELECT * FROM atldivforward ORDER BY AtlDivForwards DESC";

                                    // Perform the query and store the result in a variable
                                    $result = $conn->query($sql);

                                    // Check if the query was successful
                                    if ($result->num_rows > 0) {
                                        // Loop through the database results and generate options for each select dropdown
                                        while ($row = $result->fetch_assoc()) {
                                            echo '<option value="' . $row['AtlDivForwards'] . '">' . $row['AtlDivForwards'] . '</option>';
                                        }
                                    } else {
                                        // No results from the database, handle it accordingly
                                        echo "No data available";
                                    }

                                    // Close the database connection
                                    $conn->close();
                                ?>
                        </select>
                        <input type="radio" id="atlF2" class="custom-radio" name="fordbl" value="atlF2" required>
                        <label class="star" for="atlF2">
                            <i class="fas fa-fire"></i>
                        </label>
                    </div>

                    <div class="pair">
                        <select name="af3" id="af3" aria-placeholder="Atlantic Forward 3" class="picks" required>
                            <option value="" disabled selected>Select Player</option>
                                <?php
                                    $servername = "localhost";
                                    $username = "mpatey84";
                                    $password = "NotRealBacon";
                                    $database = "tb_pools";

                                    // Create connection
                                    $conn = new mysqli($servername, $username, $password, $database);

                                    // Check connection
                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    }

                                    // Query to retrieve data from the 'atldiv' table in 'tb_pools' database
                                    $sql = "SELECT * FROM atldivforward ORDER BY AtlDivForwards DESC";

                                    // Perform the query and store the result in a variable
                                    $result = $conn->query($sql);

                                    // Check if the query was successful
                                    if ($result->num_rows > 0) {
                                        // Loop through the database results and generate options for each select dropdown
                                        while ($row = $result->fetch_assoc()) {
                                            echo '<option value="' . $row['AtlDivForwards'] . '">' . $row['AtlDivForwards'] . '</option>';
                                        }
                                    } else {
                                        // No results from the database, handle it accordingly
                                        echo "No data available";
                                    }

                                    // Close the database connection
                                    $conn->close();
                                ?>
                        </select>
                        <input type="radio" id="atlF3" class="custom-radio" name="fordbl" value="atlF3" required>
                            <label class="star" for="atlF3">
                                <i class="fas fa-fire"></i>
                            </label>
                    </div>
                </div>
                
                <div id="det">
                    <div class="pair">
                        <select name="ad1" id="ad1" aria-placeholder="Atlantic Defense 1" class="picks" required>
                            <option value="" disabled selected>Select Player</option>
                                <?php
                                    $servername = "localhost";
                                    $username = "mpatey84";
                                    $password = "NotRealBacon";
                                    $database = "tb_pools";

                                    // Create connection
                                    $conn = new mysqli($servername, $username, $password, $database);

                                    // Check connection
                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    }

                                    // Query to retrieve data from the 'atldiv' table in 'tb_pools' database
                                    $sql = "SELECT * FROM atldivdefense ORDER BY `defense for form` DESC";

                                    // Perform the query and store the result in a variable
                                    $result = $conn->query($sql);

                                    // Check if the query was successful
                                    if ($result->num_rows > 0) {
                                        // Loop through the database results and generate options for each select dropdown
                                        while ($row = $result->fetch_assoc()) {
                                            echo '<option value="' . $row['defense for form'] . '">' . $row['defense for form'] . '</option>';
                                        }
                                    } else {
                                        // No results from the database, handle it accordingly
                                        echo "No data available";
                                    }

                                    // Close the database connection
                                    $conn->close();
                                ?>
                        </select>
                        <input type="radio" id="atlD1" class="custom-radio" name="dedbl" value="atlD1" required>
                        <label class="star" for="atlD1">
                            <i class="fas fa-fire"></i>
                        </label>
                    </div>
                    <div class="pair">    
                        <select name="ad2" id="ad2" aria-placeholder="Atlantic Defense 2" class="picks" required>
                            <option value="" disabled selected>Select Player</option>
                                <?php
                                    $servername = "localhost";
                                    $username = "mpatey84";
                                    $password = "NotRealBacon";
                                    $database = "tb_pools";

                                    // Create connection
                                    $conn = new mysqli($servername, $username, $password, $database);

                                    // Check connection
                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    }

                                    // Query to retrieve data from the 'atldiv' table in 'tb_pools' database
                                    $sql = "SELECT * FROM atldivdefense ORDER BY `defense for form` DESC";

                                    // Perform the query and store the result in a variable
                                    $result = $conn->query($sql);

                                    // Check if the query was successful
                                    if ($result->num_rows > 0) {
                                        // Loop through the database results and generate options for each select dropdown
                                        while ($row = $result->fetch_assoc()) {
                                            echo '<option value="' . $row['defense for form'] . '">' . $row['defense for form'] . '</option>';
                                        }
                                    } else {
                                        // No results from the database, handle it accordingly
                                        echo "No data available";
                                    }

                                    // Close the database connection
                                    $conn->close();
                                ?>
                        </select>
                        <input type="radio" id="atlD2" class="custom-radio" name="dedbl" value="atlD2" required>
                        <label class="star" for="atlD2">
                            <i class="fas fa-fire"></i>
                        </label>                            
                    </div>
                    <div class="pair">
                        <select name="at" id="at" aria-placeholder="Atlantic Team" class="picks" required>
                            <option value="" disabled selected>Select Team</option>
                                <?php
                                    $servername = "localhost";
                                    $username = "mpatey84";
                                    $password = "NotRealBacon";
                                    $database = "tb_pools";

                                    // Create connection
                                    $conn = new mysqli($servername, $username, $password, $database);

                                    // Check connection
                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    }

                                    // Query to retrieve data from the 'atldiv' table in 'tb_pools' database
                                    $sql = "SELECT * FROM atldivteams ORDER BY AtlDivTeams DESC";

                                    // Perform the query and store the result in a variable
                                    $result = $conn->query($sql);

                                    // Check if the query was successful
                                    if ($result->num_rows > 0) {
                                        // Loop through the database results and generate options for each select dropdown
                                        while ($row = $result->fetch_assoc()) {
                                            echo '<option value="' . $row['AtlDivTeams'] . '">' . $row['AtlDivTeams'] . '</option>';
                                        }
                                    } else {
                                        // No results from the database, handle it accordingly
                                        echo "No data available";
                                    }

                                    // Close the database connection
                                    $conn->close();
                                ?>
                        </select>
                        <input type="radio" id="atlT" class="custom-radio" name="tdbl" value="atlT" required>
                        <label class="star" for="atlT">
                            <i class="fas fa-fire"></i>
                        </label> 
                    </div>
                </div>
                
                <br>
                <h1 class="div-names">metropolitan division</h1>
                <br>
                <div id="for">
                    <div class="pair">
                        <select name="mf1" id="mf1" aria-placeholder="Metropolitan Forward 1" class="picks" required>
                            <option value="" disabled selected>Select Player</option>
                            <option value="Mitchell Marner">Mitchell Marner</option>
                            <option value="Auston Matthews">Auston Matthews</option>
                        </select>
                        <input type="radio" id="metF1" class="custom-radio" name="fordbl" value="metF1" required>
                        <label class="star" for="metF1">
                            <i class="fas fa-fire"></i>
                        </label>
                    </div>
                    <div class="pair">   
                        <select name="mf2" id="mf2" aria-placeholder="Metropolitan Forward 2" class="picks" required>
                            <option value="" disabled selected>Select Player</option>
                            <option value="Mitchell Marner">Mitchell Marner</option>
                            <option value="Auston Matthews">Auston Matthews</option>
                        </select>
                        <input type="radio" id="metF2" class="custom-radio" name="fordbl" value="metF2" required>
                        <label class="star" for="metF2">
                            <i class="fas fa-fire"></i>
                        </label>
                    </div> 
                    <div class="pair">   
                        <select name="mf3" id="mf3" aria-placeholder="Metropolitan Forward 3" class="picks" required>
                            <option value="" disabled selected>Select Player</option>
                            <option value="Mitchell Marner">Mitchell Marner</option>
                            <option value="Auston Matthews">Auston Matthews</option>
                        </select>
                        <input type="radio" id="metF3" class="custom-radio" name="fordbl" value="metF3" required>
                        <label class="star" for="metF3">
                            <i class="fas fa-fire"></i>
                        </label>
                    </div>
                </div>
                
                <div id="det">
                    <div class="pair">
                        <select name="md1" id="md1" aria-placeholder="Metropolitan Defense 1" class="picks" required>
                            <option value="" disabled selected>Select Player</option>
                            <option value="Mitchell Marner">Mitchell Marner</option>
                            <option value="Auston Matthews">Auston Matthews</option>
                        </select>
                        <input type="radio" id="metD1" class="custom-radio" name="dedbl" value="metD1" required>
                        <label class="star" for="metD1">
                            <i class="fas fa-fire"></i>
                        </label>
                    </div>    
                    <div class="pair">
                        <select name="md2" id="md2" aria-placeholder="Metropolitan Defense 2" class="picks" required>
                            <option value="" disabled selected>Select Player</option>
                            <option value="Mitchell Marner">Mitchell Marner</option>
                            <option value="Auston Matthews">Auston Matthews</option>
                        </select>
                        <input type="radio" id="metD2" class="custom-radio" name="dedbl" value="metD2" required>
                        <label class="star" for="metD2">
                            <i class="fas fa-fire"></i>
                        </label>
                    </div>
                    <div class="pair">
                        <select name="mt" id="mt" aria-placeholder="Metropolitan Team" class="picks" required>
                            <option value="" disabled selected>Select Team</option>
                            <option value="Carolina Hurricanes">Carolina Hurricanes</option>
                            <option value="Columbus Blue Jackets">Columbus Blue Jackets</option>
                            <option value="New Jersey Devils">New Jersey Devils</option>
                            <option value="New York Islanders">New York Islanders</option>
                            <option value="New York Rangers">New York Rangers</option>
                            <option value="Philadelphia Flyers">Philadelphia Flyers</option>
                            <option value="Pittsburgh Penguins">Pittsburgh Penguins</option>
                            <option value="Washington Capitals">Washington Capitals</option>
                        </select>
                        <input type="radio" id="metT" class="custom-radio" name="tdbl" value="metT" required>
                        <label class="star" for="metT">
                            <i class="fas fa-fire"></i>
                        </label>
                    </div>
                </div>
                
                <br>
                <h1 class="div-names">central division</h1>
                <br>
                <div id="for">
                    <div class="pair">
                        <select name="cf1" id="cf1" aria-placeholder="Central Forward 1" class="picks" required>
                            <option value="" disabled selected>Select Player</option>
                            <option value="Mitchell Marner">Mitchell Marner</option>
                            <option value="Auston Matthews">Auston Matthews</option>
                        </select>
                        <input type="radio" id="cenF1" class="custom-radio" name="fordbl" value="cenF1" required>
                        <label class="star" for="cenF1">
                            <i class="fas fa-fire"></i>
                        </label>
                    </div>
                    <div class="pair">
                        <select name="cf2" id="cf2" aria-placeholder="Central Forward 2" class="picks" required>
                            <option value="" disabled selected>Select Player</option>
                            <option value="Mitchell Marner">Mitchell Marner</option>
                            <option value="Auston Matthews">Auston Matthews</option>
                        </select>
                        <input type="radio" id="cenF2" class="custom-radio" name="fordbl" value="cenF2" required>
                        <label class="star" for="cenF2">
                            <i class="fas fa-fire"></i>
                        </label>
                    </div>
                    <div class="pair">
                        <select name="cf3" id="cf3" aria-placeholder="Central Forward 3" class="picks" required>
                            <option value="" disabled selected>Select Player</option>
                            <option value="Mitchell Marner">Mitchell Marner</option>
                            <option value="Auston Matthews">Auston Matthews</option>
                        </select>
                        <input type="radio" id="cenF3" class="custom-radio" name="fordbl" value="cenF3" required>
                        <label class="star" for="cenF3">
                            <i class="fas fa-fire"></i>
                        </label>
                    </div>
                </div>
                
                <div id="det">
                    <div class="pair">
                        <select name="cd1" id="cd1" aria-placeholder="Central Defense 1" class="picks" required>
                            <option value="" disabled selected>Select Player</option>
                            <option value="Mitchell Marner">Mitchell Marner</option>
                            <option value="Auston Matthews">Auston Matthews</option>
                        </select>
                        <input type="radio" id="cenD1" class="custom-radio" name="dedbl" value="cenD1" required>
                        <label class="star" for="cenD1">
                            <i class="fas fa-fire"></i>
                        </label>
                    </div>
                    <div class="pair">
                        <select name="cd2" id="cd2" aria-placeholder="Central Defense 2" class="picks" required>
                            <option value="" disabled selected>Select Player</option>
                            <option value="Mitchell Marner">Mitchell Marner</option>
                            <option value="Auston Matthews">Auston Matthews</option>
                        </select>
                        <input type="radio" id="cenD2" class="custom-radio" name="dedbl" value="cenD2" required>
                        <label class="star" for="cenD2">
                            <i class="fas fa-fire"></i>
                        </label>
                    </div>
                    <div class="pair">
                        <select name="ct" id="ct" aria-placeholder="Central Team" class="picks" required>
                            <option value="" disabled selected>Select Team</option>
                            <option value="Chicago Blackhawks">Chicago Blackhawks</option>
                            <option value="Colorado Avalanche">Colorado Avalanche</option>
                            <option value="Dallas Stars">Dallas Stars</option>
                            <option value="Minnesota Wild">Minnesota Wild</option>
                            <option value="Nashville Predators">Nashville Predators</option>
                            <option value="St. Louis Blues">St. Louis Blues</option>
                            <option value="Winnipeg Jets">Winnipeg Jets</option>
                            <option value="Arizona Coyotes">Arizona Coyotes</option>
                        </select>
                        <input type="radio" id="cenT" class="custom-radio" name="tdbl" value="cenT" required>
                        <label class="star" for="cenT">
                            <i class="fas fa-fire"></i>
                        </label>
                    </div>
                </div>
                
                <br>
                <h1 class="div-names">pacific division</h1>
                <br>
                <div id="for">
                    <div class="pair">
                        <select name="pf1" id="pf1" aria-placeholder="Pacific Forward 1" class="picks" required>
                            <option value="" disabled selected>Select Player</option>
                            <option value="Mitchell Marner">Mitchell Marner</option>
                            <option value="Auston Matthews">Auston Matthews</option>
                        </select>
                        <input type="radio" id="pacF1" class="custom-radio" name="fordbl" value="pacF1" required>
                        <label class="star" for="pacF1">
                            <i class="fas fa-fire"></i>
                        </label>
                    </div>
                    <div class="pair">
                        <select name="pf2" id="pf2" aria-placeholder="Pacific Forward 2" class="picks" required>
                            <option value="" disabled selected>Select Player</option>
                            <option value="Mitchell Marner">Mitchell Marner</option>
                            <option value="Auston Matthews">Auston Matthews</option>
                        </select>
                        <input type="radio" id="pacF2" class="custom-radio" name="fordbl" value="pacF2" required>
                        <label class="star" for="pacF2">
                            <i class="fas fa-fire"></i>
                        </label>
                    </div>
                    <div class="pair">
                        <select name="pf3" id="pf3" aria-placeholder="Pacific Forward 3" class="picks" required>
                            <option value="" disabled selected>Select Player</option>
                            <option value="Mitchell Marner">Mitchell Marner</option>
                            <option value="Auston Matthews">Auston Matthews</option>
                        </select>
                        <input type="radio" id="pacF3" class="custom-radio" name="fordbl" value="pacF3" required>
                        <label class="star" for="pacF3">
                            <i class="fas fa-fire"></i>
                        </label>
                    </div>
                </div>
                
                <div id="det">
                    <div class="pair">
                        <select name="pd1" id="pd1" aria-placeholder="Pacific Defense 1" class="picks" required>
                            <option value="" disabled selected>Select Player</option>
                            <option value="Mitchell Marner">Mitchell Marner</option>
                            <option value="Auston Matthews">Auston Matthews</option>
                        </select>
                        <input type="radio" id="pacD1" class="custom-radio" name="dedbl" value="pacD1" required>
                        <label class="star" for="pacD1">
                            <i class="fas fa-fire"></i>
                        </label>
                    </div>
                    <div class="pair">
                        <select name="pd2" id="pd2" aria-placeholder="Pacific Defense 2" class="picks" required>
                            <option value="" disabled selected>Select Player</option>
                            <option value="Mitchell Marner">Mitchell Marner</option>
                            <option value="Auston Matthews">Auston Matthews</option>
                        </select>
                        <input type="radio" id="pacD2" class="custom-radio" name="dedbl" value="pacD2" required>
                        <label class="star" for="pacD2">
                            <i class="fas fa-fire"></i>
                        </label>
                    </div>
                    <div class="pair">
                        <select name="pt" id="pt" aria-placeholder="Pacific Team" class="picks" required>
                            <option value="" disabled selected>Select Team</option>
                            <option value="Anaheim Ducks">Anaheim Ducks</option>
                            <option value="Calgary Flames">Calgary Flames</option>
                            <option value="Edmonton Oilers">Edmonton Oilers</option>
                            <option value="Los Angeles Kings">Los Angeles Kings</option>
                            <option value="San Jose Sharks">San Jose Sharks</option>
                            <option value="Seattle Kraken">Seattle Kraken</option>
                            <option value="Vancouver Canucks">Vancouver Canucks</option>
                            <option value="Vegas Golden Knights">Vegas Golden Knights</option>
                        </select>
                        <input type="radio" id="pacT" class="custom-radio" name="tdbl" value="pacT" required>
                        <label class="star" for="pacT">
                            <i class="fas fa-fire"></i>
                        </label>
                    </div>
                </div>
                <br>
                <div class="endButtons">
                    <span id="total"></span>
                    <input class="buttons" type="reset">
                    <input id="submitBtn" class="buttons" type="submit">            
                </div>
                <br>
        </form>

        
        
    </main>

    <footer id="tbPoolsFoot">

    </footer>

    <!-- Include jQuery from a CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        // Event listener for dropdowns
        $('#af1').on('change', function() {
            updateTotal();
        });

        $('#af2').on('change', function() {
            updateTotal();
        });

        $('#af3').on('change', function() {
            updateTotal();
        });

        $('#ad1').on('change', function() {
            updateTotal();
        });

        $('#ad2').on('change', function() {
            updateTotal();
        });

        $('#at').on('change', function() {
            updateTotal();
        });

        // Function to update the total
        function updateTotal() {
            var total = 0;
            // Get the selected value from dropdowns and add the number
            total += parseInt($('#af1').val().match(/\d+/)[0]) || 0;

            total += parseInt($('#af2').val().match(/\d+/)[0]) || 0;

            total += parseInt($('#af3').val().match(/\d+/)[0]) || 0;

            total += parseInt($('#ad1').val().match(/\d+/)[0]) || 0;

            total += parseInt($('#ad2').val().match(/\d+/)[0]) || 0;

            total += parseInt($('#at').val().match(/\d+/)[0]) || 0;

            // Update the total in the <span> element
            $('#total').text('Total: ' + total);

            // Example: Check if total is greater than 9 and show an error
            if (total > 100) {
                alert('Total cannot exceed 15!');
                // Disable the submit button
                $('#submitBtn').prop('disabled', true);
            } else {
                // Enable the submit button
                $('#submitBtn').prop('disabled', false);
            }
        }
    });
</script>



<!-- Include your entry.js file after jQuery -->
<script src="entry.js"></script>


</body>
</html>