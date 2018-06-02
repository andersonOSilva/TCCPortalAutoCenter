$("section a").click(function(e){
  e.preventDefault();
  var id = $(this).attr('href'),
  //console.log(id);
  		targetOffset = $(id).offset().top;
  $('html, body').animate({
  	scrollTop: targetOffset - 170
  }, 500);

});
