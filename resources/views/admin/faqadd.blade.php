@include('admin.common.header')

       <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
           
           <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h2 class="display-4 text-primary">Add</h2>
                  <form class="forms-sample" method="post" action="{{ url('admin/store')}}">
				  {{ csrf_field() }}
                    <div class="form-group">
                      <label for="exampleInputName1">Question</label>
                      <input type="text" class="form-control" id="question" placeholder="question" name="question">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Answer</label>
					  <textarea class="form-control" id="answer" name="answer"></textarea>
					  
                    </div>
                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                  </form>
                </div>
              </div>
            </div>
           
           
        </div>
      </div>
    
     
@include('admin.common.footer')
 