

// var str = location.href;
// var endOfUrl = str.substring(30);
// alert(endOfUrl);

// $('.maintabs a').click(function(){
//   if($('.maintabs a').attr('href') == endOfUrl)
//     $(this).children().addClass(' active');
// });

// if($("div").is("#defaultOpen")){
//   document.getElementById("defaultOpen").click();  
// }


$('.tab1').trigger('click');
// $('#defaultOpen').addClass(' active');


  // $('#defaultOpen').click();



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
  // evt.currentTarget.className += " active";
}

// Slider

function sizePic() {
    size = document.getElementById("size").value;
    img = document.getElementById("pic");
    img.width = 300 + 20*size;
    imgwidth = size*1 + 10;
    $( ".candlesize span" ).text(imgwidth);
   }

$('.tab1').click(function(){
  $('.tab1').addClass('active');
});

// Change picture
$( ".forms input").click(function(){
  $("#pic").attr("src", $(this).val());
  $("#pic2").attr("src", $(this).val());
  $("#pic3").attr("src", $(this).val());
  $('#droppable .decorelement').remove();
  $('.tab1').addClass('active');
  $('#nextbtn1').css('pointer-events', 'auto');
  $('#nextbtn1').css('background', '#003D00');
  $('#nextbtn1').css('color', '#fff');

  $('.nextbtn2').css('pointerEvents', 'auto');
  $('.nextbtn2').css('background', '#003D00');
  $('.nextbtn2').css('color', '#fff');

  $('.tab2').css('pointer-events', 'auto');
  $('.tab2').css('background', '#84B000'); 
  $('.tab2').css('color', '#000');         

  $('.tab2').click(function(){
      $('.tab2').css('background', '#003D00');    
      $('.tab2').css('color', '#fff');        
  });

  $('.tab1, .tab3, .tab4').click(function(){
    $('.tab2').css('background', '#84B000');
    $('.tab2').css('color', '#000');
  });

  $('.tab3').css('pointerEvents', 'auto'); //Декорація клікабельна
  $('.tab3').css('background', '#84B000'); //Декорація клікабельна
  $('.tab3').css('color', '#000');         //Декорація клікабельна

  $('.tab3').click(function(){
      $('.tab3').css('background', '#003D00');  //Декорація активна      
      $('.tab3').css('color', '#fff');          //Декорація активна
  });

  $('.tab1, .tab2, .tab4').click(function(){
    $('.tab3').css('background', '#84B000');
    $('.tab3').css('color', '#000');
  });

  $('.nextbtn3').click(function(){
    $('.tab1, .tab2, .tab3').click(function(){
      $('.tab4').css('pointerEvents', 'auto');
      $('.tab4').css('background', '#84B000');
      $('.tab4').css('color', '#000');
    });
    $('.tab4').click(function(){
        $('.tab4').css('background', '#003D00');  //Фініш активна      
        $('.tab4').css('color', '#fff');          //Фініш активна
    });
  });
  // function func(){
    
  //   if ( $(".tab4").hasClass("active") ){
  //     $('.tab4').css('background', '#003D00');
  //     $('.tab4').css('color', '#fff');
  //   };

  // }
  // setTimeout(func, 50);
});

$("#nextbtn1").click(function(){
  $('.tab2').trigger('click');
  // $(".tab2").attr("class", "tablinks tab2 active");
  // if($('#r5').is(':checked')) { $('.hidetools').show() }else{$('.hidetools').hide()}
});



$(".nextbtn:eq(2)").click(function(){
  $('.decorelement').css('border','');
  function func(){
    $('.tab4').trigger('click');
    if ( $(".tab4").hasClass("active") ){
      $('.tab4').css('background', '#003D00');
      $('.tab4').css('color', '#fff');
    }

  }
  setTimeout(func, 50);
});

$('.tab2').click(function() {
  // if(($('#r6').is(':checked'))||($('#r5').is(':checked'))) { $('.hidetools').show() }else{$('.hidetools').hide()}
});


// <-- Переключання вкладок
if($('#pic2').attr('src') == ''){
  $('.tab3, .tab4').css('background', '#ccc');
  $('.tab3, .tab4').css('color','grey');
}

