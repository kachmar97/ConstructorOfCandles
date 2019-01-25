document.getElementById("defaultOpen").click();

function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get the element with id="defaultOpen" and click on it
    

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Slider

function sizePic() {
    size = document.getElementById("size").value;
    img = document.getElementById("pic");
    img.width = 300 + 20*size;
    imgwidth = size*1 + 10;
    $( ".candlesize span" ).text(imgwidth);
   }


// Chnge picture
$( ".forms input").click(function(){
  $("#pic").attr("src", $(this).val());
});

$(".nextbtn").click(function(){
  $(".tab2").attr("class", "tablinks tab2 active");
  if(($('#r6').is(':checked'))||($('#r5').is(':checked'))) { $('.hidetools').show() }else{$('.hidetools').hide()}
});

$('.tab2').click(function() {
  if(($('#r6').is(':checked'))||($('#r5').is(':checked'))) { $('.hidetools').show() }else{$('.hidetools').hide()}
});
// $('#r3').attr('checked')?alert('123'):false;

// alert($(this).val());

$('.imgcolor').click(function(){
  // alert($this).attr('src'));
  $('#pic2').attr('src', $(this).attr('src')); 
})
