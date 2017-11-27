<!doctype html>
<html>

	<head> 
		<meta charset="utf-8" /> 
		<title>PHP Quiz</title> 
		<link rel="stylesheet" type="text/css" href="./css/estiloprocessa.css" /> 
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
		<script src="./js/jquery.min.js"></script>
		<script type="text/javascript" src="./js/json.js"></script>
</head> 
<body> 
	
	<div class="page-wrap"> 

		<h1>Resultado:</h1> 

		<?php 
		if(!isset($_POST['question-0-answers'])||!isset($_POST['question-1-answers'])||!isset($_POST['question-2-answers'])||!isset($_POST['question-3-answers'])||!isset($_POST['question-4-answers'])||!isset($_POST['question-5-answers'])||!isset($_POST['question-6-answers'])||!isset($_POST['question-7-answers'])||!isset($_POST['question-8-answers'])||!isset($_POST['question-9-answers'])){
			echo "Erro, você não preencheu todas as respostas!";
			?>
			<br><div class="link"><button onclick="history.go(-1);"><p>Voltar</p></button></div>
			<?php
		}
		else {
		$answer0 = $_POST['question-0-answers'];
		$answer1 = $_POST['question-1-answers'];
		$answer2 = $_POST['question-2-answers'];
		$answer3 = $_POST['question-3-answers'];
		$answer4 = $_POST['question-4-answers'];
		$answer5 = $_POST['question-5-answers'];
		$answer6 = $_POST['question-6-answers'];
		$answer7 = $_POST['question-7-answers'];
		$answer8 = $_POST['question-8-answers'];
		$answer9 = $_POST['question-9-answers'];
		$nome = $_POST['nomeusuario'];
		$totalCorrect = 0; 
		$answer0=explode("-",$answer0);
		$answer1=explode("-",$answer1);
		$answer2=explode("-",$answer2);
		$answer3=explode("-",$answer3);
		$answer4=explode("-",$answer4);
		$answer5=explode("-",$answer5);
		$answer6=explode("-",$answer6);
		$answer7=explode("-",$answer7);
		$answer8=explode("-",$answer8);
		$answer9=explode("-",$answer9);
		$a=0;
		$correct=array();
		$wrong=array();
		$w=0;
		$certas=array();
		?>
		<script>
			$(function(){
				function vaitomarnocu(id){
					var vtnc=1;
					$.each(questoes,function(ind,obj){
						if(obj.id==id){
							vtnc=obj.correta;
						}
					});
				return vtnc;
				}
				var answer0= "<?php echo $answer0[1]; ?>" ;
				var corr0= "<?php echo $answer0[0]; ?>";
				var answer1= "<?php echo $answer1[1]; ?>" ;
				var corr1= "<?php echo $answer1[0]; ?>";
				var answer2= "<?php echo $answer2[1]; ?>" ;
				var corr2= "<?php echo $answer2[0]; ?>";
				var answer3= "<?php echo $answer3[1]; ?>" ;
				var corr3= "<?php echo $answer3[0]; ?>";
				var answer4= "<?php echo $answer4[1]; ?>" ;
				var corr4= "<?php echo $answer4[0]; ?>";
				var answer5= "<?php echo $answer5[1]; ?>" ;
				var corr5= "<?php echo $answer5[0]; ?>";
				var answer6= "<?php echo $answer6[1]; ?>" ;
				var corr6= "<?php echo $answer6[0]; ?>";
				var answer7= "<?php echo $answer7[1]; ?>" ;
				var corr7= "<?php echo $answer7[0]; ?>";
				var answer8= "<?php echo $answer8[1]; ?>" ;
				var corr8= "<?php echo $answer8[0]; ?>";
				var answer9= "<?php echo $answer9[1]; ?>" ;
				var corr9= "<?php echo $answer9[0]; ?>";
				var nome="<?php echo $nome; ?>";
				console.log(corr0);
				console.log(answer0);
				console.log(corr1);
				console.log(answer1);
				console.log(corr2);
				console.log(answer2);
				console.log(corr3);
				console.log(answer3);
				console.log(corr4);
				console.log(answer4);
				console.log(corr5);
				console.log(answer5);
				console.log(corr6);
				console.log(answer6);
				console.log(corr7);
				console.log(answer7);
				console.log(corr8);
				console.log(answer8);
				console.log(corr9);
				console.log(answer9);
				var totalCorrect=0;
				correta=vaitomarnocu(answer0);
				if(correta==corr0){
					totalCorrect++;
				}
				else {
					console.log("correta");
				}
				correta=vaitomarnocu(answer1);
				if(correta==corr1){
					totalCorrect++;
				}
				else {
					console.log("correta");
				}
				correta=vaitomarnocu(answer2);
				if(correta==corr2){
					totalCorrect++;
				}
				else {
					console.log("correta");
				}
				correta=vaitomarnocu(answer3);
				if(correta==corr3){
					totalCorrect++;
				}
				else {
					console.log("correta");
				}
				correta=vaitomarnocu(answer4);
				if(correta==corr4){
					totalCorrect++;
				}
				else {
					console.log("correta");
				}
				correta=vaitomarnocu(answer5);
				if(correta==corr5){
					totalCorrect++;
				}
				else {
					console.log("correta");
				}
				correta=vaitomarnocu(answer6);
				if(correta==corr6){
					totalCorrect++;
				}
				else {
					console.log("correta");
				}
				correta=vaitomarnocu(answer7);
				if(correta==corr7){
					totalCorrect++;
				}
				else {
					console.log("correta");
				}
				correta=vaitomarnocu(answer8);
				if(correta==corr8){
					totalCorrect++;
				}
				else {
					console.log("correta");
				}
				correta=vaitomarnocu(answer9);
				if(correta==corr9){
					totalCorrect++;
				}
				else {
					console.log("correta");
				}
				$(".page-wrap").append($("<div />").addClass("results").html(nome+",você acertou um total de "+totalCorrect+" de 10 questões")).append($("<a />").attr("href","ranking.php").append($("<div />").addClass("link").append($("<p />").html("Confira o ranking aqui e veja como as outras pessoas se saíram"))));
			});
		</script>
		<?php
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
		<?php } ?>
	</div> 

</body> 

</html>