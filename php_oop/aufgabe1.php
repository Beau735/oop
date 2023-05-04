<?php

/*Erstellen Sie eine Klasse namens "Bicycle" mit den folgenden Eigenschaften:
 $manufacturer
 $model
 $year
Erstellen Sie ein Objekt der Klasse "Bicycle" und setzen Sie die Werte der
Eigenschaften auf "Kalkhoff", "Image 3.B Move Wabe" und 2022. Verwenden Sie dann
echo, um die Marke, das Modell und das Jahr des Fahrrads anzuzeigen.*/

class Bicycle {
    public $manufacturer;
    public $model;
    public $year;
    
    public function __construct($manufacturer, $model, $year) {
        $this->manufacturer = $manufacturer;
        $this->model = $model;
        $this->year = $year;
    }
}

// Erstelle ein Objekt der Klasse Bicycle mit den Eigenschaften "Kalkhoff", "Image 3.B Move Wabe" und 2022
$myBicycle = new Bicycle("Kalkhoff", "Image 3.B Move Wabe", 2022);

// Gib die Marke, das Modell und das Jahr des Fahrrads aus
echo "Mein Fahrrad ist von " . $myBicycle->manufacturer . ", Modell: " . $myBicycle->model . ", Jahr: " . $myBicycle->year;
?>
