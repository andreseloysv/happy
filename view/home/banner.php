<button id="menu" type="button" class="navbar-toggle navbar-toggle-menu collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
</button>
<div>
    <a class="navbar-brand" href="http://www.andreseloysv.com/happy/view/home/home.php"><img  width="120px" height="30px" src="../../image/logoHappy - copia.png"></a>
</div>
<div  class="message-ico" id="chat-ico" >
    <a class="navbar-brand" href="#char"><span class="badge">4</span><img src="../../image/ico/chat.png" width="32px" height="32px"></a>
</div><!--/.navbar-collapse -->
<div  class="message-ico profil-ico">

    <div class="dropdown">
        <a data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <img id="link-profil" class="img-profile-picture" src="../../image/users/<?php echo($user->nick); ?>/<?php echo($user->photo); ?>" style=" border-radius: 2px;" width="32px" height="32px">
        </a>
        <ul class="dropdown-menu" aria-labelledby="dLabel">
            <li role="presentation"><a role="menuitem" tabindex="-1" href="http://google.com">Action</a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#anotherAction">Another action</a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
            <li role="presentation" class="divider"></li>
            <li role="presentation"><a role="menuitem" href="http://www.andreseloysv.com/happy/controller/sessions/close_session.php" tabindex="-1" ><span class="glyphicon glyphicon-log-in"></span> Sign out</a></a></li>
        </ul>

    </div>
</div>

<div role="search">
    <form class="t1-form form-search js-search-form" action="/search" id="global-nav-search">
        <label class="visuallyhidden" for="search-query">Search</label>
        <div class="dropdown">
            <a data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <input class="search-input img-profile-picture"  type="text" id="search-query" placeholder="Happy search" name="q" autocomplete="off" spellcheck="false" aria-autocomplete="list" aria-expanded="false" aria-owns="typeahead-dropdown-1">
            </a>
            <ul class="dropdown-menu dropdown-menu-search" aria-labelledby="dLabel" id="search-result" style="display: none">
            </ul>

        </div>
    </form>
</div>
