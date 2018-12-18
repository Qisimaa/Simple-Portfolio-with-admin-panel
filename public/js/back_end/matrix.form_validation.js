
$(document).ready(function(){
	$("#current_pwd").keyup(function(){
		var current_pwd=$("#current_pwd").val();
		$.ajax({
			type:'get',
			url:'/admin/check_pwd',
			data:{current_pwd:current_pwd},
		success:function(resp){
				if (resp=="false") {
                    $("#chkPwd").html("<font color='red'>Current Password is Incorrect</font>");
				}
				else
				{
                    $("#chkPwd").html("<font color='green'>Current Password Correct</font>");
				}

        }
		});
	});

	$('input[type=checkbox],input[type=radio],input[type=file]').uniform();
	
	$('select').select2();
	
	// Form Validation


	
	$("#password_validate").validate({
		rules:{
			current_pwd:{
				required: true,
				minlength:6,
				maxlength:20
			},
			new_pwd:{
				required:true,
				minlength:6,
				maxlength:20,

			},
            confirm_pwd:{
                required:true,
                minlength:6,
                maxlength:20,
                equalTo:"#confirm_pwd"
            }
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});

    $("#add_group").validate({
        rules:{
            g_name:{
                required: true,
            },
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight:function(element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });

    $("#edit_category").validate({
        rules:{
            cat_name:{
                required: true,
            },
            desc:{
                required:true,
            },
            url:{
                required:true,
            }
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight:function(element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });
    $("#delCat").click(function () {
        if (confirm('Are you sure want to delete this Category?')){
            return true;

        }
        return false;
    });

    $("#add_product").validate({
        rules:{
            product_name:{
                required: true,
            },
            price:{
                required:true,
				number:true,
            },
            parent_id:{
                required:true,
            },
            p_code:{
                required:true,
            },
            p_color:{
                required:true,
            },
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight:function(element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });
    $("#edit_product").validate({
        rules:{
            product_name:{
                required: true,
            },
            price:{
                required:true,
                number:true,
            },
            parent_id:{
                required:true,
            },
            p_code:{
                required:true,
            },
            p_color:{
                required:true,
            },
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight:function(element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });

    $("#login").validate({
        rules:{
            email:{
                required: true,
            },
            password:{
                required:true,
                number:true,
            },
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight:function(element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });
});
