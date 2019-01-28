@include('admin.common.header')

       <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
           
           <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h2 class="display-4 text-primary">Details </h2>
                  <form class="forms-sample">
                   @foreach ($users as $user)
                <div class="form-group">
			          <label for="exampleInputName1">Image</label>
					  <p><img src="{{URL::to('timages/'.$user->timage)}}" height="100" />
</p>
                </div>
                <div class="form-group">
			          <label for="exampleInputName1">Sponsor</label>
                      <p>{{$user->sponsor}}</p>
                </div>
                <div class="form-group">
			          <label for="exampleInputName1">Email</label>
                      <p>{{$user->email}}</p>
                </div>
                <div class="form-group">
			          <label for="exampleInputName1">First Name</label>
                      <p>{{$user->fname}}</p>
                </div>
                <div class="form-group">
			          <label for="exampleInputName1">Last Name</label>
                      <p>{{$user->lname}}</p>
                </div>
                <div class="form-group">
			          <label for="exampleInputName1">Username</label>
                      <p>{{$user->username}}</p>
                </div>
                   @endforeach
        		</form>
                </div>
              </div>
            </div>
           
           
        </div>
      </div>
    
     
@include('admin.common.footer')
 