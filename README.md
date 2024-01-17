MCAST-ICA Theme ReadMe File

Template-Parts

Template parts is a folder found within the code that has the most important PHP file in the entire theme. Loop.php allows WordPress to see if there are any posts to display, if so the post is then displayed. Without this code, the website's content would not be loaded. As this loop is needed in all of the php files relating to a page, instead of it being repeated in each, it is coded once in template parts and then by using the get_template_part function, linked in each of these files.

<img width="1141" alt="image" src="https://github.com/FranScicluna/MCASTICA/assets/72557696/e2fe0d92-8706-4063-8655-7540b28438f1">


Functions

Functions. php is a file that directly influences the functioning of your WordPress website. From it, you can create code patterns and add elements and functionality to the themes used in your pages. Thus, you are able to offer much more qualified experiences. In this case, in functions.php the admin bar is set to false. The admin bar is a bar ontop of the website that allows you to access the dashboard when viewing your website. It was turned off as it gets in the way of the user's experience and the user will never need to access the dashboard of the website.

Additionally, functions.php uses the PHP function of require_once to link other PHP files to the project, such as the customizer, navigations, enqueue_assets etc.

<img width="1141" alt="image" src="https://github.com/FranScicluna/MCASTICA/assets/72557696/bde2c71b-8c67-4ff0-a369-f2d6495a71f4">


Header

  The header for this website is stored in its .php file called header.php. This file is responsible for creating the HTML declaration:

  <img width="1419" alt="image" src="https://github.com/FranScicluna/MCASTICA/assets/72557696/552631d0-f8db-4fa6-b223-8b48e9afa4fa">

  This declaration allows the website to be built. The way the header is built is by creating a fluid container that will take up 100% of the width available. Using bootstrap notation, divs are created in the fluid container to separate the two header elements. The bootstrap class used is col-6 in both of the embedded divs, as the fluid container needs to be split in two.

  Section 1 of the header will be used to house the logo of the website. The logo will automatically be resized to 30%, to properly fit in the header. Section two will have the navigation dropdown links. These links will be the primary way of navigating through the website.

  The header elements, such as the logo, and header background color may all be changed using the Customizer editor in WordPress. 

  <img width="1455" alt="image" src="https://github.com/FranScicluna/MCASTICA/assets/72557696/f422e168-a342-474b-9c0d-5c1e86fa9800">


Footer

  The footer works in a similar way that the header works. The footer.php file apart from having the footer visuals saved in it, also has the closing tags for the html that were opened in the header.php. This way, all the content that goes in the middle of the header and footer will have all the HTML declaration needed to run.

  <img width="1139" alt="image" src="https://github.com/FranScicluna/MCASTICA/assets/72557696/d6658980-8618-4281-81d0-13be37828a9f">
  <img width="1140" alt="image" src="https://github.com/FranScicluna/MCASTICA/assets/72557696/49f76773-9bb6-4e55-bc48-e1fdac5e3ff4">

  In this case, the template works by having two footers, where the user can choose how many sections each footer is divided into. This decision can be made from the Customizer and is limited to a maximum of 3 sections per footer. Ideally, the second footer is kept as a two-section footer, showing the logo and copyright year. The primary footer, can, however, be modified as seen fit. By default footer is as seen below:

  <img width="1469" alt="image" src="https://github.com/FranScicluna/MCASTICA/assets/72557696/692b3f3a-062e-4277-9657-d521eea933d3">


