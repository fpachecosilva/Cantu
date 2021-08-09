<!DOCTYPE HTML>
<html>

<head>
    <?php include 'assets/config.php'; ?>
    <?php include 'assets/head.php'; ?>

    <?
    $paginaAtual = 'Logotipo';
    $tituloPagina = $paginaAtual . " - " . $empresa;
    ?>

    <title><? echo $tituloPagina ?></title>
</head>

<body id="logotipo">

    <div class="container">

        <?php include 'assets/menu.php'; ?>

        <main>
            <header class="topobg">
                <div class="pelicula"></div>
                <article>
                    <h1>Logotipos & Símbolo</h1>
                </article>
            </header>

            <section id="sessao1">
                <article class="grid--2colunas-auto">
                    <p class="txt--padrao20 text--bold">
                        Um logotipo que evoca
                        movimento, proximidade
                        e solidez:
                    </p>
                    <img src="<? echo $images ?>/logo/desk/logo-sessao1.png" alt="">
                </article>
            </section>

            <section id="sessao2">
                <article>
                    <p class="txt--padrao40">Arquitetura</p>
                    <div class="arquitetura">
                        <div class="wrapper">
                            <div class="linha100">
                                <p class="texto">Holding</p>
                                <img src="<? echo $images ?>logo/desk/Arquitetura/logo cantustore horizontal.png" alt="">
                            </div>
                        </div>

                        <div class="wrapper dividido">
                            <div class="linha50">
                                <p class="texto">b2c</p>
                                <img src="<? echo $images ?>logo/desk/Arquitetura/logo pneustore horizontal.png" alt="">
                            </div>
                            <div class="linha50">
                                <p class="texto">b2b</p>
                                <img src="<? echo $images ?>logo/desk/Arquitetura/logo cantupneus horizontal.png" alt="">
                            </div>
                        </div>
                    </div>
                </article>
            </section>

            <section id="sessao3" class="p65-80">
                <article>
                    <p class="txt--padrao40">Versões de marca</p>

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
                                    <div class="wrapper grid--2colunasversoes">
                                        <div class="esq grid--2linhas">
                                            <div class="cima">
                                                <img class="desktopitem" src="<? echo $images ?>logo/desk/Versoes Logo/logo cantustore horizontal@2x.png" alt="">
                                                <img class="mobileitem" src="<? echo $images ?>logo/desk/Versoes Logo/logo cantustore horizontal@2x.png" alt="">
                                                <p class="txt--padrao12">Versão preferencial positiva</p>
                                            </div>

                                            <div class="baixo">
                                                <div>
                                                    <img class="desktopitem" src="<? echo $images ?>logo/desk/Versoes Logo/logo cantustore horizontal-1@2x.png" alt="">
                                                    <img class="mobileitem" src="<? echo $images ?>logo/desk/Versoes Logo/logo cantustore horizontal-1@2x.png" alt="">
                                                    <p class="txt--padrao12 negativo">Versão preferencial negativa</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="dir grid--2linhas">
                                            <div class="cima">
                                                <img class="desktopitem" src="<? echo $images ?>logo/desk/Versoes Logo/logo cantustore vertical@2x.png" alt="">
                                                <img class="mobileitem" src="<? echo $images ?>logo/desk/Versoes Logo/logo cantustore vertical@2x.png" alt="">
                                                <p class="txt--padrao12">Versão vertical positiva</p>
                                            </div>

                                            <div class="baixo">
                                                <div>
                                                    <img class="desktopitem" src="<? echo $images ?>logo/desk/Versoes Logo/logo cantustore vertical-1@2x.png" alt="">
                                                    <img class="mobileitem" src="<? echo $images ?>logo/desk/Versoes Logo/logo cantustore vertical-1@2x.png" alt="">
                                                    <p class="txt--padrao12 negativo">Versão vertical negativa</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab pneustore">
                                    <p class="subtitulo mobileitem">PneuStore</p>
                                    <div class="wrapper grid--2colunasversoes">
                                        <div class="esq grid--2linhas">
                                            <div class="cima">
                                                <img class="desktopitem" src="<? echo $images ?>logo/desk/Versoes Logo/logo pneustore horizontal@2x.png" alt="">
                                                <img class="mobileitem" src="<? echo $images ?>logo/desk/Versoes Logo/logo pneustore horizontal@2x.png" alt="">
                                                <p class="txt--padrao12">Versão preferencial positiva</p>
                                            </div>

                                            <div class="baixo">
                                                <div>
                                                    <img class="desktopitem" src="<? echo $images ?>logo/desk/Versoes Logo/logo pneustore horizontal_neg@2x.png" alt="">
                                                    <img class="mobileitem" src="<? echo $images ?>logo/desk/Versoes Logo/logo pneustore horizontal_neg@2x.png" alt="">
                                                    <p class="txt--padrao12 negativo">Versão preferencial negativa</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="dir grid--2linhas">
                                            <div class="cima">
                                                <img class="desktopitem" src="<? echo $images ?>logo/desk/Versoes Logo/logo pneustore vertical@2x.png" alt="">
                                                <img class="mobileitem" src="<? echo $images ?>logo/desk/Versoes Logo/logo pneustore vertical@2x.png" alt="">
                                                <p class="txt--padrao12">Versão vertical positiva</p>
                                            </div>

                                            <div class="baixo">
                                                <div>
                                                    <img class="desktopitem" src="<? echo $images ?>logo/desk/Versoes Logo/logo pneustore vertical-1@2x.png" alt="">
                                                    <img class="mobileitem" src="<? echo $images ?>logo/desk/Versoes Logo/logo pneustore vertical-1@2x.png" alt="">
                                                    <p class="txt--padrao12 negativo">Versão vertical negativa</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab cantupneus">
                                    <p class="subtitulo mobileitem">CantuPneus</p>
                                    <div class="wrapper grid--2colunasversoes">
                                        <div class="esq grid--2linhas">
                                            <div class="cima">
                                                <img class="desktopitem" src="<? echo $images ?>logo/desk/Versoes Logo/logo cantupneus horizontal@2x" alt="">
                                                <img class="mobileitem" src="<? echo $images ?>logo/desk/Versoes Logo/logo cantupneus horizontal@2x" alt="">
                                                <p class="txt--padrao12">Versão preferencial positiva</p>
                                            </div>

                                            <div class="baixo">
                                                <div>
                                                    <img class="desktopitem" src="<? echo $images ?>logo/desk/Versoes Logo/logo cantupneus horizontal-1@2x.png" alt="">
                                                    <img class="mobileitem" src="<? echo $images ?>logo/desk/Versoes Logo/logo cantupneus horizontal-1@2x.png" alt="">
                                                    <p class="txt--padrao12 negativo">Versão preferencial negativa</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="dir grid--2linhas">
                                            <div class="cima">
                                                <img class="desktopitem" src="<? echo $images ?>logo/desk/Versoes Logo/logo cantupneus vertical-1@2x.png" alt="">
                                                <img class="mobileitem" src="<? echo $images ?>logo/desk/Versoes Logo/logo cantupneus vertical-1@2x.png" alt="">
                                                <p class="txt--padrao12">Versão vertical positiva</p>
                                            </div>

                                            <div class="baixo">
                                                <div>
                                                    <img class="desktopitem" src="<? echo $images ?>logo/desk/Versoes Logo/logo cantupneus vertical@2x.png" alt="">
                                                    <img class="mobileitem" src="<? echo $images ?>logo/desk/Versoes Logo/logo cantupneus vertical@2x.png" alt="">
                                                    <p class="txt--padrao12 negativo">Versão vertical negativa</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                </article>
            </section>

            <div class="ideia solto">
                <div class="destaque-ideia">
                    <p class="txt--padrao12">
                        Os logotipos na versão positiva podem ser aplicados sobre fundo branco ou nas cores<br>
                        de suas respectivas marcas. Para fundos escuros ou vibrantes, use a versão negativa.
                    </p>
                </div>
            </div>

            <section id="sessao4">
                <article>
                    <p class="txt--padrao40 proximo">Redução máxima</p>
                    <p class="txt--padrao12 pos-titulo">
                        Define os menores tamanhos que a marca pode ter sem comprometer
                        os detalhes ou legibilidade, tanto em materiais digitais quanto impressos.
                    </p>

                    <div class="baixo modulo-imagens-com-texto">
                        <div>
                            <img src="<? echo $images ?>logo/desk/Reducao Max/Grupo 7114@2x.png" alt="">

                            <div class="textos-inline">
                                <p class="txt--padrao12">Impresso: H = 6 mm</p>
                                <p class="txt--padrao12">Digital: H = 64 px</p>
                            </div>
                        </div>

                        <div>
                            <img src="<? echo $images ?>logo/desk/Reducao Max/Grupo 7115@2x.png" alt="">

                            <div class="textos-inline">
                                <p class="txt--padrao12">Impresso: H = 6 mm</p>
                                <p class="txt--padrao12">Digital: H = 64 px</p>
                            </div>
                        </div>

                        <div>
                            <img src="<? echo $images ?>logo/desk/Reducao Max/Grupo 7076@2x.png" alt="">

                            <div class="textos-inline">
                                <p class="txt--padrao12">Impresso: H = 6 mm</p>
                                <p class="txt--padrao12">Digital: H = 64 px</p>
                            </div>
                        </div>

                        <div>
                            <img src="<? echo $images ?>logo/desk/Reducao Max/Grupo 7116@2x.png" alt="">

                            <div class="textos-inline">
                                <p class="txt--padrao12">Impresso: H = 6 mm</p>
                                <p class="txt--padrao12">Digital: H = 64 px</p>
                            </div>
                        </div>

                        <div>
                            <img src="<? echo $images ?>logo/desk/Reducao Max/Grupo 7077.png" alt="">

                            <div class="textos-inline">
                                <p class="txt--padrao12">Impresso: H = 6 mm</p>
                                <p class="txt--padrao12">Digital: H = 64 px</p>
                            </div>
                        </div>

                        <div>
                            <img src="<? echo $images ?>logo/desk/Reducao Max/Grupo 7078.png" alt="">

                            <div class="textos-inline">
                                <p class="txt--padrao12">Impresso: H = 6 mm</p>
                                <p class="txt--padrao12">Digital: H = 64 px</p>
                            </div>
                        </div>
                    </div>

                    <div class="ideia">
                        <div class="destaque-ideia">
                            <p class="txt--padrao12">
                                <strong>Vale lembrar:</strong> a legibilidade pode variar de acordo com a densidade de pixels
                                na tela ou tipo de substrato no impresso. Por isso, sempre teste a marca antes de aplicá-la.
                            </p>
                        </div>
                    </div>

                </article>
            </section>


            <section id="sessao5">
                <article>
                    <p class="txt--padrao40 proximo">Área de proteção</p>
                    <p class="txt--padrao12 pos-titulo">
                        Garante que as marcas tenham um espaço seguro em ambientes
                        com interferências visuais, como imagens ou massas de texto.
                        <br><br>
                        <strong>Qualquer objeto deve vir depois da área demarcada, ok?</strong>
                    </p>

                    <img class="principal" src="<? echo $images ?>logo/desk/Area Prot/Medidas area de proteção@2x.png" alt="">

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
                                    <div class="wrapper">
                                        <img class="esq" src="<? echo $images ?>logo/desk/Area Prot/logo-referencia-medida@2x.png" alt="">
                                        <img class="dir" src="<? echo $images ?>logo/desk/Area Prot/01@2x.png" alt="">
                                    </div>
                                </div>

                                <div class="tab pneustore">
                                    <p class="subtitulo mobileitem">PneuStore</p>
                                    <div class="wrapper">
                                        <img class="esq" src="<? echo $images ?>logo/desk/Area Prot/05@2x.png" alt="">
                                        <img class="dir" src="<? echo $images ?>logo/desk/Area Prot/02@2x.png" alt="">
                                    </div>
                                </div>

                                <div class="tab cantupneus">
                                    <p class="subtitulo mobileitem">CantuPneus</p>
                                    <div class="wrapper">
                                        <img class="esq" src="<? echo $images ?>logo/desk/Area Prot/06@2x.png" alt="">
                                        <img class="dir" src="<? echo $images ?>logo/desk/Area Prot/03@2x.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </section>

            <section id="sessao6">
                <article>
                    <p class="txt--padrao40 proximo">Aplicação sobre fundos</p>

                    <div class="wrapper">
                        <div class="esq">
                            <p class="titulo">Sobre massas de cor</p>
                            <img src="<? echo $images ?>logo/desk/Aplicacao/Grupo 7079@2x.png" alt="">
                            <img src="<? echo $images ?>logo/desk/Aplicacao/Grupo 7082@2x.png" alt="">
                            <p class="txt--padrao12 texto">
                                A prioridade é que cada logotipo seja aplicado sobre as cores de suas
                                respectivas paletas, usando as versões positiva ou negativa de acordo
                                com o contraste de fundo.
                            </p>
                        </div>
                        <div class="dir">
                            <p class="titulo">Sobre fundos fotográficos</p>
                            <img src="<? echo $images ?>logo/desk/Aplicacao/Grupo 7080@2x.png" alt="">
                            <img src="<? echo $images ?>logo/desk/Aplicacao/Grupo 7081@2x.png" alt="">
                            <p class="txt--padrao12 texto">
                                Para melhor legibilidade sobre fundos fotográficos, busque áreas com baixa
                                interferência visual, texturas ou ruídos. Use as versões positiva ou negativa
                                de acordo com o contraste com o fundo.
                            </p>
                        </div>
                    </div>

                    <div class="ideia">
                        <div class="destaque-ideia">
                            <p class="txt--padrao12">
                                As lógicas também valem para PneuStore e CantuPneus.<br>
                                <strong>Sempre priorize um bom contraste e leitura.</strong>
                            </p>
                        </div>
                    </div>

                </article>
            </section>


            <section id="sessao7">
                <article>
                    <p class="txt--padrao40 proximo">Aplicação escrita</p>
                    <p class="txt--padrao12 pos-titulo">
                        Em textos corridos, use letras maiúsculas e minúsculas
                        para fazer menções as marcas, como nos exemplos abaixo.
                    </p>

                    <div class="wrapper">
                        <img src="<? echo $images ?>logo/desk/Ap Esc/Grupo 7083@2x.png" alt="">
                        <img src="<? echo $images ?>logo/desk/Ap Esc/Grupo 7084@2x.png" alt="">
                        <img src="<? echo $images ?>logo/desk/Ap Esc/Grupo 7085@2x.png" alt="">
                    </div>
                </article>
            </section>



            <section id="sessao8">
                <article>
                    <p class="txt--padrao40">Usos incorretos</p>

                    <div class="grid--3colunas">
                        <div>
                            <img src="<? echo $images ?>logo/desk/Usos incorretos/Grupo 6139@2x.png" alt="">
                            <p class="txt--padrao12">
                                Não distorça as proporções.
                            </p>
                        </div>
                        <div>
                            <img src="<? echo $images ?>logo/desk/Usos incorretos/Grupo 6140@2x.png" alt="">
                            <p class="txt--padrao12">
                                Não altere as cores originais.
                            </p>
                        </div>
                        <div>
                            <img src="<? echo $images ?>logo/desk/Usos incorretos/Grupo 6145@2x.png" alt="">
                            <p class="txt--padrao12">
                                Não aplique efeitos de profundidade ou sombra.
                            </p>
                        </div>
                        <div>
                            <img src="<? echo $images ?>logo/desk/Usos incorretos/Grupo 6141@2x.png" alt="">
                            <p class="txt--padrao12">
                                Não use transparência.
                            </p>
                        </div>
                        <div>
                            <img src="<? echo $images ?>logo/desk/Usos incorretos/Grupo 7086@2x.png" alt="">
                            <p class="txt--padrao12">
                                Não customize com elementos.
                            </p>
                        </div>
                        <div>
                            <img src="<? echo $images ?>logo/desk/Usos incorretos/Retângulo 2039@2x.png" alt="">
                            <p class="txt--padrao12">
                                Não aplique em baixa resolução.
                            </p>
                        </div>
                    </div>
                </article>

                <div class="ideia">
                    <div class="destaque-ideia">
                        <p class="txt--padrao12">
                            As regras também valem para PneuStore e CantuPneus.
                        </p>
                    </div>
                </div>
            </section>


            <section id="sessao9">
                <article>
                    <p class="txt--padrao40">Campanhas &<br> Programas internos</p>
                    <p class="txt--padrao12">
                        Nosso foco e esforço é a construção da marca-mãe, usando nosso sistema visual
                        em todo seu potencial. Por isso, evitamos criar novas ou submarcas, aproveitando
                        ao máximo os elementos já existentes para adequar e diferenciar a comunicação.
                        <br><br>
                        <strong>Veja alguns cenários a seguir:</strong>
                    </p>
                </article>
            </section>


            <section id="sessao10">
                <article>
                    <p class="txt--padrao12 cima-20">Do micro</p>
                    <p class="txt--padrao20 medium">Projetos Internos</p>
                    <p class="txt--padrao12">
                        Pela pontualidade, de tempo de duração ou área de atuação,<br>
                        use apenas nossa tipografia institucional para designar o projeto.<br><br>
                        Não crie submarcas ou elementos visuais que fujam da identidade visual, ok?
                    </p>

                    <div class="wrapper imagemExemplo">
                        <div class="esq">
                            <div>
                                <img src="<? echo $images ?>logo/desk/Campanhas e programas/Grupo 7115@2x.png" alt="">
                            </div>
                            <div class="desc">
                                <span class="risco"></span>
                                <p class="texto">
                                    Hackman Demibold
                                    Caixa baixa
                                    Em até 3 linhas
                                </p>
                            </div>
                        </div>
                        <div class="dir">
                            <p class="ex">EX.:</p>
                            <img src="<? echo $images ?>logo/desk/Campanhas e programas/Grupo 7117@2x.png" alt="">
                        </div>
                    </div>
                </article>
            </section>


            <section id="sessao11">
                <article>
                    <p class="txt--padrao20 medium">Iniciativas & Programas</p>
                    <p class="txt--padrao12">
                        Usando os elementos da nossa identidade visual,<br>
                        criamos uma assinatura através de um lockup fixo.
                        <br><br>
                        Seja criativo nos ícones e, a partir da nossa paleta de cores,<br>
                        elecione uma cor que melhor representa o programa.
                    </p>

                    <div class="wrapper imagemExemplo">
                        <div class="esq">
                            <div>
                                <img src="<? echo $images ?>logo/desk/Iniciativas e programas/Grupo 7118@2x.png" alt="">
                            </div>
                            <div class="desc">
                                <span class="risco"></span>
                                <p class="texto">
                                    Hackman Demibold
                                    + Extrabold
                                    Caixa alta
                                </p>
                            </div>
                            <div class="dica">
                                <p>
                                    <strong>Dica:</strong> use o conteúdo e fotografia para adicionar mais
                                    personalidade à cada programa, sem distanciar da linguagem.
                                </p>
                            </div>
                        </div>
                        <div class="dir">
                            <p class="ex">EX.:</p>

                            <div class="switchWrapper">
                                <div class="boxImg boxImg1 ativado">
                                    <img src="<? echo $images ?>logo/desk/Iniciativas e programas/box1.png" alt="">
                                </div>

                                <div class="boxImg boxImg2">
                                    <img src="<? echo $images ?>logo/desk/Iniciativas e programas/box2.png" alt="">
                                </div>

                                <span class="switch">
                                    <span class="circulo"></span>
                                </span>
                            </div>
                        </div>
                </article>
            </section>

            <section id="sessao12">
                <article>
                    <p class="txt--padrao12 cima-20">Do micro</p>
                    <p class="txt--padrao20 medium">Sazonais & Convenções</p>
                    <p class="txt--padrao12">
                        Únicas excessões e analisados individualmente,<br>
                        eventos de maior porte e recorrência podem ter vida e marcas próprias,<br>
                        sempre mantendo coerência com nossa linguagem visual.
                    </p>
                </article>
            </section>

            <section id="sessao13">
                <article>
                    <p class="txt--padrao40 proximo">Símbolo</p>
                    <p class="txt--padrao12">
                        Dê preferência de uso em ambientes próprios de cada marca,<br>
                        como redes sociais e sites institucionais, sempre nas suas respectivas cores.
                    </p>

                    <div class="boxes">
                        <div class="linha">
                            <p>CANTUSTORE</p>
                            <div class="box">
                                <p>Versão positiva roxa</p>
                                <img src="<? echo $images ?>logo/desk/Simbolos/Grupo 6262@2x.png" alt="">
                            </div>
                            <div class="box">
                                <p>Versão negativa</p>
                                <img src="<? echo $images ?>logo/desk/Simbolos/Grupo 6257@2x.png" alt="">
                            </div>
                        </div>
                        <div class="linha">
                            <p>PNEUSTORE</p>
                            <div class="box">
                                <p>Versão positiva roxa</p>
                                <img src="<? echo $images ?>logo/desk/Simbolos/Grupo 6262@2x.png" alt="">
                            </div>
                            <div class="box">
                                <p>Versão positiva azul</p>
                                <img src="<? echo $images ?>logo/desk/Simbolos/Grupo 6267@2x.png" alt="">
                            </div>
                        </div>
                        <div class="linha">
                            <p>CANTUPNEUS</p>
                            <div class="box">
                                <p>Versão positiva roxa</p>
                                <img src="<? echo $images ?>logo/desk/Simbolos/Grupo 6262@2x.png" alt="">
                            </div>
                            <div class="box">
                                <p>Versão positiva verde</p>
                                <img src="<? echo $images ?>logo/desk/Simbolos/Grupo 6277@2x.png" alt="">
                            </div>
                        </div>
                    </div>
                </article>
            </section>

            <section id="sessao14">
                <article>
                    <div class="grid--2colunas">

                        <div class="modulo-imagens-com-texto">
                            <div>
                                <p class="txt--padrao20 txt--bold">Redução máxima</p>
                                <img src="<? echo $images ?>logo/desk/Simbolos/Grupo 6289@2x.png" alt="">
                                <div class="txt-wrapper">
                                    <p class="txt--padrao12">Impresso: H = 10 mm</p>
                                    <p class="txt--padrao12">Digital: H = 100 px</p>
                                </div>
                            </div>
                        </div>

                        <div class="modulo-imagens-com-texto">
                            <div>
                                <p class="txt--padrao20 txt--bold">Área de proteção</p>

                                <div class="central-com-texto">
                                    <img src="<? echo $images ?>logo/desk/Simbolos/Grupo 7114@2x.png" alt="">
                                    <img src="<? echo $images ?>logo/desk/Simbolos/Grupo 7088@2x.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                </article>
            </section>

            <section id="sessao15">
                <article>
                    <p class="txt--padrao40">Para se inspirar</p>

                    <div class="wrapper slick">
                        <img src="<? echo $images ?>pranchas/Faixa.png" alt="">
                        <img src="<? echo $images ?>pranchas/Conteiner.png" alt="">
                    </div>
                </article>
            </section>



















            <!-- <section id="sessao9">
                <article>
                    <p class="txt--padrao40">Para se inspirar</p>

                    <div class="wrapper slick">
                        <img src="<? echo $images ?>/pranchas/Enrolado.png" alt="">
                        <img src="<? echo $images ?>/pranchas/PranchaJoca.png" alt="">
                        <img src="<? echo $images ?>/pranchas/Van.png" alt="">
                    </div>
                </article>
            </section> -->


            <? include('assets/download.php') ?>
            <? include('assets/footer.php') ?>
        </main>

    </div>

    <script type="text/javascript">
        $('.link-abre').removeClass('active')
        $('.menu li').hide();
        $('.link-abre:eq(1)').addClass('active');
    </script>

</body>

</html>