<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>PHP Quiz</title>
	<link rel="stylesheet" href="./css/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./css/estilo.css" />
	<link rel="stylesheet" type="text/css" href="./css/carrossel.css">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	<script src="./js/jquery.min.js" ></script>
	<script src="./js/json.js" ></script>
	<script type="text/javascript">
		$(function(){
			//$(".button").hide();
			function shuffle(o){
	   			for(var j, x, i = o.length; i; j = Math.floor(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x){};
	    		return o;
			};
			var maxImg = 12;
			for (var i = maxImg, a=[]; i--;) {a.push(i)};
			shuffle(a);
			console.log(a);
			var que = [];
			var question=0;
			for(var imga=0;imga<10;imga++){
				$.each(questoes,function(id,obj){
					if(a[imga]==obj.id)
					{
						var antes = question-1;
						var depois = question+1;
						$(".pergunta").append($("<li />").addClass("perguntas").addClass("pergunta_item"+question).attr("id","pergunta_item"+question).append($("<a />").attr("href","#pergunta_item"+antes).append($("<i />").addClass("fa fa-chevron-left").attr("aria-hidden","true"))).append($("<img />").attr("src",obj.foto)).append($("<a />").attr("href","#pergunta_item"+depois).append($("<i />").addClass("fa fa-chevron-right").attr("aria-hidden","true"))));
						que.push(obj.alternativas);
						question++;
					}
				});
			}
		for(question=0;question<10;question++){
			var test=65;
			for(var y=0;y<que[question];y++){
			$("#pergunta_item"+question).append($("<div />").addClass("option").append($("<input />").attr("type","radio").attr("name","question-"+question+"-answers").attr("value",String.fromCharCode(test)+"-"+a[question])).append($("<label />").html("Alternativa "+String.fromCharCode(test))));
			test++;
		}
		}
	});
	</script>
</head>
<body>
	<form action="processa.php" method="post" id="quiz">
	<div class="page-wrap">
		<h1>Quízmica</h1>
			<input type="text" name="nomeusuario" class="nomeusuario" placeholder="Seu nome" > <!--required oninvalid="this.setCustomValidity('Por favor, insira um nome!')"-->
			<a href="#pergunta_item0" id="linkPergunta"><p>Ir para perguntas</p></a>
	</div>
	<section class="conteiner-perguntas">
			<ul class="pergunta" id="pergunta">
			</ul>
	</section>
		<input type="submit" value="Enviar respostas" class="button" class="perguntas" id="pergunta_item11" />
		<input type="reset" value="Limpar" class="button"/>
	</form>

</body>
</html>
