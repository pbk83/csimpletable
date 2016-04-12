<?php

namespace pbk83\SimpleTable;

/**
 * Class for creating a simple html - table
 *
 */
 
class CSimpleTable
{
	private $headings;
	private $rows = array();
	
	public function __construct($options = [])
	{
	}
	
	public function addRow($row)
	{
		$this->rows[] = $row;
	}
	
	public function addHeadings($head)
	{
		$this->headings = $head;
	}
	
	public function createTable()
	{
		$html = 
		'<table style="width:100%;border: 1px solid black;border-collapse: collapse;">
			<tr>';
				
		foreach($this->headings as $h)
		{
			$html .= '<th style="border: 1px solid black;border-collapse: collapse;">'.$h.'</th>';				
		}
		
		$html .=	'</tr>';
		
		foreach($this->rows as $row)
		{
			$html .= '<tr>';
			foreach($row as $r)
			{
				$html .= '<td style="border: 1px solid black;border-collapse: collapse;">' . $r . '</td>';
			}
			$html .= '</tr>';
		}
			
		$html .= '</table>';
		
		return $html;
	}
}
