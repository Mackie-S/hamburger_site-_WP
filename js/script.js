jQuery(function($){
  $(".p-header__menu").on("click", function(){
    $(".c-cover").toggleClass("active");
    $(".p-sidebar").toggleClass("active");
    $("body").css("position","fixed");
  });
  $(".c-close").on("click", function(){
    $(".c-cover").toggleClass("active");
    $(".p-sidebar").toggleClass("active");
    $("body").css("position","");
  });
  $(window).resize(function(){
    let $window = $(this).width();
    let bpt = 1200;
    
    if($window > bpt){
      $(".p-sidebar").show();
      $(".c-cover").removeClass("active");
      $("body").css("position","");
    }else{
      $(".p-sidebar").removeClass("active");
      $(".c-cover").removeClass("active");
      $("body").css("position","");
    }
  });
});