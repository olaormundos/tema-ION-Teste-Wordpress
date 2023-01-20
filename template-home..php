<?php  
/*
Template name: Home Page
*/
get_header();?>
    <div class="content-area">
        <section class="slider-home">
            <div class="container">
                <?php echo do_shortcode( '[rev_slider alias="Home"][/rev_slider]' ); ?>
            </div>
        </section>
        <section class="oqueeoteste">
            <div class="container">
                <img src="<?php bloginfo('template_directory'); ?>/midia/images/forma.png" class="forma"/>
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?php bloginfo('template_directory'); ?>/midia/images/banner-oque-e-o-teste.png"/>
                    </div>
                    <div class="col-md-6">
                        <h3>A nutrição como você nunca viu!</h3>
                        <h4>O que é o teste?</h4>
                        <p>É uma das avaliações mais abrangentes e avançadas da medicina de precisão. 
                            Consiste em um teste metabolômica salivar, desenvolvido para avaliar  
                            diferentes aspectos do metabolismo e detectar desequilíbrios metabólicos 
                            e nutricionais antes que se manifestem como doenças crônicas. 
                        </p>
                        <button>QUERO COMPRAR AGORA O MEU TESTE</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="pqteste">
            <div class="container">
                <img src="<?php bloginfo('template_directory'); ?>/midia/images/forma.png" class="forma"/>
                <div class="row">
                    <div class="col md-6">
                        <h3>O Futuro da Nutrição Está Aqui!</h3>
                        <h4>Por que fazer o teste?</h4>
                        <p> 
                            Os metabolitos avaliados pela IonNutri são produtos do seu metabolismo, 
                            ou seja, eles contam para gente a sua história! - Através da sua história 
                            podemos oferecer uma compreensão bioquímica integrada da sua saúde. - Identifica
                            ponto-a-ponto os desequilíbrios metabólicos e seus impactos na saúde. -  
                            Revela a falta de um nutriente ou se a capacidade do corpo de produzir energia a 
                            partir dos alimentos está prejudicada. - Uma vez identificados os desequilíbrios, 
                            pode-se propor correções de modo individualizado e personalizado. - Possibilita o 
                            fornecimento adequado de nutrientes de acordo com a necessidade metabólica 
                            especifica do individuo, permitindo assim, que cada organismo alcance seu equilíbrio,
                            prevenindo o desenvolvimento de doenças ou melhorando o prognóstico de doenças
                            já existentes. 
                        </p>
                        <button class="comprar-teste">QUERO COMPRAR AGORA O MEU TESTE</button>
                    </div>
                    <div class="col md-6">
                        <img src="<?php bloginfo('template_directory'); ?>/midia/images/banner-comprar-teste.png"/>
                    </div>
                </div>
            </div>
        </section>
        <section class="relatos">
            <div class="container largo1">
                <div class="row">
                    <div class="col-12 titulo-relatos">
                        <h1>Veja os</h1>
                        <h3>Relatos de mudança de vida</h3>
                        <h5>Pellentesque etiam blandit in tincidunt 
                            at donec. Eget ipsum dignissim placerat nisi,
                            adipiscing mauris non purus parturient.
                        </h5>
                    </div>
                    <div class="col-md-4 card-relatos">
                        <img src="<?php bloginfo('template_directory'); ?>/midia/images/quote.png"/>
                        <p>Pellentesque etiam blandit in tincidunt at donec. Eget ipsum dignissim
                           placerat nisi, adipiscing mauris non.
                        </p>
                        <div class="lados">
                            <div class="ladoa">
                                <img src="<?php bloginfo('template_directory'); ?>/midia/images/mocadep.png"/>
                                <p>Berry Gunawan</p>
                            </div>
                            <div class="ladob">
                                <img src="<?php bloginfo('template_directory'); ?>/midia/images/estrela.png"/>
                                <p>3.5</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 card-relatos">
                        <img src="<?php bloginfo('template_directory'); ?>/midia/images/quote.png"/>
                        <p>Pellentesque etiam blandit in tincidunt at donec. Eget ipsum dignissim
                           placerat nisi, adipiscing mauris non.
                        </p>
                        <div class="lados">
                            <div class="ladoa">
                                <img src="<?php bloginfo('template_directory'); ?>/midia/images/mocadep.png"/>
                                <p>Berry Gunawan</p>
                            </div>
                            <div class="ladob">
                                <img src="<?php bloginfo('template_directory'); ?>/midia/images/estrela.png"/>
                                <p>3.5</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 card-relatos">
                        <img src="<?php bloginfo('template_directory'); ?>/midia/images/quote.png"/>
                        <p>Pellentesque etiam blandit in tincidunt at donec. Eget ipsum dignissim
                           placerat nisi, adipiscing mauris non.
                        </p>
                        <div class="lados">
                            <div class="ladoa">
                                <img src="<?php bloginfo('template_directory'); ?>/midia/images/mocadep.png"/>
                                <p>Berry Gunawan</p>
                            </div>
                            <div class="ladob">
                                <img src="<?php bloginfo('template_directory'); ?>/midia/images/estrela.png"/>
                                <p>3.5</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="comoeteste">
            <div class="container">
                <img src="<?php bloginfo('template_directory'); ?>/midia/images/forma.png" class="forma-cima"/>
                <img src="<?php bloginfo('template_directory'); ?>/midia/images/forma.png" class="forma-baixo"/>
                <div class="row">
                    <div class="col-12 titulo-teste">
                        <h1>Como é</h1>
                        <p>feito o teste?</p>
                    </div>
                    <div class="col-md-4 card-teste">
                        <img src="<?php bloginfo('template_directory'); ?>/midia/images/passo1e2.png"/>
                        <h3>1º passo</h3>
                        <p>Após adquirir o teste, você receberá no e-mail 
                            de cadastro um link para preencher um questionário 
                            com as informações sobre sua saúde atual 
                        </p>
                    </div>
                    <div class="col-md-4 card-teste">
                        <img src="<?php bloginfo('template_directory'); ?>/midia/images/passo1e2.png"/>
                        <h3>2º passo</h3>
                        <p>Após o preenchimento e envio desse questionário
                            de saúde, o seu kit de coleta do teste será 
                            encaminhado ao endereço fornecido
                        </p>
                    </div>
                    <div class="col-md-4 card-teste">
                        <img src="<?php bloginfo('template_directory'); ?>/midia/images/passo3.png"/>
                        <h3>3º passo</h3>
                        <p>Após a realização da sua coleta de saliva, você
                            entrará em contato com a IonNutri para providenciarmos
                            a retirada da amostra. Assim que amostra chegar em nosso
                            laboratório, aguarde 20 dias úteis para receber seus resultados
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="diferencial">
            <div class="container largo">
                <img src="<?php bloginfo('template_directory'); ?>/midia/images/forma.png" class="forma-cima"/>
                <img src="<?php bloginfo('template_directory'); ?>/midia/images/forma.png" class="forma-baixo"/>
                <div class="row">
                    <div class="col-12 titulo-dif">
                        <h1>NOSSO</h1>
                        <p>Diferencial</p>
                    </div>
                    <div class="col-md-3 card-dif">
                        <img src="<?php bloginfo('template_directory'); ?>/midia/images/metabloma.png"/>
                        <h5>Metaboloma individualizado (n=1)</h5>
                        <p>More off this less hello samlande lied much 
                            over tightly circa horse taped mightly
                        </p>
                        <span>Saber mais</span>
                    </div>    
                    <div class="col-md-3 card-dif">
                    <img src="<?php bloginfo('template_directory'); ?>/midia/images/aquisicao.png"/>
                        <h5>Aquisição de dados (espectrometria demassa)</h5>
                        <p>More off this less hello samlande lied much 
                            over tightly circa horse taped mightly
                        </p>
                        <span>Saber mais</span>
                    </div>
                    <div class="col-md-3 card-dif">
                    <img src="<?php bloginfo('template_directory'); ?>/midia/images/analise.png"/>
                        <h5>Análise de dados (em tempo real)</h5>
                        <p>More off this less hello samlande lied much 
                            over tightly circa horse taped mightly
                        </p>
                        <span>Saber mais</span>
                    </div>
                    <div class="col-md-3 card-dif">
                    <img src="<?php bloginfo('template_directory'); ?>/midia/images/estetica.png"/>
                        <h5>Análise estatística</h5><br />
                        <p>More off this less hello samlande lied much 
                            over tightly circa horse taped mightly
                        </p>
                        <span>Saber mais</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 card-dif">
                        <img src="<?php bloginfo('template_directory'); ?>/midia/images/resultados.png"/>
                        <h5>Resultados esperados: Longevidade e qualidade de vida</h5>
                        <p>More off this less hello samlande lied much 
                            over tightly circa horse taped mightly
                        </p>
                        <span>Saber mais</span>
                    </div>    
                    <div class="col-md-3 card-dif">
                    <img src="<?php bloginfo('template_directory'); ?>/midia/images/mapeamento.png"/>
                        <h5>Mapeamento do metabolismo. (Alimentação ou suplementação)</h5>
                        <p>More off this less hello samlande lied much 
                            over tightly circa horse taped mightly
                        </p>
                        <span>Saber mais</span>
                    </div>
                    <div class="col-md-3 card-dif">
                    <img src="<?php bloginfo('template_directory'); ?>/midia/images/interpretacao.png"/>
                        <h5>Interpretação de resultados (Anamnese clínica + metabólica)</h5>
                        <p>More off this less hello samlande lied much 
                            over tightly circa horse taped mightly
                        </p>
                        <span>Saber mais</span>
                    </div>
                    <div class="col-md-3 card-dif">
                    <img src="<?php bloginfo('template_directory'); ?>/midia/images/armazenamento.png"/>
                        <h5>Armazenamento dos resultados de acordo com a LGPD</h5>
                        <p>More off this less hello samlande lied much 
                            over tightly circa horse taped mightly
                        </p>
                        <span>Saber mais</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="depoimentos">
            <div class="container">
                <img src="<?php bloginfo('template_directory'); ?>/midia/images/forma.png" class="forma-cima"/>
                <img src="<?php bloginfo('template_directory'); ?>/midia/images/forma.png" class="forma-baixo"/>
                <div class="row">
                    <div class="col-12">
                        <img src="<?php bloginfo('template_directory'); ?>/midia/images/avatar.png"/>
                            <h4>Nome do cliente - Profissão</h4>
                            <p>
                                Tive a oportunidade de visitar o laboratório,
                                conhecer o processo de extração da amostra e comprovar
                                a qualidade e seriedade do trabalho executado.
                                Me senti muito segura em realizar o exame,
                                satisfeita com o resultado e com suporte prestado.
                                Feliz  com a parceria firmada e a oportunidade de levar saúde
                                de uma forma assertiva e preventiva aos meus pacientes!
                            </p>
                            <span>Dra Daniela Monteiro</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="vem-ser">
            <div class="container">
                <img src="<?php bloginfo('template_directory'); ?>/midia/images/forma.png" class="forma-cima"/>
                <img src="<?php bloginfo('template_directory'); ?>/midia/images/forma.png" class="forma-baixo"/>
                <div class="row">
                    <div class="col-md-6">
                        <h3>Venha ser</h3>
                        <h4>Nosso parceiro</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Eu eget feugiat habitasse nec, bibendum condimentum.
                        </p>
                        <ul>
                            <div class="row">
                                <div class="col-md-6">
                                    <li>
                                        <img src="<?php bloginfo('template_directory'); ?>/midia/images/seta.png"/> 
                                            Material expose like metals
                                    </li>
                                    <li>
                                        <img src="<?php bloginfo('template_directory'); ?>/midia/images/seta.png"/> 
                                            Simple neutral colours
                                        </li>
                                </div>
                                <div class="col-md-6">
                                    <li>
                                        <img src="<?php bloginfo('template_directory'); ?>/midia/images/seta.png"/> 
                                            Clear lines and geomatric figures
                                    </li> 
                                    <li>
                                        <img src="<?php bloginfo('template_directory'); ?>/midia/images/seta.png"/> 
                                            Material expose like metals
                                    </li>
                                </div>
                            </div>
                        </ul>
                        <button>ENTRAR EM CONTATO</button>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="clearfix">
                                <img src="<?php bloginfo('template_directory'); ?>/midia/images/liderfarma.png" class="img-responsive pull-left "/>
                                <img src="<?php bloginfo('template_directory'); ?>/midia/images/pharmopatia.png" class="img-responsive pull-left "/>
                                <img src="<?php bloginfo('template_directory'); ?>/midia/images/neoformula.png" class="img-responsive pull-left "/>
                            </div>
                            <div class="clearfix">
                                <img src="<?php bloginfo('template_directory'); ?>/midia/images/neoformula.png" class="img-responsive pull-left "/>
                                <img src="<?php bloginfo('template_directory'); ?>/midia/images/drugstone.png" class="img-responsive pull-left "/>
                                <img src="<?php bloginfo('template_directory'); ?>/midia/images/pharmace.png" class="img-responsive pull-left "/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="area-aberta">
            <div class="container">
                <img src="<?php bloginfo('template_directory'); ?>/midia/images/forma.png" class="forma-cima"/>
                <img src="<?php bloginfo('template_directory'); ?>/midia/images/forma.png" class="forma-baixo"/>
                <div class="row">
                    <div class="col-md-5">
                        <img src="<?php bloginfo('template_directory'); ?>/midia/images/banner-rapaz-sorrindo.png" />
                    </div>
                    <div class="col-md-7">
                        <h3>área aberta para <span>técnica, referências científicas</span></h3>
                        <p>Cada um de nós apresenta uma assinatura bioquímico metabólica,
                        tão individual quanto nossas impressões digitais. Por outro lado,
                        nosso metabolismo é altamente dinâmico, vivendo sob interferência
                        de fatores externos e internos,  como gênero, idade, fatores
                        genéticos e epigenéticos, estilo de vida, composição da microbiota,
                        dieta e exposição ao meio ambiente.</p>
                        <div class="form-area">
                            <?php echo do_shortcode( '[contact-form-7 id="30" title="Formulário área aberta"]' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contato">
            <div class="container">
                <img src="<?php bloginfo('template_directory'); ?>/midia/images/forma.png" class="forma-cima"/>
                <img src="<?php bloginfo('template_directory'); ?>/midia/images/forma.png" class="forma-baixo"/>
                <div class="row">
                    <div class="col-12">
                        <h1>Entre em</h1>
                        <p>Contato</p>
                    </div>
                    <div class="col-md-6">
                        <div class="informacoes">
                            <h2>Informações Gerais</h2>
                            <div class="telefones">
                                <h4>Telefone /  Whatsapp</h4>
                                <span>(11) 3164-1214</span><br />
                                <span>(11) 9 1081-3015</span>
                            </div>
                            <div class="email">
                                <h4>Email</h4>
                                <span>claudia.gomes@ionnutri.com.br</span><br />
                                <span>contato@ionnutri.com.br</span>
                            </div>
                            <div class="localizacao">
                                <h4>Localização</h4>
                                <span>Rua Apiacás, 247, sobreloja, Perdizes, São Paulo, SP.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="formulario">
                            <?php echo do_shortcode( '[contact-form-7 id="29" title="Formulário contato - Home"]' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php get_footer(); ?>