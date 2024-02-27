<?php

// Create array

$fruits = ["Banane","Pomme","Orange"];

// Print the whole array

echo "<pre>";
  var_dump($fruits);
echo "</pre>"; 

// Get element by index

echo $fruits[1]."<br>";

// Set element by index

$fruits[0]='Peche';
echo "<pre>";
  var_dump($fruits);
echo "</pre>"; 

// Check if array has element at index 2

echo isset($fruits[0]);

// Append element

$fruits[] = " banane";
echo "<pre>";
  var_dump($fruits);
echo "</pre>"; 

// Print the length of the array

echo count($fruits).'<br>' ;

// Add element at the end of the array

array_push($fruits,'poire');
echo "<pre>";
  var_dump($fruits);
echo "</pre>"; 

// Remove element from the end of the array

array_pop($fruits);
echo "<pre>";
  var_dump($fruits);
echo "</pre>"; 

// Add element at the beginning of the array

array_unshift($fruits,"Cerise");
echo "<pre>";
  var_dump($fruits);
echo "</pre>"; 

// Remove element from the beginning of the array

array_shift($fruits); 
echo "<pre>";
  var_dump($fruits);
echo "</pre>"; 

// Split the string into an array

$string = "Banane, pomme,Peche";
echo "<pre>";
  var_dump(explode(',',$string));
echo "</pre>"; 
// Combine array elements into string

echo "<pre>";
  var_dump(explode('&',$string));
echo "</pre>"; 

// Check if element exist in the array

echo "<pre>";
  var_dump(in_array('Mangue',$fruits));
echo "</pre>"; 

// Search element index in the array

echo "<pre>";
  var_dump(array_search('Mangue',$fruits));
echo "</pre>"; 

// Merge two arrays

$legumes = ['comcombre','tomates'];
echo "<pre>";
  var_dump(array_merge($legumes,$fruits));
echo "</pre>"; 
echo "<pre>";
  var_dump([...$legumes,...$fruits]);
echo "</pre>"; 
// Sorting of array (Reverse order also)
echo "<pre>";    
  var_dump($fruits);
echo "</pre>"; 
sort($fruits);
echo "<pre>";
  var_dump($fruits);
echo "</pre>"; 

// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array

     $personne = [
           'nom' => 'kocko',
           'prenom' => 'van',
           'age' => 32,
           'hobbies' => [ 'coder', 'lire','vendre']
     ];
echo "<pre>";
  var_dump($personne);
echo "</pre>"; 
// Get element by key
echo $personne['nom'].'<br>';
// Set element by key
$personne['entreprise'] = 'Infozone';
echo "<pre>";
  var_dump($personne);
echo "</pre>"; 
// Null coalescing assignment operator. Since PHP 7.4
// if(!isset($personne['addresse'])){
//        $personne['addresse'] = 'inconnue';
// }
// echo "<pre>";
//   var_dump($personne);
// echo "</pre>"; 

$personne['addresse'] ??= 'inconnue';
echo "<pre>";
  var_dump($personne);
echo "</pre>";
 
// Check if array has specific key

// Print the keys of the array

echo "<pre>";
  var_dump(array_keys($personne));
echo "</pre>";

// Print the values of the array

echo "<pre>";
  var_dump(array_values($personne));
echo "</pre>";

// Sorting associative arrays by values, by keys
asort($personne);
echo "<pre>";
  var_dump($personne);
echo "</pre>";

// Two dimensional arrays

$todos = [
         
      [  
         'Title' => 'Todo title 1 ' , 
         'completed' => true
      ],
      [  
         'Title' => 'Todo title 2 ' , 
         'completed' => false
      ]
];

echo "<pre>";
  var_dump($todos);
echo "</pre>";
