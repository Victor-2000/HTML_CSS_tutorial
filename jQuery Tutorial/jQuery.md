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
