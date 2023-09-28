jQuery(document).ready(function($) {

    var progressBarWrap = $('<div class="htmega-rpbar-wrap"><div class="htmega-reading-progress-bar"></div></div>').appendTo('body');
    var progressBar = $('.htmega-reading-progress-bar');
    
   // Update progress bar width as user scrolls
    $(window).scroll(function() {
        var scrollPercent = ($(window).scrollTop() / ($(document).height() - $(window).height())) * 100;
       // progressBar.css('width', scrollPercent + '%').css('background-color', rpbarfillcolor).css('height', rpbarheight);
        progressBar.css('width', scrollPercent + '%');
    });
});


