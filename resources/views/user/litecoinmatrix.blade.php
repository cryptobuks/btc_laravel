@include('common.header')
@include('common.leftnav')
  



        <section class="about-page">

       <link href="{{ URL::to('plugins/lity/prism.css') }}" media="all" rel="stylesheet" type="text/css">
<link href="{{ URL::to('plugins/lity/lity.css') }}" rel="stylesheet"/>    <div class="content col-xs-12 col-md-8">
        <span class="form_title">Matrix Positions</span>
            <table width="100%" height="200" border="0" cellpadding="0" cellspacing="0" align="center">
                <tr>
                    <td width="430" height="200" align="center" valign="top">
                        <div align="left">
                            <form class="form_2">
                                <select size="1" name="jumpit" onchange="document.location.href=this.value"> 
									<option selected value="viewmatrix">Select Matrix</option>
									<option value="viewmatrix">Bitcoin Matrix</option>
									<option value="litecoinmatrix" selected="selected">Litecoin Matrix</option>
									<option value="ethereummatrix">Ethereum Matrix</option>
								</select> 
                            </form>
                            <div style="padding:5px 0;" id="matrix-title">
                                <b>Please select Matrix</b>
                            </div>
                        </div>
                        <div class="white">
                            <table cellpadding="0" cellspacing="0" border="0" width="100%" class="table_1">
                                <!--<thead>-->
                                <!--    <tr>-->
                                <!--        <th colspan="2">My Matrix Positions.</th>-->
                                <!--    </tr>-->
                                <!--</thead> -->
                                <thead>
                                    <tr>
                                    <th>#</th>
                                    <!--<td>No record found</td>-->
                                    <th>Date</th>
                                    <!--<td>2019-01-02</td>-->
                                   
                                    <!--<td>Bitcoin</td>-->
                                    <th>Downlines</th>
                                    <!--<td>6 / 6</td>-->
                                    <th>Level</th>
                                    <!--<td>2</td>-->
                                    <th>Paid</th>
                                    <!--<td>&#3647;0.03900000</td>-->
                                    <th>Status</th>
                                    <!--<td>Cycled</td>-->
                                    <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>6</td>
                                    <td>2019-1-2</td>
                                    <td>6/6</td>
                                    <td>2</td>
                                    <td>B0.03900</td>
                                    <td>Cycled</td>
                                    <td><a href="{{ route('user.lcpopup') }}"  data-lity>Genealogy</a></td>
                                </tr>
                                <!--<tr>-->
                                <!--    <td>&nbsp;</td>-->
                                <!--    <td><b><a href="#" id="popup1">Genealogy</a></b></td>-->
                                <!--</tr>                           -->
                                </tbody>
                            </table>
                            
                        </div>
                    </td>
                </tr>
            </table>
        </div>
</section>        
<script src="{{ URL::to('plugins/lity/jquery.js') }}"></script>
<script src="{{ URL::to('plugins/lity/lity.js') }}"></script>

<script src="{{ URL::to('plugins/lity/prism.js') }}"></script>
 
<script>
    function filter(selection){
        if(selection == '' || selection == 1){
            $('#matrix-title b').text('Bitcoin Matrix');
        }
        else if(selection == 2){
            $('#matrix-title b').text('Litecoin Matrix');
        }
        else if(selection == 3){
            $('#matrix-title b').text('Ethereum Matrix');
        }
    }
</script>
		@include('common.footer')