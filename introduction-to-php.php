<?php
/*
+---+
| 1 | 
+---+
Print the sentence: Welcome to PHP!
*/
$sentence1= "Welcome to PHP!";
echo $sentence1;



// task separator
echo "<hr style=\"margin 1rem 0\">";

/* 
+---+
| 2 | 
+---+
Print the sentence: PHP stands for "Hypertext Preprocessor"!
*/
$sentence2= "PHP stands for 'Hypertext Preprocessor!'";
echo $sentence2;



// task separator
echo "<hr style=\"margin 1rem 0\">";

/* 
+---+
| 3 | 
+---+
Print the following sentence as a paragraph: PHP stands for "Hypertext Preprocessor"!
*/

echo '<p> PHP stands for "Hypertext Preprocessor!"</p>';



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
$acronym1 ="HTML - Stands for Hypertext Markup Language";
$acronym2 ="CSS - Stands for Cascading Stylesheet";
$acronym3 ="JS - Stands for JavaScript";
$acronym4 ="PHP - Stands for Hypertext Preprocessor";
$acronym5 ="SQL - Stands for Structural Query Language";


echo $acronym1;
echo "<br>";
echo $acronym2;
echo "<br>";
echo $acronym3;
echo "<br>";
echo $acronym4;
echo "<br>";
echo $acronym5;
   
   
   
   
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

echo "<ul>
	<li>HTML - Stands for Hypertext Markup Language</li>
	<li>CSS - Stands for Cascading Stylesheet</li>
	<li>JS - Stands for JavaScript</li>
	<li>PHP - Stands for Hypertext Preprocessor</li>
	<li>SQL - Stands for Structural Query Language</li>
	</ul>"; 
?>