Company.review = new function __CompanyReview() {
    this.totalReview = 0;
    this.totalRate = 0;

    this.displayHeader = function() {
        var data = JSON.parse(Client.pageData.company.data);
        var nav = `<div class="d-flex col-lg-10 align-item-center">
                        <div class="tab col-lg-2 url overview" data-url="/companies/${Client.pageData.company.id}/overview"> <span>Overview </span> </div>
                        <div class="sep-cell"> </div>
                        <div class="tab col-lg-2" data-url="/companies/${Client.pageData.company.id}/reviews"> <span class="number">${data.reviews}  </span> <span class="title"> Reviews </span></div>
                        <div class="sep-cell"> </div>
                        <div class="tab col-lg-2 job" data-url="/companies/${Client.pageData.company.id}/jobs"> <span  class="number"> ${data.jobs}</span> <span  class="title">Jobs </span></div>
                        <div class="sep-cell"> </div>
                        <div class="tab col-lg-2 interview" data-url="/companies/${Client.pageData.company.id}/interviews"> <span  class="number">${data.interviews}  </span>  <span  class="title">Phỏng vấn </span></div>
                    </div>`;
        $(".menu .nav").html(nav);
        var avg = (Company.review.totalReview / Company.review.totalReview).toFixed(1);
        $("#company-detail .wrapper .common-info .main .name .icon").html(`${avg}<i class="fa fa-star" aria-hidden="true"></i>`)
    }

    this.list = function() {
        if (!Client.pageData.reviews) return "";

        var html = AP.render(Client.pageData.reviews, getReviewHtml);

        $("#reviews").html(html);

    }

    function getReviewHtml(e) {

        if (e.rate)
            Company.review.totalRate += parseInt(__(e.rate));
        Company.review.totalReview++;

        var star_html = "";
        for (var i = 1; i <= 5; i++) {
            var selected = i <= e.rate ? "selected" : "";

            star_html += `<span class="${selected}"> <i class="fa fa-star" aria-hidden="true"></i></span>`;
        }

        return `<div class="item">
                    <div class="time"> 
                        <span>${AP.time.time("%F %d %Y",e.since)}</span>
                       
                    </div>
                    <div class="main"> 
                        <div class="logo"> 
                            <span> <img src="https://media.glassdoor.com/sqlm/780684/fpt-squarelogo-1447678981694.png"> </span>
                        </div>
                        <div class="review"> 
                            <h3>"${__(e.headline)}"</h3>
                            <div class="">
                                <span class="rating"> 
                                    ${star_html}
                                </span>
                                <span> Current employee - ${e.job_title}</span>
                            </div>
                            <div class="pros"> 
                                <div class="title">Pros </div>
                               ${e.pros}
                            </div>
                            <div class="cons"> 
                                <div class="title">Cons </div>
                               ${e.cons}
                            </div>
                        </div>
                    
                    </div>
                </div>`;
    }
}