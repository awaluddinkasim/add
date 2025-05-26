<?php

use Carbon\Carbon;

if (!function_exists('tanggal')) {
  function tanggal($tanggal)
  {
    return Carbon::parse($tanggal)->isoFormat('DD MMMM YYYY');
  }
}
