# Useful tips

- if you want to edit and save changes in css/js/html in
  realtime you should:
  - go to dev tools
  - choose the sources tab
  - choose the filesystem tab
  - click on the + icon
  - choose the working directory
  - open the css file
  - have fun time coding :)
- when using dt:last-child it only works if the dt is actually
  the last child of the parent if dt is not the last you can use
  dt:nth-last-child(2) (which means that you get the second to
  the last child)

# 2.1 Hello jQuery

- It is considered good practice to write the import of the scripts at the end of the body
- To import a js script you should place this line of code: "&lt;script src="jquery-3.5.1.js">&lt;/script>"
- To search for something in the page you can use the function
  jQuery('cssIndicator')
- For adding css to the found files by jQuery you should use:
  jQuery('ul li').css('color','green');
- Most of the time, though, it is very useful to put the
  styling in a css file and add a class to the query by using:
  jQuery("ul li").addClass(".emphasis");
- jQuery is identical to $ so you can use $() for example.

# 2.2 Not So Fast, jQuery

- You can use pseudo classes in jQuery
  (ex. ("li:first-child").addClass("emphasis") )
- I you want to execute some js at the begining of the
  document you should always use:
  $(document).ready(() => {
    $("li:first-child").addClass("emphasis");
  });
  otherwise it won't work. A shorter version to the same code
  is:
  $(() => {
    $("li:first-child").addClass("emphasis");
  })

# 2.3 The Basics of Querying the DOM

- \$(...).children('li') - selects all the children which are
  li (list items) from the parent with css class description
  ...
- if you wanna limit css to only the children (exclude
  grandchildren or anything else like that) you can use
  the sign > (ex. ul.emphasis > li would work only on
  children if the default li implies another style)
- if you want to affect not only children but also
  grandchildren and so on you can use \$(...).find('li')
- for getting the first child of a selection of children you
  can use:
  \$("ul.emphasis").children("li").first().addClass("emphasis")
  (.first() is the function which selects the first child)
- for selecting an n-th child in the list you can use the
  .eq(noOfOrder) method
- if you want to move from one child to the next one you can
  use .next() method (for ex. ... .eq(3).next() returns the
  5th element)
- there is also a function for the previous child: .prev()
- there is an add class as well as remove class method in
  jQuery (.addClass() .removeClass())
- for accessing direct parents of an element you can use
  the method .parent() (the total oposite of .child())
- if you want to access also all the grandparents and parents
  and so on you can use the method .parents()
- if you need to find the first closest element in the dom
  tree which has a certain spec you can use .closest()

# 2.4 Events 101

- it is considered bad practice to use global variables in
  scripts because you are filling them up. A better way is
  to make a function that calls itself and put the variables there.
  (for ex:
  (() => {

  })();
  thats actually the anonymous function equivalent to
  funcName(); call
  )

- 'this' returns the DOM element itself for using jQuery
  methods you should call \$(this)
- arrow functions have no this context so to fix such problem
  you could use (e) => {\$(e.target)}
- to access attributes you can use the method
  .attr(nameOfAttribute)
- to change attributes you can use .attr(name,changedValue)
- for creating custom attributes in html you have to add
  data-nameOfAttribute
- calling jQuery a lot of times is time consuming so it
  should be used as least as possible (use variables instead if you wanna search for the same element later or its child)
- if you are working with custom attributes you can use the
  .data() method. When using this method you can use ommit the
  data- part of the attribute for example instead of
  .data(data-json) you use .data(json) .
- .removeAttr(attributeName) removes an attribute
- you can combine actions by using an .end() method which  
  gets you one jQuery selection back.

# 2.5 Events 201

- the filter function is a very good way to select particular
  elements from a list
  (for ex. dd.filter(':nth-child(n+4)') selects from the fourth
  children all dd in the list)
- you can also use the .slideDown(time) and slideUp(time)
  methods to make the ui fancy
- you can also add an event listener only to the parent of the
  children who require event listeners and use the specifications to activate it on them by using:
  .on(event,classSpec,function)

# 2.6 Bind...Live...Delegate...Huh?

- .bind() is the equivalent to on('click',function)
- if you want to clone an element you can use the .clone()
  method.
  - if you want to retain the event handlers related to the
    cloned object you have to pass in .clone(true)
- to append an element to the body you can use
  .appendTo('body')

