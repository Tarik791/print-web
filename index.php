<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery.js"></script>
    <script src="jquery.PrintArea.js"></script>
    <script>
        $(document).ready(function() {
            $("#print_button1").click(function(){
                var mode='iframe';
                var close=mode=="popup";
                var options={mode:mode,popClose:close};
                $("div.pall").printArea(options);
                });
        

        $("#print_button2").click(function(){
                var mode='iframe';
                var close=mode=="popup";
                var options={mode:mode,popClose:close};
                $("div.pm").printArea(options);
                });
        });
    
    </script>


</head>
<body>
    <center>
    <div class="pall">

        <div>
            <div>
                <div style="width: 1000px; border: solid 2px #333; padding: 10px;">
                    <div class="button" style="width: 1000px; float:left;">
                        <a href="javascript:void(0);" id="print_button1">PRint Full PAge</a>
                        <a href="javascript:void(0);" id="print_button2">PRnt MAin content</a>
                   </div>
                    <div style="width: 950px; height: 80px; border: solid 2px #333; text-align: center; padding: 5px; margin:45px 20px 20px 20px;">
                                
                    <thead>
                                <tr>
                                
                                        <th>Federacija Bosne i Hercegovine Federalno ministarstvo finansija/financija Porezna uprava
                                        </th>
                                    
                                        <th>
                                        Obrazac JS3100 Prijava/Promjena/Odjava osiguranja
                                        </th>
                                        <th>
                                            Bar kod
                                        </th> 
                                    
                                </tr>
                        </thead>
                    </div>
                    <th>Drugi dio - Podaci o osiguraniku</th>

                    <div class="pm"   style="width: 950px; height: 300px; border: solid 2px #333; text-align:center; padding: 5px; margin: 20px;">

                    <div>
                    <tbody id="data">
                    <tr>
                        <form id="myForm" action="UserInfo.php" method="post">
                            <td>
                                1) JIB/JMB 
                                <input style="color:blue;" type="number" name="brojfirme" >
                            </td>

                    </tr>
    
                    </div>

                    </div>
                    <div style="width: 950px; height: 80px; border: solid 2px #333; text-align:center; padding: 5px; margin: 20px;"></div>
                </div>
            </div>
        </div>
    </div>
    </center>
</body>
</html>