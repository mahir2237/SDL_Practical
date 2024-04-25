<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dog Breeds</title>
</head>
<body>
    <form method="post">
        <ul>
            <li><label for="name">Name:</label>
                <input type="text" name="name" size="25" /> </li>
            <li><label for="breed">Breed:</label></li>
                <input type="radio" name="breed" value="Poodle" /><span>Poodle</span>
                <input type="radio" name="breed" value="Bulldog" /><span>Bulldog</span>
                <input type="radio" name="breed" value="Pomeranian" /><span>Pomeranian</span>
                <input type="radio" name="breed" value="AfghanHound" /><span>AfghanHound</span>
        </ul>
        <input type="submit" value="Submit">
    </form>
    <?php
    class Dog 
    {
        var $dname;
        var $dbreed;

        function __construct($dname, $dbreed)
        {
            $this->dname = $dname;
            $this->dbreed = $dbreed;
        }
    }

    class Bulldog extends Dog
    {
        function bdinfo()
        {
            echo "{$this->dname} is a {$this->dbreed} breed dog from England.<br>";
        }
    }

    class Pomeranian extends Dog
    {
        function pminfo()
        {
            echo "{$this->dname} is a {$this->dbreed} breed dog from Poland.<br>";
        }
    }

    class Poodle extends Dog
    {
        function pdinfo()
        {
            echo "{$this->dname} is a {$this->dbreed} breed dog from Germany.<br>";
        }
    }

    class AfghanHound extends Dog
    {
        function afinfo()
        {
            echo "{$this->dname} is a {$this->dbreed} breed dog from Afghanistan.<br>";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dname = $_POST["name"]; //Taking dog's name from form
        $dbreed = $_POST["breed"]; //Taking dog's breed from form
        
        if ($dbreed == "Poodle") {
            $dog = new Poodle($dname, $dbreed);
            $dog->pdinfo();
        } 
        elseif ($dbreed == "Pomeranian") {
            $dog = new Pomeranian($dname, $dbreed);
            $dog->pminfo();
        } 
        elseif ($dbreed == "Bulldog") {
            $dog = new Bulldog($dname, $dbreed);
            $dog->bdinfo();
        } 
        elseif ($dbreed == "AfghanHound") {
            $dog = new AfghanHound($dname, $dbreed);
            $dog->afinfo();
        }
    }
    ?>
</body>
</html>
