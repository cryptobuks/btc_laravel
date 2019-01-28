@include('common.header')
@include('common.leftnav')
  



        <section class="about-page">

             <div class="content col-xs-12 col-md-8">
                <span class="form_title">Buy Position</span>
                <table width="100%" height="200" border="0" cellpadding="0" cellspacing="0" align="center">
                    <tr>
                        <td width="430" height="200" align="center" valign="top">
                            <div class="white">
                                <form class="form_2">
                                    <table cellspacing=1 cellpadding=2 border=0 width="100%" class="table_2">
                                        <thead>
                                            <tr>
                                                <th>Plan</th>
                                                <th>Summary</th>
                                                <th colspan="2">&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tr>
                                          
                                            <td># of Positions:</td>
                                            <td><input type="text" name="units[1]" id="units_1" size=5 />
                                        <tr>
                                            <td>level1 position</td>
                                            <td><select name="processor[1]" id="pro_1">
                                                    <option value="">- select -</option>
                                                        <option value="purchase_7">Pay to receiver - &#3647;0.0000 </option>
                                                        <option value="repurchase_7">Pay to receiver's sponsor - &#3647;0.0000</option>
                                        <tr>
                                            <td>Payment Option</td>
                                            <td><select name="processor[1]" id="pro_1">
                                                    <option value="">- select -</option>
                                                        <option value="purchase_7"> Main balance - &#3647;0.0000 </option>
                                                        <option value="repurchase_7"> Repurchase balance - &#3647;0.0000</option>
                                                        
                                                    </optgroup>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"></td>
                                            <td></td>
                                            <td>
                                                <!--<b><a href="#" id="popup1">Details</a></b> |	-->
                                                <b><a href="#" onclick="buy_position(1)">Buy Now</a></b>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </td>
                    </tr>
                </table>
                <script type="text/javascript">
                    function buy_position(id) {
                        var proID = document.getElementById('pro_' + id).value;
                        var qty = document.getElementById('units_' + id).value;
                        if (qty == '') {
                            alert('Enter a valid quantity');
                            return false;
                        }
                        if (proID == '') {
                            alert('Choose a valid payment option');
                            return false;
                        }
                        if (confirm('Do you really want to purchase this amount of positions?'))
                            post_to_url('./buy_position', { 'buy_now': 'y', 'pid': id, 'units': qty, 'proid': proID });

                    }
                    function post_to_url(path, params, method) {
                        method = method || "post";
                        var form = document.createElement("form");
                        form.setAttribute("method", method);
                        form.setAttribute("action", path);
                        for (var key in params) {
                            if (params.hasOwnProperty(key)) {
                                var hiddenField = document.createElement("input");
                                hiddenField.setAttribute("type", "hidden");
                                hiddenField.setAttribute("name", key);
                                hiddenField.setAttribute("value", params[key]);
                                form.appendChild(hiddenField);
                            }
                        }

                        document.body.appendChild(form);
                        form.submit();
                    }
                </script>
                <script type="text/javascript">
                    var first = 0;
                    var last = 1;
                    fancyjQuery(document).ready(function () {

                        for (i = first; i <= last; i++) {

                            fancyjQuery("#popup" + i).fancybox({
                                'width': '60%',
                                'height': '100%',
                                'autoScale': true,
                                'transitionIn': 'none',
                                'transitionOut': 'none',
                                'type': 'iframe'
                            });
                        }

                    });
                </script>
            </div>
        </section>
		@include('common.footer')