@include('admin.common.header')

       <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
           
           <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h2 class="display-4 text-primary">Change Password</h2>
                  @foreach ($users as $user)
                  <form  method="post" class="forms-sample" action="{{ route('admin.changepass',$user->id)  }}" enctype="multipart/form-data">
				     {{ csrf_field() }}
                    <div class="form-group">
                      <label for="exampleInputEmail3">Profile Image</label>
                      <input class="form-control" id="timage" name="timage" type="file">
                      <p><img src="{{asset('timages/'.$user->timage)}}" width="200" /> </p>
                    </div>
                <div class="form-group">
			        {{ method_field('put') }}

                      <label for="exampleInputName1">New Password</label>
                      <input type="password" class="form-control" id="password" name="password" placeholder="password" value="">
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
 