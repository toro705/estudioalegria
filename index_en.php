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
        <title>Alegría Lawyers Firm</title>
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
                        <li><a href="#referencias" data-toggle="collapse" data-target=".navbar-collapse">References</a></li>
                        <!--                        <li ><a href="#soluciones">Nuestras Soluciones</a></li>-->
                        <li >
                            <a href="#practica" data-toggle="collapse" data-target=".navbar-collapse">Practice <br> Areas</a>
                         </li>
                        <li ><a href="#profesionales" data-toggle="collapse" data-target=".navbar-collapse">Professionals</a></li>
                        <li ><a href="#contacto" data-toggle="collapse" data-target=".navbar-collapse">Contact</a></li>
                        <li ><form method="POST" action="index.php">
                            <input type="hidden"  value="es" name="lang">
                            <button type="submit" value="es"><small>Español</small></button>
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
                                <img src="img/estudioalegrialogolg.png" class="img-responsive wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="300ms">
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
                        <h2 class="color-1 h1">Our <b>Values</b></h2>
                        <p class="color-1 paragraph-1">Founded by Héctor Alegria in 1976, Estudio Alegria, Buey Fernández, Fissore & Montemerlo is recognized for its tradition of excellence and innovation in providing corporate legal services, and for its specialization in finding solutions to complex legal matters.</p>
                    </div>
                    <div class="col-sm-6 hidden-xs wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="500ms">
                        <p class="color-1 paragraph-2">Our mission is to assist our clients in achieving their specific objectives. We bring to bear our vast expertise and experience in dealing with the complex issues that arise in today’s demanding and competitive business environment.
                        <br><br>
                        Our practice is made up of an interdisciplinary team of lawyers and accountants who are personally committed to our clients. We are a boutique law firm focused on meeting the specific needs of our clients.
                        <br><br>
                        We have grown into one of the most highly regarded law firms in Argentina by strictly adhering to our principles: an in-depth analysis of the Law, dedication to our clients, creativity, and uncompromising respect for professional ethical and deontological principles. In short, a steadfast commitment to excellence in everything we do.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="socios-1">
            <img src="img/socios1.jpg" class="img-responsive" alt="">
        </section>
