document.addEventListener("DOMContentLoaded", function(){

    
    
    
    var myLi = document.getElementById('bulky').getElementsByTagName('li');
    
        var calls = [];
        calls[0] = function() { 
            document.querySelector("#addinformation").style.opacity=1;
            document.querySelector("#addinformation").style.height="auto";
            
           
            document.querySelector("#listingpage").style.opacity=0;
            document.querySelector("#listingpage").style.height=0;

            document.querySelector("#info").classList.add("active");
            document.querySelector("#list").classList.remove("active");
            
         };
        
        calls[2] = function() { 


            document.querySelector("#addinformation").style.opacity=0;
            document.querySelector("#addinformation").style.height=0;
            
            document.querySelector("#confirmpage").style.opacity=0;
            document.querySelector("#confirmpage").style.height=0;
            
            
            document.querySelector("#listingpage").style.opacity=1;
            document.querySelector("#listingpage").style.height="auto";

            document.querySelector("#info").classList.remove("active");
            document.querySelector("#list").classList.add("active");
            
        };
        
        for (i = 0; i < myLi.length; i++) {
            myLi[i].addEventListener('click', calls[i], false);
        }

   

document.querySelector('#addprovince').onchange=chngprovince;

function chngprovince(event){
    var province=event.target.value;




if(province==='quebec')
{
    document.querySelector("#salary").pattern="^[0-9\/\d, ]+$";
}
else if(province!='quebec')
    {
        document.querySelector("#salary").pattern="^[0-9,\/\d,. ]+$";
    }
else
    {
        document.querySelector("#salary").pattern="[0-9\/]*";
    }
}
  


    document.querySelector("#infoadd").addEventListener("submit", function(e){
        if(!e.isValid){
            e.preventDefault();    //stop form from submitting
        }




        

        var name=document.querySelector("#addname").value;
        var province=document.querySelector("#addprovince").value;
        var telephone=document.querySelector("#telephone").value;
        var postalcode=document.querySelector("#postal").value;
        var salary=document.querySelector("#salary").value;

            var provinceall="";

            switch(province)
            {
                case "ontario": 
                provinceall="Ontario";
                break;
                case "quebec": 
                provinceall="Quebec";
                break;
                case "novascotia": 
                provinceall="Nova Scotia";
                break;
                case "newbrunswick": 
                provinceall="New Brunswick";
                break;
                case "manitoba": 
                provinceall="Manitoba";
                break;
                case "britishcolumbia": 
                provinceall="British Columbia";
                break;
                case "princeedwardisland": 
                provinceall="Prince Edward Island";
                break;
                case "saskatchewan": 
                provinceall="Saskatchewan";
                break;
                case "alberta": 
                provinceall="Alberta";
                break;
                case "newfoundlandandlabrador": 
                provinceall="Newfoundland and Labrador";
                break;
                case "northwestterritories": 
                provinceall="Northwest Territories";
                break;
                case "yukon": 
                provinceall="Yukon";
                break;
                case "nunavut": 
                provinceall="Nunavut";
                break;

            }

            function postStuff(){
                // Create our XMLHttpRequest object
                var hr = new XMLHttpRequest();
                // Create some variables we need to send to our PHP file
                var url = "data/adduser.php";
                
                var vars = "addname="+name+"&addprovince="+provinceall+"&telephone="+telephone+"&postal="+postalcode+"&salary="+salary;
                hr.open("POST", url, true);
                hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                // Access the onreadystatechange event for the XMLHttpRequest object
                hr.onreadystatechange = function() {
                    console.log(hr);
                
                    if(hr.readyState == 4 && hr.status == 200) {
                        var return_data = hr.responseText;
                    }
                }
                // Send the data to PHP now... and wait for response to update the status div
                hr.send(vars); // Actually execute the request
                }


        document.querySelector("#listname").textContent=name;
        document.querySelector("#listprovince").textContent=provinceall;
        document.querySelector("#listphone").textContent=telephone;
        document.querySelector("#listpostalcode").textContent=postalcode;
        document.querySelector("#listsalary").textContent=salary;


        document.querySelector("#addinformation").style.opacity=0;
        document.querySelector("#addinformation").style.height=0;
        
        document.querySelector("#confirmpage").style.opacity=1;
        document.querySelector("#confirmpage").style.height="auto";
        
             postStuff();


    });
   
  });

  