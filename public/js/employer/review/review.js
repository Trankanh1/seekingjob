Employer.review = new function __EmployerReview() {
    this.list = function() {
        if (!Client.pageData.reviews) return "";
        var html = AP.render(Client.pageData.reviews, getReviewHtml);
        $(".content-wrapper > .title").html(`Tất cả review (${Client.pageData.reviews.length})`);
        $("#reviews").html(html);
    }

    function getReviewHtml(e) {
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