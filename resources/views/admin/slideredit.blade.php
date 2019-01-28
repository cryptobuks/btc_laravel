@include('admin.common.header')

       <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
           
           <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h2 class="display-4 text-primary">Edit </h2>
                  @foreach ($sliders as $slider)
                  <form  method="post" class="forms-sample" action="{{ route('admin.slideredit',$slider->id)  }}" enctype="multipart/form-data">
				     {{ csrf_field() }}
                    <div class="form-group">
                      <label for="exampleInputEmail3">Image</label>
                      <input class="form-control" id="timage" name="timage" type="file">
                      <p><img src="{{asset('timages/'.$slider->timage)}}" width="200" /> </p>
                    </div>
                <div class="form-group">
			        {{ method_field('put') }}

                      <label for="exampleInputName1">Detail</label>
                      <input type="text" class="form-control" id="detail" name="detail" placeholder="Detail" value="{{$slider->detail}}">
                    </div>
					<div class="form-group">
			      
                      <label for="exampleInputName1">Button Text</label>
                      <input type="text" class="form-control" id="buttontext" name="buttontext" placeholder="Button text" value="{{$slider->buttontext}}">
                    </div>
					<div class="form-group">
			        {{ method_field('put') }}

                      <label for="exampleInputName1">Button URL</label>
                      <input type="text" class="form-control" id="buttonurl" name="buttonurl" placeholder="Button Url" value="{{$slider->buttonurl}}">
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
 