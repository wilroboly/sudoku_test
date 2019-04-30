<?php

namespace Classes;

/**
 * The Sudoku Class to check matrix and mask against.
 *
 * @package Classes
 */
class Sudoku
{

  private $sudokuMatrix;

  private $mask;

  /**
   * Sudoku constructor.
   *
   * @param array $sudoku
   *   The valid or invalid sudoku matrix which will be evaluated.
   */
  public function __construct(array $sudoku) {
    $this->$sudokuMatrix = $sudoku;
  }

  /**
   * Method used to instantiate the check routine for the sudoku matrix.
   */
  public function isSudoku() {
    return FALSE;
  }
}