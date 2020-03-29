<?php
#Class name : Utils
#Purpose : Usual fonctions to format data and so on
#Author : mwabo
#email : mwabo@exsofth.com

class Utils{
//Show a php array as an html table
public static function htmlTable($data = array()){
    $rows = array();
    foreach ($data as $row) {
        $cells = array();
        foreach ($row as $cell) {
            $cells[] = "<td>{$cell}</td>";
        }
        $rows[] = "<tr>" . implode('', $cells) . "</tr>";
    }
    return "<table class='hci-table'>" . implode('', $rows) . "</table>";
}

/*
 *For array of arrays 
 *
 */
public static function arrayToList($data = array()){
    $rows = array();
    foreach ($data as $row) {
    	$items = array();
    	foreach ($row as $item) {
    		$items[] = $item;
    	}
    	$rows[] = "<option>" . implode('', $items) . "</option>";       
    }
    return implode('', $rows);   
}

/*
 *For array of simple items
 *
 */
public static function arrayItemToList($data = array()){
    $options = array();
    for($i = 0; $i< count($data); $i++){

        $options[] = "<option>" . $data[$i] . "</option>";
  }
  return implode('', $options);  
 }
}