// JavaScript Document

$(document).ready(function(){
	var temp = [];
	
	$("#monDealers, #tueDealers, #wedDealers, #thuDealers, #friDealers, #satDealers").hide();
	
	/*-- monday show hide --*/
	$("#monRegular").click(function(){
		$("#monRoute").show();
		$("#monDealers").hide();
                monday=[];
	});
	$("#monExpress").click(function(){
		$("#monDealers").show();
		$("#monRoute").hide();
                monday=[];
	});
	
	/*-- Tuesday --*/
	$("#tueRegular").click(function(){
		$("#tueRoute").show();
		$("#tueDealers").hide();
                tuesday=[];
	});
	$("#tueExpress").click(function(){
		$("#tueDealers").show();
		$("#tueRoute").hide();
                tuesday=[];
	});
	
	
		/*-- Wednesday --*/
	$("#wedRegular").click(function(){
		$("#wedRoute").show();
		$("#wedDealers").hide();
                wednesday=[];
	});
	$("#wedExpress").click(function(){
		$("#wedDealers").show();
		$("#wedRoute").hide();
                wednesday=[];
	});
	
			/*-- Thursday --*/
	$("#thuRegular").click(function(){
		$("#thuRoute").show();
		$("#thuDealers").hide();
                thursday=[];
	});
	$("#thuExpress").click(function(){
		$("#thuDealers").show();
		$("#thuRoute").hide();
                thursday=[];
	});
	
	
				/*-- Friday --*/
	$("#friRegular").click(function(){
		$("#friRoute").show();
		$("#friDealers").hide();
                friday=[];
	});
	$("#friExpress").click(function(){
		$("#friDealers").show();
		$("#friRoute").hide();
                friday=[];
	});
	
					/*-- Saturday --*/
	$("#satRegular").click(function(){
		$("#satRoute").show();
		$("#satDealers").hide();
                saturday=[];
	});
	$("#satExpress").click(function(){
		$("#satDealers").show();
		$("#satRoute").hide();
                saturday=[];
	});
	
	
	
	
	$(".data-checkbox").click(function() {
            
            
            //for monday
            if (this.name=='monday-visit'){
            if(this.checked){
                if(monday.length>=expresslimit){alert("You can oly selected upto " + expresslimit +" express visits per day. Please remove another dealer if you would like to add this dealer"); return false;}}
            monday = updateexpressroute(monday, this.id);
            
            clearselectbox("monday_expressroute");
            addaaraytoselect(monday, "monday_expressroute");
            }
           
            //for tuesday
            if (this.name=='tuesday-visit'){
            if(this.checked){
                if(tuesday.length>=expresslimit){alert("You can oly selected upto " + expresslimit +" express visits per day. Please remove another dealer if you would like to add this dealer"); return false;}}
            tuesday = updateexpressroute(tuesday, this.id);
            
            clearselectbox("tuesday_expressroute");
            addaaraytoselect(tuesday, "tuesday_expressroute");
            }
                
            //for wednesday
            if (this.name=='wednesday-visit'){
            if(this.checked){
                if(wednesday.length>=expresslimit){alert("You can oly selected upto " + expresslimit +" express visits per day. Please remove another dealer if you would like to add this dealer"); return false;}}
            wednesday = updateexpressroute(wednesday, this.id);
            
            clearselectbox("wednesday_expressroute");
            addaaraytoselect(wednesday, "wednesday_expressroute");
            }
            
            //for thursday
            if (this.name=='thursday-visit'){
            if(this.checked){
                if(thursday.length>=expresslimit){alert("You can oly selected upto " + expresslimit +" express visits per day. Please remove another dealer if you would like to add this dealer"); return false;}}
            thursday = updateexpressroute(thursday, this.id);
            
            clearselectbox("thursday_expressroute");
            addaaraytoselect(thursday, "thursday_expressroute");
            }
            
            
            //for friday
            if (this.name=='friday-visit'){
            if(this.checked){
                if(friday.length>=expresslimit){alert("You can oly selected upto " + expresslimit +" express visits per day. Please remove another dealer if you would like to add this dealer"); return false;}}
            friday = updateexpressroute(friday, this.id);
            
            clearselectbox("friday_expressroute");
            addaaraytoselect(friday, "friday_expressroute");
            }
            
            //for saturday
            if (this.name=='saturday-visit'){
            if(this.checked){
                if(saturday.length>=expresslimit){alert("You can oly selected upto " + expresslimit +" express visits per day. Please remove another dealer if you would like to add this dealer"); return false;}}
            saturday = updateexpressroute(saturday, this.id);
            
            clearselectbox("saturday_expressroute");
            addaaraytoselect(saturday, "saturday_expressroute");
            }
            
        
        });
        
        $('#btnYes').click(function() {
            // handle form processing here  
            calculateresults();
            
        });
	
	
});