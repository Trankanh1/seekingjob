Employer.candidate = new function __EmployerCandicate() {
    this.list = function() {
        var html = AP.render(Client.pageData.candicates, getCandicateHtml);
        $(".js-candicades").html(html);
        var candiate = Client.pageData.candicates[0];
        $(".resume-detail").html(getDetailResumeHtml(candiate));
        $("#candicates .item[data-id='" +
            candiate.id + "'").addClass("active");

        $("#candicates .item").on("click", function() {
            $("#candicates .item").removeClass("active");
            $(this).addClass("active");
            var candicate_id = $(this).data("id");
            var candiate = AP.array.findObj(Client.pageData.candicates, candicate_id);
            $(".resume-detail").html(getDetailResumeHtml(candiate));
        })
    }

    function getCandicateHtml(e) {
        var job_info = JSON.parse(e.job_export);
        return `<div class="item d-flex url" data-id="${e.id}">
                    <div class="item-left col-lg-4 relative"> 
                        <span class="status"> </span>
                        <div class="content">
                            <div class="job-title">${job_info.title}  </div>
                        <div class="location" ="">${job_info.location}</div>
                        </div>
                    </div>
                    <div class="item-right col-lg-8 text-right relative"> 
                        <div class="status-title"> Need review</div>
                        <div class="time">${AP.time.time("%F %d %Y",e.since)}</div>
                    </div>
                </div>`;
    }

    function getDetailResumeHtml(e) {
        var job_info = JSON.parse(e.job_export);

        return `<header> </header>
                <main> 
                    <div class="resume-wrapper"> 
                        <div class="header"> 
                            <div class="title"> Công việc đã đăng </div>
                            <div class="job-title">${job_info.title} . <span class="location" ="">${job_info.location}</span> </div>
                            <div class="time">Ứng tuyển ${AP.time.ago(e.since)} </div>
                        </div>
                        <div class="resume-main-content"> 
                            <div class="header d-flex">
                                <div class="col-lg-10"> 
                                    <div class="title">Resume </div>
                                    <div class="file-name"> Cv Name</div>
                                </div>
                                
                            </div>
                            <div>
                                <iframe src="${e.file}"> 
            
                                </iframe>
                            </div>
                        </div>
                    </div>
                    </main>
                        `;
    }

}