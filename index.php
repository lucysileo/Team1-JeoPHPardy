<?php
session_start();


$questionsCol1 = array("The tag used to declare an obect in JavaScript?", "What built in method add one or more elements in an array?", "What built-in method convert all letters in a string to upper case?", "What built in method sorts out in JS?", "What variable is visible everywhere in your JS code?");
$answersCol1 = array("Var", "push()", "toUpperCase()", "sort()", "Global Variable");

// edit questions
$questionsCol2 = array("How do we print out in java?", "What is the concept that you can access objects of different types through the same interface?", "What is the idea of bundling data and method that works as one unit?", "Name one type of inheritance in java?", "What is a short block of code which takes in parameters and returns a value?");
$answersCol2 = array("Using system.out.print()", "Polymorphism", "Encapsulation", "Inheritance", "Lamda", "Expression");

// edit questions
$questionsCol3 = array("What does php stand for?", "How do you print out a statement in php?", "What statement starts a php script?", "What function reverse sorts and array in php?", "What contains information such as headers, paths, and script locations?");
$answersCol3 = array("hypertext processor", "echo", "The ?php tag", "Rsort()", "server");

// edit questions
$questionsCol4 = array("What does SQL stand for?", "What character allows you to select all in SQL?", "What command erases an index?", "What database management uses relational database?", "What type of database stores and provides access points to data points that are related to one another?");
$answersCol4 = array("Structure Query Language", "*", "delete", "MySQL", "Relational Database");

// edit questions
$questionsCol5 = array("What algorithm has the best sorting time complexity?", "An array is what kind of data structure?", "Quick sort running time depends on?", "How does a queue work?", "In order traversal of BST will show?");
$answersCol5 = array("Merge sort", "Linear", "Pivot", "FIFO - First In First Out", "Sorted list");

$_SESSION["Score"];



if (isset($_POST['point101'])) {

  $_SESSION["Question"] = $questionsCol1[0];
  $_SESSION["Answer"] = $answersCol1[0];
  $_SESSION["Points"] = 100;
  header("Location: questionPage.php");
} elseif (isset($_POST['point102'])) {

  $_SESSION["Question"] = $questionsCol2[0];
  $_SESSION["Answer"] = $answersCol2[0];
  $_SESSION["Points"] = 100;
  header("Location: questionPage.php");
} elseif (isset($_POST['point103'])) {

  $_SESSION["Question"] = $questionsCol3[0];
  $_SESSION["Answer"] = $answersCol3[0];
  $_SESSION["Points"] = 100;
  header("Location: questionPage.php");
} elseif (isset($_POST['point104'])) {

  $_SESSION["Question"] = $questionsCol4[0];
  $_SESSION["Answer"] = $answersCol4[0];
  $_SESSION["Points"] = 100;
  header("Location: questionPage.php");
} elseif (isset($_POST['point105'])) {

  $_SESSION["Question"] = $questionsCol5[0];
  $_SESSION["Answer"] = $answersCol5[0];
  $_SESSION["Points"] = 100;
  header("Location: questionPage.php");
} elseif (isset($_POST['point201'])) {

  $_SESSION["Question"] = $questionsCol1[1];
  $_SESSION["Answer"] = $answersCol1[1];
  $_SESSION["Points"] = 200;
  header("Location: questionPage.php");
} elseif (isset($_POST['point202'])) {

  $_SESSION["Question"] = $questionsCol2[0];
  $_SESSION["Answer"] = $answersCol2[0];
  $_SESSION["Points"] = 200;
} elseif (isset($_POST['point203'])) {

  $_SESSION["Question"] = $questionsCol3[0];
  $_SESSION["Answer"] = $answersCol3[0];
  $_SESSION["Points"] = 200;
  header("Location: questionPage.php");
} elseif (isset($_POST['point204'])) {

  $_SESSION["Question"] = $questionsCol4[0];
  $_SESSION["Answer"] = $answersCol4[0];
  $_SESSION["Points"] = 200;
  header("Location: questionPage.php");
} elseif (isset($_POST['point205'])) {

  $_SESSION["Question"] = $questionsCol5[0];
  $_SESSION["Answer"] = $answersCol5[0];
  $_SESSION["Points"] = 200;
  header("Location: questionPage.php");
} elseif (isset($_POST['point301'])) {

  $_SESSION["Question"] = $questionsCol1[2];
  $_SESSION["Answer"] = $answersCol1[2];
  $_SESSION["Points"] = 300;
  header("Location: questionPage.php");
} elseif (isset($_POST['point302'])) {

  $_SESSION["Question"] = $questionsCol2[0];
  $_SESSION["Answer"] = $answersCol2[0];
  $_SESSION["Points"] = 300;
  header("Location: questionPage.php");
} elseif (isset($_POST['point303'])) {

  $_SESSION["Question"] = $questionsCol3[0];
  $_SESSION["Answer"] = $answersCol3[0];
  $_SESSION["Points"] = 300;
  header("Location: questionPage.php");
} elseif (isset($_POST['point304'])) {

  $_SESSION["Question"] = $questionsCol4[0];
  $_SESSION["Answer"] = $answersCol4[0];
  $_SESSION["Points"] = 300;
  header("Location: questionPage.php");
} elseif (isset($_POST['point305'])) {

  $_SESSION["Question"] = $questionsCol5[0];
  $_SESSION["Answer"] = $answersCol5[0];
  $_SESSION["Points"] = 300;
  header("Location: questionPage.php");
} elseif (isset($_POST['point401'])) {

  $_SESSION["Question"] = $questionsCol1[3];
  $_SESSION["Answer"] = $answersCol1[3];
  $_SESSION["Points"] = 400;
  header("Location: questionPage.php");
} elseif (isset($_POST['point402'])) {

  $_SESSION["Question"] = $questionsCol2[0];
  $_SESSION["Answer"] = $answersCol2[0];
  $_SESSION["Points"] = 400;
  header("Location: questionPage.php");
} elseif (isset($_POST['point403'])) {

  $_SESSION["Question"] = $questionsCol3[0];
  $_SESSION["Answer"] = $answersCol3[0];
  $_SESSION["Points"] = 400;
  header("Location: questionPage.php");
} elseif (isset($_POST['point404'])) {

  $_SESSION["Question"] = $questionsCol4[0];
  $_SESSION["Answer"] = $answersCol4[0];
  $_SESSION["Points"] = 400;
  header("Location: questionPage.php");
} elseif (isset($_POST['point405'])) {

  $_SESSION["Question"] = $questionsCol5[0];
  $_SESSION["Answer"] = $answersCol5[0];
  $_SESSION["Points"] = 400;
  header("Location: questionPage.php");
} elseif (isset($_POST['point501'])) {

  $_SESSION["Question"] = $questionsCol1[4];
  $_SESSION["Answer"] = $answersCol1[4];
  $_SESSION["Points"] = 500;
  header("Location: questionPage.php");
} elseif (isset($_POST['point502'])) {

  $_SESSION["Question"] = $questionsCol2[0];
  $_SESSION["Answer"] = $answersCol2[0];
  $_SESSION["Points"] = 500;
  header("Location: questionPage.php");
} elseif (isset($_POST['point503'])) {

  $_SESSION["Question"] = $questionsCol3[0];
  $_SESSION["Answer"] = $answersCol3[0];
  $_SESSION["Points"] = 500;
  header("Location: questionPage.php");
} elseif (isset($_POST['point504'])) {

  $_SESSION["Question"] = $questionsCol4[0];
  $_SESSION["Answer"] = $answersCol4[0];
  $_SESSION["Points"] = 500;
  header("Location: questionPage.php");
} elseif (isset($_POST['point505'])) {

  $_SESSION["Question"] = $questionsCol5[0];
  $_SESSION["Answer"] = $answersCol5[0];
  $_SESSION["Points"] = 500;
  header("Location: questionPage.php");
} elseif (isset($_POST['reset'])) {
  $_SESSION["Score"] = 0;
}
?>
<!DOCTYPE html>

