@include('common.header')
@include('common.leftnav')
<section class="about-page">
         <div class="content col-xs-12 col-md-8">
                    <span class="form_title">Account Overview</span>
                    <div class="white">
                        <table cellspacing=0 cellpadding=0 border=0 width="100%" class="table_1">
                            <thead>
                                <tr>
                                    <th colspan="2">Account Info</th>
                                </tr>
                            </thead>
                            <tr>
                                <td width="30%">Username</td>
                                <td>{{ Auth::user()->username }}</td>
                            </tr>
                            <tr>
                                <td>Registration Date</td>
                                <td>{{ Auth::user()->created_at }}</td>
                            </tr>
                            <tr>
                                <td>Last Access</td>
                                <td>{{ Auth::user()->updated_at }}</td>
                            </tr>
                            <tr>
                                <td width="30%">Sponsor</td>
                                <td><a rel="nofollow" href="#">{{ Auth::user()->sponsor }}</a>
                                     </td>
                            </tr>
                            
                            </tr>
                        </table>
                    </div>
                    <script type="text/javascript">
                        var currenttime = 'January 06, 2019 06:27:52';
                        var montharray = new Array("January",
                            "February",
                            "March",
                            "April",
                            "May",
                            "June",
                            "July",
                            "August",
                            "September",
                            "October",
                            "November",
                            "December");
                        var serverdate = new Date(currenttime);
                        function padlength(what) {
                            var output = (what.toString().length == 1) ? "0" + what : what
                            return output
                        }

                        function displaytime() {
                            serverdate.setSeconds(serverdate.getSeconds() + 1)
                            var datestring = montharray[serverdate.getMonth()] + " " + padlength(serverdate.getDate()) + ", " + serverdate.getFullYear()
                            var timestring = padlength(serverdate.getHours()) + ":" + padlength(serverdate.getMinutes()) + ":" + padlength(serverdate.getSeconds())
                            document.getElementById("servertime").innerHTML = datestring + " " + timestring
                        }

                        window.onload = function () {
                            setInterval("displaytime()", 1000);
                        }
                    </script>
                    <div class="white">
                        <table cellspacing=0 cellpadding=0 border=0 width="100%" class="table_1">
                            <thead>
                                <tr>
                                    <th colspan="2">Wallet Summary</th>
                                </tr>
                            </thead>
                            <tr>
                                <td width="30%">Total Balance</td>
                                <td>&#3647;0.0000</td>
                            </tr>
                            <tr>
                                <td>Pending withdrawal</td>
                                <td>&#3647;0.0000</td>
                            </tr>
                            <tr>
                                <td>Paid withdrawal</td>
                                <td>&#3647;0.0000</td>
                            </tr>
                            <tr>
                                <td>Total withdrawal</td>
                                <td>&#3647;0.0000</td>
                            </tr>
                        </table>
                    </div>
                    <div class="white">
                        <h3 align="center" style="color:grey;"> Latest Announcements </h3>
                        <center> no announcements </center>
                        <p><a href="./announcements">All Announcements</a></p>
                    </div>
                </div>
        </section>
@include('common.footer')