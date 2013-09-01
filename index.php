<?php
define("TEHPAGETITLE","Start");
require "inc.php";
mpi_header();
echo mpi_carousel("main-showcase", array("Innervision" => "Nasze odkrycie - przyszłe gwiazdy rocka/metalu", "Kasia" => "Rysuję właściwie od zawsze, a od kilku lat również piszę – wiersze, prozę, do wyboru!", "Michcioperz" => "Tutaj kiedyś będzie intro :P"));
echo mpi_container(mpi_jumbo(mpi_readcodeasset("introintro")));
echo mpi_container(mpi_showcase(mpi_showcase_person("Innervision").mpi_showcase_person("Kasia").mpi_showcase_person("Michcioperz")));
mpi_footer();
?>