( function( window, document ) {
  
  const html        = document.querySelector( 'html' )
  const socialLinks = html.querySelectorAll( '.social-nav a' )
  const videos      = html.querySelectorAll( '.format-video iframe, .format-video object, .format-video embed' )
  const scrollToTop = html.querySelector( '#scroll-to-top' )

  // Replace no-js class with js on html element
  html.classList.remove( 'no-js' )
  html.classList.add( 'js' )

  // Social nav icons
  const socialIcons = [
    { id: 'twitter',     hostnames: [ 'twitter.com' ] },
    { id: 'facebook',    hostnames: [ 'facebook.com', 'fb.me', ] },
    { id: 'tumblr',      hostnames: [ 'tumblr.com' ] },
    { id: 'youtube',     hostnames: [ 'youtube.com', 'youtu.be', ] },
    { id: 'twitch',      hostnames: [ 'twitch.tv' ] },
    { id: 'discord',     hostnames: [ 'discord.gg' ] },
    { id: 'soundcloud',  hostnames: [ 'soundcloud.com' ] },
    { id: 'mixcloud',    hostnames: [ 'mixcloud.com' ] },
    { id: 'dubtrack',    hostnames: [ 'dubtrack.fm' ] },
    { id: 'plug-dj',     hostnames: [ 'plug.dj' ] },
    { id: 'behance',     hostnames: [ 'behance.net' ] },
    { id: 'codepen',     hostnames: [ 'codepen.io', 'cdpn.io' ] },
    { id: 'deviant-art', hostnames: [ 'deviantart.com', 'fav.me' ] },
    { id: 'digg',        hostnames: [ 'digg.com' ] },
    { id: 'dribbble',    hostnames: [ 'dribbble.com' ] },
    { id: 'dropbox',     hostnames: [ 'dropbox.com',  ] },
    { id: 'flickr',      hostnames: [ 'flickr.com', 'flic.kr' ] },
    { id: 'foursquare',  hostnames: [ 'foursquare.com' ] },
    { id: 'github',      hostnames: [ 'github.com', 'github.io', 'git.io' ] },
    { id: 'google-plus', hostnames: [ 'plus.google.com' ] },
    { id: 'instagram',   hostnames: [ 'instagram.com', 'instagr.am' ] },
    { id: 'linkedin',    hostnames: [ 'linkedin.com' ] },
    { id: 'medium',      hostnames: [ 'medium.com' ] },
    { id: 'pinterest',   hostnames: [ 'pinterest.com', 'pinterest.co.uk',  'pin.it' ] },
    { id: 'reddit',      hostnames: [ 'reddit.com', 'redd.it' ] },
    { id: 'skype',       hostnames: [ 'skype.com' ] },
    { id: 'slideshare',  hostnames: [ 'slideshare.net' ] },
    { id: 'snapchat',    hostnames: [ 'snapchat.com' ] },
    { id: 'spotify',     hostnames: [ 'spotify.com', 'open.spotify.com' ] },
    { id: 'stumbleupon', hostnames: [ 'stumbleupon.com', 'su.pr' ] },
    { id: 'vimeo',       hostnames: [ 'vimeo.com' ] },
    { id: 'vine',        hostnames: [ 'vine.co' ] },
    { id: 'vk',          hostnames: [ 'vk.com' ] },
    { id: 'wordpress',   hostnames: [ 'wordpress.org', 'wordpress.com' ] },
  ]

  socialLinks.forEach( function( link ) {
    socialIcons.forEach( function( { id, hostnames } ) {
      if ( hostnames.includes( link.hostname.replace( /^www\./, '' ) ) ) {
        link.innerHTML = `<i class="fif fif-${ id }"></i>`
      }
    } )
  } )

  // Force videos 16:9 aspect ratio
  function sizeVideos() {
    videos.forEach( function(video) {
      video.style.height = Math.floor( video.offsetWidth / 16 * 9 ) + 'px'
    } )
  }

  sizeVideos()

  window.addEventListener( 'resize', function() {
    sizeVideos()
  } )

  // Scroll to top
  window.addEventListener( 'scroll', function() {
    scrollToTop.style.bottom = window.scrollY > 500 ? '20px' : '-2000px'
  } )


  scrollToTop.addEventListener( 'click', function(event) {
    event.preventDefault()
    window.scrollTo( { top: 0, behavior: 'smooth' } )
  } )


} ) ( typeof window != 'undefined' ? window : this, document )