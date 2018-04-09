<!DOCTYPE html>

<style>
.nav{display: none;
    width:100px;
    height: 10px;
    
    
    }
.nav ul{
    border: 2px solid white;
    background: #000;
    height: auto;
    border-radius: 20px;
    display: table;
    font-size: 25px;        
    padding: 15px 15px 15px 15px;
    list-style: none;
    margin-left: 50%;
    margin-top: -20%;
/*    max-width: 100%;*/
    
}
.nav li{

    color: aliceblue;
    font-family: cursive;

}
.nav li:hover{
    border-bottom:solid 5px #eca023 ;
    color: aliceblue;
    font-family: cursive;

}
#navbar-click{
    max-width: 30px;
    border: 3px solid aliceblue;
    border-radius: 50px;
    margin-top: 15px;
    background-color: #000
        
    }
    #navbar-click:hover{
    
    background-color: #eca023;
    }
    .nav-bar{
        width: auto;
    }
</style>


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

