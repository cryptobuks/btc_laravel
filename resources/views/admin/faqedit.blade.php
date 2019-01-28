@include('admin.common.header')

       <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
           
           <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h2 class="display-4 text-primary">Edit </h2>
                  @foreach ($faqs as $faq)
                  <form  method="post" class="forms-sample" action="{{ route('admin.faqedit',$faq->id)  }}">
				     {{ csrf_field() }}
                <div class="form-group">
			        {{ method_field('put') }}

                      <label for="exampleInputName1">Question</label>
                      <input type="text" class="form-control" id="question" name="question" placeholder="Name" value="{{$faq->question}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Answer</label>
                      <textarea class="form-control" id="answer" name="answer" placeholder="Answer" rows="5">{{$faq->answer}}</textarea>
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
 