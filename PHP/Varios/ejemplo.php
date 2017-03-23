<?php
function dieRoll($faces=6){
	return rand(1, $faces);
}

function getWinner($score){
	switch ($score[0] <=> $score[1]){
		case -1:
		return 1;
		case 1:
		return 0;
	}
}

function playTurn($players){
	$score = [];
	foreach($players as $player){
		$score[] = dieRoll();
	}
	return [
	'score' => $score,
	'winner' => getWinner($score)
	];
}

function playGame($players, $turnsQty=3){
	$game = [
	'players' => $players,
	'turnsQty' => $turnsQty,
	'turns' => [],
	'score' => [0,0],
	'winner' => null
	];
	while ($turns > 0){
		$turn = playTurn($players);
		$game['turns'][] = $turn;
		$game['score'][0] += $turn['score'][0];
		$game['score'][1] += $turn['score'][1];
		$turns--;
	}
	$game['winner'] = getWinner($game['score']);
	return $game;
}

function getScoreMsg($score){
	return "($score[0] - $score[1])";
}

function getWinnerMsg($players, $winner){
	if(null === $winner) return "¡¡Empate!!";
	return "Gana... ¡¡{$players[$winner]}!!";
}

function showResults($game){
	echo $game['players'][0]." VS ".
	$game['players'][1];
	echo " " . getScoreMsg($game['score']) . "\n";
	echo getWinnerMsg($game['players'],
		$game['winner']);
}

$game = playGame(["Julieta", "Juan"]);
showResults($game);
// Julieta VS Juan (11 - 10)
// Gana... ¡¡Julieta!!