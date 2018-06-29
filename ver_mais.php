
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
<div class="nav-bar">
            <img id="navbar-click" src="imagens/menuIcon.png" alt="">
        </div>
        <div class="nav">

            <ul>
                <a href="sobre.php"><li >Sobre</li></a>
                <a href="#"><li>Prestadoras</li></a>
                <a href="carBook.php"><li>CarBook</li></a>
                <a href="#"><li>Produtos</li></a>
                <a href="homeForum.php"><li>Forum</li></a>
            </ul>
        </div>


<script>
    $('#navbar-click').click(function() {
                if (!$('.nav').hasClass('open')) {
                    openMenu();
                } else {
                    closeMenu();
                }
            });

            function openMenu(){
                $(function(){
                    // console.log('click');
                    $('.nav').addClass('open').show(00);
                });
            }
            function closeMenu(){
                $(function(){
                    // console.log('click');
                    $('.nav').removeClass('open').hide(300);
                });
            }


</script>
