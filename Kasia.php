<?php
define("TEHPAGETITLE", "Kasia");
require "inc.php";
mpi_header();
echo mpi_carousel("Kasia", array("Kasia" => "Cześć, jestem Kasia, choć niektórzy nazywają mnie Perz albo Perry<br /><small>(tak, Olciu, mówię o tobie ;p)</small>"));
echo mpi_container(mpi_poem("prawdaoludziach", "Prawda o ludziach"));
echo mpi_container(mpi_showcase_g("Kasia", mpi_showcase_image("Kasia", "custom/201302/kp01-5297c9")));
mpi_footer();
?>