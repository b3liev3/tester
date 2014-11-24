<?php
    class Card{
	private $number;
	private $suit;
	
	function __construct($number,$suit)
	{
	    $this->number = $number;
	    $this->suit = $suit;
	}
	
	function getNumber()
	{
	    return $this->number;
	}
	
	function getSuit()
	{
	    return $this->suit;
	}
	
	function isInMatchingSet(Card $card)
	{
	    return ($this->getNumber() == $card->getNumber());
	}
    }