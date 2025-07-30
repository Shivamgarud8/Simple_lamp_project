<?php
$host = "localhost";
$username = "root";
$password = ""; // use your MySQL root password
$dbname = "love_db";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $your_name = $conn->real_escape_string($_POST['your_name']);
    $crush_name = $conn->real_escape_string($_POST['crush_name']);

    $vodka = isset($_POST['vodka']) ? 1 : 0;
    $beer = isset($_POST['beer']) ? 1 : 0;
    $rum = isset($_POST['rum']) ? 1 : 0;
    $whiskey = isset($_POST['whiskey']) ? 1 : 0;
    $scotch = isset($_POST['scotch']) ? 1 : 0;
    $wine = isset($_POST['wine']) ? 1 : 0;
    $desi = isset($_POST['desi']) ? 1 : 0;
    $cigarette = isset($_POST['cigarette']) ? 1 : 0;

    $sql = "INSERT INTO user_choices (your_name, crush_name, vodka, beer, rum, whiskey, scotch, wine, desi, cigarette)
            VALUES ('$your_name', '$crush_name', $vodka, $beer, $rum, $whiskey, $scotch, $wine, $desi, $cigarette)";
    
    if ($conn->query($sql) === TRUE) {
        echo "❤️ Thanks for your submission!";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>💖 Crush & Drinks 💖</title>
</head>
<body>
    <h2>💖 Crush & Favorites 💖</h2>
    <form method="POST">
        <label>Your Name:</label><br>
        <input type="text" name="your_name" required><br><br>

        <label>Crush's Name:</label><br>
        <input type="text" name="crush_name" required><br><br>

        <label>Select your preferences:</label><br>
        <input type="checkbox" name="vodka"> Vodka 🍸<br>
        <input type="checkbox" name="beer"> Beer 🍺<br>
        <input type="checkbox" name="rum"> Rum 🥃<br>
        <input type="checkbox" name="whiskey"> Whiskey 🥃<br>
        <input type="checkbox" name="scotch"> Scotch 🥃<br>
        <input type="checkbox" name="wine"> Wine 🍷<br>
        <input type="checkbox" name="desi"> Desi Daru 💥<br>
        <input type="checkbox" name="cigarette"> Cigarette 🚬<br><br>

        <input type="submit" value="Submit 💌">
    </form>
</body>
</html>
