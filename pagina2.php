<?php
	include("dados.php");
	//var_dump($marmitas);//utilizei para testar o conteúdo recebido
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
<style>

.main_marmita img{
    width: 60%;
}

.main_marmita p{
    margin: 10px 0;
	font-size: 1.2em;
	text-align: justify;
}

.main_marmita h3{
    font-size: 0.9em;
}

.main_marmita article{
    flex-basis: 100%;
    margin-bottom: 10px;
}

</style>
</head>
<body>

	<?php include 'header.php';?>
	
	<main>	
		<section class="main_marmita">
			<?php
				if(isset($_GET['id']) && !empty($_GET['id'])){
					//echo "ID = ". $_GET['id'];
					$id = $_GET['id'];//validar o recebimento do id
					foreach($marmitas as $key => $value){
						if($value['id'] == $id){
							//alterei aqui
							$data = new DateTime($value['data']);
					?>
						<header class="main_marmita_header">
							<h1><?=$value['titulo'];?></h1>
							<!--alterei aqui-->
							<h3>Publicado em: <?=$data->format('d/m/Y');?></h3>
						</header>
						<img src=<?=$value['imagem'];?> title="<?=$value['title_img'];?>" alt="<?=$value['title_img'];?>">
						<p><?=$value['descricao'];?></p>			
						<?php
						}
					}
				}else{
					echo "Não existe";
				}
			?>
		</section>
        <section class="main_marmita">
			<header class="main_marmita_header">
				<h1>Veja Outra Opções</h1>
			</header>
			<?php
			$id = 0;
				foreach($marmitas as $key => $value){
                    if($value['id'] != $id){
			?>
			<article>
				<h2><a href="pagina2.php?id=<?=$value['id'];?>"><?=$value['titulo'];?></a></h2>
	    	</article>
			<?php
                    }
				}
			?>
		</section>
	</main>
	<?php include 'footer.php';?>
</body>
</html>