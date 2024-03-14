$(document).ready(function(){
    
    $('#save_product').click(function(){;
      let product_form  = $('#product_form')

        let FormData = product_form.serialize();
        console.log(FormData)
    });
});