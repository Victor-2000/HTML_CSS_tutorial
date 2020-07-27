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

- you have to separate logic from the display most of the time
  (separate it into controllers and views respectively)
- the view also can be separated into layout(where the header
  and the footer go) and content (where the main part of the
  application goes)

# 4.2 Working With Files

- usually when you want to fetch general data from the php
  files you store it in a config.php
- app.php holds all the requires
- if you wanna checkout the documentation of a function you
  can just write php.net/functionName
- file_put_contents(\$fname, '') adds contents to the file
  the content can be even an empty string like above..
- file_get_contents(\$fname) gets the contents of a file.

# 4.3 Parse JSON and Output Data

- to get formatted data from a json string you can use
  json_decode(\$stringVar);
- for accessing attributes from an object in php you have
  to use -> instead of . like in java/javascript
  $object->$attribute
- when you are making a foreach loop that will show some
  html (like tags) you can use the html friendly versions
  of loops, for ex:

   <?php foreach($model as $item):?>

                <tr>
                    <td><?= $item->term?></td>
                    <td><?= $item->definition?></td>
                </tr>

    <?php endforeach;?>

  - note that you use : as the { and the endforeach; as
    the }

# 4.5 Truthiness and Adding a PHP Search

- strpos($text, $string) "you search for the needle in a
  haystack" the function shows at which position is the
  string in the text.
- array_filter(arr,fn) the filter function returns the
  elements that are filtered buy the condition function
- when comparing 0 == false you will get true because 0
  is a falsey value. If you don't want to get true you can
  use === or !== then you will get false.

# 4.6 Managing PHP Paths

- <pre> __FILE__ </pre> is a variable that holds the absolute
  path of the current file. If you need to create an absolute
  path to another neighboring files this variable is very
  useful.
- the function dirname(absoluteAddress) gets the directory
  address of the file.
- if you want to go 1 directory above you can use '/../'
  as a concatenation.
- if you want to use a variable which is not predefined before
  compilation (like 2 or 'awsd') you can't use const. Instead
  you can use define('constName',constValue); (which is the
  equivalent of final in JavaScript)

# 4.7 Creating PHP Terms

- when you want to convert/cast something into another format
  you can use the java usual syntax: (object) for example.
- to add an element at the end of an array you can use
  $arrayName[] = $element;

# 4.8 Deleting PHP Terms

- unset(\$array[n]) is a function which can unset a cell from
  an array.
- when unsetting an array element which is taken from json
  and will be put in a json file you should rebuild the
  array because otherwise you will get an asociative array
  as a result (ex: {'0':{...},'2':{...},...}) without the
  missing element.
  - to rebuild the array you should use the line
    $new_array = array_values($old_array);
    the function above returns the values of the old array.

# 5.1 PHP Namespaces

- if you have a lot of files which have the same name you
  have to use the 'namespace' keyword with the name of the
  virtual folder you want to save it to, for example:
  <?php namespace App\Data; 
  when you use a function from the file you have to call
  App\Data before it in this case or you can use the line:
  'use App\Data;'
  and call just Data\function_name()

# 5.2 Introduction to PHP Classes

- to declare a class in php you have to use the following
  syntax:
  class ClassName {
  public $var;
  private $var2;

  function \_\_construct(){
  //... constructor content
  }

  function dummy_function(){
  //...
  }
  }
  to create an object you call new ClassName($par1,$par2,...);

# 5.3 Improving Code With PHP Classes

- Most of the time it is a good practice to put functions in
  different objects according to the use, also the data
  related to it (or the path to the data)
- it is a good practice to make private to functions and
  varibles where possible.

# 6.1 Introduction to MySQL

- When creating a database you should add a primary key
  most of the time the primary key is named id and has the
  auto increment(A_I) box ticked.
- type VARCHAR is a type of string with a certain length which
  you specify in the next text box.

# 6.2 Creating and Reading Data

- Create - INSERT
  INSERT INTO glossary_terms (term ,definition)//positioning
  VALUES('css','cascading style sheets');//literal insertion

  INSERT INTO glossary_terms (definition, term)
  VALUES('JavaScript', 'js'); //order matters

  INSERT INTO glossary_terms (term, definition)
  VALUES('json', 'JavaScript object notation');

- Read - SELECT

  SELECT term FROM glossary_terms;
  SELECT definition FROM glossary_terms;
  SELECT term,definition FROM glossary_terms;
  SELECT \* FROM glossary_terms; // read all the columns

  SELECT definition FROM glossary_terms;
  SELECT term FROM glossary_terms WHERE id > 1;
  SELECT \* FROM glossary_terms WHERE id > 1
  ORDER BY ID DESC; // shows all elements where id>1 and all
  is shown in descending order.

# 6.3 Updating and Deleting Data

- Update - UPDATE
  UPDATE golossary_terms
  SET term = 'hello'; //updates all rows

  UPDATE glossary_terms
  SET term = 'css' where id = 1; //updates row 1

  UPDATE glossary_terms
  SET term = 'css', definition = 'hello, world' where id = 1;

- Delete - DELETE
  DELETE FROM glossary_terms; // Deletes all the table!!!
  DELETE FROM glossary_terms WHERE id = 4;

- when you delete a row id is not going to fill in for the
  missing record so if you delete id = 4 then the next added
  record will begin at 5.

# 6.4 Using PHP Data Objects to Issue Queries

- 'mysql:dbname=glossary;host=localhost;port=3306' that is
  the connection address

- you can use a PDO object for getting the information from
  the database. PDO constructor accepts ($connection_address,
$username,\$password)

- the connection address, password and username should all be
  in the config file.

- when creating a PDO you should always encapsulate it in a
  try catch because it will return confidential information
  in case there is an error in creating the PDO.

- the PDO has a query('SQL query') method where you can add
  the SQL query as a parameter. The query method will return
  a statement which is a new array which has all the rows with
  the specifications from the string parameter.

  - you can also add the second parameter: PDO::FETCH_CLASS
    and you can add to what class you want to transform the
    rows of the table as a third parameter.

- after creating a variable which holds a pdo and a statement
  you must close the variables (equal them to null) after full
  use.

# 6.5 Using PHP Prepared Statements

- never ever concatenate sql code to get parameters without
  sanitizing the parameters!!!

  - instead of using concatenation which poses a risk in case
    of an SQL injection you have to use prepared statements
    the syntax is the following:
    $stmt = $db->prepare($sql);
    $stmt->execute([':var' => $var]);
    In the query you add :var as a placeholder for the
    variable.

- LIKE - is a keyword which can be used in conjuction with
  WHERE to get the elements from a column which are like the
  string after LIKE. For example:
  SELECT \* FROM glossary_terms WHERE term LIKE 'css'
  will select all the items which contain css.
  - The string after LIKE has some wildcards:
    % - is any number of any characters
    \_ - is one any character
