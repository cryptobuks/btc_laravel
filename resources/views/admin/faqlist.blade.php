@include('admin.common.header')
<div class="main-panel">
<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h2 class="display-4 text-primary">Faq <a href="{{ url('admin/faqadd') }}" class="btn btn-inverse-success btn-fw btnadd btnadd">Add New</a></h2>
          <div class="table-responsive">
            <table class="table table-bordered tablelist">
              <thead>
                <tr>
                  <th> # </th>
                  <th> Question </th>
                   <th align="center"> Actions</th>
                </tr>
              </thead>
              <tbody>
			  	@php $i = 0 @endphp
                @foreach ($faqs as $faq)
				@php $i++ @endphp
				<tr>
                  <td width="40">{{$i}}</td>
                  <td>{{$faq->question}}</td>
                  <td width="100">
				  	<a href="{{ url('admin/faqview', $faq->id) }}" class="btn btn-inverse-primary btn-fw"> view </button></a>
				  	<a href="{{ url('admin/faqedit', [$faq->id, 'edit']) }}" class="btn btn-inverse-warning btn-fw"> edit </button></a>
 					<form method="POST" action="{{ url('admin/faqdel', $faq->id) }}">
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