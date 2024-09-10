<?php
function setArray() {
  $arr = ["PPLG", "HTL", "KLN", "PMN", "pplg", "htl"];
  $sortArr = array_unique(array_map("strtoupper", $arr));

  return $sortArr;
}

print_r(setArray());