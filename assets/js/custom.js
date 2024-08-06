// Show navbar border on scroll
window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById('navbar').classList.add('border-botton');
        document.getElementById('navbar').classList.add('shadow-sm');
    } else {
        document.getElementById('navbar').classList.remove('border-botton');
        document.getElementById('navbar').classList.remove('shadow-sm');
    }
}

// clear form inputs
function clearInputs() {
    var inputsCollection = document.getElementsByClassName("form-inputs");
    for (i = 0; i < inputsCollection.length; i++) {
        inputsCollection[i].value = "";
        inputsCollection[i].classList.remove("is-invalid");
    }
}
//End  clear form inputs

// hide spam bot honeypot fields
(function () {
    'use strict';

    var inputs = document.querySelectorAll('.control-form');

    Array.prototype.slice.call(inputs)
        .forEach(function (input) {
            input.style.display = 'none';
        });
})();

// form validation

// Disable form submission if there are invalid fields

var form = document.getElementById('sendMessageForm');

form.addEventListener('submit', function (event) {
    if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
    }

    // Apply custom Bootstrap validation styles to all the forms
    form.classList.add('was-validated');
}, false);

// end form validation

// send message
function sendMessage() {

    $("#sendMessageForm").submit(function (e) {
        e.preventDefault();
        e.stopImmediatePropagation();

        // if (validateForm()) {
        $("#spinner").show();
        $("#send-button-text").html('');
        var form = $(this);
        var url = form.attr('action');

        $.ajax({
            type: "POST",
            url: "/contact",
            data: form.serialize(),
            success: function (data) {
                if (data === "SEND_EMAIL_SUCCESS") {
                    Swal.fire({
                        title: '<strong class="text-dark">Yay!</strong>',
                        icon: 'success',
                        toast: true,
                        position: 'top-end',
                        html: '<p class="lead text-dark">Your message has been submitted successfully. I' + "'" + 'll be getting in touch with you shortly.</p>',
                        confirmButtonText: '<i class="bi bi-hand-thumbs-up-fill"></i> Great'
                    });
                    clearInputs();
                    $("#spinner").hide();
                    $("#send-button-text").html('Send');

                    // Remove Bootstrap validation styles
                    var form = document.getElementById('sendMessageForm');
                    form.classList.remove('was-validated');

                } else if (data === "SEND_EMAIL_FAILED") {
                    Swal.fire({
                        title: '<strong class="text-dark">Uh oh!</strong>',
                        icon: 'error',
                        toast: true,
                        position: 'top-end',
                        html: '<p class="lead text-dark">Could you try that again? It seems your message was lost somewhere in the ether before reaching me.</p>',
                        confirmButtonText: 'Try again'
                    });
                    $("#spinner").hide();
                    $("#send-button-text").html('Send');
                } else if (data === "") {
                    Swal.fire({
                        title: '<strong class="text-dark">Uh oh!</strong>',
                        icon: 'error',
                        toast: true,
                        position: 'top-end',
                        html: '<p class="lead text-dark">Could you try that again? It seems some information is missing.</p>',
                        confirmButtonText: 'Try again'
                    });
                    $("#spinner").hide();
                    $("#send-button-text").html('Send');
                } else {
                    Swal.fire({
                        title: '<strong class="text-dark">Uh oh!</strong>',
                        icon: 'error',
                        toast: true,
                        position: 'top-end',
                        html: '<p class="lead text-dark">Could you try that again? It seems your message was lost somewhere in the ether before reaching me.</p>',
                        confirmButtonText: 'Try again'
                    });
                    $("#spinner").hide();
                    $("#send-button-text").html('Send');
                }
            },
            error: function (error) {
                Swal.fire({
                    title: '<strong class="text-dark">Uh oh!' + error + '</strong>',
                    icon: 'error',
                    toast: true,
                    position: 'top-end',
                    html: '<p class="lead text-dark">The server' + "'" + 's acting up again. Could you shoot me an email instead? Thanks.</p>',
                    confirmButtonText: 'Try again'
                });
                $("#spinner").hide();
                $("#send-button-text").html('Send');
            }
        });
    });
}
// send message