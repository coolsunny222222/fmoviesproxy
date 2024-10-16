<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>HDO Box - Watch Free Movies Online at HDOBOX</title>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="/css/mpage-dark.css" type="text/css">
<link rel='dns-prefetch' href='https://translate.google.com' />
<script type="text/javascript" src="/css/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script disable-devtool-auto src='https://cdn.jsdelivr.net/npm/disable-devtool@latest'></script>
<style>
@media screen and (min-width: 800px) {
  div.page-detail {
     padding-top:0px !important;
  }
}
</style>
</head>
<body>
<?php include 'files/header.php';?>
<div id="main" class="page-detail">
<div class="container">
<div class="main-content">
<div class="movies-list-wrap mlw-latestmovie">
<div class="pad"></div>

<div class="clearfix"></div>
<br>
<div class="sharethis-inline-share-buttons" data-url="https://hdobox0.xyz/"></div>
<br><br>
<div class="ml-title">
<span class="pull-left">Trending Movies This Week</span>
<div class="clearfix"></div>
</div>
<div class="tab-content">
<div id="top-hot" class="movies-list movies-list-full tab-pane fade active in">
	<?php
		include 'files/apikey.php';
		$jsonimdbmov = file_get_contents('https://api.themoviedb.org/3/trending/movie/week?language=en-US&api_key='.$apikey);	
		$objmov = json_decode($jsonimdbmov, true);
		$tmdbmovresults = $objmov["results"];
		
		foreach($tmdbmovresults as $movvalue){
			$movid = $movvalue['id'];
			$titlemov = $movvalue['title'];
			$vote_average = $movvalue['vote_average'];
			$postermov = 'https://image.tmdb.org/t/p/w300'.$movvalue['poster_path'];
			$year1mov = $movvalue["release_date"];
			$yearmov = substr($year1mov, 0, strpos($year1mov, "-"));
			if(empty($yearmov)) $yearmov = 'n/a';			
	?>
	<div class="ml-item">
		<a href="/watch-hdobox-<?php echo $movid;?>" rel="nofollow" class="ml-mask">
			<span class="mli-imdbnum"><?php echo number_format($vote_average, 1);?></span>
			<span class="mli-quality"><?php echo $yearmov;?></span>
			<img src="<?php echo $postermov;?>" title="<?php echo $titlemov;?>" class="thumb mli-thumb" loading="lazy" onerror="this.src='/thumbs/<?php echo $thumb;?>';">	
			<span class="mli-info"><h2><?php echo $titlemov;?></h2></span>
		</a>
	</div>
	<?php } ?>
</div>
</div>


</div>
</div>
</div>
</div>
<?php include 'files/footer.php';?>
</body>
</html>