@include('common.header')
<section class="about-page">
  <div class="container"> <span class="form_title">Support</span>
    <table width="100%" height="200" border="0" cellpadding="0" cellspacing="0" align="center">
      <tr>
        <td valign="top"><div align="justify">Please use the form below to send your message to the appropriate
            
            department so that we can get back to you as quickly as possible.</div>
          <br>
          @if(count($errors) > 0)
          <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <ul>
              @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif
          @if($message = Session::get('success'))
          <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
              <strong>{{ $message }}</strong>
          </div>
          @endif
          <div class="white">
            <form action="{{ route('support')  }}" method="post" class="form_1">
              {{ csrf_field() }}
              <table cellspacing=0 cellpadding=0 border=0 width="350" class="table_1 support">
                <thead>
                  <tr>
                    <th colspan="2">Support Form</th>
                  </tr>
                </thead>
                <tr>
                  <td width="150">Name</td>
                  <td align="left"><input type="text" name="from_name" id="from_name" size="30"></td>
                </tr>
                <tr>
                  <td width="150">Email</td>
                  <td><input type="text" name="from_email" id="from_email" size="30"></td>
                </tr>
                <tr>
                  <td width="150">Message:</td>
                  <td><textarea name="message" id="message" rows=15 style="width:100%;"></textarea></td>
                </tr>
                <tr>
                  <td colspan="2" align="center"><input type="submit" name="send_message" value="Send">
                  </td>
                </tr>
              </table>
            </form>
          </div></td>
      </tr>
    </table>
  </div>
</section>
@include('common.footer')