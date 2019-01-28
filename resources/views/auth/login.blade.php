@include('common.header')
  <section class="about-page">

    <div class="container">

        <span class="form_title">Login</span>
        <table width="60%" height="200" border="0" cellpadding="0" cellspacing="0" align="center">

            <tr>

                <td width="430" height="200" align="center" valign="top">

                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

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
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

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
                         
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                  </td>

                                </tr>

                                <tr>

                                      <td> </td>
									  <td align="left">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
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