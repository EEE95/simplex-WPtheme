<?php
/**
 * The main template file
 *
 * @package simpleX
 */

get_header(); // Indsætter header.php
?>

<main id="main-content">
    <h1>Velkommen til SimpleX-temaet!</h1>
    <p>Dette er hovedindholdet på din side.</p>

    <?php
    // Indsæt WordPress Loop for at vise indhold/dynamisk data
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_title( '<h2>', '</h2>' );
            the_content();
        endwhile;
    else :
        echo '<p>Ingen indlæg fundet.</p>';
    endif;
    ?>
</main>

<?php
get_footer(); // Indsætter footer.php
?>
