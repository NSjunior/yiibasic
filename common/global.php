<?php
function citizenWithSpaceGlobal($citizen, $spacer)
{
  if (strlen($citizen) == 13) {
    $formatted = substr($citizen, 0, 1) . $spacer . substr($citizen, 1, 4) . $spacer . substr($citizen, 5, 5) . $spacer . substr($citizen, 10, 2) . $spacer . $citizen[12];
    return $formatted;
  }
  return $citizen;
}

function nullAble($value, $default)
{
  return $value ?? $default;
}
