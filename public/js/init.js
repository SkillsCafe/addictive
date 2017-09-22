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

