<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>POST AND GET</title>
    <style>
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 9px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="text-center mb-4 ">
        <h3>POST AND GET</h3>
    </div>
</div>

<div class="container d-flex justify-content-center">
    <!-- Form using POST method -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" style="width:50vw; min-width:300px">
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">First Name</label>
                <input type="text" class="form-control" name="First_Name" required>
            </div>

            <div class="col">
                <label class="form-label">Last Name</label>
                <input type="text" class="form-control" name="Last_Name" required>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" required>
        </div>

        <div>
            <button type="submit" class="btn btn-success" name="submit">Submit (POST)</button>
        </div>
    </form>
</div>

<div class="container d-flex justify-content-center mt-4">
    <!-- Form using GET method -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get" style="width:50vw; min-width:300px">
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">First Name</label>
                <input type="text" class="form-control" name="First_Name" required>
            </div>

            <div class="col">
                <label class="form-label">Last Name</label>
                <input type="text" class="form-control" name="Last_Name" required>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" required>
        </div>

        <div>
            <button type="submit" class="btn btn-primary" name="submit">Submit (GET)</button>
        </div>
    </form>
</div>

<?php
// Handling POST data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = htmlspecialchars($_POST['First_Name']);
    $last_name = htmlspecialchars($_POST['Last_Name']);
    $email = htmlspecialchars($_POST['email']);
    
    // Output POST data
    echo "<div class='container mt-4'>";
    echo "<h4>Submitted Data (POST):</h4>";
    echo "<p>First Name: $first_name</p>";
    echo "<p>Last Name: $last_name</p>";
    echo "<p>Email: $email</p>";
    echo "</div>";
}

// Handling GET data
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['First_Name'])) {
    $first_name = htmlspecialchars($_GET['First_Name']);
    $last_name = htmlspecialchars($_GET['Last_Name']);
    $email = htmlspecialchars($_GET['email']);

    // Output GET data
    echo "<div class='container mt-4'>";
    echo "<h4>Submitted Data (GET):</h4>";
    echo "<p>First Name: $first_name</p>";
    echo "<p>Last Name: $last_name</p>";
    echo "<p>Email: $email</p>";
    echo "</div>";
}
?>

<!-- Add Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
