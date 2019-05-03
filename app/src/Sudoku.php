<?php

namespace Classes;


/**
 * The Sudoku Class to manage a matrix with.
 *
 * This class provides all the necessary tools needed to create, check and
 * provide the properties of a sudoku object. Having completed the load, it
 * will return whether it was successful in checking the validity of the matrix.
 *
 * @package Classes
 */
class Sudoku
{

  /**
   * The MASK constant value.
   *
   * @var string
   */
  const SUDOKU_MASK = 'F,o,o,b,a,r,foo,bar,foobar';

  /**
   * The matrix max row count.
   *
   * @var int
   */
  const SUDOKU_ROWS = 9;

  /**
   * The matrix max col count.
   *
   * @var int
   */
  const SUDOKU_COLS = 9;

  /**
   * Two dimensional array of the block size for the matrix.
   *
   * @var array
   */
  const SUDOKU_BLOCK = [ x => 3, y => 3];

  /**
   * The sudoku matrix array.
   *
   * @var array
   */
  protected $sudokuMatrix;

  /**
   * The transformed sudoku for comparison purposes.
   *
   * @var array
   */
  protected $sudokuMatrixTransformed;

  /**
   * The sudoku matrix properties.
   *
   * The current set of properties for the object contain:
   *  - mask: the string used which will contain the possible values for the
   *    matrix.
   *  - elements: the count of elements in the mask.
   *  - rows: the number of rows a matrix should contain.
   *  - cols: the number of columns a matrix should contain.
   *
   * @var array
   */
  protected $matrixProperties = [
    'elements'      => 0,
    'mask'          => '',
    'max rows'      => 0,
    'max columns'   => 0,
    'block size'    => [],
  ];

  /**
   * The status of the sudoku object.
   *
   * @var bool
   */
  protected $status;

  /**
   * Sudoku constructor.
   *
   * The purpose of this constructor is to build the sudoku object and test its
   * values against the mask and establish whether it PASSES or FAILS. We then
   * store the status of the object in a property which we can call when
   * needed.
   *
   * @param array $sudoku
   *   The valid or invalid sudoku matrix which will be evaluated.
   */
  public function __construct(array $sudoku) {
    $this->setDefaults();
    $this->sudokuMatrix = $sudoku;
    $this->checkMatrix();
  }

  /**
   * Matrix property setter.whatback in
   *
   * @param string $property
   *   String which identifies the property by name.
   * @param mixed|null $value
   *   Array, strings, integer, booleans and NULL value which the property
   *   can use to describe the matrix.
   */
  public function setProperty($property, $value) {
    $this->matrixProperties[$property] = $value;
  }

  /**
   * The matrix property getter.
   *
   * @param string $property
   *   The matrix property name identifier.
   *
   * @return mixed
   *   The defined matrix property requested.
   */
  public function getProperty($property) {
    return $this->matrixProperties[$property];
  }

  /**
   * Method used to instantiate the check routine for the sudoku matrix.
   */
  public function isSudoku() {
    return $this->status;
  }

  /**
   * Define the default values for the matrix object.
   *
   * TODO: Consider allowing the defaults to be set by an array or YML file.
   */
  public function setDefaults() {
    $this->setProperty('max rows', self::SUDOKU_ROWS);
    $this->setProperty('max columns', self::SUDOKU_COLS);
    $this->setProperty('block size', self::SUDOKU_BLOCK);
    $this->createMask(self::SUDOKU_MASK);
  }

  /**
   * Check the sudoku matrix and set its status to TRUE or FALSE.
   */
  private function checkMatrix() {
    // do resets
    $this->sudokuMatrixTransformed = array();
    $status = NULL;
    $this->status = NULL;
    // do checks
    $status = $status & $this->checkMatrixRows();
    $status = $status & $this->checkMatrixCols();
    $status = $status & $this->checkMatrixBlocks();
    $this->status = $status;
  }

  /**
   * Mask value to check matrix rows against.
   *
   * @param string $mask
   *   The mask string to be used and transformed for comparison.
   */
  private function createMask(string $mask) {
    $transformedMask = $this->stringTransformation($mask);
    $this->setProperty('mask', $transformedMask);
    $this->setProperty('elements', count($transformedMask));
  }

  /**
   * The string will be transformed and sorted for easy comparison.
   *
   * This ensures a degree of consistency between the checksum. We first convert
   * the string to an array. We then walk the array to UPPERCASE all the values,
   * upon which we sort the result so each transformation is identically
   * produced.
   *
   * @param string $value
   *   The mask string to transform.
   *
   * @return array
   *   The returned mask as a transformed value.
   */
  private function stringTransformation(string $value) {
    $valueAsArray = explode(',', $value);

    array_map('strtoupper', $valueAsArray);

    sort($valueAsArray);

    return $valueAsArray;
  }

  private function checkMatrixRows() {
    $numElements = $this->getProperty('elements');
    for ($row = 0; $row < $numElements; $row++) {


      if (is_array($this->sudokuMatrix) && is_string($this->sudokuMatrix[$row])) {
        $checkRowMask = stringTransformation($this->sudokuMatrix[$row]);
      }
      // check the row (if string or Array)
      // convert to array
      // transform
      for ($col = 0; $col < $numElements; $col++) {
        $checkRowMask[$col];
      }
      $checkRowMask = NULL;
    }
    return FALSE;
  }

  private function checkMatrixCols() {
    return $this->checkMatrixRows();
  }

  private function checkMatrixBlocks() {
    return $this->checkMatrixRows();
  }
}