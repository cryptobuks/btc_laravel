@include('common.header')
@include('common.leftnav')
<section class="about-page">
  <div class="content col-xs-12 col-md-8"> <span class="form_title">Account Settings</span>
    <table width="100%" height="200" border="0" cellpadding="0" cellspacing="0" align="center">
      <tr>
        <td width="430" height="200" align="center" valign="top">
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
		<form method="post" action="{{ route('user.personalinfo')  }}" class="form_1">
	     {{ csrf_field() }}
         {{ method_field('put') }}
    <div class="white">
              <table cellspacing=0 cellpadding=0 border=0 width="100%" class="table_1">
                <thead>
                  <tr>
                    <th colspan="2">Personal Info</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td width="200" height="25">First Name</td>
                    <td><input type="text" name="fname" id="fname" value="{{ Auth::user()->fname }}" size="30"></td>
                  </tr>
                  <tr>
                    <td>Last Name</td>
                    <td><input type="text" name="lname" id="lname" value="{{ Auth::user()->lname}}" size="30"></td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" id="email" value="{{ Auth::user()->email}}" size="30"></td>
                  </tr>
                  <tr>
                    <td>Question name</td>
                    <td><input type="text" name="question" id="question" value="{{ Auth::user()->question }}" size="30"></td>
                  </tr>
                  <tr>
                    <td>Answer</td>
                    <td><input type="text" name="answer" id="answer" value="{{ Auth::user()->answer }}" size="30"></td>
                  </tr>
                  <tr>
                    <td colspan="2" align="center" valign="bottom" height="35"><input type="submit" name="submit" value="Update contact info"></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </form>
          <form method="post" action="{{ route('user.passreset')  }}" class="form_1">
	     {{ csrf_field() }}
         {{ method_field('put') }}
		 <input type="hidden" name="po" id="po" value="{{ Auth::user()->password }}" size="30">
            <div class="white">
              <table cellspacing=0 cellpadding=0 border=0 width="100%" class="table_1">
                <thead>
                  <tr>
                    <th colspan="2">Password</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td width="200">Old (current) Password</td>
                    <td><input type="password" name="password_old" id="password_old" value="" size="30"></td>
                  </tr>
                  <tr>
                    <td>New Password</td>
                    <td><input type="password" name="password_new" id="password_new" value="" size="30"></td>
                  </tr>
                  <tr>
                    <td>Retype New Password</td>
                    <td><input type="password" name="password_new2" id="password_new2" value="" size="30"></td>
                  </tr>
                  <tr>
                    <td colspan="2" align="center" valign="bottom" height="35"><input name="submit" type="submit" value="Update password"></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </form>
          <div class="white">
            @foreach ($usersettings as $usersetting)
			<form method="post" action="{{ route('user.othersettings')  }}" class="form_1">
 	     {{ csrf_field() }}
         {{ method_field('put') }}
             <table cellpadding="0" cellspacing="0" width="100%" class="table_1">
                <thead>
                  <tr>
                    <th colspan="2">Other Settings</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td valign="middle">Require login code on IP change</td>
                    <td valign="middle"><select name="ip_change" id="ip_change" class="inpts">
                        <option value="0" {{ ( $usersetting->ip_change == '0' ) ? 'selected' : '' }}>No</option>
                        <option value="1" {{ ( $usersetting->ip_change == '1' ) ? 'selected' : '' }}>Yes</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td valign="middle">Notify me when any of my ads credit is running low</td>
                    <td valign="middle"><select name="low_credit" id="low_credit" class="inpts">
                        <option value="0" {{ ( $usersetting->low_credit == '0' ) ? 'selected' : '' }}>No</option>
                        <option value="1" {{ ( $usersetting->low_credit == '1' ) ? 'selected' : '' }}>Yes</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td valign="middle">Notify me when i have a new referral</td>
                    <td valign="middle"><select name="new_ref" id="new_ref" class="inpts">
                        <option value="0" {{ ( $usersetting->new_ref == '0' ) ? 'selected' : '' }}>No</option>
                        <option value="1" {{ ( $usersetting->new_ref == '1' ) ? 'selected' : '' }} >Yes</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td valign="middle">Notify me when i earn commissions</td>
                    <td valign="middle"><select name="commisions" id="commisions" class="inpts">
                        <option value="0" {{ ( $usersetting->commisions == '0' ) ? 'selected' : '' }}>No</option>
                        <option value="1" {{ ( $usersetting->commisions == '1' ) ? 'selected' : '' }}>Yes</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td valign="middle">Payment method for referral commisssion</td>
                    <td valign="middle"><select name="payment_method" id="payment_method" class="inpts">
                        <option value="coinpayments" {{ ( $usersetting->payment_method == 'coinpayments' ) ? 'selected' : '' }}>CoinPayments</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td valign="middle">Notify me when my earnings on my shares are paid</td>
                    <td valign="middle"><select name="my_earning" id="my_earning" class="inpts">
                        <option value="0" {{ ( $usersetting->my_earning == '0' ) ? 'selected' : '' }}>No</option>
                        <option value="1" {{ ( $usersetting->my_earning == '1' ) ? 'selected' : '' }}>Yes</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2" align="middle"><input name="submit" type="submit" value="Update Settings"></td>
                  </tr>
                </tbody>
              </table>
            </form>
			@endforeach
          </div></td>
      </tr>
    </table>
  </div>
</section>
@include('common.footer')