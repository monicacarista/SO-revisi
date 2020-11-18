<?php
/**
 * PHPExcel
 *
 * Copyright (c) 2006 - 2007 PHPExcel, Maarten Balliauw
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
 *
 * @category   PHPExcel
 * @package    PHPExcel_Writer_Excel2007
 * @copyright  Copyright (c) 2006 - 2007 PHPExcel (http://www.codeplex.com/PHPExcel)
 * @license    http://www.gnu.org/licenses/gpl.txt	GPL
 */


/** PHPExcel_IWriter */
require_once 'PHPExcel/Writer/IWriter.php';


/**
 * PHPExcel_Writer_Excel2007_WriterPart
 *
 * @category   PHPExcel
 * @package    PHPExcel_Writer_Excel2007
 * @copyright  Copyright (c) 2006 - 2007 PHPExcel (http://www.codeplex.com/PHPExcel)
 */
abstract class PHPExcel_Writer_Excel2007_WriterPart
{
	/**
	 * Parent IWriter object
	 *
	 * @var PHPExcel_Writer_IWriter
	 */
	private $_parentWriter;
	
	/**
	 * Set parent IWriter object
	 *
	 * @param PHPExcel_Writer_IWriter	$pWriter
	 * @throws Exception
	 */
	public function setParentWriter($pWriter = null) {
		if ($pWriter instanceof PHPExcel_Writer_IWriter) {
			$this->_parentWriter = $pWriter;
		} else {
			throw new Exception("Invalid PHPExcel_Writer_IWriter passed.");
		}
	}
	
	/**
	 * Get parent IWriter object
	 *
	 * @return PHPExcel_Writer_IWriter
	 * @throws Exception
	 */
	public function getParentWriter() {
		if (!is_null($this->_parentWriter)) {
			return $this->_parentWriter;
		} else {
			throw new Exception("No parent PHPExcel_Writer_IWriter assigned.");
		}
	}
}
