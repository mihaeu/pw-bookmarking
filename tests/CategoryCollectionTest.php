<?php declare(strict_types = 1);

/**
 * @covers CategoryCollection
 *
 * @uses Category
 * @uses CategoryName
 */
class CategoryCollectionTest extends PHPUnit_Framework_TestCase
{
	public function testEmptyCollectionHasCount0()
	{
		$collection = new CategoryCollection();
		$this->assertCount(0, $collection);
	}

	public function testIsCountable()
	{
		$collection = new CategoryCollection();
		$collection->add(new Category(new CategoryName('Super Category')));
		$collection->add(new Category(new CategoryName('Super Category')));
		$this->assertCount(2, $collection);
	}

	public function testIsTraversible()
	{
		$collection = new CategoryCollection();
		$x1 = new Category(new CategoryName('Super Category'));
		$x2 = new Category(new CategoryName('Super Category'));
		$collection->add($x1);
		$collection->add($x2);
		$this->assertEquals($x1, iterator_to_array($collection)[0]);
		$this->assertEquals($x2, iterator_to_array($collection)[1]);
	}

	public function testRemovesObjects()
	{
		$collection = new CategoryCollection();
		$x1 = new Category(new CategoryName('Super Category'));
		$collection->add($x1);
		$collection->remove($x1);
		$this->assertCount(0, $collection);
	}
}
