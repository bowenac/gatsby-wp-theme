<?php
/*
* Themes needs an index.php file to work.
* We probably don't want to render anything on the front end of our WordPress site though.
* However we could display a simple message if we wanted to, otherwise remove it.
*/
echo 'Nothing to see here!';

/*
* If we wanted to, we could redirect the WordPress front end to our gatsby site.
* Just uncomment below replacing example.com with our gatsby url.
*/

/*
wp_safe_redirect( $url );
wp_redirect( 'https://example.com' );
exit;
*/