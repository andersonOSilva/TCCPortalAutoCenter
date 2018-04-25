(function($) {

    function showInput(id) {
        if(id == 'yes-button1') {
        //  $.ajax({
            //  $("#tipoLoginPhp").Load("loginUser.php");
//load( 'loginUser.php #tipoLoginPhp' );
          //  )};
            $( "#tipoforum" ).load( "views/forum_temas_view.php" );
        }
        if(id == 'yes-button2') {

          $( "#tipoforum" ).load( "views/cabecalho_forum.php" );

        }
    }
    $(document).on('click', 'input[type=radio]', function(){
        var id = $(this).prop("id");
        console.log(id);
        showInput(id);
    });
}(jQuery));
