<?php
define("TEHPAGETITLE","Start");
require "inc.php";
mpi_header();
echo mpi_carousel("main-showcase", array("Kasia" => "Rysuję właściwie od zawsze, a od kilku lat również piszę – wiersze, prozę, do wyboru!", "Michcioperz" => "Tutaj kiedyś będzie intro :P"));
echo mpi_container(mpi_jumbo(mpi_readtextasset("introintro")));
echo mpi_showcase_begin().mpi_showcase_person("Kasia").mpi_showcase_person("Michcioperz").mpi_showcase_end();
mpi_footer();
?>