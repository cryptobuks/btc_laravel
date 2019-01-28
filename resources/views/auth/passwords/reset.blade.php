@include('common.header')
  <section class="about-page">

    <div class="container">

        <span class="form_title">Reset Password</span>
        <table width="60%" height="200" border="0" cellpadding="0" cellspacing="0" align="center">

            <tr>

                <td width="430" height="200" align="center" valign="top">

                    <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="white">

                            <table cellspacing=0 cellpadding=0 border=0 width="100%" class="table_1">

                                <thead>

                                    <tr>

                                        <th colspan="2">Login</th>

                                    </tr>

                                </thead>

                                <tr>

                                    <td>Username</td>

                                    <td>
                                <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                             </td>

                                </tr>

                                <tr>

                                    <td>Password</td>

                                    <td>
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                             </td>

                                </tr>

                                <tr>

                                    <td>Confirm Password</td>

                                    <td> <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                             </td>

                                </tr>

                                <tr>

                                      <td> </td>
									  <td align="left">
                                <button type="submit" class="btn btn-primary">
                                    Reset Password
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