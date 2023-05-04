<?php

/*Erstellen Sie eine abstrakte Klasse mit dem Namen "Animal" mit den folgenden
abstrakten Methoden.
 makeSound() : string
 eat(string $food) : void
Erstellen Sie Unterklassen namens "Hund" und "Katze", die die Klasse "Animal"
erweitern und die Methoden makeSound() und eat() implementieren.
Geben Sie in der Methode makeSound() der Klasse Dog die Zeichenkette "Woof!"
zurück. Die makeSound()-Methode der Klasse Cat gibt die Zeichenkette "Meow!" zurück.
Geben Sie in der Methode eat() der Klasse Dog die Zeichenkette "The dog is eating "
gefolgt vom Parameter food zurück. Geben Sie in der Methode eat() der Klasse Cat
die Zeichenkette "The cat is eating" gefolgt vom Parameter food zurück.
Erstellen Sie ein Objekt der Klasse Hund und ein Objekt der Klasse Katze. Rufen Sie
die Methoden makeSound() und eat() für beide Objekte auf.*/

abstract class Animal {
    abstract public function makeSound(): string;
    abstract public function eat(string $food): void;
}

class Dog extends Animal {
    public function makeSound(): string {
        return "Woof!";
    }
    
    public function eat(string $food): void {
        echo "The dog is eating " . $food;
    }
}

class Cat extends Animal {
    public function makeSound(): string {
        return "Meow!";
    }
    
    public function eat(string $food): void {
        echo "The cat is eating " . $food;
    }
}

$dog = new Dog();
$cat = new Cat();

echo $dog->makeSound() . "\n";
$dog->eat("bone") . "\n";

echo $cat->makeSound() . "\n";
$cat->eat("fish") . "\n";
?>
