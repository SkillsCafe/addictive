/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var retrievedData = localStorage.getItem("dissatisfaction");
var dissatisfaction = JSON.parse(retrievedData);

var retrievedData = localStorage.getItem("visitdefaultarray");
var visitdefaultarray = JSON.parse(retrievedData);

var retrievedData = localStorage.getItem("dealerarray");
var dealerarray = JSON.parse(retrievedData);

var retrievedData = localStorage.getItem("categoriesarray");
var categoriesarray = JSON.parse(retrievedData);

var retrievedData = localStorage.getItem("criticalityarray");
var criticalityarray = JSON.parse(retrievedData);

var retrievedData = localStorage.getItem("routearray");
var routearray = JSON.parse(retrievedData);

var retrievedData = localStorage.getItem("dealerslastvisitarray");
var dealerslastvisitarray = JSON.parse(retrievedData);

var retrievedData = localStorage.getItem("uniqueroutes");
var uniqueroutes = JSON.parse(retrievedData);

var retrievedData = localStorage.getItem("categoriesmaster");
var categoriesmaster = JSON.parse(retrievedData);

var retrievedData = localStorage.getItem("dailyrevenuearray");
var dailyrevenuearray = JSON.parse(retrievedData);

var retrievedData = localStorage.getItem("revenueearned");
var revenueearned = JSON.parse(retrievedData);

var retrievedData = localStorage.getItem("visitimpact");
var visitimpact = JSON.parse(retrievedData);

var retrievedData = localStorage.getItem("day");
var day = JSON.parse(retrievedData);





var monday=[];
var tuesday=[];
var wednesday=[];
var thursday=[];
var friday=[];
var saturday=[];
var events=[];
var eventimpact=[];

var expresslimit=10;