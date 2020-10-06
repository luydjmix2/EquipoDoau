<!DOCTYPE html>
<html class="" xmlns:fb="" xmlns:og="" lang="en">
<head>
    <link rel="stylesheet" href="/css/css.css">
    <meta http-equiv="Content-Type" content="text/html">
    <meta charset="UTF-8">     
    <meta http-equiv="X-UA-Compatible" content="ie=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tus opciones Delivery en tu Barrio con Doau Domicilio">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Doau en tu Barrio</title>
</head>
    <body>
        <section class="section_overlay">
            <div class="card bg-dark text-white">
                <img src="/img/brochetasb.jpg" class="card-img" alt="..."> 
                <div class="card-img-overlay">
                    <nav class="navbar navbar-expand-lg navbar-light bg-0">
                        <a class="navbar-brand" href="#">{{config('app.name')}}</a>
                        <button class="navbar-toggler" type="button" 
                        data-toggle="collapse" 
                        data-target="#navbarSupportedContent" 
                        aria-controls="navbarSupportedContent" 
                        aria-expanded="false" 
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                    
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- <ul class="navbar-nav mr-auto"> -- <ul class="nav nav-pill"> -->
                            <ul class="nav navbar-nav navbar-right mr-auto nav-pill" >
                                <li class="nav-item active">
                                    <a class="nav-link btn btn-outline text-white" href="#"><strong>Regístra tu negocio </strong><span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#">Ayuda en línea</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#">Regístrate</a>
                                </li>                            
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#" tabindex="-1" aria-disabled="true">Ingresar</a>
                                </li>
                        </ul>
                        </div>
                    </nav>                
                    <div>  <!-- titulo y formulario -->
                        <h2 class="text-center hgroups"><strong>¿Dónde nos necesitas?</strong></h2>
                        <div class="content">
                            <span class="location-text">Dirección de entrega</span>
                            <form action="" method="POST" >                        
                                <div class="form-row align-items-center d-flex flex-row">   

                                    <div class="col-auto my-1"> <!-- ciudad -->
                                        <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                            <option value="972">Armenia</option>
                                            <option value="996">Barrancabermeja</option>
                                            <option value="1009">Barranquilla</option>
                                            <option value="1086">Bello</option>
                                            <option value="975" selected="selected">Bogotá</option>
                                            <option value="1013">Bucaramanga</option>
                                            <option value="991">Cali</option>
                                            <option value="1126">Cañaveral</option>
                                            <option value="1005">Cartagena</option>
                                            <option value="982">Cartago</option>
                                            <option value="1742">Caucasia</option>
                                            <option value="979">Chia</option>
                                            <option value="1745">Cota</option>
                                            <option value="974">Cucuta</option>
                                            <option value="1740">Dos Quebradas</option>
                                            <option value="1101">Dosquebradas</option>
                                            <option value="1737">El tesoro</option>
                                            <option value="1089">Envigado</option>
                                            <option value="1122">Floridablanca</option>
                                            <option value="983">Funza</option>
                                            <option value="1463">Gaira/Rodadero</option>
                                            <option value="1008">Girardot</option>
                                            <option value="1123">Girón</option>
                                            <option value="981">Ibague</option>
                                            <option value="1087">Itagüi</option>
                                            <option value="1072">Jamundí</option>
                                            <option value="1000">La Calera</option>
                                            <option value="1739">Madrid</option>
                                            <option value="987">Manizales</option>
                                            <option value="980">Medellín</option>
                                            <option value="1007">Monteria</option>
                                            <option value="973">Mosquera</option>
                                            <option value="985">Neiva</option>
                                            <option value="1016">Palmira</option>
                                            <option value="1002">Pasto</option>
                                            <option value="1011">Pereira</option>
                                            <option value="1124">Piedecuesta</option>
                                            <option value="1103">Poblado</option>
                                            <option value="1003">Popayán</option>
                                            <option value="1743">Riohacha</option>
                                            <option value="1426">Rionegro</option>
                                            <option value="1088">Sabaneta</option>
                                            <option value="978">Santa Marta</option>
                                            <option value="998">Santa Rosa de Cabal</option>
                                            <option value="1744">Sincelejo</option>
                                            <option value="977">Soacha</option>
                                            <option value="986">Soledad</option>
                                            <option value="1104">Tesoro</option>
                                            <option value="1462">Tocancipá</option>
                                            <option value="1741">Tulua</option>
                                            <option value="1014">Tunja</option>
                                            <option value="997">Valledupar</option>
                                            <option value="984">Villavicencio</option>
                                            <option value="1077">Yumbo</option>+
                                        </select>
                                    </div>

                                    <div class="col-auto my-1"> <!-- indicación de direcc -->
                                        <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                            <option value="1">Calle</option>
                                            <option value="2">Carrera</option>
                                            <option value="3">Avenida</option>
                                            <option value="4">Avenida Carrera</option>
                                            <option value="5">Avenida Calle</option>
                                            <option value="6">Circular</option>
                                            <option value="7">Circunvalar</option>
                                            <option value="8">Diagonal</option>
                                            <option value="9">Manzana</option>
                                            <option value="10">Transversal</option>
                                            <option value="11">Vía</option> 
                                        </select>
                                    </div>
                                    <div class="col-auto my-1">
                                        <input type="text" class="form-control" id="inlineFormInputName" placeholder="Dirección">
                                    </div>
                                    <div class="col-auto my-1">
                                        <input type="text" class="form-control" id="inlineFormInputName" placeholder="#">
                                    </div>
                                    <div class="col-auto my-1">
                                        <input type="text" class="form-control" id="inlineFormInputName" placeholder="Dirección">
                                    </div>
                                                                
                                    <button class="btn btn-danger" onclick="" type="button" >Buscar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="new_row content_module content_community dynamic_element show content_community_fixed">
            <article id="contenedor"class="new_center_content">
                <h2 class="text-center">El ecosistema</h2>
                <h3 class="text-center">Conoce la opinión de expertos en nuestros servicios</h3>
                
                <div class="card-group">
                    <div class="card">                    
                        <img src="https://img.pystatic.com/users/burger-2.png" alt="" title="" width="100" height="70">
                        <div class="card-body">
                            <p class="card-text text-center"><small class="text-muted">Usuario #</small></p>
                            <img src="https://www.interactivechaos.com/sites/default/files/2019-08/ratings__maq_02.jpg" alt="" title="" width="70" height="70">
                            <p class="text-center">Muy delicioso y a tiempo!! Buena atención</p>
                            <p class="card-text text-center"><small class="text-muted">Castillo Chino<br>5 sep, 2020</small></p>
                        </div>
                    </div>
                    <div class="card">                    
                        <img src="https://img.pystatic.com/users/burger-2.png" alt="" title="" width="100" height="70">
                        <div class="card-body">
                            <p class="card-text text-center"><small class="text-muted">Usuario #</small></p>
                            <img src="https://www.interactivechaos.com/sites/default/files/2019-08/ratings__maq_02.jpg" alt="" title="" width="70" height="70">
                            <p class="text-center">Muy delicioso y a tiempo!! Buena atención</p>
                            <p class="card-text text-center"><small class="text-muted">Castillo Chino<br>5 sep, 2020</small></p>
                        </div>
                    </div>
                    <div class="card">                    
                        <img src="https://img.pystatic.com/users/burger-2.png" alt="" title="" width="100" height="70">
                        <div class="card-body">
                            <p class="card-text text-center"><small class="text-muted">Usuario #</small></p>
                            <img src="https://www.interactivechaos.com/sites/default/files/2019-08/ratings__maq_02.jpg" alt="" title="" width="70" height="70">
                            <p class="text-center">Muy delicioso y a tiempo!! Buena atención</p>
                            <p class="card-text text-center"><small class="text-muted">Castillo Chino<br>5 sep, 2020</small></p>
                        </div>
                    </div>
                    <div class="card">                    
                        <img src="https://img.pystatic.com/users/burger-2.png" alt="" title="" width="100" height="70">
                        <div class="card-body">
                            <p class="card-text text-center"><small class="text-muted">Usuario #</small></p>
                            <img src="https://www.interactivechaos.com/sites/default/files/2019-08/ratings__maq_02.jpg" alt="" title="" width="70" height="70">
                            <p class="text-center">Muy delicioso y a tiempo!! Buena atención</p>
                            <p class="card-text text-center"><small class="text-muted">Castillo Chino<br>5 sep, 2020</small></p>
                        </div>
                    </div>
                    <div class="card">                    
                        <img src="https://img.pystatic.com/users/burger-2.png" alt="" title="" width="100" height="70">
                        <div class="card-body">
                            <p class="card-text text-center"><small class="text-muted">Usuario #</small></p>
                            <img src="https://www.interactivechaos.com/sites/default/files/2019-08/ratings__maq_02.jpg" alt="" title="" width="70" height="70">
                            <p class="text-center">Muy delicioso y a tiempo!! Buena atención</p>
                            <p class="card-text text-center"><small class="text-muted">Castillo Chino<br>5 sep, 2020</small></p>
                        </div>
                    </div>
                    
                </div>
                
                
                
                
                
                
                
                
            </article>
            <br>
            <br>
            <br>
        </section>

        <section class="new_row content_module content_community dynamic_element show content_community_fixed">
            <div id="contenedor" class="card mb-3" style="max-width: 1000px;">
                <div class="row no-gutters">
                    <div class="col-md-5" >
                    <img src="https://cdn.pixabay.com/photo/2016/05/20/15/41/sausages-in-a-dressing-gown-1405207_960_720.jpg" class="card-img" alt="..."> 
                    <!--  3 amigos<img src="https://live.pystatic.com/webassets/home/img-seo-block-bff6e3c42464321cbb6b4b3f2943b83a.jpg" class="card-img" alt="...">-->
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title">Delivery que satisface los sentidos</h5>
                            <p class="card-text">Sabemos que amas la comida tanto como nosotros, por eso queremos llevártela a tu mesa, directo desde la cocina de los mejores restaurantes de Colombia.</p>
                            <p class="card-text">Ingresa tu dirección, elige el restaurante, selecciona tu comida favorita ¡y ya! Pedir a domicilio tu comida nunca había sido tan fácil. ¡Con Domicilios.com lo único difícil será decidir qué comer!</p>                
                        </div>
                    </div>
                </div>              
                
            </div>
            <div class="menus d-flex ftco-animate fadeInUp ftco-animated">
                <div class="menu-img img" style="background-image: url(images/breakfast-1.jpg);">
                    <img src="/img/amigos.jpg" alt="desayuno">
                </div>
                <div class="text">
                    <div class="d-flex">
                        <div class="one-half">
                            <h3>Beef Roast Source</h3>
                        </div>
                        <div class="one-forth">
                            <span class="price">$29</span>
                        </div>
                    </div>
                    <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                </div>
            </div>

        </section>

        <section class="content_module new_row apps">
            <div id="contenedor" class="new_row content_bg">
            <article class="new_center_content ">
                
                <div class="content_info">
                    <h2>Descarga Domicilios en tu celular</h2>
                    <h3>+11 millones de usuarios ya piden comida online</h3>
                    <ul class="d-flex">
                        <li>
                            <a href="https://itunes.apple.com/es/app/domicilios-com-order-food/id611358746?mt=8&amp;none" target="_blank">
                                <img src="https://live.pystatic.com/webassets/home/mob-button-appstore-es-c74943244bad65ca59d716e201037b7d.png" alt="Disponible en el App Store"/>
                            </a>
                        </li>
                        <li>
                            <a href="https://play.google.com/store/apps/details?id=com.clickdelivery.android.domiciliosbogota&amp;referrer=none" target="_blank">
                                <img src="https://live.pystatic.com/webassets/home/mob-button-gplay-es-c7fa3bb120fd5789d0ee4ba411b6a17e.png" alt="Disponible en Google Play"/>
                            </a>
                        </li>                    
                    </ul>              
                </div>
                
                <div class="product-device">
                    <img src="https://live.pystatic.com/webassets/home/mobile-app-4f67d6be734a73b275d289d87963025b.png" class="img-fluid" alt="Descargar app"/>
                </div>
            </article>
            </div>
        </section>

        <footer class="text-center content_module new_row new_footer show">
            <section class="new_center_content" >
                <div class="row content_social_apps"> 
                    <ul class="content_links">
                        <li><a href="/about">Nosotros</a></li>
                        <li><a href="/about/politicas-de-privacidad">Privacidad</a></li>
                        <li><a href="/about/terminos-condiciones">Condiciones</a></li>
                        <li><a href="http://www.sic.gov.co/" target="_blank">Secretaría de Industria y Comercio</a></li>    
                    </ul>
                    
                    <ul class="content_links">
                        <li><a href="https://deliveryhero.wd3.myworkdayjobs.com/domicilios" target="_blank" rel="noopener noreferrer">Sé un DomiHéroe</a></li>
                        <li><button id="suggestRestoBtn" class="btn btn-light" rel="nofollow">Registra tu negocio</button></li>   
                    </ul>   
                <!--Social-->
                    <ul class="content_social">
                        <li class="title">Síguenos en</li>
                        <li class="fb"><a href="https://www.facebook.com" target="_blank" class="facebook" title="Facebook">Facebook</a></li>
                        <li class="tw"><a href="https://twitter.com" target="_blank" class="twitter" title="Twitter">Twitter</a></li>
                        <li class="yt"><a href="https://www.youtube.com" target="_blank" class="youtube" title="Youtube">Youtube</a> </li>
                    </ul>
                    <!--Apps-->
                    <ul class="content_apps">        
                        <li class="title">Descargar app</li>
                        <li class="ic_android">
                            <a href="https://play.google.com/store&amp;referrer=none" target="_blank" class="android" title="Android">Android</a>
                        </li>
                    </ul>
                </div>
                <hr class="divider">
                <p class="text-center">Copyright - 2020 - Doau</p>
            </section>
        </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/6b0ce0e597.js" crossorigin="anonymous"></script>
    </body>
</html>