$('.imgcolor').click(function(){
  $(".nextbtn:eq(1)").click(function(){
  $('.tab3').trigger('click');
  
    if ( $(".tab3").hasClass("active") ){
      $('.tab3').css('background', '#003D00');
      $('.tab3').css('color', '#fff');
    }
  });



  $('#pic2').attr('src', $(this).attr('src')); 
  $('#pic3').attr('src', $(this).attr('src')); 
});


$('.tab3').click(function(){
  $('#droppable .decorelement').remove();
});
// Переключання вкладок -->

function textSize(){
  $('.choosephoto').animate({fontSize: '35px'}, 1000);
  $('.choosephoto').animate({fontSize: '30px'}, 1000);
}
setInterval(textSize);

// Drag and Drop

$('.draggable').children().draggable({
    helper: 'clone',
    start: function(){
      $('h1').css('color', 'red');
      $('#pic3').css('opacity', '0.5');
      $('#droppable').css('border','5px dashed #003D00');
      $('#droppable').css('background','#fff');
      $('.myboxzxc').show();
    },
    stop: function(){
      $('h1').css('color', ''); 
      $('#pic3').css('opacity', '');
      $('#droppable').css('border','');
      $('#droppable').css('background','');
      $('.myboxzxc').hide();
    }
  });

$('#droppable').mouseup(function (event){
  event = event || window.event;
});

// $('#test').mousemove(function(event){
//   event = event || window.event;
//   $('#offx').html(event.offsetX);
//   $('#offy').html(event.offsetY);
// });

  $('#droppable').droppable({
    accept: $('.draggable').children(),
    drop: function(ev, ui){
      var droppedItem = $(ui.draggable).clone();
      $(this).append(droppedItem);
      $(droppedItem).css('border','2px dashed #ccc');
      $(droppedItem).css('position', 'absolute');
      $(droppedItem).css('left', '160px');
      $(droppedItem).css('top', '250px');
      $(droppedItem).mousedown(function(){
        $(this).css('border','');
      });

      $(droppedItem).draggable({
        containment: "#droppable",
      });

      // Delete item
      $(droppedItem).dblclick(function(){
        $(droppedItem).animate({
          width: '120px',
          height: '120px',
          opacity: 0
        }, 800);
        function func(){
          $(droppedItem).remove();  
        }
        setTimeout(func, 800);
      });
    },

  });



var html2image;
$('#save').click(function(){
  $('#preview').html('');
    var elm = $('#droppable').get(0);
    for (var i = 1; i <= 5; i++) {
      html2canvas(elm).then(function(canvas){
        var img = Canvas2Image.convertToImage(canvas, canvas.width, canvas.height);

        $('#preview').html(img);
        html2image = canvas;      
      });
    }    
});

$('#saveAs').click(function(){
  Canvas2Image.saveAsImage(html2image, 420, 630, "png", "MyCandle");
});
  

//Ajax

// function funcBefore(){
//     $("#information").text('Очікування даних...');
//   }



///////////////////////////////////////////////////////////////
////////////////////Повтор/////////////////////////////////////

