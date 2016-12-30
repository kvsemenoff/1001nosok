

$(document).ready(function(){
    $('a[name=modal]').click(function(e) {
        e.preventDefault();
        var id = $(this).attr('href');
        var maskHeight = $(document).height();
        var maskWidth = $(window).width();
        $('#mask').css({'width':maskWidth,'height':maskHeight});
        $('#mask').fadeTo("slow",0.8); 
        var winH = $(window).height();
        var winW = $(window).width();
        posTop = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement ||document.body.parentNode || document.body).scrollTop;
        $(id).css('top',  posTop+50);
        $(id).css('left', winW/2-$(id).width()/2);
        $(id).fadeIn(500); 
    });

    

     $('input[type=radio]').change(function() {
      
        var price = $(this).parent().next('.df-price').find('.df-price-d').html();
        $(this).parent().parent().parent().find('.hprice').val(price);

        var pare = $(this).parent().next('.df-price').find('.df-cur-pare').html();
        $(this).parent().parent().parent().find('.hpare').val(pare.substr(2));
    });

    $('input:radio').each(function () {
        
       
        if ($(this).prop('checked')) {
            var price = $(this).parent().next('.df-price').find('.df-price-d').html();
            $(this).parent().parent().parent().find('.hprice').val(price);

            var pare = $(this).parent().next('.df-price').find('.df-cur-pare').html();
            $(this).parent().parent().parent().find('.hpare').val(pare);
        }
    });

    $('a[name=tovar]').click(function(e) {
        e.preventDefault();
        var id = $(this).attr('href');
        var maskHeight = $(document).height();
        var maskWidth = $(window).width();
        $('#mask').css({'width':maskWidth,'height':maskHeight});
        $('#mask').fadeTo("slow",0.8); 
        var winH = $(window).height();
        var winW = $(window).width();
        posTop = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement ||document.body.parentNode || document.body).scrollTop;
        $(id).css('top',  posTop+50);
        $(id).css('left', winW/2-$(id).width()/2);
        $('#db-h-two').html($(this).parent().parent().parent().find('.df-tovar-name').html());
        $('#db-price-one').html($(this).parent().parent().parent().find('.hprice').val());
        $('#db-price-two').html($(this).parent().parent().parent().find('.hpare').val());
        $('#db-window-img').html($(this).parent().parent().parent().find('.df-tovar-picture').html());
        $(id).fadeIn(500); 
    });

    $('.window .dd-close').click(function (e) {
        e.preventDefault();
        $('#mask, .window').hide();
        $('.window').hide();
    }); 
      $('.window .dd-close2').click(function (e) {
        e.preventDefault();
        $('#mask, .window').hide();
        $('.window').hide();
    }); 
    $('#mask, .an-exit__krest').click(function () {
        $('#mask').hide();
        $('.window').hide();
    }); 
    

    var owl = $("#owl-carusel");

    owl.owlCarousel({

        loop:true,//Зацикливаем слайдер
        nav:true, //Навигация включена
        autoplay:false,//автозапуск
        smartSpeed:1000,//Время движения
        margin:0,    
        navText:['<span class="df-left"></span>','<span class="df-right"></span>'],
        responsive:{
            0:{
              items:1
          },       
          1000:{
              items:2
          },
          1248:{
              items:3
          }
      }

  });


 var owl = $(".owl-carusel-photos");

    owl.owlCarousel({

        loop:true,//Зацикливаем слайдер
        nav:true, //Навигация включена
        autoplay:false,//автозапуск
        smartSpeed:1000,//Время движения
        margin:0,    
        navText:['<span class="df-left"></span>','<span class="df-right"></span>'],
        responsive:{
            0:{
              items:1
          },       
          1000:{
              items:2
          },
          1248:{
              items:3
          }
      }

  });

    $(".phone").mask("+ 7 (999) 999 - 99 - 99?");

    $(".form1").submit(function() { 
        var tel = $(this).find('input[name="phone"]');
        var empty = false;
        if (tel.val() == ""){
            empty = true;
        }
        if (empty == true){
            tel.addClass("error-input");
            tel.focus();
        }else{
            var form_data = $(this).serialize(); 
            $.ajax({
                type: "POST", 
                url: "/sendmessage.php", 
                data: form_data,
                success: function() {
            
                    cleanTnanks(".form1");
                }
            });
        }
        return false;
    });
    $(".form2 a").click(function() { 
        var tel = $(".form2").find('input[name="phone"]');
        var empty = false;
        if (tel.val() == ""){
            empty = true;
        }
        if (empty == true){
            tel.addClass("error-input");
            tel.focus();
        }else{
            var form_data = $(".form2").serialize(); 
            $.ajax({
                type: "POST", 
                url: "/sendmessage.php", 
                data: form_data,
                success: function() {
                    cleanTnanks(".form2");
                }
            });
        }
        return false;
    });
    $(".form3 a").click(function() { 
        var tel = $(".form3").find('input[name="phone"]');
        var empty = false;
        if (tel.val() == ""){
            empty = true;
        }
        if (empty == true){
            tel.addClass("error-input");
            tel.focus();
        }else{
            var form_data = $(".form3").serialize(); 
            $.ajax({
                type: "POST", 
                url: "/sendmessage.php", 
                data: form_data,
                success: function() {
                    cleanTnanks(".form3");
                }
            });
        }
        return false;
    });
    function cleanTnanks(form){
        $('input[type="text"]').removeClass("error-input");
        $("input[type=text], textarea").val("");
        $('.window').hide();
        location = "thanks.php";
    };

});


