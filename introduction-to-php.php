<?php

/*
+---+
| 1 | 
+---+
Print the sentence: Welcome to PHP!
*/
$a="Welcome to PHP!";
echo $a;



// task separator
echo "<hr style=\"margin 1rem 0\">";

/* 
+---+
| 2 | 
+---+
Print the sentence: PHP stands for "Hypertext Preprocessor"!
*/

$b="PHP stands for \"Hypertext Preprocessor\"";
echo $b;


// task separator
echo "<hr style=\"margin 1rem 0\">";

/* 
+---+
| 3 | 
+---+
Print the following sentence as a paragraph: PHP stands for "Hypertext Preprocessor"!
*/

$c="<p>PHP stands for \"Hypertext Preprocessor\"!</p>";
    echo $c;


// task separator
echo "<hr style=\"margin 1rem 0\">";

/* 
+---+
| 4 | 
+---+
Print the following acronyms - every acronym in a new line:

HTML - Stands for Hypertext Markup Language
CSS - Stands for Cascading Stylesheet
JS - Stands for JavaScript
PHP - Stands for Hypertext Preprocessor
SQL - Stands for Structural Query Language
*/

$d="HTML - Stands for Hypertext Markup Language";
$e="CSS - Stands for Cascading Stylesheet";
$f="JS - Stands for JavaScript";
$g="PHP - Stands for Hypertext Preprocessor";
$h="SQL - Stands for Structural Query Language";

echo $d ."<br>". $e ."<br>". $f ."<br>". $g ."<br>". $h;

   
   
   
   
// task separator
echo "<hr style=\"margin 1rem 0\">";

/* 
+---+
| 5 | 
+---+
Print the following acronyms in unordered list - <ul> ... </ul>:

HTML - Stands for Hypertext Markup Language
CSS - Stands for Cascading Stylesheet
JS - Stands for JavaScript
PHP - Stands for Hypertext Preprocessor
SQL - Stands for Structural Query Language
*/

$list = "<ul>
    <li>HTML - Stands for Hypertext Markup Language</li>
    <li>CSS - Stands for Cascading Stylesheet</li>
    <li>JS - Stands for JavaScript</li>
    <li>PHP - Stands for Hypertext Preprocessor</li>
    <li>SQL - Stands for Structural Query Language</li>
        </ul>";

echo $list;

?>
