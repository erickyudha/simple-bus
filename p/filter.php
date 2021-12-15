<?php
function filterDataByFromTo($busData, $targetFrom, $targetTo) {
  $result = array();
  if (!is_null($targetTo) && !is_null($targetFrom)) {
    foreach ($busData as $data) {
      if (
        str_contains(strtolower($data['from']), strtolower($targetFrom)) &&
        str_contains(strtolower($data['to']), strtolower($targetTo))
      ) {
        array_push($result, $data);
      };
    };
  } elseif (!is_null($targetFrom)) {
    foreach ($busData as $data) {
      if (str_contains(strtolower($data['from']), strtolower($targetFrom))) {
        array_push($result, $data);
      };
    };
  } elseif (!is_null($targetTo)) {
    foreach ($busData as $data) {
      if (str_contains(strtolower($data['to']), strtolower($targetTo))) {
        array_push($result, $data);
      };
    };
  } else {
    $result = $busData;
  }
  return $result;
}

function filterDataByPrice($busData, $minPrice, $maxPrice) {
  $result = array();
  if (!is_null($minPrice) && !is_null($maxPrice)) {
    foreach ($busData as $data) {
      if (
        $data['price'] >= $minPrice &&
        $data['price'] <= $maxPrice
      ) {
        array_push($result, $data);
      }
    }
  } elseif (!is_null($minPrice)) {
    foreach ($busData as $data) {
      if (
        $data['price'] >= $minPrice
      ) {
        array_push($result, $data);
      }
    }
  } elseif (!is_null($maxPrice)) {
    foreach ($busData as $data) {
      if (
        $data['price'] <= $maxPrice
      ) {
        array_push($result, $data);
      }
    }
  } else {
    $result = $busData;
  }
  return $result;
}

function filterDataByAgent($busData, $agName) {
  $result = array();
  if (!is_null($agName)) {
    foreach ($busData as $data) {
      if (
        str_contains(strtolower($data['agName']), strtolower($agName))
      ) {
        array_push($result, $data);
      }
    }
  } else {
    $result = $busData;
  }
  return $result;
}

function filterData(
  $busData,
  $targetFrom,
  $targetTo,
  $minPrice,
  $maxPrice,
  $agName
) {
  $result = filterDataByFromTo($busData, $targetFrom, $targetTo);
  $result = filterDataByPrice($result, $minPrice, $maxPrice);
  $result = filterDataByAgent($result, $agName);

  return $result;
}

?>
