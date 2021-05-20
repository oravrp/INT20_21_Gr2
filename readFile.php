<?php
class ReadFile
{
    private $filename;
    private $table;
    public function __construct($table)
    {
        $this->filename = "JSON/$table.json";
        $this->table = $table;
    }
    public function __destruct()
    {
        echo "The read file was: {$this->filename}";
    }
    public function readJSONFile()
    {
        require "multi_login/functions.php";
        $data = file_get_contents($this->filename);
        $array = json_decode($data,true);
        $sql = "";
        foreach($array as $row)
        {
            switch($this->table)
            {
                case "users":
                    $sql .= " INSERT INTO users(id,username,email,user_type) VALUES('".$row["id"]."','".$row["username"]."','".$row["email"]."','".$row["user_type"]."');";
                    break;
            }
        }
        if ($db->multi_query($sql) === TRUE) {
            echo "The data in table $this->table are successfully inserted";
            } else {
            echo "Error while trying to insert data in the table $this->table " . $db->error;
            }
    }
}
$readUsers = new ReadFile("users");
$readUsers->readJSONFile();
?>