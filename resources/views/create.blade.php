

@include('layouts.header')


@include('layouts.navbar')


    <div class="container" style="padding-top:200px; text-align:center ">
      <div class="row">
        <div class="col-md-12">
            <div class="" >

          <form action="{{ url('/add_blog') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- Title --}}
            <div  style="margin-bottom: 20px; position: relative; text-align:ceter;">
                  <label for="">Title:</label><br>
                  <input type="text" style="color: black;" name="title">

              </div>
              {{-- image --}}
              <div  style="margin-bottom: 20px">
                <label for="">Image:</label><br>
                <input type="file" name="image"  id="">
              </div>
              {{-- description --}}
              <div  style="margin-bottom: 20px">
                <label for=""> Description:</label><br>
                <textarea name="description"  style="color: black;" cols="70 " rows="5"></textarea>
              </div>
              {{-- submit button --}}
              <div  style="margin-bottom: 20px">
              <button   class="btn btn-group-toggle">Submit</button>
              </div>
          </form>
          </div>
        </div>
      </div>


@include('layouts.footer')


@include('layouts.jquery')

