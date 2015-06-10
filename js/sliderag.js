(function($){
$.fn.slider=function(options){
	var that=this;
	var defaults = $.extend({
		width : '400px',
		height: '250px',
		automate: true
	}, options);
	this.find('li').hide();
	var n=1;
	this.append('<li><button id="prev" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span></button></li>');
	this.append('<li><button id="next" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></button></li>');
	 $('#next').css({position:'absolute',top:'90px',left:'670px'})
	 $('#prev').css({position:'absolute',top:'90px',left:'18px'})
	that.find('img').css({width: defaults.width, height: defaults.height})
	this.find(':nth-child(1)').show();

	var ln=this.find('li').length;
     var intrvl=setInterval()



	this.find('#next').on('click',function(){
        if(n>=ln-2){
           n=0;
        }
        ++n;
        that.find('li').animate({'marginLeft': '+=' + 
                    '600px' }, 1000);
        that.find(':nth-child('+n+')').show();
        that.find(':nth-child('+(ln-1)+')').show();
        that.find(':nth-child('+ln+')').show();
     });
	this.find('#prev').on('click',function(){
     if(n<=1){
     	n=ln-1;
     }
     
    	--n;
   		that.find('li').hide();
   		that.find(':nth-child('+n+')').show();
   		that.find(':nth-child('+(ln-1)+')').show();
   		that.find(':nth-child('+ln+')').show();

	});

	if (defaults.automate) {
		console.log("hi")

	}
};

})(jQuery);