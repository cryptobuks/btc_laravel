@include('admin.common.header')

       <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
           
           <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h2 class="display-4 text-primary">Edit </h2>
                  @foreach ($tests as $test)
                  <form  method="post" class="forms-sample" action="{{ route('admin.testedit',$test->id)  }}" enctype="multipart/form-data">
				     {{ csrf_field() }}
                <div class="form-group">
			        {{ method_field('put') }}

                      <label for="exampleInputName1">Name</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{$test->name}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Image</label>
                      <input class="form-control" id="timage" name="timage" type="file">
                      <p><img src="{{asset('timages/'.$test->timage)}}" width="200" /> </p>
                    </div>
                <div class="form-group">
			          <label for="exampleInputName1">Testimonial</label>
                      <textarea class="form-control" id="testimonial" name="testimonial" placeholder="Testimonial" rows="5">{{$test->testimonial}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-success mr-2">Submit</button>
				  </form>
                  @endforeach
                </div>
              </div>
            </div>
           
           
        </div>
      </div>
    
     
@include('admin.common.footer')
 