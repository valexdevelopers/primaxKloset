<meta charset="utf-8">
<meta name="Author" content="Egerega Virtue">
<meta name="description" content="An online website customizable template">
<meta name="keywords" content="E-commerce Shopping online-store">
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="viewport" content="" id="viewport">
<!--bootstrap css and js -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<!--Custom styles-->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<!-- custom styles -->
<link href="{{ asset('storecontent/themes/css/mediascreens.css') }}" rel="stylesheet" >
<link href="{{ asset('storecontent/themes/css/constants.css') }}" rel="stylesheet" >
<link href="{{ asset('storecontent/themes/css/standard.css') }}" rel="stylesheet" >
<script type="text/javascript">
    var vw = window.screen.width;
    
   
    var viewport = document.getElementById("viewport");

    if(vw > 1000){
         viewport.setAttribute('content', 'width=1200 inital-scale=1.0');

    }else if(vw > 700 && vw < 1000){
         viewport.setAttribute('content', 'width=1100 inital-scale=1.0');
         
    }else if(vw > 350 && vw < 700 ){
        viewport.setAttribute('content', 'width=1000 inital-scale=1.0');
    
   }else{
         viewport.setAttribute('content', 'width=400 inital-scale=1.0');
    }
    
</script>