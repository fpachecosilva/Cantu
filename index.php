<!DOCTYPE HTML>
<html>

<head>
    <?php include 'assets/config.php'; ?>
    <?php include 'assets/head.php'; ?>

    <?
    $paginaAtual = 'Essencia';
    $tituloPagina = $paginaAtual . " - " . $empresa;
    ?>

    <title><? echo $tituloPagina ?></title>
</head>

<body id="essencia">

    <div id="topo">
        <article>
            <img src="<? echo $images ?>Grupo 6094_home.png" alt="" class="bgamarelo desktopitem">
            <img src="<? echo $images ?>Grupo 5840.png" alt="" class="bgvermelho desktopitem">
            <img src="<? echo $images ?>Caminho 5111.png" alt="" class="setinha desktopitem">

            <img src="<? echo $images ?>bgamarelohome_mobile.png" alt="" class="bgamarelo mobileitem">
            <img src="<? echo $images ?>bgvermelhohome_mobile.png" alt="" class="bgvermelho mobileitem">
            <img src="<? echo $images ?>setatopohome_mobile.png" alt="" class="setinha mobileitem">



            <p class="bemvindo">Bem-vindo(a) ao Brandbook Online Mercê do Bairro.</p>
            <img class="olaalo desktopitem" src="<? echo $images ?>olaalo.png" alt="">
            <img class="olaalo mobileitem" src="<? echo $images ?>olaalohome_mobile.png" alt="">
            <div class="botaoLogin">
                <a class="login" href="">Acessar</a>
                <p class="desenvolvido desktopitem">Desenvolvido por <strong>Marcas Com SAL</strong></p>
            </div>
            <img class="logo" src="<? echo $images ?>logo.svg" alt="">
            <img class="boneco" src="<? echo $images ?>Grupo 6095.png" alt="">

            <!-- <form action="">
                    <div>
                        <label class="user" for="user">Usuário</label>
                        <img src="<? echo $images ?>Grupo 5842.png" alt="">
                        <input type="text" name="user" placeholder="Inserir usuário" autocomplete="off">
                    </div>

                    <div>
                        <label class="pass" for="pass">Senha</label>
                        <img src="<? echo $images ?>Grupo 5844.png" alt="">
                        <input type="password" name="pass" placeholder="Inserir senha" autocomplete="off">
                    </div>

                    <a class="acessar" href="">Acessar</a>
                </form>                 -->
        </article>
        <div class="vermais">
            <p class="txt--padrao20 desktopitem">Ver mais</p>
            <p class="desenvolvido mobileitem">Desenvolvido por <strong>Marcas Com SAL</strong></p>
        </div>
    </div>

    <div class="container">

        <?php include 'assets/menu.php'; ?>

        <main>
            <header class="topobg"></header>

            <section id="sessao1">
                <article>
                    <div class="modulo-home">
                        <div class="mini-titulo">
                            <img src="<? echo $images ?>/seta_auxiliar.svg" alt="">
                            <p class="txt--padrao20">Por que</p>
                        </div>

                        <div class="content">
                            <p class="txt--padrao40">
                                Existimos para abrir caminhos
                                para pessoas e negócios.
                            </p>
                        </div>
                    </div>
                </article>
            </section>


            <section id="sessao2">
                <article>

                    <div class="modulo-home">
                        <div class="mini-titulo">
                            <img src="<? echo $images ?>/seta_auxiliar.svg" alt="">
                            <p class="txt--padrao20">Por que</p>
                        </div>

                        <div class="content">
                            <p class="txt--padrao40">
                                Ao colocar a inteligência
                                de varejo nas mãos das pessoas certas,
                                mudamos realidades, um bairro por vez.
                            </p>
                        </div>
                    </div>

                    <div class="modulo-home">
                        <div class="mini-titulo">
                            <img src="<? echo $images ?>/seta_auxiliar.svg" alt="">
                            <p class="txt--padrao20">Somos</p>
                        </div>

                        <div class="content">
                            <p class="txt--padrao20">
                                O braço direito do pequeno varejista
                                que vem com uma caixa de ferramentas
                                completa e com o pique que ele precisa
                                para crescer de um jeito mais fácil.
                            </p>
                        </div>
                    </div>

                    <div class="cinza-colunas">
                        <div class="grid--4colunas">
                            <div class="coluna">
                                <div class="cima">
                                    <span class="risco mobileitem"></span>
                                    <div class="topo-titulo">Na caixa vem</div>
                                    <div class="subtitulo">Economia e praticidade nas compras</div>
                                    <div class="conteudo">
                                        <p>• Pedidos pelo celular;</p>
                                        <p>• Entrega na porta;</p>
                                        <p>• Melhores marcas;</p>
                                        <p>• Fôlego pra pagar.</p>
                                    </div>
                                </div>
                                <div class="baixo">
                                    <div class="topo-titulo">Pra quem tem</div>
                                    <div class="subtitulo">Faro para as melhores ofertas</div>
                                </div>
                            </div>
                            <div class="coluna">
                                <div class="cima">
                                    <div class="topo-titulo"></div>
                                    <span class="risco mobileitem"></span>
                                    <div class="topo-titulo mobileitem">Na caixa vem</div>
                                    <div class="subtitulo">Técnicas mais modernas para não perder vendas</div>
                                    <div class="conteudo">
                                        <p>• Sistema de gestão de estoque e reposição;</p>
                                        <p>• Consultoria de sortimento;</p>
                                        <p>• Planogramas de exposição;</p>
                                        <p>• Meios de pagamento que não acabam com a sua margem;</p>
                                        <p>• Apoio na decisão de preços.</p>
                                    </div>
                                </div>
                                <div class="baixo">
                                    <div class="topo-titulo"></div>
                                    <div class="topo-titulo mobileitem">Pra quem tem</div>
                                    <div class="subtitulo">Experiência no bairro</div>
                                </div>
                            </div>
                            <div class="coluna">
                                <div class="cima">
                                    <div class="topo-titulo"></div>
                                    <span class="risco mobileitem"></span>
                                    <div class="topo-titulo mobileitem">Na caixa vem</div>
                                    <div class="subtitulo">Práticas para encantar o cliente</div>
                                    <div class="conteudo">
                                        <p>• Divulgação bonita e automatizada;</p>
                                        <p>• Reforma das lojas;</p>
                                        <p>• Equipamentos das maiores marcas;</p>
                                        <p>• Programa de fidelidade;</p>
                                        <p>• Programa de treinamento de funcionários</p>
                                    </div>
                                </div>
                                <div class="baixo">
                                    <div class="topo-titulo"></div>
                                    <div class="topo-titulo mobileitem">Pra quem tem</div>
                                    <div class="subtitulo">Relacionamento com o cliente</div>
                                </div>
                            </div>
                            <div class="coluna">
                                <div class="cima">
                                    <div class="topo-titulo"></div>
                                    <span class="risco mobileitem"></span>
                                    <div class="topo-titulo mobileitem">Na caixa vem</div>
                                    <div class="subtitulo">Qualidade de vida</div>
                                    <div class="conteudo">
                                        <p>• Seguro para proteger seu mercado e mercadoria</p>
                                        <p>• Aulas de liderança online;</p>
                                        <p>• Períodos de casa na praia todo ano</p>
                                    </div>
                                </div>
                                <div class="baixo">
                                    <div class="topo-titulo"></div>
                                    <div class="topo-titulo mobileitem">Pra quem tem</div>
                                    <div class="subtitulo">Vontade de aproveitar a vida</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modulo-home com-grid">
                        <div class="mini-titulo">
                            <img src="<? echo $images ?>/seta_auxiliar.svg" alt="">
                            <p class="txt--padrao20">Como</p>
                        </div>

                        <div class="grid--5colunas-home">
                            <div class="desc-basica">
                                <p> Nosso jeito<br class="desktopitem"> de trabalhar</p>
                            </div>
                            <div class="coluna">
                                <p class="txt--padrao20">De dono para dono</p>
                                <p>
                                    Cuidando como dono
                                    e pensando no melhor futuro para os milhares de donos de pequenos varejos, aqui o jogo
                                    é aberto e a carta é branca
                                    para cada um fazer do seu jeito, discordar e decidir.
                                </p>
                            </div>
                            <div class="coluna">
                                <p class="txt--padrao20">Fazendo a diferença</p>
                                <p>
                                    Se não for pra mudar pra melhor, nem começamos!
                                    Para nós, ideias boas são apoiadas em dados que geram
                                    resultados reais e visíveis para
                                    o cliente.
                                </p>
                            </div>
                            <div class="coluna">
                                <p class="txt--padrao20">Como bons vizinhos</p>
                                <p>
                                    Atendemos com proximidade
                                    porque só dá pra ser útil se
                                    conhecermos bem cada cliente.
                                    Cultivamos relações verdadeiras
                                    que podem mudar seu mundo,
                                    muito além do mercado.
                                </p>
                            </div>
                            <div class="coluna">
                                <p class="txt--padrao20">Tecnologia invisível</p>
                                <p>
                                    Ela é fundamental, mas não
                                    precisa ser protagonista na vida
                                    do cliente. Entendemos seus
                                    costumes para desenvolver
                                    sistemas simples de usar
                                    e nos canais mais familiares.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="modulo-home">
                        <div class="mini-titulo">
                            <img src="<? echo $images ?>/seta_auxiliar.svg" alt="">
                            <p class="txt--padrao20">Para</p>
                        </div>

                        <div class="content">
                            <p class="txt--padrao20">
                                Todos que acordam cedo pra trabalhar
                                e enfrentam com otimismo os obstáculos
                                da vida.
                            </p>
                        </div>
                    </div>
                </article>
            </section>

            <section id="sessao3">
                <article>
                    <div class="grid--2colunas-auto">
                        <div class="esq">
                            <p>Histórias que nos conectam</p>
                        </div>
                        <div class="dir grid--2colunas-auto">
                            <p class="txt--padrao12">
                                Seu Antonio tem tanto orgulho que
                                assina a fachada do mercado com seu
                                próprio sobrenome. Seu ídolo? Todos
                                que acordam cedo pra trabalhar.<br><br>

                                O Filipe adora o bairro, mas pensa
                                em mudar porque o trabalho fica longe
                                e ele queria chegar em casa mais cedo
                                pra curtir os amigos.<br><br>

                                Amigo é com o Leomar, que todo dia
                                dá um bom-dia diferente.Ele bate no
                                peito pra falar das 4 pessoas que
                                emprega, mas também reclama do
                                trabalho que dá.<br><br>

                                A Keu acha o bairro perigoso, mas é o
                                que dá. Se conforta em saber que com
                                a vizinha sempre pode contar. É com ela
                                que pega emprestado o que tá faltando
                                pra não pagar caro no mercadinho ao
                                lado, que nem pendura e nem aceita
                                cartão.<br><br>

                                A Jéssica sabe o nome de cada
                                um dos seus fregueses e queria um
                                espaço maior e mais bonito pra eles.
                                Sonha com noites sem preocupação
                                com o mercado.
                            </p>

                            <p class="txt--padrao12">
                                A Ida sabe que toda quarta tem oferta
                                boa no mercadinho do bairro. Não confia
                                em supermercado pra comprar mistura,
                                frutas e verduras.<br><br>

                                A Jô conhece bem esse sentimento e
                                sente-se livre por ter seu próprio negócio.
                                Sabe que o sucesso ou o fracasso estão
                                em suas mãos. O que faria se tivesse
                                mais tempo livre? Dançar!<br><br>

                                O Leonardo diz que não tem um mercado,
                                tem uma família. Que precisa sua de
                                atenção constante. Se ressente de não
                                ter liberdade pra passar dias na praia
                                com sua “outra família”. Quer chegar aos
                                50 bem de saúde e ser feliz! (afinal,
                                dinheiro não é tudo).<br><br>

                                Os depoimentos das batalhas diárias
                                vêm sempre cheios de orgulho,
                                dedicação e amor. De um otimismo que é
                                combustível pra levantar de manhã e
                                correr atrás mais uma vez.<br><br>

                                No fundo, no fundo, eles pensam que já
                                tá na hora da vida ser mais fácil e, com a
                                Mercê do Bairro, será!
                            </p>
                        </div>
                    </div>
                </article>
            </section>

            <section id="sessao4">
                <article>
                    <p class="txt--padrao40">Assim, nasceu nossa identidade</p>

                    <div class="wrapper slick">
                        <img src="<? echo $images ?>/pranchas/PranchaWendel.png" alt="">
                        <img src="<? echo $images ?>/pranchas/Enrolado.png" alt="">
                        <img src="<? echo $images ?>/pranchas/Saquinho.png" alt="">
                        <img src="<? echo $images ?>/pranchas/Marmitas.png" alt="">
                        <img src="<? echo $images ?>/pranchas/Van.png" alt="">
                        <img src="<? echo $images ?>/pranchas/Posters01.png" alt="">
                        <img src="<? echo $images ?>/pranchas/Loja.png" alt="">
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
        $('.link-abre:eq(0)').addClass('active');
    </script>

</body>

</html>