<script type="text/javascript">
    const minus = document.getElementById('minus')
    const plus = document.getElementById('plus')
    const quantity = document.getElementById('quantity')

    function deduct(){
        var currentquantity = quantity.value
        var newquantity = currentquantity - 1
        if(currentquantity == 1){
            var newquantity = 1 
        }else{
            var newquantity = currentquantity - 1
        }
        quantity.setAttribute('value', newquantity)
    }

    function add(){
        var currentquantity = parseInt(quantity.value)
        var newquantity = currentquantity + 1
        quantity.setAttribute('value', newquantity)
    }

</script>
<script type="text/javascript" src="{{ asset('storecontent/themes/script/product_image_zoom.js') }}"> </script>
<script type="text/javascript" src="{{ asset('storecontent/themes/script/product_filter.js') }}"> </script>
<script type="text/javascript" src="{{ asset('storecontent/themes/script/product_variation.js') }}"> </script>
<script type="text/javascript" src="{{ asset('storecontent/themes/script/product_rating.js') }}"> </script>