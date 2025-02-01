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

    <div id="toggleAbtPg"><i class="fas fa-plus"></i> About this page</div>
    <div id="abtPg">
      <p>The above search includes 1,327 pronunciations that Emily Wilson, Translator of <em><a href="https://www.emilyrcwilson.com/the-odyssey" target="_blank">The Odessey</a></em> and <em><a href="https://www.emilyrcwilson.com/the-iliad-sept-2023" target="_blank">The Iliad</a></em>, has painstakingly provided on <a href="https://emilyrcwilson.com" target="_blank">her website</a>.</p>
      <p>I made this search so that I could find pronunciations quickly, with minimal interruptions, while I read. This was designed with my <a href="https://www.apple.com/by/iphone-13/" target="_blank">iPhone 13</a> mini as the basis for keeping the search results "above the fold" - in other words, to keep the results visible while the keypad is also occupying screen real estate. My apologies if you are on a smaller screen or if <em>anything</em> isn't just exactly perfect. <i class="far fa-smile"></i></p>
      <p>While each file, individually, is relatively small, cumulatively they add up to a fair amount of data. In order to manage the page load, the mp3 files are only accessed on a per-click basis and are neither preloaded nor cached. This keeps the page small and quick to load, however, the tradeoff is that an active Internet connection is required for consistently smooth playbacks.</p>
      <p><a id="closeAbtPg">Close</a></p>
    </div>
    <h1 class="ttext">Emily Wilson</h1>
    <h2 class="stext">Translator of The <em>Iliad</em> and the <em>Odyssey</em></h2>
    <p>The content below will take you to Emily Wilson's website where you can find additional resources about both of her world-renowned translations, learn about the author and find additional resources.</p>

    <div class="books">
      <div class="book">
        <a class="ba" href="https://www.amazon.com/Iliad-Homer/dp/1324001801" target="_blank"><img src="_images/iliad-cover.webp"></a>
        <div class="bookInfo">
          <h2 class="stext">The Iliad</h2>
          <p><a class="osl" href="https://www.emilyrcwilson.com/the-iliad-sept-2023" target="_blank">About this book</a></p>
          <p><a class="osl" href="https://www.emilyrcwilson.com/iliad-pronunciation-1" target="_blank">Iliad Pronunciations</a></p>
          <p><a class="osl" href="https://www.amazon.com/Iliad-Homer/dp/1324001801" target="_blank">Find on Amazon</a></p>
        </div>
      </div>
      <div class="book">
        <a class="ba" href="https://www.amazon.com/Odyssey-Homer/dp/0393356256" target="_blank"><img src="_images/odyssey-cover.webp"></a>
        <div class="bookInfo">
          <h2 class="stext">The Odyssey</h2>
          <p><a class="osl" href="https://www.emilyrcwilson.com/the-odyssey" target="_blank">About this book</a></p>
          <p><a class="osl" href="https://www.emilyrcwilson.com/pronunciation-guide-1" target="_blank">Odyssey Pronunciations</a></p>
          <p><a class="osl" href="https://www.amazon.com/Odyssey-Homer/dp/0393356256" target="_blank">Find on Amazon</a></p>
        </div>
      </div>
    </div>      

  </div>
</div><!-- .page -->

<?php require '_includes/footer.php'; ?>
