"use strict";
var KTSigninGeneral = function () {
    var e, t, i;
    return {
        init: function () {
            e = document.querySelector("#kt_sign_in_form"), t = document.querySelector("#kt_sign_in_submit"), i = FormValidation.formValidation(e, {
                fields: {
                    email: {
                        validators: {
                            regexp: {
                                regexp: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
                                message: "The value is not a valid email address"
                            }, notEmpty: {message: "Email address is required"}
                        }
                    }, password: {validators: {notEmpty: {message: "The password is required"}}}
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            }), t.addEventListener("click", (function (n) {
                n.preventDefault();

                // Assuming `i` is your form validation function
                i.validate().then((function (i) {
                    if (i === "Valid") {
                        // Show loading indicator and disable the button
                        t.setAttribute("data-kt-indicator", "on");

                        // Get email and password
                        const emailInput = $('[name="email"]').val();
                        const passwordInput = $('[name="password"]').val();
                        const csrfToken = $('meta[name="csrf-token"]').attr('content');

                        $.ajax({
                            url: '/login',
                            type: 'POST',
                            dataType: 'json',
                            contentType: 'application/json',
                            headers: {
                                'X-CSRF-Token': csrfToken
                            },
                            data: JSON.stringify({
                                email: emailInput,
                                password: passwordInput
                            }),


                            success: function(data) {
                                // Handle successful login response
                                console.log('Login successful:', data);
                                // Redirect to home page
                                window.location.href = '/'; // Replace with your home page URL
                            },
                            error: function(xhr, status, error) {
                                t.setAttribute("data-kt-indicator", "off");

                                Swal.fire({
                                    text: "Sorry, These Credentials dont match our records.",
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {confirmButton: "btn btn-primary"}
                                });
                            }
                        });
                    } else {
                        Swal.fire({
                            text: "Sorry, looks like there are some errors detected, please try again.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {confirmButton: "btn btn-primary"}
                        });
                    }
                }));
            }));

        }
    }
}();
KTUtil.onDOMContentLoaded((function () {
    KTSigninGeneral.init()
}));
