<?php
  include("includes/head.php");

  $all = $session->get('posts');
?>

<div id="wrapper">
  <header id="header">
    <div id="logo">
      <img src="http://localhost:81/symfony/web/images/logo.png" alt="Logo" />&nbsp;<h1>INNER THOUGHTS</h1>
      <div class="clrflt"></div>
    </div>
  </header>

  <div id="headSub">
  </div>

  <div id="main">

<?php
  foreach($all as $p){
?>
    <div class="post">
      <div class="blogHead">
        <?= $p->getHeader() ?>
      </div>
      <div class="time">
        Written: <?= $p->getTime() ?>
      </div>
      <div class="image">
        <img src="http://localhost:81/symfony/web/images/<?= $p->getMedia() ?>" />
      </div>
      <div class="content">
        <?= $p->getContent() ?>
      </div>
      <div class="clrflt"></div>
    </div>
<?php
  }
?>
  </div>
  <footer id="footer">
    <div id="copy">
      Copyright &copy; 2016 Justin Han-Nguyen, HanMura Design Studio&copy;
    </div>
  </footer>
</div>
