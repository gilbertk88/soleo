<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Soleo
 */

?>

<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">

      <span class="text-muted">© 2021 Company, Inc</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
    </ul>
  </footer>
  <?php wp_footer(); ?>
  </body>
</html>
<script type="text/javascript">

jQuery(document).ready( function() {

    var nav = document.getElementById( 'site-navigation' ), button, menu;
    if ( ! nav ) {
        return;
    }
 
    button = nav.getElementsByTagName( 'button' )[0];
    menu   = nav.getElementsByTagName( 'ul' )[0];
    if ( ! button ) {
        return;
    }
 
    // Hide button if menu is missing or empty.
    if ( ! menu || ! menu.childNodes.length ) {
        button.style.display = 'none';
        return;
    }

	jQuery( '.menu-toggle' ).click( function(){
							
		jQuery('.single_m_item').toggle();

	});
 
    button.onclick = function() {
        if ( -1 === menu.className.indexOf( 'nav-menu' ) ) {
            menu.className = 'nav-menu';
        }

		jQuery( '.single_m_item' ).removeClass( 'd-none' );
 
        if ( -1 !== button.className.indexOf( 'toggled-on' ) ) {
            button.className = button.className.replace( ' toggled-on', '' );
            menu.className = menu.className.replace( ' toggled-on', '' );
        } else {
            button.className += ' toggled-on';
            menu.className += ' toggled-on';
        }
    };
} );
</script>