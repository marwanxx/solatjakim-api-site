!function ($) {
  	$(function(){
  		
		// datepicker
		$(".datepicker-input").each(function(){ $(this).datepicker();});

		// typeahead
		$.get('api/vendors', function(data){
		    $("#vendor-name").typeahead({ source:data });
		},'json');

		$.get('api/buyers', function(data){
		    $("#buyer-name").typeahead({ source:data });
		},'json');

	});
}(window.jQuery);