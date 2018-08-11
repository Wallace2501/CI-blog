<!DOCTYPE html>
<html>
<head>
  <title>博客</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.bootcss.com/popper.js/1.12.5/umd/popper.min.js"></script>
  <script src="https://cdn.bootcss.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>

  <!-- Nav tabs -->
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Logo</a>
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active text-muted" data-toggle="tab" href="#home">主页</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-muted" data-toggle="tab" href="#menu1">随笔</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-muted" data-toggle="tab" href="#menu2">留言板</a>
    </li>
  </ul>
   <botton class="btn btn-success float-right role="button">已登陆</a>
  </nav>

  <!-- Tab panes -->
<div class="tab-content">
    <div id="home" class="container tab-pane active">
    	<div class="card">
    		<div class="card-body">
    		<h2 class="card-title text-info">All Article</h2>
    			<?php if (! empty($news) && is_array($news)) : ?>
		   		<?php foreach ($news as $news_item): ?>
		            <h2><?= $news_item['title'] ?></h3>
		            <div class="main">
		            	<p class="lead">
		                   <?= $news_item['text'] ?>
		                </p>
		            </div>
		                
		            <p><a href="<?= '/news/view/'.$news_item['slug'] ?>">View article</a></p>

		            <hr>
			
		        <?php endforeach; ?>

				<?php else : ?>

		        	<h3>No News</h3>

		        	<p>Unable to find any article for you.</p>

				<?php endif ?>	

			</div>
		</div>
    		<!-- <a href="#" class="card-link">Card link</a>
    		<a href="#" class="card-link">Another link</a> -->
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>

    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
</div>
<div class="container-fuild">
</div>

</body>
</html>