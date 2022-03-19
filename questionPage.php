<?php
session_start();
?>


<!DOCTYPE html>
<html>

<HEAD>
    <link rel="stylesheet" href="static/questionPage.css">
</HEAD>


<body>
    <?php
    if (isset($_POST['correct'])) {
        //do php stuff
        $_SESSION["Score"] += $_SESSION["Points"];
    } elseif (isset($_POST['wrong'])) {
        //do php stuff
        $_SESSION["Score"] -= $_SESSION["Points"];
    }
    ?>
    <div class="points">
        <?php echo $_SESSION["Points"] . "<br>"; ?>
    </div>
    <div id=container>
        <div class="question">
            <?php echo $_SESSION["Question"] . "<br>" ?>
        </div>
        <h2>Click for answer >> <button class="answer"><?php echo $_SESSION["Answer"] . "<br>" ?></button>
            << Click for answer</h2>
                <form method="post">
                   <button class="btn" id = "wrong" name="wrong">Incorrect</button>
                   <?php echo "-    Current Score: " . $_SESSION["Score"] . "    -"; ?>
                    <button class="btn" id = "correct" name="correct">Correct</button>
                </form><br><br><br>
                <a href="index.php"><button class="btn" id = "home" name="home">Home Page</button></a>
    </div>
</body>

</html>
