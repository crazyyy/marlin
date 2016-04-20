// Avoid `console` errors in browsers that lack a console.
(function () {
  var method;
  var noop = function () {};
  var methods = ['assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error', 'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log', 'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd', 'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'];
  var length = methods.length;
  var console = (window.console = window.console || {});

  while (length--) {
    method = methods[length];

    // Only stub undefined methods.
    if (!console[method]) {
        console[method] = noop;
    }
}
}());
if (typeof jQuery == 'undefined') {
  console.warn('jQuery hasn\'t loaded');
} else {
  console.log('jQuery has loaded');
}
// Place any jQuery/helper plugins in here.

/**
 * Form input placeholder with image checker
 * if user focused on input - add opacity to span with placeholder
 * when user is focusout - set no opacity
 * if input not clear - do not add opacity to span
 */
$('input').on('focus', function() {
  $(this).parent().parent('div').addClass('input-focused');
})
$('input').on('focusout', function() {
  if ( $(this).val() < 1 ) {
    $(this).parent().parent('div').removeClass('input-focused');
  }
})
