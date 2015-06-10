(function($){
$.fn.reverseText=function(options){
	var input=this;
	
	//this.blur(function(){
		var rev = "";  
		var val=input.text();
		//var r=val.split("").reverse().join("");
		for(var i=val.length-1;i >= 0;i--){
			rev=rev+val[i];
			options.dest.text(rev);
		}
		
		
	//});
};

}(jQuery));