function allJsForAjax(){

  if($('#pic2').attr('src') == ''){
    $('.tab3, .tab4').css('background', '#ccc');
    $('.tab3, .tab4').css('color','grey');
  }

  $('.imgcolor').click(function(){
    $(".nextbtn:eq(1)").click(function(){
    $('.tab3').trigger('click');
      if ( $(".tab3").hasClass("active") ){
        $('.tab3').css('background', '#003D00');
        $('.tab3').css('color', '#fff');
      }
    });

    $('.nextbtn2').css('pointerEvents', 'auto');
    $('.nextbtn2').css('background', '#003D00');
    $('.nextbtn2').css('color', '#fff');

    $('#pic2').attr('src', $(this).attr('src')); 
    $('#pic3').attr('src', $(this).attr('src')); 

    // $('.choosephoto').remove();

    $('.tab3').css('pointerEvents', 'auto'); //Декорація клікабельна
    $('.tab3').css('background', '#84B000'); //Декорація клікабельна
    $('.tab3').css('color', '#000');         //Декорація клікабельна

    $('.tab3').click(function(){
      $('.tab3').css('background', '#003D00');  //Декорація активна      
      $('.tab3').css('color', '#fff');          //Декорація активна
    });

    $('.tab1, .tab2, .tab4').click(function(){
      $('.tab3').css('background', '#84B000');
      $('.tab3').css('color', '#000');
    });

    $('.nextbtn3').click(function(){
      $('.tab1, .tab2, .tab3').click(function(){
        $('.tab4').css('pointerEvents', 'auto');
        $('.tab4').css('background', '#84B000');
        $('.tab4').css('color', '#000');
      });
      $('.tab4').click(function(){
          $('.tab4').css('background', '#003D00');  //Фініш активна      
          $('.tab4').css('color', '#fff');          //Фініш активна
      });
    });
  });

}  



  function funcSuccess(data){
    $("#bigbox").html(data);
    allJsForAjax();
  }

  var radioname;  

  $('.forms label input').click(function(){
    $('.choosecolor').html();
    radioname = $(this).attr('description'); 
    $.ajax({
      url: "content.php",
      type: "POST",
      data: ({
        radioname: radioname,
      }),
      dataType: "html",
      success: funcSuccess
    });
  });

  // var radioid;

  // $('.forms label input').click(function(){
  //   $(this).prop("checked");
  //   var radioid = ($(this).attr('id'));
  // });

  

  $('.colorbox button').mouseup(function(){
    
    var btnname = $(this).attr('name');
    $.ajax({
      url: "content.php",
      type: "POST",
      data: ({
        name: btnname,
        radioname: radioname,
      }),
      dataType: "html",
      success: funcSuccess
    });
  });


  // Basket 

  // $('.basket_count_minus').click(function () {
  //     var $this = $(this),
  //     itemVal = $this.siblings('.basket_count_val'),
  //     count = itemVal.val();
  //     if(+count > 1) {
  //       itemVal.val(--count);
  //     }
  //   });
    
  //   $('.basket_count_plus').click(function () {
  //     var $this = $(this),
  //     itemVal = $this.siblings('.basket_count_val'),
  //     count = itemVal.val();
  //     itemVal.val(++count);
  //   });  

  function basket_count_func(){
    $('.basket_count_minus').click(function () {
      var $this = $(this),
      itemVal = $this.siblings('.basket_count_val'),
      count = itemVal.val();
      if(+count > 1) {
        itemVal.val(--count);
        var startpriceitem = parseFloat($(this).parent().next().find('span').attr('value'));
        newpriceitem = startpriceitem * itemVal.val();
        $(this).parent().next().find('span').text(newpriceitem.toFixed(2));
        var totalsum = 0;
          for (var i = 0; i<$('.basket_price').length; i++) {
            totalsum += parseFloat($('.basket_price span:eq('+i+')').text());  
          }
          $('.totalprice span').html(totalsum.toFixed(2));
      }
    });
    
    var newpriceitem = 0;
    // var startpriceitem;
    $('.basket_count_plus').click(function () {
      var $this = $(this),
      itemVal = $this.siblings('.basket_count_val'),
      count = itemVal.val();
      itemVal.val(++count);
      
      var startpriceitem = parseFloat($(this).parent().next().find('span').attr('value'));
      newpriceitem = startpriceitem * itemVal.val();
      $(this).parent().next().find('span').text(newpriceitem.toFixed(2));
  
      var totalsum = 0;
      for (var i = 0; i<$('.basket_price').length; i++) {
        totalsum += parseFloat($('.basket_price span:eq('+i+')').text());  
      }
      $('.totalprice span').html(totalsum.toFixed(2));

      var id = $(this).parents('.item').attr('idnumber');
      // alert(id);

      // $.ajax({
      //   async: false,
      //   type: "POST",
      //   url: "cart.php",
      //   data: ({
      //       actionn: 'order',
      //       id: id,
      //       count: itemVal.val()
      //   }),

      //   // "countVar=order&id="+id+'&count='+itemVal.val(),
      //   dataType:"text",
      //   error: function () {  
      //       alert( "Произошла ошибка при добавлении товара" );
      //   },
      //   success: function (response) {
      //     $('#basketwrapper').html(response);
      //     basket_count_func();
      //   }
      // });
    });  
  }
  



  function addToCart(id, code, photo, name, price){
    console.log('add ' + id);
    $.ajax({
        async: false,     
        type: "POST",
        url: "cart.php",
        dataType:"text",
        data: 'action=add&id=' + id+'&code='+code+'&photo='+photo+'&name='+name+'&price='+price,
        error: function () {  
            alert( "Не смог" );
        },
        success: function (response) {
            alert('Додано в корзину "'+name+'"');
            // document.location.href = "basket.php";
        }
    });
}

