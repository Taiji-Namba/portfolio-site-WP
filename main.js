jQuery(function($) {
  // nav-link
  $('#page-link a[href*="#"]').click(function() {
    let elmHash = $(this).attr('href'); //ページ内リンクのHTMLタグhrefから、リンクされているエリアidの値を取得
    let pos = $(elmHash).offset().top;  //idの上部の距離を取得
    $('body,html').animate({ scrollTop: pos }, 500);
  });

  //スマホ・タブレットでのhover有効化
  $('.js-hover-transition').bind('touchstart', function() {
    $(this).addClass('hover');
  }).bind('touchend', function(){
    $(this).removeClass('hover');
  });
});