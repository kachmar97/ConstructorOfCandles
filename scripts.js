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


// Change picture
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

// <-- Переключання вкладок
if($('#pic2').attr('src') == ''){
  $('.tab4').css('background', '#ccc');
  $('.tab4').css('color','grey');
}

$('.imgcolor').click(function(){
  $('#pic2').attr('src', $(this).attr('src')); 
  $('#pic3').attr('src', $(this).attr('src')); 
  $('.choosephoto').remove();
  $('#tab4').css('pointerEvents', 'auto');
  $('#tab4').css('background', '#84B000');
  $('#tab4').css('color', '#000');

  $('#tab4').click(function(){
    if ( $("#tab4").hasClass("active") ){
      $('#tab4').css('background', '#003D00');
      $('#tab4').css('color', '#fff');
    };
  });

  $('.tab1, .tab2').click(function(){
    $('#tab4').css('background', '#84B000');
    $('#tab4').css('color', '#000');
  })
});
// Переключання вкладок -->

function textSize(){
  $('.choosephoto').animate({fontSize: '35px'}, 1000);
  $('.choosephoto').animate({fontSize: '30px'}, 1000);
}
setInterval(textSize);


