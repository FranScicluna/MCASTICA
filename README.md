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

MCAST-ICA Theme ReadMe File

Header

  The header for this website is stored in its own .php file called header.php. This file is responsible for creating the HTML declaration:

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

  Firstly, the Section option itself is created, which will house all of the relevant settings within it, Secondly, the individual Setting is created followed by the control. The control is the option that the user will be interacting with, for example, the color picker.

  Header Options

  <img width="302" alt="image" src="https://github.com/FranScicluna/MCASTICA/assets/72557696/50f501bc-edf8-4362-b9cf-9b5c36742007">


  As seen above, the logo is part of this customizer. The user can adapt this setting to house any image they want. Additionally, the header background color can also be changed to fit the user's preference. In this case, the full MCAST logo in blue is seen, and having a lighter background color such as the gray chosen, will offer the best contrast.

  Footer Options

  <img width="300" alt="image" src="https://github.com/FranScicluna/MCASTICA/assets/72557696/2159514d-334b-4bfe-ad69-f0699a0ea201">

  As seen above, both footers can have their background colors changed to whatever the user deems fit. Furthermore, apart from the background color, the user can also choose the text color of each footer, to create the best contrast possible. As mentioned in the footer section, the footers both have a limited maximum number of sections, 3. The user can use these Footer Options to select how many sections they would like in each footer.
Stylesheets

Sidebars
