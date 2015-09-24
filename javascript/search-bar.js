function searchBar(){
    var searchQuery ="";
    $( "#search-query" ).keyup(function() {
        if($( "#search-query" ).val().length>0){
            if(searchQuery != $( "#search-query" ).val()){
                searchQuery = $( "#search-query" ).val();
                clearTimeout($.data(this, 'timer'));
                var wait = setTimeout(search, 500);
                $(this).data('timer', wait);      
            }
        }else{
            clearTimeout($.data(this, 'timer'));
            $("#search-result").hide();
        }
    });
}
function search() {
    $.post( "http://www.andreseloysv.com/happy/controller/search/search.php",{
        query: $( "#search-query" ).val()
        } ).done(function( data ) {
        if(data.length > 0) {
            var obj = jQuery.parseJSON(data);
            $("#search-result").replaceWith('<ul class="dropdown-menu dropdown-menu-search" aria-labelledby="dLabel" id="search-result"></ul>').show();
            for (index = 0; index < obj.length; index++) {                    
                if (typeof obj[index] != "undefined") {
                    $("#search-result").append('<li role="presentation"><a role="menuitem" tabindex="-1" href="http://www.andreseloysv.com/happy/view/user/findUser.php?nick='+obj[index]["nick"]+'">' + obj[index]["name"]+'</a></li>');
                }
            }
        }else{
            $("#search-result").hide();
        }
    });
}