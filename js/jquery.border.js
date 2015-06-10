(function ($){
	$.fn.border = function(options){
		
		var defaults = $.extend({
			size : '1px',
			color : 'blue'
		},options);
		
		this.css({border: defaults.size+' solid '+defaults.color});

		return this;
	};
}(jQuery));

// 1. Make input to type only uppercase letters. $('#ip').uppercase(); //Hima 
// 2. Plugin to check if the entered text is an email or not. $('#ip').emailcheck(); //Vineetha
// 3. $('#ip').autocomplete({input :['John' , 'Jane' , 'Mary', 'Alice', 'Bob'], dest : '#dest' }); //Adeeb

