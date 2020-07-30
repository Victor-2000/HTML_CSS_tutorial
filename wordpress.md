# 2.1 What Is WordPress?

- WordPress is a <i>CMS</i> (content management system)

- WordPress.org - is where you can get the standalone version
  of wordpress and install it in your own server. (harder/
  more flexible)

- WordPress.com - allows you to build a website on wordpress
  by using their own platform. (easier but paid)

# 2.2 Installing WordPress Locally

- you have to make a sql database for the website before the
  instalation.

# 2.3 Installing WordPress on a Live Server

- domain name - prokbun.com

- hosting - siteground.com, bluehost, hostgator, mediatemple

# 2.4 Getting Familiar With the WordPress Dashboard

- draft - is a version of a page which is not finished yet

# 3.1 WordPress Pages vs. Posts

- WordPress has 4 types of content: posts, comments, users,
  links
- exerpt - the piece of text which is written as a preview for
  the post
- the editor that works with posts and pages is named Gutenberg

# 3.3 Uploading and Organizing Media

- always add an alt text when uploading images to wordpress

# 3.5 Working With WordPress Sidebars and Widgets

- sidebars are not only on the side of the pages. Depending
  on the theme they can be at the footer or header.
- if you want to hide a widget from a category you an use the
  inactive posts to activate it back if you'll need it later.

# 3.6 Building and Maintaining Menus

- to make a page a subpage you just drag it to the right and
  put it straight below the parent page

- after creating a menu you should define a menu location for
  displaying it to the page

# 4.1 Using the WordPress Customizer

- to customize a page you go to dashboard/appearance/
  customize
- bear in mind that you can use live view on 3 different  
  screens: desktop, tablet and mobile.

# 4.2 Working With Themes

- if you want to checkout the themes you go to appearances/
  themes. For editing them you get to the theme editor.
- https://themeforest.net/, wordpress.org/themes and envato elements are huge marketplaces for themes.
- when importing a theme you should just select the zip folder
  you can use the menu below to select some theme from the
  oficial WordPress website.

# 4.3 Working With Plugins

- Plugins are software which can add extra functionality to
  the site
- https://wordpress.org/plugins/, https://codecanyon.net and
  envato elements are huge marketplaces for plugins.
- if you want for your plugins to install locally you have to
  add define('FS METHOD', 'direct'); in your wp-config.php
  file.
  - if the plugin is pretty big you will need to enlarge the
    time required to wait till error with this line
    php_value max_execution_time 300
    at the end of .htaccess file (before the end line of
    course)

# 4.5 How to Move a WordPress Site

- site health from tools is a very useful tab with
  recommendations
- export personal data tab from tools will export all personal
  data of an user to an email (if, for example, the user
  requires it).
- erase personal data tab is the same as export except you
  erase the data after exporting.
