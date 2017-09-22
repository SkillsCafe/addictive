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
        //if(dealerslastvisitarray[dealerindex]>0)
        //{
        
            //dealerslastvisitarray[dealerindex]=dealerslastvisitarray[dealerindex]-1;
            dealerslastvisitarray[dealerindex]=0;
            //deficitscore=visitdeficitscore(dealerindex,dealerslastvisitarray[i]);
            visitdefaultarray[dealerindex]=0;
            //alert(visitdefaultarray[i] + '(' + criticalityarray[i] + ')=' + dealerslastvisitarray[i] + '*' + deficitscore);
        //}
        
    }   
    
    //increase days till visit for all dealers not in this route by 1 and dissatisfactio in proportion
    
    for (i=0; i<dealerarray.length; i++){
        
        //is this dealer in the route?
        if (!findinarr(route, dealerarray[i]))
        {
        dealerindex=finddealerindex(dealerarray[i]);
        
        //next lets update the current daystill visit for this dealer
        //if(dealerslastvisitarray[dealerindex]>0)
        //{
            dealerslastvisitarray[dealerindex]=dealerslastvisitarray[dealerindex]+1;
            
            deficitscore=visitdeficitscore(dealerindex,dealerslastvisitarray[i]);
            
            visitdefaultarray[dealerindex]=dealerslastvisitarray[dealerindex]*deficitscore;
            //alert(visitdefaultarray[i] + '(' + criticalityarray[i] + ')=' + dealerslastvisitarray[i] + '*' + deficitscore);
        //}
        }
    }
    
}

//function visitdeficitscore(i)
//{
//    alert("called");
//    if (criticalityarray[i]==4){return 0.1;}
//    if (criticalityarray[i]==3){return 0.2;}
//    if (criticalityarray[i]==2){return 0.2;}
//    if (criticalityarray[i]==1){return 0.4;}
//
//}


//function visitdeficitscore(i,dslv)
//{
//    //alert(dealerslastvisitarray[i]);
//    if (criticalityarray[i]==4){
//        
//        if (dslv<10) {return 0.01;}
//        if (dslv<10) {return 0.01;} 
//        if (dslv>=10 && dslv<15) {return 0.1;} 
//        if (dslv>=15) {return 0.5;}
//    }
//    if (criticalityarray[i]==3){
//        if (dslv<15) {return 0.01;} 
//        if (dslv>=15 && dslv<25) {return 0.3;} 
//        if (dslv>25) {return 0.5;}
//    }
//    if (criticalityarray[i]==2){
//        
//        if (dslv<15) {return 0.01;} 
//        if (dslv>=15 && dslv<25) {return 0.3;} 
//        if (dslv>25) {return 0.5;}
//    }
//
//    if (criticalityarray[i]==1){
//
//        if (dslv<25) {return 0.01;} 
//        if (dslv>=25 && dslv<40) {return 0.3;} 
//        if (dslv>40) {return 0.5;}
//    }
//
//}

function visitdeficitscore(i,dslv)
{
    //alert(dealerslastvisitarray[i]);
    if (criticalityarray[i]==4){
        //alert("4");
        score= dslv/30;
        return score;
    }
    if (criticalityarray[i]==3){
        //alert("3");
        score= dslv/45;
        return score;
    }
    if (criticalityarray[i]==2){
         //alert("2");
        
        score= dslv/45;
        return score;
    }

    if (criticalityarray[i]==1){
        //alert("1");
        //alert(dslv);
        
        score= dslv/60;
        //alert(score);
        return score;
    }

}