<HEAD>
  <link rel="stylesheet" href="static/style.css">
</HEAD>

<body>

  <form method="post">
    <div id="container">
      <table id="board">
        <tr id="categories">
          <td id="categories1">Javascript</td>
          <td id="categories2">Java</td>
          <td id="categories3">PHP</td>
          <td id="categories4">Databases</td>
          <td id="categories5">Data Structures</td>
        </tr>
        <tr id="row1">
          <td id="row1_1"><button name="point101">100</button></td>
          <td id="row1_2"><button name="point102">100</button></td>
          <td id="row1_3"><button name="point103">100</button></td>
          <td id="row1_4"><button name="point104">100</button></td>
          <td id="row1_5"><button name="point105">100</button></td>
        </tr>
        <tr id="row2">
          <td id="row2_1"><button name="point201">200</button></td>
          <td id="row2_2"><button name="point202">200</button></td>
          <td id="row2_3"><button name="point203">200</button></td>
          <td id="row2_4"><button name="point204">200</button></td>
          <td id="row2_5"><button name="point205">200</button></td>
        </tr>
        <tr id="row3">
          <td id="row3_1"><button name="point301">300</button></td>
          <td id="row3_2"><button name="point302">300</button></td>
          <td id="row3_3"><button name="point303">300</button></td>
          <td id="row3_4"><button name="point304">300</button></td>
          <td id="row3_5"><button name="point305">300</button></td>
        </tr>
        <tr id="row4">
          <td id="row4_1"><button name="point401">400</button></td>
          <td id="row4_2"><button name="point402">400</button></td>
          <td id="row4_3"><button name="point403">400</button></td>
          <td id="row4_4"><button name="point404">400</button></td>
          <td id="row4_5"><button name="point405">400</button></td>
        </tr>
        <tr id="row5">
          <td id="row5_1"><button name="point501">500</button></td>
          <td id="row5_2"><button name="point502">500</button></td>
          <td id="row5_3"><button name="point503">500</button></td>
          <td id="row5_4"><button name="point504">500</button></td>
          <td id="row5_5"><button name="point505">500</button></td>
        </tr>
      </table>
      <table id="score">
        <tr>
          <td>Name: </td>
          <td>Score: <?php echo $_SESSION["Score"] ?></td>
          <td></td>
          <td></td>
          <td><button name="reset" value="Restart">Restart</button></td>
        </tr>
      </table>
    </div>
  </form>
</body>