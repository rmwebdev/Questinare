jQuery(document).ready(function() {
        $('[data-toggle="select2"]').select2()
    }),
    $('[data-plugin="switchery"]').each(function(a, n) {
        new Switchery($(this)[0],
            $(this).data())
    }),
    $("input#defaultconfig").maxlength({
        warningClass: "badge badge-success",
        limitReachedClass: "badge badge-danger"
    }),
    $("input#thresholdconfig").maxlength({
        threshold: 20,
        warningClass: "badge badge-success",
        limitReachedClass: "badge badge-danger"
    }),
    $("input#alloptions").maxlength({
        alwaysShow: !0,
        separator: " out of ",
        preText: "You typed ",
        postText: " chars available.",
        validate: !0,
        warningClass: "badge badge-success",
        limitReachedClass: "badge badge-danger"
    }),
    $("textarea#textarea").maxlength({
        alwaysShow: !0,
        warningClass: "badge badge-success",
        limitReachedClass: "badge badge-danger"
    }),
    $("input#placement").maxlength({
        alwaysShow: !0,
        placement: "top-left",
        warningClass: "badge badge-success",
        limitReachedClass: "badge badge-danger"
    })

$(document).ready(function() {

            jQuery.extend(jQuery.validator.messages, {
                required: "Ini wajib isi.",
                remote: "Please fix this field.",
                email: "Please enter a valid email address.",
                url: "Please enter a valid URL.",
                date: "Please enter a valid date.",
                dateISO: "Please enter a valid date (ISO).",
                number: "Please enter a valid number.",
                digits: "Please enter only digits.",
                creditcard: "Please enter a valid credit card number.",
                equalTo: "Please enter the same value again.",
                accept: "Please enter a value with a valid extension.",
                maxlength: jQuery.validator.format("Please enter no more than {0} characters."),
                minlength: jQuery.validator.format("Please enter at least {0} characters."),
                rangelength: jQuery.validator.format("Please enter a value between {0} and {1} characters long."),
                range: jQuery.validator.format("Please enter a value between {0} and {1}."),
                max: jQuery.validator.format("Please enter a value less than or equal to {0}."),
                min: jQuery.validator.format("Please enter a value greater than or equal to {0}.")
            })