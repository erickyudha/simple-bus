<?php
require_once "../vendor/autoload.php";

EasyRdf\RdfNamespace::set('rdf','http://www.w3.org/1999/02/22-rdf-syntax-ns#');
EasyRdf\RdfNamespace::set('bus','http://bus-usu.herokuapp.com/bus/ontology#');

$graph = \EasyRdf\Graph::newAndLoad("https://erickyudha.github.io/public/bus.rdf");

$allData = $graph->resourcesMatching('bus:class');

$resultData = array();

foreach ($allData as $data) {
  $busData = array();

  $busData['class'] = $graph->get($data,'bus:class');
  $busData['facility'] = $graph->get($data,'bus:facility');
  $busData['price'] = $graph->get($data,'bus:price');
  $busData['from'] = $graph->get($data,'bus:rFrom');
  $busData['to'] = $graph->get($data,'bus:rTo');
  $busData['agName'] = $graph->get($data,'bus:agName');
  $busData['agTelp'] = $graph->get($data,'bus:agTelp');

  array_push($resultData, $busData);
  unset($busData);
};