(function($){
$.fn.mailCheck = function(options){
	var input=this;
	this.keyup(function() {
		var val = input.val();
		// console.log(val);
		var ml = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
		if(ml.test(val)){
			options.dest.text('Valid email');
		} else {
			options.dest.text('Not a valid email');
		}
	});       
};

}(jQuery));