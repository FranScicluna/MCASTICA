MCAST-ICA Theme ReadMe File

This ReadMe file's purpose is to help any developers understand how this theme works, its ins and outs in order to make sure 100% of it's functionality can be used to create the best website possible.

Template-Parts

Template parts is a folder found within the code that has the most important PHP file in the entire theme. Loop.php allows WordPress to see if there are any posts to display, if so, the post is then displayed. Without this code, the website's content would not be loaded. As this loop is needed in all of the php files relating to a page, instead of it being repeated in each, it is coded once in template parts and then by using the get_template_part function, linked in each of these files.

<img width="1141" alt="image" src="https://github.com/FranScicluna/MCASTICA/assets/72557696/e2fe0d92-8706-4063-8655-7540b28438f1">


Functions

Functions. php is a file that directly influences the functionality of your WordPress website. From it, you can create code patterns and add elements and functionality to the themes used in your pages. Thus, you are able to offer much more qualified experiences. In this case, in functions.php the admin bar is set to false. The admin bar is a bar ontop of the website that allows you to access the dashboard when viewing your website. It was turned off as it gets in the way of the user's experience and the user will never need to access the dashboard of the website.

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





Plugins

3D FlipBook: Dflip Lite

  This plugin allows the user to upload a 3D pdf which in turn will behave as if it is a real-life book. I used this plugin for 1 instance in this theme, when looking at the prospectus, I found the PDF MCAST used and displayed it in the same flipbook manner.

  <img width="782" alt="image" src="https://github.com/FranScicluna/MCASTICA/assets/72557696/865dfc4d-d13d-4ff6-a928-1676b05cae5d">


Blog Designer Pack

  This plugin allows the user to display post types in visually appealing grids. I wanted to have an aesthetic news page that would display the different posts in a grid. This plugin allowed me to choose any grid layout I wanted, provided the shortcode for it, and upon entering the shortcode on the page, the layout was implemented.

  <img width="1361" alt="image" src="https://github.com/FranScicluna/MCASTICA/assets/72557696/5eb2acc5-6bfe-4323-b399-d7bd6e9b36e1">


Custom Post Types UI

  Custom Post Types as mentioned before are used to create the custom post types such as courses, facilities, and student clubs. 


Featured Image from URL (FIFU)

  FIFU is a very simple plugin that allows the user to add a featured image to the post. This featured image, when paired up with Blog Designer Pack will allow the news articles to have that thumbnail image, as by default WordPress did not support this.

Formidable Forms

  Formidable Forms allows users to create responsive and good-looking forms that can be used in any context. In my case, formidable forms were used when creating the Contact Us page and the Course Application page. The editor for the forms also allows you to change how the form looks stylistically making it quite a useful plugin.

  <img width="1469" alt="image" src="https://github.com/FranScicluna/MCASTICA/assets/72557696/265f69a0-871b-4476-9e27-432b0e9beba0">


Ivory Search

  Ivory Search creates a visually attractive search bar that can be filtered to search for custom post types. For example, one search bar could be used to filter for only courses, only facilities, or only student clubs. This plugin is very useful as the built-in WordPress search bar looks quite outdated and ends up diminishing the header's look.

  <img width="858" alt="image" src="https://github.com/FranScicluna/MCASTICA/assets/72557696/1d29cf33-f781-4c9e-8fda-2673e134f40b">

NextGen Gallery

  NextGen Gallery is a plugin that works similarly to the Blog Designer Pack. This plugin allows you to upload any images you want to it and then offers you several different layout options for you to choose from. Each layout allows you to click on the individual image, which will take full size.

  <img width="1353" alt="image" src="https://github.com/FranScicluna/MCASTICA/assets/72557696/a2bd5908-8d81-47a1-b359-805332d59914">
  <img width="1469" alt="image" src="https://github.com/FranScicluna/MCASTICA/assets/72557696/51d6edaf-e0bc-4c67-a7c5-7e29a6f24b0d">
  
SVG Support

  The SVG support plugin allows the user to upload any SVG files they wish to the media library. By default, SVGs were not accepted therefore certain icons, that are normally saved as SVGs would not be uploaded. 

WordPress Books Gallery

  WordPress Books Gallery is one of the best library plugins available as it allows you to copy the information of the book, such as Name, Author, Publisher, IBAN, etc.. and very easily allows you to display it visually. Its support for images allows you to also add book covers, completing the library feel.

  <img width="1460" alt="image" src="https://github.com/FranScicluna/MCASTICA/assets/72557696/8551d186-6df5-41ba-b2ac-4357eae2f2a0">
  <img width="800" alt="image" src="https://github.com/FranScicluna/MCASTICA/assets/72557696/edbec3d1-93fb-4cb0-b7ca-df20d0223800">

WP Dummy Content Generator

  Lastly, the dummy content generator plugin is one of the most important ones as it allows the user to create fake posts to be able to test out both functional and visual features without needing to manually fill in posts with fake content.

  <img width="1270" alt="image" src="https://github.com/FranScicluna/MCASTICA/assets/72557696/78c8d5d1-fa70-4760-a833-7c52ef9b4d55">




