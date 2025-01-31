$(document).ready(function() {
  $('.nav-ac').focus();

  const audioPlayers = document.querySelectorAll('.audio-player');
  const playPauseBtns = document.querySelectorAll('.play-pause-btn');

  const playIcon = '<i class="fas fa-play"></i>';
  const pauseIcon = '<i class="fas fa-pause"></i>';

  playPauseBtns.forEach((btn, index) => {
    btn.addEventListener("click", () => {
      const audio = audioPlayers[index];
      if (audio.paused) {
        audio.play();
        btn.innerHTML = pauseIcon;
      } else {
        audio.pause();
        btn.innerHTML = playIcon;
      }
    });

    audioPlayers[index].addEventListener("ended", () => {
      btn.innerHTML = playIcon;
    });
  });

  document.getElementById("dd_searchInput").addEventListener("input", function () {
    const searchValue = this.value.toLowerCase();
    const items = document.querySelectorAll(".dropdown .item");

    items.forEach((item) => {
      const textContent = item.textContent
        .trim()
        .toLowerCase()
        .replace(/.*\u00a0/, ""); // Removes everything up to the non-breaking space
      if (textContent.includes(searchValue)) {
        item.style.display = "flex";
      } else {
        item.style.display = "none";
      }
    });
  });

  $(document).on('click','.reset',function() {
    $('.nav-ac').val('').focus();
    $('.dropdown .item').each(function() {
      $(this).css('display', 'flex'); // Show all items again
    });

    let dropdown = $('.dropdown');
    let firstItem = dropdown.find('.item:first');

    if (firstItem.length) {
      let offset = firstItem.position().top - dropdown.position().top;
      dropdown.css('transform', `translateY(-${offset}px)`);
      
      // Reset after a short delay for smooth effect
      setTimeout(() => {
        dropdown.css('transform', 'translateY(0)');
      }, 200);
    }
    // $('.dropdown .item').css('display', 'none');
  });

});