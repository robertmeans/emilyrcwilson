<?php 
require_once 'config/initialize.php';
require '_includes/head.php'; ?>

<body>
<div class="page">
  <div class="search-field">
    <div class="searchArea">
      <div class="mag">
        <i class="fas fa-search fa-fw"></i>
      </div>
      <input class="nav-ac" type="text" id="dd_searchInput" placeholder="Search all names..." tabinex="1">
      <div class="reset">
        <i class="fas fa-backspace fa-fw"></i>
      </div>
    </div>     
  </div>

  <div class="wrap">

    <div class="container">
      <div class="title">Iliad Names</div>

      <div class="dropdown">
        <div class="item">&nbsp;</div>
        <div class="item">&nbsp;</div>
        <div class="item">&nbsp;</div>

      <?php
        foreach ($iliad_names as $name) { ?>
        <div class="item">
          <audio class="audio-player" src="<?= URL . 'audio-Iliad/' . str_replace(', ', ',+', $name); ?>.mp3?<?php echo time(); ?>" controlsList="nodownload" preload="none"></audio>
          <button class="play-pause-btn">
            <i class="fas fa-play"></i> 
          </button> <?= $name ?>
        </div>
      <?php } ?>

      </div><!-- .dropdown -->
    </div><!-- .container -->

    <div class="container o-names">
      <div class="title odessey">Odessey Names</div>

      <div class="dropdown">
        <div class="item">&nbsp;</div>
        <div class="item">&nbsp;</div>
        <div class="item">&nbsp;</div>

      <?php
        foreach ($odessey_names as $name) { ?>
        <div class="item">
          <audio class="audio-player" src="<?= URL . 'audio-Odessey/' . str_replace(', ', ',+', strtolower($name)); ?>.mp3?<?php echo time(); ?>" controlsList="nodownload" preload="none"></audio>
          <button class="play-pause-btn">
            <i class="fas fa-play"></i> 
          </button> <?= $name ?>
        </div>
      <?php } ?>

      </div><!-- .dropdown -->
    </div><!-- .container -->

  </div><!-- .wrap -->

  <div class="msg">
    <p class="ttext">EMILY WILSON<p>
      <p>Done. All pronunciations have been added to this search.<br><br>
      While each file, individually, is relatively small, cumulatively they add up to a fair amount of data. In order to manage the page load, the mp3 files are only accessed on a per-click basis and are neither preloaded nor cached. This keeps the page small and quick to load. - I moved this off Squarespace because I am able to write this in about 6 lines of code instead of 5,000 which is what it would take there.<br><br>
    Nice Led Zeppelin nod tucked in with Achilles (under Iliad Names). &nbsp;&nbsp;:-)</p>
  </div>
</div><!-- .page -->

<?php require '_includes/footer.php'; ?>
