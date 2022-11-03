<?php
require_once 'Card.php';

class Deck
{
    private array $cards = [];
    private array $suits = ['Hearts', 'Diamonds', 'Spades', 'Clubs'];
    private array $faces = [2, 3, 4, 5, 6, 7, 8, 9, 10, 'Jack', 'Queen', 'King', 'Ace'];

    public function __construct()
    {
        foreach ($this->faces as $face) {
            foreach ($this->suits as $suit) {
                if ($face === 'Ace'){
                    $value = 11;
                } elseif ($face === '10' || $face === 'Jack' || $face === 'Queen' || $face === 'King') {
                    $value = 10;
                } else {
                        $value = $face;
                }
                $card = new Card($suit, $face, $value);
                $this->cards[] = $card;
            }
        }
    }

    /**
     * @return array
     */
    public function getCards(): array
    {
        return $this->cards;
    }


}