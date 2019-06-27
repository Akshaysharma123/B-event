$(document).ready(function(){
	$('.datepic').datepicker({ format: 'dd-mm-yyyy' }),

	
    $("#form").validate({
        errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".block" ).addClass( "has-error" ).removeClass( "has-success" );
				},
				unhighlight: function (element, errorClass, validClass) {
					$( element ).parents( ".block" ).addClass( "has-success" ).removeClass( "has-error" );
				}

	}),
	jQuery.validator.addMethod(
		"onlyimages",
		function (value, element) {
			if (this.optional(element) || !element.files || !element.files[0]) {
				return true;
			} else {
				var fileType = element.files[0].type;
				var isImage = /^(image)\//i.test(fileType);
				return isImage;
			}
		},
		'Sorry, we can only accept image files.'
	),
	// jQuery.validator.addMethod("filesize", function(value, element, param) {
	// 	var isOptional = this.optional(element),
	// 		file;
		
	// 	if(isOptional) {
	// 		return isOptional;
	// 	}
		
	// 	if ($(element).attr("type") === "file") {
			
	// 		if (element.files && element.files.length) {
				
	// 			file = element.files[0];            
	// 			return ( file.size && file.size <= param ); 
	// 		}
	// 	}
	// 	return false;
	// }, "File size is too large.");
	jQuery.validator.addMethod('filesize', function (value, element, arg) {
        if(element.files[0].size<=arg){
            return true;
        }else{
            return false;
        }
    });
	$(".sliders").validate({
		rules: {  
            image:{
				required: true,
				onlyimages:true,
				filesize:2097152 
			 
            }  
        },
        messages: {
            image:{
			   required: 'Please select the image!',
			   onlyimages:"Sorry, we can only accept image files.", 
			   filesize: "File size is too large, 2MB allowed."
			  
            } ,
        },      
        errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".form-group" ).addClass( "has-error" ).removeClass( "has-success" );
				},
				unhighlight: function (element, errorClass, validClass) {
					$( element ).parents( ".form-group" ).addClass( "has-success" ).removeClass( "has-error" );
				}

	}),
	$(".sliders_edit").validate({
		rules: {  
            image:{			
				onlyimages:true, 
				filesize:2097152 
            }  
        },
        messages: {
            image:{
			
			   onlyimages:"Sorry, we can only accept image files.", 
			   filesize: "File size is too large, 2MB allowed."
			  
            } ,
        },      
        errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".form-group" ).addClass( "has-error" ).removeClass( "has-success" );
				},
				unhighlight: function (element, errorClass, validClass) {
					$( element ).parents( ".form-group" ).addClass( "has-success" ).removeClass( "has-error" );
				}

	}),
	$(".portfolio_edit_images").validate({
		rules: {  
            "additionals[]":{
				required:true,			
				onlyimages:true,
				filesize:2097152 
            }  
        },
        messages: {
            "additionals[]":{
				required:'Additional images are required',
			   onlyimages:"Sorry, we can only accept image files.", 
			   filesize: "File size is too large, 2MB allowed."
			  
            } ,
        },      
        errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".form-group" ).addClass( "has-error" ).removeClass( "has-success" );
				},
				unhighlight: function (element, errorClass, validClass) {
					$( element ).parents( ".form-group" ).addClass( "has-success" ).removeClass( "has-error" );
				}

	}),
	$(".portfolio").validate({
		rules: {  
			event_name:'required',
            banner:{
				required: true,
				onlyimages:true, 
				filesize:2097152 
            }  
        },
        messages: {
            banner:{
			   required: 'Please select the image!',
			   onlyimages:"Sorry, we can only accept image files.", 
			   filesize: "File size is too large, 2MB allowed."
			  
            } ,
        },      
        errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".form-group" ).addClass( "has-error" ).removeClass( "has-success" );
				},
				unhighlight: function (element, errorClass, validClass) {
					$( element ).parents( ".form-group" ).addClass( "has-success" ).removeClass( "has-error" );
				}

	}),
	$(".portfolio_edit").validate({
		rules: {  
			event_name:'required',
            banner:{
				filesize:2097152,				
				onlyimages:true, 
            }  
        },
        messages: {
            banner:{			  
			   onlyimages:"Sorry, we can only accept image files.", 
			   filesize: "File size is too large, 2MB allowed."
			  
            } ,
        },      
        errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".form-group" ).addClass( "has-error" ).removeClass( "has-success" );
				},
				unhighlight: function (element, errorClass, validClass) {
					$( element ).parents( ".form-group" ).addClass( "has-success" ).removeClass( "has-error" );
				}

	}),
	$(".changepassword").validate({
		rules: {		
			password: {
				required: true,
				minlength: 6
			},
			confirm_password: {
				required: true,
				minlength: 6,
				equalTo: "#new_password"
			}
			
			
		},
        errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".form-group" ).addClass( "has-error" ).removeClass( "has-success" );
				},
				unhighlight: function (element, errorClass, validClass) {
					$( element ).parents( ".form-group" ).addClass( "has-success" ).removeClass( "has-error" );
				}

	}),
	$(".profile").validate({
		rules: {		
			name: {
				required: true,
				
			},
			email: {
				required: true			
			}
			
			
		},
        errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".form-group" ).addClass( "has-error" ).removeClass( "has-success" );
				},
				unhighlight: function (element, errorClass, validClass) {
					$( element ).parents( ".form-group" ).addClass( "has-success" ).removeClass( "has-error" );
				}

	}),
	$('.delete_all').on('click', function(e) {
		var allVals = [];  
		$(".sub_chk:checked").each(function() {  
			allVals.push($(this).attr('data-id'));
		});
		if(allVals.length <=0)  
		{  
			toastr.warning('Please select record!');
			
		}  else { 
			var check = confirm("Are you sure you want to delete this row?");  
			if(check == true){ 
				var join_selected_values = allVals.join(","); 
				$.ajax({
					url: $(this).data('url'),
					type: 'DELETE',
					headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
					data: 'ids='+join_selected_values,
					success: function (response) {
						if (response.code==200) {
							$(".sub_chk:checked").each(function() {  
								$(this).parents("tr").remove();
							});
							toastr.success('Record has been deleted!');
						} else {
							toastr.error('Whoops Something went wrong!');
							
						}
					},
					error: function (data) {
						toastr.error(data.responseText)
						
					}
				});

			  $.each(allVals, function( index, value ) {
				  $('table tr').filter("[data-row-id='" + value + "']").remove();
			  });
			}  
		}  
	}),
	$('.delete_all_images').on('click', function(e) {
		var allVals = [];  
		$(".sub_chk:checked").each(function() {  
			allVals.push($(this).attr('data-id'));
		});
		if(allVals.length <=0)  
		{  
			toastr.warning('Please select record!');
			
		}  else { 
			var check = confirm("Are you sure you want to delete this row?");  
			if(check == true){ 
				var join_selected_values = allVals.join(","); 
				$.ajax({
					url: $(this).data('url'),
					type: 'DELETE',
					headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
					data: 'ids='+join_selected_values,
					success: function (response) {
						if (response.code==200) {
							$(".sub_chk:checked").each(function() {  
								$(this).parents("tr").remove();
							});
							toastr.success('Images has been deleted!');
						} else {
							toastr.error('Whoops Something went wrong!');
							
						}
					},
					error: function (data) {
						toastr.error(data.responseText)
						
					}
				});

			  $.each(allVals, function( index, value ) {
				  $('table tr').filter("[data-row-id='" + value + "']").remove();
			  });
			}  
		}  
	}),
	
	$.uploadPreview({
		input_field: "#image-upload",
		preview_box: "#image-preview",
		label_field: "#image-label"
	  });
	
   
	

});