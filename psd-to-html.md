# 2.1 Workspace Preparation And Header Markup

- the icon-small class represents all the small icons.

- h1 logoes are the best for SEO because the search engines
  use the first h1 tag for indexing.

- if you use in the href of an anchor the  
  "mailto:email@example.com" everyone that clicks on the
  anchor will be prompted to the basic mail app with the
  email@example.com filled in for the send to blank.

# 2.2 Main Banner And Light Background Feature List

- placeholder="..." in the input shows a grey small text as a
  description

- if you add a #top to your href from the anchor it will put
  the page to the top.

- span is a class which gives in bootstrap a certain length
  to a container. span5 for example shows 5 rows out of 12.

- to temporary close the rulers in photoshop you can use the
  ctrl + ; keys.

# 3.1 Logo, Textures, Misc Images

- when you want to get the backgrounds you can crop 100px of
  each background and export it as jpg (jpg occupies less
  space that png)

# 3.2 Creating The Sprites Image

- there are a lot of benefits to using css sprites they
  improve site performance you do not have to deal with
  a lot of photos also because everything is in one
  photo.
- for making a sprite image you should create a new psd
  and select all the icon layers and use duplicate layer
  and select the sprite psd.
- to create a well positioned sprite image you should
  activate grid view and adjust it to the biggest sprite
  size in your selection + some pixels for convenience.
  - Place all the sprites at the beginnings of the
    markups.

# 4.1 Reset CSS, Bootstrap Grid, Less Variables And Mixins

- When styling the page it is a good practice to use an reset
  also Less can be of help to not repeat values in css.

# 4.3 Top Header & Button Styling

- If you want to put a logo on a site it is usually a good
  practice to make it an anchor tag, add a description inside
  and use small text size (0.0000001px) to hide it and show
  only the background where the logo will be by making the
  display as block.

# 4.4 Styling The Icons (plus A Mini Tutorial On Css Sprites)

- to select a certain part of the sprite image to an icon you
  should set the fixed size (width & height), set the icon to
  be an block and select the part of the sprites image you
  want to use.
  - To select a part of the sprites image you should use
    the "background-position: x y " parameter. Also you
    should bear in mind that the x and y should be negative
    and considered as the actions taken if you want to move
    the wanted sprite to the 0 0 corner.

# 4.7 Light Background Feature Section

- when you want to target tags that have multiple class names
  only by one common class name you can use
  tag[class~="class-name"] in less.(~= means that the string
  is included somewhere in the class parameter but is not
  exactly the only string)

# 5.1 Using jQuery To Power The Gallery

- a very good plugin for slides in jquery is cycle2
- to get random images with certain sizes you can use lorem
  pixel like this: lorempixel.com/x/y

# 6.2 Making The Images Retina-ready

- making images retina ready means that you make images more
  sharp for high pixel density screens(phone).
- to select all the layers in photoshop you can use ctrl+alt+a
- to move or resize layers in photoshop you can use ctrl+t
- to invert a mask in photoshop you can select it and press
  ctrl+i
- when you have to specify the retina images for the media
  query you should make sure to make the background size the
  same as the initial one (not doubled) because you can get
  much bigger images but the whole idea was to maximize the
  quality not the size.

# 6.3 Eliminating FOUT (Flash of Unstyled Text)

- to eliminate FOUT it is a good practice to use webfont.js

- it can basically detect when the fonts are still loading
  and if the font load is succesful or not, and display a
  loading icon while it is not loaded.

  - you can get the icons from http://www.ajaxload.info/

- more information about how to use webfont.js can be found
  on its github.

# 6.4 Responsive Layout (brief Explanation On Bootstrap Grid And Media Queries)

- media query is a css3 property which allows you to specify
  different styles for various screen sizes.

# 6.5 Cross-browser Testing

- It is a very good practice to test for potential bugs in
  different browsers.
- for browser testers you can check out Adobes Browser Lab and
  Browser Stack.