function initiatevisitdefaultarray()
{
    for (i=0; i<dealerarray.length; i++){
        dealerindex=finddealerindex(dealerarray[i]);
        deficitscore=visitdeficitscore(dealerindex, dealerslastvisitarray[i]);
        visitdefaultarray[i]=dealerslastvisitarray[i]*deficitscore;
        //alert(visitdefaultarray[i] + '(' + criticalityarray[i] + ')=' + dealerslastvisitarray[i] + '*' + deficitscore);
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
    
    //now update dissatisfaction based on event. This is to be 
//    var eventimpactPC=[1,0,0,0,0,0];
//    var eventimpactEC=[0,0,0,0,0,0];
//    var eventimpactCR=[0,0,1,0,0,0];
//    var eventimpactCW=[0,0,0,0,0,0];
    tempeventimpact=[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
    notinroute=[];
    if(events[day]!==0){
        
    
    
    //loop through all dealers in route
    for (i=0; i<dealerarray.length; i++){
    //findall dealers not in route an push them into the notinroute array. We are only bothered with them.
    
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
    }
    //now check the impact of the event on the categories and increase the dissatisfaction for all dealers not covered
    //var categoriesmaster=['Colour World','Critical Retailer','Ezycolour','PC'];

   
    for (i=0; i<notinroute.length; i++){
         dealerindex=finddealerindex(notinroute[i]);
         category=categoriesarray[dealerindex];
         if (category=="PC"){
             if (eventimpactPC[day]!==0){
                 tempeventimpact[dealerindex]=eventimpactPC[day];
             }
         }
         if (category=="Ezycolour"){
             if (eventimpactEC[day]!==0){
                 tempeventimpact[dealerindex]=eventimpactEC[day];
             }
         }
         if (category=="Critical Retailer"){
             if (eventimpactCR[day]!==0){
                 tempeventimpact[dealerindex]=eventimpactCR[day];
             }
         }
         if (category=="Colour World"){
             if (eventimpactCW[day]!==0){
                 tempeventimpact[dealerindex]=eventimpactCW[day];
             }
        }
       }
     }
     
     //first update dissatisfaction based on visitdefault and ciritcality
    for (i=0; i<dealerarray.length; i++){
        
        dissatisfaction[i]=visitdefaultarray[i]*70/100 + tempeventimpact[i]*30/100;
        if (dissatisfaction[i]>=5){dissatisfaction[i]=5;}
        if (dissatisfaction[i]<=0){dissatisfaction[i]=0;}
        
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
 localStorage.setItem("dailyrevenuearray", JSON.stringify(dailyrevenuearray));
 localStorage.setItem("revenueearned", JSON.stringify(revenueearned));
 localStorage.setItem("visitimpact", JSON.stringify(visitimpact));
 localStorage.setItem("day", JSON.stringify(day));
 
    
    
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

function dissatisfactionscore()
{
    var globaldissatisfactionscore=0;
    for (i=0; i<dealerarray.length; i++){
        globaldissatisfactionscore=Math.round(globaldissatisfactionscore+parseFloat(dissatisfaction[i]));
    }
//    globaldissatisfactionscore=Math.round(globaldissatisfactionscore/dealerarray.length);
    if (globaldissatisfactionscore>0 && globaldissatisfactionscore <=30) {globaldissatisfactionscore=5;}
    if (globaldissatisfactionscore>30 && globaldissatisfactionscore <=70) {globaldissatisfactionscore=4;}
    if (globaldissatisfactionscore>70 && globaldissatisfactionscore <=100) {globaldissatisfactionscore=3;}
    if (globaldissatisfactionscore>100 && globaldissatisfactionscore <=150) {globaldissatisfactionscore=2;}
    if (globaldissatisfactionscore>150) {globaldissatisfactionscore=1;}
    
    
    return globaldissatisfactionscore;
    
}

function calculaterevenue()
{
    for(i=0;i<dealerarray.length;i++){
        
        revenuemultiplier=1-(dissatisfaction[i]/5);
        
        
        if (revenuemultiplier==0){revenuemultiplier=0.1;}
        
        revenue=dailyrevenuearray[i]*revenuemultiplier;
        //if(i==0){alert(dissatisfaction[i] + ' ' + revenuemultiplier + ' ' + revenue);}
        revenueearned[i]=revenueearned[i] + revenue;
    }
        
}

function totalrevenue()
{
    var total=0;
    for(i=0;i<dealerarray.length;i++){
        total=total+revenueearned[i];
    }
    return Math.round(total);
}

function revenuetarget()
{
    var total=0;
    for(i=0;i<dealerarray.length;i++){
        total=total+dailyrevenuearray[i]*5;
    }
    return Math.round(total);
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
        calculaterevenue();

        //Tueday
        updatedaystillvisit(tuesday);
        updatedissatisfaction(1);       
        calculaterevenue();

        //Wednesday
        updatedaystillvisit(wednesday);
        updatedissatisfaction(2);
        calculaterevenue();
        
        //Thursday
        updatedaystillvisit(thursday);
        updatedissatisfaction(3);
        calculaterevenue();

        //Friday
        updatedaystillvisit(friday);
        updatedissatisfaction(4);
        calculaterevenue();
        
        //Friday
        updatedaystillvisit(saturday);
        updatedissatisfaction(5);
        calculaterevenue();
    
        
        //store all data for next round
        day = day + 1;
        storearrays();
        
        window.location.href = "/planner/dashboard";
    
}

function reset()
{
    /* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* Initialize all variables */

dissatisfaction=[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
visitdefaultarray=[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
//dissatisfaction=[];
//var dealersraw = "Sarvodaya Colours,JAI SHREE HARDWARES,Ganesh Plywood & Hardwares,MAHALAXMI HARDWARE,OM Sree ENTERPRISES,KAVITA PAINTS,KANGAN HARDWARES,New World Hardwares,ISHWAR HARDWARE,BHAWANI ELECTRICALS & HARDWARE,MEENAKSHI AGENCIES,AMBE HARDWARE,MAYA ELECTRICALS HARDWARES,TULSI PAINTS,Rishi Kumaar HARDWARES,AKSHAYA PAINTS & HARDWARE,BABANI HARDWARES,GAJALAKSHMI PAINTS & HARDWARE,JOSHI HARDWARE,MOHSIN HARDWARES,NAVRANG PAINTS & HARDWARES,RAJALAKSHMI HARDWARES,Ananth Hardware,KATHIHAARDWARES,MADEENA PAINTS,MANI HARDWARES,MANISH HARDWARE,MURUGAN Hardwares,SAI BABA Traders,THE ROYAL HARDWARES,Vinay HARDWARES,A.K. TRADERS,Fernandes & CO,J C R Enterprises,MARUTHI HARDWARES,MEHEK & Co,RAFI HARDWARE STORES,Ron Electricals,JAMUNA TRADERS,KARTHIKE Hardware,SAKTHI HARDWARES,SATYA Hardwares,VENKETESH HARDWARES,DEEPAK HARDWARES,LAKSHMI ELECTRICAL & HARDWARES,MATJI electricals and hardwares,SRE VENKATESWARA H/W,ASHIYANA ELECTRICALS & HARDWARES,KRISHNA HARDWARE,RANGWALA HARD WARES";
//var dealerarray=dealersraw.split(',');
var dealerarray = ["Sarvodaya Colours","JAI SHREE HARDWARES","GANESH PLYWOOD & HARDWARES","MAHALAXMI HARDWARE","OM SREE ENTERPRISES","KAVITA PAINTS","KANGAN HARDWARES","NEW WORLD HARDWARES","ISHWAR HARDWARE","BHAWANI ELECTRICALS & HARDWARE","MEENAKSHI AGENCIES","AMBE HARDWARE","MAYA ELECTRICALS HARDWARES","TULSI PAINTS","RISHI KUMAAR HARDWARES","AKSHAYA PAINTS & HARDWARE","BABANI HARDWARES","GAJALAKSHMI PAINTS & HARDWARE","JOSHI HARDWARE","MOHSIN HARDWARES","NAVRANG PAINTS & HARDWARES","RAJALAKSHMI HARDWARES","ANANTH HARDWARE","KATHI HARDWARES","MADEENA PAINTS","MANI HARDWARES","MANISH HARDWARE","MURUGAN HARDWARES","SAI BABA TRADERS","THE ROYAL HARDWARES","Vinay HARDWARES","A.K. TRADERS","FERNANDES & CO","J C R ENTERPRISES","MARUTHI HARDWARES","MEHEK & Co","RAFI HARDWARE STORES","RON ELECTRICALS","JAMUNA TRADERS","KARTHIKE HARDWARE","SAKTHI HARDWARES","SATYA HARDWARES","VENKETESH HARDWARES","DEEPAK HARDWARES","LAKSHMI ELECTRICAL & HARDWARES","MATJI ELECTRICALS AND HARDWARES","SRE VENKATESWARA H/W","ASHIYANA ELECTRICALS & HARDWARES","KRISHNA HARDWARE","RANGWALA HARD WARES"];


//var categoriesraw="PC,PC,PC,PC,PC,Ezycolour,Ezycolour,Ezycolour,Ezycolour,Critical Retailer,Critical Retailer,Critical Retailer,Critical Retailer,Critical Retailer,Critical Retailer,Colour World,Colour World,Colour World,Colour World,Colour World,Colour World,Colour World,Colour World,Colour World,Colour World,Colour World,Colour World,Colour World,Colour World,Colour World,Colour World,Colour World,Colour World,Colour World,Colour World,Colour World,Colour World,Colour World,Colour World,Colour World,Colour World,Colour World,Colour World,Colour World,Colour World,Colour World,Colour World,Colour World,Colour World,Colour World";
//var categoriesarray=categoriesraw.split(',');
var categoriesarray=["PC","PC","PC","PC","PC","Ezycolour","Ezycolour","Ezycolour","Ezycolour","Critical Retailer","Critical Retailer","Critical Retailer","Critical Retailer","Critical Retailer","Critical Retailer","Colour World","Colour World","Colour World","Colour World","Colour World","Colour World","Colour World","Colour World","Colour World","Colour World","Colour World","Colour World","Colour World","Colour World","Colour World","Colour World","Colour World","Colour World","Colour World","Colour World","Colour World","Colour World","Colour World","Colour World","Colour World","Colour World","Colour World","Colour World","Colour World","Colour World","Colour World","Colour World","Colour World","Colour World","Colour World"];


var categoriesmaster=['Colour World','Critical Retailer','Ezycolour','PC']; 

//var criticalityraw="4,4,4,4,4,3,3,3,3,2,2,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1";
//var criticalityarray=criticalityraw.split(',');
criticalityarray=[4,4,4,4,4,3,3,3,3,2,2,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1];

//var routeraw="g1,g2,g4,g1,g6,g1,g3,g4,g7,g2,g2,g3,g5,g6,g7,g1,g1,g1,g1,g1,g2,g2,g3,g3,g3,g3,g3,g3,g3,g3,g3,g4,g4,g4,g4,g4,g4,g4,g5,g5,g5,g5,g5,g6,g6,g6,g6,g7,g7,g7";
//var routearray=routeraw.split(',');
var routearray=["g1","g2","g4","g1","g6","g1","g3","g4","g7","g2","g2","g3","g5","g6","g7","g1","g1","g1","g1","g1","g2","g2","g3","g3","g3","g3","g3","g3","g3","g3","g3","g4","g4","g4","g4","g4","g4","g4","g5","g5","g5","g5","g5","g6","g6","g6","g6","g7","g7","g7"];


var uniqueroutes=['g1','g2','g3','g4','g5','g6','g7'];

//var daystilllastvisitraw="5,4,6,6,6,4,5,3,3,5,2,2,5,7,7,4,3,2,5,3,2,7,2,3,2,6,2,4,4,7,5,2,4,3,2,5,3,7,5,5,2,7,6,2,7,3,6,2,3,5";
//var dealerslastvisitarray=daystilllastvisitraw.split(',');
var dealerslastvisitarray=[10,17,12,15,1,15,16,23,17,18,21,21,19,15,17,22,24,30,3,28,4,18,24,24,23,19,18,41,9,24,33,16,17,18,40,29,10,19,38,1,12,4,17,34,42,33,9,20,18,31];

var dailyrevenuearray = [104167,104167,104167,104167,104167,52083,52083,52083,52083,34722,34722,34722,34722,34722,34722,8681,8681,8681,8681,8681,8681,8681,8681,8681,8681,8681,8681,8681,8681,8681,8681,8681,8681,8681,8681,8681,8681,8681,8681,8681,8681,8681,8681,8681,8681,8681,8681,8681,8681,8681];
var revenueearned = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
var visitimpact=[1,1,1,1,1,1.25,1.25,1.25,1.25,1.5,1.5,1.5,1.5,1.5,1.5,2.5,2.5,2.5,2.5,2.5,2.5,2.5,2.5,2.5,2.5,2.5,2.5,2.5,2.5,2.5,2.5,2.5,2.5,2.5,2.5,2.5,2.5,2.5,2.5,2.5,2.5,2.5,2.5,2.5,2.5,2.5,2.5,2.5,2.5,2.5];

var events=['','','','','',''];
var eventimpactPC=[0,0,0,0,0,0];
var eventimpactEC=[0,0,0,0,0,0];
var eventimpactCR=[0,0,0,0,0,0];
var eventimpactCW=[0,0,0,0,0,0];

var monday=[];
var tuesday=[];
var wednesday=[];
var thursday=[];
var friday=[];
var saturday=[];
var events=[];
var eventimpact=[];

var expresslimit=10;
var day = 1;


//Initialize once at the beginning of the game
initiatevisitdefaultarray();
updatedissatisfaction(0);
updatedissatisfaction(1);
updatedissatisfaction(2);
updatedissatisfaction(3);
updatedissatisfaction(4);
updatedissatisfaction(5);

storearrays();

}

function handleclose(){
    var retrievedData = localStorage.getItem("day");
    var daynum = JSON.parse(retrievedData);
    //alert(assetid);
    if (daynum<3){
        alert("Please complete all rounds of the simulation before hitting Complete");
        return false;
    }
    
    
}