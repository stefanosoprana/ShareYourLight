<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Share Your Light</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="css/app.css">

    </head>
    <body>
    @foreach( $options as $option)
    <div class="wrapper">
<!-- *** HEADER *** -->
      <div class="header">
        <img src="{{ $option->logo }}" alt="">
        <button class="bars-menu__button" type="button" name="button">
          <div class="bars"></div>
          <div class="bars"></div>
          <div class="bars"></div>
        </button>
      </div>
      <div class="bars-menu">
        <ul>
          <li>
            <span></span>
            <a href="#">
              Home
            </a>
          </li>
          <li>
            <span></span>
            <a href="#">
              Il Progetto
            </a>
          </li>
          <li>
            <span></span>
            <a href="#">
              La storia di Claudio
            </a>
          </li>
          <li>
            <span></span>
            <a href="#">
              La storia di Ilaria
            </a>
          </li>
          <li>
            <span></span>
            <a href="#">
              La storia di Graziano
            </a>
          </li>
          <li>
            <span></span>
            <a href="#">
              La storia di Maria Cristina
            </a>
          </li>
          <li>
            <span></span>
            <a href="#">
              L' Obesità
            </a>
          </li>
          <li>
            <span></span>
            <a href="#">
              La community
            </a>
          </li>
        </ul>
      </div>
<!-- *** MAIN *** -->
      <div class="main">
        <!-- *** SECTION STORY *** -->
        <div class="section-story">
            <!-- *** IMAGE *** -->
              <div class="image">
                @foreach($section_image as $item)
                  <a href="#" class="image__box relative">
                    <div class="image__box__inside opacity" style="background-image: url('{{ $item->image }}');"></div>
                    <div class="image__box__text opacity-none base-position">
                      <h4>{{ $item->text }}</h4> <br>
                      <h4>{{ $item->age }}</h4> <br>
                      <h4>Scopri la sua storia</h4>
                    </div>
                  </a>
                @endforeach
              </div>
            <!-- *** PLACE HOLDER SCOPRI LE STORIE *** -->
            <div class="place-holder">
              Scopri le loro storie
            </div>
        </div>
        <!-- *** CAROUSEL 1 *** -->
        <div id="firstCarousel" class="section-carousel section">
          <div class="container">
            <div class="section-carousel__title">
              <div class="section-carousel__title__principal">
                <h3>{{ $carousel[0]->title }}</h3>
              </div>
              <div class="section-carousel__title__subtitle">
                <span class="toSlide1 selected">{{$carousel[0]->subtitle1}}</span><span class="pipe">|</span><span class="toSlide2 cursor-pointer">{{$carousel[0]->subtitle2}}</span>
              </div>
            </div>
            <div class="section-carousel__main">
              <div class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="slide">
                      {{$carousel[0]->text1}}
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="slide">
                      {{$carousel[0]->text2}}
                    </div>
                  </div>
                </div>
                <ol class="carousel-indicators dots">
                  <li data-target="#firstCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#firstCarousel" data-slide-to="1"></li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!-- *** BACKGROUND IMAGE FIX *** -->
        @foreach($fixed_image as $item)
          <?php $splitText = explode(" " , $item->text); ?>
            <div class="section-background-fix">
              <div class="section-background-fix__main" style="background-image: url('{{ asset('storage/claim.png') }}');">
                <div class="container">
                  <div class="section-background-fix__main__text slideBase opacity-none">
                    <h4>{{ $splitText[0] . ' ' . $splitText[1] . ' ' . $splitText[2]  }}</h4><br>
                    <h4>{{ $splitText[3] . ' ' . $splitText[4] }}</h4>
                  </div>
                </div>
              </div>
            </div>
        @endforeach
        <!-- *** CAROUSEL 2 *** -->
        <div id="secondCarousel" class="section-carousel section">
          <div class="container">
            <div class="section-carousel__title">
              <div class="section-carousel__title__principal">
                <h3>{{ $carousel[1]->title }}</h3>
              </div>
              <div class="section-carousel__title__subtitle">
                <span class="toSlide1 selected">{{ $carousel[1]->subtitle1 }}</span><span class="pipe">|</span><span class="toSlide2 cursor-pointer">{{ $carousel[1]->subtitle2 }}</span>
              </div>
            </div>
            <div class="section-carousel__main">
              <div class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="slide">
                      <p>{{ $carousel[1]->text1 }}</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="slide">
                      <p>{{ $carousel[1]->text2 }}</p>
                      <small>1 "L'obesità si può curare? Sì: ecco come" di Fabio di Todaro, <a href="#">www.fondazioneveronesi.it</a></small> <br>
                      <small>2 "Il percorso clinico assistenziale dedicato al paziente con obesità", <a href="#">www.policlinicogemelli.it</a></small>
                    </div>
                  </div>
                </div>
                <ol class="carousel-indicators dots">
                  <li data-target="#firstCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#firstCarousel" data-slide-to="1"></li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!-- *** COMMUNITY *** -->
        @foreach($community as $item)
          <div class="section-community section">
            <div class="container">
              <div class="section-community__header">
                <div class="section-community__header__logo">
                  <div class="icon">
                    <img src="{{ asset('storage/facebook.png') }}" alt="">
                  </div>
                </div>
                <div class="section-community__header__title">
                  <h4>{{ $item->title }}</h4>
                </div>
              </div>
              <div class="section-community__body">
                <div class="section-community__body__text1">
                  <p>{{ $item->description }}</p>
                </div>
                <div class="section-community__body__text2">
                  <p>
                    <b>{{ $item->claim }}</b>
                  </p>
                </div>
                <div class="section-community__button">
                  <a href="{{ $item->button_link }}">
                    {{ $item->button }}
                  </a>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
      <!-- *** FOOTER *** -->
      <div class="footer">
        <div class="footer__header">
          <div class="footer__header__left">
            <span>© 2019 Share Your Light</span>
            <span>Un progetto realizzato per la <br>Fondazione Policlinico Universitario Agostino Gemelli IRCCS.</span>
            <img src="{{ asset('storage/logo-gemelli-footer.png') }}" alt="">
          </div>
          <div class="footer__header__right">
            <span>Con il patrocinio di</span>
            <img src="{{ asset('storage/logo-fiocchetto-verde-footer.png') }}" alt="">
          </div>
        </div>
        <div class="footer__menu">
          <div class="footer__menu__list">
            <ul>
              <li><a href="#">INFORMATIVA SULLA PRIVACY</a></li>
              <li><a href="#">COOKIE POLICY</a></li>
              <li><a href="#">AVVERTENZE</a></li>
              <li><a href="#">CONDIZIONI DI UTILIZZO</a></li>
            </ul>
          </div>
        </div>
        <div class="footer__menu__sublist">
          <span>{{ $option->copyright }}</span>
        </div>
      </div>
      <div class="post-footer">
        <span>{{ $option->credits }}</span>
      </div>
    </div>
    @endforeach
    <script src="js/app.js" charset="utf-8"></script>
  </body>
</html>
