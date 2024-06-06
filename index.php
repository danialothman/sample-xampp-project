<?php
include 'header.php';
include 'db_connect.php';

// Initialize counter value
$counter = 0;

// Retrieve counter value from database
$sql = "SELECT count FROM counter WHERE id=1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $counter = $row['count'];
} else {
    // Insert initial counter value if not present
    $sql = "INSERT INTO counter (id, count) VALUES (1, 0)";
    $conn->query($sql);
}

// Handle button click to increment or decrement counter
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['increment'])) {
        $counter++;
    } elseif (isset($_POST['decrement'])) {
        $counter--;
    }
    $sql = "UPDATE counter SET count=$counter WHERE id=1";
    $conn->query($sql);

    // Redirect to the same page to avoid form resubmission
    header("Location: index.php");
    exit();
}

$conn->close();
?>

<?php include 'serverinfo.php'; ?>

<h2>Home Page</h2>
<p>Counter: <?php echo str_pad($counter, 2, '0', STR_PAD_LEFT); ?></p>
<form method="post" action="index.php">
    <button type="submit" name="increment">+</button>
    <button type="submit" name="decrement">-</button>
</form>
<p>this counter is connected to a database.</p>

<p>This project is on <a href="https://github.com/danialothman/sample-xampp-project" target="_blank">GitHub</a>.</p>


<?php include 'markdown.php'; ?>

<?php include 'footer.php'; ?>
