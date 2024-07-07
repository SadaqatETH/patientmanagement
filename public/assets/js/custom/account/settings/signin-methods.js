"use strict";
var KTAccountSettingsSigninMethods = function () {
    var t, e, n, o, i, s, r, a, l, d = function () {
        e.classList.toggle("d-none"), s.classList.toggle("d-none"), n.classList.toggle("d-none")
    }, c = function () {
        o.classList.toggle("d-none"), a.classList.toggle("d-none"), i.classList.toggle("d-none")
    };
    return {
        init: function () {
            var m;
            t = document.getElementById("kt_signin_change_email"), e = document.getElementById("kt_signin_email"), n = document.getElementById("kt_signin_email_edit"), o = document.getElementById("kt_signin_password"), i = document.getElementById("kt_signin_password_edit"), s = document.getElementById("kt_signin_email_button"), r = document.getElementById("kt_signin_cancel"), a = document.getElementById("kt_signin_password_button"), l = document.getElementById("kt_password_cancel"), e && (s.querySelector("button").addEventListener("click", (function () {
                d()
            })), r.addEventListener("click", (function () {
                d()
            })), a.querySelector("button").addEventListener("click", (function () {
                c()
            })), l.addEventListener("click", (function () {
                c()
            }))), t && (m = FormValidation.formValidation(t, {
                fields: {
                    emailaddress: {
                        validators: {
                            notEmpty: {message: "Email is required"},
                            emailAddress: {message: "The value is not a valid email address"}
                        }
                    }, confirmemailpassword: {validators: {notEmpty: {message: "Password is required"}}}
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap5({rowSelector: ".fv-row"})
                }
            }), t.querySelector("#kt_signin_submit").addEventListener("click", (function (e) {
                e.preventDefault(), console.log("click"), m.validate().then((function (e) {
                    if ("Valid" == e) { // Assuming 'e' is your validation condition

                        //  Get password
                        const oldPasswordInput = $('[name="old_password"]').val();
                        const newPasswordInput = $('[name="new_password"]').val();
                        const confirmPasswordInput = $('[name="confirm_password"]').val();
                        const csrfToken = $('meta[name="csrf-token"]').attr('content');


                        $.ajax({
                            url: '/update-password',
                            type: 'PUT',
                            dataType: 'json',
                            contentType: 'application/json',
                            headers: {
                                'X-CSRF-Token': csrfToken
                            },
                            data: JSON.stringify({
                                oldPassword: oldPasswordInput,
                                newPassword: newPasswordInput,
                                confirmPassword: confirmPassword
                            }),


                            success: function(data) {
                                // swal.fire({
                                //     text: "Sent password reset. Please check your email",
                                //     icon: "success",
                                //     buttonsStyling: !1,
                                //     confirmButtonText: "Ok, got it!",
                                //     customClass: {confirmButton: "btn font-weight-bold btn-light-primary"}
                                // }).then((function () {
                                //     t.reset(), m.resetForm(), d()
                                // }))
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
                        swal.fire({
                            text: "Sorry, looks like there are some errors detected, please try again.",
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {confirmButton: "btn font-weight-bold btn-light-primary"}
                        })
                    }
                }))
            }))), function (t) {
                var e, n = document.getElementById("kt_signin_change_password");
                n && (e = FormValidation.formValidation(n, {
                    fields: {
                        currentpassword: {validators: {notEmpty: {message: "Current Password is required"}}},
                        newpassword: {validators: {notEmpty: {message: "New Password is required"}}},
                        confirmpassword: {
                            validators: {
                                notEmpty: {message: "Confirm Password is required"},
                                identical: {
                                    compare: function () {
                                        return n.querySelector('[name="newpassword"]').value
                                    }, message: "The password and its confirm are not the same"
                                }
                            }
                        }
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger,
                        bootstrap: new FormValidation.plugins.Bootstrap5({rowSelector: ".fv-row"})
                    }
                }), n.querySelector("#kt_password_submit").addEventListener("click", (function (t) {
                    t.preventDefault(), console.log("click"), e.validate().then((function (t) {
                        if ("Valid" == t) { // Assuming 'e' is your validation condition

                            //  Get password
                            const oldPassword = $('[name="old_password"]').val();
                            const newPassword = $('[name="new_password"]').val();
                            const confirmPassword = $('[name="confirm_password"]').val();
                            const csrfToken = $('meta[name="csrf-token"]').attr('content');


                            $.ajax({
                                url: '/update-password',
                                type: 'PUT',
                                dataType: 'json',
                                contentType: 'application/json',
                                headers: {
                                    'X-CSRF-Token': csrfToken
                                },
                                data: JSON.stringify({
                                    current_password: oldPassword,
                                    password: newPassword,
                                    password_confirmation: confirmPassword
                                }),


                                success: function(data) {
                                    swal.fire({
                                        text: "Password Update",
                                        icon: "success",
                                        buttonsStyling: !1,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: {confirmButton: "btn font-weight-bold btn-light-primary"}
                                    }).then((function () {
                                        window.location.href = '/'; // Redirect to home page after successful password change

                                    }))
                                },
                                error: function(xhr, status, error) {
                                    console.log(xhr)
                                    // t.setAttribute("data-kt-indicator", "off");
                                    if (xhr.responseJSON.error){
                                        var errorMessage = xhr.responseJSON.error;
                                    }
                                    else{
                                        var errors = xhr.responseJSON.errors;
                                        var errorMessage = Object.values(errors).flat().join('<br>');
                                    }
                                    Swal.fire({
                                        html: errorMessage,
                                        icon: 'error'
                                    });
                                }
                            });

                        } else {
                            swal.fire({
                                text: "Sorry, looks like there are some errors detected, please try again.",
                                icon: "error",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, got it!",
                                customClass: {confirmButton: "btn font-weight-bold btn-light-primary"}
                            })
                        }
                    }))
                })))
            }()
        }
    }
}();
KTUtil.onDOMContentLoaded((function () {
    KTAccountSettingsSigninMethods.init()
}));
