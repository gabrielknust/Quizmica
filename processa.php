<!doctype html>
<html>

	<head> 
		<meta charset="utf-8" /> 
		<title>PHP Quiz</title> 
		<link rel="stylesheet" type="text/css" href="./css/estiloprocessa.css" /> 
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
</head> 

<body> 
	
	<div class="page-wrap"> 

		<h1>Resultado:</h1> 

		<?php 
		if(!isset($_POST['question-1-answers'])||!isset($_POST['question-2-answers'])||!isset($_POST['question-3-answers'])||!isset($_POST['question-4-answers'])||!isset($_POST['question-5-answers'])||!isset($_POST['question-6-answers'])||!isset($_POST['question-7-answers'])||!isset($_POST['question-8-answers'])||!isset($_POST['question-9-answers'])||!isset($_POST['question-10-answers'])){
			echo "Erro, você não preencheu todas as respostas!";
			?>
			<br><div class="link"><button onclick="history.go(-1);"><p>Voltar</p></button></div>
			<?php
		}
		else {
		$answer1 = $_POST['question-1-answers'];
		$answer2 = $_POST['question-2-answers'];
		$answer3 = $_POST['question-3-answers'];
		$answer4 = $_POST['question-4-answers'];
		$answer5 = $_POST['question-5-answers'];
		$answer6 = $_POST['question-6-answers'];
		$answer7 = $_POST['question-7-answers'];
		$answer8 = $_POST['question-8-answers'];
		$answer9 = $_POST['question-9-answers'];
		$answer10 = $_POST['question-10-answers'];
		$nome = $_POST['nomeusuario'];
		$totalCorrect = 0; 
		$a=0;
		$correct=array();
		$wrong=array();
		$w=0;
		if ($answer1 == "E") { $totalCorrect++; $correct[$a]=1; $a++;} else{$wrong[$w]="1";$w++;}
		if ($answer2 == "D") { $totalCorrect++; $correct[$a]=2; $a++;} else{$wrong[$w]="2";$w++;}
		if ($answer3 == "C") { $totalCorrect++; $correct[$a]=3; $a++;} else{$wrong[$w]="3";$w++;}
		if ($answer4 == "B") { $totalCorrect++; $correct[$a]=4; $a++;} else{$wrong[$w]="4";$w++;}
		if ($answer5 == "C") { $totalCorrect++; $correct[$a]=5; $a++;} else{$wrong[$w]="5";$w++;}
		if ($answer6 == "E") { $totalCorrect++; $correct[$a]=6; $a++;} else{$wrong[$w]="6";$w++;}
		if ($answer7 == "C") { $totalCorrect++; $correct[$a]=7; $a++;} else{$wrong[$w]="7";$w++;}
		if ($answer8 == "A") { $totalCorrect++; $correct[$a]=8; $a++;} else{$wrong[$w]="8";$w++;}
		if ($answer9 == "A") { $totalCorrect++; $correct[$a]=9; $a++;} else{$wrong[$w]="9";$w++;}
		if ($answer10 == "B") { $totalCorrect++; $correct[$a]=10; $a++;} else{$wrong[$w]="10";$w++;}
		if($totalCorrect==0){
			echo "<div class='results'> $nome, você não acertou nenhuma questão!</div>";
		} 

		echo "<div class='results'> $nome, você acertou $totalCorrect de 10 perguntas</div><br><p class='results'>Corretas:</p>
		<div class='results'>";
		for($x=0;$x<$a;$x++){
			echo "$correct[$x]<br>";
		}
		echo "Erradas:<br>";
		for($x=0;$x<$w;$x++){
			echo "$wrong[$x]<br>";
		}
			echo "</div>";
		
			$caminhoArquivo="./documents/ranking.txt";

			$handle=fopen($caminhoArquivo, "a");
			if(file_get_contents($caminhoArquivo)=="")
			{
				fwrite($handle,$nome.";".$totalCorrect);
			}
			else{
				fwrite($handle,PHP_EOL.$nome.";".$totalCorrect);
			}
		?> 
		<a href="ranking.php"><div class="link"><p> Confira o ranking aqui e veja como as outras pessoas se saíram</p></div></a> 
		<?php } ?>
	</div> 

</body> 

</html>