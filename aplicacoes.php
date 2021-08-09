<!DOCTYPE HTML>
<html>

<head>
    <?php include 'assets/config.php'; ?>
    <?php include 'assets/head.php'; ?>

    <?
    $paginaAtual = 'Aplicações';
    $tituloPagina = $paginaAtual . " - " . $empresa;
    ?>

    <title><? echo $tituloPagina ?></title>
</head>

<body id="aplicacoes">

    <div class="container">

        <?php include 'assets/menu.php'; ?>

        <main>
            <header class="topobg">
                <div class="pelicula"></div>
                <article>
                    <h1>Aplicações</h1>
                </article>
            </header>


            <section id="sessao1">
                <article>
                    <div class="wrapper">
                        <p class="txt--padrao40">CantuStore</p>
                        <div class="wrapper slick">
                            <img src="<? echo $images ?>pranchas/Faixa.png" alt="">
                            <img src="<? echo $images ?>pranchas/Conteiner.png" alt="">
                            <img src="<? echo $images ?>pranchas/Look.png" alt="">
                            <img src="<? echo $images ?>pranchas/Abrimos caminhos.png" alt="">
                            <img src="<? echo $images ?>pranchas/Nasdaq.png" alt="">
                            <img src="<? echo $images ?>pranchas/Hub.png" alt="">
                            <img src="<? echo $images ?>pranchas/Roda.png" alt="">
                        </div>
                    </div>

                    <div class="wrapper">
                        <p class="txt--padrao40">PneuStore</p>
                        <div class="wrapper slick">
                            <img src="<? echo $images ?>pranchas/Carro.png" alt="">
                            <img src="<? echo $images ?>pranchas/Yokohama.png" alt="">
                            <img src="<? echo $images ?>pranchas/Posts.png" alt="">
                            <img src="<? echo $images ?>pranchas/Aro18.png" alt="">
                        </div>
                    </div>

                    <div class="wrapper">
                        <p class="txt--padrao40">CantuPneus</p>
                        <div class="wrapper slick">
                            <img src="<? echo $images ?>pranchas/Camisa.png" alt="">
                            <img src="<? echo $images ?>pranchas/Aro.png" alt="">
                            <img src="<? echo $images ?>pranchas/Material de vendas.png" alt="">
                            <img src="<? echo $images ?>pranchas/Stories.png" alt="">
                        </div>
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
        $('.link-abre:eq(7)').addClass('active');
    </script>
</body>

</html>