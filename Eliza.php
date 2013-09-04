<?php
define("TEHPAGETITLE", "Eliza");
require "inc.php";
mpi_header();
echo mpi_container(mpi_jumbo("<img src=\"assets/Eliza-avatar.png\" style=\"max-height: 200px;\" class=\"thumbnail pull-left\" /><p class=\"lead\">Hej! Mam na imię Eliza ;) Jestem uczennicą klasy 3 gimnazjum. Ostatnio dość dużo zadziało się w moim życiu. Najpierw zajęłam 1 miejsce w konkursie szkolnym im. Zbigniewa Herberta,następnie wygrałam ogólnopolski konkurs fotograficzny, również imienia Zbigniewa Herberta. Dzięki temu drugiemu wygrałam książkę Z. Herberta oraz iPhone 5. Sama cały czas jestem zaskoczona, bo wygrałam z ponad 320 innymi uczestnikami. Fotografia to moja taka większa pasja odkąd dostałam od rodziców aparat. Jestem im za to wdzięczna, bo dzięki nim i Panu Bartoszowi Krupie nie osiągnęłabym tego wszystkiego. Gdy ktoś pyta, jak to się stało, że wygrałam odpowiadam: \"No tak jakoś wyszło\". Ja sama nie do końca wiem jak to możliwe i chyba jeszcze długo nie będę mogła w to uwierzyć.</p>"));
echo mpi_container(mpi_showcase_g("Eliza",
  mpi_showcase_imgtb("Eliza", "custom/201305/101_5166-56a0f0").
  mpi_showcase_imgtb("Eliza", "custom/201305/101_4976-5f664a").
  mpi_showcase_imgtb("Eliza", "custom/201305/101_4981-93408d").
  mpi_showcase_imgtb("Eliza", "custom/201201/100_5935-5b7b3d")
));
mpi_footer();
?>
