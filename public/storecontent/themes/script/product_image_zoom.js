$(document).ready(function(){
    $('#product_image_slides').on({

        mouseenter:  function(e){    
            $('#product_image_slides').children('.imageforslide').css({
                'transform' : 'translateY(0)',
                'transform' : 'scale(1.5)',
            })
        },
        mousemove:  function(e){
           $('#product_image_slides').children('.imageforslide').css({
               'transform-origin' : ((e.pageX - $(this).offset().left) / $(this).width()) * 100 + '% ' + ((e.pageY - $(this).offset().top) / $(this).height()) * 100 +'%' 
            })
        },
        mouseleave:  function(e){    
            $('#product_image_slides').children('.imageforslide').css({
                'transform' : 'translateY(0)',
                'transform' : 'scale(1)',
            })
        },
    })
})