<!DOCTYPE HTML>
<html>

<head>
    <?php include 'assets/config.php'; ?>
    <?php include 'assets/head.php'; ?>

    <?
    $paginaAtual = 'Paleta';
    $tituloPagina = $paginaAtual . " - " . $empresa;
    ?>

    <title><? echo $tituloPagina ?></title>
</head>

<body id="paleta">

    <div class="container">

        <?php include 'assets/menu.php'; ?>

        <main>
            <header class="topobg">
                <div class="pelicula"></div>
                <article>
                    <h1>Paleta cromática</h1>
                </article>
            </header>

            <section id="sessao1" class="p70-65">
                <article>
                    <p class="txt--padrao40 txt--bold">Configuração</p>

                    <div class="grid--2colunas">

                        <div class="esq">
                            <div class="txtbl txt-bloco-cima">
                                <p class="txt--padrao12">
                                    O roxo é a cor de nossa bandeira.<br>
                                    Combinado do violeta, azul e verde, trazemos energia,
                                    força e personalidade própria para cada marca.<br><br>

                                    As paletas ao lado são de uso exclusivo de
                                    cada marca. Por isso, respeite as combinações
                                    apresentadas.
                                </p>
                            </div>

                            <div class="txtbl txt-bloco-baixo desktopitem">
                                <p class="txt--padrao12">
                                    <strong>PANTONE®:</strong> cores de referência e para impressão
                                    especial. Sempre que possível, priorize seu uso em
                                    impressões offset e serigrafia.<br><br>

                                    <strong>CMYK:</strong> cores para impressão. Use quando não for
                                    possível optar pelas cores Pantone®.<br><br>

                                    <strong>RGB:</strong> cores para tela. Uso em meios digitais, como
                                    site e apresentações.<br><br>

                                    <strong>HEXADECIMAL:</strong> também para uso em meios digitais
                                    – identifica a cor de modo mais simples que o RGB.
                                </p>
                            </div>
                        </div>

                        <div class="dir">


                            <div class="modulo-abas">

                                <div class="nav_tabs">
                                    <ul class="nav desktopitem">
                                        <li nav="0" class="active">CantuStore</li>
                                        <li nav="1">PneuStore</li>
                                        <li nav="2">CantuPneus</li>
                                        <div class="slider">
                                            <div class="slider-bar"></div>
                                        </div>
                                    </ul>

                                    <div class="content">

                                        <div class="tab cantustore active">
                                            <p class="subtitulo mobileitem">CantuStore</p>
                                            <div class="accordeon">
                                                <div class="wrapper-acc">
                                                    <div class="box box1 ativo">
                                                        <p class="nome">Roxo</p>
                                                        <p class="sub">Cor principal</p>
                                                        <p class="desc">
                                                            RGB: 78/0/142<br>
                                                            HEX: #4E008E<br>
                                                            CMYK: 80/100/0/5<br>
                                                            Pantone® Violet C
                                                        </p>
                                                    </div>

                                                    <div class="box box2 white">
                                                        <p class="nome white">Violeta</p>
                                                        <!-- <p class="sub">Cor secundária</p> -->
                                                        <p class="desc white">
                                                            RGB: 145/83/240<br>
                                                            HEX: #9153F0<br>
                                                            CMYK: 64/73/0/0<br>
                                                            Pantone® 2665C
                                                        </p>
                                                    </div>

                                                    <div class="box box3 corSec">
                                                        <p class="nome">Amarelo</p>
                                                        <!-- <p class="sub">Cor secundária</p> -->
                                                        <p class="desc">
                                                            RGB: 255/233/89<br>
                                                            HEX: #FFE959<br>
                                                            CMYK: 0/0/70/0<br>
                                                            Pantone® 3935C
                                                        </p>
                                                    </div>

                                                    <div class="box box4 corSec">
                                                        <p class="nome">Off-white</p>
                                                        <!-- <p class="sub">Cor secundária</p> -->
                                                        <p class="desc">
                                                            RGB: 247/247/247<br>
                                                            HEX: #F7F7F7<br>
                                                            CMYK: 5/5/3/0<br>
                                                            Pantone® 663C
                                                        </p>
                                                    </div>
                                                </div>

                                                <p class="txt--padrao12 baixo-blocos desktopitem">
                                                    Clique nas cores para visualizar suas informações.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="tab pneustore">
                                            <p class="subtitulo mobileitem">PneuStore</p>
                                            <div class="accordeon">
                                                <div class="wrapper-acc">
                                                    <div class="box box1 ativo">
                                                        <p class="nome">Roxo</p>
                                                        <p class="sub">Cor principal</p>
                                                        <p class="desc">
                                                            RGB: 78/0/142<br>
                                                            HEX: #4E008E<br>
                                                            CMYK: 80/100/0/5<br>
                                                            Pantone® Violet C
                                                        </p>
                                                    </div>

                                                    <div class="box box2 corSec">
                                                        <p class="nome">Azul</p>
                                                        <!-- <p class="sub">Cor secundária</p> -->
                                                        <p class="desc">
                                                            RGB: 104/220/250<br>
                                                            HEX: #68DCFA<br>
                                                            CMYK: 51/0/5/0<br>
                                                            Pantone® 297C
                                                        </p>
                                                    </div>

                                                    <div class="box box3 corSec">
                                                        <p class="nome">Amarelo</p>
                                                        <!-- <p class="sub">Cor secundária</p> -->
                                                        <p class="desc">
                                                            RGB: 255/233/89<br>
                                                            HEX: #FFE959<br>
                                                            CMYK: 0/0/70/0<br>
                                                            Pantone® 3935C
                                                        </p>
                                                    </div>

                                                    <div class="box box4 corSec">
                                                        <p class="nome">Off-white</p>
                                                        <!-- <p class="sub">Cor secundária</p> -->
                                                        <p class="desc">
                                                            RGB: 247/247/247<br>
                                                            HEX: #F7F7F7<br>
                                                            CMYK: 5/5/3/0<br>
                                                            Pantone® 663C
                                                        </p>
                                                    </div>
                                                </div>

                                                <p class="txt--padrao12 baixo-blocos desktopitem">
                                                    Clique nas cores para visualizar suas informações.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="tab cantupneus">
                                            <p class="subtitulo mobileitem">CantuPneus</p>
                                            <div class="accordeon">
                                                <div class="wrapper-acc">
                                                    <div class="box box1 ativo">
                                                        <p class="nome">Roxo</p>
                                                        <p class="sub">Cor principal</p>
                                                        <p class="desc">
                                                            RGB: 78/0/142<br>
                                                            HEX: #4E008E<br>
                                                            CMYK: 80/100/0/5<br>
                                                            Pantone® Violet C
                                                        </p>
                                                    </div>

                                                    <div class="box box2 corSec">
                                                        <p class="nome">Verde</p>
                                                        <!-- <p class="sub">Cor secundária</p> -->
                                                        <p class="desc">
                                                            RGB: 212/237/24<br>
                                                            HEX: #D4ED18<br>
                                                            CMYK: 33/0/100/0<br>
                                                            Pantone® 2297C
                                                        </p>
                                                    </div>

                                                    <div class="box box3 white">
                                                        <p class="nome">Laranja</p>
                                                        <!-- <p class="sub">Cor secundária</p> -->
                                                        <p class="desc">
                                                            RGB: 255/102/51<br>
                                                            HEX: #FF6633<br>
                                                            CMYK: 0/70/90/0<br>
                                                            Pantone® 1655C
                                                        </p>
                                                    </div>

                                                    <div class="box box4 corSec">
                                                        <p class="nome">Off-white</p>
                                                        <!-- <p class="sub">Cor secundária</p> -->
                                                        <p class="desc">
                                                            RGB: 247/247/247<br>
                                                            HEX: #F7F7F7<br>
                                                            CMYK: 5/5/3/0<br>
                                                            Pantone® 663C
                                                        </p>
                                                    </div>
                                                </div>

                                                <p class="txt--padrao12 baixo-blocos desktopitem">
                                                    Clique nas cores para visualizar suas informações.
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- <div class="txtbl txt-bloco-baixo mobileitem">
                            <p class="txt--padrao12">                            
                                PANTONE®: cores de referência e para impressão especial. Sempre que possível, priorize seu uso em impressões offset e serigrafia.<br><br>
    
                                CMYK: cores para impressão. Use quando não for possível optar pelas cores Pantone®.<br><br>
    
                                RGB: cores para tela. Uso em meios digitais, como site e apresentações.<br><br>
    
                                HEXADECIMAL: também para uso em meios digitais – identifica a cor de modo mais simples que o RGB.
                            </p>   
                        </div> -->

                    </div>
                </article>
            </section>

            <div class="ideia solto">
                <div class="destaque-ideia">
                    <p class="txt--padrao12">
                        <strong>Atenção:</strong> quando impresso, a cor Violeta tem maior fidelidade e pureza no Pantone.<br>
                        Para impressões CMYK, dê prioridade para as demais cores.
                    </p>
                </div>
            </div>

            <section id="sessao2">
                <article>
                    <p class="txt--padrao40 txt--bold">Proporções de uso</p>
                    <p class="txt--padrao12">
                        Utilize a proporção de cores abaixo em todos os layouts e aplicações<br>
                        buscando manter a consistência e fortalecer o reconhecimento de cada marca.
                    </p>

                    <div class="composicao-wrapper grid--4linhas-auto">

                        <div class="desktopitem wrapper-box grid--2colunas">
                            <div class="esq">
                            </div>
                            <div class="dir">
                                <div class="wrapper-blocos imagens-topo">
                                    <div>
                                        <img src="<? echo $images ?>paleta/desk/Proporcao/logo cantustore horizontal@2x.png" alt="">
                                    </div>
                                    <div>
                                        <img src="<? echo $images ?>paleta/desk/Proporcao/logo pneustore horizontal@2x.png" alt="">
                                    </div>
                                    <div>
                                        <img src="<? echo $images ?>paleta/desk/Proporcao/logo cantupneus horizontal@2x.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="wrapper-box grid--2colunas">
                            <div class="esq">
                                <p>PRINCIPAL</p>
                                <p>
                                    São as cores proprietárias de cada marca
                                    e tem carta branca de uso: de massa de cor
                                    à textos e grafismos.
                                </p>
                            </div>

                            <div class="mobileitem wrapper-box grid--2colunas">
                                <div class="esq">
                                </div>
                                <div class="dir">
                                    <div class="wrapper-blocos imagens-topo">
                                        <div>
                                            <img src="<? echo $images ?>paleta/desk/Proporcao/logo cantustore horizontal@2x.png" alt="">
                                        </div>
                                        <div>
                                            <img src="<? echo $images ?>paleta/desk/Proporcao/logo pneustore horizontal@2x.png" alt="">
                                        </div>
                                        <div>
                                            <img src="<? echo $images ?>paleta/desk/Proporcao/logo cantupneus horizontal@2x.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dir">
                                <div class="wrapper-blocos">
                                    <span class="bloco"></span>
                                    <span class="bloco"></span>
                                    <span class="bloco"></span>
                                </div>
                            </div>
                        </div>

                        <div class="wrapper-box grid--2colunas">
                            <div class="esq">
                                <p>SECUNDÁRIA</p>
                                <p>
                                    Funcionam como ingrediente complementar
                                    e partilhado entre as demais marcas.
                                    Seu uso também é livre: de massa de cor
                                    à textos e grafismos.
                                </p>
                            </div>
                            <div class="dir">
                                <div class="wrapper-blocos meio">
                                    <span class="bloco ter"></span>
                                    <span class="bloco blue"></span>
                                    <span class="bloco green"></span>
                                </div>
                                <div class="wrapper-blocos meio">
                                    <span class="bloco white"></span>
                                    <span class="bloco white"></span>
                                    <span class="bloco white"></span>
                                </div>
                            </div>
                        </div>

                        <div class="wrapper-box grid--2colunas">
                            <div class="esq">
                                <p>APOIO</p>
                                <p>
                                    Tem uso pontual e com menor presença
                                    nas composições, geralmente focados
                                    para textos de destaque ou ícones.
                                </p>
                            </div>
                            <div class="dir">
                                <div class="grid--3colunas menores">
                                    <div class="wrapper-blocos baixo">
                                        <span class="bloco white"></span>
                                        <span class="bloco yellow"></span>
                                    </div>
                                    <div class="wrapper-blocos baixo menor">
                                        <span class="bloco white"></span>
                                        <span class="bloco ter"></span>
                                        <span class="bloco yellow"></span>
                                    </div>
                                    <div class="wrapper-blocos baixo">
                                        <span class="bloco white"></span>
                                        <span class="bloco orange"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ideia">
                        <div class="destaque-ideia">
                            <p class="txt--padrao12">
                                Em composições com maior volume de conteúdo, use a cor branca e off-white<br>
                                para separar blocos de informação mantendo a leveza.
                            </p>
                        </div>
                    </div>
                </article>
            </section>

            <section id="sessao3">
                <article>
                    <p class="txt--padrao40">Para se inspirar</p>

                    <div class="wrapper slick">
                        <img src="<? echo $images ?>pranchas/Faixa.png" alt="">
                        <img src="<? echo $images ?>pranchas/Carro.png" alt="">
                        <img src="<? echo $images ?>pranchas/Camisa.png" alt="">
                        <img src="<? echo $images ?>pranchas/Roda.png" alt="">
                        <img src="<? echo $images ?>pranchas/Pessoas e negocios.png" alt="">
                    </div>
                </article>
            </section>


            <? include('assets/download.php') ?>
            <? include('assets/footer.php') ?>
        </main>

    </div>


    <script type="text/javascript">
        $('.link-abre').removeClass('active')
        $('.menu li').hide();
        $('.link-abre:eq(2)').addClass('active');
    </script>
</body>

</html>