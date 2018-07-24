
// JavaScript Document
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

//MODAL
function testOverlay(anything,text)
{
    var img = document.getElementById(anything.id);
    // Get the modal
    console.log(anything.alt);
    var modal = document.getElementById('myModal');
    // Get the image and insert it inside the modal - use its "alt" text as a caption
    style= img.currentStyle || window.getComputedStyle(img,false),
    imgurl = style.backgroundImage.slice(4,-1).replace(/"/g,"");

    var modalImg = document.getElementById("img01");
    //var captionText = document.getElementById("caption");
    //img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = imgurl;
    //captionText.innerHTML = text;
    //}
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
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
  var x = document.getElementById("artwork");
  x.scrollIntoView({behavior: "smooth", block:"start"});
}
function scrollToContact(){
  var x = document.getElementById("contact");
  x.scrollIntoView( { behavior:"smooth", block:"start"});
}