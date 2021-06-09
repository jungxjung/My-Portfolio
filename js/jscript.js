//Make sure refresh won't resent the form
if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}

particlesJS(
    "particles-js", 
    {"particles":
        {"number":
            {"value":8,"density":
                {"enable":true,
                "value_area":800}
            },
            "color":{"value":"#83ccd2"},
            "shape":{"type":"circle",
                "stroke":{"width":0,"color":"#000"},
                "polygon":{"nb_sides":12},
                "image":{"src":"img/github.svg","width":100,"height":100}
            },
            "opacity":{"value":0.32,
                "random":true,
                "anim":{"enable":false,"speed":3,"opacity_min":0.1,"sync":false}
            },
            "size":{"value":160,
                "random":true,
                "anim":{"enable":true,"speed":5,"size_min":40,"sync":false}
            },
            "line_linked":{"enable":false,"distance":200,"color":"#ffffff","opacity":1,"width":2},
            "move":{"enable":true,
                "speed":3,
                "direction":"none",
                "random":false,
                "straight":false,
                "out_mode":"bounce",
                "bounce":false,
                "attract":{"enable":true,"rotateX":600,"rotateY":1200}
            }
        },
      "interactivity":{
          "detect_on":"canvas",
          "events":{
              "onhover":{"enable":true,"mode":"bubble"},
              "onclick":{"enable":false,"mode":"push"},
              "resize":true},
              "modes":{
                  "grab":{"distance":400,
                  "line_linked":{"opacity":1}},
                  "bubble":{"distance":400,"size":40,"duration":2,
                  "opacity":0.4544532359504974,"speed":3},
                  "repulse":{"distance":200,"duration":0.4},
                  "push":{"particles_nb":4},
                  "remove":{"particles_nb":2}}},
                  "retina_detect":true
                }
    );


//Shrink the navigation menu on scroll
var w = $(window).width();
if (w < 800) {
    $(".nav-item").click(function () {
        $("#navbarNav").hide();
    });

    $(".navbar-toggler").click(function () {
        $("#navbarNav").show();
    });

    window.onscroll = function () {
        scrollFunction();
    };
}

// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("jung").height = "35";
    } else {
        document.getElementById("jung").height = "70";
    }
}

//json files
var zhJson = "content/zh.json";
var enJson = "content/en.json";
var lang = enJson;

$(document).ready(function () {
    loadContent();
});

