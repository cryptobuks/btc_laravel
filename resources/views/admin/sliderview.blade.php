@include('admin.common.header')

       <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
           
           <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h2 class="display-4 text-primary">Details </h2>
                  <form class="forms-sample">
                   @foreach ($sliders as $slider)
				     <div class="form-group">
                      <label for="exampleInputName1">Image</label>
                      <p><img src="{{asset('timages/'.$slider->timage)}}" width="200" /> </p>
                    </div>
 				     <div class="form-group">
                      <label for="exampleInputName1">Detail</label>
                      <p>{{$slider->detail}} </p>
                    </div>
				     <div class="form-group">
                      <label for="exampleInputName1">Button Text</label>
                      <p>{{$slider->buttontext}} </p>
                    </div>
				     <div class="form-group">
                      <label for="exampleInputName1">Button URL</label>
                      <p>{{$slider->buttonurl}} </p>
                    </div>
                   @endforeach
        		</form>
                </div>
              </div>
            </div>
           
           
        </div>
      </div>
    
     
@include('admin.common.footer')
 