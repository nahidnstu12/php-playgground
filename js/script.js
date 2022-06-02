$(document).ready(function () {
  $(".header").height($(window).height());

  $(".navbar a").click(function(){
    $("body,html").animate({
     scrollTop:$("#" + $(this).data('value')).offset().top
    },1000)
    
   })
});


//responsive zone
$(document).ready(function () {
  $('#my-alert').on('click', function () {
    console.log("clik");
    
    $(".alert").alert('close')
  })
  $('.dropdown-toggle').dropdown()
  // $(".nav-tabs")
  $(".nav-tabs .nav-link").on("click", function(){
    $(".nav-link").removeClass("active")
    $(this).addClass("active")
  })
  $("#btn-popover").popover()
  $("#btn-popover-top").popover()
})


