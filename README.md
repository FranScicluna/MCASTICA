Going to explain the technical side, functions are in functions php, header is in its own php file
css is mystyle
has bootstrap
customizer
sidebars
functions
template parts
loop




Template - Parts 
  content-page.php
  content.php
  loop.php

Header

  The header for this website is stored in its own .php file called header.php. This file is responsible for creating the HTML declaration:

  <img width="1419" alt="image" src="https://github.com/FranScicluna/MCASTICA/assets/72557696/552631d0-f8db-4fa6-b223-8b48e9afa4fa">

  This declaration allows the website to be built. The way the header is built is by creating a fluid container that will take up 100% of the width available. Using bootstrap notation, divs are created in the fluid container to separate the two header elements. The bootstrap class used is col-6 in both of the embedded divs, as the fluid container needs to be split in two.

  Section 1 of the header will be used to house the logo of the website. The logo will automatically be resized to 30%, to properly fit in the header. Section two will have the navigation dropdown links. These links will be the primary way of navigating through the website.

  The header elements, such as the logo, and header background color may all be changed using the Customizer editor in WordPress. 

  <img width="1455" alt="image" src="https://github.com/FranScicluna/MCASTICA/assets/72557696/f422e168-a342-474b-9c0d-5c1e86fa9800">


Footer

  The footer works in a similar way that the header works. The footer.php file apart from having the footer visuals saved in it, it also has the closing tags for the html that were opened in the header.php. This way, all the content that goes in the middle of the header and footer will have all the html declaration needed in order to run.

  <img width="1139" alt="image" src="https://github.com/FranScicluna/MCASTICA/assets/72557696/d6658980-8618-4281-81d0-13be37828a9f">
  <img width="1140" alt="image" src="https://github.com/FranScicluna/MCASTICA/assets/72557696/49f76773-9bb6-4e55-bc48-e1fdac5e3ff4">



Customizer

Stylesheets

Sidebars
