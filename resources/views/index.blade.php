
@include('layouts.header')
@include('layouts.navbar')


   @include('layouts.startup')

   @include('layouts.indexblog')

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About Tobi Blog</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Looking for the best blogs on the Planet</h4>
              <p><a rel="nofollow" href="https://templatemo.com/tm-546-sixteen-clothing" target="_parent">This is the right plug</a>
                This is the right blog for Technology and Artificial Intelligence Vibes🤞
                <a rel="nofollow" href="{{ url('/contact') }}">Contact us</a> for more info.</p>
              <ul class="featured-list">
                <li><a href="#">Technology</a></li>
                <li><a href="#">Science</a></li>
                <li><a href="#">Programming</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Life</a></li>
              </ul>
              <a href="{{ url('/contact') }}" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/feature-image.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Creative &amp; Unique <em>Tobi</em> Blogs</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.</p>
                </div>
                <div class="col-md-4">
                  <a href="#" class="filled-button">Purchase Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@include('layouts.footer')


    @include('layouts.jquery')

  </body>

</html>
