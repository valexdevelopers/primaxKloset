$(document).ready(function(){

    // on load set values to first element
    let firstElement = $('.single_variant')
    // let firstElement = Element[0]
    // console.log(Element)
    let color = firstElement.find('.color').val()
    let size = firstElement.find('.size').val()
    let price = firstElement.find('.price').val()
    let discount_price = firstElement.find('.discount_price').val()
    let variation_id = firstElement.find('.variation_id').val()
    if(color == '' && size == ''){
        $('#display_variant').text('')
    }else if(color == '' && size != ''){
        $('#display_variant').text(`${size}`)
    }else if(color != '' && size == ''){
        $('#display_variant').text(`${color}`)
    }else{
        $('#display_variant').text(`${color}-${size}`) 
    }


    if(discount_price == ''){
       
        
        $('#display_price').text(`${Number(price).toLocaleString('en-US', {
            style: 'currency',
            currency: 'NGN',
          })}`
          );
        $('#discount').text('')
    }else{
        $('#discount').text(`${Number(price).toLocaleString('en-US', {
            style: 'currency',
            currency: 'NGN',
          })}`
          );

        $('#display_price').text(`${Number(discount_price).toLocaleString('en-US', {
            style: 'currency',
            currency: 'NGN',
          })}`
          );
    }
    $('.product_variation_id').val(`${variation_id}`)

    // on select set values
    $('.product_variant_input').click(function(){
        let parent = $(this).parent('.single_variant')
        let color = parent.find('.color').val()
        let size = parent.find('.size').val()
        let price = parent.find('.price').val()
        let discount_price = parent.find('.discount_price').val()
        let variation_id = parent.find('.variation_id').val()

        if(color == '' && size == ''){
            $('#display_variant').text('')
        }else if(color == '' && size != ''){
            $('#display_variant').text(`${size}`)
        }else if(color != '' && size == ''){
            $('#display_variant').text(`${color}`)
        }else{
            $('#display_variant').text(`${color}-${size}`) 
        }

        if(discount_price == ''){
       
        
            $('#display_price').text(`${Number(price).toLocaleString('en-US', {
                style: 'currency',
                currency: 'NGN',
              })}`
              );
            $('#discount').text('')
        }else{
            $('#discount').text(`${Number(price).toLocaleString('en-US', {
                style: 'currency',
                currency: 'NGN',
              })}`
              );
    
            $('#display_price').text(`${Number(discount_price).toLocaleString('en-US', {
                style: 'currency',
                currency: 'NGN',
              })}`
              );
        }
        $('.product_variation_id').val(`${variation_id}`)
        
        
        
        
        
    })



    // alternation product details on product page
    $('.product_description_header').click(function(){
        $('.product_description_text').css('display', 'block')
        $('.Shipping_returns_text').css('display', 'none')
        $('.product_reviews').css('display', 'none')

    })

    $('.Shipping_returns_header').click(function(){
        $('.product_description_text').css('display', 'none')
        $('.Shipping_returns_text').css('display', 'block')
        $('.product_reviews').css('display', 'none')
    })

    $('.product_reviews_header').click(function(){
        $('.product_description_text').css('display', 'none')
        $('.Shipping_returns_text').css('display', 'none')
        $('.product_reviews').css('display', 'block')
    })
});