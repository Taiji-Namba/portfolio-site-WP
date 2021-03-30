$(function() {
  // nav-link
  $('#page-link a[href*="#"]').click(function() {
    let elmHash = $(this).attr('href'); //ページ内リンクのHTMLタグhrefから、リンクされているエリアidの値を取得
    let pos = $(elmHash).offset().top;  //idの上部の距離を取得
    $('body,html').animate({ scrollTop: pos }, 500);
  });
});