# 2.7 Creating and Appending Content

- for appending to the end of an element you can use
  the method .append("HTML/txt/\$")
- for appending to the beginning of an element you can
  use .prepend("HTML/txt/\$")
- if you want to put something before an element you can
  use .before("HTML/txt/\$")
- if you want to put something after an element you can
  use .after("HTML/txt/\$")
- to append a class instead of an element you can use
  .appendTo() for ex:
  \$('&lt;h2></h2>', {
  text: 'Hello from JavaScript',
  class: 'myClass',
  }).appendTo('article');
  - if you call appendTo on something that extists it is
    actually being moved for example:
    \$('h1').appendTo('article') will move the h1 tag to
    the end of the article.
- there is also a prependTo method
- also there is an insertAfter and insertBefore method
  which works the same as the appendTo one

# 3.1 Slides and Structure

- if you want to use this for a specific element which is not
  the one from which the function is called then you can use
  the .call(thisArg) method which gets an this argument where you can put anything you want.
- if you want to change multiple function calls for example  
  you have .show() and .hide() somewhere in your code you can
  use the array notation to change it to a single type of call
  ex:
  var effect = 'slideToggle';
  .[effect](500)
  ...
  .[effect](500)
- \$.extend(obj1,obj2) is a method that overrides the
  included elements of obj2 with obj1.
- .is('className') method can check up if the current tag has
  some specific class or pseudo-class

# 3.2 The this Keyword

- when using .on('click',functionName) you can cancel the
  default click event by taking an event parameter in the
  function and using the .preventDefault() method. Ex:
  function functionName(e){
  e.preventDefault();
  //... something that activates on click
  }
- .apply([hereGoesYourArrayElements]) is the same as call
  the difference being that you put in an array as a
  parameter
- \$.proxy(func,thisArg) changes the function so it takes
  thisArg as the 'this' value inside.

# 3.3 Modifying Effect Speeds

- when defining the speed of an effect you can also use
  words like 'slow' or 'fast'
- by using '\$.fx.speeds.default = 123' you can change
  default speeds
- by using '\$.fx.speeds.anySpeedName = 1234' you can make
  new speed templates

# 3.4 Creating Custom Effect Methods

- if you want to do an action before the slider slides down
  you can use
  \$(this).slideDown(500, functionAfterSlide () {
  ...
  });
- if you want to delay an effect for an ammount of time you
  can use .delay(time) and after that the effect.
- if you want to make a custom effect you should use:
  \$.fn.effectName = function (speed, easing, callback) {
  return /_The desired effects go here_/;
  };
  the effect will be named 'effectName' and it can be used as
  other effects are used

# 3.5 Full Control With animate

- if you want to do a relative increment on some css
  properties you can use '+=No' value. For example:
  box.css("font-size", "+=5");
- if you want to add more than one css changes to a box
  you can use .css({
  firstParameter: firstValue,
  ...
  lastParameter: lastValue,
  });
- .animate({firstParameter: firstValue,...lastParameter:
  lastValue,}, time, easing) method animates the object from
  the initial state to the one passed as parameter
  - through the ammount of time passed as parameter
  - you can choose 'linear' or 'swing' as an easing
    (alternatively you can download an easing plugin).
  - you can add a callback function also which will activate
    after the animation is done.
- the color is not animated but you can use a plugin
- another way to use the animate function is:
  box.animate(
  {
  parameter: paramVal,
  },
  {
  duration: durationVal,
  step: () => {}, // function exec every step
  complete: () => {}, // function exec at the end
  queue: true, //Do you want to wait for the previous animation?
  }
  );
- if you want animate methods to go one after another you
  can use .animate(...).animate(...). The second one will
  be executed after the first one (provided the option queue
  on the second one is true)
- if you wanna get the width of a container you can use
  .width() method.
- if you wanna also include the padding and margin you can
  use .outerWidth() method.
- if you want to check if a variable is a function you can
  use \$.isFunction(functionName)

# 3.7 The Obligatory Slider (First Attempt)

- if you want to make sure that other plugins aren't clashing
  with jQuery $ you have to do this call and implement all the
  jQuery functionality inside.
(function ($) {

})(jQuery);

# 3.8 Prototypal Inheritance and Refactoring the Slider

