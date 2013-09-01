<?php
define("TEHPAGETITLE", "Kasia");
require "inc.php";
mpi_header();
echo mpi_carousel("Kasia", array("Kasia" => "Cześć, jestem Kasia, choć niektórzy nazywają mnie Perz albo Perry<br /><small>(tak, Olciu, mówię o tobie ;p)</small>"));
echo mpi_container("<div class=\"well\"><h2>Udręczone paprotki <small>historia prawdziwa</small></h2>".mpi_readpoemasset("paprotki")."</div>");
echo mpi_container(mpi_showcase_g("Kasia", mpi_showcase_image("Kasia", "custom/201302/kp01-5297c9").mpi_showcase_image("Kasia", "custom/201302/kp02-46fb8c").mpi_showcase_image("Kasia", "custom/201302/kp03-7c4ae5").mpi_showcase_image("Kasia", "custom/201302/kp04-8e59db").mpi_showcase_image("Kasia", "custom/201302/kp05-51abe3").mpi_showcase_image("Kasia", "custom/201302/kp06-871af4").mpi_showcase_image("Kasia", "custom/201302/kp07-86c1f0").mpi_showcase_image("Kasia", "custom/201302/kp08-8613fa").mpi_showcase_image("Kasia", "custom/201302/kp09-5c8e1e").mpi_showcase_image("Kasia", "custom/201302/kp10-93bc8d")));
echo mpi_container(mpi_poem("iswiatniemoze", "I świat nie może").mpi_poem("i", "I").mpi_poem("opus1", "***").mpi_poem("noc", "Noc").mpi_poem("ksiezycowecienie", "Księżycowe cienie").mpi_poem("opus2", "***").mpi_poem("niewinnedusze","Niewinne dusze").mpi_poem("nadzieja", "Nadzieja").mpi_poem("opus3", "***").mpi_poem("totylkolot", "To tylko lot").mpi_poem("opus4", "***").mpi_poem("nic", "Nic").mpi_poem("balladyna", "Balladyna").mpi_poem("opus5", "***").mpi_poem("dlaczego", "Dlaczego?").mpi_poem("opus6", "***").mpi_poem("pustka", "Pustka").mpi_poem("prawdaoludziach", "Prawda o ludziach").mpi_poem("opus7", "***").mpi_poem("bobolaloserce", "Bo... bolało serce...").mpi_poem("opus8", "***").mpi_poem("horyzonty", "Horyzonty").mpi_poem("czarnaroza", "Czarna róża").mpi_poem("opus9", "***").mpi_poem("bol", "Ból").mpi_poem("swit", "Świt"));
mpi_footer();
?>
