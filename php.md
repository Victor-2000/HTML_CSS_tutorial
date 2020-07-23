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

# 2.7 Local and Global PHP Variables

- if you want to add a default value to the parameter you can
  use function functionName(\$parameter = defaultValue){...}
- for importing global variables you can use:
  global $var1, $var2, \$var3;
- function array_map(anonymousFunction($item), $array) is
  executing a function to each element of the array
- in case you want to use another variable from a function
  which encases the current one you have to use the 'use'
  keyword like this: function functionName() use (\$usedVar)

# 2.8 PHP Include and PHP Require

- if you want to add a html template like the header or
  footer to a php file without actually writing it every
  time, you can use: include('address to php file'); which
  will basically will echo the contents of the php file.
- require is the same as include except if the file is not  
  found the page will return an error.
- require_once is the same as require but it also ensures
  that the php is called only once. For example if you add
  includes and you have to call require more times you can
  use require_once to assure that it is not done multiple
  times.

# 3.1 PHP GET Requests

- if you want to retrieve get information from a request
  which is basically a change in the http/https address
  after the ? mark, you can use \$\_GET['wantedParameter']
  superglobal to get the parameters from the address.
- IT IS CRITICAL TO MAKE SURE THAT EVERYTHING IS SECURE so
  you have to validate the input from the html using special
  functions (to prevent cross site scripting for example)
- filter_input is on of those functions the syntax is the  
  following:
  filter_input(inputType,parameterName,validationType);
  for example:
  filter_input(INPUT_GET,'category',FILTER_VALIDATE_INT);
  will check the parameter category from the get super
  global variable and will validate for an integer.
  If something is wrong this function will return false
  in other case it will return the value.
- if you want to stop completely a php script you can use
  the function die() (especially useful when something is
  wrong with the input (XSS attempt) )
- if you want to read more about filters you can access
  php.net/manual/en/filter.filters.php

# 3.2 PHP POST Requests

- \$\_POST['parameter'] is the same as get but you can retrieve
  info from a form here, for ex:
  &lt;form action="" method="POST">
  &lt;input type="text" name="email" id="email">
  &lt;/form>
  if you do \$\_POST['email'] you will get the input with
  the name email.
- if you have only one form you have to check the type of  
  request before reacting to a POST method by:
  if(\$\_SERVER['REQUEST_METHOD'] == 'POST'){
  ...do an action here
  }
- if you have multiple forms you can use:
  if(isset(\$\_POST[submitButtonName])){
  ...do an action here
  }
  this way you are sure that you do the required action to
  the required button.
- do not rely on server side to validate your info. Always  
  validate it by yourself (and the server if you want to).

# 3.3 PHP Sessions

- in every php file where you plan to use session information
  you should use session_start();
- for adding constants you follow this syntax:
  const CONSTANTNAME = value;
- if you want to redirect to another page you can use:
  redirect('Location: URLOFSOURCE');
  - bear in mind that this should be executed before
    any html is executed so you should declare the header
    later.
- if you want to set up a session parameter you have to call
  \$\_SESSION[parameterName] = parameterValue;
  before you must ensure that the session is started and to
  call session_start() on every page you use the parameters.
- to stop the session from working you should call:
  session_unset(); // this will unset the session variables
  session_destroy(); // this will totally destroy the session

# 4.1 Separating PHP Logic From Presentation

-
