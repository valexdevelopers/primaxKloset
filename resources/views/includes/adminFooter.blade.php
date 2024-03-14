<script type="text/javascript">  
    function showChildList(childname){
        var childList = document.getElementById(childname)
        childList.classList.remove("class_list_before_click");
        childList.setAttribute('class', 'child-list' )
    }

</script>
<script type="text/javascript" src="{{ asset('admincontent/scripts/search.js') }}"></script>
<script type="text/javascript" src="{{ asset('admincontent/scripts/product-form.js') }}"></script>
<script type="text/javascript" src="{{ asset('admincontent/scripts/menu.js') }}"></script>
<script type="text/javascript" src="{{ asset('admincontent/scripts/imagepreview.js') }}"></script>
<script type="text/javascript" src="{{ asset('admincontent/scripts/bannerImagePreview.js') }}"></script>
<script type="text/javascript" src="{{ asset('admincontent/scripts/edit_product.js') }}"></script>
{{-- <script type="text/javascript" src="{{ asset('admincontent/scripts/sliders.js') }}"></script> --}}
<script type="text/javascript" src="{{ asset('admincontent/scripts/edit_product.js') }}"></script>
<script type="text/javascript" src="{{ asset('admincontent/scripts/product_form_navigation.js') }}"></script>
<script type="text/javascript" src="{{ asset('admincontent/scripts/product_variation_prices.js') }}"></script>
<script type="text/javascript" src="{{ asset('admincontent/scripts/product_form_data.js') }}"></script>
<script type="text/javascript" src="{{ asset('admincontent/scripts/product_options.js') }}"></script>