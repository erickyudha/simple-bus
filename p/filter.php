<?php
function filterDataByFrom($busData, $targetFrom) {
  $result = array();
  foreach ($busData as $data) {
    if (strtolower($data['from']) == strtolower($targetFrom)) {
      array_push($result, $data);
    };
  };
  return $result;
}

function filterDataByFromTo($busData, $targetFrom, $targetTo) {
  $result = array();
  foreach ($busData as $data) {
    if (
      strtolower($data['from']) == strtolower($targetFrom) &&
      strtolower($data['to']) == strtolower($targetTo)
    ) {
      array_push($result, $data);
    };
  };
  return $result;
}
?>