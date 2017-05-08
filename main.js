$(document).ready(function(e){

  function ud_slide(object) {

   $(object).slideDown(3000);
   $(object).children('h3').animate({left: '80px'},800);
   $(object).children('h4').animate({left: '90px'},1000)
   $(object).children('h3').animate({left: '70px'},300);
   $(object).children('h4').animate({left: '80px'},500)
   $('#upp_load').animate({width: '97.7%'},5000, function(e){

      $(object).children('h3').animate({left: '80px'},600);
      $(object).children('h3').animate({left: '150%'},200);
      $(object).children('h4').animate({left: '90x'},800)
      $(object).children('h4').animate({left: '-750px'}, 300, function(){

        $(object).slideUp(1000);

        $('#upp_load').css('width','0px');

    if(object.next().hasClass("ud_slide")){

      ud_slide(object.next());

    }else{
       ud_slide($('#ud_slider').children('.ud_slide').first());
    }
   });
  });

};
 ud_slide($('#ud_slider').children('.ud_slide').first());
console.log('Everything is loaded');

});
