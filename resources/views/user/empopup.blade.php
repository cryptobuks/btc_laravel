

<script type='text/javascript' src='https://www.google.com/jsapi'></script>
<script type='text/javascript'>

    google.load('visualization', '1', {packages: ['orgchart']});
    google.setOnLoadCallback(drawChart);
    function drawChart() {
        var data = new google.visualization.DataTable();

        data.addColumn('string', 'Name');
        data.addColumn('string', 'Manager');
        data.addColumn('string', 'ToolTip');
        data.addRows([

                    [{v: '6', f: '<a target="_blank" href="https://powerfulmining.com/account/profile/user/btcqueen">btcqueen</a><div style="color:red; font-style:italic"><a href="https://powerfulmining.com/members/matrix_cycler/geneology/pid/6/spid/6">Pos #6</a></div>'}, '', 'btcqueen'],
    
                    [{v: '8', f: '<a target="_blank" href="https://powerfulmining.com/account/profile/user/snipermarketing">snipermarketing</a><div style="color:red; font-style:italic"><a href="https://powerfulmining.com/members/matrix_cycler/geneology/pid/6/spid/8">Pos #8</a></div>'}, '6', 'snipermarketing'],
    
                    [{v: '9', f: '<a target="_blank" href="https://powerfulmining.com/account/profile/user/earnonline">earnonline</a><div style="color:red; font-style:italic"><a href="https://powerfulmining.com/members/matrix_cycler/geneology/pid/6/spid/9">Pos #9</a></div>'}, '6', 'earnonline'],
    
                    [{v: '13', f: '<a target="_blank" href="https://powerfulmining.com/account/profile/user/incometeam28">incometeam28</a><div style="color:red; font-style:italic"><a href="https://powerfulmining.com/members/matrix_cycler/geneology/pid/6/spid/13">Pos #13</a></div>'}, '8', 'incometeam28'],
    
                    [{v: '14', f: '<a target="_blank" href="https://powerfulmining.com/account/profile/user/tiozed">tiozed</a><div style="color:red; font-style:italic"><a href="https://powerfulmining.com/members/matrix_cycler/geneology/pid/6/spid/14">Pos #14</a></div>'}, '8', 'tiozed'],
    
                    [{v: '15', f: '<a target="_blank" href="https://powerfulmining.com/account/profile/user/holmesbw">holmesbw</a><div style="color:red; font-style:italic"><a href="https://powerfulmining.com/members/matrix_cycler/geneology/pid/6/spid/15">Pos #15</a></div>'}, '9', 'holmesbw'],
    

                    [{v: '17', f: '<a target="_blank" href="https://powerfulmining.com/account/profile/user/cchindove">cchindove</a><div style="color:red; font-style:italic"><a href="https://powerfulmining.com/members/matrix_cycler/geneology/pid/6/spid/17">Pos #17</a></div>'}, '9', 'cchindove']

    
        ]);
        var chart = new google.visualization.OrgChart(document.getElementById('chart_div'));
        chart.draw(data, {allowHtml: true});

    }

</script>
<div id='chart_div'></div>
