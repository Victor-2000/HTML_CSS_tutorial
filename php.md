# 2.1 PHP Syntax and Variables

- echo shows the text between '' on the page
- you can wrap the echo string with html if you need it
- you can also do this:
  &lt;h1>
  &lt;?php

  ... something echoes here

  ?>
  &lt;/h1>
  and it will return the echoed text as h1 text on the page.

- HTTP error 500 is usually a problem with your code
- to declare a variable you use \$name = value; syntax
- to concatenate strings in php you use . instead of +
- if you use double quotes in php you can embed variables
  for ex:
  $name = 'Victor';
    echo "Hello, $name";
  will print Hello, Victor on the page

# 2.2 PHP Error Reporting

- if you want for the php to report errors you have to
  activate the display_errors attribute from the php file
  in MAMP.

# 2.3 PHP Conditions and Decisions

- if you have a php file which contains only php you should
  not close it with ?>
- if you echo an boolean when it is true it will return 1 but
  when it is false it won't return anything

# 2.4 PHP Arrays

- if you want to make an array you can use the array()
  function.
  - you can add elements at the same time by adding the
    elements as parameters. ex. array('Vela', 'Explorer')
  - you can use the square brackets nowadays
    ['Vela', 'Explorer']
- print_r() prints human-readable information about a
  variable/array.
- isset() is a function which checks if an element of an array
  is set
- you can also create asociative arrays (map equivalent in
  JavaScript) with this format:
  [
  key_0 => value_0,
  ...
  key_n => value_n
  ]

# 2.5 PHP Loops

- you can use <?= $title> instead of <?php echo $title;?>
- you should separate php and html as much as possible
  because it requires a lot of proccesing
- for doing a foreach loop you call:
  foreach($array as $element){
  ... process every $element of the array
  }
  or 
  foreach($array as $key => $element){
  ... process every $element + every $key of the array
  }
  in case the array is a key-value type.
- for creating a for loop you call:
  for($i = 0; $i < 10; \$i++){
  ... Some processing
  }
- to get the number of items in an array you can use the  
   function count(\$array);

# 2.6 PHP Functions

- for creating a function you should follow the following
  syntax:
  function functionName($a,$b){
  ... some actions here and (maybe) a return
  }
