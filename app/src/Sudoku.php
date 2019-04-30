<?php
/**
 * Created by PhpStorm.
 * User: wilco
 * Date: 2019-04-30
 * Time: 09:44
 */

namespace Classes;

class Sudoku {

  public $sudoku_matrix;

  private $mask;

  function __construct($sudoku) {
    $this->sudoku_matrix = $sudoku;
  }
}