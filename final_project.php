<?php
// Include the header file
$pageTitle = "Final Project";
$pageHeader = "Final Project";
include 'header.php';
?>

<h2>Project Execution</h2>
<p>
    <?php
    // Database connection details
    $servername = "localhost";
    $username = "root"; // Replace with your MySQL username
    $password = "iLOVEanime123"; // Replace with your MySQL password
    $dbname = "Final_Project";

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully! OwO<br>";

    // Fetch data
    $sql = "SELECT comments FROM review_detail LIMIT 3";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "Comment: " . $row["comments"] . "<br>";
        }
    } else {
        echo "0 results";
    }

    // Close the connection
    $conn->close();
    ?>
</p>

<button class="start-button" onclick="location.href='home_page.html';">Back to Home</button>

<?php
// Include the footer file
include 'footer.php';
?>
