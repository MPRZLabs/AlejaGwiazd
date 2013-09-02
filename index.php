<?php
define("TEHPAGETITLE","Start");
require "inc.php";
mpi_header();
echo mpi_carousel("main-showcase", array("Bartosz" => "Epicki pojedynek w kuchni - Mordziak vs. Pan Pstrąg", "Gabi" => "wysoka, powyżej normy, chce się wyróżniać, ale i tak jest mainstream'owa. Podobno wygląda na wyniosłą i apodyktyczną, jednak jest bardzo gadatliwa i przyjazna otoczeniu.  Ma psychologiczne zapędy. Interesuje ją każdy rodzaj sztuki.", "GAndzia" => "", "Innervision" => "Nasze odkrycie - przyszłe gwiazdy rocka/metalu", "Kasia" => "Rysuję właściwie od zawsze, a od kilku lat również piszę – wiersze, prozę, do wyboru!", "Keram" => "B-boy", "Michcioperz" => "Tutaj kiedyś będzie intro :P"));
echo mpi_container(mpi_jumbo(mpi_readcodeasset("introintro")));
echo mpi_container(mpi_showcase(mpi_showcase_person("Bartosz").mpi_showcase_person("Gabi").mpi_showcase_person("GAndzia").mpi_showcase_person("Innervision").mpi_showcase_person("Kasia").mpi_showcase_person("Keram").mpi_showcase_person("Michcioperz")));
mpi_footer();
?>