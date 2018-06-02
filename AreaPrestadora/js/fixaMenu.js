$(function () {
  if ($(window).scrollTop() > $('.container_novo_post').offset().top) {
    $('.menu_CarBook_principal').addClass('fixador_menu');
  }else {
    $('.menu_CarBook_principal').removeClass('fixador_menu');
  }

  $(window).scroll(function() {
    if ($(this).scrollTop() > $('.container_novo_post').offset().top) {
      $('.menu_CarBook_principal').addClass('fixador_menu');
    }else {
      $('.menu_CarBook_principal').removeClass('fixador_menu');
    }
  });
});
