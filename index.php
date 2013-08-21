<?php
define("TEHPAGETITLE","Start");
require "inc.php";
mpi_header();
echo mpi_container(mpi_jumbo(mpi_readtextasset("introintro")));
mpi_footer();
?>