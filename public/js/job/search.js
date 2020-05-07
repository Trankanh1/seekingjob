Job.search = new function __JobSearch() {

    this.listRecent = function() {
        var html = AP.render(Client.pageData.recentSearches, function(e) {
            return getRecentHtml(e);
        });

        $("#job-searches").html(html);
    }

    this.searchOpt = function() {

        $(".post-time .opts .opt").on("click", function() {
            var url = $(location).attr("href");


            var searchQuery = url.indexOf("?");
            var key = $(this).data("filter");
            var value = $(this).data(key);

            if (searchQuery == -1) {
                url += "?" + key + "=" + value;
                location.replace(url);
            } else {
                if (url.search(key) == -1) {
                    url += "&" + key + "=" + value;
                    location.replace(url);
                } else {
                    url = url.substr(window.location.hostname.length + 8);
                    var _url = url.replace(/(\&*)([\w\-]+)\=([\w\-\%\(\)\.\@\/]+)/g, function(match, p0, p1, p2) {
                        if (p1 == key) {
                            return p0 + p1 + "=" + value;
                        }
                    });

                    location.replace(location.protocol + "//" + window.location.hostname + "/" + _url);
                }
            }
        })
    }

    function getRecentHtml(e) {
        return `<div class="item col-lg-3"> 
                    <div class="content d-flex align-item-center"> 
                        <div class="main col-lg-10"> 
                            <div class="job-title"> 
                                Software engineer 
                            </div>
                            <div class="job-location">ha noi </div>
                            <div class="filter"> <span> &lt; 10 Miles</span> <span> &lt; 10 Miles</span> </div>
                        </div>
                        <div class="icon col-lg-2"> 
                            <span class="SVGInline blueCaret"><svg class="SVGInline-svg blueCaret-svg" height="16" viewBox="0 0 16 16" width="16"><path d="M9.56 7.999L4.83 3.743a1 1 0 011.338-1.486l5.003 4.503c.685.616.74 1.67.124 2.354-.06.064-.06.064-.124.123L6.17 13.741a1 1 0 01-1.338-1.487z" fill="#1861bf" fill-rule="evenodd"></path></svg></span>
                        </div>
                    </div>
                </div>`
    }
}