<?php

class WriteFile
{
    private $filename;
    private $type;

    public function __construct($t)
    {
        $this->type = $t;
    }

    public function setFileName($s)
    {
        $this->filename = $s;
    }

    public function getFileName()
    {
        return $this->filename;
    }
}

class WriteJSONFile extends WriteFile
{
    public function writeJSONNew($table) //e kqyr me contains
    {
        require "multi_login/functions.php"; 
        $query = "SELECT * FROM $table;";
        //echo "<h2>CREATING JSON FILE FROM THE DATA IN TABLE $table </h2><br>";
        //echo "The following query is being used to export the data<br>$query<br>";
        $result = mysqli_query($db,$query);
        $user_data = array(); 
        $this->setFileName("JSON/$table.json");
        while($row = mysqli_fetch_array($result))
        {
            if($table=="users"){
                    $user_data[] = array(
                        'id' => $row["id"],
                        'username' => $row["username"],
                        'email' => $row["email"],
                        'user_type' => $row["user_type"]
                    );
            }
            
        }
        $encoded = json_encode($user_data);
        $fN = $this->getFileName();
        if(file_put_contents($fN,$encoded))
        {
            echo $fN ." file has been created";
        }
        else
        {
            echo $fN ." file has not been created";
        }
    }
}

$writeUsers = new WriteJSONFile("json");
$writeUsers->writeJSONNew("users");

?>