function showMyCart(){
    console.log('show ');
    $.ajax({
        async: false,
        type: "POST",
        url: "cart.php",
        data: "action=show",
        dataType:"text",
        error: function () {  
            alert( "Произошла ошибка при добавлении товара" );
        },
        success: function (response) {
          $('#basketwrapper').html(response);
          var totalsum = 0;
          for (var i = 0; i<$('.basket_price').length; i++) {
            totalsum += parseFloat($('.basket_price span:eq('+i+')').text());  
          }
          $('.totalprice span').html(totalsum.toFixed(2));
          basket_count_func();
        }
    });
}


function delFromCart(id){
    console.log('del ' + id);
    $.ajax({
        async: false,
        type: "POST",
        url: "cart.php",
        data: 'action=del&id=' + id,
        dataType:"text",
        error: function () {  
            alert( "Произошла ошибка при добавлении товара" );
        },
        success: function (response) {
            showMyCart();
            console.log(response);
        }
    });
}

function clearBasket(){
    $.ajax({
        async: false,
        type: "POST",
        url: "cart.php",
        data: 'action=clear',
        dataType:"text",
        error: function () {  
            alert( "Произошла ошибка при добавлении товара" );
        },
        success: function (response) {
            showMyCart();
            console.log(response);
        }
    });
}


// Success function for basket and order
function basketData(data){
        $("body").html(data);
        function orderData(Mydata){
          $(".orderwrapper").append(Mydata);
        }

        var delivery = "";
        $( ".delivery" ).change(function() {
          $( ".delivery option:selected" ).each(function() {
            delivery += $( this ).text() + " ";
          });
          // alert( delivery );
        });

        var payment = "";
        $( ".payment" ).change(function() {
          $( ".payment option:selected" ).each(function() {
            payment += $( this ).text() + " ";
          });
          // alert( delivery );
        });
        
          var totalprice = $('.totalprice span').text();
        $('.confirnorderbtn').click(function(){
          var id = [];
          var code = [];
          var pic = [];
          var name = [];
          var count = [];
          var startPrice = [];
          var price = [];

          for (var i = 0; i<$('.productitem').length; i++) {
            id += $('.productitem:eq('+i+')').attr('idnumber')+"_";
            code += $('.productitem .codespan:eq('+i+')').text()+"_";
            pic += $('.productitem img:eq('+i+')').attr('src')+"_";
            name += $('.productitem h3:eq('+i+')').text()+"_";
            count += $('.productitem .countspan:eq('+i+')').text()+"_";
            startPrice += $('.productitem .startpricespan:eq('+i+')').text()+"_";
            price += $('.productitem .pricespan:eq('+i+')').text()+"_";
          }

          var lname = $('.lname').val();
          var fname = $('.fname').val();
          var surname = $('.surname').val();
          var phone = $('.phone').val();
          var email = $('.email').val();
          var city = $('.city').val();
          var street = $('.street').val();
          var house = $('.house').val();
          var apartment = $('.apartment').val();
          var comment = $('.comment').val();

          $.ajax({
            async: false,
            url: "confirmorder.php",
            type: "POST",
            data: ({
              // action: 'order',
              id: id,
              code: code,
              pic: pic,
              name: name,
              count: count,
              price: price,
              startPrice: startPrice,
              totalprice: totalprice,
              // замовлення
              delivery: delivery,
              payment: payment, 
              lname: lname,
              fname: fname,
              surname: surname,
              phone: phone,
              email: email,
              city: city,
              street: street,
              house: house,
              apartment: apartment,
              comment: comment
            }),
            dataType: "text",
            success: function (response) {
                $('.orderwrapper').html(response);
            }
          });
        });
        // window.location = 'confirmbasket.php';
        // allJsForAjax();
        // $('.IwillKilYou').click(function(){
        //   var id = [];
        //   var code = [];
        //   var pic = [];
        //   var name = [];
        //   var count = [];
        //   var startPrice = [];
        //   var price = [];

        //   for (var i = 0; i<$('.productitem').length; i++) {
        //     id += $('.productitem:eq('+i+')').attr('idnumber')+"_";
        //     code += $('.productitem .codespan:eq('+i+')').text()+"_";
        //     pic += $('.productitem img:eq('+i+')').attr('src')+"_";
        //     name += $('.productitem h3:eq('+i+')').text()+"_";
        //     count += $('.productitem .countspan:eq('+i+')').text()+"_";
        //     startPrice += $('.productitem .startpricespan:eq('+i+')').text()+"_";
        //     price += $('.productitem .pricespan:eq('+i+')').text()+"_";
        //   }
       
        //   var totalprice = $('.totalprice span').text();

        //   // var all = $('.item').html();
        //   $.ajax({
        //       url: "confirmorder.php",
        //       type: "POST",
        //       data: ({
        //         action: 'test',
        //         id: id,
        //         code: code,
        //         pic: pic,
        //         name: name,
        //         count: count,
        //         price: price,
        //         startPrice: startPrice,
        //         totalprice: totalprice
        //         // all: all
        //       }),
        //       dataType: "html",
        //       success: function (response) {
        //         $('.orderwrapper').html(response);
        //       }
        //     });
        // });
}

