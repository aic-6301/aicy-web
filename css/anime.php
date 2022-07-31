<?php header('Content-Type: text/css; charaset=utf-8');
header( 'Cache-Control: no-store, no-cache, must-revalidate' );
header( 'Cache-Control: post-check=0, pre-check=0', FALSE );
header('Pragma:no-cache');
header_register_callback(function(){
  header_remove('X-Powered-By');
});
$original_css = '
div,p,a,i,.navbar,.contents,li,ul,input,select,textarea,button {
  transition-duration: .3s;
  transition-timing-function: ease;
  transition-property: color, transform, background-color, display, div, position, span, font-size, text-decoration, box-shadow, border-color, filter, border-radius, background-image, transform, margin, margin-top, margin-bottom, margin-right, margin-left, padding-bottom, outline;
}

@keyframes fuwa {
  0% {
    opacity: 0;
    backdrop-filter: saturate(180%) blur(20px);
  }

  100% {
    opacity: 1;
    backdrop-filter: saturate(180%) blur(20px);
  }
}

@keyframes nav {
  0% {
    opacity: 0;
    height: 0;
  }

  100% {
    max-height: max-content;
    height: 280%;
  }
}

@keyframes fuwan {
  0% {
    opacity: 1;
    backdrop-filter: saturate(180%) blur(20px);
  }

  100% {
    opacity: 0;
    backdrop-filter: saturate(180%) blur(20px);
  }
}

@keyframes main {
  0% {
    transform: scaleX(0);
  }

  100% {
    transform: scaleX(1);
  }
}

@keyframes up {
  from {
    opacity: 0;
  }

  to {
    opacity: 1;
  }
}

@keyframes hover-up {
  from {
    transform: translateY(initial);
  }

  to {
    transform: translateY(200px);
  }
}

@keyframes down {
  from {
    transform: translateY(-200px);
    pointer-events: none;
    opacity: 0;
  }

  to {
    transform: translateY(initial);
    pointer-events: initial;
    opacity: 1;
  }
}

@keyframes kurun {
  0% {
    transform: rotate(0deg);
  }

  50% {
    transform: rotate(-5deg);
  }

  80% {
    transform: rotate(-5deg);
  }

  100% {
    transform: rotate(0deg);
  }
}

@keyframes top {
  0% {
    transform: rotate(0deg);
  }

  50% {
    transform: rotate(-25deg);
  }

  80% {
    transform: rotate(-5deg);
  }

  100% {
    transform: rotate(0deg);
  }
}

@keyframes fade {
  from {
    opacity: 0;
    transform: translateY(100px);
  }

  to {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes spinner {
  to {
    transform: rotate(360deg);
  }
}

@keyframes scroll {
  0% {
    transform: translateX(0)
  }

  100% {
    transform: translateX(-100%)
  }
}

@keyframes icon-anime {
  100% {
    transform: rotate(360deg);
  }
}

.footers {
  transition: bottom .3s !important;
}

.footer-none {
  transition: all .5s ease;
}

.name-list,
.name-list:hover,
.bread:hover {
  transition: ease 0.3s;
}

.open {
  transition: .5s;
}

.top,
.top:hover {
  transition: bottom .3s ease;
}

.navbar,
.bread,
.fixed,
.toc-fixed {
  transition-duration: .3s;
  transition-timing-function: ease;
  transition-property: top,bottom;
}

#anime-change {
  animation: anime-change reverse .3s;
}

@keyframes anime-change {
  0% {
    transform: translate(0px, 0px) rotateZ(0deg);
  }

  25% {
    transform: translate(2px, 2px) rotateZ(1deg);
  }

  50% {
    transform: translate(0px, 2px) rotateZ(0deg);
  }

  75% {
    transform: translate(2px, 0px) rotateZ(-1deg);
  }

  100% {
    transform: translate(0px, 0px) rotateZ(0deg);
  }
}

@keyframes nav-anime {
  from {
    transform: translateY(-100%);
  }

  to {
    transform: translateY(0%);
  }
}

.preference-status {
  animation: nav-anime 0.8s ease;
}

.navbar-link,
a.navbar-item,
.contents a {
  transition: .3s;
}
.contents a::after {
  transition: 0.6s;
}
@keyframes click-show-anime {
  0% {
    transform: translateY(15px);
  }

  100% {
    transform: translateY(0px);
  }
}

@keyframes fadeOut {
  0% {
    opacity: 1;
  }

  100% {
    opacity: 0;
  }
}

@keyframes modal {
  0% {
    transform: scale(0);
  }

  100% {
    transform: scale(1);
  }
}

@keyframes modal-close {
  0% {
    transform: scale(1);
  }

  100% {
    transform: scale(0);
    display: none;
  }
}
@keyframes rotate {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}
';
if(!isset($_GET['original'])){
  $css_replaces = [];
  $css_replaces[ '/@charset \"(utf|UTF)-8\";/' ] = '';
  $css_replaces[ '/(\/\*!.*?\*\/|\"(?:(?!(?<!\\\)\").)*\"|\'(?:(?!(?<!\\\)\').)*\')|\/\*.*?\*\//s' ] = '${1}';
  $css_replaces[ '/(\/\*!.*?\*\/|\"(?:(?!(?<!\\\)\").)*\"|\'(?:(?!(?<!\\\)\').)*\')\s*|\s+/s' ] = '${1} ';
  $css_replaces[ '/(\/\*!.*?\*\/|\"(?:(?!(?<!\\\)\").)*\"|\'(?:(?!(?<!\\\)\').)*\')| ([!#$%&,.:;<=>?@^{|}~]) |([!#$&(,.:;<=>?@\[^{|}~]|\A) | ([$%&),;<=>?@\]^{|}~]|\z)/s' ] = '${1}${2}${3}${4}';
  $css_replaces[ '/(\/\*!.*?\*\/|\"(?:(?!(?<!\\\)\").)*\"|\'(?:(?!(?<!\\\)\').)*\'|\([^;{}]+\))| ([+\-\/]) |([+\-\/]) | ([+\/])/s' ] = '${1}${2}${3}${4}';
  $css = preg_replace( array_keys( $css_replaces ), array_values( $css_replaces ), $original_css );
  echo $css;

  } else {
echo $original_css;
  }