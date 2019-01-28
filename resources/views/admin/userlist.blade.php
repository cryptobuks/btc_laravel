@include('admin.common.header')
<div class="main-panel">
<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h2 class="display-4 text-primary">Users <a href="{{ url('admin/useradd') }}" class="btn btn-inverse-success btn-fw btnadd">Add New</a></h2>
          <div class="table-responsive">
            <table class="table table-bordered tablelist">
              <thead>
                <tr>
                  <th> # </th>
                  <th> Image </th>
                  <th> Username </th>
                  <th> Email </th>
                   <th align="center"> Actions</th>
                </tr>
              </thead>
              <tbody>
			  	@php $i = 0 @endphp
                @foreach ($users as $user)
				@php $i++ @endphp
				<tr>
                  <td width="40">{{$i}}</td>
                  <td width="60"><img src="{{asset('timages/'.$user->timage)}}" width="50" /></td>
                  <td>{{$user->username}}</td>
                  <td>{{$user->email}}</td>
                  <td width="100">
				  	<a href="{{ url('admin/userview', $user->id) }}" class="btn btn-inverse-primary btn-fw">view</button></a>
				  	<a href="{{ url('admin/useredit', [$user->id, 'edit']) }}" class="btn btn-inverse-warning btn-fw"> edit </button></a>
 					<form method="POST" action="{{ url('admin/userdel', $user->id) }}" enctype="multipart/form-data">
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