$('.basket_buybtn').click(function(){
  var id = [];
  var code = [];
  var pic = [];
  var name = [];
  var count = [];
  var startPrice = [];
  var price = [];
  // alert()
  // count += $('.basket_count_val').val();
  // var price = $('.basket_price span').text();
  
  // alert($('.item').length);
  
  for (var i = 0; i<$('.item').length; i++) {
    id += $('.item:eq('+i+')').attr('idnumber')+"_";
    code += $('.item:eq('+i+')').attr('codeofitem')+"_";
    pic += $('.item img:eq('+i+')').attr('src')+"_";
    name += $('.item h3:eq('+i+')').text()+"_";
    count += $('.basket_count_val:eq('+i+')').val()+"_";
    startPrice += $('.basket_price span:eq('+i+')').attr('value')+"_";
    price += $('.basket_price span:eq('+i+')').text()+"_";
  }
  var totalprice = $('.totalprice span').text();

  // var all = $('.item').html();
  $.ajax({
      url: "confirmbasket.php",
      type: "POST",
      data: ({
        id: id,
        code: code,
        pic: pic,
        name: name,
        count: count,
        price: price,
        startPrice: startPrice,
        totalprice: totalprice
        // all: all
      }),
      dataType: "html",
      success: basketData
    });

});

function orderData(Mydata){
  $(".orderwrapper").append(Mydata);
  // window.location = 'order.php';
  // allJsForAjax();
}

var delivery = "";
$( ".delivery" ).change(function() {
  $( ".delivery option:selected" ).each(function() {
    delivery += $( this ).text() + " ";
  });
  // alert( delivery );
});

var payment = "";
$( ".payment" ).change(function() {
  $( ".payment option:selected" ).each(function() {
    payment += $( this ).text() + " ";
  });
  // alert( delivery );
});

$('.confirnorderbtn').click(function(){
  var lname = $('.lname').val();
  var fname = $('.fname').val();
  var surname = $('.surname').val();
  var phone = $('.phone').val();
  var email = $('.email').val();
  var city = $('.city').val();
  var street = $('.street').val();
  var house = $('.house').val();
  var apartment = $('.apartment').val();
  var comment = $('.comment').val();
  $.ajax({
    async: false,
    url: "confirmorder.php",
    type: "POST",
    data: ({
      delivery: delivery,
      payment: payment, 
      lname: lname,
      fname: fname,
      surname: surname,
      phone: phone,
      email: email,
      city: city,
      street: street,
      house: house,
      apartment: apartment,
      comment: comment
    }),
    dataType: "text",
    success: function (response) {
        $('.orderwrapper').html(response);
    }
  });
});

