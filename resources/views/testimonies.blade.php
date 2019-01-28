@include('common.header')
  <style>
      .testimonies{
          width:60%;
      }
  </style>
  <section class="about-page">
            <div class="container">
                <section class="about-page">
                    <div class="container">
                        <div class="row">
			  	@php $i = 0 @endphp
                @foreach ($tests as $test)
				@php $i++ @endphp
                            <div class="col-sm-3 col-md-3 col-lg-3 testimoniesbx" style="text-align:center">
									<img src="{{asset('timages/'.$test->timage)}}" class="testimonies" width="50%"/>
                                    <h3 class="title-about" style="font-size:120%">{{$test->name}}</h3>
                                    <p>{{$test->testimonial}}</p>
                            </div>
				@endforeach
                        </div>
                    </div>
                </section>
                 
                <!-- About Section Ends -->
            </div>
        </section>@include('common.footer')