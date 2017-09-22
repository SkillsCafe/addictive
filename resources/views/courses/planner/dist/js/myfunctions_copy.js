//This function find the index for a dealer
function finddealerindex(dealername)
{
    var i;
    var location;
    for (i=0; i<dealerarray.length; i++){
        if (dealerarray[i]==dealername) {location=i;}
    }
    return location;
}

function findinarr(arr, obj) {
    for(var i=0; i<arr.length; i++) {
        if (arr[i] == obj) return true;
    }
}

function finddealercriticality(dealername)
{
    dealerindex=finddealerindex(dealername);
    var dealercriticality=criticalityarray[dealerindex];
    return dealercriticality;
}

function createroute(routename, dealers, routetype)
{
    var i;
    var routenames=[];
    var routecounter=0;
    if (routetype=='Regular')
    {    
    for (i=0; i<routearray.length; i++){
        if (routearray[i]==routename) {routenames[routecounter]=dealerarray[i]; routecounter++;}
    }

    }

    if (routetype=='Express')
    {

        for (i=0; i<dealers.length; i++){routenames[i]=dealers[i]; }
    }

    return routenames;
}

function updatedaystillvisit(route)
{
//takes an array as an input whether Route or Express

//first we need to update the days till visit based on the chosen route

    var i;
    var dealerindex;
    
    
    for (i=0; i<route.length; i++){
        //reduce days till visit for all dealers in this route by 1 and dissatisfactio in proportion
        
        dealerindex=finddealerindex(route[i]);
        
        //next lets update the current daystill visit for this dealer
        if (dissatisfaction[dealerindex]>0){
        visitdefaultarray[dealerindex]=parseFloat(visitdefaultarray[dealerindex])+parseFloat(visitdeficitscore(i)-1);
        }
        if (dealerslastvisitarray[dealerindex]>0){
        dealerslastvisitarray[dealerindex]=parseFloat(dealerslastvisitarray[dealerindex])-1;}
        }
    
      
    
    //increase days till visit for all dealers not in this route by 1
    
    for (i=0; i<dealerarray.length; i++){
        
        //is this dealer in the route?
        if (!findinarr(route, dealerarray[i]))
        {
        dealerindex=finddealerindex(dealerarray[i]);
        //next lets update the current daystill visit for this dealer
        visitdefaultarray[i]=parseFloat(visitdefaultarray)+parseFloat(visitdeficitscore(i));
        dealerslastvisitarray[dealerindex]=parseFloat(dealerslastvisitarray[dealerindex])+1;
        }
    }
}

function visitdeficitscore(i)
{
    if (criticalityarray[i]==4){return 0.125;}
    if (criticalityarray[i]==3){return 0.083;}
    if (criticalityarray[i]==2){return 0.083;}
    if (criticalityarray[i]==1){return 0.042;}

}

function initiatevisitdefautlarray()
{
    for (i=0; i<dealerarray.length; i++){
        visitdefaultarray[i]=parseFloat(parseFloat(dealerslastvisitarray[i])*parseFloat(visitdeficitscore(i)));
    }


}

function updatedissatisfaction(day)
{
//this function updates the weighted criticality scores. Three sources dealerarray for dealers
//criticalityarray for criticality scores based on dealership
//daystillvist array to compute days till the dealership was visited
//events array - to be added
//weigthedcriticality=criticality + daystillvisit * 0.25

    var i;
    var dealerindex;
    //first update dissatisfaction based on visitdefault and ciritcality
    for (i=0; i<dealerarray.length; i++){

        dissatisfaction[i]=parseFloat(criticalityarray[i]) * (parseFloat(visitdefaultarray[i]));
    }
    //now update dissatisfaction based on event. This is to be 
//    var eventimpactPC=[1,0,0,0,0,0];
//    var eventimpactEC=[0,0,0,0,0,0];
//    var eventimpactCR=[0,0,1,0,0,0];
//    var eventimpactCW=[0,0,0,0,0,0];
    notinroute=[];
    if(events[day]!==0){
        
    
    
    //loop through all dealers in route
    for (i=0; i<dealerarray.length; i++){
    //findall dealers not in route an push them into the notinroute array
    
    if(day==0){
        if (!findinarr(monday, dealerarray[i])) {notinroute.push(dealerarray[i]);}
    }
    if(day==1){
        if (!findinarr(tuesday, dealerarray[i])) {notinroute.push(dealerarray[i]);}
    }
    if(day==2){
        if (!findinarr(wednesday, dealerarray[i])) {notinroute.push(dealerarray[i]);}
    }
    if(day==3){
        if (!findinarr(thursday, dealerarray[i])) {notinroute.push(dealerarray[i]);}
    }
    if(day==4){
        if (!findinarr(friday, dealerarray[i])) {notinroute.push(dealerarray[i]);}
    }
    if(day==5){
        if (!findinarr(saturday, dealerarray[i])) {notinroute.push(dealerarray[i]);}
    }
    
    //now check the impact of the event on the cat
    //var categoriesmaster=['Colour World','Critical Retailer','Ezycolour','PC'];

    //for monday
    for (i=0; i<notinroute.length; i++){
         dealerindex=finddealerindex(notinroute[i]);
         category=categoriesarray[dealerindex];
         if (category=="PC"){
             if (eventimpactPC[day]!==0){
                 dissatisfaction[dealerindex]=dissatisfaction[dealerindex]+eventimpactPC[day];
             }
         }
         if (category=="Ezycolour"){
             if (eventimpactEC[day]!==0){
                 dissatisfaction[dealerindex]=dissatisfaction[dealerindex]+eventimpactEC[day];
             }
         }
         if (category=="Critical Retailer"){
             if (eventimpactCR[day]!==0){
                 dissatisfaction[dealerindex]=dissatisfaction[dealerindex]+eventimpactCR[day];
             }
         }
         if (category=="Colour World"){
             if (eventimpactCW[day]!==0){
                 dissatisfaction[dealerindex]=dissatisfaction[dealerindex]+eventimpactCW[day];
             }
        }
       }
     }
    }
        
        
}

