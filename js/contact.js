jQuery(function() {
  jQuery('.error').hide();
  jQuery(".button").click(function() {
		// validate and process form
		// first hide any error messages
    jQuery('.error').hide();
		
	  var name = jQuery("input#name").val();
		if (name == "") {
      jQuery("span#name_error").show();
      jQuery("input#name").focus();
      return false;
    }
	
	var apaterno = jQuery("input#apaterno").val();
		if (apaterno == "") {
      jQuery("span#apaterno_error").show();
      jQuery("input#apaterno").focus();
      return false;
    }
	
	
	var amaterno = jQuery("input#amaterno").val();
		if (amaterno == "") {
      jQuery("span#amaterno_error").show();
      jQuery("input#amaterno").focus();
      return false;
    }
	
	
	var turno = jQuery("input#turno").val();
		if (turno == "") {
      jQuery("span#turno_error").show();
      jQuery("input#turno").focus();
      return false;
    }
	
	
	
	
		

	});
});