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

  The header elements, such as the logo, and header background colour may all be changed using the Customizer editor in wordpress.

Footer

Customizer

Stylesheets

Sidebars
