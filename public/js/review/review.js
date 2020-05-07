var Review = new function __Review() {
    this.list = function() {

        if (!Client.pageData.companies) return "";

        var html = AP.render(Client.pageData.companies, getCompanyHtml);

        $("#js-companies").html(html);
    }

    this.recommenedJob = function() {
        if (!Client.pageData.recommeneds) return "";

        var html = AP.render(Client.pageData.recommeneds, getRecommenedHtml);
        var recommened_html = `<div class="content-right col-lg-3">
                                    <div class="wrapper">
                                        <div class="title">Công việc có thể phù hợp với bạn</div>
                                        <div id="suggested-jobs">
                                            ${html}
                                        </div>
                                    </div>
                                </div>`;
        $("#page-content .content").append(recommened_html);
    }

    function getRecommenedHtml(e) {
        return `<div class="item url" onclick="Job.homePage.continueSearch(this)" data-keyword="${__(e.title)}" data-location="${__(e.location)}">
                    <div class="logo">
                        <img src="https://media.glassdoor.com/sqlm/780684/fpt-squarelogo-1447678981694.png">
                    </div>
                    <div class="job-wrapper">
                        <div class=""><a href="">${e.title}</a></div>
                        <div class="job-location">${e.location}</div>
                    </div>
                </div>`;
    }

    function getCompanyHtml(e) {
        return `<div class="item">
                    <div class="logo"> 
                        <span class="img"> 
                            <img src="https://media.glassdoor.com/sqlm/780684/fpt-squarelogo-1447678981694.png">
                        </span>
                    </div>
                    <div class="main d-flex align-item-flex-end">
                        <div class="info">
                            <div class="company-name">
                              ${e.name}
                            </div>
                            <div class="rating">2 <span class="icon"><i class="fa fa-star" aria-hidden="true"></i></span></div>
                            <div class="location"> ${e.head_quarter}</div>
                            <div class="site">${e.website}</div>
                        </div>
                        <div class="side-right">
                            <div class="stats d-flex">
                                <div class="count-review nopad col-lg-4"><span class="num"> 4</span> <div>reviews</div></div>
                                <div class="count-salary nopad col-lg-4"><span class="num"> 4</span> <div>lương</div></div>
                                <div class="count-interview nopad col-lg-4"> <span class="num"> 4</span> <div>phỏng vấn</div></div>
                            </div>
                            <div class="btn-review" data-url="/companies/${e.id}/review">Viết đánh giá </div>
                        </div>
                    </div>
                </div>`;
    }
}