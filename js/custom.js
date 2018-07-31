
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
    modalImg.onclick = function(){location.href = "detail.php?id="}
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
  var x = document.getElementById("artwork-scroll");
  x.scrollIntoView({behavior: "smooth", block:"start"});
}
function scrollToContact(){
  var x = document.getElementById("about");
  x.scrollIntoView( { behavior:"smooth", block:"start"});
}
function scrollToProgress(){
    var x = document.getElementById("progress-container");
    x.scrollIntoView( { behavior:"smooth", block:"start"});
}


//SCROLL TO REVEAL
var divpos= $("#artwork").offset().top;

var interval = setInterval(function() {
    if ($(window).scrollTop() >= divpos-$(window).height()+100) {        
        var animDelay = 0;
            $('.item-container').each(function(){
            $(this).delay(animDelay).animate({
                opacity:1,
            },1000);
            animDelay += 100;
        });
        //clearInterval(interval);
    }
    // if ($(window).scrollTop() >= divpos2-y) {
    //     var animDelay = 0;
    //     $('#contact').each(function(){
    //         $(this).delay(animDelay).animate({
    //             opacity:1
    //         },300);
    //         animDelay +=150;
    //     });
    //     
    // }
    
}, 50);
//CLick redirect
function clickRedirect(){
    location.href = "detail.php";
}
var myVar;
function loadEffect() {
    myVar = setTimeout(showPage,0000);
}

// function showPage() {
//     //document.getElementById("loader").style.display = "none";
//     var x = document.getElementById("slider");
//     var y = document.getElementById("myHeader");
//     var z = document.getElementById("artwork-scroll");
//     var a = document.getElementById("artwork-container");
//     var b = document.getElementById("row-2");
//     var c = document.getElementById("about");
//     var d = document.getElementById("progress-container");
//     var e = document.getElementById("myFooter");
//     var f = document.getElementById("copyright");
//     x.style.display = "block";
//     y.style.display = "block";
//     z.style.display = "block";
//     a.style.display = "block";
//     b.style.display = "block";
//     c.style.display = "block";
//     d.style.display = "block";
//     e.style.display = "block";
//     f.style.display = "block";
// }



// $(document).ready(function(){
//     $("#hide").click(function(){
//         $("#show").slideToggle("slow");
//     });
//     $(".progress-bar").click(function(){
//         $(".progress-bar").attr('id','hide');
//     });
// });
function showProgress(ele){
    var x = document.getElementById("status"+ele.id);
    if(x.style.opacity == 0){
        x.style.opacity = 1;
        x.style.display ="block";
    } else {
        x.style.opacity = 0;
        x.style.display = "none";
    }
}

$(document).ready(function() {    
    $("#test-1").owlCarousel();
  });


