@extends('master')
@section('content')
<main class="page-content">
  <section class="bg_primary bg_pattern" style="background-color: #293e51;">
    <div class="container color_white">
      <div class="row">
        <div class="col-xs-12 col-lg-8 section_hero">
          <div class="title-sep"></div>
          <h1>We build websites</h1>
          <h2>for All Kinds of Services/Business!</h2>
          <h3>to any level of complexity</h3>
          <p>Boost your business with incredible functionality and efficient UI!</p>
          <a class="btn btn_md btn_secondary" href="{{ route('public_quote') }}">Request a Quote</a>
        </div>
        <div class="col-lg-4"><img class="image_hero" src="assets/images/image-man-1.png"></div>
      </div>
    </div>
  </section>
  <section id="demos">
    <div class="container text_center">
      <h2 class="color_primary"><span class="h1 color_secondary">Check out</span> Amazing Websites, previously done!</h2>
      <p>Boost your business with incredible functionality and efficient UI!</p>
      <div class="row">
        @forelse($websites as $website)
        <div class="col-xs-12 col-md-6 col-lg-4"><a class="preview-box" href="{{ $website->website_address }}" target="_blank">
          <div class="preview-box__image"><img src="{{ asset('images/websites/' . $website->website_image) }}"></div>
          <div class="preview-box__overlay">
            <div class="btn btn_sm btn_secondary" href="#">Visit</div>
          </div></a>
          <p class="color_primary">{{ $website->website_name }}</p>
        </div>
        @empty
        <h2>No Website yet</h2>
        @endforelse
      </div>
    </div>
  </section>
  <section class="bg_secondary" style="background-color: #487095;">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-4"><img class="image_cta" src="assets/images/image-man-2.png"></div>
        <div class="col-xs-12 col-md-8 color_white section_cta">
          <h2>Invest in the Fututre of Your Business!</h2>
          <p> Let us help you come online and take on the digital world professionally</p>
          <a class="btn btn_md btn_primary" target="blank" href="https://www.templatemonster.com/cart.php?add=62555&price_variant=regular">Request a Quote!</a>
        </div>
      </div>
    </div>
  </section>

  <section id="footers">
    <div class="container text_center">
      <h2 class="color_primary">Diverse Footer Styles for Customization!</h2>
      <p>With {{ config('app.name') }} theme you get 7 gorgeous header layouts and 3 eye-catching footer variations that’ll make your website look 100% winning!</p>
      <div class="row">
        <div class="col-xs-12 col-md-4">
          <a class="hover-box" href="#">
            <img src="assets/images/image-footer-1-hover.png">
          </a>
        </div>
        <div class="col-xs-12 col-md-4">
          <a class="hover-box" href="#">
            <img src="assets/images/image-footer-2.png">
            <img src="assets/images/image-footer-2-hover.png">
          </a>
        </div>
        <div class="col-xs-12 col-md-4">
          <a class="hover-box" href="#">
            <img src="assets/images/image-footer-3.png">
            <img src="assets/images/image-footer-3-hover.png">
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="bg_primary bg_pattern" id="blog" style="background-color: #293e51;">
    <div class="container text_center color_white">
      <h2><span class="h1 color_secondary">5</span>Gorgeous Blog Layouts!</h2>
      <p>Deliver your ideas in a classy way using grid, masonry, justify and other glorious blog formats available in {{ config('app.name') }} theme!</p>
      <div class="row">
        <div class="col-xs-12 col-md-4">
          <a class="hover-box" href="#">
            <img src="assets/images/image-blog-1.png">
            <img src="assets/images/image-blog-1-hover.png">
          </a>
        </div>
        <div class="col-xs-12 col-md-4">
          <a class="hover-box" href="#">
            <img src="assets/images/image-blog-2.png">
            <img src="assets/images/image-blog-2-hover.png">
          </a>
        </div>
        <div class="col-xs-12 col-md-4">
          <a class="hover-box" href="#">
            <img src="assets/images/image-blog-3.png">
            <img src="assets/images/image-blog-3-hover.png">
          </a>
        </div>
        <div class="col-xs-12 col-md-offset-2 col-md-4">
          <a class="hover-box" href="#">
            <img src="assets/images/image-blog-4.png">
            <img src="assets/images/image-blog-4-hover.png">
          </a>
        </div>
        <div class="col-xs-12 col-md-4">
          <a class="hover-box" href="#">
            <img src="assets/images/image-blog-5.png">
            <img src="assets/images/image-blog-5-hover.png">
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="section_articles">
    <div class="container">
      <h2 class="color_primary text_center">Embrace the True Diversity of Choice</br> we go from simple to complex!</h2>
      <div class="row">
        <div class="col-xs-12 col-md-4 bottom_sm"><img src="assets/images/image-article-1.png">
          <h3>A Variety of Static Pages at Hand</h3>
          <p>Getting tired of creating pages yourself? You won’t need to do it anymore with eye-catching Contacts, Careers and Pricing  static pages provided for you! </p>
        </div>
        <div class="col-xs-12 col-md-4 bottom_sm"><img src="assets/images/image-article-2.png">
          <h3>Extraordinary Dynamic Pages for All Purposes</h3>
          <p>Bring your services online, share your client's’ testimonials and introduce your team members using attractively-looking dynamic pages!</p>
        </div>
        <div class="col-xs-12 col-md-4"><img src="assets/images/image-article-3.png">
          <h3>A Set of Functional Pages Within Reach</h3>
          <p>With {{ config('app.name') }} template you get Coming Soon, Maintenance, 404 and Search Results pages, fitted for all occasions!</p>
        </div>
      </div>
    </div>
  </section>
  <section class="bg_dark bg_pattern" id="shop">
    <div class="container text_center">
      <h2 class="color_white">Astonishing Shop Layouts on Board!</h2>
      <p class="color_secondary"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo ut libero nostrum illum maiores totam.</p>
      <div class="row">
        <div class="col-xs-12"><img src="assets/images/image-man-4.png"></div>
      </div>
    </div>
  </section>
</main>

@endsection
