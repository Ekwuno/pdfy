$(function () {
  // loads the footer into coresponding pages
  $('#footer').load('footer.html');

 // makes the footer always appear at the bottom of the page

 var contentHeight = $(window).height();
 var footerHeight = $('#footer').height();
 var footerTop = $('#footer').position().top + footerHeight;

 if (footerTop < contentHeight) {
   $('#footer').css('margin-top', 10 + (contentHeight - footerTop) + 'px');
 }
});