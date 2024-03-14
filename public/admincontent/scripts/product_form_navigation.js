$(document).ready(function(){
    $('#go_to_product_variant_btn').click(function(){
        
        $('#page_details').css('display', 'none')
        $('#product_form_details').css('display', 'none')
        $('#product_form_variation').css('display', 'block')
    });
    $('#got_to_product_form_details').click(function(){
        
        $('#page_details').css('display', 'block')
        $('#product_form_details').css('display', 'grid')
        $('#product_form_variation_pricing').css('display', 'none')
    });

    $('#got_to_product_form_variation_pricing').click(function(){
        
        $('#page_details').css('display', 'none')
        $('#product_form_details').css('display', 'none')
        $('#product_form_variation').css('display', 'none')
        $('#product_form_variation_pricing').css('display', 'block')
        $('.collection_form').css('display', 'none')
        $('#add_variations').css('display', 'none')
        $('#variation_table').css('display', 'block')
        
    });

    $('#got_back_to_product_form_variation_pricing').click(function(){
        
        $('#page_details').css('display', 'none')
        $('#product_form_details').css('display', 'none')
        $('#product_form_variation').css('display', 'block')
        $('#product_form_variation_pricing').css('display', 'none')
        $('.collection_form').css('display', 'none')
    });

    $('button.got_back_to_product_form_details').click(function(){
        
        $('#page_details').css('display', 'block')
        $('#product_form_details').css('display', 'grid')
        $('#product_form_variation').css('display', 'none')
        $('#product_form_variation_pricing').css('display', 'none')
        $('.collection_form').css('display', 'none')
    });
    
   
    $('#selectProductCategorybtn').click(function(){
        $('#page_details').css('display', 'none')
        $('#product_form_details').css('display', 'none')
        $('#product_form_variation').css('display', 'none')
        $('#product_form_variation_pricing').css('display', 'none')
        $('.collection_form').css('display', 'block')
    });
    
});