<?php
define("TEHPAGETITLE", "Misiek");
require "inc.php";
mpi_header();
echo mpi_carousel("Misiek", array("Misiek" => "<center><img class=\"img-responsive\" style=\"max-height:200px;\" src=\"assets/Misiek-avatar.png\" /></center><br />genialny kaskader, obecnie marzy o różowym rowerku<br />".mpi_facebox("http://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FMisiek-Stunt-Streetbike-Freestyle%2F164263133767090&amp;width=The+pixel+width+of+the+plugin&amp;height=80&amp;colorscheme=light&amp;layout=standard&amp;action=like&amp;show_faces=true&amp;send=false")));
mpi_jumbovid("yt", "CCD2ZHn3gzU");
mpi_footer();
?>