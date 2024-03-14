
$(document).ready(function(){
    let noOfClicks = 1
    $('button.edit_variation').click(function(){
        $('#product_form_variation').css('display', 'none')
        $('#variation_table').css('display', 'none')
        $('div.add_variant_unique_prices').css('display', 'block')
        $('button#save_product_variant_pricing').css('display', 'none')
        $('button#edit_product_variant_pricing').css('display', 'block')
    });

    $('button.add_variation').click(function(){
        $('#product_form_variation').css('display', 'none')
        $('#variation_table').css('display', 'none')
        $('div.add_variant_unique_prices').css('display', 'block')
        $('button#save_product_variant_pricing').css('display', 'block')
        $('button#edit_product_variant_pricing').css('display', 'none')

    });

    // save variations entered
    $('button.save_product_variant_pricing').click(function(){
        
        let variationBody = $('#variation')
        let variation_1 = $('#variation_1')
        let noOfVariations = variationBody.attr('variation_number')
        let color = $('.pcolor').val()
        let size = $('.size').val()
        let price = $('.price').val()
        let discount_price = $('.discount_price').val()
        let quantity = $('.quantity').val()
        let dimension = $('.dimension').val()
        let weight = $('.weight').val()
        
        // validate data
        if(color == '' && size == '' && dimension =='' ){
            alert('If this product have no different colors or sizes or dimension, you do not need to enter a variation')
            $('#page_details').css('display', 'block')
            $('#product_form_details').css('display', 'grid')
            $('#product_form_variation_pricing').css('display', 'none')
        }else if(price == '' && quantity == ''){
            alert('Nothing to save')
            $('#product_form_variation').css('display', 'none')
            $('#variation_table').css('display', 'block')
            $('div.add_variant_unique_prices').css('display', 'none')
            $('button#save_product_variant_pricing').css('display', 'none')
            $('button#edit_product_variant_pricing').css('display', 'none')
        }else if(price == '' || quantity == ''){
            alert('Please enter a price and a quantity to save this variation')

        }else if( !Number(price)){
            alert('Please enter only digits for price')

        }else if( !Number(quantity)){
            alert('Please enter only digits for quantity')

        }else if( discount_price != '' && !Number(discount_price)){
            alert('Please enter only digits for discount price')

        }else{

            if(noOfVariations == 0){
                
                variation_1.find('button.edit_variation').attr('number', '1')

                variation_1.find('input.product_color_input').val(color)
                variation_1.find('span.product_color').text(color) //color
                variation_1.find('input.product_color_input').attr('name', `product_variation[1][color]`) //color


                variation_1.find('input.product_size_input').val(size)
                variation_1.find('span.product_size').text(size) // size
                variation_1.find('input.product_size_input').attr('name', `product_variation[1][size]`)

                variation_1.find('input.product_price_input').val(price)
                variation_1.find('span.product_price').text(price) // price
                variation_1.find('input.product_price_input').attr('name', `product_variation[1][price]`)

                variation_1.find('input.product_discount_price_input').val(discount_price)
                variation_1.find('span.product_discount_price').text(discount_price ?? '₦0.00') // discount price
                variation_1.find('input.product_discount_price_input').attr('name', `product_variation[1][discount_price]`) // discount price

                variation_1.find('input.product_quantity_input').val(quantity) 
                variation_1.find('span.product_quantity').text(quantity) //quantity
                variation_1.find('input.product_quantity_input').attr('name', `product_variation[1][quantity]`) //quantity

                variation_1.find('input.product_weight_input').val(weight)
                variation_1.find('span.product_weight').text(weight ?? '0kg')
                variation_1.find('input.product_weight_input').attr('name', `product_variation[1][weight]`)

                variation_1.find('input.product_dimension_input').val(dimension)
                variation_1.find('span.product_dimension').text(dimension ?? '0 x 0 x 0')
                variation_1.find('input.product_dimension_input').attr('name', `product_variation[1][dimension]`)

                variationBody.attr('variation_number', '1')

            }else{
                noOfClicks++
                let next_variation = variation_1.clone()
                next_variation.attr('id', `variation_${noOfClicks}`)
                next_variation.find('button.edit_variation').attr('number', `${noOfClicks}`)

                next_variation.find('input.product_color_input').val(color)
                next_variation.find('span.product_color').text(color) //color
                next_variation.find('input.product_color_input').attr('name', `product_variation[${noOfClicks}][color]`) //color

                next_variation.find('input.product_size_input').val(size)
                next_variation.find('span.product_size').text(size) // size
                next_variation.find('input.product_size_input').attr('name', `product_variation[${noOfClicks}][size]`)

                next_variation.find('input.product_price_input').val(price)
                next_variation.find('span.product_price').text(price) // price
                next_variation.find('input.product_price_input').attr('name', `product_variation[${noOfClicks}][price]`)

                next_variation.find('input.product_discount_price_input').val(discount_price)
                next_variation.find('span.product_discount_price').text(discount_price ?? '₦0.00') // discount price
                next_variation.find('input.product_discount_price_input').attr('name', `product_variation[${noOfClicks}][discount_price]`) // discount price

                next_variation.find('input.product_quantity_input').val(quantity) 
                next_variation.find('span.product_quantity').text(quantity) //quantity
                next_variation.find('input.product_quantity_input').attr('name', `product_variation[${noOfClicks}][quantity]`) //quantity

                next_variation.find('input.product_weight_input').val(weight)
                next_variation.find('span.product_weight').text(weight ?? '0kg')
                next_variation.find('input.product_weight_input').attr('name', `product_variation[${noOfClicks}][weight]`)

                next_variation.find('input.product_dimension_input').val(dimension)
                next_variation.find('span.product_dimension').text(dimension ?? '0 x 0 x 0')
                next_variation.find('input.product_dimension_input').attr('name', `product_variation[${noOfClicks}][dimension]`)
                
                variationBody.attr('variation_number', `${noOfClicks}`)
                next_variation.appendTo(variationBody)
            }
            
            // 
            $('#product_form_variation').css('display', 'none')
            $('#variation_table').css('display', 'block')
            $('div.add_variant_unique_prices').css('display', 'none')
        }
        console.log(noOfVariations)






        
        
    });

    
});