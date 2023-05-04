# oop - Object oriented Programming

Part of my apprenticeship in computer science. 

# Task 1: Classes and objects
Create a class called "Bicycle" with the following properties:
 $manufacturer
 $model
 $year
Create an object of class "Bicycle" and set the values ​​of
Properties on "Kalkhoff", "Image 3.B Move Wabe" and 2022. Then use
echo to display the make, model, and year of the bike.

# Task 2: Encapsulation
Create a class named "Person" with the following private properties:
 $name
 $age
Create public getter and setter methods for the properties.
Create an object of the Person class and set the property values
using the setter methods. Then use echo to get the name and the
Display the person's age using the getter methods.

# Task 3: Inheritance
Create a class named "Person" with the following properties
 $name
 $age
 gender
Create a subclass named "Student" that extends the Person class and
adds the following properties:
 $studentID
 $course
Create another subclass named "Teacher" that will contain the
Extended the Person class and added the following properties:
 $teacherID
 $subject
Create constructors for all classes that have their respective properties
initialize.
In each class, create a method called "displayInfo" that contains the properties
of the object in a formatted string.
Create an object of class Person, an object of class Student and a
Object of class Teacher. You can make up values for the properties.
Call the displayInfo() method for all objects.

# Task 4: Polymorphism
Create a class named "Shape" using the following method:
Note: You can, but do not have to, set the data type. I'll show you how in class
that works exactly.
 getArea() : float
Create subclasses named "Rectangle" and "Circle" that use the class
Expand the shape and override the getArea() method.
In the Rectangle class, add the following properties:
 $width (Float)
 $height (floating point)
In the Circle class, add the following property:
 $radius (float)
In the getArea() method of the Rectangle class, calculate the area of the
rectangle and return it with the following formula: $width * $height.
In the getArea() method of the Circle class, calculate the area of the
Circle with the formula: pi * ($radius ^ 2) and return it.
Create an object of Rectangle class with a width of 10 and a height
of 5. Create an object of class Circle with a radius of 4. Use
They echo to display the area of the rectangle and circle.

# Task 5: Abstraction
Create an abstract class named "Animal" with the following
abstract methods.
 makeSound() : string
 eat(string $food) : void
Create subclasses named "Dog" and "Cat" that class "Animal"
and implement the makeSound() and eat() methods.
In the makeSound() method of the Dog class, enter the string "Woof!"
return. The makeSound() method of the Cat class returns the string "Meow!"
return.
In the eat() method of the Dog class, enter the string "The dog is eating "
followed by the food parameter. In the eat() method of the Cat
returns the string "The cat is eating" followed by the food parameter.
Create an object of class dog and an object of class cat. Call
the makeSound() and eat() methods for both objects.
