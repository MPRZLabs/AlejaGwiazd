<?php
define("TEHPAGETITLE", "Innervision");
define("MPI_FBSDK", true);
require "inc.php";
mpi_header();
echo mpi_carousel("Innervision", array("Innervision" => mpi_facebox("https://www.facebook.com/pages/Innervision/119974921544849")));
mpi_jumbovid("facebook", "https://www.facebook.com/photo.php?v=435051989926958");
mpi_jumbovid("facebook", "https://www.facebook.com/photo.php?v=435054046593419");
mpi_jumbovid("facebook", "https://www.facebook.com/photo.php?v=435056003259890");
mpi_jumbovid("facebook", "https://www.facebook.com/photo.php?v=435057616593062");
mpi_jumbovid("popcorn", "oun");
mpi_footer();
?>