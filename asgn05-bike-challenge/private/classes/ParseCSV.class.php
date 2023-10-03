<?php

class ParseCSV {

  //HOW: Used in the parse function to set the delimiter
  //WHY: Public and static to allow ParseCSV to choose any delimiter
  public static $delimiter = ',';

  private $filename;
  private $header;
  private $data=[];
  private $row_count = 0;

  public function __construct($filename='') {
    if($filename != '') {
      $this->file($filename);
    }
  }

  //HOW: Checks to see if a file exists and is readable
  //WHY: Used to set the filename property to a valid file.
  public function file($filename) {
    if(!file_exists($filename)) {
      echo "File does not exist.";
      return false;
    } elseif(!is_readable($filename)) {
      echo "File is not readable.";
      return false;
    }
    $this->filename = $filename;
    return true;
  }

  //HOW: Reads through a file and sets the data property row by row.
  //WHY: Used to read a file and store it as a list of arguments.
  public function parse() {
    if(!isset($this->filename)) {
      echo "File not set.";
      return false;
    }

    //clear previous results
    $this->reset();

    $file = fopen($this->filename, 'r');
    while(!feof($file)) {
      $row = fgetcsv($file, 0, self::$delimiter);
      if($row == [NULL] || $row === FALSE) { continue; }
      if(!$this->header) {
     	  $this->header = $row;
      } else {
        $this->data[] = array_combine($this->header, $row);
        $this->row_count++;
     	}
    }
    fclose($file);
    return $this->data;
  }

  //HOW: Returns the previous results
  //WHY: Used to return the data from a file
  public function last_results() {
    return $this->data;
  }

  //HOW: Returns the row count
  //WHY: Used to find your place in a file
  public function row_count() {
    return $this->row_count;
  }

  //HOW: Sets properties to be empty
  //WHY: Used to create a fresh start and clear previous file parses
  private function reset() {
    $this->header = NULL;
    $this->data = [];
    $this->row_count = 0;
  }

}