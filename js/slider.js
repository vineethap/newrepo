(function($){
$.fn.slider=function(options){
	//var html="";
	var that=this;
   	this.find('li').hide();
   	 var n = 1;
   //that.find(':nth-child(2)').hide();
   	this.append('<li><a href="#" id="next">next</a></li>');
   	this.append('<li><a id="prvs">previous</a></li>');
   	 this.find(':nth-child(1)').show();

   	var len =  this.find('li').length;
   	console.log(len);
   	

   	var defaults =$.extend({
        width : '400px',
		height: '250px',
		automate: true
	    },options);

   	// this.find('a#next').on('click', function() {
   	// 	if (n >= len-2) {
   	// 		console.log(n);
   	// 		n=0;
   	//}
   	 nextt:function(){
       if (n >= len-2) {
   	 		console.log(n);
   		n=0;
   	 }
   		
   		++n;
   		console.log(n);
   		that.find('li').hide();
   		that.find(':nth-child('+n+')').show();
   		that.find(':nth-child('+(len-1)+')').show();
   		that.find(':nth-child('+len+')').show();
   	};

   	// this.find('a#prvs').on('click', function() {
   	// 	if (n <= 1) {
   	// 		console.log(n);
   	// 		n=len-1;
   	// 	}
   	  prevs:function(){
   	  	if (n <= 1) {
   	 		console.log(n);
   	        n=len-1;
   	  }
   		--n;
   		that.find('li').hide();
   		that.find(':nth-child('+n+')').show();
   		that.find(':nth-child('+(len-1)+')').show();
   		that.find(':nth-child('+len+')').show();
   	};
   this.find('a#next').click({
   	nextt();
   })
 
};

})(jQuery);