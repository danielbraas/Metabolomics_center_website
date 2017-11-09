$(function(){
  $(".waypoint-hidden").waypoint({
    handler: function(){ var x=this; $(x.element).animate({opacity: 1}, 800); },
    offset: '50%'
  });
});
