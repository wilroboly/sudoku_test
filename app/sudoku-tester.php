<?php

/**
 * @file
 * The main file for the sudoku tester applet.
 */

require_once __DIR__ . '/../vendor/autoload.php';

use Classes\Sudoku;

$invalid_sudoku = [
  'F,o,o,b,a,r,foo,bar,foobar',
  'F,o,o,foo,bar,foobar,b,a,r',
  'foo,bar,foobar,b,a,r,F,o,o',
  'o,o,F,a,r,b,bar,foobar,foo',
  'F,o,o,foo,bar,foobar,b,a,r',
  'foo,bar,foobar,b,a,r,F,o,o',
  'F,o,o,b,a,r,foo,bar,foobar',
  'F,o,o,foo,bar,foobar,b,a,r',
  'foo,bar,foobar,b,a,r,F,o,o',
];

/* @var $sudoku */
$sudoku = new Sudoku($invalid_sudoku);

echo $sudoku->isSudoku()? "PASSED" : "DID NOT PASS!";
