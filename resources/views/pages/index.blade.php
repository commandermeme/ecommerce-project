@extends('layouts.app')

@include('includes.navbar')
@section('content')
<body>

    <section id="intro" class="clearfix">
        <div class="container">
    
          <div class="intro-img">
            <img class="img-fluid" src=" {{('dist/img/intro-img.svg ')}}"alt=""#>
          </div>

          {{-- <img src="{{ asset('dist/img/arrivel/arrivel_2.png') }}"  alt="#"> --}}
    
          <div class="intro-info">
            <h2>We provide<br><span>solutions</span><br>for your business!</h2>
            <div>
              <a href="#about" class="btn-get-started scrollto">Get Started</a>
              <a href="#services" class="btn-services scrollto">Our Services</a>
            </div>
          </div>
    
        </div>
      </section><!-- #intro -->
    
      <main id="main">
    
    
        <section id="about">
          <div class="container">
    
            <header class="section-header">
              <h3>About Us</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </header>
    
            <div class="row about-container">
    
              <div class="col-lg-6 content order-lg-1 order-2">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
    
                <div class="icon-box wow fadeInUp">
                  <div class="icon"><i class="fa fa-shopping-bag"></i></div>
                  <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                  <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
                </div>
    
                <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
                  <div class="icon"><i class="fa fa-photo"></i></div>
                  <h4 class="title"><a href="">Magni Dolores</a></h4>
                  <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
    
                <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
                  <div class="icon"><i class="fa fa-bar-chart"></i></div>
                  <h4 class="title"><a href="">Dolor Sitema</a></h4>
                  <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                </div>
    
              </div>
    
              <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
                <img class="img-fluid" src="{{asset('dist/img/about-img.svg  ')}}" alt="#">
                  {{-- <img src="{{ asset('dist/img/arrivel/arrivel_2.png') }}"  alt="#"> --}}
              </div>
            </div>
    
            <div class="row about-extra">
              <div class="col-lg-6 wow fadeInUp">
               
                <img class="img-fluid" class="img-fluid" src="{{asset('dist/img/about-extra-1.svg')}}" alt="#">
              </div>
              <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
                <h4>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h4>
                <p>
                  Ipsum in aspernatur ut possimus sint. Quia omnis est occaecati possimus ea. Quas molestiae perspiciatis occaecati qui rerum. Deleniti quod porro sed quisquam saepe. Numquam mollitia recusandae non ad at et a.
                </p>
                <p>
                  Ad vitae recusandae odit possimus. Quaerat cum ipsum corrupti. Odit qui asperiores ea corporis deserunt veritatis quidem expedita perferendis. Qui rerum eligendi ex doloribus quia sit. Porro rerum eum eum.
                </p>
              </div>
            </div>
    
            <div class="row about-extra">
              <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
              
                <img class="img-fluid" class="img-fluid" src="{{asset('dist/img/about-extra-2.svg')}}" alt="#">
              </div>
    
              <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
                <h4>Neque saepe temporibus repellat ea ipsum et. Id vel et quia tempora facere reprehenderit.</h4>
                <p>
                 Delectus alias ut incidunt delectus nam placeat in consequatur. Sed cupiditate quia ea quis. Voluptas nemo qui aut distinctio. Cumque fugit earum est quam officiis numquam. Ducimus corporis autem at blanditiis beatae incidunt sunt. 
                </p>
                <p>
                  Voluptas saepe natus quidem blanditiis. Non sunt impedit voluptas mollitia beatae. Qui esse molestias. Laudantium libero nisi vitae debitis. Dolorem cupiditate est perferendis iusto.
                </p>
                <p>
                  Eum quia in. Magni quas ipsum a. Quis ex voluptatem inventore sint quia modi. Numquam est aut fuga mollitia exercitationem nam accusantium provident quia.
                </p>
              </div>
              
            </div>
    
          </div>
        </section><!-- #about -->
    
      
        <section id="services" class="section-bg">
          <div class="container">
    
            <header class="section-header">
              <h3>Services</h3>
              <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
            </header>
    
            <div class="row">
    
              <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
                <div class="box">
                  <div class="icon"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
                  <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                  <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                </div>
              </div>
              <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
                <div class="box">
                  <div class="icon"><i class="ion-ios-bookmarks-outline" style="color: #e9bf06;"></i></div>
                  <h4 class="title"><a href="">Dolor Sitema</a></h4>
                  <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                </div>
              </div>
    
              <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                <div class="box">
                  <div class="icon"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
                  <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                  <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                </div>
              </div>
              <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                <div class="box">
                  <div class="icon"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i></div>
                  <h4 class="title"><a href="">Magni Dolores</a></h4>
                  <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
              </div>
    
              <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
                <div class="box">
                  <div class="icon"><i class="ion-ios-world-outline" style="color: #d6ff22;"></i></div>
                  <h4 class="title"><a href="">Nemo Enim</a></h4>
                  <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                </div>
              </div>
              <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
                <div class="box">
                  <div class="icon"><i class="ion-ios-clock-outline" style="color: #4680ff;"></i></div>
                  <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                  <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
                </div>
              </div>
    
            </div>
    
          </div>
        </section><!-- #services -->
    
      
        <section id="why-us" class="wow fadeIn">
          <div class="container">
            <header class="section-header">
              <h3>Why choose us?</h3>
              <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
            </header>
    
            <div class="row row-eq-height justify-content-center">
    
              <div class="col-lg-4 mb-4">
                <div class="card wow bounceInUp">
                    <i class="fa fa-diamond"></i>
                  <div class="card-body">
                    <h5 class="card-title">Corporis dolorem</h5>
                    <p class="card-text">Deleniti optio et nisi dolorem debitis. Aliquam nobis est temporibus sunt ab inventore officiis aut voluptatibus.</p>
                    <a href="#" class="readmore">Read more </a>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 mb-4">
                <div class="card wow bounceInUp">
                    <i class="fa fa-language"></i>
                  <div class="card-body">
                    <h5 class="card-title">Voluptates dolores</h5>
                    <p class="card-text">Voluptates nihil et quis omnis et eaque omnis sint aut. Ducimus dolorum aspernatur.</p>
                    <a href="#" class="readmore">Read more </a>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 mb-4">
                <div class="card wow bounceInUp">
                    <i class="fa fa-object-group"></i>
                  <div class="card-body">
                    <h5 class="card-title">Eum ut aspernatur</h5>
                    <p class="card-text">Autem quod nesciunt eos ea aut amet laboriosam ab. Eos quis porro in non nemo ex. </p>
                    <a href="#" class="readmore">Read more </a>
                  </div>
                </div>
              </div>
    
            </div>
    
          
        </section>
    
    
    
        <!--==========================
          Clients Section
        ============================-->
        <section id="clients" class="section-bg">
    
          <div class="container">
    
            <div class="section-header">
              <h3>Our CLients</h3>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque dere santome nida.</p>
            </div>
    
            <div class="row no-gutters clients-wrap clearfix wow fadeInUp">
    
              <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
             
                  <img class="img-fluid" class="img-fluid" src="{{asset('dist/img/clients/client-1.png')}}" alt="#">
                </div>
              </div>
              
              <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
            
                  <img class="img-fluid" class="img-fluid" src="{{asset('dist/img/clients/client-2.png')}}" alt="#">
                </div>
              </div>
            
              <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
           
                  <img class="img-fluid" class="img-fluid" src="{{asset('dist/img/clients/client-3.png')}}" alt="#">
                </div>
              </div>
              
              <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                    <img class="img-fluid" class="img-fluid" src="{{asset('dist/img/clients/client-4.png')}}" alt="#">
                </div>
              </div>
              
              <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                    <img class="img-fluid" class="img-fluid" src="{{asset('dist/img/clients/client-5.png')}}" alt="#">
                </div>
              </div>
            
              <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                    <img class="img-fluid" class="img-fluid" src="{{asset('dist/img/clients/client-6.png')}}" alt="#">
                </div>
              </div>
              
              <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                    <img class="img-fluid" class="img-fluid" src="{{asset('dist/img/clients/client-7.png')}}" alt="#">
                </div>
              </div>
              
              <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                    <img class="img-fluid" class="img-fluid" src="{{asset('dist/img/clients/client-8.png')}}" alt="#">
                </div>
              </div>
    
            </div>
    
          </div>
    
        </section>
    
        
    
      </main>
    
     <!--::footer_part start::-->
    <footer class="footer_part">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Category</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">Male</a></li>
                            <li><a href="#">Female</a></li>
                            <li><a href="#">Shoes</a></li>
                            <li><a href="#">Fashion</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Company</h4>
                        <ul class="list-unstyled">
                            <li><a href="">About</a></li>
                            <li><a href="">News</a></li>
                            <li><a href="">FAQ</a></li>
                            <li><a href="">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single_footer_part">
                        <h4>Address</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">200, Green block, NewYork</a></li>
                            <li><a href="#">+10 456 267 1678</a></li>
                            <li><span>contact89@winter.com</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_footer_part">
                        <h4>Newsletter</h4>
                        <div id="mc_embed_signup">
                            <form target="_blank"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="subscribe_form relative mail_part">
                                <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                    class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = ' Email Address '">
                                <button type="submit" name="submit" id="newsletter-submit"
                                    class="email_icon newsletter-submit button-contactForm">subscribe</button>
                                <div class="mt-10 info"></div>
                            </form>
                        </div>
                     
                    </div>
                </div>
            </div>
            
        </div>
    </footer>
</body>
@endsection

