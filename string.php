<?php
//In PHP, a string is a sequence of characters used to store and manipulate textual data. Strings are one of the most commonly used data types in PHP and offer a wide range of functionality for processing text.

//Single Quotes ('): Simple strings where variables are not parsed.
$single = 'This is a single-quoted string.';
echo $single; // Output: This is a single-quoted string.

//Double Quotes ("): Strings that allow variable interpolation and special escape sequences.
$name = "John";
$double = "Hello, $name!";
echo $double; // Output: Hello, John!

//Heredoc Syntax: A multi-line string with double-quote-like behavior.
$name = "John";
$heredoc = <<<EOT
Hello, $name!
This is a multi-line string.
EOT;
echo $heredoc;

//Nowdoc Syntax: A multi-line string with single-quote-like behavior.
$nowdoc = <<<'EOT'
This is a nowdoc string.
Variables like $name will not be parsed.
EOT;
echo $nowdoc;

//String Functions in PHP
//strlen(): Returns the length of a string.
$string = "Hello, World!";
echo strlen($string); // Output: 13

//trim(): Removes whitespace (or specified characters) from both ends of a string.
$string = "  Hello, World!  ";
echo trim($string);  // Output: Hello, World!

//Parsing a URL
$url = "https://example.com/page?name=John&age=25";
$parsedUrl = parse_url($url);
print_r($parsedUrl);



?>