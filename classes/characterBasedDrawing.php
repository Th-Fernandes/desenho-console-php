<?php
class CharacterBasedDrawing
{
  private array $defaultRow = array('-', '-', '-', '-', '-');
  private array $coordinatesSet;

  public function __construct(...$coordinates)
  {
    $this->coordinatesSet = $coordinates;
  }

  private function setRowsQuantity(): array
  {
    $rows = array();

    foreach ($this->coordinatesSet as $cordinates) {
      array_push($rows, $this->defaultRow);
    }

    return $rows;
  }

  private function setDrawnRows(): array
  {
    $rows = $this->setRowsQuantity();

    foreach ($this->coordinatesSet as $index => $coordinates) {
      foreach ($coordinates as $coordinate) {
        $appliedDrawRow = array_splice($rows[$index], $coordinate, true, "*");
      }
    }

    return $rows;
  }

  public function printOnConsole(): void
  {
    $draw = $this->setDrawnRows();

    foreach ($draw as $row) {
      echo implode(" ", $row);
      echo "\n";
    }
  }
}
?>