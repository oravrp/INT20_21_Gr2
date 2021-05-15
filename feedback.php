<?php 
if(isset($_POST['submit'])) {
class Table {
    private $name;
    private $surname;
    private $phoneNumber;
    private $birthday;
    private $Continent;
    private $Country;

    public function __set($property, $value)
    {
        if(property_exists($this, $property)) 
        {
            $this->$property = $value;
        }
    }
    public function __get($property)
    {
        return $this->$property;
    }
}
$objT = new Table();
    if(!ctype_alpha($_POST['name']) && !ctype_alpha($_POST['surname'])){
        echo "<h3 style = 'text-align: center;'>Teksti i marrur nuk eshte ne formatin e duhur. Emri/Mbiemri nuk duhet te permbajne numra </h3>";
        die();
    }
    $regPhonePattern = "/\(\d{3}\)\s\d{2}\s\d{6}/";
    $phoneArrray = explode(" ", $_POST['phone']);
    if (count($phoneArrray) != 3) {
        echo "<h3 style = 'text-align: center;'>Numri i telefonit nuk eshte ne formatin e duhur</h3>";
    }
    elseif (preg_match($regPhonePattern, trim($_POST['phone']))!=1) {
        echo "<h3 style = 'text-align: center;'>Numri i telefonit nuk eshte ne formatin e duhur</h3>";
    }
    else {
        $objT->name = $_POST['name'];
        $objT->surname = $_POST['surname']; 
        $objT->phoneNumber = $_POST['phone'];
        $objT->birthday = $_POST['birthdate'];
        if($_POST['continent'] == 1) {
            $objT->Continent = 'Europe';
        }
        elseif ($_POST['continent'] == 2) {
            $objT->Continent = 'America';
        }
        elseif ($_POST['continent'] == 3) {
            $objT->Continent = 'Africa';
        }
        elseif ($_POST['continent'] == 4) {
            $objT->Continent = 'Asia';
        }
        elseif ($_POST['continent'] == 5) {
            $objT->Continent = 'Australia';
        }
        $objT->Country = $_POST['country'];
        echo "<h2 style = 'text-align: center; margin-top: 40px;'>Thank you for your suggestions. We try to be better every day :)</h2>";
        echo "<h2 style = 'text-align: center; margin-top: 80px;'>User information</h2>";
        echo "<table border = 1  width = '600' style = 'border: 1px solid black; border-collapse: collapse; text-align: center;
        margin-left: 370px;'>";
        echo "<tr><th>Emri</th><th>Mbiemri</th><th>Numri i Telefonit</th><th>Data e Lindjes</th>
        <th>Kontineti</th><th>Shteti</th></tr>";
        echo "<tr>";
            echo "<td>".$objT->name. "</td>";
            echo "<td>".$objT->surname. "</td>";
            echo "<td>".$objT->phoneNumber. "</td>";
            echo "<td>".$objT->birthday. "</td>";
            echo "<td>".$objT->Continent. "</td>";
            echo "<td>".$objT->Country. "</td>";
        echo "</tr>";
        echo "</table>";
       
    }
}
?>

