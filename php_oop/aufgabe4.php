<?php

/*Erstellen Sie eine Klasse namens "Shape" mit der folgenden Methode:
Hinweis: Sie können, müssen jedoch nicht den Datentyp festlegen. Ich zeige Ihnen im Unterricht wie
das genau Funktioniert.
 getArea() : float
Erstellen Sie Unterklassen mit den Namen "Rectangle" und "Circle", die die Klasse
Shape erweitern und die Methode getArea() überschreiben.
Fügen Sie in der Klasse "Rectangle" die folgenden Eigenschaften hinzu:
 $width (Float)
 $height (Fließkomma)
Fügen Sie in der Klasse Circle die folgende Eigenschaft hinzu:
 $radius (Float)
Berechnen Sie in der Methode getArea() der Klasse Rectangle den Flächeninhalt des
Rechtecks und geben Sie ihn mit der folgenden Formel zurück: $width * $height.
Berechnen Sie in der Methode getArea() der Klasse Circle den Flächeninhalt des
Kreises mit der Formel: pi * ($radius ^ 2) und geben Sie ihn zurück.
Erstellen Sie ein Objekt der Klasse Rectangle mit einer Breite von 10 und einer Höhe
von 5. Erstellen Sie ein Objekt der Klasse Circle mit einem Radius von 4. Verwenden
Sie echo, um den Flächeninhalt des Rechtecks und des Kreises anzuzeigen.*/


class Shape {
  public function getArea(): float {
    // Do nothing, to be overriden by subclasses
  }
}

class Rectangle extends Shape {
  private float $width;
  private float $height;

  public function __construct(float $width, float $height) {
    $this->width = $width;
    $this->height = $height;
  }

  public function getArea(): float {
    return $this->width * $this->height;
  }
}

class Circle extends Shape {
  private float $radius;

  public function __construct(float $radius) {
    $this->radius = $radius;
  }

  public function getArea(): float {
    return pi() * ($this->radius ** 2);
  }
}

// Create objects and display areas
$rectangle = new Rectangle(10, 5);
$circle = new Circle(4);

echo "Area of Rectangle: " . $rectangle->getArea() . "<br>";
echo "Area of Circle: " . $circle->getArea();

?>
