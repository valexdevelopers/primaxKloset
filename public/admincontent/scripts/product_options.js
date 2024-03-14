$(document).ready(function() {
    let btnOptionClicks = 1
    $('#create-option-btn').click(function(){
        btnOptionClicks++
        if(btnOptionClicks <=4){
            // let optionCloned = $('#options-for-product-details-1').clone()
            $(`#options-for-product-details-${btnOptionClicks}`).css('display', 'block')
            //  set id and for the select option variant
            // optionCloned.find('select#select_variant_1').attr('id', `select_variant_${btnOptionClicks}`)
            // optionCloned.find('select#select_variant_1').attr('id', `select_variant_${btnOptionClicks}`)
            // // set value and id for input button
            // optionCloned.find('input#variant_1').val('Enter Value')
            // optionCloned.find('input#variant_1').attr('id', `variant_${btnOptionClicks}`)
            // optionCloned.appendTo('#product-variant');
        }
        
       
    });

    // remove product option
    $('.remove_product_option').click(function(){
        let variantNo = $(this).attr('number')
        btnOptionClicks --
        $(`#options-for-product-details-${variantNo}`).css('display', 'none')
    });
        
   
    $('.select_variant').change(function(){
        let VariantNo = $(this).attr('number')
        let variantOption = $(this).val()
        let optionParent =$(`#options-for-product-details-${VariantNo}`)
        if(variantOption == 'color' || variantOption == 'size'){
            
            optionParent.find('#product-variant-child').css('display', 'block')
            optionParent.find('.create-option-value-btn').attr('product_attribute', `${variantOption}`)
            optionParent.find('.option-value').attr('name', `product_${variantOption}_1`)
            optionParent.find('.option-value').attr('class', `option-value form-control product_${variantOption}`)
            optionParent.find('#create-option-value-btn').text(`Add ${variantOption} Value`)
            optionParent.find('#create-option-value-btn').attr('option_name', `${variantOption}`)
            optionParent.find('#label-option-value').text(`${variantOption} Value`)
            optionParent.find(`#variant_${VariantNo}`).css('display', 'none')
            optionParent.find(`#variant_${VariantNo}`).attr('name', '')
        }else{
            optionParent.find('#product-variant-child').css('display', 'none') 
            optionParent.find(`#variant_${VariantNo}`).css('display', 'block')
            optionParent.find(`#variant_${VariantNo}`).attr('name', `product_${variantOption}`) 
            optionParent.find(`#variant_${VariantNo}`).attr('class', `input_variant form-control appearance-text-field product_${variantOption}`) 
        }
        
    });

    // generate form fields based on product variant selection
    let sizeOption = 1;
    let colorOption = 1;
    
    $('.create-option-value-btn').click(function(){
        
        let noOfVariant;
        let variantOption = $(this).attr('option_name')
        let parentElement = $(this).parents('section.product-variant-class')
        let appendBody =  $(parentElement).find('.product-variant-child-div-child')
        let newOptionValue = appendBody.find('#option-value-1').clone()
        if(variantOption == 'color'){
            colorOption++
            newOptionValue.attr('id',`option-value-${colorOption}` )
            newOptionValue.find('.remove-product-variant').attr('number', colorOption)
            newOptionValue.find('.option-value').attr('name', `product_${variantOption}_${colorOption}`)
            newOptionValue.find('.option-value').attr('class', `option-value form-control product_${variantOption}`)
            newOptionValue.find('.option-value').val('')
            newOptionValue.appendTo(appendBody)
        }else if( variantOption == 'size'){
            sizeOption++
            newOptionValue.attr('id',`option-value-${sizeOption}` )
            newOptionValue.find('.remove-product-variant').attr('number', sizeOption)
            newOptionValue.find('.option-value').attr('name', `product_${variantOption}_${sizeOption}`)
            newOptionValue.find('.option-value').attr('class', `option-value form-control product_${variantOption}`)
            newOptionValue.appendTo(appendBody)
        }
      
        
    });


    $('.product-variant-child-div-child').on('click', '.remove-product-variant', function(){
        let variantNo = $(this).attr('number')
        if(variantNo == 1){

        }else{
            $(this).parents('.variant-value-group').remove()
        }
        
        
    });
    
});