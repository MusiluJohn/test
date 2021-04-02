<html>
<title>
</title>
<head>
<link rel="stylesheet" href="bootstrap1.css"/>
<link rel="stylesheet" href="bootstrap2.css"/>
<link rel="stylesheet" href="style.css">
</head>
<body>
</br>

<?php
include("config.php");
    if (isset($_POST["upload"]))
{
    if ($_FILES["csv_file"]["name"])
    {
            $filename=explode(".", $_FILES["csv_file"]["name"]);
                $handle=fopen($_FILES["csv_file"]["tmp_name"],"r");
                while($data= fgetcsv($handle))
                {
                   $Pricelistname=$data[0];
                   $Band=$data[1];
                   $Type=$data[2];
                   $Zone=$data[3];
                   $Uptoweight=$data[4];
                   $LocationName=$data[5];
                   $DeliveryType=$data[6]; 
                   $Packing=$data[7];
                   $OutOfOfficeCall=$data[8];
                   $AttemptedDelivery=$data[9];
                   $Uptokm=$data[10];
                   $AgencyFeeType=$data[11];
                   $DocumenatationChg=$data[12];
                   $idffee=$data[13];
                   $FreightImportHandling=$data[14];
                   $AmountCleared=$data[15];
                   $PriceKes=$data[16];
                   $PriceUsd=$data[17];

                   $query="--insert files in csv into table
                    declare @Tmppricelist table(Pricelistname varchar (50), Band varchar(50), Type varchar(50),Zone varchar(50),Uptoweight float,
                    LocationName varchar(50),Deliverytype varchar(50), Packing varchar(50),outofofficecall bit, attempteddelivery bit,'uptokm float,
                    agencyfeetype varchar(50))
                    insert into @Tmppricelist values ('$Pricelistname', '$Band','$Type','$Zone',$Uptoweight,'$LocationName','$DeliveryType','$Packing',
                    '$OutOfOfficeCall','$AttemptedDelivery',$Uptokm,$AgencyFeeType','$DocumenatationChg','$idffee','$FreightImportHandling','$AmountCleared',
                    '$PriceKes','$PriceUsd')

                    --insert files into table that are not in _cplpricelist
                    IF OBJECT_ID('tempdb..#Tmppricelist') IS NOT NULL DROP TABLE #Tmppricelist;
                    select pricelistname,band,type 
                    into #Tmppricelist
                    from @Tmppricelist where Pricelistname not in (select pricelistname from _CPLPRICELISTNAME)
                    or band not in (select band from _cplpricelistname)
                    or type not in (select type from _CPLPRICELISTNAME)

                    --insert into _cplpricelistname 
                    Insert into _CPLPRICELISTNAME (pricelistname, band, type)
                    select pricelistname, band, type from #Tmppricelist

                    --insert into tmplocations
                    IF OBJECT_ID('tempdb..#Tmplocations') IS NOT NULL DROP TABLE #Tmplocations;
                    select Zone,LocationName 
                    into #Tmplocations
                    from @Tmppricelist where Zone not in (select Zone from _CPLLOCATIONS)
                    or LocationName not in (select LOCATIONNAME from _CPLLOCATIONS)

                    --insert into cpllocations
                    Insert into _CPLLOCATIONS (LOCATIONNAME, ZONE)
                    select LocationName, Zone from #Tmplocations";
                    sqlsrv_query($conn,$query);
            }
    } else
    {
        $message = '<label class="text-danger">Please Select File</label>';
    }
}
?>
<Form  method="POST" enctype='multipart/form-data'>
<div class="col-md-3">
            <br/>
            <label>Select CSV File</label>
        </div>
        <div class="col-md-4">
            <input type="file" name="csv_file" id="csv_file"
            accept=".csv" style="margin-top:15px;"/>
        </div>
        <div class="col-md-5">
        <br/>
            <input type="submit" name="upload" id="upload" value="UPLOAD" style="margin-top:10px;" 
            class="btn btn-info"/>
        </div>

</div>
</form>
</br>
<?php

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="script.js"></script>
</body>
</html>