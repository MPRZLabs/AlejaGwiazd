<?php
  define("TEHSITETITLE","Aleja Gwiazd");
  function mpi_header($pagetitle)
  {
    echo "<!DOCTYPE html>";
    echo "<html>";
    echo "<head>";
    echo "<meta charset=\"UTF-8\">";
    if ($pagetitle != null) {
      echo "<title>" . $pagetitle . " - " . TEHSITETITLE . "</title>";
    } else {
      echo "<title>" . TEHSITETITLE . "</title>";
    }
    echo "<link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css\">";
    echo "<link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css\">";
    echo "<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>";
    echo "<script src=\"//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js\"></script>";
    echo "<link rel=\"stylesheet\" href=\"/css/" . $pagetitle . ".css\">";
    echo "</head>";
    echo "<body>";
    mpi_navbar($pagetitle);
  }
  function mpi_footer()
  {
    echo "</body>";
    echo "</html>";
  }
  function mpi_navbar_page($title)
  {
    echo "<li><a href=\"" . $title . "\">". $title . "</a></li>";
  }
  function mpi_navbar_start()
  {
    echo "<nav class=\"navbar navbar-default\" role=\"navigation\">";
    echo "<div class=\"navbar-header\">";
    echo "<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">";
    echo "<span class=\"sr-only\">Przełącz wyświetlanie menu</span>";
    echo "<span class=\"icon-bar\"></span>";
    echo "<span class=\"icon-bar\"></span>";
    echo "<span class=\"icon-bar\"></span>";
    echo "</button>";
    echo "<a class=\"navbar-brand\" href="/">" . TEHSITETITLE . "</a>";
    echo "</div>";
    echo "<div class=\"collapse navbar-collapse navbar-ex1-collapse\">";
    echo "<ul class=\"nav navbar-nav\">";
  }
  function mpi_navbar_end()
  {
    echo "</ul>";
    echo "</div>";
    echo "</nav>";
  }
  function mpi_navbar($pagetitle)
  {
    mpi_navbar_start();
    mpi_navbar_page("Michcioperz");
    mpi_navbar_end();
  }
?>