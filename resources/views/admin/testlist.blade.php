@include('admin.common.header')
<div class="main-panel">
<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h2 class="display-4 text-primary">Testimonies <a href="{{ url('admin/testadd') }}" class="btn btn-inverse-success btn-fw btnadd">Add New</a></h2>
          <div class="table-responsive">
            <table class="table table-bordered tablelist">
              <thead>
                <tr>
                  <th> # </th>
                  <th> Image </th>
                  <th> Name </th>
                   <th align="center"> Actions</th>
                </tr>
              </thead>
              <tbody>
			  	@php $i = 0 @endphp
                @foreach ($tests as $test)
				@php $i++ @endphp
				<tr>
                  <td width="40">{{$i}}</td>
                  <td width="60"><img src="{{asset('timages/'.$test->timage)}}" width="50" /></td>
                  <td>{{$test->name}}</td>
                  <td width="100">
				  	<a href="{{ url('admin/testview', $test->id) }}" class="btn btn-inverse-primary btn-fw">view</button></a>
				  	<a href="{{ url('admin/testedit', [$test->id, 'edit']) }}" class="btn btn-inverse-warning btn-fw"> edit </button></a>
 					<form method="POST" action="{{ url('admin/testdel', $test->id) }}" enctype="multipart/form-data">
						<input type="hidden" name="_method" value="DELETE">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<button type="submit" name="submit" class="btn btn-inverse-danger btn-fw" >delete</button>
					</form>					
				  </td>
                </tr>
				@endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@include('admin.common.footer') 