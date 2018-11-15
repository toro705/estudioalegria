<?php
  if (!isset($_SESSION)) {
    session_start();
  }
?>

<!doctype html>
<html class="no-js" lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Estudio Alegría</title>
        <meta name="description" content="El Estudio Alegria, Buey Fernández, Fissore & Montemerlo, uno de los estudios jurídicos líderes del mercado, cuenta con un equipo interdisciplinario de abogados y contadores públicos de alta especialización, capaz de resolver aquellos asuntos vinculados con las diversas necesidades actuales de los agentes económicos del mercado.">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">    
        <link rel="stylesheet" href="css/animate.css">    
        <!-- <link rel="stylesheet" href="css/bootstrap.min.css">     -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">

        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <nav class="main-nav navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button class="hamburger transition hamburger--efecto" type="button"
                            aria-label="Menu" data-toggle="collapse" data-target=".navbar-collapse">
                      <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                      </span>
                    </button>                    
                    <a class="navbar-brand transition" href="#">
                        <h1><img class="img-responsive" src="img/estudioalegrialogo.png" alt="Estudio Alegría"></h1>
                    </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#referencias" data-toggle="collapse" data-target=".navbar-collapse">Referencias</a></li>
                        <!--                        <li ><a href="#soluciones">Nuestras Soluciones</a></li>-->
                        <li >
                            <a href="#practica" data-toggle="collapse" data-target=".navbar-collapse">Práctica <br> Profesional</a>
                         </li>
                        <li ><a href="#profesionales" data-toggle="collapse" data-target=".navbar-collapse">Profesionales</a></li>
                        <li ><a href="#contacto" data-toggle="collapse" data-target=".navbar-collapse">Contacto</a></li>
                        <li ><form method="POST" action="index.php">
                            <input type="hidden"  value="en" name="lang">
                            <button type="submit" value="en"><small>English</small></button>
                            </form>
                        </li>

                    </ul>
                    <div class="clearfix">  </div>
                </div>
            </div>
        </nav>
        <section class="hero fullheight">  
                <div class="fullsize">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 text-center">
                                <img class="img-responsive wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="300ms" src="img/estudioalegrialogolg.png">
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <section id="principios" class="content bg-4">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="300ms">
                        <hr class="c-1">
                        <h2 class="color-1 h1">Nuestros <br><b>Principios</b></h2>
                        <p class="color-1 paragraph-1">Desde su fundación por el Dr. Héctor Alegria en el año 1976, el Estudio Alegria, Buey
                        Fernández, Fissore & Montemerlo se ha destacado por su excelencia e innovación en el asesoramiento legal en el campo del derecho empresario, especializándose en asesoramiento legal complejo.</p>
                    </div>
                    <div class="col-sm-6 hidden-xs wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="500ms">
                        <p class="color-1 paragraph-2">Nuestra misión es trabajar para que nuestros clientes alcancen sus objetivos concretos. Nos valemos de nuestra vasta experiencia y conocimientos para enfrentar y resolver complejas situaciones que a diario se presentan dentro de las exigencias impuestas por las negociaciones modernas en un mundo de negocios exigente y competitivo.
                        <br>
                        <br>
                        Nuestro equipo interdisciplinario formado por abogados y contadores públicos y el gran compromiso de los socios en los asuntos que se nos encomiendan distinguen nuestra práctica profesional. Somos un estudio “boutique”, y nuestro principal foco es satisfacer las necesidades de nuestros clientes en todos sus detalles.
                        <br>
                        <br>
                        Hemos consolidado uno de los más prestigiosos estudios argentinos tras haber seguido siempre nuestros principios: profundidad en el análisis del Derecho, calidad en el trabajo profesional y en la relación con los clientes, capacidad de innovación, honestidad, decencia y estricto respeto a las reglas éticas y deontológicas. En resumen, la búsqueda de la excelencia en todos los niveles de nuestra actividad.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="socios-1">
            <img src="img/socios1.jpg" class="img-responsive" alt="">
        </section>
        <section class="content bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 visible-xs">
                        <p class="paragraph-1 color-2">Hemos consolidado uno de los más prestigiosos estudios argentinos tras haber seguido siempre nuestros principios: profundidad en el análisis del Derecho, calidad en el trabajo profesional y en la relación con los clientes, capacidad de innovación, honestidad, decencia y estricto respeto a las reglas éticas y deontológicas. 
                        En resumen, la búsqueda de la excelencia en todos los niveles de nuestra actividad.</p>
                    </div>
                    <div class="col-sm-6 col-sm-offset-6 wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="300ms">
                        <h3 class="color-3 h2">"Hay que pensar como hombre de acción y actuar como hombre de pensamiento" <br><small class="color-2 thin">Henri Bergson</small></h3>
                    </div>
                </div>
            </div>
        </section>
        <section class="quote" id="quote1">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="300ms">
                        <h2>"CUANTO MÁS GRANDE ES EL CAOS 
                        <br><span>MÁS CERCA ESTÁ LA SOLUCIÓN”</span>
                        <br><small>Proverbio Chino</small>
                        </h2>                        
                    </div>
                </div>
            </div>
        </section>
        <section id="estudio" class="content principios bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="300ms">
                        <hr class="c-1">
                        <h2 class="color-1 h1">El <b>Estudio</b></h2>
                        <p class="color-1 paragraph-1">El Estudio Alegria, Buey Fernández, Fissore & Montemerlo, uno de los estudios jurídicos líderes del mercado, cuenta con un equipo interdisciplinario de abogados y contadores públicos de alta especialización, capaz de resolver aquellos asuntos vinculados con las diversas necesidades actuales de los agentes económicos del mercado.</p>
                    </div>
                    <div class="col-sm-6 hidden-xs wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="500ms">
                        <p class="color-1 paragraph-2">Asimismo, posee una vasta red de corresponsales tanto en el interior del país como en los principales mercados internacionales, que asegura a nuestros clientes una amplia cobertura legal.
                        <br>
                        <br>
                        Entre nuestros clientes se encuentra una miríada de empresas e instituciones financieras nacionales y multinacionales, como también personas físicas y organismos de diversa índole, que nos confían sus negocios basándose en la excelencia de los servicios y respuestas que brindamos con los más altos estándares de ética profesional.
                        <br>
                        <br>                        
                        El Estudio Alegria, Buey Fernández, Fissore & Montemerlo está ubicado en pleno centro de la Ciudad de Buenos Aires, sobre la conocida Avenida Santa Fe, en tres pisos de oficinas totalmente equipadas para brindar a nuestros clientes y facilitar a nuestros profesionales y personal las herramientas y material de trabajo que requiere la práctica profesional moderna.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="quote" id="quote2">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="300ms">
                        <h2>"El verdadero rebelde es aquel 
                        <br><span>que propone alternativas"</span>
                        <br><small>Julián Marías</small>
                        </h2>                        
                    </div>
                </div>
            </div>
        </section>
        <section id="referencias" class="content bg-1">
            <div class="container">
                <div class="row">
                        <div class="col-sm-6 wow fadeInUp animated" data-wow-duration="2000ms" data-wow-delay="300ms">
                            <hr class="c-3">
                            <h2 class="color-3 h1"><b>Referencias</b></h2>
                        </div>
                        <div class="col-sm-6 wow fadeInUp animated" data-wow-duration="2000ms" data-wow-delay="300ms">
                            <p class="color-2 paragraph-1">Revistas especializadas han destacado la tarea de nuestro Estudio y sus profesionales. Citamos a continuación algunas de nuestras distinciones.</p>
                        </div>
                        <div class="col-xs-12 wow fadeInUp animated" data-wow-duration="2000ms" data-wow-delay="300ms">
                            <ul class="list-unstyled list-inline text-center">
                                <li class=""><a href="javascript:;" data-toggle="modal" data-target="#referencia1">   <img src="img/ChambersandPartners.png" alt="" class="img-responsive"></a></li>
                                <li class=""><a href="javascript:;"  data-toggle="modal" data-target="#referencia2"> <img src="img/latin-lawyer-630x147.png" alt="" class="img-responsive"></a></li>
                                <li class=""><a href="javascript:;"  data-toggle="modal" data-target="#referencia3"> <img src="img/iflr1000-logo.png" alt="" class="img-responsive"></a></li>
                                <li class=""><a href="javascript:;"  data-toggle="modal" data-target="#referencia4"> <img src="img/TR-PLC.jpg" alt="" class="img-responsive"></a></li>
                                <li class=""><a href="javascript:;"  data-toggle="modal" data-target="#referencia5"> <img src="img/logo-apertura.jpg" alt="" class="img-responsive"></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                </div>
            </div>
            <!-- MODALES REFERENCIAS -->
            <div class="modal fade" data-backdrop="false" id="referencia1" tabindex="-1" role="dialog" aria-labelledby="Chambers and Partners">
              <div class="modal-dialog " role="document">
                <div class="modal-content bg-4">
                  <div class="modal-header">
                    <div class="container">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="img/close-w.png" class="img-responsive" alt=""></span></button>
                    </div>
                  </div>
                  <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 m-bottom-20">
                                    <p class="paragraph-1 color-1">Chambers and Partners.</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="paragraph-2 color-1">

                                    Desde el año 2001, la prestigiosa revista Chambers and Partners ha incluido al Estudio en lo más alto de sus rankings. En el año 2017, se ha referido a nuestro Estudio diciendo:

                                    <br><br>
                                    “en el área de concursos es una firma altamente especializada, con una sólida experiencia en reestructuraciones y procesos concursales. Reconocida por su trabajo representando deudores, como ser compañías, sus socios y directores. Su experiencia incluye asesorar en reestructuraciones de deuda corporativa, transferencia y compraventa de activos, escisiones, fusiones y operaciones de Mercado de Capitales para reducir pasivos financieros.

                                    <br><br>
                                    Asimismo, la prestigiosa publicación indica que “el equipo es sólido y sabe realmente quien es quien en el mercado. Trabaja muy bien y sus abogados están entre los mejores en estas áreas”.

                                    <br><br>
                                    En 2017, el Estudio fue incluido en el rango “#1” del ranking de estudios recomendados en Reestructuraciones / Insolvencia. Asimismo, ocupa altos puestos en las prácticas de Litigios y Arbitrajes como en derecho comercial corporativo y fusiones y adquisiciones, habiendo obtenido durante varios años el galardón de “Leading Boutique” en esas áreas. 

                                    </p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="paragraph-2 color-1">
                                    El Dr. Héctor Alegria ocupó el rango “#1” tanto en derecho comercial y fusiones y adquisiciones durante los pasados años, y el Dr. Pablo Buey Fernández el rango “#3” y “#2” respectivamente.
                                    <br><br>
                                    
                                    En el año 2000-2001, el Dr. Héctor Alegria fue elegido uno de los cien “Abogados Globales” según la revista Chambers and Partners quien se refirió a él diciendo que era “un fenómeno”.

                                    <br><br>
                                    Los socios del Estudio ocupan también destacadas posiciones en sus áreas de especialización.

                                    <br><br>
                                    Fuente: Chambers and Partners, Chambers Latin America, The world’s leading lawyers for Business, 2017, The Client’s Guide.
                                    </p>
                                </div>
                            </div>
                        </div>                                                              
                  </div>
                  <div class="modal-footer text-center">
                    <div class="container">
                        <div class="col-sm-6 col-sm-offset-6">
                            <a href="https://www.chambersandpartners.com/Latin-America/firm/2385/estudio-alegria-buey-fernandez-fissore-y-montemerlo" target="_blank" class="btn-sm btn btn-bordered pull-left">Ver Referencia</a>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>  <!-- end modal -->                          
            <div class="modal fade" data-backdrop="false" id="referencia2" tabindex="-1" role="dialog" aria-labelledby="Latin Lawyer">
              <div class="modal-dialog" role="document">
                <div class="modal-content bg-4">
                  <div class="modal-header">
                    <div class="container">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="img/close-w.png" class="img-responsive" alt=""></span></button>
                    </div>
                  </div>
                  <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-8 col-sm-offset-2 m-bottom-20">
                                    <p class="paragraph-1 color-1">Latin Lawyer</p>
                                </div>
                                <div class="col-sm-8 col-sm-offset-2">
                                    <p class="paragraph-2 color-1">

                                    La revista especializada Latin Lawyer ha caratulado al estudio como una “insolvency elite”.
                                    <br><br>
                                    Asimismo, ha indicado que “la firma ha trabajado en reorganizaciones judiciales y extrajudiciales y procesos de concursos y quiebras en sectores de agronegocios, servicios públicos, bancarios, inmobiliarios y de logística. El Estudio Alegria ata su experiencia en insolvencia con una activa oferta en resolución de conflictos que incluye trabajos en la industria farmacéutica y de energía y recursos naturales, incluyendo el asesoramiento en procesos arbitrales ante la ICC. Su práctica en temas corporativos, bancarios y de M&A (Fusiones y Adquisiciones) son también fuertes”.

                                    <br><br>
                                    Señala también que el Estudio “es reconocido por sus abogados de alta calidad, que están totalmente comprometidos hacia sus clientes”.
                                    <br><br>
                                    Fuente: Latin Lawyer 250, 2017.

                                    </p>
                                </div>
                            </div>
                        </div>                                                              
                  </div>
                  <div class="modal-footer text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <a href="https://latinlawyer.com/ll250/firms/1133517/estudio-alegria-buey-fernandez-fissore-montemerlo" target="_blank" class="btn-sm btn btn-bordered pull-left">Ver Referencia</a>
                            </div>                                        
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>  <!-- end modal -->                          
            <div class="modal fade" data-backdrop="false" id="referencia3" tabindex="-1" role="dialog" aria-labelledby="IFLR 1000">
              <div class="modal-dialog" role="document">
                <div class="modal-content bg-4">
                  <div class="modal-header">
                    <div class="container">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="img/close-w.png" class="img-responsive" alt=""></span></button>
                    </div>
                  </div>
                  <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-8 col-sm-offset-2 m-bottom-20">
                                    <p class="paragraph-1 color-1">IFLR 1000.</p>
                                </div>
                                <div class="col-sm-8 col-sm-offset-2">
                                    <p class="paragraph-2 color-1">

                                    El Estudio Alegria es el estudio jurídico argentino más recomendado en asuntos de insolvencia por la publicación londinense IFLR 1000.

                                    “Expertos líderes de Argentina en insolvencia, clientes y competidores coinciden en forma unánime al sostener que el Estudio Alegria “se destaca sobre el resto de sus pares”. El especialista en insolvencias, Héctor Alegria es mundialmente recomendado para casos de insolvencia y litigios.” (IFLR, 2005)

                                    IFLR 1000. The Guide to the World’s Leading Financial Law Firms, Euromoney Institutional Investor PLC, London, 2006.


                                    </p>
                                </div>
                            </div>
                        </div>                                                              
                  </div>
                  <div class="modal-footer text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <a href="https://www.iflr1000.com/Firm/Estudio-Alegria-Buey-Fernandez-Fissore-Montemerlo/Profile/2129#rankings" target="_blank" class="btn-sm btn btn-bordered pull-left">Ver Referencia</a>
                            </div>                                        
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>  <!-- end modal -->                          
            <div class="modal fade" data-backdrop="false" id="referencia4" tabindex="-1" role="dialog" aria-labelledby="Practical Law Company">
              <div class="modal-dialog" role="document">
                <div class="modal-content bg-4">
                  <div class="modal-header">
                    <div class="container">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="img/close-w.png" class="img-responsive" alt=""></span></button>
                    </div>
                  </div>
                  <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-8 col-sm-offset-2 m-bottom-20">
                                    <p class="paragraph-1 color-1">Practical Law Company(PLC).</p>
                                </div>
                                <div class="col-sm-8 col-sm-offset-2">
                                    <p class="paragraph-2 color-1">

                                    Distinguió al Estudio Alegria como el estudio líder en insolvencia y reestructuraciones de Argentina y lo recomienda en derecho societario, fusiones y adquisiciones (M&A) y en litigios y arbitrajes.
                                    <br><br>
                                    PLC, Which Lawyer? Yearbook 2006.

                                    </p>
                                </div>
                            </div>
                        </div>                                                              
                  </div>
                  <div class="modal-footer text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <!-- <a href="javascript:;" class="btn-sm btn btn-bordered pull-left">Ver Referencia</a> -->
                            </div>                                        
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>  <!-- end modal -->                                            
            <div class="modal fade" data-backdrop="false" id="referencia5" tabindex="-1" role="dialog" aria-labelledby="Revista Apertura">
              <div class="modal-dialog" role="document">
                <div class="modal-content bg-4">
                  <div class="modal-header">
                    <div class="container">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="img/close-w.png" class="img-responsive" alt=""></span></button>
                    </div>
                  </div>
                  <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-8 col-sm-offset-2 m-bottom-20">
                                    <p class="paragraph-1 color-1">Revista APERTURA.</p>
                                </div>
                                <div class="col-sm-8 col-sm-offset-2">
                                    <p class="paragraph-2 color-1">

                                    La prestigiosa revista de negocios “Apertura” de Argentina, ha reconocido durante años la práctica del Estudio.
                                    <br><br>
                                    Así, en 2016 ubicó décimo al Estudio entre las firmas más importantes de la Argentina.

                                    <br><br>
                                    Por su parte, la publicación ubicó al Estudio en el primer puesto en las áreas de “Concursos” y de “Reestructuraciones”, en el tercer puesto en el área de “Litigios”, en sexto puesto en el área de “Arbitrajes” y en el séptimo puesto en el área de “M&A”.

                                    <br><br>
                                    Por varios años consecutivos, Héctor Alegria fue elegido como el segundo abogado más reconocido de Argentina y “referente de la profesión”. Los socios Pablo Buey Fernández, Gabriel Fissore y Javier Alegria ingresaron también al ranking de los abogados más prestigiosos.

                                    <br><br>
                                    Revista APERTURA N° 272, agosto 2016.

                                    </p>
                                </div>
                            </div>
                        </div>                                                              
                  </div>
                  <div class="modal-footer text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <!-- <a href="javascript:;" class="btn-sm btn btn-bordered pull-left">Ver Referencia</a> -->
                            </div>                                        
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>  <!-- end modal -->              
            <!-- FIN MODALES REFERENCIAS -->                             
        </section>
        <section class="quote" id="quote3">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="300ms">
                        <h2>"Hay que pensar como hombre de acción y actuar como 
                        <br class="hidden-xs"><span>hombre de pensamiento"</span>
                        <br><small>Henri Bergson</small>
                        </h2>                        
                    </div>
                </div>
            </div>
        </section>  
        <section id="practica" class="content bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="300ms">
                        <hr class="c-4">
                        <h2 class="color-4 h1">Práctica <br><b>Profesional</b></h2>
                    </div>
                    <div class="col-sm-6 wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="300ms">
                        <p class="color-2 paragraph-1">Desde su origen, el foco de actividad del Estudio Alegria se centra fundamentalmente en el derecho empresario, siendo mundialmente reconocido en las áreas de reestructuraciones financieras, fusiones y adquisiciones, derecho societario, derecho concursal y de los contratos civiles y comerciales, bancario y de mercado de capitales y en el área contenciosa (ya sea judicial, arbitral o preventiva).
                        <br>
                        <br>
                        En el curso de la vida profesional también se incorporaron al Estudio otras áreas tales como fueron el derecho administrativo económico, el derecho de la integración, de la competencia,
                        </p>
                    </div>
                    <div class="col-sm-6 wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="300ms">
                        <p class="color-2 paragraph-1">
                            infraestructura, energía y recursos naturales y el derecho de las telecomunicaciones.
                            <br>
                            <br>
                            Expondremos a continuación nuestra actividad profesional en cada área mencionada, aunque los valores y principios ya comentados, la atención personalizada del cliente y sus necesidades, el celo a la hora de evaluar conflictos de intereses y, por sobre todo, la ética profesional y la alta especialización, son características propias de nuestro modo de trabajar, sin importar a qué materia pertenezca el caso a tratar.

                        </p>
                    </div>
                    <div class="col-xs-12">
                        <ul class="list-unstyled list-inline practica-listado">
                            <li class="col-xs-12 col-sm-6 col-md-4 wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="300ms"><a class="color-4" href="javascript:;" data-toggle="modal" data-target="#practica1"><span>01.</span><span class="transition">Reestructuraciones <br>Financieras</span></a></li>
                            <li class="col-xs-12 col-sm-6 col-md-4 wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="400ms"><a class="color-4" href="javascript:;" data-toggle="modal" data-target="#practica2"><span>02.</span><span class="transition">Fusiones y <br>Adquisiciones (M&A)</span></a></li>
                            <li class="col-xs-12 col-sm-6 col-md-4 wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="500ms"><a class="color-4" href="javascript:;" data-toggle="modal" data-target="#practica3"><span>03.</span><span class="transition">Mercado <br>de capitales</span></a></li>
                            <li class="col-xs-12 col-sm-6 col-md-4 wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="600ms"><a class="color-4" href="javascript:;" data-toggle="modal" data-target="#practica4"><span>04.</span><span class="transition">Litigios</span></a></li>
                            <li class="col-xs-12 col-sm-6 col-md-4 wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="700ms"><a class="color-4" href="javascript:;" data-toggle="modal" data-target="#practica5"><span>05.</span><span class="transition">Solucion alternativa <br>de conflictos</span></a></li>
                            <li class="col-xs-12 col-sm-6 col-md-4 wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="800ms"><a class="color-4" href="javascript:;" data-toggle="modal" data-target="#practica6"><span>06.</span><span class="transition">Contratos<br> Civiles</span></a></li>
                            <li class="col-xs-12 col-sm-6 col-md-4 wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="900ms"><a class="color-4" href="javascript:;" data-toggle="modal" data-target="#practica7"><span>07.</span><span class="transition">Derecho <br>Societario</span></a></li>
                            <li class="col-xs-12 col-sm-6 col-md-4 wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="1000ms"><a class="color-4" href="javascript:;" data-toggle="modal" data-target="#practica8"><span>08.</span><span class="transition">Derecho bancario <br>y financiamiento</span></a></li>
                            <li class="col-xs-12 col-sm-6 col-md-4 wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="1100ms"><a class="color-4" href="javascript:;" data-toggle="modal" data-target="#practica9"><span>09.</span><span class="transition">Derecho <br>administrativo</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- MODALES PRACTICAS -->
            <div class="modal fade" data-backdrop="false" id="practica1" tabindex="-1" role="dialog" aria-labelledby="Reestructuraciones Financieras">
              <div class="modal-dialog" role="document">
                <div class="modal-content bg-2">
                  <div class="modal-header">
                    <div class="container">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="img/close-w.png" class="img-responsive" alt=""></span></button>
                    </div>
                  </div>
                  <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-8 col-sm-offset-2 m-bottom-20">
                                    <p class="paragraph-1 color-1">Reestructuraciones Financieras.</p>
                                </div>
                                <div class="col-sm-8 col-sm-offset-2">
                                    <p class="paragraph-2 color-1">

                                    El Estudio Alegria, Buey Fernández, Fissore & Montemerlo es el referente local y líder en la práctica relacionada con las reestructuraciones de deuda de empresas. 
                                    <br><br>
                                    Héctor Alegria ha sido el redactor de la Ley de Concursos y Quiebras Nº 19.551 y de muchas de sus reformas y modificaciones. Desde entonces, nuestro estudio ha participado en la gran mayoría de las reestructuraciones financieras de empresas argentinas y área de capitales nacionales o internacionales de gran envergadura, en casi todas las industrias y rubros de actividad. En esta área, hemos participado de más de cien concursos, quiebras, acuerdos preventivos extrajudiciales y acuerdos privados.

                                    <br><br>
                                    La práctica incluye el asesoramiento de empresas, de sus accionistas y directores o de sus acreedores, según el caso. Nuestra tarea es importante cuando la crisis se ha presentado, pero nos enorgullecemos de tener alta especialidad en la detección temprana de síntomas y en la imaginación creativa de las mejores vías para la evitarla, o para paliar sus efectos inmediatos. Analizamos y proponemos soluciones que sean eficientes, económicas y rápidas, preferentemente recurriendo a métodos técnicos innovadores que conjuguen esos objetivos (en el pasado hemos intervenido a tales fines en casos de reorganizaciones societarias, ventas de activos, alianzas estratégicas, fusiones y escisiones, securitización de activos financieros, contratos de coproducción, emisiones de capital u obligaciones negociables, renegociaciones parciales de pasivo y apoyos financieros especiales, entre otros).

                                    <br><br>
                                    Si bien la satisfacción de nuestros clientes es nuestro fin, muchas publicaciones han reconocido reiteradamente al Estudio en los primeros puestos en los rankings en esta especialidad como puede verse en el capítulo de “Referencias”.

                                    <br><br>
                                    En momentos de crisis, todos los institutos e instituciones jurídicas se ponen en tela de juicio. Es por ello que la comprensión integral del derecho empresario es un presupuesto necesario de nuestra actividad. Es así como nuestra especial versación en el ámbito de las reestructuraciones financieras, informa las otras áreas de práctica, en las que nada damos por sentado y realizamos un análisis profundo de los temas en cuestión.

                                    </p>
                                </div>
                            </div>
                        </div>                                                              
                  </div>
                  <div class="modal-footer text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                
                            </div>                                        
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>  <!-- end modal -->                      
            <div class="modal fade" data-backdrop="false" id="practica2" tabindex="-1" role="dialog" aria-labelledby="Fusiones y adquisiciones (M&A)">
              <div class="modal-dialog" role="document">
                <div class="modal-content bg-2">
                  <div class="modal-header">
                    <div class="container">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="img/close-w.png" class="img-responsive" alt=""></span></button>
                    </div>
                  </div>
                  <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-8 col-sm-offset-2 m-bottom-20">
                                    <p class="paragraph-1 color-1">Fusiones y adquisiciones (M&A).</p>
                                </div>
                                <div class="col-sm-8 col-sm-offset-2">
                                    <p class="paragraph-2 color-1">
                                        Nuestro equipo interdisciplinario nos brinda una especial preparación para analizar y recomendar complejas estructuras a la hora de comprar, vender, fusionar o reestructurar corporativamente empresas. La experiencia en esta área abarca un amplio campo, ya sea relativo a empresas públicas o privadas, e incluye joint ventures, alianzas estratégicas, escisiones, compraventa de activos estratégicos, transferencia de fondos de comercio, ofertas públicas de adquisición, compraventa de empresas en concurso o quiebra y la oferta inicial de acciones en el mercado bursátil, así como los efectos de estos contratos en temas de derecho societario, bursátil y de la competencia.
            
                                        <br><br>
                                        Con respecto a aquellas áreas del derecho fuera de nuestra especialidad, tenemos la flexibilidad de armar equipos de trabajo con otros especialistas de cada una de ellas, con el objeto de formar un grupo cohesionado y dedicado al éxito de la transacción.
                                        <br><br>
                                        Asimismo, siendo esta área en general contra-cíclica respecto de las reestructuraciones financieras, nuestra estructura de profesionales cuenta con el tiempo y la capacitación necesarios para dedicarse a transacciones complejas en el marco de la confidencialidad y
                                        premura generalmente requeridas.
                                        <br><br>
                                        De esta manera, nos diferenciamos por la atención personalizada de nuestros socios, flexibilidad y especialización máxima en cada uno de los aspectos en juego.


                                    </p>
                                </div>
                            </div>
                        </div>                                                              
                  </div>
                  <div class="modal-footer text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                
                            </div>                                        
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>  <!-- end modal -->                      
            <div class="modal fade" data-backdrop="false" id="practica3" tabindex="-1" role="dialog" aria-labelledby=" Mercado de capitales">
              <div class="modal-dialog" role="document">
                <div class="modal-content bg-2">
                  <div class="modal-header">
                    <div class="container">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="img/close-w.png" class="img-responsive" alt=""></span></button>
                    </div>
                  </div>
                  <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-8 col-sm-offset-2 m-bottom-20">
                                    <p class="paragraph-1 color-1"> Mercado de capitales.</p>
                                </div>
                                <div class="col-sm-8 col-sm-offset-2">
                                    <p class="paragraph-2 color-1">
                                       El Estudio Alegria posee amplia experiencia en el mercado de capitales. Desarrolló una importante trayectoria en la oferta pública, tanto en relación con lo referido a la autorización de las emisiones de acciones o deuda, como con las contrataciones vinculadas a las colocaciones (underwriting), contratos de colocación, consorcios colocadores y contratos de put y call. Hemos participado además en forma activa en la estructuración y salida al mercado de obligaciones negociables, fideicomisos financieros, fondos comunes de inversión y securitizaciones.
                                        <br><br>
                                        Con el asesoramiento del Estudio se han llevado a cabo algunas de las operaciones de mayor envergadura económica que, en años recientes, se han concretado en el Mercado de Valores de la Argentina, como también la colocación en el mercado de capitales de las primeras emisiones de acciones hechas bajo el programa de conversión de deuda externa.

                                        <br><br>
                                        Nuestra experiencia también incluye la representación de empresas, mercados, agentes, accionistas y funcionarios en actuaciones administrativas, sumarios y litigios relacionados con su actuación en el mercado de capitales.


                                    </p>
                                </div>
                            </div>
                        </div>                                                              
                  </div>
                  <div class="modal-footer text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                
                            </div>                                        
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>  <!-- end modal -->                      
            <div class="modal fade" data-backdrop="false" id="practica4" tabindex="-1" role="dialog" aria-labelledby="Litigios">
              <div class="modal-dialog" role="document">
                <div class="modal-content bg-2">
                  <div class="modal-header">
                    <div class="container">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="img/close-w.png" class="img-responsive" alt=""></span></button>
                    </div>
                  </div>
                  <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-8 col-sm-offset-2 m-bottom-20">
                                    <p class="paragraph-1 color-1">Litigios.</p>
                                </div>
                                <div class="col-sm-8 col-sm-offset-2">
                                    <p class="paragraph-2 color-1">
                                        El departamento de práctica contenciosa atiende litigios que tramitan ante los tribunales federales, la Corte Suprema de Justicia, los distintos tribunales de justicia locales y organismos administrativos. Nuestra práctica se centra en el asesoramiento y patrocinio en litigios complejos, y en especial en aquellos que se derivan de nuestra práctica del derecho concursal (pedidos de quiebra, ejecuciones de garantías, juicios ejecutivos, concursos preventivos y quiebras), derecho societario (litigios entre accionistas, juicios iniciados contra los directores y funcionarios de empresas, conflictos entre accionistas, sumarios administrativos ante los organismos de fiscalización bancaria, de títulos valores y de defensa de la competencia) y del derecho comercial en general (litigios contractuales, de responsabilidad por productos, disputas en materia de comercio exterior, entre otros).

                                        <br><br>
                                        Las funciones de representación incluyen asimismo gestiones ante los poderes públicos y administrativos como la Comisión Nacional de Valores, el Tribunal Fiscal de la Nación, el Banco Central de la República Argentina, la Inspección General de Justicia, la Comisión Nacional de Defensa de la Competencia, la Secretaría de Comercio y las distintas Secretarías, Subsecretarías y Direcciones de los Ministerios de Hacienda, de Finanzas,  de Producción, de Modernización, y de Energía y Minería, entre otros.



                                    </p>
                                </div>
                            </div>
                        </div>                                                              
                  </div>
                  <div class="modal-footer text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                
                            </div>                                        
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>  <!-- end modal -->                      
            <div class="modal fade" data-backdrop="false" id="practica5" tabindex="-1" role="dialog" aria-labelledby="Solución Alternativa de Conflictos">
              <div class="modal-dialog" role="document">
                <div class="modal-content bg-2">
                  <div class="modal-header">
                    <div class="container">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="img/close-w.png" class="img-responsive" alt=""></span></button>
                    </div>
                  </div>
                  <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-8 col-sm-offset-2 m-bottom-20">
                                    <p class="paragraph-1 color-1">Solución Alternativa de Conflictos.</p>
                                </div>
                                <div class="col-sm-8 col-sm-offset-2">
                                    <p class="paragraph-2 color-1">
                                        En el campo del arbitraje, los miembros del Estudio Alegria especializados en el tema han actuado en calidad de árbitros o de representantes de las partes en la resolución de conflictos entre entidades estatales o privadas. Hemos intervenido en algunas de las cuestiones con mayor valor económico de las sometidas a arbitraje en la Argentina y participamos activamente en arbitrajes institucionales (Cámara de Comercio Internacional, Bolsa de Comercio de Buenos Aires y Rosario y el Centro Empresarial de Mediación y Arbitraje), arbitrajes UNCITRAL y arbitrajes ad-hoc. Junto con otros estudios de primera línea, el Estudio Alegria formó parte de la constitución del Centro Empresarial de Mediación y Arbitraje y desarrolló tanto desde el punto de vista teórico como en la práctica el instituto de la mediación y otras formas alternativas de resolución de conflictos.


                                    </p>
                                </div>
                            </div>
                        </div>                                                              
                  </div>
                  <div class="modal-footer text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                
                            </div>                                        
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>  <!-- end modal -->    
            <div class="modal fade" data-backdrop="false" id="practica6" tabindex="-1" role="dialog" aria-labelledby="Contratos Civiles y Comerciales">
              <div class="modal-dialog" role="document">
                <div class="modal-content bg-2">
                  <div class="modal-header">
                    <div class="container">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="img/close-w.png" class="img-responsive" alt=""></span></button>
                    </div>
                  </div>
                  <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-8 col-sm-offset-2 m-bottom-20">
                                    <p class="paragraph-1 color-1">Contratos Civiles y Comerciales.</p>
                                </div>
                                <div class="col-sm-8 col-sm-offset-2">
                                    <p class="paragraph-2 color-1">
                                        De acuerdo a los requerimientos del mundo moderno, el Estudio Alegria brinda a sus clientes asesoramiento en una amplia gama de negocios contractuales, que incluyen desde la clásica compraventa, la locación, el comodato y el mandato, hasta formas modernas como el leasing, factoring, franchising, y los contratos de fideicomiso, agencia, distribución, concesión y suministro. Asimismo, asesoramos en todo tipo de operaciones inmobiliarias, relacionadas con la construcción, el transporte y aquellas con fines de garantía (fianzas, prendas, hipotecas, fideicomisos, warrants, etc.).

                                        <br><br>
                                        En ese sentido, nuestros profesionales están capacitados para actuar durante todo el íter negocial del acuerdo de que se trate, participando y asistiendo a nuestros clientes en la redacción, negociación, suscripción y ejecución del contrato, así como en el monitoreo de sus posibles modificaciones o incumplimientos




                                    </p>
                                </div>
                            </div>
                        </div>                                                              
                  </div>
                  <div class="modal-footer text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                
                            </div>                                        
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>  <!-- end modal -->                      
            <div class="modal fade" data-backdrop="false" id="practica7" tabindex="-1" role="dialog" aria-labelledby="Derecho Societario">
              <div class="modal-dialog" role="document">
                <div class="modal-content bg-2">
                  <div class="modal-header">
                    <div class="container">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="img/close-w.png" class="img-responsive" alt=""></span></button>
                    </div>
                  </div>
                  <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-8 col-sm-offset-2 m-bottom-20">
                                    <p class="paragraph-1 color-1">Derecho Societario.</p>
                                </div>
                                <div class="col-sm-8 col-sm-offset-2">
                                    <p class="paragraph-2 color-1">
                                        En la especialidad de Derecho Societario, el Estudio Alegria, Buey Fernández, Fissore & Montemerlo se dedica al asesoramiento de empresas en toda su extensión, participando en contratos y en el diseño multidisciplinario de estrategias de desarrollo de alta dirección
                                        y de solución de cuestiones concretas, así como de conflictos societarios de toda índole.

                                        <br><br>
                                        El Estudio Alegria asesora a sociedades comerciales nacionales y extranjeras y sus socios y administradores en el más variado espectro de transacciones, incluyendo contratos comerciales en general, start-up de operaciones en el país, constitución de sociedades, inscripciones en registros societarios, convenios entre accionistas, reorganizaciones societarias, liquidación de sociedades, resolución de conflictos societarios, financiamiento corporativo, inversiones extranjeras y transferencia de tecnología, entre otras.




                                    </p>
                                </div>
                            </div>
                        </div>                                                              
                  </div>
                  <div class="modal-footer text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                
                            </div>                                        
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>  <!-- end modal -->                      
            <div class="modal fade" data-backdrop="false" id="practica8" tabindex="-1" role="dialog" aria-labelledby="Derecho Bancario y Financiamiento">
              <div class="modal-dialog" role="document">
                <div class="modal-content bg-2">
                  <div class="modal-header">
                    <div class="container">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="img/close-w.png" class="img-responsive" alt=""></span></button>
                    </div>
                  </div>
                  <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-8 col-sm-offset-2 m-bottom-20">
                                    <p class="paragraph-1 color-1">Derecho Bancario y Financiamiento.</p>
                                </div>
                                <div class="col-sm-8 col-sm-offset-2">
                                    <p class="paragraph-2 color-1">
                                        En materia de Derecho Bancario, el Estudio Alegria provee la más amplia gama de asesoramiento a instituciones financieras nacionales e internacionales, como también a inversores individuales, incluyendo la organización y radicación de bancos comerciales o de inversión, aprobación de inversiones extranjeras en la industria bancaria, fusiones y adquisiciones de entidades financieras, negociaciones de reescalonamiento o reestructuración de transacciones financieras, contratos de préstamo (sindicados, estructurado o simples) y representación de entidades ante el Banco Central.

                                        <br><br>
                                        Nuestro Estudio ha redactado el proyecto de Ley de Leasing y el proyecto de Ley sobre Derivados, por encargo de instituciones del sector, y presentó el primer proyecto de regulación de la securitización en Argentina.

                                        <br><br>
                                        Asimismo, hemos asesorado a diversas instituciones multinacionales en otorgamientos de préstamos a entidades locales, incluyendo el estudio de la normativa sobre control de cambios.



                                    </p>
                                </div>
                            </div>
                        </div>                                                              
                  </div>
                  <div class="modal-footer text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                
                            </div>                                        
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>  <!-- end modal -->                      
            <div class="modal fade" data-backdrop="false" id="practica9" tabindex="-1" role="dialog" aria-labelledby="Derecho Administrativo">
              <div class="modal-dialog" role="document">
                <div class="modal-content bg-2">
                  <div class="modal-header">
                    <div class="container">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="img/close-w.png" class="img-responsive" alt=""></span></button>
                    </div>
                  </div>
                  <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-8 col-sm-offset-2 m-bottom-20">
                                    <p class="paragraph-1 color-1">Derecho Administrativo.</p>
                                </div>
                                <div class="col-sm-8 col-sm-offset-2">
                                    <p class="paragraph-2 color-1">
                                       Nuestro Estudio posee amplia experiencia en materia administrativa. Su actuación en este campo abarca todo el ámbito de las licitaciones públicas y privadas y los contratos administrativos, incluyendo los de obra pública y suministro, asesoramiento en materia de expropiación, promoción industrial, minería, transferencia de tecnología, régimen de inversiones extranjeras, derecho ambiental, lealtad comercial y control de precios, comercio exterior (clasificación y valoración aduanera, control de cambios, derechos antidumping y compensatorios), régimen sobre compensación de deudas con el Estado y consolidación de la deuda pública y privatizaciones. Incluye asimismo la nóvel figura de las Asociaciones Público-Privadas.

                                        <br><br>
                                        El asesoramiento que brinda el Estudio Alegria comprende todo el ámbito del proceso administrativo propiamente dicho y además del control judicial de los actos de la administración pública nacional, provincial y municipal.

                                        <br><br>
                                        El Estudio Alegria, Buey Fernández, Fissore & Montemerlo ha intervenido en varios procesos licitatorios de privatización de empresas públicas, especialmente aquellas relativas a las áreas de energía, gas y bancos.



                                    </p>
                                </div>
                            </div>
                        </div>                                                              
                  </div>
                  <div class="modal-footer text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                
                            </div>                                        
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>  <!-- end modal -->                      

            <!-- FIN MODALES PRACTICAS -->
        </section>
        <section class="quote" id="quote4">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="300ms">
                        <h2>"La sabiduría es la 
                        <br class="hidden-xs"><span>hija de la experiencia"</span>
                        <br><small>Leonardo Da Vinci</small>
                        </h2>                        
                    </div>
                </div>
            </div>
        </section> 
        <section id="socios" class="content bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 wow fadeInUp animated" data-wow-duration="2000ms" data-wow-delay="300ms">
                        <hr class="c-4">
                        <h2 class="color-4 h1"><b>Socios</b></h2>
                    </div>
                    <div class="col-sm-6 wow fadeInUp animated" data-wow-duration="2000ms" data-wow-delay="300ms">
                        <p class="color-2 bajada">Nuestro equipo interdisciplinario formado por abogados y contadores públicos y el gran compromiso de los socios en los asuntos que se nos encomiendan distinguen nuestra práctica profesional.</p>
                    </div>
                    <div class="col-sm-12">
                        <div class="row">
                            <ul class="list-unstyled list-inline socios-listado">
                                <li class="col-xs-12 col-sm-6 color-2 socio wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="300ms">
                                    <span class="socio__img">
                                        <p class="color-3 visible-xs h2 text-left">Héctor Alegría</p>
                                        <span style="background-image: url('img/170731-Estudio Alegria-0023-b.jpg')"></span>
                                        <a href="javascript:;" class="text-left color-2 visible-xs" data-toggle="modal" data-target="#socio1">+ INFO</a>
                                        
                                    </span>
                                    <span class="socio__data">
                                       <span class="socio__data__nombre">
                                         Héctor Alegría
                                       </span>
                                       <span class="socio__data__descrip paragraph-2">Es socio fundador del Estudio Alegria, Buey Fernández, Fissore & Montemerlo.
                                            <br>
                                            Estudió Derecho en la Universidad de Buenos Aires, Argentina, donde se graduó en 1957. Obtuvo su Doctorado en Derecho y Ciencias Sociales en la misma Universidad. Su tesis doctoral, “El Aval”, obtuvo la máxima calificación (sobresaliente), otorgándosele por la misma el “Premio Facultad” (1971). 
                                        </span>
                                        <a href="javascript:;" data-toggle="modal" data-target="#socio1">+ INFO</a>
                                    </span>
                                </li>
                                <li class="col-xs-12 col-sm-6 color-2 socio wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="500ms">
                                    <span class="socio__img">
                                        <p class="color-3 visible-xs h2 text-left">Javier Alegría</p>
                                        <span style="background-image: url('img/Javier_Alegria_04_med-res.jpg')"></span>
                                        <a href="javascript:;" class="text-left color-2 visible-xs" data-toggle="modal" data-target="#socio2">+ INFO</a>

                                        
                                    </span>
                                    <span class="socio__data">
                                       <span class="socio__data__nombre">
                                         Javier Alegría
                                       </span>
                                       <span class="socio__data__descrip paragraph-2">
                                            El Dr. Alegria es miembro del Estudio desde 1995 y Socio desde 2004. Se especializa en Reestructuraciones Financieras y Societarias, Concursos y Quiebras, Fusiones y Adquisiciones, Mercado de Capitales, Derecho Societario, Derecho Bancario, Contratos Civiles y Comerciales y Litigios y Arbitrajes.
                                        </span>
                                       <a href="javascript:;" data-toggle="modal" data-target="#socio2">+ INFO</a>
                                    </span>
                                </li>
                                <li class="col-xs-12 col-sm-6 color-2 socio wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="300ms">
                                    <span class="socio__img">
                                        <p class="color-3 visible-xs h2 text-left">Pablo Buey Fernández</p>
                                        <span style="background-image: url('img/Pablo_Buey_Fernandez_01_med-res.jpg')"></span>
                                        <a href="javascript:;" class="text-left color-2 visible-xs" data-toggle="modal" data-target="#socio3">+ INFO</a>

                                        
                                    </span>
                                    <span class="socio__data">
                                       <span class="socio__data__nombre">
                                         Pablo Buey Fernández
                                       </span>
                                       <span class="socio__data__descrip paragraph-2">
                                            El Dr. Pablo Buey Fernández es integrante del Estudio desde 1980 y Socio desde el año 1989., Se especializa en Reestructuraciones Financieras y Societarias, Concursos y quiebras, Fusiones y Adquisiciones, Mercado de Capitales, Derecho Societario, Derecho Bancario, Contratos Civiles y Comerciales, Litigios y Solución de Conflictos.
                                        </span>
                                       <a href="javascript:;" data-toggle="modal" data-target="#socio3">+ INFO</a>
                                    </span>
                                </li>
                                <li class="col-xs-12 col-sm-6 color-2 socio wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="500ms">
                                    <span class="socio__img">
                                        <p class="color-3 visible-xs h2 text-left">Gabriel H. Fissorea</p>
                                        <span style="background-image: url('img/Gabriel_Fissore_07_med-res.jpg')"></span>
                                        <a href="javascript:;" class="text-left color-2 visible-xs" data-toggle="modal" data-target="#socio4">+ INFO</a>

                                        
                                    </span>
                                    <span class="socio__data">
                                       <span class="socio__data__nombre">
                                         Gabriel H. Fissore
                                       </span>
                                       <span class="socio__data__descrip paragraph-2">El Dr. Fissore es socio del Estudio y se ha destacado por su intervención profesional en temas relacionados con el Derecho Comercial, Societario, Mercado de Capitales, Operaciones Bancarias, Derecho Concursal, Litigios Arbitrajes y Solución de Conflictos. Asimismo, en su práctica profesional ha participado en el asesoramiento de empresas nacionales y extranjeras en operaciones locales e internacionales.
                                        </span>
                                       <a href="javascript:;" data-toggle="modal" data-target="#socio4">+ INFO</a>
                                    </span>
                                </li>
                                <li class="col-xs-12 col-sm-6 color-2 socio wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="300ms">
                                    <span class="socio__img">
                                        <p class="color-3 visible-xs h2 text-left">Miguel Montemerlo</p>
                                        <span style="background-image: url('img/Miguel_Montemerlo_06_med-res.jpg')"></span>
                                        <a href="javascript:;" class="text-left color-2 visible-xs" data-toggle="modal" data-target="#socio5">+ INFO</a>

                                        
                                    </span>
                                    <span class="socio__data">
                                       <span class="socio__data__nombre">
                                         Miguel Montemerlo
                                       </span>
                                       <span class="socio__data__descrip paragraph-2">El Dr. Montemerlo es integrante del Estudio desde 1980 y Socio desde 2000. Se especializa en cuestiones económico-contables y negociaciones relacionadas con Reestructuraciones Financieras, Fusiones y Adquisiciones, Derecho Societario, Litigios, Arbitrajes  y Contratos Civiles y Comerciales.
                                        </span>
                                       <a href="javascript:;" data-toggle="modal" data-target="#socio5">+ INFO</a>
                                    </span>
                                </li>                                
                            </ul>
                            
                        </div>

                    </div>
                </div>
            </div>
            <!--INICIO MODALES SOCIOS -->
            <div class="modal fade" data-backdrop="false" id="socio1" tabindex="-1" role="dialog" aria-labelledby="Héctor Alegría">
              <div class="modal-dialog" role="document">
                <div class="modal-content bg-1">
                  <div class="modal-header">
                    <div class="container">
                        <button type="button" class="close color-2" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="img/close-b.png" class="img-responsive" alt=""></span></button>
                    </div>
                  </div>
                  <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <span class="socio__modal__img" style="background-image: url('img/170731-Estudio Alegria-0023-b.jpg');"></span>
                                    <p class="paragraph-2 color-3">Idiomas: español, italiano, comprensión de francés e inglés.</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="paragraph-2 color-2">

                                    Es socio fundador del Estudio Alegria, Buey Fernández, Fissore & Montemerlo.

                                    <br><br>
                                    Estudió Derecho en la Universidad de Buenos Aires, Argentina, donde se graduó en 1957. Obtuvo su Doctorado en Derecho y Ciencias Sociales en la misma Universidad. Su tesis doctoral, “El Aval”, obtuvo la máxima calificación (sobresaliente), otorgándosele por la misma el “Premio Facultad” (1971). En 1969 fue galardonado con el premio de “Joven Sobresaliente” otorgado por la Cámara Junior.

                                    <br><br>
                                    Fue Juez Nacional en lo Comercial (1963-1969), primer Presidente de la Comisión Nacional de Valores (1969-1975) y Conjuez de la Corte Suprema de Justicia de la Nación (1995-1999). 

                                    <br><br>
                                    Es Académico de número de la Academia Nacional de Derecho y Ciencias Sociales de Buenos Aires; Académico en la Academia de Mercado de Capitales (Argentina), Académico en la Academia de Derecho Bursátil y de la Actividad Financiera de México, Director del Instituto de Derecho Empresarial de la Academia Nacional de Derecho y Ciencias Sociales y Director del Instituto de Derecho Comercial del Colegio Público de Abogados. Ha recibido diversos premios como, por ejemplo, el Premio Konex en el rubro “Humanidades” (2006), “Premio Justicia 2009”, otorgado por la Universidad de Ciencias Empresariales y Sociales (UCES), por su “Descollante Aporte al Derecho Latinoamericano”, otorgado por la Asociación Iberoamericana de Derecho Privado (2012), y premio Konex de Platino 2016, rubro “Humanidades”, “Derecho Comercial” (2016). Fue elegido por la Revista especializada Chambers and Partners como uno de los 100 abogados más importantes del mundo (Londres, Inglaterra, año 2000).

                                    <br><br>
                                    Fue miembro de diferentes comisiones de reformas al Código Civil y Comercial: Miembro de las Comisiones de Unificación y Reformas al Código Civil y de Comercio (de 1987 y de 1992) que elaboró los Anteproyectos de Unificación de la Legislación Civil y Comercial; Miembro de la Comisión encargada de la redacción de un nuevo Código Civil (1995), que elaboró el “Proyecto de Código Civil” (unificado con el de Comercio), 1998; Coautor del Proyecto de Ley de Concursos (luego dictada bajo el número 19.551) y su reforma (ley 22.917); Autor del Proyecto de Ley de Leasing (luego ley 25.248) y de la Ley de Caja de Valores (ley 20.643), entre otros proyectos legislativos.

                                    <br><br>
                                    Es Profesor Emérito de la Universidad de Buenos Aires (desde 2000), habiendo sido Profesor Titular de Derecho Comercial en la Facultad de Derecho de la Universidad de Buenos Aires (desde 1982) y Profesor Titular de Derecho Económico en la Facultad de Ciencias Económicas de esa Universidad (1969-2002). 

                                    <br><br>
                                    Autor de diversas obras: “Sociedades Anónimas”, “El Aval”, “Algunas cuestiones de Derecho Concursal”, “Actuación del Síndico en Convocatorias y Quiebras”, “Las Sociedades Anónimas en los Países de la Alalc”, “Concursos”, libro en conjunto sobre la obra de Piero Pajardi, “La Ley de Convertibilidad”, en colaboración con Julio César Rivera, y numerosos (más de cien) trabajos en revistas del país y del exterior y ponencias escritas en Congresos y Jornadas. 

                                    <br><br>
                                    Es director de la “Revista de Derecho Privado y Comunitario”, de la Revista “Derecho Comercial y de las Obligaciones”, del “Suplemento Especial de Concursos y Quiebras” editado por La Ley (trimestral). Ha dictado más de setecientas conferencias y asistido a Congresos y Jornadas en el país y el exterior.

                                    <br><br>
                                    Es Miembro de diversos tribunales arbitrales (permanentes y ad-hoc) y ha actuado como consultor internacional.


                                    </p>
                                </div>
                            </div>
                        </div>                                                              
                  </div>
                </div>
              </div>
            </div>  <!-- end modal -->                                              
            <div class="modal fade" data-backdrop="false" id="socio2" tabindex="-1" role="dialog" aria-labelledby="Javier Alegría">
              <div class="modal-dialog" role="document">
                <div class="modal-content bg-1">
                  <div class="modal-header">
                    <div class="container">
                        <button type="button" class="close color-2" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="img/close-b.png" class="img-responsive" alt=""></span></button>
                    </div>
                  </div>
                  <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <span class="socio__modal__img" style="background-image: url('img/Javier_Alegria_04_med-res.jpg');"></span>
                                    <p class="paragraph-2 color-3">Idiomas: español, ingles, comprensión de francés y portugués.</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="paragraph-2 color-2">

                                    El Dr. Alegria es miembro del Estudio desde 1995 y Socio desde 2004. Se especializa en Reestructuraciones Financieras y Societarias, Concursos y Quiebras, Fusiones y Adquisiciones, Mercado de Capitales, Derecho Societario, Derecho Bancario, Contratos Civiles y Comerciales y Litigios y Arbitrajes.

                                    <br><br>
                                    En los años 2003-2004 realizó una práctica como abogado extranjero en la oficina de Nueva York, Estados Unidos, de la firma internacional Cleary, Gottlieb, Steen & Hamilton.

                                    <br><br>
                                    Obtuvo el título de abogado en la Universidad Católica Argentina en 1998. Realizó un curso de especialización en la Problemática Legal de la Empresa (Pre-Master) en la Universidad Austral en 1997, en el que obtuvo el primer premio. En el año 2003 obtuvo el título de Master en Leyes (LL.M.) en la Northwestern University de Chicago, Estados Unidos. En ese mismo año también obtuvo un diplomado en Administración de Empresas en la Kellogg School of Management, la Escuela de Negocios de Northwestern University.

                                    <br><br>
                                     Es Profesor de Concursos en la Facultad de Derecho de la Universidad de Buenos Aires y en la Universidad del CEMA. Es Profesor en el Curso de Derecho Societario de la Universidad Austral. Fue Profesor de la Cátedra de Derecho Comercial I (Parte General y Sociedades) en la Facultad de Derecho de la Universidad Católica Argentina.

                                     <br><br>
                                    Fue elegido por el diario Infobae como uno de los abogados jóvenes con mayor proyección profesional, en base a una encuesta realizada entre pares en 2005.
                                     <br><br>
                                    Ha sido expositor en seminarios de su especialidad y ha realizado diversos cursos de perfeccionamiento en el área del derecho comercial y financiero. Es autor de varios trabajos de investigación de su especialidad.
                                     <br><br>
                                    Es miembro del Colegio Público de Abogados de la Capital Federal, del Colegio de Abogados de Río Cuarto (Córdoba) y del Colegio de Abogados de Rafaela (Santa Fe). Es miembro de la División Jurídica de IDEA y del Consejo Consultivo Honorario de la Cámara de Sociedades Anónimas.



                                    </p>
                                </div>
                            </div>
                        </div>                                                              
                  </div>
                </div>
              </div>
            </div>  <!-- end modal -->                                              
            <div class="modal fade" data-backdrop="false" id="socio3" tabindex="-1" role="dialog" aria-labelledby="Pablo Buey Fernández">
              <div class="modal-dialog" role="document">
                <div class="modal-content bg-1">
                  <div class="modal-header">
                    <div class="container">
                        <button type="button" class="close color-2" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="img/close-b.png" class="img-responsive" alt=""></span></button>
                    </div>
                  </div>
                  <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <span class="socio__modal__img" style="background-image: url('img/Pablo_Buey_Fernandez_01_med-res.jpg');"></span>
                                    <p class="paragraph-2 color-3">Idiomas: español e ingles.</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="paragraph-2 color-2">

                                    El Dr. Pablo Buey Fernández es integrante del Estudio desde 1980 y Socio desde el año 1989., Se especializa en Reestructuraciones Financieras y Societarias, Concursos y quiebras, Fusiones y Adquisiciones, Mercado de Capitales, Derecho Societario, Derecho Bancario, Contratos Civiles y Comerciales, Litigios y Solución de Conflictos.
                                    <br><br>
                                    En 1985 realizó una práctica como abogado extranjero en la firma “Tew, Jordan, Schulte & Beasley” de Florida, Estados Unidos.
                                    <br><br>
                                    Es Abogado egresado de la Universidad de Buenos Aires en 1979 y obtuvo el grado académico de Master en Leyes (LL.M.) en la Universidad de Harvard,  Cambridge, Estados Unidos en 1985.
                                    <br><br>
                                    Se desempeñó como Profesor Titular en la materia “Legislación Comparada en Mercados de Capitales” en el Programa Master en Administración de Activos Financieros en la Escuela Superior de Economía y Administración de Empresas (E.S.E.A.D.E.) y como Profesor de Derecho Comercial en el Master en Administración de Empresas en Crisis dictado en la Facultad de Ciencias Económicas de la Universidad de Buenos Aires. 
                                    <br><br>
                                    Dictó cursos de posgrado en Alianzas Estratégicas y Joint-Ventures y Contratos de Colaboración Empresaria en la Facultad de Derecho y Ciencias Sociales de la Universidad de Buenos Aires –casa de estudios en la cual también fue Profesor en la materia Derecho de los Negocios Internacionales y Formas Modernas de Negociación Mercantil- y fue Profesor Adjunto en la materia Derecho Comercial (Sociedades y Contratos Comerciales) de la Universidad del Salvador. 
                                    <br><br>
                                    Ha publicado diversos artículos sobre temas societarios, bancarios y concursales en revistas jurídicas. Ha presidido y dictado seminarios sobre temas de derecho empresarial y conferencias en el país y en el exterior sobre temas de su especialidad.
                                    <br><br>
                                    Ha sido reconocido por la prestigiosa revista Chambers & Partners como abogado líder en diversas áreas de su especialidad.
                                    <br><br>
                                    Ha sido relator del Comité de Insolvencia y Derechos Creditorios de la 22ª Convención de la International Bar Association. 
                                    Es miembro del Colegio Público de Abogados de la Capital Federal.




                                    </p>
                                </div>
                            </div>
                        </div>                                                              
                  </div>
                </div>
              </div>
            </div>  <!-- end modal -->                                              
            <div class="modal fade" data-backdrop="false" id="socio4" tabindex="-1" role="dialog" aria-labelledby="Gabriel Fissore">
              <div class="modal-dialog" role="document">
                <div class="modal-content bg-1">
                  <div class="modal-header">
                    <div class="container">
                        <button type="button" class="close color-2" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="img/close-b.png" class="img-responsive" alt=""></span></button>
                    </div>
                  </div>
                  <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <span class="socio__modal__img" style="background-image: url('img/Gabriel_Fissore_07_med-res.jpg');"></span>
                                    <p class="paragraph-2 color-3">Idiomas: español e ingles.</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="paragraph-2 color-2">

                                    El Dr. Fissore es socio del Estudio y se ha destacado por su intervención profesional en temas relacionados con el Derecho Comercial, Societario, Mercado de Capitales, Operaciones Bancarias, Derecho Concursal, Litigios Arbitrajes y Solución de Conflictos. Asimismo, en su práctica profesional ha participado en el asesoramiento de empresas nacionales y extranjeras en operaciones locales e internacionales.

                                    <br><br>
                                    Se graduó con honores en la Facultad de Derecho de la Universidad de Buenos Aires en 1984. Realizó un curso de post grado en la Universidad Harvard donde obtuvo el título de Master en Leyes (LL.M.) en 1992. Ha sido distinguido en varias oportunidades con los siguientes premios: Summa Cum Laude 1985 y Diploma de Honor de la Facultad de Derecho de la Universidad de Buenos Aires. En el mismo año obtuvo también el máximo Galardón de Grado de la Universidad de Buenos Aires. Recibió los Premios Dr. Silva Riestra, Dr. Fontán Balestra y Dr. Tedín Uriburu (1985).

                                    <br><br>
                                    El Dr. Fissore se desempeñó como abogado de la Corporación Interamericana de Inversiones en Washington D.C. entre julio de 1992 y septiembre de 1994, habiendo participado en tal carácter en varios proyectos de Inversión de Capital y Préstamos en Latinoamérica y el Caribe.

                                    <br><br>
                                    Es Profesor Titular de Concursos en la Universidad Argentina de la Empresa (UADE) y en la Universidad de San Andrés; y Profesor Titular de Derechos Reales y de Concursos y Quiebras en la Universidad del Salvador (USAL).

                                    <br><br>
                                    Ha participado en Jornadas, Seminarios y Conferencias relacionadas con su especialización, llevadas a cabo tanto en la Argentina como en los Estados Unidos de Norteamérica.

                                    <br><br>
                                    Ha sido reconocido por la prestigiosa revista Chambers & Partners como abogado líder en diversas áreas de su especialidad.

                                    <br><br>
                                    Ha realizado trabajos de investigación en las áreas de Derecho Civil y Comercial. 



                                    </p>
                                </div>
                            </div>
                        </div>                                                              
                  </div>
                </div>
              </div>
            </div>  <!-- end modal -->                                              
            <div class="modal fade" data-backdrop="false" id="socio5" tabindex="-1" role="dialog" aria-labelledby="Miguel Montemerlo">
              <div class="modal-dialog" role="document">
                <div class="modal-content bg-1">
                  <div class="modal-header">
                    <div class="container">
                        <button type="button" class="close color-2" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="img/close-b.png" class="img-responsive" alt=""></span></button>
                    </div>
                  </div>
                  <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <span class="socio__modal__img" style="background-image: url('img/Miguel_Montemerlo_06_med-res.jpg');"></span>
                                    <p class="paragraph-2 color-3">Idiomas: español e ingles.</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="paragraph-2 color-2">

                                    El Dr. Montemerlo es integrante del Estudio desde 1980 y Socio desde 2000. Se especializa en cuestiones económico-contables y negociaciones relacionadas con Reestructuraciones Financieras, Fusiones y Adquisiciones, Derecho Societario, Litigios, Arbitrajes  y Contratos Civiles y Comerciales. 
                                     <br><br>
                                    Fue miembro de la Comisión de Actuación Profesional en Procesos Concursales del Consejo Profesional de Ciencias Económicas de la Capital Federal (1998) y auditor del Mercado de Valores de Buenos Aires (1983). 
                                     <br><br>
                                     Obtuvo el título de Contador Público en la Universidad Católica Argentina (UCA) en 1980. 
                                     <br><br>
                                    Posteriormente, realizó la Carrera de Especialización en Sindicatura Concursal en la Facultad de Ciencias Económicas de la Universidad de Buenos Aires (1988).    Fue Profesor Adjunto de la Cátedra de Contabilidad Gerencial en la Facultad de Ciencias Económicas de la Universidad Católica Argentina (1981-1988). Asimismo, fue docente de Práctica Profesional Concursal en la Carrera de Especialización en Sindicatura Concursal dictada en la Facultad de Ciencias Económicas de la Universidad de Buenos Aires (1988). 
                                     <br><br>
                                     Ha participado en un sinnúmero de jornadas y conferencias relativas a su especialización, habiendo disertado en algunas de ellas.  Es miembro del Consejo Profesional de Ciencias Económicas de la Ciudad Autónoma de Buenos Aires. 
                                    


                                    </p>
                                </div>
                            </div>
                        </div>                                                              
                  </div>
                </div>
              </div>
            </div>  <!-- end modal -->    
            <!--FIN MODALES SOCIOS -->
        </section>
        <section id="profesionales" class="bg-2 content">   
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeInUp animated" data-wow-duration="2000ms" data-wow-delay="300ms">
                        <hr class="c-1">
                        <h2 class="color-1 h1"><b>Profesionales</b></h2>
                    </div>
                    <div class="col-lg-10 col-lg-offset-1 col-md-12 col-md-offset-0">
                        <div class="row">
                            <ul class="list-unstyled list-inline profesional-listado">
                                <li class="col-xs-6  col-sm-4 color-2 profesional wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="300ms">
                                    <span class="profesional__img">
                                        <span style="background: url('img/Tristan_Gonzalez_Correas_02_med-res.jpg');     background-position-y: -4px;"></span>
                                        
                                    </span>
                                    <span class="profesional__data">
                                       <span class="profesional__data__nombre">
                                         Tristán Gonzales Correas
                                       </span>
                                       <span class="profesional__data__descrip">Of Counsel
                                        </span>
                                       <a href="javascript:;" data-toggle="modal" data-target="#profesional1">+ INFO</a>
                                    </span>
                                </li>
                                <li class="col-xs-6  col-sm-4 color-2 profesional wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="500ms">
                                    <span class="profesional__img">
                                        <span style="background: url('img/Tomas_Hutchinson_01_med-res.jpg');     background-position-y: -18px;"></span>
                                        
                                    </span>
                                    <span class="profesional__data">
                                       <span class="profesional__data__nombre">
                                         Tomás Hutchinson
                                       </span>
                                       <span class="profesional__data__descrip">Of Counsel
                                        </span>
                                       <a href="javascript:;" data-toggle="modal" data-target="#profesional2">+ INFO</a>
                                    </span>
                                </li>
                                <li class="col-xs-6  col-sm-4 color-2 profesional wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="700ms">
                                    <span class="profesional__img">
                                        <span style="background: url('img/Rodolfo_Romani_02_med-res.jpg')"></span>
                                        
                                    </span>
                                    <span class="profesional__data">
                                       <span class="profesional__data__nombre">
                                         Rodolfo Romani
                                       </span>
                                       <span class="profesional__data__descrip">Of Counsel
                                        </span>
                                       <a href="javascript:;" data-toggle="modal" data-target="#profesional3">+ INFO</a>
                                    </span>
                                </li>
                                <li class="col-xs-6  col-sm-4 color-2 profesional wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="300ms">
                                    <span class="profesional__img">
                                        <span style="background: url('img/170731-Estudio Alegria-0011-b.jpg')"></span>
                                        
                                    </span>
                                    <span class="profesional__data">
                                       <span class="profesional__data__nombre">
                                         Mariano de Apellaniz
                                       </span>
                                       <span class="profesional__data__descrip">Asociado Sr.
                                        </span>
                                       <a href="javascript:;" data-toggle="modal" data-target="#profesional4">+ INFO</a>
                                    </span>
                                </li>
                                <li class="col-xs-6  col-sm-4 color-2 profesional wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="500ms">
                                    <span class="profesional__img">
                                        <span style="background: url('img/Leonardo_Lucas_03_med-res.jpg');     background-position-y: -13px;"></span>
                                        
                                    </span>
                                    <span class="profesional__data">
                                       <span class="profesional__data__nombre">
                                         Leonardo Lucas
                                       </span>
                                       <span class="profesional__data__descrip">Asociado Sr.
                                        </span>
                                       <a href="javascript:;" data-toggle="modal" data-target="#profesional5">+ INFO</a>
                                    </span>
                                </li>
                                <li class="col-xs-6  col-sm-4 color-2 profesional wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="700ms">
                                    <span class="profesional__img">
                                        <span style="background: url('img/Pablo_Anderson_02_med-res.jpg');    background-position-y: -40px;     background-position-x: -43px;"></span>
                                        
                                    </span>
                                    <span class="profesional__data">
                                       <span class="profesional__data__nombre">
                                         Pablo Anderson
                                       </span>
                                       <span class="profesional__data__descrip">Asociado Sr.
                                        </span>
                                       <a href="javascript:;" data-toggle="modal" data-target="#profesional6">+ INFO</a>
                                    </span>
                                </li>
                                <li class="col-xs-6  col-sm-4 color-2 profesional wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="300ms">
                                    <span class="profesional__img">
                                        <span style="background: url('img/Santiago_Courreges_02_med-res.jpg')"></span>
                                        
                                    </span>
                                    <span class="profesional__data">
                                       <span class="profesional__data__nombre">
                                         Santiago Courreges
                                       </span>
                                       <span class="profesional__data__descrip">Asociado
                                        </span>
                                       <a href="javascript:;" data-toggle="modal" data-target="#profesional7">+ INFO</a>
                                    </span>
                                </li>
                                <li class="col-xs-6  col-sm-4 color-2 profesional wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="500ms">
                                    <span class="profesional__img">
                                        <span style="background: url('img/Fernando_Biscotti_01_med-res.jpg');    background-position-y: -27px;    background-position-x: 17px;"></span>
                                        
                                    </span>
                                    <span class="profesional__data">
                                       <span class="profesional__data__nombre">
                                         Fernando Biscotti
                                       </span>
                                       <span class="profesional__data__descrip">Asociado
                                        </span>
                                       <a href="javascript:;" data-toggle="modal" data-target="#profesional8">+ INFO</a>
                                    </span>
                                </li>
  
                            </ul>

                        </div>                  
                    </div>
                </div>
            </div>            
            <!--INICIO MODALES PROFESIONALES -->

            <div class="modal fade" data-backdrop="false" id="profesional1" tabindex="-1" role="dialog" aria-labelledby="Tristán Gonzáles Correas">
              <div class="modal-dialog" role="document">
                <div class="modal-content bg-1">
                  <div class="modal-header">
                    <div class="container">
                        <button type="button" class="close color-2" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="img/close-b.png" class="img-responsive" alt=""></span></button>
                    </div>
                  </div>
                  <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <span class="socio__modal__img" style="background-image: url('img/Tristan_Gonzalez_Correas_02_med-res.jpg');"></span>
                                    <p class="paragraph-2 color-3">Idiomas: español e inglés.</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="paragraph-2 color-2">
                                    El Dr. González Correas está vinculado al Estudio como abogado Of-Counsel desde el año 1996 y su actividad se concentra en Mercado de Capitales, Derecho Societario, Derecho Bancario, Fusiones y Adquisiciones y Contratos Civiles y Comerciales.  
                                    <br><br>
                                    Fue Director Titular de Socma Americana S.A., Sideco Americana S.A., Sevel Argentina S.A., Director Suplente de Alpargatas S.A.I.C. y Director Titular del Banco Francés del Río de la Plata S.A. Ha sido director del área de legales de la mayoría de ellos.  
                                    <br><br>
                                    Obtuvo el título de abogado en la Facultad de Derecho y Ciencias Sociales de la Universidad de Buenos Aires en 1965. 
                                    <br><br>
                                    Ha participado en numerosos cursos y seminarios, entre los que se destacan el Curso Intensivo para Ejecutivos (C.I.P.E.) realizado en I.D.E.A. en el año 1977 y el Stanford Executive Program, realizado en la Universidad de Stanford de Estados Unidos en el año 1988. Ha dictado diversos cursos y seminarios llevados a cabo en el país y en el exterior y fue autor de varios artículos sobre temas legales empresarios.  
                                    <br><br>
                                    Es Consejero Honorario de la Cámara de Sociedades Anónimas, Ex-Vocal de la Mesa Directiva y del Consejo Directivo de la Bolsa de Comercio de Buenos Aires -donde también integró la Comisión de Títulos; Ex-Presidente del Club de Abogados de Empresa y ex -miembro de la Licensing  Executive Society (Capítulo Argentino). Fue Director de la División Jurídica de I.D.E.A. (1984-1986). Integró el Consejo de Administración de la Universidad Argentina de la Empresa (UADE). 
                                    <br><br>
                                     Es miembro del Colegio Público de Abogados de la Capital Federal.
                                    </p>
                                </div>
                            </div>
                        </div>                                                              
                  </div>
                </div>
              </div>
            </div>  <!-- end modal -->                        
            <div class="modal fade" data-backdrop="false" id="profesional2" tabindex="-1" role="dialog" aria-labelledby="Tomás Hutchinson">
              <div class="modal-dialog" role="document">
                <div class="modal-content bg-1">
                  <div class="modal-header">
                    <div class="container">
                        <button type="button" class="close color-2" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="img/close-b.png" class="img-responsive" alt=""></span></button>
                    </div>
                  </div>
                  <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <span class="socio__modal__img" style="background-image: url('img/Tomas_Hutchinson_01_med-res.jpg');"></span>
                                    <p class="paragraph-2 color-3">Idiomas: español, italiano, comprensión de francés e inglés.</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="paragraph-2 color-2">
                                    El Dr. Tomás Hutchinson se desempeña actualmente como consultor (of counsel) del Estudio en todos los temas vinculados al derecho público y administrativo en general.
                                    <br><br>
                                    El Dr. Hutchinson fue Juez (por concurso) del Superior Tribunal de Justicia de la Provincia de Tierra del Fuego, Antártida e Islas del Atlántico Sur desde mayo de 1995 a noviembre de 2000 y presidió dicho Tribunal desde febrero de 1996 hasta enero de 1997, y desde febrero de 1999 hasta enero de 2000 fue Juez de la Cámara Nacional de Apelaciones en lo Contencioso Administrativo Federal, vocal de la sala IV desde febrero de 1984 a septiembre de 1990; Secretario de la Suprema Corte de Justicia de la Provincia de Buenos Aires, Secretaría de Demandas Originarias desde noviembre de 1981 a marzo de 1984; Subsecretario de la Suprema Corte de Justicia de la Provincia de Buenos Aires, Secretaría de Demandas Originarias desde septiembre de 1979 a noviembre de 1981; Prosecretario de la Secretaría de Demandas Originarias de la Suprema Corte de Justicia de la Prov. de Buenos Aires desde 1978 a septiembre de 1979; Secretario de Primera Instancia en lo Civil y Comercial y en los Poderes Judiciales de las Provincias de la Pampa y Buenos Aires desde 1969 a 1978.
                                    <br><br>
                                    Asimismo, ha sido Presidente del Consejo de la Magistratura de la Provincia de Tierra del Fuego, Antártida e Islas del Atlántico Sur desde mayo de 1995 a febrero de 1996; desde febrero de 1997 a enero de 1998 y desde diciembre de 1999 hasta octubre de 2000  y Abogado apoderado de la Provincia de Córdoba en la Capital Federal desde noviembre de 1992 a abril de 1995. 
                                    <br><br>
                                    Se recibió de abogado, escribano y procurador en la Facultad de Derecho y Ciencias Sociales de la Universidad de Buenos Aires en 1968. Es doctor en Derecho Público tesis defendida en la Universidad San Pablo (CEU) –Madrid (España), calificada con sobresaliente cum laude por el jurado compuesto por los Profesores Jesús González Pérez; Tomás Ramón Fernández Rodríguez;  Luciano Martín-Retortillo Bacquer;  Juan Antonio Hernández Corchete y Alberto Díaz Romeral.
                                    <br><br>
                                    Por otra parte, ha sido alumno regular entre 1971-1976 de la carrera de Contador Público (restaban 7 materias para completarla) en la Facultad de Ciencias Económicas, de la Universidad de Buenos Aires. El Dr. Hutchinson es, además, Licenciado en Lengua y Literatura italiana (Asociación Dante Alighieri - 1963/68) y posee un posgrado en Derecho Administrativo y Política Internacional obtenido la Universitá degli Studi di Bari, Italia.
                                    <br><br>
                                    Fue Director de la Maestría en Derecho Administrativo en la Facultad de Derecho de la Universidad Católica de La Plata (1995/2003) y de la Carrera de Especialización en Derecho Administrativo y Administración Pública de la Facultad de Derecho y Ciencias Sociales de la Universidad de Buenos Aires (1986/1995); Integrante del Consejo Asesor Académico de la Carrera de Especialización en Derecho Administrativo y Administración Pública de la Facultad de Derecho y Ciencias Sociales de la Universidad de Buenos Aires (desde 1995 en adelante); Miembro del Comité Científico del curso de posgrado en Derecho Público de la Universidad de San Pablo-CEU, Madrid, España; Profesor de Instituciones de Derecho Administrativo en la Maestría de Derecho Administrativo, Facultad de Derecho, Universidad Católica de La Plata; Profesor de Derecho Procesal Administrativo en el curso de Especialización en Derecho Administrativo y Administración Pública de la Facultad de Derecho y Ciencias Sociales de la Universidad de Buenos Aires; Profesor titular ordinario de Derecho Administrativo en las Facultades de Derecho de la Universidad de Buenos Aires, Nacional de La Plata y Universidad Argentina de la Empresa; y Director por concurso del Instituto de Derecho Administrativo “Bartolomé Fiorini” en la Facultad de Ciencias Jurídicas y Sociales de la Universidad Nacional de La Plata.
                                    <br><br>
                                    El Dr. Hutchinson ha recibido numerosos premios y distinciones por su actuación docente y su prolífica producción de obras jurídicas (27 libros y alrededor de 400 artículos). Entre las que cabe destacar: Profesor emérito de la Universidad de Buenos Aires (desde 2006); profesor emérito de la Universidad Nacional de La Plata (desde 2017): miembro de la Academia Internacional de Derecho Comparado –con sede en París- (desde octubre de 2008); Presea “Gabino Fraga” otorgada por la Asociación Mexicana de Derecho Administrativa por la valiosa contribución al desarrollo y perfeccionamiento de la Ciencia del Derecho Administrativo (8 de junio de 2006); Miembro del Consejo Académico Consultivo del Colegio de Abogados del Departamento Judicial de La Plata (2001); Asesor honorario consultivo del Instituto de Derecho Administrativo del Colegio de Abogados del Departamento Judicial de La Plata (2008/10).      
                                    <br><br>

                                    Es miembro del Colegio Público de Abogados de la Capital Federal y del Colegio de Abogados de la Plata y fue Presidente del Tribunal de Disciplina del Colegio Público de Abogados de la Capital Federal (2012/15).


                                    </p>
                                </div>
                            </div>
                        </div>                                                              
                  </div>
                </div>
              </div>
            </div>  <!-- end modal -->                        
            <div class="modal fade" data-backdrop="false" id="profesional3" tabindex="-1" role="dialog" aria-labelledby="Rodolfo Romani">
              <div class="modal-dialog" role="document">
                <div class="modal-content bg-1">
                  <div class="modal-header">
                    <div class="container">
                        <button type="button" class="close color-2" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="img/close-b.png" class="img-responsive" alt=""></span></button>
                    </div>
                  </div>
                  <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <span class="socio__modal__img" style="background-image: url('img/Rodolfo_Romani_02_med-res.jpg');"></span>
                                    <p class="paragraph-2 color-3">Idiomas: español e inglés.</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="paragraph-2 color-2">

                                    Rodolfo A. Romani actualmente se desempeña como Consultor en Cuestiones Económicas y Contables relacionadas con Reestructuraciones Financieras, Fusiones y Adquisiciones, Litigios, Acuerdos Preventivos Extrajudiciales y Concursos y Quiebras.
                                    <br><br>
                                    Hasta su incorporación al Estudio actuó en la actividad empresarial privada como gerente, director y asesor de importantes compañías nacionales y extranjeras, en las especialidades de Finanzas y Control de Gestión.
                                    <br><br>
                                    El Dr. Romani es egresado de la Facultad de Ciencias Económicas de la Universidad de Buenos Aires, donde obtuvo el título de Contador Público en 1973. 
                                    <br><br>
                                    Participó en numerosos cursos y seminarios sobre Finanzas, Bancos, Comercio Exterior y Derecho Concursal.  
                                    <br><br>
                                    Es profesor invitado en la Maestría en Derecho Empresarial de la UADE, en la materia Reorganización Corporativa y de Pasivos Empresarios.
                                    <br><br>
                                    Es miembro del Consejo Profesional de Ciencias Económicas de la Ciudad Autónoma de Buenos Aires.



                                    </p>
                                </div>
                            </div>
                        </div>                                                              
                  </div>
                </div>
              </div>
            </div>  <!-- end modal -->                        
            <div class="modal fade" data-backdrop="false" id="profesional4" tabindex="-1" role="dialog" aria-labelledby="Mariano de Apellaniz">
              <div class="modal-dialog" role="document">
                <div class="modal-content bg-1">
                  <div class="modal-header">
                    <div class="container">
                        <button type="button" class="close color-2" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="img/close-b.png" class="img-responsive" alt=""></span></button>
                    </div>
                  </div>
                  <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <span class="socio__modal__img" style="background-image: url('img/170731-Estudio Alegria-0011-b.jpg');"></span>
                                    <p class="paragraph-2 color-3">Idiomas: español, inglés y conocimientos de francés.</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="paragraph-2 color-2">
                                    El Dr. De Apellaniz está vinculado al Estudio como abogado Of-Counsel desde 2017. Se especializa en Asesoramiento  en Contratos de Distribución Comercial y Reestructuración de Sistemas de Distribución y Logística de Empresas, en Reestructuración Societaria y de Deudas, en temas inmobiliarios, y en Concursos, Quiebras, Litigios y Mediación.
                                    <br><br>
                                    Trabajó en Alto Paraná S.A., y fue asociado en el estudio “Cárdenas, Hope & Otero Monsegur” (1981-1987). Desde septiembre de 1987 a abril de 1990, fue miembro del Estudio. Durante los años 1990 a 1997, fundó su propio estudio y fue designado por el Ministerio de Economía de la Nación como síndico oficial de “Grupo Greco”. Se desempeñó como Gerente del Departamento de Legales en “Cervecería y Maltería Quilmes” desde 2000 a 2010. En 2014 trabajó en Danone Argentina S.A. 
                                    <br><br>
                                    Obtuvo el título de abogado en la Universidad Católica Argentina en 1979. 
                                    <br><br>
                                    Es profesor de Derecho Civil IV (Derechos Reales), en la Universidad del Salvador (USAL), en la cátedra del Dr. Gabriel H. Fissore.
                                    <br><br>
                                    Es miembro del Colegio Público de Abogados de la Capital Federal y  del Colegio de Abogados de la Ciudad de La Plata.





                                    </p>
                                </div>
                            </div>
                        </div>                                                              
                  </div>
                </div>
              </div>
            </div>  <!-- end modal -->                        
            <div class="modal fade" data-backdrop="false" id="profesional5" tabindex="-1" role="dialog" aria-labelledby="Leonardo Lucas">
              <div class="modal-dialog" role="document">
                <div class="modal-content bg-1">
                  <div class="modal-header">
                    <div class="container">
                        <button type="button" class="close color-2" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="img/close-b.png" class="img-responsive" alt=""></span></button>
                    </div>
                  </div>
                  <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <span class="socio__modal__img" style="background-image: url('img/Leonardo_Lucas_03_med-res.jpg');"></span>
                                    <p class="paragraph-2 color-3">Idiomas: español e inglés.</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="paragraph-2 color-2">

                                    El Dr. Leonardo Oscar Lucas es Asociado del Estudio desde el año 2005 y se especializa en Reestructuraciones Financieras y Societarias, Concursos y Quiebras, Litigios, Arbitrajes, Solución Alternativa de Conflictos y Contratos Civiles y Comerciales.
                                    <br><br>
                                    Trabajó en el estudio Marval, O´Farrell & Mairal (2003-2005), en el estudio Jurídico Cartell & Murray (1997-2003)  y en el Poder Judicial de la Nación  (Juzgado Nacional de Primera Instancia en lo Comercial Nº 13 y Juzgado Nacional de Primera Instancia en lo Civil Nº 22) (1995-1996).
                                    <br><br>
                                    Se graduó de Abogado en la Facultad de Derecho de la Universidad Católica Argentina (UCA) en 1999. En 2015 y 2016 cursó la Maestría en Derecho Empresario de la Facultad de Derecho de la Universidad Austral.
                                    <br><br>
                                    Realizó cursos de postgrado en Contratos Empresariales Modernos y en Instrumentos y Estrategias Innovadoras en la Gestión Empresaria - El Fideicomiso- en la Universidad Católica Argentina. 
                                    <br><br>
                                    Fue Ayudante de Cátedra en Concursos y Quiebras en la carrera de grado como en el Master en Derecho Empresarial y ha dictado clases en - Reorganización Corporativa y de Pasivos Empresarios, en la Universidad Argentina de la Empresa – (UADE). Se desempeñó como Auxiliar docente en la cátedra Instituciones de Derecho Comercial III, dictada en la Facultad de Ciencias Sociales y Económicas de la UCAEs miembro del Colegio Público de Abogados de la Capital Federal.



                                    </p>
                                </div>
                            </div>
                        </div>                                                              
                  </div>
                </div>
              </div>
            </div>  <!-- end modal -->                        
            <div class="modal fade" data-backdrop="false" id="profesional6" tabindex="-1" role="dialog" aria-labelledby="Pablo Anderson">
              <div class="modal-dialog" role="document">
                <div class="modal-content bg-1">
                  <div class="modal-header">
                    <div class="container">
                        <button type="button" class="close color-2" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="img/close-b.png" class="img-responsive" alt=""></span></button>
                    </div>
                  </div>
                  <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <span class="socio__modal__img" style="background-image: url('img/Pablo_Anderson_02_med-res.jpg');"></span>
                                    <p class="paragraph-2 color-3">Idiomas: español e inglés.</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="paragraph-2 color-2">

                                    Es miembro asociado del Estudio desde 2000. Se especializa en Reestructuraciones Financieras y Societarias, Concursos y Quiebras, Derecho Societario, Derecho Bancario, Contratos Civiles y Comerciales y Litigios y Arbitrajes.  
                                    <br><br>
                                    Previamente trabajó como abogado en el Estudio Jurídico Anderson & Sosa (1998-2000).
                                    <br><br>
                                    Obtuvo el título de abogado en la Universidad de Buenos Aires en 1996. Es egresado de la Maestría en Derecho Empresarial en la Facultad de Derecho de la Universidad Austral (2011), siendo su tesina “Reflexiones sobre El Contrato de Fideicomiso y la Insolvencia”, calificada con 10 Sobresaliente.
                                    <br><br>
                                    
                                    Desde el año 2013 es coordinador de la materia “Crisis, Insolvencia y Reestructuración Empresaria” de la Maestría en Derecho Empresario de la Facultad de Derecho de la Universidad Austral donde también es Profesor invitado. También en la materia “Reestructuración Corporativa de Pasivos Empresarios” de la misma Maestría. 
                                    <br><br>
                                    Publicó artículos en la Revista Argentina de Derecho de la Empresa, en la Revista de Derecho Comercial y en la Revista Jurídica La Ley.
                                    <br><br>
                                    Participó desde el año 1997 a la fecha en innumerables Cursos, Seminarios y Congresos. En Agosto del 2012 fue expositor en la reunión ordinaria del Instituto de Derecho Comercial del Colegio Público de Abogados de la Capital Federalsobre la temática “Fideicomiso e Insolvencia de sus partes”.
                                    <br><br>
                                    Es miembro del Colegio Público de Abogados de la Capital Federal  y del Colegio de Abogados de Lomas de Zamora.



                                    </p>
                                </div>
                            </div>
                        </div>                                                              
                  </div>
                </div>
              </div>
            </div>  <!-- end modal -->                        
            <div class="modal fade" data-backdrop="false" id="profesional7" tabindex="-1" role="dialog" aria-labelledby="Santiago Courreges">
              <div class="modal-dialog" role="document">
                <div class="modal-content bg-1">
                  <div class="modal-header">
                    <div class="container">
                        <button type="button" class="close color-2" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="img/close-b.png" class="img-responsive" alt=""></span></button>
                    </div>
                  </div>
                  <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <span class="socio__modal__img" style="background-image: url('img/Santiago_Courreges_02_med-res.jpg');"></span>
                                    <p class="paragraph-2 color-3">Idiomas: español e inglés.</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="paragraph-2 color-2">

                                    El Dr. Courregeses miembro del estudio desde 2016 y se especializa en Litigios, Derecho Societario, Derecho Energético  y Contratos Civiles y Comerciales.
                                    <br><br>
                                    Trabajó en el Estudio Bulló Abogados (2014-2016) y en el Estudio Carbó, Castelli & Asociados (2012-2014).
                                    <br><br>
                                    Se graduó de abogado en la Facultad de Derecho y Ciencias Sociales de la Universidad Nacional de Buenos Aires en el año 2015.
                                    <br><br>
                                    Desde el año 2016 es profesor adjunto de Derechos Reales en la Facultad de Derecho de la Universidad del Salvador (U.S.A.L.).
                                    <br><br>
                                    Es miembro del Colegio Público de Abogados de la Capital Federal.



                                    </p>
                                </div>
                            </div>
                        </div>                                                              
                  </div>
                </div>
              </div>
            </div>  <!-- end modal -->                        
            <div class="modal fade" data-backdrop="false" id="profesional8" tabindex="-1" role="dialog" aria-labelledby="Héctor Alegría">
              <div class="modal-dialog" role="document">
                <div class="modal-content bg-1">
                  <div class="modal-header">
                    <div class="container">
                        <button type="button" class="close color-2" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="img/close-b.png" class="img-responsive" alt=""></span></button>
                    </div>
                  </div>
                  <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <span class="socio__modal__img" style="background-image: url('img/Fernando_Biscotti_01_med-res.jpg');"></span>
                                    <p class="paragraph-2 color-3">Idiomas: español e inglés.</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="paragraph-2 color-2">

                                    El Dr. Biscotti es asociado del Estudio desde 2016. Realiza su práctica en Litigios Comerciales, Civiles y Contencioso Administrativos; Fusiones y Adquisiciones de Empresas y Derecho Corporativo, así como también en Soluciones Alternativas de Conflicto.
                                    <br><br>
                                    Se graduó como abogado en la Facultad de Derecho y Ciencias Sociales de la Universidad del Museo Social Argentino en 2015. Ese mismo año fue distinguido con el Premio a la Excelencia Académica entregado por el Colegio de Abogados de la Ciudad Autónoma de Buenos Aires.
                                    <br><br>
                                    Es miembro del Colegio Público de Abogados de la Capital Federal.
                                    </p>
                                </div>
                            </div>
                        </div>                                                              
                  </div>
                </div>
              </div>
            </div>  <!-- end modal -->   
            <!--FIN MODALES PROFESIONALES -->
        </section>
        <section class="quote" id="quote5">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="300ms">
                        <h2>"Siempre es el momento apropiado 
                        <br class="hidden-xs"><span>para hacer lo correcto"</span>
                        <br><small>Martin Luther King</small>
                        </h2>                        
                    </div>
                </div>
            </div>
        </section>        
        <section class="content bg-1" id="contacto">
            <div class="container wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="300ms">
                <div class="row">
                    <div class="col-xs-12 ">
                        <p class="h2 color-3 visible-xs">Mandanos tu consulta</p>
                        <p class="hidden-xs paragraph-1 color-3"><b>Mandanos tu consulta</b></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <form id="contact-form" class="form">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" required class="form-control" name="nombre" placeholder="Nombre">
                                    <input type="email" required class="form-control" name="email" placeholder="Email" >
                                    <span class="divider hidden-xs"></span>

                                </div>
                                <div class="col-md-6">
                                    <input type="text" required class="form-control" name="apellido" placeholder="Apellido">
                                    <input type="text" required class="form-control" name="telefono" placeholder="Teléfono">

                                </div>
                                <div class="col-xs-12">
                                    <input type="text" required class="form-control" name="asunto" placeholder="Asunto">
                                </div>
                                <div class="col-xs-12">
                                    <textarea name="mensaje" required id="mensaje" cols="20" rows="2" class="form-control" placeholder="Escribí tu mensaje"></textarea>
                                </div>
                                <button type="submit" class="animated btn btn-sm">ENVIAR</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-unstyled">
                            <li><span><i class="color-3 fa fa-phone" aria-hidden="true"></i></span><a class="color-2" href="javascript:;">(11) 4811.6060 - (11) 4812.5500</a></li>
                            <li><span><i class="color-3 fa fa-envelope" aria-hidden="true"></i></span>
                                <a class="color-2" href="mailto:info@estudioabffm.com.ar">info@estudioabffm.com.ar</a>
                                <a class="color-2" href="mailto:cv@estudioabffm.com.ar">cv@estudioabffm.com.ar</a>
                            </li>
                            <li><span><i class="color-3 fa fa-map-marker" aria-hidden="true"></i></span><a class="color-2" href="https://www.google.com.ar/maps/place/Av.+Santa+Fe+1621,+C1060ABC+CABA/@-34.5957772,-58.3926349,17z/data=!3m1!4b1!4m8!1m2!2m1!1sAv.+Santa+Fe+1621!3m4!1s0x95bccabe8ffcda61:0x201c65dcc724c432!8m2!3d-34.5957816!4d-58.3904462" target="_blank">Av. Santa Fe 1621, 6º, 5º y 4º piso (C1060ABC) CABA.</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>     
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.3370139625886!2d-58.392619284193955!3d-34.595638564578806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccabe97aa90d3%3A0xc2210c977dbbfbd6!2sAv.+Santa+Fe+1621%2C+C1021+CABA!5e0!3m2!1ses-419!2sar!4v1518110324362" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>        
        <section class="content bg-1" id="rrhh">
            <div class="container wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="300ms">
                <div class="row">
                    <div class="col-xs-12 ">
                        <p class="h2 color-3 visible-xs">Trabajá con nosotros</p>
                        <p class="hidden-xs paragraph-1 color-3"><b>Trabajá con nosotros</b></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form action="post" id="cv-form" class="form">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                                        <input type="email" class="form-control" name="email" placeholder="Email">
                                        <span class="divider hidden-xs"></span>

                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="apellido" placeholder="Apellido">
                                        <input type="text" class="form-control" name="telefono" placeholder="Teléfono">

                                    </div>
                                    <div class="col-xs-12">
                                        <textarea name="mensaje" id="mensaje" cols="20" rows="2" class="form-control" placeholder="Escribí tu mensaje"></textarea>
                                    </div>
                                    <span class="divider hidden-xs"></span>
                                </div>
                                <div class="col-md-4">
                                    <label for="cv">Subí tu CV
                                        <br><span class="btn btn-sm transition">Seleccionar archivo</span>
                                    </label>
                                    <input type="file" name="cv" id="cv" class="form-control invisible">
                                    <p><small class="color-2">Extensiones de archivo permitidas para la carga .jpg .pdf
                                        <br>Peso máximo permitido: 2MB</small></p>
                                </div>
                            </div>
                                    <button type="submit" class="animated btn btn-sm">ENVIAR</button>
                        </form>
                    </div> 
                </div>
            </div>
        </section>
        <footer class="bg-2 content">
            <div class="container"> 
                <div class="col-sm-6 text-left">
                    <img class="img-responsive" src="img/logo-footer.png" alt="Estudio Alegría">                    
                </div>
                <div class="col-sm-6 text-right">
                    <ul class="list-unstyled">
                        <li><a class="color-1" href="https://linkedin.com/company/estudio-alegria-buey-fernandez-fissore-montemerlo/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        <li><a class="color-1" href="javascript:;">(11) 4811.6060 - (11) 4812.5500</a> <a class="color-1" href="mailto:info@estudioabffm.com.ar">info@estudioabffm.com.ar</a></li>
                        <li><a class="color-1" href="https://www.google.com.ar/maps/place/Av.+Santa+Fe+1621,+C1060ABC+CABA/@-34.5957772,-58.3926349,17z/data=!3m1!4b1!4m8!1m2!2m1!1sAv.+Santa+Fe+1621!3m4!1s0x95bccabe8ffcda61:0x201c65dcc724c432!8m2!3d-34.5957816!4d-58.3904462" target="_blank">Av. Santa Fe 1621, 6º, 5º y 4º piso - Buenos Aires, Argentina.</a></li>
                        <li class="color-1  ">Copyright Estudio Alegria. Todos los derechos reservados.</li>
                    </ul>      
                </div>          
            </div>
        </footer>     
        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
<!--         <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script> -->
        <script src="js/plugins.js"></script>
        <script src="js/wow.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    </body>
</html>
