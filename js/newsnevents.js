

const btn = document.querySelector(".switch-btn");
const video = document.querySelector(".video-container");

btn.addEventListener('click', function(){
    if(!btn.classList.contains("slide")){
        btn.classList.add("slide");
        video.pause();
    }else{
        btn.classList.remove("slide");
        video.play();
    }
});

$(document).ready(function(){
    $('#btnFadeOut').click(function(){
        $('#info2').fadeOut(3000, function(){
            $('#btnFadeOut').text('Gone');
        });
    });
$('#btnFadeIn').click(function(){
        $('#info2').fadeIn(3000);
});
$('#btnFadeTog').click(function(){
    $('#info2').fadeToggle(2000,function(){
        alert('Toggled!');
    });
});
$('#btnSlideDown').click(function(){
    $('#info2').slideDown(5000);
});
$('#btnSlideUp').click(function(){
    $('#info2').slideUp(5000);
});
$('#btnSlideTog').click(function(){
    $('#info2').slideToggle(2000);
});
$('#moveRight').click(function(){
    $('#info2').animate({
        left:100,
        opacity:0.7
    });
});
$('#moveLeft').click(function(){
    $('#info2').animate({
        left:0,
        opacity:1
    });
});

$('#btnHide').click(function(){
        $('#info2').hide();
    });
$('#btnShow').click(function(){
        $('#info2').show();
    });
$('#moveAround').click(function(){
    var BoxA = $('#box1');
BoxA.animate({
    right:150
});
BoxA.animate({
    bottom:90
});
BoxA.animate({
    right:0,
    bottom:90
});
BoxA.animate({
    right:0,
    bottom:0
});
});
});
