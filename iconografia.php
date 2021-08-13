<!DOCTYPE HTML>
<html>

<head>
    <?php include 'assets/config.php'; ?>
    <?php include 'assets/head.php'; ?>

    <?
    $paginaAtual = 'Iconografia';
    $tituloPagina = $paginaAtual . " - " . $empresa;
    ?>

    <title><? echo $tituloPagina ?></title>
</head>

<body id="iconografia">

    <div class="container">

        <?php include 'assets/menu.php'; ?>

        <main>
            <header class="topobg">
                <div class="pelicula"></div>
                <article>
                    <h1>Iconografia</h1>
                </article>
            </header>

            <section id="sessao1">
                <article>
                    <p class="txt--padrao40">Deck</p>
                    <img src="<? echo $images ?>iconografia/Deck/desk/icones.png" alt="">
                </article>
            </section>

            <section id="sessao2">
                <article>
                    <p class="txt--padrao40 proximo">Boas práticas</p>
                    <p class="txt--padrao12 pos-titulo">
                        Nosso sistema possuí um deck de ícones variados. Eles transmitem mensagens
                        de maneira simplificada e podem auxiliar no destaque das informações.
                        <br><br>
                        Para criar novos ícones, use o grid disponível no deck para download
                        no final da página e siga as recomendações abaixo:
                    </p>

                    <div class="wrapper">
                        <div class="box">
                            <img src="<? echo $images ?>iconografia/Boas praticas/desk/Grupo 6352@2x.png" alt="">
                            <p class="txt--padrao12">
                                Cantos arredondados.
                            </p>
                        </div>
                        <div class="box">
                            <img src="<? echo $images ?>iconografia/Boas praticas/desk/Grupo 6361@2x.png" alt="">
                            <p class="txt--padrao12">
                                Sem perspectivas, apenas sobreposição se necessário.
                            </p>
                        </div>
                        <div class="box">
                            <img src="<? echo $images ?>iconografia/Boas praticas/desk/Grupo 6373@2x.png" alt="">
                            <p class="txt--padrao12">
                                Mesma espessura de linha.
                            </p>
                        </div>
                        <div class="box">
                            <img src="<? echo $images ?>iconografia/Boas praticas/desk/Grupo 6391@2x.png" alt="">
                            <p class="txt--padrao12">
                                Coerência visual.
                            </p>
                        </div>
                    </div>
                </article>
            </section>

            <section id="sessao3">
                <article>
                    <p class="txt--padrao40">Sobre fundos coloridos</p>
                    <p class="txt--padrao12 pos-titulo">
                        Para garantir o melhor contraste, siga as combinações de cores demonstradas abaixo:
                    </p>

                    <div class="wrapper">
                        <div class="esq">
                            <img src="<? echo $images ?>iconografia/Sobre fundos/desk/Grupo 7108@2x.png" alt="">
                            <img src="<? echo $images ?>iconografia/Sobre fundos/desk/Grupo 7107@2x.png" alt="">
                            <img src="<? echo $images ?>iconografia/Sobre fundos/desk/Grupo 7106@2x.png" alt="">
                        </div>
                        <div class="dir">
                            <img src="<? echo $images ?>iconografia/Sobre fundos/desk/Grupo 7110@2x.png" alt="">
                            <img src="<? echo $images ?>iconografia/Sobre fundos/desk/Grupo 7109@2x.png" alt="">
                        </div>
                    </div>

                    <div class="ideia">
                        <div class="destaque-ideia">
                            <p class="txt--padrao12">Evite trazer ícones em diferentes cores na mesma peça ok?</p>
                        </div>
                    </div>
                </article>
            </section>

            <section id="sessao4">
                <article>
                    <p class="txt--padrao40">O que evitar</p>

                    <div class="wrapper">
                        <div class="box">
                            <img src="<? echo $images ?>iconografia/Evitar/desk/Grupo 7092@2x.png" alt="">
                            <p class="txt--padrao12">Perspectiva ou profundidade.</p>
                        </div>
                        <div class="box">
                            <img src="<? echo $images ?>iconografia/Evitar/desk/Grupo 7093@2x.png" alt="">
                            <p class="txt--padrao12">Diferentes espessuras de linha.</p>
                        </div>
                        <div class="box">
                            <img src="<? echo $images ?>iconografia/Evitar/desk/Grupo 7095@2x.png" alt="">
                            <p class="txt--padrao12">Formas sólidas e diferentes cores.</p>
                        </div>
                        <div class="box">
                            <img src="<? echo $images ?>iconografia/Evitar/desk/Grupo 7097@2x.png" alt="">
                            <p class="txt--padrao12">Excesso de elementos e/ou detalhes.</p>
                        </div>
                        <div class="box">
                            <img src="<? echo $images ?>iconografia/Evitar/desk/Grupo 7098@2x.png" alt="">
                            <p class="txt--padrao12">Espessura de linha muito fina.</p>
                        </div>
                        <div class="box">
                            <img src="<? echo $images ?>iconografia/Evitar/desk/Grupo 7099@2x.png" alt="">
                            <p class="txt--padrao12">Estilos cartunizados.</p>
                        </div>
                    </div>
                </article>
            </section>

            <section id="sessao5">
                <article>
                    <p class="txt--padrao40">Para se inspirar</p>

                    <div class="wrapper slick">
                        <img src="<? echo $images ?>pranchas/Parceiros cantu.png" alt="">
                        <img src="<? echo $images ?>pranchas/Dna de lider.png" alt="">
                        <img src="<? echo $images ?>pranchas/Eixo.png" alt="">
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
        $('.link-abre:eq(4)').addClass('active');
    </script>
</body>

</html>