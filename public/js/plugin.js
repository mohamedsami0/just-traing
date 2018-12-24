$(document).ready(function () {

    'use strict';


    //start nav bar
    $(".navbar-nav li").on("click", function () {
        $(this).addClass("active").css('background', '#ff793f').siblings().removeClass("active").css('background', '#66007C');  
    });
    
    $(window).scroll(function () {

        if($(this).scrollTop() >=250){

            $('.up').fadeIn(500);
        }else{

            $('.up').fadeOut(500);
        }

    
    });
    $('.up').on('click', function() {

        $('html,body').animate({scrollTop: 0} ,1000);

    });
});

/*
    var json = {

        "firstName":"mohamed",
        "lastName":"ahmed",
        "myObject":{

            "age":"22"
        },
        "myArray":[
            "ahmed","mohamed","ibrahim","abuali"
        ]
    }
        console.log(json.myArray[1]);

        for(i in json.myArray){

            console.log(json.myArray[i]);
        }
*/
