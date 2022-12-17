<?php
require_once '/var/www/html/vendor/autoload.php';

use Amenadiel\JpGraph\Graph;
use Amenadiel\JpGraph\Plot;


//Круговая диаграмма
$slicesIndicators1 = array_slice($fakeIndicatorData, 40);
$slicesCountries1 = array_slice($fakeCountryData, 40);

$graph1 = new Graph\PieGraph(700, 400);
$graph1->title->Set("A Simple Pie Plot");
$graph1->SetBox(true);

$plot1 = new Plot\PiePlot($slicesIndicators1);
$plot1->SetLegends($slicesCountries1);
$plot1->ShowBorder();
$plot1->SetColor('black');
$plot1->SetSliceColors(array('#9F0142', '#D63E50', '#F36D43', '#FDAD61', '#FEE08B', '#E6F698', '#ABDEA4', '#66C2A4', '#3388BD', '#5E50A2'));

$graph1->Add($plot1);
$graph1->Stroke("chart1.png");


//Столбчатая диаграмма
$slicesIndicators2 = array_slice($fakeIndicatorData, 0, 10);
$slicesCountries2 = array_slice($fakeCountryData, 0, 10);

$graph2 = new Graph\Graph(1100,400);
$graph2->SetScale("textlin");
$graph2->SetBox(true);
$graph2->title->Set("Bar Plots");

$graph2->xaxis->title->Set("Country");
$graph2->xaxis->title->SetMargin(5);
$graph2->xaxis->SetTickLabels($slicesCountries2);
$graph2->yaxis->title->Set("Indicator");

$plot2 = new Plot\BarPlot($slicesIndicators2);
$plot2->SetFillColor('#5E50A2');

$graph2->Add($plot2);
$graph2->Stroke("chart2.png");

//Линейная диаграмма
$slicesIndicators3 = array_slice($fakeIndicatorData, 10, 10);
$slicesCountries3 = array_slice($fakeCountryData, 10, 10);

$graph3 = new Graph\Graph(1100,400);
$graph3->SetScale("textlin");

$graph3->img->SetAntiAliasing(false);
$graph3->title->Set('Line chart');
$graph3->SetBox(false);

$graph3->SetMargin(40,20,36,63);

$graph3->img->SetAntiAliasing();

$graph3->yaxis->HideZeroLabel();
$graph3->yaxis->HideLine(false);
$graph3->yaxis->HideTicks(false,false);

$graph3->xgrid->Show();
$graph3->xgrid->SetLineStyle("solid");
$graph3->xaxis->SetTickLabels($slicesCountries3);
$graph3->xgrid->SetColor('#E3E3E3');

// Create line
$plot3 = new Plot\LinePlot($slicesIndicators3);
$plot3->SetColor("#6495ED");
$plot3->SetLegend('Country');

$graph3->legend->SetFrameWeight(1);
$graph3->Add($plot3);
$graph3->Stroke("chart3.png");

?>