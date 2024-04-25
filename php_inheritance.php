<?php
// Base class representing a generic web page
class WebPage {
    protected $title;

    // Constructor to set the title of the page
    public function __construct($title) {
        $this->title = $title;
    }

    // Method to display the header section of the page
    public function displayHeader() {
        echo "<!DOCTYPE html>";
        echo "<html lang='en'>";
        echo "<head>";
        echo "<meta charset='UTF-8'>";
        echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
        echo "<title>{$this->title}</title>";
        // CSS styles for styling the page
        echo "<style>";
        echo "body {";
        echo "    font-family: Arial, sans-serif;";
        echo "    margin: 0;";
        echo "    padding: 0;";
        echo "}";
        echo "header {";
        echo "    background-color: #333;";
        echo "    color: #fff;";
        echo "    padding: 20px;";
        echo "    text-align: center;";
        echo "}";
        echo "h1 {";
        echo "    margin: 0;";
        echo "}";
        echo "div {";
        echo "    max-width: 800px;";
        echo "    margin: 20px auto;";
        echo "    padding: 20px;";
        echo "    background-color: #f9f9f9;";
        echo "    border-radius: 8px;";
        echo "    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);";
        echo "}";
        echo "ul {";
        echo "    padding: 0;";
        echo "}";
        echo "li {";
        echo "    list-style-type: none;";
        echo "    margin-bottom: 10px;";
        echo "}";
        echo "</style>";
        echo "</head>";
        echo "<body>";
        echo "<header>";
        echo "<h1>{$this->title}</h1>";
        echo "</header>";
    }

    // Method to display the footer section of the page
    public function displayFooter() {
        echo "</body>";
        echo "</html>";
    }
}

// Subclass representing the car rental page
class CarRentalPage extends WebPage {
    protected $vehicles;

    // Constructor to set the title and vehicles data
    public function __construct($title, $vehicles) {
        parent::__construct($title);
        $this->vehicles = $vehicles;
    }

    // Method to display the content specific to the car rental page
    public function displayContent() {
        echo "<div>";
        echo "<h2>Welcome to our Car Rental Website!</h2>";
        echo "<p>Explore our fleet of vehicles and book your rental today.</p>";
        echo "<ul>";
        foreach ($this->vehicles as $vehicle) {
            echo "<li>{$vehicle['brand']} - {$vehicle['model']} - {$vehicle['price']}</li>";
        }
        echo "</ul>";
        echo "</div>";
    }
}

// Sample data for vehicles
$vehiclesData = array(
    array("brand" => "Toyota", "model" => "Camry", "price" => "$50/day"),
    array("brand" => "Honda", "model" => "Civic", "price" => "$45/day"),
    array("brand" => "Ford", "model" => "Focus", "price" => "$55/day"),
    array("brand" => "Chevrolet", "model" => "Malibu", "price" => "$60/day")
);

// Create an instance of the CarRentalPage class
$carRentalPage = new CarRentalPage("Car Rental Website", $vehiclesData);

// Display the header section
$carRentalPage->displayHeader();

// Display the content specific to the car rental page
$carRentalPage->displayContent();

// Display the footer section
$carRentalPage->displayFooter();
?>