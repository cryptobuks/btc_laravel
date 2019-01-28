@include('common.header')
  <section class="about-page">

    <div class="container">

        <span class="form_title">Login</span>
        <table width="60%" height="200" border="0" cellpadding="0" cellspacing="0" align="center">

            <tr>

                <td width="430" height="200" align="center" valign="top">

                    <form method="post" action="{{ route('user.signin')}}" class="form_1">
{{ csrf_field() }}

                        <input type="hidden" name="redirect" value="#">
 @if(count($errors)>0)
  	<div class="alert alert-danger">
  	@foreach($errors->all() as $error)
		<p>{{ $error }}</p>
    @endforeach
	</div>
  @endif

                        <div class="white">

                            <table cellspacing=0 cellpadding=0 border=0 width="100%" class="table_1">

                                <thead>

                                    <tr>

                                        <th colspan="2">Login</th>

                                    </tr>

                                </thead>

                                <tr>

                                    <td>Username</td>

                                    <td><input type="text" name="email"  id="email" value="" size="30"></td>

                                </tr>

                                <tr>

                                    <td>Password</td>

                                    <td><input type="password" name="password" value="" size="30"></td>

                                </tr>

                                <tr>

                                      <td> </td>
									  <td align="left"><input type="submit" name="submit" value="Login">

                                        <br />

                                        <a href="../members/index">Forgot Password</a>

                                    </td>

                                </tr>

                            </table>

                        </div>

                    </form>

                </td>

            </tr>

        </table>

    </div>

</section>

        </section>@include('common.footer')