<!--         <section class="content bg-1">
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
        </section> -->
        <section class="quote" id="quote1">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="300ms">
                        <h2>“THE GREATER THE CHAOS, <br class="hidden-xs"><span>THE CLOSER THE SOLUTION.”</span>
                        <br><small>Chinese Proverb</small>
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
                        <h2 class="color-1 h1">The <b>Firm</b></h2>
                        <p class="color-1 paragraph-1">Estudio Alegria, Buey Fernández, Fissore & Montemerlo, one of the leading law firms in Argentina, has a highly specialized interdisciplinary team of lawyers and accountants to skilled at working out all issues relating to the various needs of the market players.</p>
                    </div>
                    <div class="col-sm-6 hidden-xs wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="500ms">
                        <p class="color-1 paragraph-2">The firm also has an extensive network of correspondent law firms, both in the domestic and in the main international markets, to ensure that our clients receive full professional coverage.
                        <br><br>
                        Our clients include a host of domestic and multinational corporations and financial institutions, as well as individuals and organizations, who entrust us with their businesses based on the excellence of the services and solutions we provide, in line with the highest ethical standards.
                        <br><br>
                        Estudio Alegria, Buey Fernández, Fissore & Montemerlo is located in the heart of downtown Buenos Aires, on the renowned Avenida Santa Fe, on three floors of fully-equipped offices to provide our clients, professionals and support staff with the cutting-edge tools and materials required by modern legal practice.

                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="quote" id="quote2">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="300ms">
                        <h2>“A TRUE REBEL IS THE PERSON WHO  
                        <br class="hidden-xs"><span>PROPOSES DIFFERENT ALTERNATIVES.”</span>
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
                            <h2 class="color-3 h1"><b>Credentials</b></h2>
                        </div>
                        <div class="col-sm-6 wow fadeInUp animated" data-wow-duration="2000ms" data-wow-delay="300ms">
                            <p class="color-2 paragraph-1">Specialized magazines have recognized the work of both our firm and our professionals. . The following are some of the awards we have received:</p>
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

                                    Since 2001, Estudio Alegria has been ranked among the top law firms by the prestigious publication Chambers and Partners. In 2017, it referred to our firm as follows:
                                    <br><br>
                                    “Highly specialised firm with a wealth of experience in bankruptcy and restructuring proceedings. Revered for its work representing debtors, such as companies, their shareholders and directors. Experience includes advising on corporate reorganisations, asset sales, spin-offs, mergers and capital market transactions to reduce financial liabilities.”

                                   



                                    </p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="paragraph-2 color-1">
                                     Héctor Alegria was ranked #1 both in mergers and acquisitions and commercial law over the past few years, and Pablo Buey Fernández was ranked #2 and #3 in the same categories.
                                    <br><br>

                                    In Chambers and Partners 2000 and 2001 editions Héctor Alegria was listed among the 100 Global Lawyers, and the magazine described him as “a phenomenon”
                                    <br><br>

                                    The partners of the Firm are also highly regarded in their areas of specialization.
                                    <br><br>


                                    Source: Chambers and Partners, Chambers Latin America, The world’s leading lawyers for Business, 2017, The Client’s Guide.
                                    </p>
                                </div>
                            </div>
                        </div>                                                              
                  </div>
                  <div class="modal-footer text-center">
                    <div class="container">
                        <div class="col-sm-6 col-sm-offset-6">
                            <a href="https://www.chambersandpartners.com/Latin-America/firm/2385/estudio-alegria-buey-fernandez-fissore-y-montemerlo" target="_blank" class="btn-sm btn btn-bordered pull-left">See reference</a>
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

                                    The specialized publication Latin Lawyer has described the Firm as an “Insolvency elite”.
                                    <br><br>
                                    It also noted that “The team is strong and really knows who is who in the market. It works very well and its lawyers are among the best in this area.”


                                    </p>
                                </div>
                            </div>
                        </div>                                                              
                  </div>
                  <div class="modal-footer text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <a href="https://latinlawyer.com/ll250/firms/1133517/estudio-alegria-buey-fernandez-fissore-montemerlo" target="_blank" class="btn-sm btn btn-bordered pull-left">See reference</a>
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

                                    Estudio Alegria, Buey Fernández, Fissore & Montemerlo is the law firm in Argentina which the IFLR 1000 publication recommends as the best for insolvency cases.
                                    <br><br>
                                    “the leading practice in Argentina for insolvency law, clients and competitors are unanimous in stating that Estudio Alegria 'stands head and shoulders above the rest'. Insolvency specialist, Héctor Alegria, is universally recommended for insolvency and litigation cases.” (IFLR, 2005)
                                    <br><br>

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
                                <a href="https://www.iflr1000.com/Firm/Estudio-Alegria-Buey-Fernandez-Fissore-Montemerlo/Profile/2129#rankings" target="_blank" class="btn-sm btn btn-bordered pull-left">See reference</a>
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

                                    Practical Law Company magazine named Estudio Alegria, Buey Fernández, Fissore & Montemerlo as the leading law firm in insolvency and restructuring in Argentina, and recommended our firm for corporate law, mergers and acquisitions (M&A), litigation and arbitration.
                                    <br><br>
                                    Source: PLC, Which Lawyer? Yearbook 2006


                                    </p>
                                </div>
                            </div>
                        </div>                                                              
                  </div>
                  <div class="modal-footer text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <!-- <a href="javascript:;" class="btn-sm btn btn-bordered pull-left">See reference</a> -->
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

                                    The prestigious Argentine business magazine “Apertura” has recognized the Firm’s practice for years.
                                    <br><br>

                                    For several consecutive years, APERTURA featured Hector Alegria as the second best known lawyer in Argentina, and “a leading authority on the legal profession”. Partners Pablo Buey Fernández, Gabriel Fissore, and Javier Alegria were also ranked among the most prestigious Argentine lawyers.

                                    <br><br>
                                    Revista APERTURA N°272, August 2016.


                                    </p>
                                </div>
                            </div>
                        </div>                                                              
                  </div>
                  <div class="modal-footer text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <!-- <a href="javascript:;" class="btn-sm btn btn-bordered pull-left">See reference</a> -->
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
                        <h2>“WISDOM IS THE DAUGHTER <br class="hidden-xs"><span>OF EXPERIENCE.”</span>
                        <br><small>Leonardo Da Vinci</small>
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
                        <h2 class="color-4 h1">Practice <br><b>Areas</b></h2>
                    </div>
                    <div class="col-sm-6 wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="300ms">
                        <p class="color-2 paragraph-1">Since its foundation, Estudio Alegria, Buey Fernández, Fissore & Montemerlo has been focused primarily focused on corporate law, and has been widely recognized for its expertise in the areas of financial restructuring, mergers and acquisitions, corporate law, bankruptcy, civil and business commercial contracts, banking and capital markets, and litigation in adversarial proceedings (whether court, arbitral or preventive litigation).
                        <br><br>

                        In time, it added other relevant areas of practice, such as s derecho administrativo económicoxx administrative law, community law, 

                        </p>
                    </div>
                    <div class="col-sm-6 wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="300ms">
                        <p class="color-2 paragraph-1">
                            competition law, infrastructure, energy, and natural resources law and telecommunications law, were incorporated. 
                            <br><br>
                             Below is a description of each of the areas of our practice, all of which are characterized by persistently adhering to our values and principles, our personalized attention of each client and their particular needs, our zeal for carefully evaluating possible conflicts of interest and, above all, by the highest quality legal services and the highest ethical standards we apply to all our cases.
                        </p>
                    </div>
                    <div class="col-xs-12">
                        <ul class="list-unstyled list-inline practica-listado">
                            <li class="col-xs-12 col-sm-6 col-md-4 wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="300ms"><a class="color-4" href="javascript:;" data-toggle="modal" data-target="#practica1"><span>01.</span><span class="transition">Debt <br>Restructuring</span></a></li>
                            <li class="col-xs-12 col-sm-6 col-md-4 wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="400ms"><a class="color-4" href="javascript:;" data-toggle="modal" data-target="#practica2"><span>02.</span><span class="transition">Mergers and <br>Acquisitions (M&A)</span></a></li>
                            <li class="col-xs-12 col-sm-6 col-md-4 wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="500ms"><a class="color-4" href="javascript:;" data-toggle="modal" data-target="#practica3"><span>03.</span><span class="transition">Capital <br>Markets</span></a></li>
                            <li class="col-xs-12 col-sm-6 col-md-4 wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="600ms"><a class="color-4" href="javascript:;" data-toggle="modal" data-target="#practica4"><span>04.</span><span class="transition">Litigation</span></a></li>
                            <li class="col-xs-12 col-sm-6 col-md-4 wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="700ms"><a class="color-4" href="javascript:;" data-toggle="modal" data-target="#practica5"><span>05.</span><span class="transition">Alternative Dispute Resolution
                            </span></a></li>
                            <li class="col-xs-12 col-sm-6 col-md-4 wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="800ms"><a class="color-4" href="javascript:;" data-toggle="modal" data-target="#practica6"><span>06.</span><span class="transition">Civil <br>Contracts</span></a></li>
                            <li class="col-xs-12 col-sm-6 col-md-4 wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="900ms"><a class="color-4" href="javascript:;" data-toggle="modal" data-target="#practica7"><span>07.</span><span class="transition">Corporate <br>Law</span></a></li>
                            <li class="col-xs-12 col-sm-6 col-md-4 wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="1000ms"><a class="color-4" href="javascript:;" data-toggle="modal" data-target="#practica8"><span>08.</span><span class="transition">Banking Law <br>and Financing</span></a></li>
                            <li class="col-xs-12 col-sm-6 col-md-4 wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="1100ms"><a class="color-4" href="javascript:;" data-toggle="modal" data-target="#practica9"><span>09.</span><span class="transition">Administrative <br>Law</span></a></li>
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
                                    <p class="paragraph-1 color-1">Debt Restructuring.</p>
                                </div>
                                <div class="col-sm-8 col-sm-offset-2">
                                    <p class="paragraph-2 color-1">

                                    Estudio Alegria, Buey Fernández, Fissore & Montemerlo is the leading authority on corporate debt restructuring. 
                                    <br><br>
                                    Héctor Alegria drafted Argentina’s Bankruptcy and Insolvency Law No. 19551, and has participated in many of its amendments. Our law firm has provided legal advice in most of the largest corporate debt restructurings in Argentina, and in the area of large domestic or international capital in virtually every industry. In this particular area, we have participated in hundreds of insolvency and bankruptcy proceedings, and in-court and out-of-court reorganization agreements. 

                                    <br><br>
                                    Our practice includes providing corporate advice, whether to the company’s shareholders, directors or creditors. Our services are important in times of crisis, but we pride ourselves on being highly specialized in the early detection of problems and in finding creative ways of responding to such problems, or mitigating their immediate effects. We analyze and propose efficient, cost-effective and quick solutions, mainly by applying innovative legal techniques to address such issues. We have taken an active part in corporate reorganizations, asset sales, strategic alliances, mergers and spin-offs, split-ups and split-offs, financial asset securitizations, outsourcing and joint ventures, equity or corporate bond offerings, partial restructuring of certain deliabilitiesbt, and in the provision of specialized financial legal advice, among others.
                                    <br><br>
                                    Our Cclients’ satisfaction is our main goal, and because of thatfor that reason, many local and international specialized publications have repeatedly recognized the firm’s practice as among the best in this area, as shown in the “Credentials” section. 
                                    <br><br>

                                    InAt times of crisis, both legal structures and institutions are called into question. A comprehensive practical knowledge of business law is a prime requirement in effectively providing legal services in those critical scenarios. Because we are particularly well-versed in restructurings, we contribute our expertise in this field to other practice areas, in which we carry out an in-depth analysis of the matters at stake.



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
                                    <p class="paragraph-1 color-1">Mergers and Acquisitions (M&A).</p>
                                </div>
                                <div class="col-sm-8 col-sm-offset-2">
                                    <p class="paragraph-2 color-1">
                                        Our interdisciplinary team is particularly qualified to review and recommend complex structures for the purchase, sale, merger or corporate restructuring of companies. Our track record includes serving as counsel to public and private entities in joint ventures, strategic alliances, spin-off, split-up and split-off transactions, purchase and sale of strategic assets, sales of companies as a going concern, public tender offers, purchase and sale of bankrupt and insolvent companies, and initial public offerings on the stock exchange, as well evaluating the impact of these transactions in light of corporate, capital markets, and competition laws.
                                        <br><br>

                                        In those legal areas that are beyond the scope of our practice, we generally team up with specialists in such other areas of law, forming an interdisciplinary and cohesive working group, to successfully address all of the issues raised while transactions are being negotiated. 
                                        <br><br>

                                        Since these types of transactions are normally counter-cyclical to debt restructurings, our team of professionals has the time and training necessary to devote their efforts to these complex transactions, meeting the clients’ confidentiality and timing requirements.
                                        <br><br>

                                        The personalized attention, flexibility and legal excellence provided by each of our partners set us apart from other local firms in this particular area.



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
                                    <p class="paragraph-1 color-1">Capital Markets.</p>
                                </div>
                                <div class="col-sm-8 col-sm-offset-2">
                                    <p class="paragraph-2 color-1">
                                       Estudio Alegria, Buey Fernández, Fissore & Montemerlo has extensive experience in capital markets. Our firm has a solid track record in public offerings, both in securing the CNV’s authorization for equity and debt issues, and in selecting the appropriate underwriters and underwriting syndicates, drafting underwriting agreements, and put and call agreements. We have also actively participated in the structuring and launching of financial trusts, mutual funds and securitization transactions.
                                       <br><br>
    
                                        Our firm has acted as counsel in one of the largest transactions in Argentina’s securities market in the last few years, and has helped during the privatization era to design the first public offering of shares under the public debt-to-equity program. 
                                       <br><br>

                                        Our experience includes providing legal representation to corporations, markets, agents, shareholders, directors and officers in administrative proceedings and administrative inquiry, securities litigation, and legal actions brought in connection with their participation in the securities markets.



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
            <div class="modal fade" data-backdrop="false" id="practica4" tabindex="-1" role="dialog" aria-labelledby="Litigation">
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
                                    <p class="paragraph-1 color-1">Litigation.</p>
                                </div>
                                <div class="col-sm-8 col-sm-offset-2">
                                    <p class="paragraph-2 color-1">
                                        Our litigation lawyers advise and represent clients before federal and national courts, the Supreme Court of Justice, and administrative courts in Argentina. Our practice focuses on providing advice on complex litigation matters, particularly those derived from our insolvency practice (voluntary or involuntary petitions in bankruptcy, foreclosure of guarantees, executory, restructuring and bankruptcy proceedings), corporate law (including shareholder litigation, actions brought against directors and officers, shareholder disputes, all types of litigation before banking supervisory agencies, and the antitrust commission), as well as on general commercial law (contract litigation, products liability, and foreign trade disputes, among others). 
                                        <br>
                                        <br>

                                        The firm also represents clients before different governmental and administrative bodies such as the Argentine Securities and Exchange Commission (Comisión Nacional de Valores), the Argentine Tax Court, the Central Bank of Argentina, the Registry of Corporations, the Argentine Antitrust Commission, the Secretariat of Commerce, and different secretariats, under-secretariats and divisions under Argentina’s Treasury and the Ministries of Finance, Production, Modernization and Energy and MiningMinisterios de Hacienda, de Finanzas,  de Producción, de Modernización, y de Energía y Minería, among others.




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
            <div class="modal fade" data-backdrop="false" id="practica5" tabindex="-1" role="dialog" aria-labelledby="Alternative Dispute Resolution">
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
                                    <p class="paragraph-1 color-1">Alternative Dispute Resolution.</p>
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
            <div class="modal fade" data-backdrop="false" id="practica6" tabindex="-1" role="dialog" aria-labelledby="Civil and Commercial Contracts">
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
                                    <p class="paragraph-1 color-1">Civil and Commercial Contracts</p>
                                </div>
                                <div class="col-sm-8 col-sm-offset-2">
                                    <p class="paragraph-2 color-1">
                                        In response to ever changing needs, Estudio Alegria, Buey Fernández, Fissore & Montemerlo provides advice to its clients  on a broad array of contracts and agreements, including typical purchase and sale agreements, leases, loan and agency agreements, and modern loan contracts such as leasing, factoring and franchising agreements, trust, agency, concession, distribution, or supply agreements. We also advise clients on all kinds of real estate transactions, contracts involving construction and transportation, as well as secured transactions (suretyships, pledges, mortgages, security interests, trusts, warrants, etc.). 
                                        <br><br>

                                        Our lawyers and accountants have the experience and training required to assist our clients in the drafting, negotiation, execution and performance of agreements, and monitoring any amendment of or default under such agreements.





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
            <div class="modal fade" data-backdrop="false" id="practica7" tabindex="-1" role="dialog" aria-labelledby="Corporate Law">
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
                                    <p class="paragraph-1 color-1">Corporate Law.</p>
                                </div>
                                <div class="col-sm-8 col-sm-offset-2">
                                    <p class="paragraph-2 color-1">
                                        Estudio Alegria, Buey Fernández, Fissore & Montemerlo provides companies with superior advice across the full range of corporate issues, providing assistance in a wide array of corporate contracts and agreements and in the multidisciplinary design of senior management development strategies, and designing workable solutions for each type of transaction, as well as in corporate disputes of all kinds.
                                        <br><br>
 
                                        Estudio Alegria, Buey Fernández, Fissore & Montemerlo advises domestic and international corporations, their members and managers, across a wide spectrum of transactions, including business contracts in general, domestic start-ups, formation, registration and winding down of companies, shareholder agreements, corporate reorganizations, corporate dispute resolution, corporate financing, foreign investment and transfer of technology, among others.





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
            <div class="modal fade" data-backdrop="false" id="practica8" tabindex="-1" role="dialog" aria-labelledby="Banking Law and Financing">
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
                                    <p class="paragraph-1 color-1">Banking Law and Financing.</p>
                                </div>
                                <div class="col-sm-8 col-sm-offset-2">
                                    <p class="paragraph-2 color-1">
                                        In Banking Law, Estudio Alegria, Buey Fernández, Fissore & Montemerlo provides a wide range of advice to domestic and international financial institutions, as well as to individual investors. The firm has been actively engaged in the organization and establishment of commercial or investment banks, securing authorizations for foreign investments in the banking sector, mergers and acquisitions of financial institutions, the rescheduling or restructuring of financial transactions, negotiation of loan agreements (whether syndicated, structured or standard), and representation of financial institutions before Argentina’s Central Bank. 
                                        <br><br>

                                        At the request of various financial institutions, our firm drafted Argentina’s Leasing Law and Derivatives Law, and the first draft law that established the legal framework for Securitization Transactions. 
                                        <br><br>

                                        We have also advised different multinational entities on loans granted to domestic institutions, including a review on foreign exchange controls rules and regulations.




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
            <div class="modal fade" data-backdrop="false" id="practica9" tabindex="-1" role="dialog" aria-labelledby="Administrative Law">
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
                                    <p class="paragraph-1 color-1">Administrative Law.</p>
                                </div>
                                <div class="col-sm-8 col-sm-offset-2">
                                    <p class="paragraph-2 color-1">
                                       Estudio Alegria has wide experience in administrative law practice. We have worked extensively in the fields of competitive and limited bidding and administrative contracts, including public works and supply agreements, advising on expropriation, industrial promotion, mining, technology transfers, rules and regulations applicable to foreign investments, environmental law, fair trade and price controls, foreign trade (customs classification and valuation, foreign exchange controls, antidumping and compensatory rights), rules and regulations applicable to offsetting debt with the federal government, government debt consolidation and privatizations. This also includes the newly developed Public-Private Associations.
                                       <br><br>
 
                                        Our firm offers legal advice at all stages of administrative proceedings, and representation in litigation challenging national, provincial or municipal administrative decisions.
                                       <br><br>

                                        Estudio Alegria, Buey Fernández, Fissore & Montemerlo has acted as counsel in a number of bidding and auction processes in connection with the privatization of state-owned companies, particularly those related with the energy, gas, and banking sectors.




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
                        <h2>“THINK LIKE A MAN OF ACTION, 
                        <br class="hidden-xs"><span>ACT AS A MAN OF THOUGHT.”</span>
                        <br><small>Henri Bergson</small>
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
                        <h2 class="color-4 h1"><b>Partners</b></h2>
                    </div>
                    <div class="col-sm-6 wow fadeInUp animated" data-wow-duration="2000ms" data-wow-delay="300ms">
                        <p class="color-2 bajada">Our interdisciplinary team, formed by lawyers and public accountants, and the commitment of the partners distinguish us by our professional practices.</p>
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
                                            Mr. Alegria graduated from the University of Buenos Aires Law School in 1957, where he also obtained his doctorate degree in Law and Social Sciences. His dissertation El Aval was awarded the highest grade, and he was given the Premio Facultad (1971).
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
                                            Mr. Alegria joined the firm in 1995 and was made a partner in 2004. He specializes in Debt and Corporate Restructurings, Bankruptcy and Insolvency, Mergers and Acquisitions, Capital Markets, Corporate Law, Banking Law, Civil and Commercial Contracts, Litigation, and Arbitration.


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
                                            Mr. Buey Fernández joined the firm in 1980 and became a partner in 2000. He specializes in Debt and Corporate Restructurings, Insolvency and Bankruptcy, Mergers and Acquisitions, Capital Markets, Corporate Law, Banking Law, Civil and Commercial Contracts, and Arbitration. 
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
                                       <span class="socio__data__descrip paragraph-2">Mr. Fissore is a partner of the Firm and has been noteworthy for his professional participation in issues relating to Commercial Law, Corporations Law, Capital Markets, Banking, Bankruptcy and Insolvency Law, Litigation, Arbitration and Dispute Resolution. In his professional practice, he participated in the advisory services provided to local and foreign companies in local and international transactions.
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
                                       <span class="socio__data__descrip paragraph-2">Mr. Montemerlo joined the firm in 1980 and became a partner in 2000. He specializes in financial and accounting issues and negotiation processes related to Debt Restructurings, Mergers and Acquisitions, Corporate Law, Litigation, Arbitration and Civil and Commercial Contracts. 
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
                                    <p class="paragraph-2 color-3">Languages: Spanish and Italian. Comprehension of English and French.</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="paragraph-2 color-2">

                                    Héctor Alegria is the founding partner of Estudio Alegria, Buey Fernández, Fissore & Montemerlo.
                                    <br><br>

                                    Mr. Alegria graduated from the University of Buenos Aires Law School in 1957, where he also obtained his doctorate degree in Law and Social Sciences. His dissertation El Aval was awarded the highest grade, and he was given the Premio Facultad (1971). In 1969, the Cámara Junior honored him with the Outstanding Young Man Prize.
                                    <br><br>

                                    He was National Judge in Commercial Matters (1963-1969), the first Chairman of the Argentine Securities and Exchange Commission (Comisión Nacional de Valores) (1969-1975), Alternate Judge of the Supreme Court of Justice of Argentina (1995-1999).
                                    <br><br>

                                    Mr. Alegria is an Active Member of the Academia Nacional de Derecho y Ciencias Sociales de Buenos Aires; Academic Member of the Academia de Mercado de Capitales (Argentina), and of the Academia de Derecho Bursátil y de la Actividad Financiera (Mexico); Chairman of the Instituto de Derecho Empresarial de la Academia Nacional de Derecho y Ciencias Sociales, and Chairman of the Business Law Section of the Buenos Aires Bar Association.   He has received several prizes, such as the Konex Prize in the “Humanities” category (2006), “Premio Justicia 2009” awarded by the Universidad de Ciencias Empresariales y Sociales (UCES), a prize for his “Outstanding Contribution to Latin American Law” awarded by the Asociación Iberoamericana de Derecho Privado (2012) and the Konex Platinum prize 2016 in the “Humanities” category, “Commercial Law” (2016). He was selected by the specialized magazine Chambers and Partners as one of the 100 leading lawyers of the world (London, United Kingdom, 2000).
                                    <br><br>

                                    Mr. Alegria has been a member of several committees for the amendment of the Argentine Civil and Commercial Codes. He was a Member of the Committees for the Unification of and Amendment to the Civil and Commercial Codes (in 1987 and 1992) that prepared a Preliminary Draft Unification of Civil and Commercial Law (1987-1992); Member of the committee charged with drafting a new Civil Code (1995) and a Member of the committee which in 1998 drafted a “Preliminary Version of the Argentine Civil Code” (unified with the former Commercial Code). He co-authored the Argentine Bankruptcy and Insolvency Bill (enacted as Law No 19551), and its subsequent amendment (enacted as Law No. 22917). He also drafted the Leasing Bill (which became Act 25248), and the Securities Clearinghouse Bill (Act 20643), and other draft legislation.
                                    <br><br>

                                    In the academic field, after serving as Full Professor of Commercial Law at the University of Buenos Aires Law School (since 1982) and Full Professor of Economic Law at the University of Buenos Aires Economic Sciences School (1969-2002), he has been Professor Emeritus of the University of Buenos Aires since 2000. 
                                    <br><br>

                                    Mr. Alegria has authored several books, including Sociedades Anónimas, El Aval, Algunas cuestiones de derecho concursal, Actuación del síndico en convocatorias y quiebras, Las sociedades anónimas en los países de la ALALC, Concursos – which was jointly authored with Piero Pajardi -, La Ley de Convertibilidad - jointly with Julio César Rivera - , and more than one hundred articles published in foreign and local legal periodicals and law reviews, as well as presentations for conferences and seminars. 
                                    <br><br>

                                    He is Publishing Director of the Revista de Derecho Privado y Comunitario and of Suplemento Especial de Concursos y Quiebras published quarterly by La Ley. He has delivered more than seven hundred lectures and has attended conferences and seminars both in Argentina and abroad.
                                    <br><br>

                                    Mr. Alegria is a member of various arbitral tribunals (both ad hoc and permanent tribunals). He has also served as international consultant. 



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
                                    <p class="paragraph-2 color-3">Languages: Spanish, English, and comprehension of French and Portuguese.</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="paragraph-2 color-2">

                                    Mr. Alegria joined the firm in 1995 and was made a partner in 2004. He specializes in Debt and Corporate Restructurings, Bankruptcy and Insolvency, Mergers and Acquisitions, Capital Markets, Corporate Law, Banking Law, Civil and Commercial Contracts, Litigation, and Arbitration.
                                    <br><br>

                                    He practiced as a foreign lawyer at Cleary, Gottlieb, Steen & Hamilton New York offices in 2003-2004.
                                    <br><br>

                                    Mr. Alegria graduated from the Universidad Católica Argentina Law School in 1998. He completed a Postgraduate Course on Corporate Legal Problems at Universidad Austral in 1997, in which he was awarded the first prize. In 2003 he received a Master in Laws (LL.M.) degree from Northwestern University, Chicago, USA, and a Certificate in Business Administration from Northwestern University’s Kellogg School of Management.
                                    <br><br>

                                    He is a professor at the University of Buenos Aires Law School and at UCEMA University, where he teaches Bankruptcy and Insolvency Law, and has been Professor of Commercial Law I (Generalities and Business Organizations Law) at the Universidad Católica Argentina Law School.
                                    <br><br>

                                    Infobae newspaper ranked Javier Alegria among the Most Promising Young Lawyers, based on a survey conducted among young Argentine lawyers in 2005. He has taught subjects within his specialty area at seminars area and attended several courses on commercial and financial law. He has authored several research papers in his areas of expertise.
                                    <br><br>

                                    He is a member of the Buenos Aires Bar Association, of the Río Cuarto (Córdoba) Bar Association and of the Rafaela (Santa Fe) Bar Association. He is a member of the Legal Division of IDEA and of the Honorary Consultative Board of the Association of Corporations.




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
                                    <p class="paragraph-2 color-3">Languages: Spanish and English.</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="paragraph-2 color-2">

                                    Mr. Fissore is a partner of the Firm and has been noteworthy for his professional participation in issues relating to Commercial Law, Corporations Law, Capital Markets, Banking, Bankruptcy and Insolvency Law, Litigation, Arbitration and Dispute Resolution. In his professional practice, he participated in the advisory services provided to local and foreign companies in local and international transactions.
                                    <br><br>

                                    He graduated with honors from the University of Buenos Aires Law School in 1984. He took a graduate course at Harvard University, where her received a Master of Laws (LL.M.) degree in 1992.  He has been singled out on several occasions with the following awards: Summa Cum Laude 1985 and Honors Diploma from the University of Buenos Aires Law School. The same year, he also received the highest distinction awarded by the University of Buenos Aires. He also received the Dr. Silva Riestra, Dr. Fontán Balestra and Dr. Tedin Uriburu awards (1985).
                                    <br><br>

                                    Mr. Fissore was a lawyer with the Inter-American Investment Corporation in Washington D.C. from July 1992 through September 1994 and, as such, he participated in several Capital Investment and Loan projects in Latin America and the Caribbean.
                                    <br><br>

                                    He is a full professor at the Universidad Argentina de la Empresa (UADE) and at Universidad San Andrés, where he teaches Bankruptcy and Insolvency Law. He is also a full professor of Rights in rem and Bankruptcy and Insolvency at Universidad del Salvador (USAL).
                                    <br><br>

                                    Mr. Fissore has participated in many workshops, seminars and conferences in his area of expertise both in Argentina and in the United States.
                                    <br><br>

                                    He has been recognized by the prestigious Chambers & Partners magazine as a leading lawyer in several of his specialty areas.
                                    <br><br>

                                    He has done research in Civil and Commercial Law.





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
                                    <p class="paragraph-2 color-3">Languages: Spanish and English.</p>
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
                                    <p class="paragraph-2 color-3">Languages: Spanish and English.</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="paragraph-2 color-2">

                                    Mr. Montemerlo joined the firm in 1980 and became a partner in 2000. He specializes in financial and accounting issues and negotiation processes related to Debt Restructurings, Mergers and Acquisitions, Corporate Law, Litigation, Arbitration and Civil and Commercial Contracts. 
                                    <br><br>
                                    He was a member of the Committee on Professional Practice in Bankruptcy Proceedings of the Professional Association of Certified Public Accountants of the City of Buenos Aires (1998), and served as auditor for Mercado de Valores de Buenos Aires (1983). He received his graduate degree in Accounting from the Universidad Católica Argentina (UCA) in 1980. 
                                    <br><br>
                                    In 1988 he received a Post-Graduate Degree in Trusteeship in Bankruptcy and Insolvency Proceedings from the University of Buenos Aires School of Economic Sciences. He has been Assistant Professor of Managerial Accounting at the Universidad Católica Argentina School of Economic Sciences (1981-1988). He lectured as Professor of a course of Professional Practice in Bankruptcy at the University of Buenos Aires School of Economic Sciences (1988).
                                    <br><br>
                                    He has attended and has lectured at a large number of courses and seminars.
                                    <br><br>
                                    He is a member of the Professional Association of Certified Public Accountants of the City of Buenos Aires.

                                    


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
                        <h2 class="color-1 h1"><b>Professionals</b></h2>
                    </div>
                    <div class="col-lg-10 col-lg-offset-1 col-md-12 col-md-offset-0">
                        <div class="row">
                            <ul class="list-unstyled list-inline profesional-listado">
                                <li class="col-xs-6  col-sm-4 color-2 profesional wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="300ms">
                                    <span class="profesional__img">
                                        <span style="background-image: url('img/Tristan_Gonzalez_Correas_02_med-res.jpg');     background-position-y: -4px;"></span>
                                        
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
                                        <span style="background-image: url('img/Tomas_Hutchinson_01_med-res.jpg');     background-position-y: -18px;"></span>
                                        
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
                                        <span style="background-image: url('img/Rodolfo_Romani_02_med-res.jpg')"></span>
                                        
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
                                        <span style="background-image: url('img/170731-Estudio Alegria-0011-b.jpg')"></span>
                                        
                                    </span>
                                    <span class="profesional__data">
                                       <span class="profesional__data__nombre">
                                         Mariano de Apellaniz
                                       </span>
                                       <span class="profesional__data__descrip">Asociate Sr.
                                        </span>
                                       <a href="javascript:;" data-toggle="modal" data-target="#profesional4">+ INFO</a>
                                    </span>
                                </li>
                                <li class="col-xs-6  col-sm-4 color-2 profesional wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="500ms">
                                    <span class="profesional__img">
                                        <span style="background-image: url('img/Leonardo_Lucas_03_med-res.jpg');     background-position-y: -13px;"></span>
                                        
                                    </span>
                                    <span class="profesional__data">
                                       <span class="profesional__data__nombre">
                                         Leonardo Lucas
                                       </span>
                                       <span class="profesional__data__descrip">Asociate Sr.
                                        </span>
                                       <a href="javascript:;" data-toggle="modal" data-target="#profesional5">+ INFO</a>
                                    </span>
                                </li>
                                <li class="col-xs-6  col-sm-4 color-2 profesional wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="700ms">
                                    <span class="profesional__img">
                                        <span style="background-image: url('img/Pablo_Anderson_02_med-res.jpg');    background-position-y: -40px;     background-position-x: -43px;"></span>
                                        
                                    </span>
                                    <span class="profesional__data">
                                       <span class="profesional__data__nombre">
                                         Pablo Anderson
                                       </span>
                                       <span class="profesional__data__descrip">Asociate Sr.
                                        </span>
                                       <a href="javascript:;" data-toggle="modal" data-target="#profesional6">+ INFO</a>
                                    </span>
                                </li>
                                <li class="col-xs-6  col-sm-4 color-2 profesional wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="300ms">
                                    <span class="profesional__img">
                                        <span style="background-image: url('img/Santiago_Courreges_02_med-res.jpg')"></span>
                                        
                                    </span>
                                    <span class="profesional__data">
                                       <span class="profesional__data__nombre">
                                         Santiago Courreges
                                       </span>
                                       <span class="profesional__data__descrip">Asociate
                                        </span>
                                       <a href="javascript:;" data-toggle="modal" data-target="#profesional7">+ INFO</a>
                                    </span>
                                </li>
                                <li class="col-xs-6  col-sm-4 color-2 profesional wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="500ms">
                                    <span class="profesional__img">
                                        <span style="background-image: url('img/Fernando_Biscotti_01_med-res.jpg');    background-position-y: -27px;    background-position-x: 17px;"></span>
                                        
                                    </span>
                                    <span class="profesional__data">
                                       <span class="profesional__data__nombre">
                                         Fernando Biscotti
                                       </span>
                                       <span class="profesional__data__descrip">Asociate
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
                                    <p class="paragraph-2 color-3">Languages: Spanish and English.</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="paragraph-2 color-2">
                                    Mr. González Correas was born in Buenos Aires in 1941.
                                    <br><br>
                                    He has been Of-Counsel to the firm since 1996. He provides advice on Capital Markets, Corporate Law, Banking Law, Mergers and Acquisitions and Civil and Business Contracts.  He was a Member of the Board of Directors of Socma Americana S.A., Sideco Americana S.A., Sevel Argentina S.A. and has been Alternate Director of the Board of Alpargatas S.A.I.C., and Banco Francés del Río de la Plata S.A. He has been Legal Director of must of such companies.  
                                    <br><br>
                                    He received his law degree from the University of Buenos Aires School of Law and Social Sciences in 1965. He has attended a large number of courses and seminars, including an Intensive Course for Executives (C.I.P.E.) organized by IDEA in 1977, and he completed the Stanford Executive Program, organized by Stanford University, USA, in 1988. He has lectured at a large number of courses and seminars both in Argentina and abroad, and written many legal articles.   
                                    <br><br>He is honorary member of the “Cámara de Sociedades Anónimas”, and former member of the Governing Committee and the Governing Board of the Buenos Aires Stock Exchange – where he also was a member of the Securities Committee -, a former Chairman of the Club de Abogados de Empresa and a former member of the Licensing Executive Society (Argentine Chapter). He was Chairman of the Legal Division of IDEA (1984-1986) and integrated the Administration Board of the Universidad Argentina de la Empresa (UADE)  
                                    <br><br>He is a member of  the Buenos Aires Bar Association.

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
                                    <p class="paragraph-2 color-3">Languages: Spanish, Italian, and comprehension of French and English.</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="paragraph-2 color-2">

                                    Mr. Hutchinson currently serves as of counsel to the Firm, providing advice on issues concerning Public and Administrative Law. 
                                    <br><br>

                                    He served as Justice of the Supreme Court of Justice of the Province of Tierra del Fuego, Antarctica and South Atlantic Islands (a position to which he was appointed after a competitive examination) from May 1995 to November 2000, and was Chief Justice of such Court from February 1996 to January 1997. He was Judge of the Court of Appeals for Federal Administrative Litigation Matters from February 1999 to January 2000, and Member of Division IV from February 1984 to September 1990. 
                                    <br><br>

                                    He was Clerk in the Office for Original Actions of the Supreme Court of Justice of the Province of Buenos Aires from November 1981 to March 1984. He then served as Assistant Clerk in the Office for Original Actions of the Supreme Court of Justice of the Province of Buenos Aires from September 1979 to November 1981. He served as Assistant Clerk in the Office for Original Actions of the Supreme Court of Justice of the Province of Buenos Aires from 1978 to September 1979, and was Clerk of the Court of First Instance for Civil and Commercial Matters for the provinces of La Pampa and Buenos Aires, respectively, from 1969 to 1978.
                                    <br><br>

                                    Mr. Hutchinson was President of the Council for the Judiciary of the Province of Tierra del Fuego, Antarctica and South Atlantic Islands from May 1995 to February 1996, from February 1997 to January 1998, and from December 1999 to October 2000. He also served as an attorney representing the Province of Cordoba in the City of Buenos Aires from November 1992 to April 1995. 
                                    <br><br>

                                    He received his lawyer’s, notary public and licensed court representative degree from the University of Buenos Aires School of Law and Social Sciences in 1968. He holds a doctor’s degree in Public Law from Universidad San Pablo (CEU) - Madrid (Spain), where he defended his thesis and earned a cum laude distinction from the jury consisting of Professors Jesús González Pérez; Tomás Ramón Fernández Rodríguez; Luciano Martín-Retortillo Bacquer; Juan Antonio Hernández Corchete and Alberto Díaz Romeral.
                                    <br><br>

                                    Between 1971 and 1976 he began a course towards a degree in accounting at the University of Buenos Aires School of Economic Sciences. He also received an Italian Language and Literature Degree (Asociación Dante Alighieri – 1963-1968) and a post-graduate degree in Administrative Law and International Politics from Universitá degli Studi di Bari, in Italy.
                                    <br><br>

                                    Mr. Hutchinson was President of the Master’s Degree in Administrative Law Program at the Universidad Católica de La Plata Law School (1995/2003) and of the Program for Specialization in Administrative Law and Administrative Agencies of the School of Law and Social Sciences of the University of Buenos Aires (1986/1995); a member of the Administrative Law and Administrative Agencies Post-Graduate Course Academic Advisory Committee at the University of Buenos Aires Law School (from 1995 onwards). He is a member of the Scientific Committee for the Post-graduate Course on Public Law at the Universidad de San Pablo-CEU in Madrid, Spain. He is a professor at the Universidad Católica de La Plata School of Law Master’s Program in Administrative Law, where he teaches Administrative Law. Mr. Hutchinson teaches Administrative Procedural Law at the Administrative Law and Administrative Agencies Specialization Program at the University of Buenos Aires School of Law and Social Sciences. He is also a professor of Administrative Law at the Law Schools of the University of Buenos Aires, Universidad Nacional de La Plata, and Universidad Argentina de la Empresa, and he chairs the Instituto de Derecho Administrativo “Bartolomé Fiorini” at the Universidad Nacional de La Plata School of Law and Social Sciences.
                                    <br><br>

                                    Mr. Hutchinson has received numerous awards and honors for his teaching activities and his prolific legal writings (27 books and about 400 legal articles). Worth mentioning among such activities are: Emeritus professor of the University of Buenos Aires (since 2006); emeritus professor of Universidad Nacional de La Plata (since 2017); member of the International Academy of Comparative Law in Paris (since October 2008); Presea “Gabino Fraga” (Gabino Fraga Prize) awarded by the Mexican Administrative Law Association for his valuable contribution to the development and improvement of Administrative Law Science (June 8, 2006). He is a member of the Consultative Academic Council of the Bar Association of the La Plata Judicial Department (2001), and honorary consultative advisor to the Administrative Law Institute of the Bar Association of the Judicial Department of La Plata. 
                                    <br><br>

                                    He is a member of the Bar Associations of the cities of Buenos Aires and La Plata and former Chairman of the Disciplinary Tribunal of the Buenos Aires Bar Association (2012/15). 



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
                                    <p class="paragraph-2 color-3">Languages: Spanish and English</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="paragraph-2 color-2">

                                    Mr. Romani is a permanent consultant and providing as advice in financial and accounting issues related to Financial Restructurings, Mergers and Acquisitions, Business Contracts and Insolvency Proceedings.
                                    <br><br>
                                    Until he joined the firm he worked as manager, director and advisor of major private companies both in Argentina and abroad, in the areas of Finance and Management Control.
                                    <br><br>
                                    Mr. Romani received his graduate degree in accounting from the University of Buenos Aires School of Economic Sciences in 1973. He has attended a large number of courses and seminars on Finance,  Banking, Foreign Trade, and Bankruptcy Law.
                                    <br><br>
                                    He is an invited professor in the Master's Degree in Business Law at UADE, whose he lectured about Corporate and Financial Reorganizations. 
                                    <br><br>
                                    He is a member of the Professional Association of Certified Public Accountants of the City of Buenos Aires.




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
                                    <p class="paragraph-2 color-3">Languages: Spanish, English and knowledge of French.</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="paragraph-2 color-2">
                                    Mr. De Apellaniz has been an Of Counsel attorney with the Firm since 2017. His areas of expertise are Advisory Services in connection with Commercial Distribution and Restructuring Agreements of Logistics and Distribution Systems of Companies, Corporate and Debt Restructuring, Real Estate, Insolvency Proceedings, Bankruptcy, Litigation and Mediation.
                                    <br><br>
                                    He worked at Alto Paraná S.A. and was an associate with the Cárdenas, Hope & Otero Monsegur law firm (1981-1987). From September 1987 through April 1990 he was a member of the Firm. From 1990 to 1997 he set up his own firm and was appointed by the Argentine Ministry of Economy as the bankruptcy trustee of Grupo Greco. He was Manager of the Legal Department at Cervecería y Maltería Quilmes from 2000 through 2010. In 2014 he worked at Danone Argentina S.A.
                                    <br><br>
                                    He graduated as a lawyer from Universidad Católica Argentina in 1979.
                                    <br><br>
                                    He is a professor of Civil Law IV (Rights in Rem) at Universidad del Salvador (USAL), in the chair of Mr Gabriel H. Fissore.
                                    <br><br>
                                    He is a member of the Bar Association of the City of Buenos Aires and of the Bar Association of the City of La Plata.





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
                                    <p class="paragraph-2 color-3">Languages: Spanish and English</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="paragraph-2 color-2">

                                    Mr. Leonardo Lucas was born in Bahia Blanca, Buenos Aires, in 1976.
                                    <br><br>    
                                    He has been an associate with the firm since 2005, and he specializes in Financial and Corporate Restructurings, Bankruptcy and Insolvency Proceedings, Litigation, Arbitration, Alternative Dispute Resolution, and Civil and Business Contracts.
                                    <br><br>    
                                    Prior to joining the firm, he worked at the law firm Marval, O’Farrell & Mairal (2003-2005), the law firm Cartell & Murray (1997-1998), and acted as a law clerk in the Judicial power (the Court of First Instance for Commercial Matters No. 13, and the Court of First Instance for Civil Matters No. 22) (1995-1996).
                                    <br><br>    
                                    Mr. Lucas graduated from the Universidad Católica Argentina (UCA) School of Law in 1999, where he also completed postgraduate courses in Modern Corporate Contracts, and Tools and Innovate Strategies of Business Management. The Trust. During 2015 – 2016 he coursed the master’s degree in Commercial Law at the Universidad Austral School of Law.
                                    <br><br>    
                                    He has been Teaching Assistant in Bankruptcy Law at Universidad Argentina de la Empresa (UADE) Law School in the ………. Course and in the post-graduate Master in Business Law. He also performed as Teaching Assistant in Commercial Law at Universidad Católica Argentina (UCA. 
                                    He is a member of the Buenos Aires Bar Association.



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
                                    <p class="paragraph-2 color-3">Languages: Spanish and English</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="paragraph-2 color-2">

                                   Mr. Anderson has been an associate with the firm since 2000, and his practice focus on Financial and Corporate Restructuring, Bankrupcy, Banking Law, Business Law, Litigation, Alternative Dispute Resolution, and Civil and Business Contracts.
                                   Prior to joining Estudio Alegria, he worked for the law firm of Anderson & Sosa for nine years.
                                   <br><br>
                                   Mr. Anderson graduated from the University of Buenos Aires Law School in 1996.
                                   <br><br>
                                    He is a member of both the Buenos Aires Bar Association, and the Lomas de Zamora Bar Association.




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
                                    <p class="paragraph-2 color-3">Languages: Spanish and English</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="paragraph-2 color-2">

                                    Mr. Courreges has been an associate with the firm since 2016 and his practice focus in Litigation, Business Law, Energy Law and Civil & Commercial Contracts.
                                    <br><br>
                                    Prior to joining the firm, he worked at the law firm Bulló Abogados (2014-2016) and at the law firm  Carbó, Castelli & Asociados (2012-2014).  
                                    <br><br>
                                    Mr. Courreges graduated as a lawyer from the University of Buenos Aires Law School in 2015.
                                    <br><br>
                                    Since 2016 he has been assistant professor of Property at the Universidad del Salvador Law School (USAL). 
                                    <br><br>
                                    He is member of the Buenos Aires Bar Association



                                    </p>
                                </div>
                            </div>
                        </div>                                                              
                  </div>
                </div>
              </div>
            </div>  <!-- end modal -->                        
            <div class="modal fade" data-backdrop="false" id="profesional8" tabindex="-1" role="dialog" aria-labelledby="Fernando Biscotti">
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
                                    <p class="paragraph-2 color-3">Languages: Spanish and English</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="paragraph-2 color-2">

                                    Mr. Biscotti has been an associate with the firm since 2016. His practice focuses on Commercial, Civil and Administrative litigation, Mergers and Acquisitions, Corporate Law and Alternate Dispute Resolution of Conflicts.
                                    <br><br>
                                    He graduated as a lawyer from the University of Museo Social Argentino Law School in 2015. That year he was distinguished with the Prize for Academic Excellence given by the Buenos Aires Association of Lawyers.
                                    <br><br>
                                    He is member of the Buenos Aires Bar Association

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
                        <h2>"It's always the right time
                        <br class="hidden-xs"><span>to do the right thing"</span>
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
                        <p class="h2 color-3 visible-xs">Contact Us</p>
                        <p class="hidden-xs paragraph-1 color-3"><b>Contact Us</b></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <form id="contact-form" class="form">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" required class="form-control" name="nombre" placeholder="Name">
                                    <input type="email" required class="form-control" name="email" placeholder="Email" >
                                    <span class="divider hidden-xs"></span>

                                </div>
                                <div class="col-md-6">
                                    <input type="text" required class="form-control" name="apellido" placeholder="Last Name">
                                    <input type="text" required class="form-control" name="telefono" placeholder="Phone Number">

                                </div>
                                <div class="col-xs-12">
                                    <input type="text" required class="form-control" name="asunto" placeholder="Subject">
                                </div>
                                <div class="col-xs-12">
                                    <textarea name="mensaje" required id="mensaje" cols="20" rows="2" class="form-control" placeholder="Type your message"></textarea>
                                </div>
                                <button type="submit" class="animated btn btn-sm">SEND</button>
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
                        <p class="h2 color-3 visible-xs">Work with us</p>
                        <p class="hidden-xs paragraph-1 color-3"><b>Work with us</b></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form action="post" id="cv-form" class="form">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="nombre" placeholder="Name">
                                        <input type="email" class="form-control" name="email" placeholder="Email">
                                        <span class="divider hidden-xs"></span>

                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="apellido" placeholder="Last Name">
                                        <input type="text" class="form-control" name="telefono" placeholder="Phone Number">

                                    </div>
                                    <div class="col-xs-12">
                                        <textarea name="mensaje" id="mensaje" cols="20" rows="2" class="form-control" placeholder="Type your message"></textarea>
                                    </div>
                                    <span class="divider hidden-xs"></span>
                                </div>
                                <div class="col-md-4">
                                    <label for="cv">Upload your resume
                                        <br><span class="btn btn-sm transition">Select File</span>
                                    </label>
                                    <input type="file" name="cv" id="cv" class="form-control invisible">
                                    <p><small class="color-2">File extensions allowed: .jpg .pdf
                                        <br>Max file size: 2MB</small></p>
                                </div>
                            </div>
                                    <button type="submit" class="animated btn btn-sm">SEND</button>
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
                        <li class="color-1  ">Copyright Estudio Alegria. All rights reserved.</li>
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
