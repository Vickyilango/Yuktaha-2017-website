/* =Main INIT Function
-------------------------------------------------------------- */
function initializeSite() {
    "use strict";

    // Init effect 
    $('#scene').parallax();

    // Center and outline
    (function() {
        function centerInit(){
            var hero            = $('#hero'),
                sphere          = $('.sphere'),
                sphereMargin    = ($(window).height() - sphere.height()) / 2,
                heroContent     = $('.hero-content'),
                contentMargin   = ($(window).height() - heroContent.height()) / 2;

            hero.css ({
                height : $(window).height() + "px"
            });

            sphere.css({
                "margin-top" : sphereMargin + "px"
            });

            heroContent.css({
                "margin-top" : contentMargin + "px"
            });
        }

        $(document).ready(centerInit);
        $(window).resize(centerInit);
    })();

    // Local scroll
    $('#hero').localScroll({
        duration:1000
    });

    // Light box init
    $('.lightbox').magnificPopup({
        type: 'image',
         mainClass: 'mfp-with-zoom mfp-fade',

        zoom: {
            enabled: true,

            duration: 300,
            easing: 'ease-in-out',

            opener: function(openerElement) {
                return openerElement.is('img') ? openerElement : openerElement.find('img');
            }
        }
    });

    // Contact Form
    $(function() {
        $('#contact').validate({

            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                email: {
                    required: true,
                    email: true
                },
                message: {
                    required: true
                }
            },

            messages: {
                name: {
                    required: "come on, you have a name don't you?",
                    minlength: "your name must consist of at least 2 characters"
                },
                email: {
                    required: "no email, no message"
                },
                message: {
                    required: "um...yea, you have to write something to send this form.",
                    minlength: "thats all? really?"
                }
            },
            submitHandler: function(form) {
                $(form).ajaxSubmit({
                    type:"POST",
                    data: $(form).serialize(),
                    url:"contact.php",
                    success: function() {
                        $('#contact :input').attr('disabled', 'disabled');
                        $('#contact').fadeTo( "slow", 0.15, function() {
                            $(this).find(':input').attr('disabled', 'disabled');
                            $(this).find('label').css('cursor','default');
                            $('#success').fadeIn();
                        });
                    },
                    error: function() {
                        $('#contact').fadeTo( "slow", 0.15, function() {
                            $('#error').fadeIn();
                        });
                    }
                });
            }
        });
    });

    // MailChimp Integration
    ajaxMailChimpForm($("#subscribe-form"), $("#subscribe-result"));
    // Turn the given MailChimp form into an ajax version of it.
    // If resultElement is given, the subscribe result is set as html to
    // that element.
    function ajaxMailChimpForm($form, $resultElement){
            // Hijack the submission. We'll submit the form manually.
            $form.submit(function(e) {
                e.preventDefault();
                if (!isValidEmail($form)) {
                    var error =  "A valid email address must be provided.";
                    $resultElement.hide();
                    $resultElement.html(error);
                    $resultElement.fadeIn();
                    $resultElement.removeClass('notification-success');
                    $resultElement.addClass('notification-error');
                } else {
                    submitSubscribeForm($form, $resultElement);
                }
            });
        }
        // Validate the email address in the form
        function isValidEmail($form) {
            // If email is empty, show error message.
            // contains just one @
            var email = $form.find("input[type='email']").val();
            if (!email || !email.length) {
                return false;
            } else if (email.indexOf("@") == -1) {
                return false;
            }
            return true;
        }
        // Submit the form with an ajax/jsonp request.
        // Based on http://stackoverflow.com/a/15120409/215821
        function submitSubscribeForm($form, $resultElement) {
            $.ajax({
                type: "GET",
                url: $form.attr("action"),
                data: $form.serialize(),
                cache: false,
                dataType: "jsonp",
                jsonp: "c", // trigger MailChimp to return a JSONP response
                contentType: "application/json; charset=utf-8",
                error: function(error){
                    // According to jquery docs, this is never called for cross-domain JSONP requests
                },
                success: function(data){
                    if (data.result != "success") {
                        var message = data.msg || "Sorry. Unable to subscribe. Please try again later.";
                        if (data.msg && data.msg.indexOf("already subscribed") >= 0) {
                            message = "You're already subscribed. Thank you.";
                        }
                        $resultElement.hide();
                        $resultElement.html(message);
                        $resultElement.fadeIn();
                        $resultElement.removeClass('notification-error');
                        $resultElement.addClass('notification-success');
                    } else {
                        $resultElement.hide();
                        $resultElement.html("Thank you! You must confirm the subscription in your inbox.");
                        $resultElement.fadeIn();
                        $resultElement.removeClass('notification-error');
                        $resultElement.addClass('notification-success');
                    }
                }
            });
    }

};
/* END ------------------------------------------------------- */


/* =Document Ready Trigger
-------------------------------------------------------------- */
$(window).load(function(){

    initializeSite();

});
/* END ------------------------------------------------------- */


/* =Window Load Trigger
-------------------------------------------------------------- */
$(window).load(function(){

    //SKROLLR 
    if (Modernizr.touch) {
        skrollr.init().destroy();
    } else {   
        skrollr.init({
            forceHeight: false
        });  
    }

});
/* END ------------------------------------------------------- */