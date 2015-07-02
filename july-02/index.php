<?php
/**
 * Home Page Template For Webtastic-Development.net/simplex
 *
 * @Author Kristopher Watts <kristopher.a.watts@gmail.com>
 * @Copywrite 2015 Kristopher Watts
 */

/**
 * Pull in the functions file (REQUIRED)
 */
require_once( 'parts/_functions.php' );

/* Grab required template pieces */
part( 'head', true );
part( 'header', true );

?>

<main>
    <section>
        <h1>404</h1>
        <h2>INTERNET NOT FOUND</h2>
    </section>
</main>

<?php
part( 'footer', true );
?>
