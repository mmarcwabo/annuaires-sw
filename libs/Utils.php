<?php
#Class name : Utils
#Purpose : Usual fonctions to format data and so on
#Author : mwabo
#email : mwabo@exsofth.com

class Utils{
//Show a php array as an html table
public static function html_table($data = array()){
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
}
