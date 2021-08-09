<!DOCTYPE HTML>
<html>

<head>
    <?php include 'assets/config.php'; ?>
    <?php include 'assets/head.php'; ?>

    <?
    $paginaAtual = 'Grafismos';
    $tituloPagina = $paginaAtual . " - " . $empresa;
    ?>

    <title><? echo $tituloPagina ?></title>
</head>

<body id="grafismos">

    <div class="container">

        <?php include 'assets/menu.php'; ?>

        <main>
            <header class="topobg">
                <div class="pelicula"></div>
                <article>
                    <h1>Grafismos</h1>
                </article>
            </header>

            <section id="sessao1" class="p70-65">
                <article>
                    <p class="txt--padrao40">Inspiração</p>
                    <p class="txt--padrao12 pos-titulo">
                        Inspirado pelo símbolo, os grafismos trazem movimento,
                        flexibilidade e personalidade à identidade.
                    </p>

                    <div class="wrapper">
                        <div class="box">
                            <img src="<? echo $images ?>grafismos/desk/Inspiracao/Caminho 5083@2x.png" alt="">
                        </div>

                        <div class="box">
                            <img src="<? echo $images ?>grafismos/desk/Inspiracao/Grupo 6544@2x.png" alt="">
                        </div>

                        <div class="box">
                            <img src="<? echo $images ?>grafismos/desk/Inspiracao/Caminho 5084@2x.png" alt="">
                        </div>

                        <div class="box">
                            <img src="<? echo $images ?>grafismos/desk/Inspiracao/Grupo 6544@2x.png" alt="">
                        </div>

                        <div class="box">
                            <img src="<? echo $images ?>grafismos/desk/Inspiracao/Grupo 7100@2x.png" alt="">
                        </div>
                    </div>
                </article>

            </section>

            <section id="sessao2">
                <article>
                    <p class="txt--padrao40">Composição</p>
                    <p class="txt--padrao12 pos-titulo">
                        Existem 4 momentos dos grafismos, que são criados
                        a partir da repetição do número de faixas:
                    </p>

                    <div class="wrapper">
                        <div class="bloco esq">
                            <div class="wrapper-topo desktopitem"></div>
                            <div class="wrapper-boxes">
                                <div class="box">
                                    <img class="linha1" src="<? echo $images ?>grafismos/desk/Composicao/Grupo-6567@2x.png" alt="">
                                    <div class="txt">
                                        <p class="txt--padrao12 txt--bold">1 FAIXA</p>
                                    </div>
                                </div>
                                <div class="box">
                                    <img class="linha1" src="<? echo $images ?>grafismos/desk/Composicao/Grupo-7117@2x.png" alt="">
                                    <div class="txt">
                                        <p class="txt--padrao12 txt--bold">3 FAIXAS</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bloco dir">
                            <div class="wrapper-topo">
                                <img class="linha1" src="<? echo $images ?>grafismos/desk/Composicao/Grupo 6587@2x.png" alt="">
                                <p class="txt--padrao12">
                                    Recomendado para peças com menor volume
                                    de conteúdo ou maior área de aplicação.
                                </p>
                            </div>
                            <div class="wrapper-boxes">
                                <div class="box">
                                    <img class="linha1" src="<? echo $images ?>grafismos/desk/Composicao/Grupo-6557@2x.png" alt="">
                                    <div class="txt">
                                        <p class="txt--padrao12 txt--bold">6 FAIXAS</p>
                                    </div>
                                </div>
                                <div class="box">
                                    <img class="linha1" src="<? echo $images ?>grafismos/desk/Composicao/Grupo-6577@2x.png" alt="">
                                    <div class="txt">
                                        <p class="txt--padrao12 txt--bold">PATTERN</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </section>

            <section id="sessao3">
                <article>
                    <p class="txt--padrao40">Proporção</p>
                    <p class="txt--padrao12 pos-titulo">
                        Os grafismos devem estar em harmonia com o logo e conteúdo.
                        Procure aplicá-los numa espessura agradável e sem gerar conflito
                        com os demais elementos da composição.
                    </p>

                    <div class="wrapper">
                        <div class="wrapper-boxes">
                            <div class="box">
                                <img class="linha1" src="<? echo $images ?>grafismos/desk/Proporcao/Grupo 7111@2x.png" alt="">
                            </div>
                            <div class="box">
                                <img class="linha1" src="<? echo $images ?>grafismos/desk/Proporcao/Grupo 7112@2x.png" alt="">
                            </div>
                            <div class="box">
                                <img class="linha1" src="<? echo $images ?>grafismos/desk/Proporcao/Grupo 7113@2x.png" alt="">
                            </div>
                            <div class="box">
                                <img class="linha1" src="<? echo $images ?>grafismos/desk/Proporcao/Grupo 7114@2x.png" alt="">
                            </div>
                        </div>

                        <div class="wrapper-bolas">
                            <div class="bolas">
                                <div class="box">
                                    <img class="linha1" src="<? echo $images ?>grafismos/desk/Proporcao/Grupo 6604@2x.png" alt="">
                                </div>
                                <div class="box">
                                    <img class="linha1" src="<? echo $images ?>grafismos/desk/Proporcao/Grupo 6606@2x.png" alt="">
                                </div>
                                <div class="box">
                                    <img class="linha1" src="<? echo $images ?>grafismos/desk/Proporcao/Grupo 6606@2x.png" alt="">
                                </div>
                                <div class="box">
                                    <img class="linha1" src="<? echo $images ?>grafismos/desk/Proporcao/Grupo 6604@2x.png" alt="">
                                </div>
                            </div>

                            <div class="txt">
                                <p class="txt--padrao12">
                                    Intervalo ideal que preserva
                                    o movimento do grafismo
                                    sem pesar na composição.
                                </p>

                                <p class="txt--padrao12">
                                    Espessuras muito grossas
                                    criam peso visual e conflitam
                                    com as demais informações
                                    da composição.
                                </p>
                            </div>
                        </div>
                    </div>

                </article>
            </section>


            <section id="sessao4">
                <article>
                    <p class="txt--padrao40">Orientação</p>
                    <p class="txt--padrao12 pos-titulo">
                        Não importa o terreno ou obstáculo, superamos
                        o desafio e seguimos sempre em frente.
                        <br><br>
                        Por isso nossos grafismos abrem caminhos
                        de ponta a ponta, em diferentes direções.
                    </p>

                    <div class="wrapper-switchs">
                        <div class="switchWrapper">
                            <div class="boxImg boxImg1 ativado">
                                <p class="txt--padrao12 txt--bold">HORIZONTAL</p>
                                <img src="<? echo $images ?>grafismos/desk/Orientacao/Grupo 6615@2x.png" alt="">
                            </div>

                            <div class="boxImg boxImg2">
                                <p class="txt--padrao12 txt--bold">HORIZONTAL</p>
                                <img src="<? echo $images ?>grafismos/desk/Orientacao/Grupo 6616@2x.png" alt="">
                            </div>

                            <span class="switch">
                                <span class="circulo"></span>
                            </span>
                        </div>

                        <div class="switchWrapper">
                            <div class="boxImg boxImg1 ativado">
                                <p class="txt--padrao12 txt--bold">DIAGONAL</p>
                                <img src="<? echo $images ?>grafismos/desk/Orientacao/Grupo 6621@2x.png" alt="">
                            </div>

                            <div class="boxImg boxImg2">
                                <p class="txt--padrao12 txt--bold">DIAGONAL</p>
                                <img src="<? echo $images ?>grafismos/desk/Orientacao/Grupo 6622@2x.png" alt="">
                            </div>

                            <span class="switch">
                                <span class="circulo"></span>
                            </span>
                        </div>

                        <div class="switchWrapper">
                            <div class="boxImg boxImg1 ativado">
                                <p class="txt--padrao12 txt--bold">VERTICAL A CORRIGIR 3 ESTADOS</p>
                                <img src="<? echo $images ?>grafismos/desk/Orientacao/Grupo 6625@2x.png" alt="">
                            </div>

                            <div class="boxImg boxImg2">
                                <p class="txt--padrao12 txt--bold">VERTICAL A CORRIGIR 3 ESTADOS</p>
                                <img src="<? echo $images ?>grafismos/desk/Orientacao/Grupo 6629@2x.png" alt="">
                            </div>

                            <!-- <div class="boxImg boxImg3">
                                <p class="txt--padrao12 txt--bold">VERTICAL A CORRIGIR 3 ESTADOS</p>
                                <img src="<? echo $images ?>grafismos/desk/Orientacao/Grupo 6633@2x.png" alt="">
                            </div> -->

                            <span class="switch">
                                <span class="circulo"></span>
                            </span>
                        </div>

                    </div>
                </article>
            </section>


            <section id="sessao5">
                <article>
                    <p class="txt--padrao40">Nº de divisões</p>
                    <p class="txt--padrao12 pos-titulo">
                        Explorar diferentes proporções entre as divisões reforça
                        a sensação de movimento, como uma bandeirada.
                    </p>

                    <div class="wrapper-switchs">
                        <div class="switchWrapper">
                            <div class="boxImg boxImg1 ativado">
                                <p class="txt--padrao12 txt--bold">1 divisão</p>
                                <img src="<? echo $images ?>grafismos/desk/Divisoes/Grupo 6637@2x.png" alt="">
                            </div>

                            <div class="boxImg boxImg2">
                                <p class="txt--padrao12 txt--bold">1 divisão</p>
                                <img src="<? echo $images ?>grafismos/desk/Divisoes/Grupo 6638@2x.png" alt="">
                            </div>

                            <span class="switch">
                                <span class="circulo"></span>
                            </span>
                        </div>

                        <div class="switchWrapper">
                            <div class="boxImg boxImg1 ativado">
                                <p class="txt--padrao12 txt--bold">2 divisões</p>
                                <img src="<? echo $images ?>grafismos/desk/Divisoes/Grupo 6648@2x.png" alt="">
                            </div>

                            <div class="boxImg boxImg2">
                                <p class="txt--padrao12 txt--bold">2 divisões</p>
                                <img src="<? echo $images ?>grafismos/desk/Divisoes/Grupo 6645@2x.png" alt="">
                            </div>

                            <span class="switch">
                                <span class="circulo"></span>
                            </span>
                        </div>

                        <div class="switchWrapper">
                            <div class="boxImg boxImg1 ativado">
                                <p class="txt--padrao12 txt--bold">3 divisões (máx.)</p>
                                <img src="<? echo $images ?>grafismos/desk/Divisoes/Grupo 6654@2x.png" alt="">
                            </div>

                            <div class="boxImg boxImg2">
                                <p class="txt--padrao12 txt--bold">3 divisões (máx.)</p>
                                <img src="<? echo $images ?>grafismos/desk/Divisoes/Grupo 6656@2x.png" alt="">
                            </div>

                            <span class="switch">
                                <span class="circulo"></span>
                            </span>
                        </div>
                    </div>

                    <div class="ideia">
                        <div class="destaque-ideia">
                            <p class="txt--padrao12">
                                Não exceda o limite de 3 divisões, ok?
                            </p>
                        </div>
                    </div>
                </article>
            </section>


            <section id="sessao6">
                <article>
                    <p class="txt--padrao40 txt--bold">Combinações <br>de cores</p>
                    <p class="txt--padrao12 pos-titulo">
                        Da combinação de diferentes grafismos com as cores principais e secundárias, temos ingredientes para uma comunicação versátil e consistente.
                    </p>

                    <div class="composicao-wrapper grid--4linhas-auto">

                        <div class="wrapper-box grid--2colunas">
                            <div class="esq">
                                <p>CANTUSTORE</p>
                            </div>
                            <div class="dir">
                                <div class="wrapper-blocos">
                                    <img src="<? echo $images ?>grafismos/desk/Combinacoes/Grupo 6665@2x.png" alt="">
                                    <img src="<? echo $images ?>grafismos/desk/Combinacoes/Grupo 6670@2x.png" alt="">
                                    <img src="<? echo $images ?>grafismos/desk/Combinacoes/Grupo 6682@2x.png" alt="">
                                    <img src="<? echo $images ?>grafismos/desk/Combinacoes/Grupo 6676@2x.png" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="wrapper-box grid--2colunas">
                            <div class="esq">
                                <p>PNEUSTORE</p>
                            </div>
                            <div class="dir">
                                <div class="wrapper-blocos">
                                    <img src="<? echo $images ?>grafismos/desk/Combinacoes/Grupo 6688@2x.png" alt="">
                                    <img src="<? echo $images ?>grafismos/desk/Combinacoes/Grupo 6699@2x.png" alt="">
                                    <img src="<? echo $images ?>grafismos/desk/Combinacoes/Grupo 6699@2x.png" alt="">
                                    <img src="<? echo $images ?>grafismos/desk/Combinacoes/Grupo 6710@2x.png" alt="">
                                    <img src="<? echo $images ?>grafismos/desk/Combinacoes/Grupo 6722@2x.png" alt="">
                                    <img src="<? echo $images ?>grafismos/desk/Combinacoes/Grupo 6694@2x.png" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="wrapper-box grid--2colunas">
                            <div class="esq">
                                <p>CANTUPNEUS</p>
                            </div>
                            <div class="dir">
                                <div class="wrapper-blocos">
                                    <img src="<? echo $images ?>grafismos/desk/Combinacoes/Grupo 6734@2x.png" alt="">
                                    <img src="<? echo $images ?>grafismos/desk/Combinacoes/Grupo 6739@2x.png" alt="">
                                    <img src="<? echo $images ?>grafismos/desk/Combinacoes/Grupo 6745@2x.png" alt="">
                                    <img src="<? echo $images ?>grafismos/desk/Combinacoes/Grupo 6716@2x.png" alt="">
                                    <img src="<? echo $images ?>grafismos/desk/Combinacoes/Grupo 6722@2x.png" alt="">
                                </div>
                            </div>
                        </div>

                    </div>
                </article>
            </section>


            <section id="sessao7">
                <article>
                    <p class="txt--padrao40">Interação com produto</p>
                    <p class="txt--padrao12 pos-titulo">
                        Acompanhando a orientação da perspectivado
                        do produto, ampliam a sensação de movimento.
                        Como um caminho sendo trilhado.
                    </p>

                    <div class="wrapper">
                        <div class="bloco esq">
                            <div class="wrapper-boxes">
                                <div class="box">
                                    <img class="linha1" src="<? echo $images ?>grafismos/desk/Interacao/Grupo 6766@2x.png" alt="">

                                </div>

                                <div class="box">
                                    <img class="linha1" src="<? echo $images ?>grafismos/desk/Interacao/Grupo 6752@2x.png" alt="">
                                </div>

                                <div class="box">
                                    <img class="linha1" src="<? echo $images ?>grafismos/desk/Interacao/Grupo 6757@2x.png" alt="">
                                </div>
                                <div class="txt">
                                    <p class="txt--padrao12">Grafismo com produto na perspectiva.</p>
                                </div>
                            </div>
                        </div>

                        <div class="bloco dir">
                            <div class="wrapper-boxes">
                                <div class="box">
                                    <img class="linha1" src="<? echo $images ?>grafismos/desk/Interacao/Grupo 6772@2x.png" alt="">
                                    <div class="txt">
                                        <p class="txt--padrao12">Grafismo com produto<br> na vista lateral.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </section>


            <section id="sessao8">
                <article>
                    <p class="txt--padrao40">Sólidos</p>
                    <p class="txt--padrao12 pos-titulo">
                        Podemos expandir o chanfro do grafismo
                        para criar os sólidos, áreas para aplicar
                        imagem ou conteúdo com respiro.
                    </p>

                    <div class="wrapper">
                        <div class="box">
                            <img class="estado estado1" src="<? echo $images ?>grafismos/desk/Solidos/estado1.png" alt="">
                            <img class="estado estado1-hover" src="<? echo $images ?>grafismos/desk/Solidos/estado1-hover.png" alt="">
                            <img class="estado estado2" src="<? echo $images ?>grafismos/desk/Solidos/estado2.png" alt="">
                        </div>
                        <div class="box">
                            <img class="" src="<? echo $images ?>grafismos/desk/Solidos/Grupo 6818@2x.png" alt="">
                        </div>
                        <div class="box">
                            <img class="" src="<? echo $images ?>grafismos/desk/Solidos/Grupo 6790@2x.png" alt="">
                        </div>
                    </div>
                </article>
            </section>


            <section id="sessao9">
                <article>
                    <p class="txt--padrao40">Usos incorretos</p>

                    <div class="wrapper">
                        <div class="box">
                            <img class="" src="<? echo $images ?>grafismos/desk/Usos/Grupo 7101@2x.png" alt="">
                            <p class="txt--padrao12">
                                Não combine diferentes orientações
                                na mesma composição.
                            </p>
                        </div>
                        <div class="box">
                            <img class="" src="<? echo $images ?>grafismos/desk/Usos/Grupo 7102@2x.png" alt="">
                            <p class="txt--padrao12">
                                Não aplique diferentes cores na mesma faixa.
                            </p>
                        </div>
                        <div class="box">
                            <img class="" src="<? echo $images ?>grafismos/desk/Usos/Grupo 7103@2x.png" alt="">
                            <p class="txt--padrao12">
                                Não misture diferentes espessura de faixas.
                            </p>
                        </div>
                    </div>
                </article>
            </section>


            <section id="sessao10">
                <article>
                    <p class="txt--padrao40">Para se inspirar</p>

                    <div class="wrapper slick">
                        <img src="<? echo $images ?>pranchas/Atendimento parceiro.png" alt="">
                        <img src="<? echo $images ?>pranchas/Aro18.png" alt="">
                        <img src="<? echo $images ?>pranchas/Pessoas e negocios.png" alt="">
                        <img src="<? echo $images ?>pranchas/Yokohama.png" alt="">
                        <img src="<? echo $images ?>pranchas/Aro.png" alt="">
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
        $('.link-abre:eq(5)').addClass('active');
    </script>
</body>

</html>