jQuery(function ($) {

    jQuery.validator.addMethod("country", function (value, element) {
        return this.optional(element) || /^[^+]/.test(value);
    }, "Enter Number Without Country Code");
    jQuery.validator.addMethod("number", function (value, element) {
        return this.optional(element) || value.match(/^[0-9][0-9]*$/);
    }, "Invalid mobile number format");

    jQuery.validator.addMethod("mobile", function (value, element) {
        return this.optional(element) || $(element).intlTelInput("isValidNumber");
    }, "Please enter a valid mobile number");

    jQuery.validator.addMethod("alphabets", function (value, element) {
        return this.optional(element) || /^[a-zA-Z ]*$/.test(value);
    }, "Please enter Alphabets only");

    jQuery.validator.addMethod("email", function (value, element) {
        return this.optional(element) || /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(value);
    }, "Please enter a valid email address");

    jQuery.validator.addMethod("intlTelNumber", function(value, element) {
        return this.optional(element) || $(element).intlTelInput("isValidNumber");
    }, "Please enter a valid International Phone Number");


    // jQuery.validator.addMethod("country", function (value, element) {
    //     return this.optional(element) || /^[^+]/.test(value);
    // }, "أدخل الرقم من دون رمز البلد");
    // jQuery.validator.addMethod("number", function (value, element) {
    //     return this.optional(element) || value.match(/^[0-9][0-9]*$/);
    // }, "رقم  غير صالح ");

    // jQuery.validator.addMethod("mobile", function (value, element) {
    //     return this.optional(element) || $(element).intlTelInput("isValidNumber");
    // }, "من فضلك أدخل رقم صحيح");

    // jQuery.validator.addMethod("alphabets", function (value, element) {
    //     return this.optional(element) || /^[a-zA-Z ]*$/.test(value);
    // }, "من فضلك أدخل حروف فقط ");

    // jQuery.validator.addMethod("email", function (value, element) {
    //     return this.optional(element) || /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(value);
    // }, "من فضلك أدخل إيميل صالح ");

    // jQuery.validator.addMethod("intlTelNumber", function(value, element) {
    //     return this.optional(element) || $(element).intlTelInput("isValidNumber");
    // }, "من فضلك أدخل رقم دولي صالح");



    if ($('#query_form').length > 0) {
        $('#query_form').validate({
            rules: {
                fname: {
                    required: true,
                    maxlength: 100
                },
                lname: {
                    required: true,
                    maxlength: 100
                },
                mobile: {
                    required: true,
                    number:true,
                    minlength: 10,
                    maxlength: 13
                },
                email: {
                    required: true,
                    email: true
                }
            },
            messages:
            {
                fname:
                {
                    required: "Name is required"
                },
                lname:
                {
                    required: "Please enter last name"
                },
                mobile:
                {
                    required: "Phone Number is Required",
                    minlength: "Please enter min. 10 digit mobile number",
                    maxlength: "Invalid mobile number"
                    // minlength: "من فضلك أدخل على الأقل عشر أرقام للهاتف ",
                    // maxlength: "رقم هاتف غير صالح "
                },
                email:
                {
                    required: "Email is required",
                    email: "Please enter valid email address"
                    //email: "من فضلك أدخل ايميل صالح "
                }
            }
        });
    }

    if ($('#contact_form').length > 0) {
        $('#contact_form').validate({
            rules: {
                fname: {
                    required: true,
                    maxlength: 100
                },
                lname: {
                    required: true,
                    maxlength: 100
                },
                mobile: {
                    required: true,
                    number:true,
                    minlength: 10,
                    maxlength: 13
                },
                email: {
                    required: true,
                    email: true
                }
            },
            messages:
            {
                fname:
                {
                    required: "Name is required"
                },
                lname:
                {
                    required: "Please enter last name"
                },
                mobile:
                {
                    required: "Phone Number is Required",
                    minlength: "Please enter min. 10 digit mobile number",
                    maxlength: "Invalid mobile number"
                    // minlength: "من فضلك أدخل على الأقل عشر أرقام للهاتف ",
                    // maxlength: "رقم هاتف غير صالح "
                },
                email:
                {
                    required: "Email is required",
                    email: "Please enter valid email address"
                    //email: "من فضلك أدخل ايميل صالح "
                }
            }
        });
    }

    if ($('#mainpopup').length > 0) {
        $('#mainpopup').validate({
            rules: {
                fname: {
                    required: true,
                    maxlength: 100
                },
                email: {
                    required: true,
                    email: true
                },
                mobile: {
                    required: true,
                    number:true,
                    minlength: 10,
                    maxlength: 10
                }
            },
            messages:
            {
                fname:
                {
                   required: "Name is required"
               },
               email:
               {
                required: "Email is required",
                email: "Please enter valid email address"
            },
            mobile:
            {
                required: "Phone Number is Required",
                minlength: "Please enter min. 10 digit mobile number",
                maxlength: "Invalid mobile number"
            }
        }



    });
    }

    if ($('#counsellers').length > 0) {
        $('#counsellers').validate({
            rules: {
                fname: {
                    required: true,
                    maxlength: 100
                },
                email: {
                    required: true,
                    email: true
                },
                mobile: {
                    required: true,
                    number:true,
                    minlength: 10,
                    maxlength: 10
                }
            },
            messages:
            {
                fname:
                {
                    required: "Please enter name"
                },
                email:
                {
                    required: "Please enter email",
                    email: "Please enter valid email address"
                },
                mobile:
                {
                    required: "Please enter mobile no",
                    minlength: "Min 10 digit mobile number",
                    maxlength: "Invalid mobile number"
                }
            }

        });
    }



    if ($('#iamform').length > 0) {
        $('#iamform').validate({
            rules: {
                fname: {
                    required: true,
                    maxlength: 100
                },
                mobile: {
                    required: true,
                    number:true,
                    minlength: 10,
                    maxlength: 10
                },
                email: {
                    required: true,
                    email: true
                }
            },
            messages:
            {
                fname:
                {
                    required: "Please enter name"
                },
                mobile:
                {
                    required: "Please enter mobile no",
                    minlength: "Min 10 digit mobile number",
                    maxlength: "Invalid mobile number"
                },
                email:
                {
                    required: "Please enter email",
                    email: "Please enter valid email address"
                }
            }
        });
    }





});