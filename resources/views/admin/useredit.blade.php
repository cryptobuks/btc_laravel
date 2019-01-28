@include('admin.common.header')

       <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
           
           <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h2 class="display-4 text-primary">Edit </h2>
                  @foreach ($users as $user)
                  <form  method="post" class="forms-sample" action="{{ route('admin.useredit',$user->id)  }}" enctype="multipart/form-data">
				     {{ csrf_field() }}
			        {{ method_field('put') }}
                <div class="form-group">
			          <label for="exampleInputName1">Image</label>
                      <input type="file" class="form-control" id="timage" name="timage"><br />
						<img src="{{URL::to('timages/'.$user->timage)}}" height="100" />
                </div>
                <div class="form-group">
			          <label for="exampleInputName1">Sponsor</label>
                      <input type="text" class="form-control" id="sponsor" name="sponsor" placeholder="Sponsor" value="{{$user->sponsor}}">
                </div>
                <div class="form-group">
			          <label for="exampleInputName1">Email</label>
                      <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="{{$user->email}}">
                </div>
                <div class="form-group">
			          <label for="exampleInputName1">First Name</label>
                      <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" value="{{$user->fname}}">
                </div>
                <div class="form-group">
			          <label for="exampleInputName1">Last Name</label>
                      <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" value="{{$user->lname}}">
                </div>
                <div class="form-group">
			          <label for="exampleInputName1">Username</label>
                      <p>{{$user->username}}</p>
                </div>
                <div class="form-group">
			          <label for="exampleInputName1">Password</label>
                      <input type="text" class="form-control" id="password" name="password" placeholder="Password" value="">
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
 