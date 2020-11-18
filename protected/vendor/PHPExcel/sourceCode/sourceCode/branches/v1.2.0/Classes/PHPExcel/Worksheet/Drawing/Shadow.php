<?php
/**
 * PHPExcel
 *
 * Copyright (c) 2006 - 2007 PHPExcel, Maarten Balliauw
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 * 
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   PHPExcel
 * @package    PHPExcel_Worksheet_Drawing
 * @copyright  Copyright (c) 2006 - 2007 PHPExcel (http://www.codeplex.com/PHPExcel)
 * @license    http://www.gnu.org/licenses/lgpl.txt	LGPL
 * @version    ##VERSION##, ##DATE##
 */


/** PHPExcel_IComparable */
require_once 'PHPExcel/IComparable.php';

/** PHPExcel_Worksheet */
require_once 'PHPExcel/Worksheet.php';

/** PHPExcel_Style_Color */
require_once 'PHPExcel/Style/Color.php';

/**
 * PHPExcel_Worksheet_Drawing_Shadow
 *
 * @category   PHPExcel
 * @package    PHPExcel_Worksheet_Drawing
 * @copyright  Copyright (c) 2006 - 2007 PHPExcel (http://www.codeplex.com/PHPExcel)
 */
class PHPExcel_Worksheet_Drawing_Shadow implements PHPExcel_IComparable
{		
	/* Shadow alignment */
	const SHADOW_BOTTOM							= 'b';
	const SHADOW_BOTTOM_LEFT					= 'bl';
	const SHADOW_BOTTOM_RIGHT					= 'br';
	const SHADOW_CENTER							= 'ctr';
	const SHADOW_LEFT							= 'l';
	const SHADOW_TOP							= 't';
	const SHADOW_TOP_LEFT						= 'tl';
	const SHADOW_TOP_RIGHT						= 'tr';							

	/**
	 * Visible
	 *
	 * @var boolean
	 */
	private $_visible;
	
	/**
	 * Blur radius
	 *
	 * Defaults to 6
	 *
	 * @var int
	 */
	private $_blurRadius;
	
	/**
	 * Shadow distance
	 *
	 * Defaults to 2
	 *
	 * @var int
	 */
	private $_distance;
	
	/**
	 * Shadow direction (in degrees)
	 *
	 * @var int
	 */
	private $_direction;
	
	/**
	 * Shadow alignment
	 *
	 * @var int
	 */
	private $_alignment;
	
	/**
	 * Color
	 * 
	 * @var PHPExcel_Style_Color
	 */
	private $_color;
	
	/**
	 * Alpha
	 *
	 * @var int
	 */
	private $_alpha;
		
    /**
     * Create a new PHPExcel_Worksheet_Drawing_Shadow
     */
    public function __construct()
    {
    	// Initialise values
    	$this->_visible				= false;
    	$this->_blurRadius			= 6;
    	$this->_distance			= 2;
    	$this->_direction			= 0;
    	$this->_alignment			= PHPExcel_Worksheet_Drawing_Shadow::SHADOW_BOTTOM_RIGHT;
    	$this->_color				= new PHPExcel_Style_Color(PHPExcel_Style_Color::COLOR_BLACK);
    	$this->_alpha				= 50;
    }
    
    /**
     * Get Visible
     *
     * @return boolean
     */
    public function getVisible() {
    	return $this->_visible;
    }
    
    /**
     * Set Visible
     *
     * @param boolean $pValue
     */
    public function setVisible($pValue = false) {
    	$this->_visible = $pValue;
    }
    
    /**
     * Get Blur radius
     *
     * @return int
     */
    public function getBlurRadius() {
    	return $this->_blurRadius;
    }
    
    /**
     * Set Blur radius
     *
     * @param int $pValue
     */
    public function setBlurRadius($pValue = 6) {
    	$this->_blurRadius = $pValue;
    }
    
    /**
     * Get Shadow distance
     *
     * @return int
     */
    public function getDistance() {
    	return $this->_distance;
    }
    
    /**
     * Set Shadow distance
     *
     * @param int $pValue
     */
    public function setDistance($pValue = 2) {
    	$this->_distance = $pValue;
    }
    
    /**
     * Get Shadow direction (in degrees)
     *
     * @return int
     */
    public function getDirection() {
    	return $this->_direction;
    }
    
    /**
     * Set Shadow direction (in degrees)
     *
     * @param int $pValue
     */
    public function setDirection($pValue = 0) {
    	$this->_direction = $pValue;
    }
    
   /**
     * Get Shadow alignment
     *
     * @return int
     */
    public function getAlignment() {
    	return $this->_alignment;
    }
    
    /**
     * Set Shadow alignment
     *
     * @param int $pValue
     */
    public function setAlignment($pValue = 0) {
    	$this->_alignment = $pValue;
    }
    
   /**
     * Get Color
     *
     * @return PHPExcel_Style_Color
     */
    public function getColor() {
    	return $this->_color;
    }
    
    /**
     * Set Color
     *
     * @param 	PHPExcel_Style_Color $pValue
     * @throws 	Exception
     */
    public function setColor($pValue = null) {
    	if ($pValue instanceof PHPExcel_Style_Color) {
    		$this->_color = $pValue;
    	} else {
    		throw new Exception("Invalid PHPExcel_Style_Color passed.");
    	}
    }
    
   /**
     * Get Alpha
     *
     * @return int
     */
    public function getAlpha() {
    	return $this->_alpha;
    }
    
    /**
     * Set Alpha
     *
     * @param int $pValue
     */
    public function setAlpha($pValue = 0) {
    	$this->_alpha = $pValue;
    }

	/**
	 * Get hash code
	 *
	 * @return string	Hash code
	 */	
	public function getHashCode() {
    	return md5(
    		  $this->_visible
    		. $this->_blurRadius
    		. $this->_distance
    		. $this->_direction
    		. $this->_alignment
    		. $this->_color->getHashCode()
    		. $this->_alpha
    		. __CLASS__
    	);
    }
        
    /**
     * Duplicate object
     *
     * Duplicates the current object, also duplicating referenced objects (deep cloning).
     * Standard PHP clone does not copy referenced objects!
     *
     * @return PHPExcel_Worksheet_Drawing_Shadow
     */
	public function duplicate() {
		return unserialize(serialize($this));
	}
}
