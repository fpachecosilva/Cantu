<!DOCTYPE HTML>
<html>

<head>
    <?php include 'assets/config.php'; ?>
    <?php include 'assets/head.php'; ?>

    <?
    $paginaAtual = 'Downloads';
    $tituloPagina = $paginaAtual . " - " . $empresa;
    ?>

    <title><? echo $tituloPagina ?></title>
</head>

<body id="downloads">

    <div class="container">

        <?php include 'assets/menu.php'; ?>

        <main>
            <section id="downloadspage">
                <article>

                    <div class="box">
                        <p class="txt--padrao20">Grafismos</p>
                        <hr>

                        <div class="links">
                            <a href="assets/download/grafismos/AF_RGB_Grafismos.zip">AF_RGB_Grafismos.zip</a>
                        </div>
                    </div>

                    <div class="box">
                        <p class="txt--padrao20">Iconografia</p>
                        <hr>

                        <div class="links">
                            <a href="assets/download/iconografia/AF_CantuStore_RGB_DeckIcones.zip">AF_CantuStore_RGB_DeckIcones.zip</a>
                        </div>
                    </div>

                    <div class="box">
                        <p class="txt--padrao20">Logotipos e símbolos</p>
                        <hr>

                        <div class="links">
                            <a href="assets/download/logo/AF_CantuPneus_VersoesMarca.zip">AF_CantuPneus_VersoesMarca.zip</a>
                            <a href="assets/download/logo/AF_CantuStore_LockupInternos.zip">AF_CantuStore_LockupInternos.zip</a>
                            <a href="assets/download/logo/AF_CantuStore_VersoesMarca.zip">AF_CantuStore_VersoesMarca.zip</a>
                            <a href="assets/download/logo/AF_PackSimbolos.zip">AF_PackSimbolos.zip</a>
                            <a href="assets/download/logo/AF_PneuStore_VersoesMarca.zip">AF_PneuStore_VersoesMarca.zip</a>
                        </div>
                    </div>

                    <div class="box">
                        <p class="txt--padrao20">Paleta</p>
                        <hr>

                        <div class="links">
                            <a href="assets/download/paleta/AF_CantuStore_Cores.zip">AF_CantuStore_Cores.zip</a>
                        </div>
                    </div>
                    

                </article>
            </section>

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