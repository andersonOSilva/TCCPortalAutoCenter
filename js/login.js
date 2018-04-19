(function($) {

    function showInput(id) {
        if(id == 'tipoUser') {
        //  $.ajax({
            //  $("#tipoLoginPhp").Load("loginUser.php");
//load( 'loginUser.php #tipoLoginPhp' );
          //  )};
            $( "#tipoLoginPhp" ).load( "loginUser.php" );
        }
        if(id == 'tipoPrest') {

          $( "#tipoLoginPhp" ).load( "loginPrestadora.php" );

        }
    }
    $(document).on('click', 'input[type=radio]', function(){
        var id = $(this).prop("id");
        console.log(id);
        showInput(id);
    });
}(jQuery));
