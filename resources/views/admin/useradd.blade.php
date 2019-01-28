@include('admin.common.header')

       <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
           
           <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h2 class="display-4 text-primary">Add</h2>
                  <form class="forms-sample" method="post" action="{{ url('admin/usersadd')}}" enctype="multipart/form-data">
				  {{ csrf_field() }}
                <div class="form-group">
			          <label for="exampleInputName1">Image</label>
                      <input type="file" class="form-control" id="timage" name="timage">
                </div>
                <div class="form-group">
			          <label for="exampleInputName1">Sponsor</label>
                      <input type="text" class="form-control" id="sponsor" name="sponsor" placeholder="Sponsor" value="">
                </div>
                <div class="form-group">
			          <label for="exampleInputName1">First Name</label>
                      <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" value="">
                </div>
                <div class="form-group">
			          <label for="exampleInputName1">Last Name</label>
                      <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" value="">
                </div>
                <div class="form-group">
			          <label for="exampleInputName1">Username</label>
                      <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="">
                </div>
                <div class="form-group">
			          <label for="exampleInputName1">Password</label>
                      <input type="text" class="form-control" id="password" name="password" placeholder="Password" value="">
                </div>
                <button type="submit" class="btn btn-success mr-2">Submit</button>
                  </form>
                </div>
              </div>
            </div>
           
           
        </div>
      </div>
    
     
@include('admin.common.footer')
 