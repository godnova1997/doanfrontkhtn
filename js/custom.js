
// // JavaScript Document
// window.onscroll = function() {myFunction()};

// var header = document.getElementById("myHeader");
// var sticky = header.offsetTop;

// function myFunction() {
//   if (window.pageYOffset > sticky) {
//     header.classList.add("sticky");
//   } else {
//     header.classList.remove("sticky");
//   }
// }

//MODAL
function testOverlay(anything)
{
    var img = document.getElementById(anything.id);
    // Get the modal
    console.log(anything.alt);
    var modal = document.getElementById('myModal');
    // Get the image and insert it inside the modal - use its "alt" text as a caption
    style= img.currentStyle || window.getComputedStyle(img,false),
    imgurl = style.backgroundImage.slice(4,-1).replace(/"/g,"");

    var modalImg = document.getElementById("img01");
    modal.style.display = "block";    
    modalImg.src = imgurl;
    modalImg.onclick = function(){location.href = "detail.php";}
    //captionText.innerHTML = text;
    //}
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
        // When the user clicks on <span> (x), close the modal
        span.style.fontSize = "50px";
        span.style.marginTop = "50px";
        span.onclick = function() { 
        modal.style.display = "none";
    }
    
    modal.onclick = function(){
        modal.style.display = "none";
    }
}

//NAV SCROLL
function scrollToHome(){
  var x = document.getElementById("home");
  x.scrollIntoView({behavior:"smooth",block:"start"});
}
function scrollToArtwork(){
  var x = document.getElementById("artwork-reveal");
  x.scrollIntoView({behavior: "smooth", block:"start"});
}
function scrollToContact(){
  var x = document.getElementById("contact");
  x.scrollIntoView( { behavior:"smooth", block:"start"});
}
//SCROLL TO REVEAL
var divpos= $("#artwork-reveal").offset().top;
var x = $('#artwork-reveal').height();
// var divpos2= $("#test1").offset().top;
// var y = $('#test1').height();

var interval = setInterval(function() {
    if ($(window).scrollTop() >= divpos-x) {        
        var animDelay = 0;
            $('.item-container').each(function(){
            $(this).delay(animDelay).animate({
                opacity:1,
                animationTimingFunction: "ease-in"                
            },1000);
            animDelay += 100;
        });

        
    }
    // if ($(window).scrollTop() >= divpos2-y) {
    //     var animDelay = 0;
    //     $('#contact').each(function(){
    //         $(this).delay(animDelay).animate({
    //             opacity:1
    //         },300);
    //         animDelay +=150;
    //     });
    //     clearInterval(interval);
    // }
    
}, 100);



//CLick redirect
function clickRedirect(){
    location.href = "detail.php";
}

function loadEffect() {
    myVar = setTimeout(showPage, 500);
}

function showPage() {
  document.getElementById("test").style.display = "block";
}


// add listener to disable scroll
document.getElementById("test").addEventListener('scroll',noscroll);