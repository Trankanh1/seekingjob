<div id="post-job">
    <div class="header-container">
        <nav class="header d-flex" style="margin:0; max-width: initial;"> 
            <div class="content-left col-lg-8 d-flex align-item-center">
            <span class="brand url" data-url="{{ route("employer-dashboard") }}"> Seeking job </span>đăng tin tuyển dụng
            </div>
            <div class="content-right col-lg-4 d-flex align-item-center justify-flex-end">
                <svg class="SVGInline-svg Profile__hoverOnly-svg" style="width: 28px;height: 28px;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 7a3 3 0 103 3 3 3 0 00-3-3zm0 9a6 6 0 00-5.33 3.25 9 9 0 0010.66 0A6 6 0 0012 16zm0-14A10 10 0 112 12 10 10 0 0112 2z" fill="currentColor" fill-rule="evenodd"></path></svg>

            <span class="email"> {{ session("user")["email"] }} </span>
            </div>
        </nav>
    </div>
</div>