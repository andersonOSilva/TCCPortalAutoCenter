
<style>

.hexagono {
    overflow: hidden;
    visibility: hidden;
    -webkit-transform: rotate(120deg);
    -moz-transform: rotate(120deg);
    -ms-transform: rotate(120deg);
    -o-transform: rotate(120deg);
    transform: rotate(120deg);
    cursor: pointer;
    width: 50px;
    height: 80px;
    margin: 0 0 0 20px;
}
.imagem1 {
    overflow: hidden;
    width: 100%;
    height: 100%;
    -webkit-transform: rotate(-60deg);
    -moz-transform: rotate(-60deg);
    -ms-transform: rotate(-60deg);
    -o-transform: rotate(-60deg);
    transform: rotate(-60deg);
}

.imagem2 {
    width: 100%;
    height: 100%;
    background-repeat: no-repeat;
    background-position: 50%;
    background-color: #eca023;
    
/*
    background-image: url(../imagens/luuuuupa.svg);
    background-size: cover;
*/
    visibility: visible;
    -webkit-transform: rotate(-60deg);
    -moz-transform: rotate(-60deg);
    -ms-transform: rotate(-60deg);
    -o-transform: rotate(-60deg);
    transform: rotate(-60deg);
}
.imagem2 img{
/*    transform: rotate(60deg);*/
    height: 100%;   
    width: 100%;
}
#posiciona{
    margin-top: -10px;
    margin-left: 810px;
}

</style>
<div id="posiciona">
                <div class="hexagono">
                <div class="imagem1">
                            <div class="imagem2"><img src="imagens/luuuuupa.svg"></div>
                        </div>
                    </div>
</div>
             