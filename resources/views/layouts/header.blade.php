<div id="header">
    <nav class="d-flex">  
    <div class="order-1 logo url" data-url="{{route('member-home')}}"> seekingjob</div>
    <div class="order-2" style="width: 1000px;">
    <div>
        <form class="search-fm" method="GET" action="{{ route('job-search-result') }}">
            <div class="job-title">
                <input placeholder="Tên job, từ khoá hoặc tên công ty" name="keyword">
                <span class="svg">
                <svg class="SVGInline-svg d-flex-svg search__SearchStyles__searchIcon-svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="currentColor" fill-rule="evenodd"><path id="prefix__icon-reviews-1" d="M10.5 3a7.5 7.5 0 107.5 7.5A7.5 7.5 0 0010.5 3zm0-1a8.5 8.5 0 016.35 14.15l5 5a.5.5 0 010 .7.5.5 0 01-.71 0l-5-5A8.5 8.5 0 1110.5 2z"></path></g></svg> </span>                </div>
            <div class="metatype mopt">
                <input value="Việc làm" name="metatype">
               <div class="opts" style="top: 27px;"> 
                    <div class="opt" data-search="jobs">Việc làm</div>
                    <div class="opt" data-search="reviews">Công ty</div>
                    <div class="opt" data-search="interviews">Phỏng vấn</div>
               </div>
            <span class="svg">
            <svg class="SVGInline-svg arrowDown-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 24 24" style="
                height: 16px;
                width: 16px;">
            <defs><path id="prefix__carot-down-a" d="M9.75 20.1l7.523-7.386a1 1 0 000-1.428L9.75 3.9c-.509-.5-1.324-.5-1.833 0a1.261 1.261 0 000 1.8l6.416 6.3-6.416 6.3a1.261 1.261 0 000 1.8c.509.5 1.324.5 1.833 0z"></path></defs><g fill-rule="evenodd"><mask id="prefix__carot-down-b"><use xlink:href="#prefix__carot-down-a"></use></mask><use fill="currentColor" id="prefix__icon-carot-down-1" transform="rotate(90 12.5 12)" xlink:href="#prefix__carot-down-a"></use><g mask="url(#prefix__carot-down-b)"><path d="M0 0h24v24H0z"></path></g></g></svg>

            </span>
            </div>
            <div class="location"><input name="location"> </div> 
            <button>Tìm kiếm </button>                                
        </form>
    </div>
                
    </div>
    <div class="order-2">
        <div class="noti"> 
            <span class="sgv icon">
                <svg class="SVGInline-svg d-flex-svg icon__IconStyles__colorDefault-svg" style="width: 36px;height: 36px;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="currentColor" fill-rule="evenodd"><path id="prefix__icon-notifications-1" d="M17.61 6H6.39a1 1 0 00-.94.65L3 11h3.28a1 1 0 011 .68v.06l.15.45.57 1.72a.13.13 0 00.12.09h7.82a.13.13 0 00.12-.09l.74-2.23a1 1 0 01.95-.68H21l-2.45-4.35a1 1 0 00-.94-.65zM3 17a1 1 0 001 1h16a1 1 0 001-1v-5h-3.21a.1.1 0 00-.09.07l-.7 2.25a1 1 0 01-1 .68H8a1 1 0 01-1-.69l-.7-2.24a.1.1 0 00-.09-.07H3zm19 0a2 2 0 01-2 2H4a2 2 0 01-2-2v-6l2.51-4.7A2 2 0 016.39 5h11.22a2 2 0 011.88 1.3L22 11z"></path></g></svg>
            </span>
             <div class="notifications">
                 <div class="title">Notifications
                      </div>
                <div> 
                <div class="content" data-url="{{ route('job-saved') }}">
                    <div class="d-flex">
                        <svg class="SVGInline-svg d-flex-svg IconStyles__colorDefault-svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="currentColor" fill-rule="evenodd"><path id="prefix__icon-save-1" d="M12 5.11l.66-.65a5.56 5.56 0 017.71.19 5.63 5.63 0 010 7.92L12 21l-8.37-8.43a5.63 5.63 0 010-7.92 5.56 5.56 0 017.71-.19zm7.66 6.75a4.6 4.6 0 00-6.49-6.51L12 6.53l-1.17-1.18a4.6 4.6 0 10-6.49 6.51L12 19.58z"></path></g></svg>
                        <span> Bạn có 10 job đã lưu</span>
                    </div>
                    <div class="more"> Xem chi tiết</div>
                </div>
            </div>
             </div>
        </div>
        <div class="avatar"> 
            <span><svg class="SVGInline-svg d-flex-svg icon__IconStyles__colorDefault-svg" style="width: 36px;height: 36px;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="currentColor" fill-rule="evenodd"><path id="prefix__icon-profile-1" d="M12 2a10 10 0 1010 10A10 10 0 0012 2zm0 19a8.91 8.91 0 01-5.33-1.75 6 6 0 0110.66 0A8.91 8.91 0 0112 21zm6.11-2.4a7 7 0 00-12.22 0 9 9 0 1112.22 0zM12 6a4 4 0 104 4 4 4 0 00-4-4zm0 7a3 3 0 113-3 3 3 0 01-3 3z"></path></g></svg> </span>
        </div></div>

    </nav>
</div>