- every variable in JavaScript has a prototype. This prototype
  is basically the variable type (class) it has builtin
  properties and methods.
  - to access a prototype you should use
    Object.getPrototypeOf(varName) or varName.\_\_proto\_\_
  - you should not confuse Object.getPrototypeOf(varName) with
    varName.prototype because the latter only returns the
    initial prototype of the supposed object (ex. for all
    arrays) when the first one returns the prototype of the
    current object.
- for creating a prototype you need a constructor function
  which can be any basic function which is saved in a variable
  with capital letter will do.

  - var Point = function (x, y) {
    ----this.x = x;
    ----this.y = y;
    ----this.add = function (otherPoint) {
    --------this.x += otherPoint.x;
    --------this.y += otherPoint.y;
    ----}
    }
    var p1 = new Point(3, 4);
    var p2 = new Point(8, 6);
    p1.add(p2);

- though we don't want to implement the add method just to the
  current object because it will do the implementation every
  time an object is created so we add the function in the
  prototype attribute.

  - var Point = function (x, y) {
    ----this.x = x;
    ----this.y = y;
    }

    Point.prototype.add = function (otherPoint) {
    ----this.x += otherPoint.x;
    ----this.y += otherPoint.y;
    }

    var p1 = new Point(3, 4);
    var p2 = new Point(8, 6);
    p1.add(p2);

- you can find more info about prototypes at:
  https://docs.microsoft.com/en-us/previous-versions/msdn10/ff852808(v=msdn.10)

# 4.1 \$.each and Templating

- for getting the html from an element instead of the node
  you can use .html() method.
- \$.trim cuts all the unneccesary whitespace.
- when creating a template you want to use later you can do
  it in js if you create a new script tag with an unique id
  and type.
- templates are parts of html code which also have some empty
  parts where you can add data dynamically. ex:
  &lt;script id=blogTemplate type=tuts/template>
  ----&lt;h2>{{title}}&lt;/h2>
  ----&lt;img src={{thumbnail}} alt={{title}}>
  &lt;/script>
- $.each() method is used when you don't have anything to 
  select from the DOM but you want to search each element of 
  an collection.ex: $.each(content,function(index,val){});
- if you want to replace some elements in a string you can use
  the .replace() method.
  - inside the method you should specify the object you want
    to replace between /.../ and after that the specifications
  - in the specifications you can add the tag 'i' for
    ignoring lowercase/uppercase characters (they'll be all
    the same) and 'g' for searching more than one tag (if it
    is repeated multiple times)

# 4.2 Say Hello to Handlebars

- Hadlebars is a very useful resource for creating templates.
- You can format the templates as described above in the
  previous lesson and after that you have to use this line
  var template = Handlebars.compile(\$('#id-of-template').html())
  which will basically load all the generic template into a
  function named template in which you can pass the object as a
  parameter. ex: template(obj);
- if you have an array as a parameter you can use the:
  {{#each this}}
  ...
  {{/each}}
  tags to specify that you wanna go through each element
  and if you wanna get a specific attribute which has the data
  you change the 'this' if you wanna get the whole objects you
  let 'this' remain.
- if you want to include html in the attributes of the object
  ex: {
  --author: 'John Doe',
  --tweet:'&lt;strong>30 Days&lt;/strong> to Learn jQuery Rocks'
  }
  you have to add to the the third pair of brackets to the tag
  of the template ex: {{{tweet}}}
- you can also use an
  {{#if existentTag}}... {{else}} ... {{/if}} tag to write
  something only if it exists (for example you don't want
  to add a span if the tag does not exist in the object)
  - there is also an 'if not' tag and it is written like this:
    {{#unless nonExistentTag}} ... {{/unless}}

# 4.3 The Twitter API

- to get a JSON from a site you can use
  \$.getJSON(this.url, function(json) {...do something with
  the json here...});

- \$.map(array,function) for all elements in an array, map
  executes the specified function.

# 4.4 Filtering with jQuery.grep

- if you want to filter through an array of elements you can
  use:
  \$.grep(arr, function (item, index) {
  ---return (here goes a condition which if is true adds the
  ----------element to the return array);
  });

# 5.1 Custom Events and the Observer Pattern

- if you want to execute some code that is attached to a node
  event you can use \$(...).trigger('click');
- you can also customise 'on' events by just writing them
  ex: \$("body").on("clickityClack", function () {})
- getJSON executes much later than console.log
- by using the trigger method and making a custom 'on' event
