$(document).ready(function() {
  if ($('[data-background]').length > 0) {
    $('[data-background]').each(function() {
      var $this, background, backgroundMobile, isVideo;
      $this = $(this);
      background = $this.attr('data-background');
      backgroundMobile = $this.attr('data-background-mobile');
      isVideo = /\.mp4(\?|#|$)/i.test(background);

      if (background.substr(0, 1) === '#') {
        return $this.css('background-color', background);
      } else if (isVideo) {
        $this.addClass('has-video-bg');
        if ($this.find('video.ct-video-bg').length === 0) {
          $this.prepend(
            '<video class="ct-video-bg" autoplay muted loop playsinline>' +
              '<source src="' + background + '" type="video/mp4">' +
            '</video>'
          );
        }
        return $this.css('background-image', 'none');
      } else if ($this.attr('data-background-mobile') && device.mobile()) {
        return $this.css('background-image', 'url(' + backgroundMobile + ')');
      } else {
        return $this.css('background-image', 'url(' + background + ')');
      }
    });
  }
});
