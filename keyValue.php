<!-- foreach with key value pair -->
<?php
$data = array("John" => "Doe", "age" => 25, "country" => "USA", "city" => "LA");
foreach ($data as $key => $value) {
    echo $key . " : " . $value . "<br>";
}

?>