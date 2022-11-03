<?php
require_once 'Deck.php';
require_once 'Player.php';

class Game
{
    private array $deck;

    public function playgame(): string
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
            return '<p>Player one got ' . $player1Hand[0]->getFace() . ' of ' . $player1Hand[0]->getSuit()
                . ' and ' . $player1Hand[1]->getFace() . ' of ' . $player1Hand[1]->getSuit()
                . ' totaling ' . $player1Total . '.</p>
                    <p>Player two got ' . $player2Hand[0]->getFace() . ' of ' . $player2Hand[0]->getSuit()
                . ' and ' . $player2Hand[1]->getFace() . ' of ' . $player2Hand[1]->getSuit()
                . ' totaling ' . $player2Total . '.</p>
                    <p>Both players bust!</p>';
        } elseif ($player1Total > 21) {
            return '<p>Player one got ' . $player1Hand[0]->getFace() . ' of ' . $player1Hand[0]->getSuit()
                . ' and ' . $player1Hand[1]->getFace() . ' of ' . $player1Hand[1]->getSuit()
                . ' totaling ' . $player1Total . '.</p>
                    <p>Player two got ' . $player2Hand[0]->getFace() . ' of ' . $player2Hand[0]->getSuit()
                . ' and ' . $player2Hand[1]->getFace() . ' of ' . $player2Hand[1]->getSuit()
                . ' totaling ' . $player2Total . '.</p>
                    <p>Player one bust! Player 2 Wins!</p>';
        } elseif ($player2Total > 21) {
            return '<p>Player one got ' . $player1Hand[0]->getFace() . ' of ' . $player1Hand[0]->getSuit()
                . ' and ' . $player1Hand[1]->getFace() . ' of ' . $player1Hand[1]->getSuit()
                . ' totaling ' . $player1Total . '.</p>
                    <p>Player two got ' . $player2Hand[0]->getFace() . ' of ' . $player2Hand[0]->getSuit()
                . ' and ' . $player2Hand[1]->getFace() . ' of ' . $player2Hand[1]->getSuit()
                . ' totaling ' . $player2Total . '.</p>
                    <p>Player two bust! Player one Wins!</p>';
        } elseif ($player1Total == $player2Total) {
            return '<p>Player one got ' . $player1Hand[0]->getFace() . ' of ' . $player1Hand[0]->getSuit()
                . ' and ' . $player1Hand[1]->getFace() . ' of ' . $player1Hand[1]->getSuit()
                . ' totaling ' . $player1Total . '.</p>
                    <p>Player two got ' . $player2Hand[0]->getFace() . ' of ' . $player2Hand[0]->getSuit()
                . ' and ' . $player2Hand[1]->getFace() . ' of ' . $player2Hand[1]->getSuit()
                . ' totaling ' . $player2Total . '.</p>
                    <p>Draw!</p>';
        } elseif ($player1Total > $player2Total) {
            return '<p>Player one got ' . $player1Hand[0]->getFace() . ' of ' . $player1Hand[0]->getSuit()
                . ' and ' . $player1Hand[1]->getFace() . ' of ' . $player1Hand[1]->getSuit()
                . ' totaling ' . $player1Total . '.</p>
                    <p>Player two got ' . $player2Hand[0]->getFace() . ' of ' . $player2Hand[0]->getSuit()
                . ' and ' . $player2Hand[1]->getFace() . ' of ' . $player2Hand[1]->getSuit()
                . ' totaling ' . $player2Total . '.</p>
                    <p>Player one wins!</p>';
        } else {
            return '<p>Player one got ' . $player1Hand[0]->getFace() . ' of ' . $player1Hand[0]->getSuit()
                . ' and ' . $player1Hand[1]->getFace() . ' of ' . $player1Hand[1]->getSuit()
                . ' totaling ' . $player1Total . '.</p>
                    <p>Player two got ' . $player2Hand[0]->getFace() . ' of ' . $player2Hand[0]->getSuit()
                . ' and ' . $player2Hand[1]->getFace() . ' of ' . $player2Hand[1]->getSuit()
                . ' totaling ' . $player2Total . '.</p>
                    <p>Player two wins!</p>';
        }
    }
}