
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Search</title>
</head>
<body>
    <h1>Employee Search</h1>
    <form method="post">
        <label for="employeeName">Enter Employee Name:</label>
        <input type="text" id="employeeName" name="employeeName">
        <button type="submit" name="search">Search</button>
    </form>
    <?php
    // Define the indexed array of employee names
    $employee_names = array("Mansi", "Aditi", "Yash", "Kanak", "Aditya", "Prathamesh", "Atharv", "Sara");

    // Check if the form has been submitted and name is provided
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['employeeName']) && !empty($_POST['employeeName'])) {
        $search_name = $_POST['employeeName'];
        $found = false;

        // Loop through the array to search for the name
        foreach ($employee_names as $name) {
            if ($name === $search_name) {
                $found = true;
                break;
            }
        }

        // Display search result
        if ($found) {
            echo "<p>The employee '$search_name' exists in the array.</p>";
        } else {
            echo "<p>The employee '$search_name' does not exist in the array.</p>";
        }
    }
    ?>
</body>
</html>
