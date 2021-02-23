
   <!-- ==============================================
	 Navbar Second Section
	 =============================================== -->
    <section class="nav-sec">
        <div class="d-flex justify-content-between">
            <div class="p-2 nav-icon-lg {{ Request::is('chats') ? "mint-green" : "clean-black"}}">
                <a class="nav-icon" href="{{ url('/chats') }}"><em class="fa fa-users"></em>
                <span>Chats</span>
                </a>
            </div>
            <div class="p-2 nav-icon-lg {{ Request::is('biography') ? "mint-green" : "dark-black"}}">
                <a class="nav-icon" href="{{ url('/biography') }}"><em class="fa fa-list"></em>
                <span>Biography</span>
                </a>
            </div>
            <div class="p-2 nav-icon-lg {{ Request::is('articles') ? "mint-green" : "clean-black"}}">
                <a class="nav-icon" href="{{ url('/articles') }}"><em class="fa fa-book"></em>
                <span>Articles</span>
                </a>
            </div>
            <div class="p-2 nav-icon-lg {{ Request::is('gallery') ? "mint-green" : "dark-black"}}">
                <a class="nav-icon" href="{{ url('/gallery') }}"><em class="fa fa-smile"></em>
                <span>Gallery</span>
                </a>
            </div>
            <div class="p-2 nav-icon-lg {{ Request::is('games') ? "mint-green" : "clean-black"}}">
                <a class="nav-icon" href="{{ url('/games') }}"><em class="fa fa-keyboard"></em>
                <span>Games</span>
                </a>
            </div>
        </div>
    </section>