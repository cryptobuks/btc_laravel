@include('admin.common.header')

       <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
           
           <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h2 class="display-4 text-primary">Details </h2>
                  <form class="forms-sample">
                   @foreach ($supports as $support)
				     <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <p>{{$support->name}} </p>
                    </div>
				     <div class="form-group">
                      <label for="exampleInputName1">Email</label>
                      <p>{{$support->email}} </p>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Message</label>
                       <p>{{$support->message}}</p>
                    </div>
                   @endforeach
        		</form>
                </div>
              </div>
            </div>
           
           
        </div>
      </div>
    
     
@include('admin.common.footer')
 