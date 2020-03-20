<?php
$int = 100;

if (filter_var ( $int, FILTER_VALIDATE_INT )) {
  echo ("Integer is valid");
} else {
  echo ("Integer is not valid");
}
?>