//Based on the chosen language, populate the page with respective json file
function loadContent() {
    $.getJSON(lang, function (data) {
        //console.log(data.landing['zh']);
        //Navigation links
        for (let i = 0; i < $(".nav-link").length; i++) {
            $(".nav-link")[i].innerHTML = data.header[i];
        }

        //Landing taxt
        $("#landingP")[0].innerHTML = data.landing;

        //Education
        var schools = data.education.school;
        $("#edu-heading")[0].innerHTML = data.education.heading;
        for (let i = 0; i < schools.length; i++) {
            $(".school")[i].innerHTML = data.education.school[i].description;
        }

        //experience
        $("#exp-heading")[0].innerHTML = data.experience.heading;
        //experience-work
        $("#exp-work")[0].innerHTML = data.experience.work.heading;
        //experience-place
        var jobs = data.experience.work.jobs;
        for (let i = 0; i < jobs.length; i++) {
            $(".work-title")[i].innerHTML = data.experience.work.jobs[i].title;
            $(".work-place")[i].innerHTML = data.experience.work.jobs[i].place;

            var duties = data.experience.work.jobs[i].duty;
            var dutiesHTML = "";
            for (let k = 0; k < duties.length; k++) {
                dutiesHTML += "<li>" + duties[k] + "</li>";
            }
            $(".work-duty")[i].innerHTML = dutiesHTML;
        }

        //experience-awards
        $("#exp-awards")[0].innerHTML = data.experience.awards.heading;
        var awardsItems = data.experience.awards.awardsItem;
        var awardsHTML = "";
        for (let i = 0; i < awardsItems.length; i++) {
            awardsHTML += "<li>" + awardsItems[i] + "</li>";
        }
        $("#awards-list")[0].innerHTML = awardsHTML;

        //experience-presentation
        $("#exp-presentation")[0].innerHTML = data.experience.presentation.heading;
        var presentationItems = data.experience.presentation.presentationItem;
        for (let i = 0; i < presentationItems.length; i++) {
            $(".presentation")[i].innerHTML = presentationItems[i];
        }

        //experience-certificate
        $("#exp-certification")[0].innerHTML = data.experience.certificate.heading;
        var certificateItems = data.experience.certificate.certificateItem;
        var certificateHTML = "";
        for (let i = 0; i < certificateItems.length; i++) {
            certificateHTML += "<li>" + certificateItems[i] + "</li>";
        }
        $("#certificate")[0].innerHTML = certificateHTML;

        //Projects
        $("#project-heading")[0].innerHTML = data.project.heading;
        var projects = data.project.projects;
        for (let i = 0; i < projects.length; i++) {
            $(".project-title")[i].innerHTML = projects[i].title;
            $(".project-description")[i].innerHTML = projects[i].description;
        }
        $("#miscA")[0].innerHTML=data.project.misc.heading;
        var miscWorks = data.project.misc.miscWork;
        $('.miscWork p').remove();
        $('.miscWork i').remove();
        $('.miscWork a').remove();
        for(let i=0; i < miscWorks.length; i++){
            $('.misc-title')[i].innerHTML = miscWorks[i].title;
            var e = document.createElement('div');
            e.innerHTML = miscWorks[i].description;
            $('.miscWork')[i].append(e);
        }
        if($('#misc').hasClass('show')){
            $('.fa-caret-down').removeClass('fa-caret-down').addClass('fa-caret-up');
        }else{
            $('.fa-caret-up').removeClass('fa-caret-up').addClass('fa-caret-down');
        }


        //About
        $("#about-heading")[0].innerHTML = data.about.heading;
        $("#about-description")[0].innerHTML = data.about.description;

        //contact
        $("#contact-heading")[0].innerHTML = data.contact.heading;
        $("#contact-msg")[0].innerHTML = data.contact.message;
        // var formLabels = data.contact.formLabel;
        // for (let i = 0; i < formLabels.length; i++) {
        //     $(".contact-label")[i].innerHTML = formLabels[i];
        // }
        // $("#sendBtn")[0].value = data.contact.sendBtn;
    });
}

//language switch button
function changeL() {
    var btnL = document.getElementById("btnL");
    if (lang == enJson) {
        lang = zhJson;
        btnL.innerHTML = "English";
    } else if (lang == zhJson) {
        lang = enJson;
        btnL.innerHTML = "中文";
    }
    loadContent();
}

//misc arrow animation
$('#miscA').click(function(){
    if($('#miscArrow').hasClass('fa-caret-down')){
        $('.fa-caret-down').removeClass('fa-caret-down').addClass('fa-caret-up');
    }else if($('#miscArrow').hasClass('fa-caret-up')){
        $('.fa-caret-up').removeClass('fa-caret-up').addClass('fa-caret-down');
    }    
})


// if($('#misc').hasClass('show')){
//     $('.fa-caret-down').removeClass('fa-caret-down').addClass('fa-caret-up');
// }else{
//     $('.fa-caret-up').removeClass('fa-caret-up').addClass('fa-caret-down');
// }
// myCollapsible.addEventListener('shown.bs.collapse', () => {
//     if($('#miscArrow').hasClass('fa-caret-down')){
//         $('.fa-caret-down').removeClass('fa-caret-down').addClass('fa-caret-up');
//     }
// })

// myCollapsible.addEventListener('hidden.bs.collapse', () => {
//     if($('#miscArrow').hasClass('fa-caret-up')){
//         $('.fa-caret-up').removeClass('fa-caret-up').addClass('fa-caret-down');
//     }    
// })

