<?php
require_once 'Deck.php';
require_once 'Player.php';

class Game
{
    private array $deck;

    public function playgame()
    {
        $deck = new Deck;
        $deck = $deck->getCards();
        $player1 = new Player;
        $player2 = new Player;

        shuffle($deck);

        $player1Hand = $player1->getHand();
        $player2Hand = $player2->getHand();

        $player1Hand[] = $deck[0];
        $player2Hand[] = $deck[1];
        $player1Hand[] = $deck[2];
        $player2Hand[] = $deck[3];

        $player1Total = $player1Hand[0]->getValue() + $player1Hand[1]->getValue();
        $player2Total = $player2Hand[0]->getValue() + $player2Hand[1]->getValue();

        if (($player1Total > 21) && ($player2Total > 21)) {
            return ;
        } elseif ($player1Total > 21) {
            return ;
        } elseif ($player2Total > 21) {
            return ;
        } elseif ($player1Total == $player2Total) {
            return ;
        } elseif ($player1Total > $player2Total) {
            return ;
        } else {
            return ;
        }
    }
}