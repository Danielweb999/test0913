$(function() {
    $('#MenuIcon').click(function() {
        $('#PrimaryNavigation').slideToggle();
    }); //end click
    var tabs = $(".tabs").tabs();
    tabs.find(".ui-tabs-nav").sortable({
        axis: "x",
        stop: function() {
            tabs.tabs("refresh");
        }
    });
  $(window).scroll(function(){
  var window_scroll = $(window).scrollTop();
  // $('p').text(window_scroll);
  if(window_scroll > 100){
      $('#PageTop').fadeIn();
  }else{
      $('#PageTop').fadeOut();
  }
});
$('#PageTop>a').click(function(){
  $('body').animate({
      scrollTop:0,
    },300);
});
//單頁錨點
// $('#NewsBtn').click(function(){
//   $('body').animate({
//     scrollTop: $('#News').offset().top
//   },200);
// });
// $('#TeamBtn').click(function(){
//   $('body').animate({
//     scrollTop: $('#Team').offset().top
//   },200);
// });
// $('#PlayerBtn').click(function(){
//   $('body').animate({
//     scrollTop: $('#Player').offset().top
//   },200);
// });
// $('#ProductBtn').click(function(){
//   $('body').animate({
//     scrollTop: $('#Product').offset().top
//   },200);
// });
}); //end
