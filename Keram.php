<?php
define("TEHPAGETITLE", "Keram");
require "inc.php";
mpi_header();
echo mpi_carousel("Keram", array("Keram" => "B-boy"));
echo mpi_container(mpi_showcase_g("Keram",
  mpi_showcase_imgtb("Keram", "custom/201211/mb--1--7970a0").
  mpi_showcase_imgtb("Keram", "custom/201211/mb--2--590843").
  mpi_showcase_imgtb("Keram", "custom/201211/mb--3--1b28b7").
  mpi_showcase_imgtb("Keram", "custom/201211/mb--4--5e4033").
  mpi_showcase_imgtb("Keram", "custom/201211/mb--5--16406c").
  mpi_showcase_imgtb("Keram", "custom/201211/mb--6--3958bc").
  mpi_showcase_imgtb("Keram", "custom/201211/mb--7--86fcc8")
));
mpi_footer();
?>
