function changestate(){
    var state=document.getElementById("band");
    switch (state.value){
    case "3IP":
    
        document.getElementById("distance").setAttribute('disabled', true);
        document.getElementById("ATTEMPTEDDELIVERY").setAttribute('disabled', true);
        document.getElementById("outofofficecall").setAttribute('disabled', true);
        document.getElementById("deliverytype").setAttribute('disabled', true);
        document.getElementById("kilos").setAttribute('disabled', true);
        document.getElementById("packing").removeAttribute('disabled');
        document.getElementById("locationname").removeAttribute('disabled');
        document.getElementById("weight").removeAttribute('disabled');
        document.getElementById("domesticrt").removeAttribute('disabled');
        break;
    case "3IE":
    
        document.getElementById("distance").setAttribute('disabled', true);
        document.getElementById("ATTEMPTEDDELIVERY").setAttribute('disabled', true);
        document.getElementById("outofofficecall").setAttribute('disabled', true);
        document.getElementById("deliverytype").setAttribute('disabled', true);
        document.getElementById("kilos").setAttribute('disabled', true);
        document.getElementById("packing").removeAttribute('disabled');
        document.getElementById("locationname").removeAttribute('disabled');
        document.getElementById("weight").removeAttribute('disabled');
        document.getElementById("domesticrt").removeAttribute('disabled');
        break;
    case  "CISCO":
   
        document.getElementById("distance").removeAttribute('disabled');
        document.getElementById("ATTEMPTEDDELIVERY").removeAttribute('disabled');
        document.getElementById("outofofficecall").removeAttribute('disabled');
        document.getElementById("deliverytype").removeAttribute('disabled');
        document.getElementById("kilos").removeAttribute('disabled');
        document.getElementById("packing").setAttribute('disabled', true);
        document.getElementById("locationname").setAttribute('disabled', true);
        document.getElementById("weight").setAttribute('disabled', true);
        document.getElementById("domesticrt").setAttribute('disabled', true);
        break;
    case  "DOMESTIC":
        document.getElementById("packing").setAttribute('disabled', true); 
        document.getElementById("ATTEMPTEDDELIVERY").setAttribute('disabled', true);
        document.getElementById("outofofficecall").setAttribute('disabled', true);
        document.getElementById("deliverytype").setAttribute('disabled', true);
        document.getElementById("distance").setAttribute('disabled', true);
        document.getElementById("weight").setAttribute('disabled', true);
        document.getElementById("domesticrt").removeAttribute('disabled');
        document.getElementById("locationname").removeAttribute('disabled');
        break;
    }
}

