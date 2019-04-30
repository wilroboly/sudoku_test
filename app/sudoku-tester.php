<?php
/**
 * Created by PhpStorm.
 * User: wilco
 * Date: 2019-04-30
 * Time: 09:44
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

/** @var ARRAY $sudoku */
$sudoku = new Sudoku($invalid_sudoku);

// echo $sudoku->isSudoku();