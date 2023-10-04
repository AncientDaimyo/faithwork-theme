<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

<!-- Slider main container -->
<div class="swiper">
  <!-- Parallax background element -->
  <div class="parallax-bg" style="background-image:url('<? get_template_directory_uri() . '/pic/IMG_3602.png'?> ')"  data-swiper-parallax="-23%"></div>
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide">
      <!-- Each slide has parallax title -->
      <div class="title" data-swiper-parallax="-100">Slide 1</div>
      <!-- Parallax subtitle -->
      <div class="subtitle" data-swiper-parallax="-200">Subtitle</div>
      <!-- And parallax text with custom transition duration -->
      <div class="text" data-swiper-parallax="-300" data-swiper-parallax-duration="600">
        <p>Lorem ipsum dolor sit amet, ...</p>
      </div>
      <!-- Opacity parallax -->
      <div data-swiper-parallax-opacity="0.5">I will change opacity</div>
      <!-- Scale parallax -->
      <div data-swiper-parallax-scale="0.15">I will change scale</div>
    </div>
    <div class="swiper-slide">
      <!-- Each slide has parallax title -->
      <div class="title" data-swiper-parallax="-100">Slide 1</div>
      <!-- Parallax subtitle -->
      <div class="subtitle" data-swiper-parallax="-200">Subtitle</div>
      <!-- And parallax text with custom transition duration -->
      <div class="text" data-swiper-parallax="-300" data-swiper-parallax-duration="600">
        <p>Lorem ipsum dolor sit amet, ...</p>
      </div>
      <!-- Opacity parallax -->
      <div data-swiper-parallax-opacity="0.5">I will change opacity</div>
      <!-- Scale parallax -->
      <div data-swiper-parallax-scale="0.15">I will change scale</div>
    </div>
    <div class="swiper-slide">
      <!-- Each slide has parallax title -->
      <div class="title" data-swiper-parallax="-100">Slide 1</div>
      <!-- Parallax subtitle -->
      <div class="subtitle" data-swiper-parallax="-200">Subtitle</div>
      <!-- And parallax text with custom transition duration -->
      <div class="text" data-swiper-parallax="-300" data-swiper-parallax-duration="600">
        <p>Lorem ipsum dolor sit amet, ...</p>
      </div>
      <!-- Opacity parallax -->
      <div data-swiper-parallax-opacity="0.5">I will change opacity</div>
      <!-- Scale parallax -->
      <div data-swiper-parallax-scale="0.15">I will change scale</div>
    </div>
  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>
</div>