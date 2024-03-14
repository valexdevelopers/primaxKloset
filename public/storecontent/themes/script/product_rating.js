$(document).ready(function(){
    let parentRating = $('#star_rating')
    let star1 = $('#star_for_rating1')
    let star2 = $('#star_for_rating2')
    let star3 = $('#star_for_rating3')
    let star4 = $('#star_for_rating4')
    let star5 = $('#star_for_rating5')

    star1.click(function(){
        $(this).attr('class', 'bi bi-star-fill rating_star')
        star2.attr('class', 'bi bi-star rating_star')
        star3.attr('class', 'bi bi-star rating_star')
        star4.attr('class', 'bi bi-star rating_star')
        star5.attr('class', 'bi bi-star rating_star')
        $('#rating').val('1')
    })

    star2.click(function(){
        star1.attr('class', 'bi bi-star-fill rating_star')
        $(this).attr('class', 'bi bi-star-fill rating_star')
        star3.attr('class', 'bi bi-star rating_star')
        star4.attr('class', 'bi bi-star rating_star')
        star5.attr('class', 'bi bi-star rating_star')
        $('#rating').val('2')
    })

    star3.click(function(){
        star1.attr('class', 'bi bi-star-fill rating_star')
        $(this).attr('class', 'bi bi-star-fill rating_star')
        star2.attr('class', 'bi bi-star-fill rating_star')
        star4.attr('class', 'bi bi-star rating_star')
        star5.attr('class', 'bi bi-star rating_star')
        $('#rating').val('3')
    })

    star4.click(function(){
        star1.attr('class', 'bi bi-star-fill rating_star')
        $(this).attr('class', 'bi bi-star-fill rating_star')
        star2.attr('class', 'bi bi-star-fill rating_star')
        star3.attr('class', 'bi bi-star-fill rating_star')
        star5.attr('class', 'bi bi-star rating_star')
        $('#rating').val('4')
    })

    star5.click(function(){
        star1.attr('class', 'bi bi-star-fill rating_star')
        $(this).attr('class', 'bi bi-star-fill rating_star')
        star2.attr('class', 'bi bi-star-fill rating_star')
        star4.attr('class', 'bi bi-star-fill rating_star')
        star3.attr('class', 'bi bi-star-fill rating_star')
        $('#rating').val('5')
    })



})