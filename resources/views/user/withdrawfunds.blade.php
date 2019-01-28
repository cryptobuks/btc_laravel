@include('common.header')
@include('common.leftnav')
  



        <section class="about-page">

          <div class="content col-xs-12 col-md-8">

        <span class="form_title">Withdraw Money</span>

        <table width="100%" height="200" border="0" cellpadding="0" cellspacing="0" align="center">

            <tr>

                <td width="430" height="200" align="center" valign="top">

                    <div class="white">

                        <form action="" method="post" class="form_1">

                            <table cellspacing=0 cellpadding=0 border=0 width="100%" class="table_1">

                                <thead>

                                    <tr>

                                        <th colspan="2">Withdraw Money</th>

                                    </tr>

                                </thead>

                                <tr>

                                    <td width="30%">From Balance</td>

                                    <td><select name="processor" id="processor" onchange="set_account(this.value);details();">

                                            <option value="">- Select -</option>

                                            <option value="7">CoinPayments - &#3647;0.0441</option>

                                        </select>

                                    </td>

                                </tr>

                                <tr>

                                    <td>Amount</td>

                                    <td><input type="text" name="amount" id="amount" value="" onkeyup="details();" onkeydown="details();">

                                        <span id="details"></span></td>

                                </tr>

                                <tr>

                                    <td>To account</td>

                                    <td><select name="account" id="acc">

                                            <option value="">- Select -</option>

                                        </select>

                                        &nbsp;<a href="./fund">Add</a> </td>

                                </tr>

                                <tr>

                                    <td>Comments</td>

                                    <td><textarea name="comments" cols="30" rows="5"></textarea></td>

                                </tr>

                                <tr>

                                    <td>Your son ?</td>

                                    <td><input type="text" name="answer" value=""></td>

                                </tr>

                                <tr>

                                    <td>&nbsp;</td>

                                    <td><input type="submit" name="submit" value="Withdraw"></td>

                                </tr>

                            </table>

                        </form>

                    </div>

                </td>

            </tr>

        </table>

    </div>

</section>
		@include('common.footer')