<?php
define("TEHPAGETITLE", "Innervision");
define("MPI_FBSDK", true);
require "inc.php";
mpi_header();
echo mpi_carousel("Innervision", array("Innervision" => mpi_facebox("http://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FInnervision%2F119974921544849&height=80&colorscheme=light&layout=standard&action=like&show_faces=true&send=false")));
mpi_jumbovid("facebook", "https://www.facebook.com/photo.php?v=435051989926958");
mpi_jumbovid("facebook", "https://www.facebook.com/photo.php?v=435054046593419");
mpi_jumbovid("facebook", "https://www.facebook.com/photo.php?v=435056003259890");
mpi_jumbovid("facebook", "https://www.facebook.com/photo.php?v=435057616593062");
mpi_jumbovid("popcorn", "oun");
mpi_footer();
?>