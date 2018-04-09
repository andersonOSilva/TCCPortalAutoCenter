
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
    width: 200px;
    height: 300px;
    
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
/*    margin-top: -10px;*/
/*    margin-left: 810px;*/
}
#posiciona2{
    margin-top: -302px;
    margin-left: 210px;
}
#posiciona3{
    margin-top: -120px;
    margin-left: 110px;
}
#posiciona4{
    margin-top: -302px;
    margin-left: 317px;
}
#bloco{
    width: 540px;
    height: 450px;
    margin-left: auto;
    margin-right: auto;
/*    background:aqua; */
}

</style>
<div id="bloco">
    <a href='?pag=historia'><div id="posiciona">
                    <div class="hexagono" >
                    <div class="imagem1">
                                <div class="imagem2"><img src="imagens/luuuuupa.svg"></div>
                            </div>
                        </div>
    </div></a>
    <a href='?pag=missao'><div id="posiciona2">
                    <div class="hexagono">
                    <div class="imagem1">
                                <div class="imagem2"><img src="imagens/luuuuupa.svg"></div>
                            </div>
                        </div>
    </div></a>
    <a href='?pag=visao'><div id="posiciona3">
                    <div class="hexagono">
                    <div class="imagem1">
                                <div class="imagem2"><img src="imagens/luuuuupa.svg"></div>
                            </div>
                        </div>
        </div></a>
    <a href='?pag=valores'><div id="posiciona4">
                    <div class="hexagono">
                    <div class="imagem1">
                                <div class="imagem2"><img src="imagens/luuuuupa.svg"></div>
                            </div>
                        </div>
        </div></a>
</div>
             