# Fairhead Creative developers test
---

## About the test

The test itself consists of  sections, each graded separately:

0.) General section

1.) CSS (SASS with SCSS syntax)

2.) JavaScript

3.) WP PHP / Backend

Each of the sections consists of a couple of pages, with certain variations. The first part will usually require you to use the resources (e.g. scripts or stylesheets) that are already in there by manipulating markup only, and the second one will test your coding skills or knowledge. There's also a bonus round where you'll be asked to use skills that may be outside of the scope of your expertise in order to test your resourcefullness and initiative

Knowledge prerequisites you'll need in order to take this test:
* you should be able to set up local WP environment, meaning:
  * set up local Apache server with MySQL database
  * install wordpress locally
  * fork and plug this repo into your local WP install. for this bit you'll need to be familiar with:
    * Git
    * Wordpress file strusture
  * know your way around Wordpress wp-admin area
  
These are the qualities we'll be considering while reviewing your solutions:
* focus and precision in following instructions
* attention to detail
* resourcefullness and understanding of the code already in place. How well you use the resources at hand.
* code optimization
* how well you'll be able to adjust to the project's code formatting
* the quality of your commit messages
* how well you communicate during and after the task is finished

Instructions
---

### General section (or setting things up and starting the test)
This is the part that everyone should be able to do themselves, regardless of being front or back-end:
1. set up local environment
2. fork this repo into your account and plug it into your local WP install
3. pick Fairhead Creative Developers Test as your active theme
4. set page-home.php as homepage, open it in your browser and pick your test from there

### CSS Test
Access it by clicking the appropriate link. You'll be using SASS with SCSS syntax. The screen.scss file should compile to screen.css file.
* css-one: modify markup only, without touching the css in order to get perfect overlapping with the underlaying image. This needs to work in Chrome.
* css-two: fix the page in in Firefox, so that the underlaying image overlaps perfectly without breaking Chrome.
* css-three (bonus round): mobile and tablet should look presentable

### JS Test
Access it by clicking the apropriate link. Use Grunt to compile everything from /js folder into the production.js, then minify to production.min.js file
* js-one: modify markup only without touching JavaScript so the click on the button will scroll the page down in 1.5 seconds 
* js-two: fix the scroll on js-two page using JavaScript only without touching markup 
* js-three (bonus round): use ScrollMagic plugin so that the square in the middle of the page will be picked up and scroll along while the page is scrolling down. When the page scrolls to bottom, the square should be animate to scroll down to the bottom of the page into the row of squares, and the row should dissapear, sort of like Tetris simulation

### PHP/Backend Test
Access it by clicking the apropriate link.
* php-one: all of the pages should get body class that equals their template name, except for this page which should loose all the classes but the template-based ones.
* php-two: use ACF to expose the list present on the page in the page editor. These are the elements that should be editable, and users shouldn't have any other option present in the page editor, apart from these: 
  * li element text
  * button text
  * button's id attribute
* php-three (bonus round): when you submit the form, it should open the confirmation modal at the center of the page that lists all the options picked by the user and has a couple of buttons, "OK" and "Cancel". "Cancel" will close the modal, and "OK" will send you to the front page of the test along with the data.

### After you've finished with the test
Add me (Denis) as a collaborator to your repo, and drop me a note outlining what you've done inside it, so I can clone, pull and review.
Your message to me should consist of these details:
1. outline what you did in your task. Feel free to go into as much technical details you want. Boast what you did better than the current codebase, and defend if you've made decisions you feel need defending
2. show me how I should configure wp-admin in order to view your modifications properly (as if you were delivering a project to a client–assume my admins have set up a local wp install with nothing on it)
3. any comments you might have, either on the codebase, or this test
4. your contact details: First name, last name, Skype handle, email, your location and/or time zone, preferred working hours, and the number of hours you're available for work on weekly basis 
