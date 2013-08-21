<?php
define("TEHPAGETITLE","Start");
require "inc.php";
mpi_header();
echo mpi_container(mpi_carousel("main-showcase", array("Kasia" => "Rysuję właściwie od zawsze, a od kilku lat również piszę – wiersze, prozę, do wyboru!", "Michcioperz" => "Tutaj kiedyś będzie intro :P")) . mpi_jumbo(mpi_readtextasset("introintro")));
mpi_footer();
?>