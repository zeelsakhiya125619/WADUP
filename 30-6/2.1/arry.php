<?php
    $numeric = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
    print_r($numeric);

    echo "<br><br>";
    $name = array(
        "jan" => "31",
        "feb" => "28",
        "mar" => "31",
        "apr" => "30",
        "may" => "31",
        "jun" => "30",
        "jul" => "31",
        "aug" => "31",
        "sep" => "30",
        "oct" => "31",
        "nov" => "30",
        "dec" => "31"
    );
    print_r($name);

    echo "<br><br>";
    $laptop = array(
        "lenovo" => array(
            "model" => "lenovo pavilion",
            "price" => "50000"
        ),
        "iphone" => array(
            "model" => "17pro max",
            "price" => "60000"
        )
    );
    print_r($laptop);
?>