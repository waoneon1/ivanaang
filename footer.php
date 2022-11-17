<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ivanna.ang
 */

?>

<?php include get_template_directory() . '/template-parts/footer.php'; ?>

<script type="text/javascript">
	/*!*****************************************************!*\
	!***  Modal                                              ***!
	\*********************************************************/
	jQuery(document).ready(function ($) { 
	  //addEventListener on mouse click for opening modal on clas btn-modal
	  document.addEventListener('click', function (e) {
	  	console.log()
	    //check is the right element clicked
	    if (!e.target.matches('.jg-modal-btn')) return;
	    else {
	      //select right modal from id-data
	      $('.jg-modal-content').attr('src', e.target.dataset.url);

	      var modal = document.querySelectorAll('#'+e.target.dataset.id);
	      Array.prototype.forEach.call(modal, function (el) {
	        //add active class on modal
	        el.classList.add('active');
	        $('body').addClass(['overflow-hidden','mr-overlay']);
	      });
	    }
	  });

	  //addEventListener on mouse click for closing modal on modal dark background
	  document.addEventListener('click', function (e) {
	    //check is the right element clicked
	    if (!e.target.matches('.jg-modal')) return;
	    else {
	      // if modal have do-not-close class it will not close it self on background click
	      if (e.target.classList.contains('do-not-close')) return;
	      else{
	      	$('.jg-modal-content').attr('src', '');
	        //remove active class on modal
	        e.target.classList.remove('active');
	        $('body').removeClass(['overflow-hidden','mr-overlay']);
	      }      
	    }
	  });

	  //addEventListener on mouse click for closing modal on custom button
	  document.addEventListener('click', function (e) {
	    //check is the right element clicked
	    if (!e.target.matches('.jg-modal-close-force')) return;
	    else {
	      $('.jg-modal-content').attr('src', '');
	      //select right modal from id-data
	      var modal = document.querySelectorAll('#'+e.target.dataset.close);
	      Array.prototype.forEach.call(modal, function (el) {
	        //remove active class on modal
	        el.classList.remove('active');
	        $('body').removeClass(['overflow-hidden','mr-overlay']);
	      });
	    }
	  });

	  //addEventListener on mouse click for standard closing modal on right top "x"
	  document.addEventListener('click', function (e) {
	    //check is the right element clicked
	    if (!e.target.matches('.jg-modal-close')) return;
	    else {
	    	$('.jg-modal-content').attr('src', '');
	      //remove active class on modal
	      e.target.parentElement.parentElement.classList.remove('active');
	      $('body').removeClass(['overflow-hidden','mr-overlay']);
	    }
	  });
	});	
</script>

<?php wp_footer(); ?>

</body>
</html>
