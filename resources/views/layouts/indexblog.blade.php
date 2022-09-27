
<div class="latest-products">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Blogs</h2>
            <a href="{{ url('/blog') }}">view all Blogs <i class="fa fa-angle-right"></i></a>
          </div>
        </div>
@foreach ($blogs as $blog)

<div class="col-md-4">

  <div class="product-item">

            <a href="{{ url('/update/{id}') }}"><img src="/uploads/blogs/{{ $blog->image }}" alt=""></a>

            <div class="down-content">
              <a href=""><h4>{{ $blog->title }}</h4></a>
              <h6></h6>
              <p> {{ $blog->description }} </p>
              <ul class="stars">
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
              </ul>
              {{-- <input type="submit" value="Delete" class="btn btn-success" href="{{ url('/delete_blog',$blog->id) }}" /> --}}
            </div>
        </div>
    </div>
    <a href="{{ url('/delete_blog',$blog->id) }}" ><button class="btn btn-danger" >Delete</button></a><br>

    <a href="{{ url('/update/'.$blog->id) }}"><button class="btn btn-group-lg">Update</button></a>
        @endforeach

        </div>
      </div>
    </div>
  </div>
{{-- @yield('content') --}}
