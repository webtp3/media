<?php
namespace TYPO3\CMS\Media\Utility;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012-2013 Fabien Udriot <fabien.udriot@typo3.org>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Test case for class \TYPO3\CMS\Media\Utility\VariantUtility.
 */
class VariantUtilityTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \TYPO3\CMS\Media\Utility\VariantUtility
	 */
	private $fixture;

	public function setUp() {
		$this->fixture = new \TYPO3\CMS\Media\Utility\VariantUtility();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function propertyVariantUtilityIsAnArrayNotEmpty() {
		$this->assertAttributeNotEmpty('variations', $this->fixture);
	}

	/**
	 * @test
	 */
	public function getVariantsReturnsNotEmptyArrayByDefault() {
		$this->assertNotEmpty($this->fixture->getVariations());
	}

	/**
	 * @test
	 */
	public function getVariationsReturnsWidthAndHeight() {
		foreach ($this->fixture->getVariations() as $variation) {
			$this->assertArrayHasKey('width', $variation);
			$this->assertArrayHasKey('height', $variation);
		}
	}

}
?>