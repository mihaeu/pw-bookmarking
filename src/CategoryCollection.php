<?php declare(strict_types = 1);

class CategoryCollection implements Countable, IteratorAggregate
{
	/**
	 * @var SplObjectStorage
	 */
	private $categories;

	public function __construct()
	{
		$this->categories = new SplObjectStorage();
	}

	public function add(Category $category)
	{
		$this->categories->attach($category);
	}

	public function remove(Category $category)
	{
		$this->categories->detach($category);
	}

	public function getIterator()
	{
		return $this->categories;
	}

	public function count()
	{
		return count($this->categories);
	}
}
