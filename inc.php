<?php
  define("TEHSITETITLE","Aleja Gwiazd");
  function mpi_header()
  {
    echo "<!DOCTYPE html>";
    echo "<html>";
    echo "<head>";
    echo "<meta charset=\"UTF-8\">";
    echo "<title>" . TEHPAGETITLE . " - " . TEHSITETITLE . "</title>";
    echo "<link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css\">";
    echo "<link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css\">";
    echo "<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>";
    echo "<script src=\"//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js\"></script>";
    echo "<link rel=\"stylesheet\" href=\"/css/" . TEHPAGETITLE . ".css\">";
    echo "</head>";
    echo "<body>";
    mpi_navbar();
  }
  function mpi_jumbo($srcname)
  {
    echo "<div class=\"jumbotron\"><div class=\"container\">";
    echo mpi_readtextasset($srcname);
    echo "</div></div>";
  }
  function mpi_poemmodal($codename, $poemtitle)
  {
    echo "<div class=\"modal fade\" id=\"modal_".$codename."\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal_".$codename."_label\" aria-hidden=\"true\">";
    echo "<div class=\"modal-dialog\">";
    echo "<div class=\"modal-content\">";
    echo "<div class=\"modal-header\">";
    echo "<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>";
    echo "<h4 class=\"modal-title\">".$poemtitle."</h4>";
    echo "</div>";
    echo "<div class=\"modal-body\">";
    echo mpi_readtextasset($codename);
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
  }
  function mpi_poembutton($codename, $poemtitle)
  {
    echo "<a data-toggle=\"modal\" href=\"#modal_".$codename."\" class=\"btn btn-info\">".$poemtitle."</a>";
  }
  function mpi_readtextasset($filename)
  {
    $output = "";
    $file = fopen("assets/".$filename.".txt", "r");
    while(!feof($file))
    {
      $output = $output.fgets($file)."<br>";
    }
    fclose($file);
    return $output;
  }
  function mpi_footer()
  {
    echo "<div class=\"container\">Code&design by <a href=\"http://ijestfajnie.pl\">Michcioperz</a></div>";
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
    echo "<a class=\"navbar-brand\" href=\"/\">" . TEHSITETITLE . "</a>";
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
  function mpi_navbar()
  {
    mpi_navbar_start();
    mpi_navbar_page("Kasia");
    mpi_navbar_page("Michcioperz");
    mpi_navbar_end();
  }
?>