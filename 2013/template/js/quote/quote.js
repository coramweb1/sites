//TODO: [X]Validate form input

$(document).ready(function() {
    $("#quote").bind("submit", function() { return false; });
    $("#res").hide();
    $("#send").bind("click", function() {
        if(!validateForm()) { return false; }
        var data = "";
        data = "type=" + $("#type option:selected").val() + "&";
        $("input:text").each(function(index) {
            data = data + $(this).attr("name") + "=" + $(this).val() + "&";
        });
        data = data + $("#message").attr("name") + "=" + $("#message").val();
        $.ajax({ type: "POST", url: "../template/php/quote.php",
            dataType: "html",
            data: data,
            success:
               function(data, textStatus) {
                   showSuccess("Thank you for your quotation request "+ $('#name').val() +"! Your message was successfully submitted. We will get back to you in a timely fashion.");
                   $("input:text").each(function(index) { $(this).val(""); });
                   $("#message").val("");
               },
            error: function(r, textStatus) { showError("Sorry! Something broke and your message failed to submit. Please review and try again."); }
        });
    });
});

function validateForm() {
    var characterReg = /^\s*[a-zA-Z0-9,\s]+\s*$/;
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    var fakeReg = /(.)\1{2,}/;
    var numericReg = /^\d*[0-9](|.\d*[0-9]|,\d*[0-9])?$/;

    var ret = true;

    if($("#name").val() =="" || fakeReg.test($("#name").val()) || !characterReg.test($("#name").val())) {
        showError("Oops, make sure that is your real name.");
        return false;
    }

    if($("#email").val() =="" || !emailReg.test($("#email").val())) {
        showError("Oops, can't use that email address.");
        return  false;
    }

    if($("#message").val() =="") {
        showError("Hey, don't forget to write us a friendly message and we will help.");
        return  false;
    }

    return true;
}

function showError(error){
    $("#res").removeClass("notError");
    $("#res").addClass("anError");
    $("#res").text(error);
    $("#res").show();
    $("#res").fadeOut(7000);
}

function showSuccess(msg){
    $("#res").removeClass("anError");
    $("#res").addClass("notError");
    $("#res").text(msg);
    $("#res").show();
    $("#res").fadeOut(12000);
}

function isNumberKey(evt)
{
	 var charCode = (evt.which) ? evt.which : event.keyCode
	 
	 if (charCode > 31 && (charCode < 48 || charCode > 57))
	 {
	   	return false;
	 }
	 
	 return true;
}