window.onresize = navigationResize;
navigationResize();

function navigationResize() {  
  $('#nav li.more').before($('#overflow > li'));
  
  var $navItemMore = $('#nav > ul > li.more'),
      $navItems = $('#nav > ul > li:not(.more)'),
      navItemMoreWidth = navItemWidth = $navItemMore.width(),
      windowWidth = $(window).width(),
      navItemMoreLeft, offset, navOverflowWidth;
  
  $navItems.each(function() {
    navItemWidth += $(this).width();
  });
  
  navItemWidth > windowWidth ? $navItemMore.show() : $navItemMore.hide();
    
  while (navItemWidth > windowWidth) {
    navItemWidth -= $navItems.last().width();
    $navItems.last().prependTo('#overflow');
    $navItems.splice(-1,1);
  }
}