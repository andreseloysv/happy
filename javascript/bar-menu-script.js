    var menuActiv=0;
function displayMenu(){
    $( "#menu" ).click(function() {
        console.log("menuActiv "+menuActiv);
        if(menuActiv==0){
            menuActiv=1;
            $('.super-menu-left,.super-menu-right').show(400, function() {
                // Animation complete.
                });
            $('.super-menu-left,.super-menu-right').animate({
                height: '100%'
            }, 500, function() {
                // Animation complete.
                });
        }else{
            menuActiv=0;
            $('.super-menu-left,.super-menu-right').animate({
                height: '0px'
            }, 400, function() {
                // Animation complete.
                });
            $('.super-menu-left,.super-menu-right').hide(200, function() {
                // Animation complete.
                });
        }
    });   
}