<!DOCTYPE HTML>
<html>

<head>
    <?php include 'assets/config.php'; ?>
    <?php include 'assets/head.php'; ?>

    <?
    $paginaAtual = 'Tipografia';
    $tituloPagina = $paginaAtual . " - " . $empresa;
    ?>

    <title><? echo $tituloPagina ?></title>
</head>

<body id="tipografia">

    <div class="container">

        <?php include 'assets/menu.php'; ?>

        <main>
            <header class="topobg">
                <div class="pelicula"></div>
                <article>
                    <h1>Tipografia</h1>
                </article>
            </header>

            <section>
                <article>
                    <p class="txt--padrao20 bold">Hackman é a fonte para nossos materiais institucionais de comunicação.</p>
                </article>
            </section>

            <section id="sessao1">
                <article>
                    <div class="esq">
                        <img src="<? echo $images ?>/seta-hackman.svg" alt="">
                    </div>

                    <div class="dir">
                        <p class="txt--padrao32">Hackman</p>
                        <p class="txt--padrao17">Font</p>

                        <div class="wrapper">
                            <div class="linha">
                                <div class="box light">
                                    <p class="titulo">Light</p>
                                    <p>
                                        abcdefghijklmnopqrstuvwxyz<br>
                                        ABCDEFGHIJKLMNOPQRSTUVWXYZ<br>
                                        1234567890&%@#
                                    </p>
                                </div>
                                <div class="box">
                                    <p class="titulo">Regular</p>
                                    <p>
                                        abcdefghijklmnopqrstuvwxyz<br>
                                        ABCDEFGHIJKLMNOPQRSTUVWXYZ<br>
                                        1234567890&%@#
                                    </p>
                                </div>
                                <div class="box medium">
                                    <p class="titulo">Medium</p>
                                    <p>
                                        abcdefghijklmnopqrstuvwxyz<br>
                                        ABCDEFGHIJKLMNOPQRSTUVWXYZ<br>
                                        1234567890&%@#
                                    </p>
                                </div>
                            </div>
                            <div class="linha">
                                <div class="box demibold">
                                    <p class="titulo">DemiBold</p>
                                    <p>
                                        abcdefghijklmnopqrstuvwxyz<br>
                                        ABCDEFGHIJKLMNOPQRSTUVWXYZ<br>
                                        1234567890&%@#
                                    </p>
                                </div>
                                <div class="box bold">
                                    <p class="titulo">Bold</p>
                                    <p>
                                        abcdefghijklmnopqrstuvwxyz<br>
                                        ABCDEFGHIJKLMNOPQRSTUVWXYZ<br>
                                        1234567890&%@#
                                    </p>
                                </div>
                                <div class="box extrabold">
                                    <p class="titulo">ExtraBold</p>
                                    <p>
                                        abcdefghijklmnopqrstuvwxyz<br>
                                        ABCDEFGHIJKLMNOPQRSTUVWXYZ<br>
                                        1234567890&%@#
                                    </p>
                                </div>
                            </div>

                            <div class="pesos">
                                <p class="txt--padrao12 txt--bold">PESOS MAIS UTILIZADOS</p>
                                <p class="tags medium">Medium</p>
                                <p class="tags demi">Demibold</p>
                                <p class="tags bold">Bold</p>
                                <p class="tags extrabold">Extrabold</p>
                                <p class="tags">+ Itálicos</p>
                            </div>
                        </div>

                    </div>
                </article>
            </section>

            <section id="sessao2">
                <article>
                    <p class="txt--padrao40 proximo">Hierarquia</p>
                    <p class="txt--padrao12 pos-titulo">
                        Para mostrar o caminho, devemos ter clareza no nosso discurso.
                        E uma boa relação de pesos e tamanhos ajuda a estabelecer as
                        camadas de importância de um conteúdo.
                    </p>

                    <div class="composicao-wrapper grid--4linhas-auto">

                        <div class="wrapper-box grid--2colunas">
                            <div class="esq">
                                <p>Retranca</p>
                                <p>Bold 16pt</p>
                            </div>
                            <div class="dir">
                                <p>SOBRE NÓS</p>
                            </div>
                        </div>

                        <div class="wrapper-box grid--2colunas">
                            <div class="esq">
                                <p>Título</p>
                                <p>ExtraBold 40pt</p>
                            </div>
                            <div class="dir">
                                <p>Este é um bom título com destaque</p>
                            </div>
                        </div>

                        <div class="wrapper-box grid--2colunas">
                            <div class="esq">
                                <p>Subtítulo</p>
                                <p>DemiBold 32pt</p>
                            </div>
                            <div class="dir">
                                <p class="">E aqui um subtítulo</p>
                            </div>
                        </div>

                        <div class="wrapper-box grid--2colunas">
                            <div class="esq">
                                <p>Texto corrido</p>
                                <p>Medium 24pt</p>
                            </div>
                            <div class="dir">
                                <p>
                                    Veja como uma boa proporção de
                                    tamanhos e pesos dos caracteres
                                    deixa a informação organizada
                                    e a leitura fluida.
                                </p>
                            </div>
                        </div>

                        <div class="wrapper-box grid--2colunas">
                            <div class="esq">
                                <p>Texto destaque</p>
                                <p>ExtraBold 24pt</p>
                            </div>
                            <div class="dir">
                                <p>
                                    cantupneus.com.br
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="ideia">
                        <div class="destaque-ideia">
                            <p class="txt--padrao12">Dica! Aqui usamos uma relação de proporção de 8 em 8pt.</p>
                        </div>
                    </div>
                </article>
            </section>

            <section id="sessao3">
                <article>
                    <div class="wrapper-legenda">
                        <div class="titulos">
                            <p class="txt--padrao40 proximo">Acessibilidade</p>
                            <p class="txt--padrao12 pos-titulo">
                                Para garantir a legibilidade e contraste adequados em ambientes digitais, recomendamos as combinações de cor abaixo de acordo com o tamanho do texto.
                                <strong>E lembre-se:</strong> evite as combinações que não estão previstas aqui, ok?
                            </p>
                        </div>
                        <div class="legenda">
                            <p class="txt--padrao20 txt--bold">Legenda</p>
                            <div class="wrapper">
                                <div class="esq">
                                    <p><strong>AAA:</strong> Constrate ideal</p>
                                    <p><strong>AA</strong> Contraste suficiente</p>
                                </div>
                                <div class="dir">
                                    <p><strong>Títulos e destaques:</strong> Maior que 18px</p>
                                    <p><strong>Textos menores:</strong> Menor que 12px</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bloco-acessibilidade">
                        <div class="esq">
                            <div class="bloco">
                                <div class="legenda">
                                    <p class="txt-maior">AAA</p>
                                    <p class="txt-menor">AAA</p>
                                </div>
                                <div class="box bgroxo white">
                                    <div>
                                        <p class="txt-maior">Para títulos na cor branca.</p>
                                        <p class="txt-menor">Para textos menores na cor branca.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bloco">
                                <div class="legenda">
                                    <p class="txt-maior">AAA</p>
                                    <p class="txt-menor">AAA</p>
                                </div>
                                <div class="box bgroxo blue">
                                    <div>
                                        <p class="txt-maior">Para títulos na cor azul.</p>
                                        <p class="txt-menor">Para textos menores na cor azul.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bloco">
                                <div class="legenda">
                                    <p class="txt-maior">AAA</p>
                                    <p class="txt-menor">AAA</p>
                                </div>
                                <div class="box bgroxo yellow">
                                    <div>
                                        <p class="txt-maior">Para títulos na cor amarela.</p>
                                        <p class="txt-menor">Para textos menores na cor amarela.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bloco">
                                <div class="legenda">
                                    <p class="txt-maior">AAA</p>
                                    <p class="txt-menor">AAA</p>
                                </div>
                                <div class="box bgroxo green">
                                    <div>
                                        <p class="txt-maior">Para títulos na cor verde.</p>
                                        <p class="txt-menor">Para textos menores na cor verde.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bloco">
                                <div class="legenda">
                                    <p class="txt-maior">AA</p>
                                </div>
                                <div class="box bgroxo orange">
                                    <div>
                                        <p class="txt-maior">Para títulos na cor laranja.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bloco">
                                <div class="legenda">
                                    <p class="txt-maior">AAA</p>
                                    <p class="txt-menor">AAA</p>
                                </div>
                                <div class="box bggreen roxo">
                                    <div>
                                        <p class="txt-maior">Para títulos na cor roxa.</p>
                                        <p class="txt-menor">Para textos menores na cor roxa.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dir">
                            <div class="bloco">
                                <div class="legenda">
                                    <p class="txt-maior">AAA</p>
                                    <p class="txt-menor">AAA</p>
                                </div>
                                <div class="box bgwhite roxo">
                                    <div>
                                        <p class="txt-maior">Para títulos na cor roxa.</p>
                                        <p class="txt-menor">Para textos menores na cor roxa.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bloco">
                                <div class="legenda">
                                    <p class="txt-maior">AA</p>
                                </div>
                                <div class="box bgwhite roxoclaro">
                                    <div>
                                        <p class="txt-maior">Para títulos na cor violeta.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bloco">
                                <div class="legenda">
                                    <p class="txt-maior">AA</p>
                                </div>
                                <div class="box bgroxoclaro white">
                                    <div>
                                        <p class="txt-maior">Para títulos na cor amarela.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bloco">
                                <div class="legenda">
                                    <p class="txt-maior">AA</p>
                                </div>
                                <div class="box bgroxoclaro yellow">
                                    <div>
                                        <p class="txt-maior">Para títulos na cor verde.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bloco">
                                <div class="legenda">
                                    <p class="txt-maior">AAA</p>
                                    <p class="txt-menor">AAA</p>
                                </div>
                                <div class="box bgblue roxo">
                                    <div>
                                        <p class="txt-maior">Para títulos na cor laranja.</p>
                                        <p class="txt-menor">Para textos menores na cor roxa.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bloco">
                                <div class="legenda">
                                    <p class="txt-maior">AAA</p>
                                    <p class="txt-menor">AAA</p>
                                </div>
                                <div class="box bgyellow roxo">
                                    <div>
                                        <p class="txt-maior">Para títulos na cor roxa.</p>
                                        <p class="txt-menor">Para textos menores na cor roxa.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </article>
            </section>

            <section id="sessao4">
                <article>
                    <div class="esq">
                        <p class="txt--padrao40 proximo">Tipografia<br> de sistema</p>
                        <p class="txt--padrao12 pos-titulo">
                            Quando não for possível usar as fontes institucionais, podemos optar pela fonte de apoio Verdana.
                            <br><br>
                            Nativa de diversos sistemas operacionais,
                            use em materiais programados em HTML, como assinaturas de e-mail, ou documentos que serão abertos por terceiros, como planilhas e apresentações.
                        </p>
                    </div>

                    <div class="dir">
                        <p class="txt--padrao32">Verdana</p>

                        <div class="wrapper">
                            <div class="linha">
                                <div class="box">
                                    <p class="titulo">Regular</p>
                                    <p>
                                        abcdefghijklmnopqrstuvwxyz<br>
                                        ABCDEFGHIJKLMNOPQRSTUVWXYZ<br>
                                        1234567890&%@#
                                    </p>
                                </div>
                                <div class="box italic">
                                    <p class="titulo">Italic</p>
                                    <p>
                                        abcdefghijklmnopqrstuvwxyz<br>
                                        ABCDEFGHIJKLMNOPQRSTUVWXYZ<br>
                                        1234567890&%@#
                                    </p>
                                </div>
                            </div>

                            <div class="linha">
                                <div class="box bold">
                                    <p class="titulo">Bold</p>
                                    <p>
                                        abcdefghijklmnopqrstuvwxyz<br>
                                        ABCDEFGHIJKLMNOPQRSTUVWXYZ<br>
                                        1234567890&%@#
                                    </p>
                                </div>
                                <div class="box italic">
                                    <p class="titulo"><strong>Bold Italic</strong></p>
                                    <p>
                                        <strong>
                                        abcdefghijklmnopqrstuvwxyz<br>
                                        ABCDEFGHIJKLMNOPQRSTUVWXYZ<br>
                                        1234567890&%@#
                                        </strong>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </article>
            </section>

            <section id="sessao5">
                <article>
                    <p class="txt--padrao40">Para se inspirar</p>

                    <div class="wrapper slick">
                        <img src="<? echo $images ?>pranchas/Caminhos.png" alt="">
                        <img src="<? echo $images ?>pranchas/Aro18.png" alt="">
                        <img src="<? echo $images ?>pranchas/Inquieto.png" alt="">
                        <img src="<? echo $images ?>pranchas/Material de Vendas.png" alt="">
                        <img src="<? echo $images ?>pranchas/Roda.png" alt="">
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
        $('.link-abre:eq(3)').addClass('active');
    </script>
</body>

</html>