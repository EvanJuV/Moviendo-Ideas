$( document ).ready(function(){ 
	$(".button-collapse").sideNav();
	
	var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".last"); //Fields wrapper
	var add_button      = $(".add_field_button"); //Add button ID
	    
	var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
	    e.preventDefault();
	    if(x < max_fields){ //max input box allowed
	            x++; //text box increment
	            $(wrapper).append('<div><input type="text" name="mytext[]" class="validate"/><a href="#" class="remove_field">Remover</a></div>'); //add input box
	    }
	});
	    
	$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
	    e.preventDefault(); $(this).parent('div').remove(); x--;
	})
});