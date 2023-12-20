<?php

function tgl_eng_to_ind($tgl)
{
  $tanggal = explode('-', $tgl);
  $kdbl = $tanggal[1];

  if ($kdbl == '01') {
    $nbln = 'January';
  } else if ($kdbl == '02') {
    $nbln = 'February';
  } else if ($kdbl == '03') {
    $nbln = 'March';
  } else if ($kdbl == '04') {
    $nbln = 'April';
  } else if ($kdbl == '05') {
    $nbln = 'Mei';
  } else if ($kdbl == '06') {
    $nbln = 'Juny';
  } elseif ($kdbl == '07') {
    $nbln = 'July';
  } elseif ($kdbl == '08') {
    $nbln = 'August';
  } elseif ($kdbl == '09') {
    $nbln = 'September';
  } elseif ($kdbl == '10') {
    $nbln = 'October';
  } elseif ($kdbl == '11') {
    $nbln = 'November';
  } elseif ($kdbl == '12') {
    $nbln = 'December';
  } else {
    $nbln = '';
  }

  $tgl_ind = $tanggal[0] . '' . $nbln . '' . $tanggal[2];
  return $tgl_ind;
}
