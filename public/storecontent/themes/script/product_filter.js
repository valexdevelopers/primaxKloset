$(document).ready(function(){
    var OrderByAdditionalQuota = '';
    
    $.ajax({
        type : 'Get',
        url : 'http://127.0.0.1:8000/all_product',
        beforeSend : function(){
            $('#product_preloader').css('display', 'grid')
        },
        success : function(result){
            $('#product_container').html(result)
        },
        complete : function(){
            $('#product_preloader').css('display', 'none')
        }
    })
    

  
     // check for change in inital state
     $('input[type=checkbox].filterProducts').change(function (){
        // check if changes was the checkbox beign checked or being unchecked
        if(this.checked){
            filterQuota =  $(this).val()
            if(filterQuota == 'all'){
                // loaded with a get request
                $.ajax({
                    type : 'Get',
                    url : 'http://127.0.0.1:8000/all_product',
                    beforeSend : function(){
                        $('#product_preloader').css('display', 'grid')
                    },
                    success : function(result){
                        $('#product_container').html(result)
                    },
                    complete : function(){
                        $('#product_preloader').css('display', 'none')
                    }
                })
            }else{

                OrderByAdditionalQuota = filterQuota
                $.ajax({
                    type : 'Post',
                    url : 'http://127.0.0.1:8000/filter_product',
                    data : {
                        filterBy : filterQuota,
                         _token : $('#csrf').val(),
                    },
                    beforeSend : function(){
                        $('#product_preloader').css('display', 'grid')
                    },
                    success : function(result){
                        $('#product_container').html(result)
                    },
                    complete : function(){
                        $('#product_preloader').css('display', 'none')
                    }
                })
                
            }
            
            
            
        }else{
            $.ajax({
                type : 'Get',
                url : 'http://127.0.0.1:8000/all_product',
                beforeSend : function(){
                    $('#product_preloader').css('display', 'grid')
                },
                success : function(result){
                    $('#product_container').html(result)
                },
                complete : function(){
                    $('#product_preloader').css('display', 'none')
                }
            })
        }
        
    })


    // order by

    $('input[type=checkbox].orderby').change(function (){
        // check if changes was the checkbox beign checked or being unchecked
        //console.log(OrderByAdditionalQuota)
        if(this.checked ){
            OrderQuota =  $(this).val()


            $.ajax({
                url : 'http://127.0.0.1:8000/order_by',
                data : {
                    filterBy : OrderQuota,
                     _token : $('#csrf').val(),
                    additionalQuota : OrderByAdditionalQuota,
                },
                beforeSend : () => {
                    $('#product_preloader').css('display', 'grid')
                },
                success : (result) =>{
                    $('#product_container').html(result)
                },
                complete : () => {
                    $('#product_preloader').css('display', 'none')
                },
            })
           
        }
        
    })
})