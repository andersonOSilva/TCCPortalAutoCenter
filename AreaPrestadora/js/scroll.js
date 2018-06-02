$("nav a").click(function(e){
  e.preventDefault();
  var id = $(this).attr('href'),
  //console.log(id);
  		targetOffset = $(id).offset().top;
  $('html, body').animate({
  	scrollTop: targetOffset - 104
  }, 500);

});





// seta de voltar ao topo

$(function() {
    $("#back-to-top").hide();

    $(window).scroll(function(){
      if($(this).scrollTop()>560){
        $("#back-to-top").fadeIn();
      }else {
        $("#back-to-top").fadeOut();
      }
    });

    $("#back-to-top").click(function(){
      $('html, body').animate({
        scrollTop:0
      }, 500);
    });
});
