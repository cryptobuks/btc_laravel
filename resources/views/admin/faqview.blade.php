@include('admin.common.header')

       <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
           
           <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h2 class="display-4 text-primary">Details </h2>
                  <form class="forms-sample">
                   @foreach ($faqs as $faq)
				     <div class="form-group">
                      <label for="exampleInputName1">Question</label>
                      <p>{{$faq->question}} </p>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Answer</label>
                       <p>{{$faq->answer}}</p>
                    </div>
                   @endforeach
        		</form>
                </div>
              </div>
            </div>
           
           
        </div>
      </div>
    
     
@include('admin.common.footer')
 