$(document).ready(function (){
    var sliderSize = $('.product_card').length
    $('#product_slider').css('left', '0px')
    var sliderWidth = sliderSize * 250
    $('#product_slider').css('width', `${sliderWidth}px`)
    
    var leftClicks = 1

    // get class row width to calculate slider moves
    var viewableWidth =  $('.rows').css('width')
    viewableWidth = parseFloat(viewableWidth)

    // get no of showing product cards on screen width
    var sizeofProductCart =  parseFloat($('.product_card').css('width')) + 30
    var noOfShowingCards = viewableWidth/sizeofProductCart;
    var moves =  sliderSize - Math.floor(noOfShowingCards)
 

    $('#slide_left').click(function(){
        var currentLeftPosition = $('#product_slider').css('left');
        currentLeftPosition = parseFloat(currentLeftPosition)
        var maxLeftMove = (moves * 250) - 250
        if(currentLeftPosition >= -maxLeftMove){
            $('#product_slider').animate({
                left: '-=250px',
           });
        }
       
        
        
    });

    $('#slide_right').click(function(){
        var currentLeftPosition = $('#product_slider').css('left');
        currentLeftPosition = parseFloat(currentLeftPosition)
        if(currentLeftPosition < 0){
            $('#product_slider').animate({
                left: '+=250px',
           });
        }
       
        
        
    });
    
});