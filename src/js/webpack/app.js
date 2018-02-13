import lazysizes from 'lazysizes'
import Marquee3k from 'marquee3000'
require('viewport-units-buggyfill').init()

const initialize = () => {

  Marquee3k.init({selector: 'marquee'})
  var backLoaded = false
  document.addEventListener('lazybeforeunveil', function(e){
    if(!backLoaded) {
      setTimeout(function() {
        document.getElementById("loader").style.display = "none"
      }, 100)
      backLoaded = true
    }
  })
  document.getElementById("loader").style.display = "none"
  
};

document.addEventListener("DOMContentLoaded", initialize);