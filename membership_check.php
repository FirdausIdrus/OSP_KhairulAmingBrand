<?php
// Create a connection to phpmyadmin. Change the details depending on the database schema.
$conn = mysqli_connect('localhost', 'root', '', 'osp_website');

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['membership_no']) && isset($_POST['password'])) {
    $membershipNo = $_POST['membership_no'];
    $password = $_POST['password'];

    // Prepare the query to fetch all rows from the membership_data table
    $query = "SELECT * FROM membership_data";
    $result = mysqli_query($conn, $query);

    $isRegistered = false;

    // Iterate through each row and check for a match
    while ($row = mysqli_fetch_assoc($result)) {
        if ($row['membership_no'] == $membershipNo && $row['password'] == $password) {
            $isRegistered = true;
            break;
        }
    }

    if ($isRegistered) { // Match found
        echo "<script>
        alert('You Are Registered.');
        document.location.href = 'index.php';
        </script>"; 
    } else { // No match found
        echo "<script>
        alert('You Are Not Registered.');
        document.location.href = 'index.php';
        </script>"; 
    }
} else { // If membership_no and/or password are not set
    echo "<script>
    alert('Invalid Membership.');
    document.location.href = 'index.php';
    </script>";
}

// Close the database connection
mysqli_close($conn);
?>