function storearrays()
{
 localStorage.setItem("dissatisfaction", JSON.stringify(dissatisfaction));
 localStorage.setItem("visitdefaultarray", JSON.stringify(visitdefaultarray));
 localStorage.setItem("dealerarray", JSON.stringify(dealerarray));
 localStorage.setItem("categoriesarray", JSON.stringify(categoriesarray));
 localStorage.setItem("criticalityarray", JSON.stringify(criticalityarray));
 localStorage.setItem("routearray", JSON.stringify(routearray));
 localStorage.setItem("dealerslastvisitarray", JSON.stringify(dealerslastvisitarray));
 localStorage.setItem("uniqueroutes", JSON.stringify(uniqueroutes));
 localStorage.setItem("categoriesmaster", JSON.stringify(categoriesmaster));
    
    
}

function updateexpressroute(weekday, checkbox)
{
    var temp;
    temp=document.getElementById(checkbox);
   
    if (temp.checked){
        
    weekday.push(dealerarray[temp.value]);
    
    }

    if (!temp.checked)
    {
        var index = weekday.indexOf(dealerarray[temp.value]); 
        weekday.splice(index,1);

    }
    
    return weekday;
    
}

function clearselectbox(id)
{
    //clear existing route select box
    
    var select = document.getElementById(id);
    while (select.firstChild) 
    select.removeChild(select.firstChild);
    
}

function addaaraytoselect(names, id)
{
    
    var select = document.getElementById(id);
            
    for (var i = 0; i<names.length; i++){

        var opt = document.createElement('option');
        opt.value = names[i];
        opt.innerHTML = names[i];
        select.add(opt);
    }
}



function calculateresults()
{
    //first we need to create all the routes.
    
    //monday
    var obj;
    obj = document.getElementById("monRegular");
    if(obj.checked){
        var obj2;
        obj2=document.getElementById("monRoute");
        route=obj2.value;
        monday=createroute(route,'','Regular');
    }
    
    //tuesday
    var obj;
    
    obj = document.getElementById("tueRegular");
    if(obj.checked){
        var obj2;
        obj2=document.getElementById("tueRoute");
        route=obj2.value;
        tuesday=createroute(route,'','Regular');
    }
    
    //wednesday
    var obj;
    obj = document.getElementById("wedRegular");
    if(obj.checked){
        var obj2;
        obj2=document.getElementById("wedRoute");
        route=obj2.value;
        wednesday=createroute(route,'','Regular');
    }
    
    //thursday
    var obj;
    obj = document.getElementById("thuRegular");
    if(obj.checked){
        var obj2;
        obj2=document.getElementById("thuRoute");
        route=obj2.value;
        thursday=createroute(route,'','Regular');
    }
    
    //friday
    var obj;
    obj = document.getElementById("friRegular");
    if(obj.checked){
        var obj2;
        obj2=document.getElementById("friRoute");
        route=obj2.value;
        friday=createroute(route,'','Regular');
    }
    
    //saturday
    var obj;
    obj = document.getElementById("satRegular");
    if(obj.checked){
        var obj2;
        obj2=document.getElementById("satRoute");
        route=obj2.value;
        saturday=createroute(route,'','Regular');
    }
    
    
    //now we loop thorugh the week and set all values
        //Monday
        updatedaystillvisit(monday);
        updatedissatisfaction(0);

        //Tueday
        updatedaystillvisit(tuesday);
        updatedissatisfaction(2);

        //Wednesday
        updatedaystillvisit(wednesday);
        updatedissatisfaction(2);

        //Thursday
        updatedaystillvisit(thursday);
        updatedissatisfaction(3);

        //Friday
        updatedaystillvisit(friday);
        updatedissatisfaction(4);
        
        //Friday
        updatedaystillvisit(saturday);
        updatedissatisfaction(5);
    
    
}