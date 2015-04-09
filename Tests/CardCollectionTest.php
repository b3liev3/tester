<?php
    class CardCollectionTest extends PHPUnit_Framework_TestCase
    {
	private $cardCollection;
	
	function setUp()
	{
	    $this->cardCollection = new CardCollection();
	}
	
	function testCountOnEmpty()
	{
	    $this->assertEquals(0,$this->cardCollection->count());
	}
	
	/**
	 * @depends testCountOnEmpty
	 */
	function testAddCard()
	{
	    $this->cardCollection->addCard(new Card('A', 'Spades'));
	    $this->cardCollection->addCard(new Card('2', 'Spades'));
	    
	    $this->assertEquals(2,$this->cardCollection->count());
	    
	    return $this->cardCollection;
	}
	
	/**
	 * 
	 * @depends testAddCard
	 */
	function testGetTopCard(CardCollection $cardCollection)
	{
	    $card = $cardCollection->getTopCard();
	    
	    $this->assertEquals(new Card('2','Spades'),$card);
	}
    }