Customizer

  The WordPress customizer allows the user to make visual changes to the theme itself. The options that can be changed, need to be set by the theme creator. In this theme's case, both the header and footer can be customized. The customizer has its own PHP file. In this PHP file, a function is created that houses all the settings that are being added. The following sequence is how a setting is created:

  <img width="1137" alt="image" src="https://github.com/FranScicluna/MCASTICA/assets/72557696/7aeadf0b-e175-4915-838c-8b8fbf2c9251">

  When all the settings have been added, the function is then connected with the action 'customize_register'

  <img width="1138" alt="image" src="https://github.com/FranScicluna/MCASTICA/assets/72557696/47b69c3d-1e1c-4129-8ea3-9550696d5a46">


  Firstly, the Section option itself is created, which will house all of the relevant settings within it, Secondly, the individual Setting is created followed by the control. The control is the option that the user will be interacting with, for example, the color picker.

  Header Options

  <img width="302" alt="image" src="https://github.com/FranScicluna/MCASTICA/assets/72557696/50f501bc-edf8-4362-b9cf-9b5c36742007">


  As seen above, the logo is part of this customizer. The user can adapt this setting to house any image they want. Additionally, the header background color can also be changed to fit the user's preference. In this case, the full MCAST logo in blue is seen, and having a lighter background color such as the gray chosen, will offer the best contrast.

  Footer Options

  <img width="300" alt="image" src="https://github.com/FranScicluna/MCASTICA/assets/72557696/2159514d-334b-4bfe-ad69-f0699a0ea201">

  As seen above, both footers can have their background colors changed to whatever the user deems fit. Furthermore, apart from the background color, the user can also choose the text color of each footer, to create the best contrast possible. As mentioned in the footer section, the footers both have a limited maximum number of sections, 3. The user can use these Footer Options to select how many sections they would like in each footer.



Stylesheets & Enqueue Assets

  This theme has 3 active stylesheets. Firstly, the stylesheet that comes by default with WordPress is called wpcore.css. This CSS file was not altered. Bootstrap.css is another stylesheet that is being implemented in this theme. Bootstrap allows us to use its container and column layout methods which help structure the page better as well as help with responsiveness as most of the resizing is taken care of by default. Lastly, the final CSS is mystyle.css. Mystyle.css is the stylesheet that impacts the content itself rather than the layout, as done by the bootstrap stylesheet.

  Connect these stylesheets to the project, it is not done through the <head> tag as normal but through a PHP file enqueue-assets.php. Enqueue-assets.php uses a WordPress function wp_enqueue_style to connect the style sheet. The code is as follows: 

  <img width="539" alt="image" src="https://github.com/FranScicluna/MCASTICA/assets/72557696/4ec28c5f-220c-48e6-9aef-1778a5b00446">


Sidebars

  Sidebars were used in two places throughout this theme. Firstly, sidebars were used in the Posts where the page column was split between col-3 and col-8. The sidebar was placed in the col-3 to show basic info such as who wrote the post and on which date.

  <img width="1141" alt="image" src="https://github.com/FranScicluna/MCASTICA/assets/72557696/bf6cd227-09fd-48fa-8d95-bbf82827bf74">

  Using several WordPress functions, one can obtain all the necessary information regarding a post. Visually it looks like this:

  <img width="1469" alt="image" src="https://github.com/FranScicluna/MCASTICA/assets/72557696/c9a0c99a-1902-479c-b067-c502d2cb0539">

  The second place where sidebars are being used is in the footers. As mentioned in the Footer section, the footers have 3 sections each. These sections are built using sidebars, each footer is made up of a possible 3 sidebars. The way that this is coded is, that in each footer a for loop is being run where the value that the user enters in the customizer (relating to the number of sidebars) becomes the limit point of the loop.

  <img width="1141" alt="image" src="https://github.com/FranScicluna/MCASTICA/assets/72557696/365a2521-18b1-4384-841a-7af58c397e51">

  Once created these sidebars are then visible in the Widgets section on the WordPress dashboard. In this section, one can edit the widgets in any way they see fit.


Post Types and Catagories

  Apart from the regular Pages and Posts that come with WordPress automatically, this theme also has custom post types to properly separate content. Three post types were created, all using the Custom Post Types plugin. This plugin allows you to create a post type that is different from the regular one. In this case, courses, facilities, and student clubs were all separated by their post type. Using this post type, single.php (handles the code for posts) could be altered depending on the post types if the user wanted to create a visual distinction between the three.

  Having different post types also helps users filter posts when using several news plugins for example. To add a new custom post type, open the CPT UI panel on the dashboard. Using this plugin one can easily create as many custom post types as necessary.

  <img width="1469" alt="image" src="https://github.com/FranScicluna/MCASTICA/assets/72557696/50fbd30b-a9c1-42ae-bd7c-0c96b9158fdc">

  



