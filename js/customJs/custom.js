
function buyMusic(id){
var _token = $("#_token").val();
var title = $("#musictitle-"+id).val();
var price = $("#musicprice-"+id).val();
var user_id = $("#userid-"+id).val();
$.ajax({
type: "POST",
url: 'tempadd',
data: {'music_id': id, '_token': _token, 'title': title, 'price': price, 'user_id': user_id},
success:function(data){
  updateCart(data[0].user_id);
}
});
}

function updateCart(user_id){
var _token = $("#_token").val();
$.ajax({
type: "GET",
url: 'updatecart',
data: {'_token': _token, 'user_id': user_id},
success:function(data){
  var qhtml = '';
  var totalAmount = 0;
  if(data.length>=0){
    $.each(data, function(i, value){
        totalAmount = totalAmount + data[i].music_price;
        qhtml += '<div class="item  col-xs-12 col-lg-12">';
        qhtml += '<div class="thumbnail cstm-cart-tumbnail">';
        qhtml += '<img class="group list-group-image cart-thubnail-cont" src="../public/img/gorillaz-cover.jpg" alt="" />';
        qhtml += '<div class="caption cart-caption-cont">';
        qhtml += '<div class="cart-title-cont">';
        qhtml += '<h3 class="group inner list-group-item-heading">'+data[i].music_title+'</h3>';
        qhtml += '<p class="group inner list-group-item-text cart-band-name">'+data[i].music_brand+'</p>';
        qhtml += '</div>';
        qhtml += '<div class="cart-clear-btn">';
        qhtml +='<a href="javascript:orderDelete('+data[i].id+')">';
        qhtml += '<i class="fa fa-trash trash-icon" aria-hidden="true"></i>';
        qhtml += '</a>';
        qhtml += '</div>';
        qhtml += '<div class="row">';
        qhtml += '<div class="col-xs-12 col-md-6">';
        qhtml += '<p class="lead cart-product-amount">'+data[i].music_price+' $</p>';
        qhtml += '</div>';
        qhtml += '<div class="col-xs-12 col-md-6">';   
        qhtml += '</div>';
        qhtml += '</div>';
        qhtml += '</div>';
        qhtml += '</div>';
        qhtml += '</div>';
    });
    $("#products").html(qhtml);
    $("#totalAmount").html(totalAmount);
  }
}
});
}

function orderDelete(id){
    var _token = $("#_token").val();
    $.ajax({
        type: "POST",
        url: 'orderDelete',
        data: {'music_id': id, '_token': _token},
        success:function(data){
            updateCart(data.user_id);
        }
    });
}

window.onload = updateCart;


if(localStorage.clicked_menu == ""){
  localStorage.clicked_menu = 'DASHBOARD';
  $(".nav-menu-items").find("a:contains('"+localStorage.clicked_menu+"')").addClass("lm-active"); 
  $(".lm-active").parent("li").addClass("lm-bgcolor");
}
$("a").click(function () { 
      localStorage.clicked_menu = "";
     $(".nav-menu-head").find("a:contains('"+localStorage.clicked_menu+"')").removeClass("lm-active");   
     if($(this).text()=="MY MUSIC"||$(this).text()=="MY ACCOUNT"||$(this).text()=="DASHBOARD") localStorage.clicked_menu = $(this).text();    
  });

$("a").click(function () { 
     $(".nav-menu-items").find("a:contains('"+localStorage.clicked_menu+"')").removeClass("lm-active");   
     if($(this).text()=="Producers"||$(this).text()=="Artists"||$(this).text()=="Pending for Approval" || $(this).text()=="DASHBOARD" || $(this).text()=="Sold" ||$(this).text()=="Profile Settings" ||$(this).text()=="Payment History" ||$(this).text()=="Messages" ||$(this).text()=="Upload Music" ||$(this).text()=="Pending for Approval" ||$(this).text()=="Unapprove" ||$(this).text()=="Sold") localStorage.clicked_menu = $(this).text();    
  });
    
 $(".nav-menu-items").find("a:contains('"+localStorage.clicked_menu+"')").addClass("lm-active"); 
 $(".lm-active").parent("li").addClass("lm-bgcolor");

 $(".nav-menu-head").find("a:contains('"+localStorage.clicked_menu+"')").addClass("lm-active"); 
 $(".lm-active").parent(".nav-menu-head").addClass("lm-bgcolor");