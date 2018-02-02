<section class="content-php" id="php">
  <div class="content-container">

    <h2>WP backend and PHP test <span class="title-under">with some JS, CSS and HTML to boot</span></h2>
    <ol>
      <li><strong>Part one:</strong> this page should lose all the classes but the template-based one (home).</li>
      <li><strong>Part two:</strong> use ACF to expose the list below in the page editor. These are the elements that should be editable, and users shouldn't have any other option present in the page editor, apart from these: 
        <ul>
          <li>label element text</li>
          <li>whether the checkbox is checked when the page loads</li>
          <li>submit button text</li>
        </ul>
      </li>
      <li><strong>Part three (bonus round):</strong> when you submit the form, it should open the confirmation modal at the center of the page that lists all the options picked by the user and has a couple of buttons, "OK" and "Cancel". "Cancel" will close the modal, and "OK" will send you to the front page of the test along with the data.</li>
    </ol>
    <form onsubmit="return false">
	
      <label for="checkbox_1"><?php the_field('text_checkbox_1'); ?></label><input type="checkbox" name="checkbox" id="checkbox_1" value="value" <?php the_field('checked_0'); ?> >
      <label for="checkbox_2"><?php the_field('text_checkbox_2'); ?></label><input type="checkbox" name="checkbox" id="checkbox_2" value="value" <?php the_field('checked_1'); ?> >
      <label for="checkbox_3"><?php the_field('text_checkbox_3'); ?></label><input type="checkbox" name="checkbox" id="checkbox_3" value="value" <?php the_field('checked_2'); ?> >
      <label for="checkbox_4"><?php the_field('text_checkbox_4'); ?></label><input type="checkbox" name="checkbox" id="checkbox_4" value="value" <?php the_field('checked_3'); ?> >
  <input type="submit" id="one" class="button" value="<?php the_field('submit_text'); ?>">
    </form>
    <div class="section-icon"><?php get_template_part('includes/svg/php'); ?></div>
  </div>


<div id="modal-container">
  <div class="modal-background">
    <div class="modal">
      <h2>You have selected:</h2>
     
	     <button  class="button" >Cancel</button>
	  <button  class="button" >OK</button>
	  
	  
	  
      <svg class="modal-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none">
								<rect x="0" y="0" fill="none" width="226" height="162" rx="3" ry="3"></rect>
							</svg>
    </div>
  </div>
</div>
  
  <script>
  $('.button').click(function(){
  var buttonId = $(this).attr('id');
  $('#modal-container').removeAttr('class').addClass(buttonId);
  $('body').addClass('modal-active');
})

$('#modal-container').click(function(){
  $(this).addClass('out');
  $('body').removeClass('modal-active');
});
  
  </script>
  
</section>

