@include('admin.common.header')

       <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
           
           <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h2 class="display-4 text-primary">Add</h2>
                  <form class="forms-sample" method="post" action="{{ url('admin/store')}}" enctype="multipart/form-data">
				  {{ csrf_field() }}
                    <div class="form-group">
                      <label for="exampleInputEmail3">Image</label>
                      <input class="form-control" id="timage" name="timage" type="file">
                    </div>
	                <div class="form-group">
			          <label for="exampleInputName1">Detail</label>
                      <input type="text" class="form-control" id="detail" name="detail" placeholder="Detail" value="">
                    </div>
    	            <div class="form-group">
			          <label for="exampleInputName1">Button Text</label>
                      <input class="form-control" id="buttontext" name="buttontext" placeholder="Button Text"/>
                    </div>
    	            <div class="form-group">
			          <label for="exampleInputName1">Button URL</label>
                      <input class="form-control" id="buttonurl" name="buttonurl" placeholder="Button URL"/>
                    </div>
                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                  </form>
                </div>
              </div>
            </div>
           
           
        </div>
      </div>
    
     
@include('admin.common.footer')
 