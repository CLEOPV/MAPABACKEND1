<?php
	require("dados.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<?php include 'header.php';?>
	<main>
		<div class="main_cta">
            <article class="main_cta_content">
                <div class="main_cta_content_spacer">
                    <header>
                        <h1>Marmitas da Dona Rita</h1>
                    </header>
                    <p>A melhor opção todos os dias.</p>
                    <p><a href="#" class="btn">Saiba Mais</a></p>
                </div>
            </article>
        </div>
		
		<section class="main_marmita">
			<header class="main_marmita_header">
				<!-- //alterei aqui -->
				<h1><a name="marmita">Conheça as nossas marmitas</h1></a>
				<p>Temos opção para todos os gostos!</p>
			</header>
			<?php
			//validar se array existe e se não está vazio
			if(is_array($marmitas) && !empty($marmitas)){
				foreach($marmitas as $key => $value){
			?>
			<article>
				<!-- passar o titulo da noticia para ser impresso no title da página -->
				<a href="pagina2.php?id=<?=$value['id'];?>">
				<!-- //alterei aqui -->
				<img src=<?=$value['imagem'];?> title="<?=$value['title_img'];?>" alt="<?=$value['title_img'];?>"></a>
				<h2><?=$value['titulo'];?></h2>
				<p><?=substr($value['descricao'], 0, 150);?>...</p>
			</article>
			<?php
			}
		}else{
			echo "Não temos opções hoje!";
		}
		?>
		</section>
	</main>
		<?php include 'footer.php';?>
</body>
</html>