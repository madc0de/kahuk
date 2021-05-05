<?php

/** Define ABSPATH as this file's directory */
if ( ! defined( 'KAHUKPATH' ) ) {
	define( 'KAHUKPATH', dirname( __FILE__ ) . '/' );
}

if ( ! file_exists( KAHUKPATH . 'kahuk-configs.php' ) && file_exists( KAHUKPATH . 'setup/index.php' ) ) {
    header( 'Location: ./setup/index.php' );
    exit;
}

if ( file_exists( KAHUKPATH . 'kahuk-configs.php' ) && file_exists( KAHUKPATH . 'setup/index.php' ) ) {
    if ( !KAHUK_DEV_DEBUG ) {
        echo "<p style=\"text-align: center;\">Please delete install folder from the site root directory!</p>";
    }
}
