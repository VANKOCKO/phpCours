<?php
// Magic constants
echo __DIR__ ." <br>";
echo __FILE__ ." <br>";
echo __LINE__ ." <br>";

// Create directory

//mkdir("test");

// Rename directory

//rename ('test','test2');

// Delete directory

//rmdir('test2'); 

// Read files and folders inside directory
echo file_get_contents("lorem.txt").'<br>';

$file = scandir('../');
echo ' <pre>';
   var_dump($file); 
echo '</pre>';
// file_get_contents, file_put_contentse
echo file_get_contents('lorem.txt').'<br>';
file_put_contents('sample.txt','Some content');
// file_get_contents from URL
$usersJson = file_get_contents('https://jsonplaceholder.typicode.com/users');
$users = json_decode($usersJson, true); // true : associate array
echo '<pre>';
  print_r($users); 
echo '</pre>'; 
echo '<br>';
  // https://www.php.net/manual/en/book.filesystem.php
// file_exists
echo file_exists ('sample.txt').'<br>';
// is_dir
is_dir('test'); // false car il n'existe pas
// Check if file exists or not
file_exists('lorem.txt'); // true

// Get file size
filesize('lorem.txt');

// Delete file
unlink('lorem.txt');

// https://www.php.net/manual/en/book.filesystem.php