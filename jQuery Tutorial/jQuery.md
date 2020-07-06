# 2.1 Hello jQuery

- It is considered good practice to write the import of the scripts at the end of the body
- To import a js script you should place this line of code: "<script src="jquery-3.5.1.js"></script>"
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
