#Associations Between Classes

Two weeks ago we created a simple Student class. You should remember doing something like this.

```
$exampleStudent = new Student("u0123456", "John", "Smith");
echo "<p>".$exampleStudent->getFullName()."</p>";
```

Have a look at class-diagram.png it shows relationships between a Student class and Module and Course classes. The class diagram shows some methods for the classes but setter/getter methods aren't shown. 

We are going to implement these relationships in PHP code. 

* Put *index.php* and *student.php* on a web server.
* Open *index.php* in a browser and check it works (it should simply display the name of a student)
* Open *index.php* in a text editor and answer the questions. 

  