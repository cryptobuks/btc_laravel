@include('common.header')
  <section class="about-page">

    <div class="container">

        <span class="form_title">Login</span>
        <table width="60%" height="200" border="0" cellpadding="0" cellspacing="0" align="center">

            <tr>

                <td width="430" height="200" align="center" valign="top">

                       <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="white">

                            <table cellspacing=0 cellpadding=0 border=0 width="100%" class="table_1">

                                <thead>

                                    <tr>

                                        <th colspan="2">Forget Password</th>

                                    </tr>

                                </thead>

                                <tr>

                                    <td>Username</td>

                                    <td>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                          </td>

                                </tr>

                                <tr>

                                      <td> </td>
									  <td align="left">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
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