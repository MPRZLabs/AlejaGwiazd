<?php
define("TEHPAGETITLE", "Kasia");
require "inc.php";
mpi_header();
echo mpi_carousel("Kasia", array("Kasia" => "Cześć, jestem Kasia, choć niektórzy nazywają mnie Perz albo Perry<br /><small>(tak, Olciu, mówię o tobie ;p)</small>"));
echo mpi_container("<div class=\"well\"><h2>Udręczone paprotki <small>historia prawdziwa</small></h2>".mpi_readtextasset("paprotki")."</div>");
echo mpi_container(mpi_showcase_g("Kasia", mpi_showcase_image("Kasia", "custom/201302/kp01-5297c9").mpi_showcase_image("Kasia", "custom/201302/kp02-46fb8c").mpi_showcase_image("Kasia", "custom/201302/kp03-7c4ae5").mpi_showcase_image("Kasia", "custom/201302/kp04-8e59db").mpi_showcase_image("Kasia", "custom/201302/kp05-51abe3").mpi_showcase_image("Kasia", "custom/201302/kp06-871af4").mpi_showcase_image("Kasia", "custom/201302/kp07-86c1f0").mpi_showcase_image("Kasia", "custom/201302/kp08-8613fa").mpi_showcase_image("Kasia", "custom/201302/kp09-5c8e1e").mpi_showcase_image("Kasia", "custom/201302/kp10-93bc8d")));
echo mpi_container(mpi_poem("prawdaoludziach", "Prawda o ludziach"));
mpi_footer();
?>