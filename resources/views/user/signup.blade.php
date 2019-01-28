@include('common.header')
  



        <section class="about-page">

            <div class="container">

                <span class="form_title">Register Account</span>

                Fill in the form below to open an account. Please make sure you provide us with your real name and address. If

                you have questions about this process please contact us and we will be happy to answer all your questions.<br>

                <br>

                <table width="100%" height="200" border="0" cellspacing="0" align="center">

                    <tr>

                        <td width="430" height="200" align="center" valign="top">

                            <form action="" method="post" class="form_1">

                                <div class="white">

                                    <table cellspacing=0 cellpadding=0 border=0 width="100%" class="table_1">

                                        <thead>

                                            <tr>

                                                <th colspan="2">Personal Info</th>

                                            </tr>

                                        </thead>

                                        <tr>

                                            <td width="200">Sponsor</td>

                                            <td><input type="text" name="sponsor" value="powerfulmining" size="30"></td>

                                        </tr>

                                        <tr>

                                            <td width="200">First Name</td>

                                            <td><input type="text" name="fname" value="" size="30"></td>

                                        </tr>

                                        <tr>

                                            <td>Last Name</td>

                                            <td><input type="text" name="lname" value="" size="30"></td>

                                        </tr>

                                        <tr>

                                            <td>Email</td>

                                            <td><input type="text" name="email" value="" size="30"></td>

                                        </tr>

                                        <tr>

                                            <td>Email (type again)</td>

                                            <td><input type="text" name="email2" value="" size="30"></td>

                                        </tr>

                                    </table>

                                </div>

                                <div class="white">

                                    <table cellspacing=0 cellpadding=0 border=0 width="100%" class="table_1">

                                        <thead>

                                            <tr>

                                                <th colspan="2">Login Info</th>

                                            </tr>

                                        </thead>

                                        <tr>

                                            <td width="200">Username</td>

                                            <td><input type="text" name="username" value="" size="30">

                                                <!--between 4 and 15 characters-->

                                            </td>

                                        </tr>

                                        <tr>

                                            <td>Password</td>

                                            <td><input type="password" name="password" value="" size="30">

                                                <!--at least 4 characters-->

                                            </td>

                                        </tr>

                                        <tr>

                                            <td>Password (type again)</td>

                                            <td><input type="password" name="password2" value="" size="30"></td>

                                        </tr>

                                    </table>

                                </div>

                                <div class="white">

                                    <table cellspacing=0 cellpadding=0 border=0 width="100%" class="table_1">

                                        <thead>

                                            <tr>

                                                <th colspan="2">Security</th>

                                            </tr>

                                        </thead>

                                        <tr>

                                            <td width="200">Security Question </td>

                                            <td><input name="question" type="text" value="" size="30">

                                            </td>

                                        </tr>

                                        <tr>

                                            <td>Answer</td>

                                            <td><input name="answer" type="text" value="" size="30"></td>

                                        </tr>

                                    </table>

                                </div>

                                <div class="white">

                                    <table cellspacing=0 cellpadding=0 border=0 width="100%" class="table_1">

                                        <thead>

                                            <tr>

                                                <th>Members Agreement</th>

                                            </tr>

                                        </thead>

                                        <!--<tr>

                    <td colspan="2" align="center"><textarea style="width:100%; height:100;"></textarea></td>

                        </tr>-->

                                        <tr>

                                            <td colspan=2 align="center"><input type="checkbox" name="agree" value="1">

                                                I agree with <a href="https://powerfulmining.com/pages/terms" target="_blank">Terms

                                                    and Conditions</a></td>

                                        </tr>

                                        <tr>

                                            <td colspan="2" align="center"><input type="submit" name="submit" value="Register"></td>

                                        </tr>

                                    </table>

                                </div>

                            </form>

                        </td>

                    </tr>

                </table>

            </div>

        </section>
		@include('common.footer')