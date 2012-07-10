<?php

class EFormattedColumn extends CDataColumn
{
    /**
     * @var string 
     */
    public $format = '%s';
    
	protected function renderDataCellContent($row, $data)
	{
		ob_start();
		parent::renderDataCellContent($row, $data);
		$content = ob_get_clean();
		
		printf($this->format, $content);
	}
}
