$(document).ready(function(){
$("#toggle1").click(function(){
    $(".inner1").slideToggle(1000)
})
$("#toggle2").click(function(){
    $(".inner2").slideToggle(1000)
})
$("#toggle3").click(function(){
    $(".inner3").slideToggle(1000)
})
$("#toggle4").click(function(){
    $(".inner4").slideToggle(1000)
})
$("#toggle5").click(function(){
    $(".inner5").slideToggle(1000)
})
$("#toggle6").click(function(){
    $(".inner6").slideToggle(1000)
})
$("#toggle7").click(function(){
    $(".inner7").slideToggle(1000)
})
$("#toggle8").click(function(){
    $(".inner8").slideToggle(1000)
})
})
$(document).ready(function(){
$("#login").click(function(){
    $(".login-view").fadeIn(),
    $('.sign-view').fadeOut()
})
$(".close").click(function(){
    $('.login-view').fadeOut()
})
})

$(document).ready(function(){
$("#signin").click(function(){
    $(".sign-view").fadeIn(),
    $('.login-view').fadeOut()
})
$(".close2").click(function(){
    $('.sign-view').fadeOut()
})
})