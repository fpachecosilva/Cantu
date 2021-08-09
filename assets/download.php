<?


$compartilhar = "";


if ( $paginaAtual == 'Logotipo' ) {    
    
    $logotipoTitulo_01 = "Versões de marca";
    $logotipoLink_01 = $download. "logo/AF_CantuStore_Versoes_Marca.zip.zip";
    $logotipoTexto_01 = "AF_CantuStore_Versoes_Marca.zip.zip";
    
    $logotipoTitulo_02 = "Lookups Internos";
    $logotipoLink_02 = $download. "logo/AF_CantuStore_LockupInternos.zip";
    $logotipoTexto_02 = "AF_CantuStore_LockupInternos.zip";
    
    $logotipoTitulo_03 = "";
    $logotipoLink_03 = $download. "logo/AF_PneuStore_Versoes_Marca.zip";
    $logotipoTexto_03 = "AF_PneuStore_Versoes_Marca.zip";
    
    $logotipoTitulo_04 = "Símbolo";
    $logotipoLink_04 = $download. "logo/AF_PackSimbolos.zip";
    $logotipoTexto_04 = "AF_PackSimbolos.zip";

    $logotipoTitulo_05 = "";
    $logotipoLink_05 = $download. "logo/AF_CantuPneus_Versoes_Marca.zip";
    $logotipoTexto_05 = "AF_CantuPneus_Versoes_Marca.zip";

    echo'
        <section id="download">
            <article>
                <div class="compartilhar desktopitem">
                    <a href=" '.$compartilhar.' " class="share">
                        <p>Compartilhar sessão</p>
                    </a>
                </div>

                <p class="txt--padrao40 txt--bold">Download</p>
                
                <div class="grid--3colunas">
                    
                    <div class="">
                        <div>
                            <p class="txt--padrao20">'.$logotipoTitulo_01.'</p>
                            <a href="'.$logotipoLink_01.'">'.$logotipoTexto_01.'</a>
                        </div>
                    
                        <div>
                            <p class="txt--padrao20">'.$logotipoTitulo_02.'</p>
                            <a href="'.$logotipoLink_02.'">'.$logotipoTexto_02.'</a>
                        </div>
                    </div>
                
                    <div class="">
                        <div>
                            <p class="txt--padrao20">'.$logotipoTitulo_03.'</p>
                            <a href="'.$logotipoLink_03.'">'.$logotipoTexto_03.'</a>
                        </div>
            
                        <div>
                            <p class="txt--padrao20">'.$logotipoTitulo_04.'</p>
                            <a href="'.$logotipoLink_04.'">'.$logotipoTexto_04.'</a>
                        </div>                       
                    </div>

                    <div class="">
                        <div>
                            <p class="txt--padrao20">' . $logotipoTitulo_05 . '</p>
                            <a href="' . $logotipoLink_05 . '">' . $logotipoTexto_05 . '</a>
                        </div>
                    </div>

                </div>
            </article>
        </section>
    ';
}


if ( $paginaAtual == 'Paleta' ) {
    
    $logotipoTitulo_01 = "";
    $logotipoLink_01 = $download. "AF_CantuStore_Cores.zip";
    $logotipoTexto_01 = "AF_CantuStore_Cores.zip";

    echo'
        <section id="download">
            <article>
                <div class="compartilhar desktopitem">
                    <a href=" '.$compartilhar.' " class="share">
                        <p>Compartilhar sessão</p>
                    </a>
                </div>

                <p class="txt--padrao40 txt--bold">Download</p>
                
                <div class="grid--2colunas">
                    <div class="esq">
                        <div>
                            <p class="txt--padrao20">'.$logotipoTitulo_01.'</p>
                            <a href="'.$logotipoLink_01.'">'.$logotipoTexto_01.'</a>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    ';
}


if ( $paginaAtual == 'Tipografia' ) {
    
    $logotipoTitulo_01 = "";
    $logotipoLink_01 = $download. "";
    $logotipoTexto_01 = "";

    echo'
        <section id="download">
            <article>
                <div class="compartilhar desktopitem">
                    <a href=" '.$compartilhar.' " class="share">
                        <p>Compartilhar sessão</p>
                    </a>
                </div>
            </article>
        </section>
    ';
}

if ($paginaAtual == 'Iconografia') {

    $logotipoTitulo_01 = "";
    $logotipoLink_01 = $download . "AF_CantuStore_RGB_DeckIcones.zip";
    $logotipoTexto_01 = "AF_CantuStore_RGB_DeckIcones.zip";

    echo '
        <section id="download">
            <article>
                <div class="compartilhar desktopitem">
                    <a href=" ' . $compartilhar . ' " class="share">
                        <p>Compartilhar sessão</p>
                    </a>
                </div>

                <p class="txt--padrao40 txt--bold">Download</p>
                
                <div class="grid--2colunas">
                    <div class="esq">
                        <div>
                            <p class="txt--padrao20">' . $logotipoTitulo_01 . '</p>
                            <a href="' . $logotipoLink_01 . '">' . $logotipoTexto_01 . '</a>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    ';
}


if ( $paginaAtual == 'Grafismos' ) {
    
    $logotipoTitulo_01 = "";
    $logotipoLink_01 = $download. "AF_RGB_Grafismos.zip";
    $logotipoTexto_01 = "AF_RGB_Grafismos.zip";

    echo'
        <section id="download">
            <article>
                <div class="compartilhar desktopitem">
                    <a href=" '.$compartilhar.' " class="share">
                        <p>Compartilhar sessão</p>
                    </a>
                </div>

                <p class="txt--padrao40 txt--bold">Download</p>
                
                <div class="grid--2colunas">
                    <div class="esq">
                        <div>
                            <p class="txt--padrao20">'.$logotipoTitulo_01.'</p>
                            <a href="'.$logotipoLink_01.'">'.$logotipoTexto_01.'</a>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    ';
}


if ( $paginaAtual == 'Estilo fotográfico' ) {
    
    $logotipoTitulo_01 = "";
    $logotipoLink_01 = "";
    $logotipoTexto_01 = "";

    echo'
        <section id="download">
            <article> 
                <div class="compartilhar desktopitem">
                    <a href=" '.$compartilhar.' " class="share">
                        <p>Compartilhar sessão</p>
                    </a>
                </div>                
            </article>
        </section>
    ';
}

if ( $paginaAtual == 'Aplicações' ) {
    
    $logotipoTitulo_01 = "";
    $logotipoLink_01 = $download. "";
    $logotipoTexto_01 = "";

    echo'
        <section id="download">
            <article>
                <div class="compartilhar desktopitem">
                    <a href=" '.$compartilhar.' " class="share">
                        <p>Compartilhar sessão</p>
                    </a>
                </div>                
            </article>
        </section>
    ';
}



?>




