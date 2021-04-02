<html>
<head>
    <title>
    Enquire 
    </title>
    <link rel="icon" href="delta_logo.jpg" type="image">
    <link rel="stylesheet" href="bootstrap1.css"/>
<link rel="stylesheet" href="bootstrap2.css"/>
<link rel="stylesheet" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
    <body class="bg-info">
        <div class="container">
              
        </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 bg-light rounded my-2 py-2">
                <center>
                    <img class="text-left" src="delta_logo.jpg" width="50" height="50">
                    </center>
                    <hr>
                    <center>
                    <div id="title" name="title">PRICE ENQUIRY</div>
                    </center>
                    <div class="form-group">
                <div>
                <form method="GET" action=''>
                <button name='sub' class="btn btn-dark float-right" style="margin-bottom:5px;">ENQUIRE</button>
                <?php
		            include("config.php");
		            $conn = sqlsrv_connect( $servername, $connectioninfo);  
	                $sql = "select distinct uptoweight from  _CPLPRICELISTDETAILS order by uptoweight";	
			        // $params = array();
			        // $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
                    $stmt = sqlsrv_query($conn,$sql);
                    if ($stmt) {
                    echo"<select id='weight' name='weight' class='form-control float-right' style='width:190px;margin-right:2px;margin-left:2px;'>";
                    //echo "<option  value=" .$row["id"]. "> " .$row["shipment_no"]. "</option>";
                    echo "<option value='none' disabled selected hidden>Select upto weight</option>";
                        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                            echo "<option  value=" .$row["uptoweight"]. "> " .$row["uptoweight"]. "</option>";
                        }
                    echo"</select>";
                    }
                sqlsrv_close($conn);
                ?>
                <script type="text/javascript">
                        document.getElementById('weight').value = "<?php echo $_GET['weight'];?>";
                </script>
                <?php
		            include("config.php");
		            $conn = sqlsrv_connect( $servername, $connectioninfo);  
	                $sql = "select distinct locationname from  _CPLLOCATIONS";	
			        // $params = array();
			        // $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
                    $stmt = sqlsrv_query($conn,$sql);
                    if ($stmt) {
                    echo"<select id='locationname' name='locationname' class='form-control float-right' style='width:200px;margin-right:2px;margin-left:2px;'>";
                    //echo "<option  value=" .$row["id"]. "> " .$row["shipment_no"]. "</option>";
                    echo "<option  value='' disabled selected hidden selected='selected'>Select destination</option>";
                        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                            echo "<option  value=" .$row["locationname"]. "> " .$row["locationname"]. "</option>";
                        }
                    echo"</select>";
                    }
                sqlsrv_close($conn);
                ?>
                <script type="text/javascript">
                        document.getElementById('locationname').value = "<?php echo $_GET['locationname'];?>";
                </script>
                <?php
		            include("config.php");
		            $conn = sqlsrv_connect( $servername, $connectioninfo);  
	                $sql = "select distinct packing from  _CPLPRICELISTDETAILS where packing is not null and packing<>''";	
			        // $params = array();
			        // $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
                    $stmt = sqlsrv_query($conn,$sql);
                    if ($stmt) {
                    echo"<select id='packing' name='packing' class='form-control float-right' style='width:150px;margin-right:2px;margin-left:2px;'>";
                    //echo "<option  value=" .$row["id"]. "> " .$row["shipment_no"]. "</option>";
                    echo "<option  value='' disabled selected hidden>Select packing</option>";
                        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                            echo "<option  value=" .$row["packing"]. "> " .$row["packing"]. "</option>";
                        }
                    echo"</select>";
                    }
                sqlsrv_close($conn);
                ?>
                <script type="text/javascript">
                        document.getElementById('packing').value = "<?php echo $_GET['packing'];?>";
                </script>
                <?php
		            include("config.php");
		            $conn = sqlsrv_connect( $servername, $connectioninfo);  
	                $sql = "select distinct FROMLOCATION from  _CPLLOCATIONS";	
			        // $params = array();
			        // $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
                    $stmt = sqlsrv_query($conn,$sql);
                    if ($stmt) {
                    echo"<select id='domesticrt' name='domesticrt' class='form-control float-right' style='width:100px;margin-right:2px;margin-left:2px;'>";
                    //echo "<option  value=" .$row["id"]. "> " .$row["shipment_no"]. "</option>";
                    echo "<option  value='' disabled selected hidden>Origin</option>";
                        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                            echo "<option  value=" .$row["FROMLOCATION"]. "> " .$row["FROMLOCATION"]. "</option>";
                        }
                    echo"</select>";
                    }
                sqlsrv_close($conn);
                ?>
                <script type="text/javascript">
                        document.getElementById('domesticrt').value = "<?php echo $_GET['domesticrt'];?>";
                </script>
                <?php
		            include("config.php");
		            $conn = sqlsrv_connect( $servername, $connectioninfo);  
	                $sql = "select distinct type from  _CPLPRICELISTNAME";	
			        // $params = array();
			        // $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
                    $stmt = sqlsrv_query($conn,$sql);
                    if ($stmt) {
                    echo"<select id='type' name='type' class='form-control float-right' style='width:140px;margin-right:2px;margin-left:2px;' onchange='hidecontrols()'>";
                    //echo "<option  value=" .$row["id"]. "> " .$row["shipment_no"]. "</option>";
                    echo "<option  value='' disabled selected hidden>Select type</option>";
                        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                            echo "<option  value=" .$row["type"]. "> " .$row["type"]. "</option>";
                        }
                    echo"</select>";
                    }
                sqlsrv_close($conn);
                ?>
                <script type="text/javascript">
                        document.getElementById('type').value = "<?php echo $_GET['type'];?>";
                </script>
                <?php
		            include("config.php");
		            $conn = sqlsrv_connect( $servername, $connectioninfo);  
	                $sql = "select distinct band from  _CPLPRICELISTNAME";	
			        // $params = array();
			        // $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
                    $stmt = sqlsrv_query($conn,$sql);
                    if ($stmt) {
                    echo"<select id='band' name='band' class='form-control float-right' style='width:140px;margin-right:2px;margin-left:2px;' onchange='changestate()'>";
                    echo "<option  value='' disabled selected hidden>Select Band</option>";
                        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                            echo "<option  value=" .$row["band"]. "> " .$row["band"]. "</option>";
                        }
                    echo"</select>";
                    }
                sqlsrv_close($conn);
                ?>
                <script type="text/javascript">
                        document.getElementById('band').value = "<?php echo $_GET['band'];?>";
                </script>
                </div>
                </div>
                </br>
                </br>
                <div id="cisco" name="cisco">
                <?php
		            include("config.php");
		            $conn = sqlsrv_connect( $servername, $connectioninfo);  
	                $sql = "select distinct deliverytype from  _CPLPRICELISTDetails where deliverytype<>'' and deliverytype is not null";	
			        // $params = array();
			        // $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
                    $stmt = sqlsrv_query($conn,$sql);
                    if ($stmt) {
                    echo"<select id='deliverytype' name='deliverytype' class='form-control float-right' style='width:190px;margin-right:93px;margin-left:2px;'>";
                    echo "<option  value='' disabled selected hidden>Select delivery type</option>";
                        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                            echo "<option  value='" .$row["deliverytype"]. "'> '" .$row["deliverytype"]. "'</option>";
                        }
                    echo"</select>";
                    }
                sqlsrv_close($conn);
                ?>
                <script type="text/javascript">
                        document.getElementById('deliverytype').value = "<?php echo $_GET['deliverytype'];?>";
                </script>
                 <select id='outofofficecall' name='outofofficecall' class='form-control float-right' style='width:170px;margin-right:2px;margin-left:2px;margin-bottom:8px;'>
                    <option  value='' disabled selected hidden> out of office call</option>
                    <option  value='True'>True</option>
                    <option  value='False'>False</option>
                </select>
                <script type="text/javascript">
                        document.getElementById('outofofficecall').value = "<?php echo $_GET['outofofficecall'];?>";
                </script>
                <select id='ATTEMPTEDDELIVERY' name='ATTEMPTEDDELIVERY' class='form-control float-right' style='width:190px;margin-right:2px;margin-left:2px;' onchange='hidecontrols()'>";
                    <option  value='' disabled selected hidden>Attempted delivery</option>
                    <option  value='True'>True</option>
                    <option  value='False'>False</option>
                </select>
                <script type="text/javascript">
                        document.getElementById('ATTEMPTEDDELIVERY').value = "<?php echo $_GET['ATTEMPTEDDELIVERY'];?>";
                </script>
                <input placeholder='Enter KMS' id="distance" name="distance" class="form-control float-right" style="width:120px;margin-left:2px;margin-right:5px;"/>
                <script type="text/javascript">
                        document.getElementById('distance').value = "<?php echo $_GET['distance'];?>";
                </script>
                <input placeholder='Enter Weight' id="kilos" name="kilos" class="form-control float-right" style="width:120px;margin-left:2px;margin-right:5px;"/>
                <script type="text/javascript">
                        document.getElementById('kilos').value = "<?php echo $_GET['kilos'];?>";
                </script>
                <input placeholder='Enter Rate' id="Rate" name="Rate" class="form-control float-right" style="width:120px;margin-left:2px;margin-right:5px;" required/>
                <script type="text/javascript">
                        document.getElementById('Rate').value = "<?php echo $_GET['Rate'];?>";
                </script>
                </form>
                </div>
                    <table id="mytable" class="table table-bordered table-striped table-hover" style="margin-bottom:5px;margin-top:5px">
                        <thead>
                            <tr>
                                <th>Pricelist Name</th>
                                <th>Type</th>	
                                <th>Band</th>
                                <th>Zone</th>
                                <th>Up To Weight KGS</th>
                                <th>Price KES</th>
                                <th>Price USD</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
            //require_once("insert.php");
            include("Config.php");
            $conn = sqlsrv_connect( $servername, $connectioninfo); 
            if(isset($_GET['sub'])){ 
            $Type = $_GET['type'] ?? "";
            $Band = $_GET['band'] ?? "";
            $Packing = $_GET['packing'] ?? "";
            $Weight = $_GET['weight'] ?? "";
            $attempteddel = $_GET['ATTEMPTEDDELIVERY'] ?? "";
            $outofoffice = $_GET['outofofficecall'] ?? "";
            $deliverytype = $_GET['deliverytype'] ?? "";
            $uptoweight = $_GET['weight'] ?? "";
            $cond='';
            $Locationname = $_GET['locationname'] ?? "";
            $Distance = $_GET['distance'] ?? "";
            $origin = $_GET['domesticrt'] ?? "";
            $kilos = $_GET['kilos'] ?? "";
            $rate = $_GET['Rate'] ?? "";
         	$results = array('error' => false, 'data' => '');
            if ($Band=='3IP')
            {
                $cond="Pricekes,round((Pricekes/cast($rate as float)),2) as Priceusd from _cplpricelistdetails cs 
                join _cplpricelistname ce on cs.pricelistid=ce.pricelistid left join _cpllocations cl on cs.zone=cl.zone where type = isnull('" .$Type. "','') and Band=isnull('$Band','') and Packing=isnull('$Packing','') and cs.uptoweight=isnull($Weight,'')
                and cl.locationname=isnull('$Locationname','')";
            } elseif ($Band=='3IE')
            {
                $cond="Pricekes,round((Pricekes/cast($rate as float)),2) as Priceusd from _cplpricelistdetails cs 
                join _cplpricelistname ce on cs.pricelistid=ce.pricelistid left join _cpllocations cl on cs.zone=cl.zone where type = isnull('" .$Type. "','') and Band=isnull('$Band','') and Packing=isnull('$Packing','') and cs.uptoweight=isnull($Weight,'')
                and cl.locationname=isnull('$Locationname','')";
            } elseif ($Band=='CISCO')
            {
                if ($Distance<=75 && $deliverytype<>'Next Day Delivery' || $Distance>75 && $deliverytype<>'Next Day Delivery')
                {
                    $cond=" case when '$outofoffice'='True' then (30*cast($rate as float))+Pricekes else Pricekes end as Pricekes , case when '$outofoffice'='True' then round(30+Priceusd,2) else Priceusd end as Priceusd  
                    from _cplpricelistdetails cs 
                    join _cplpricelistname ce on cs.pricelistid=ce.pricelistid left join _cpllocations cl on cs.zone=cl.zone where type = isnull('" .$Type. "','') and Band=isnull('$Band','') and ATTEMPTEDDELIVERY=isnull('$attempteddel','') 
                    and DELIVERYTYPE=isnull('$deliverytype','')";    
                } elseif ($Distance>75 && $deliverytype='Next Day Delivery')
                {
                    $cond="case when '$outofoffice'='True' then (30*cast($rate as float))+(case when $Distance>75 and '$deliverytype'='Next Day Delivery' then Pricekes +(20*cast($rate as float)) else Pricekes end)  else (case when $Distance>75 and '$deliverytype'='Next Day Delivery' then Pricekes +(20*cast($rate as float)) else Pricekes end) end as Pricekes,
                    case when '$outofoffice'='True' then (30+ (case when $Distance>75 and '$deliverytype'='Next Day Delivery' then  Priceusd +20 else Priceusd end)) else (case when $Distance>75 and '$deliverytype'='Next Day Delivery' then  Priceusd +20 else Priceusd end) end as Priceusd  
                    from _cplpricelistdetails cs 
                    join _cplpricelistname ce on cs.pricelistid=ce.pricelistid left join _cpllocations cl on cs.zone=cl.zone where type = isnull('" .$Type. "','') and Band=isnull('$Band','') and ATTEMPTEDDELIVERY=isnull('$attempteddel','') 
                    and DELIVERYTYPE=isnull('$deliverytype','') 
                    and $Distance>uptokm";
                }
            } elseif ($Band=='Domestic')
            {
                if ($kilos<=5)
                {
                    $cond="Pricekes,round(Pricekes/cast($rate as float),2) as Priceusd from _cplpricelistdetails cs 
                    join _cplpricelistname ce on cs.pricelistid=ce.pricelistid left join _cpllocations cl on cs.zone=cl.zone where type = isnull('" .$Type. "','') and Band=isnull('$Band','') 
                    and cl.locationname=isnull('$Locationname','') and cl.fromlocation=isnull('$origin','')"; 
                } else if ($kilos>5 && $kilos<=20)
                {
                    $cond="((($kilos-5)*80)+Pricekes) as Pricekes,round(((($kilos-5)*80)+Pricekes)/cast($rate as float),2) as Priceusd from _cplpricelistdetails cs 
                    join _cplpricelistname ce on cs.pricelistid=ce.pricelistid left join _cpllocations cl on cs.zone=cl.zone where type = isnull('" .$Type. "','') and Band=isnull('$Band','') 
                    and cl.locationname=isnull('$Locationname','') and cl.fromlocation=isnull('$origin','')"; 
                } else if ($kilos>20 && $kilos<=50)
                {
                    $cond="(((20-5)*80)+Pricekes+(($kilos-20)*75)) as Pricekes,round((((20-5)*80)+Pricekes+(($kilos-20)*75))/cast($rate as float),2) as Priceusd from _cplpricelistdetails cs 
                    join _cplpricelistname ce on cs.pricelistid=ce.pricelistid left join _cpllocations cl on cs.zone=cl.zone where type = isnull('" .$Type. "','') and Band=isnull('$Band','') 
                    and cl.locationname=isnull('$Locationname','') and cl.fromlocation=isnull('$origin','')";
                } else if ($kilos>50 && $kilos<=100)
                {
                    $cond="(((20-5)*80)+Pricekes+((50-20)*75)+(($kilos-50)*70)) as Pricekes,round((((20-5)*80)+Pricekes+((50-20)*75)+(($kilos-50)*70))/cast($rate as float),2) as Priceusd from _cplpricelistdetails cs 
                    join _cplpricelistname ce on cs.pricelistid=ce.pricelistid left join _cpllocations cl on cs.zone=cl.zone where type = isnull('" .$Type. "','') and Band=isnull('$Band','') 
                    and cl.locationname=isnull('$Locationname','') and cl.fromlocation=isnull('$origin','')";
                }
            }
             $sql2="select  Pricelistname, Type, Band,cs.Zone,Packing,uptoweight, $cond";

			 $params = array();
             $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );			
			 $stmt2 = sqlsrv_query($conn,$sql2,$params,$options);
			 if( $stmt2 === false) {
					die( print_r( sqlsrv_errors(), true) );
				}
                $row_count = sqlsrv_num_rows($stmt2);
				if ($row_count > 0) {
				while( $row = sqlsrv_fetch_array( $stmt2, SQLSRV_FETCH_ASSOC) ) {
					echo "<tr>"; ?>
                    <td> <?php echo $row["Pricelistname"] ;?></td>
					<td> <?php echo $row["Type"] ;?></td>
                    <td><?php echo $row["Band"] ;?></td>
                    <td><?php echo $row["Zone"] ;?></td>
                    <td><?php echo $row["uptoweight"] ;?></td>	
                    <td><?php echo $row["Pricekes"] ;?></td>
                    <td><?php echo $row["Priceusd"] ;?></td>
					</tr>
					<tr>
					</tr>
                    <?php 
			}
				
        }//display links to the pages
                        sqlsrv_close($conn);
        }
	                ?>	
                        </tbody>

        
                    </table>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
        <script src="script.js">
        </script>

    </body>
</html>