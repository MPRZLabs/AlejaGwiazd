<?php
define("TEHPAGETITLE", "GAndzia");
require "inc.php";
mpi_header();
echo mpi_carousel("GAndzia", array("GAndzia" => ""));
echo mpi_container(mpi_showcase_g("GAndzia",
  mpi_showcase_image("GAndzia", "custom/201301/portret2-538a33").
  mpi_showcase_image("GAndzia", "custom/201301/portret3-1a159f").
  mpi_showcase_image("GAndzia", "custom/201301/4-74f26a").
  mpi_showcase_image("GAndzia", "custom/201301/5-1a26e9").
  mpi_showcase_image("GAndzia", "custom/201301/6-790661").
  mpi_showcase_image("GAndzia", "custom/201301/7-8d80ee").
  mpi_showcase_image("GAndzia", "custom/201301/portret-5cd149")
));
mpi_footer();
?>
