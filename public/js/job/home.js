Job.homePage = new function __JobHomePage() {

    this.listRencentSearches = function() {
        if (!Client.pageData.recentSearches) return "";
        var html = AP.render(Client.pageData.recentSearches, function(e) {
            var querySearch = JSON.parse(e.query);
            return getRecentSearchHtml(querySearch);
        });

        $("#job-searches").html(html);
    }

    this.listViewed = function() {
        if (!Client.pageData.recentVieweds)
            return "";
        var html = AP.render(Client.pageData.recentVieweds, getViewedHtml);
        $("#job-vieweds").html(html);
    }

    this.continueSearch = function(ref) {
        location.replace("http://" + window.location.hostname + "/jobs/search-result" + "?keyword=" + $(ref).data("keyword") + "&location=" + $(ref).data("location"));
    }

    this.continueViewDetail = function(id) {
        location.replace("http://" + window.location.hostname + "/jobs/search-result?job_id=" + id);
    }

    function getRecentSearchHtml(query) {

        return `<div class="item url col-lg-3" onclick="Job.homePage.continueSearch(this)" data-keyword="${query.keyword}" data-location="${query.location}"> 
                    <div class="content d-flex align-item-center"> 
                        <div class="main col-lg-10"> 
                            <div class="job-title"> 
                                ${__(query.keyword)}
                            </div>
                            <div class="job-location">${__(query.location)} </div>
                            <div class="filter"> <span> &lt; 10 Miles</span> <span> &lt; 10 Miles</span> </div>
                        </div>
                        <div class="icon col-lg-2"> 
                            <span class="SVGInline blueCaret"><svg class="SVGInline-svg blueCaret-svg" height="16" viewBox="0 0 16 16" width="16"><path d="M9.56 7.999L4.83 3.743a1 1 0 011.338-1.486l5.003 4.503c.685.616.74 1.67.124 2.354-.06.064-.06.064-.124.123L6.17 13.741a1 1 0 01-1.338-1.487z" fill="#1861bf" fill-rule="evenodd"></path></svg></span>
                        </div>
                    </div>
                </div>`;
    }

    function getViewedHtml(e) {
        return `<div class="item url col-lg-3" onclick="Job.homePage.continueViewDetail(${e.id})"> 
                    <div class="content d-flex align-item-center"> 
                        <div class="logo">
                            <img src="https://media.glassdoor.com/sqlm/780684/fpt-squarelogo-1447678981694.png">
                        </div>
                        <div class="main relative"> 
                            <div class="company-name"> ${__(e.company_name)}</div>
                            <div class="job-title">${__(e.title)}</div>
                            <div class="location"> ${__(e.location)}</div>
                        </div>
                    </div>
                </div>`
    }
}