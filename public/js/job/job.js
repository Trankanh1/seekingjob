var Job = new function __Job() {

    this.getParams = function() {
        if (Client.pageData.params) {
            $("input[name='keyword']").val(Client.pageData.params.keyword);
            $("input[name='location']").val(Client.pageData.params.location);
        }

    }

    this.create = function() {
        var body = $('#post-job-fx').serialize();
    }

    this.list = function() {
        var $jobs = $("#js-jobs .job-results");
        var html = AP.render(Client.pageData.jobs, function(e) {
            return getJobHtml(e);
        });

        $jobs.html(html);

        $jobs.find(".main").on("click", function() {
            var jobId = $(this).closest(".item").data('id');
            var job = AP.array.findObj(Client.pageData.jobs, jobId);
            if (!job) {
                alert("Can not find job");
                return;
            }

            $(".job-results .item").removeClass("active");
            $(this).closest(".item").addClass("active");

            var data = $("#signin-fx").serialize();
            var options = { url: "/companies/get", data: { company_id: job.company_id } };

            AP.submitForm(options, function(res) {

                if (res.code == 0) {
                    return alert(res.message);
                }

                var company = JSON.parse(res.company);
                var reviews = JSON.parse(res.reviews);
                console.log(reviews);
                $(".job-detail .header .main").html(getHeaderInfoHtml(job));
                $(".job-detail .content").html(getDetailSectionHtml(job, company, reviews));
            });

        });

    }

    this.listSaved = function() {
        var $jobs = $("#js-jobs .job-results");
        var html = AP.render(Client.pageData.jobs, function(e) {
            return getSavedHtml(e);
        });

        $jobs.html(html);

        $jobs.find(".item").on("click", function() {
            var jobId = $(this).data('id');
            var job = AP.array.findObj(Client.pageData.jobs, jobId);
            if (!job) {
                alert("Can not find job");
                return;
            }

            $(".job-results .item").removeClass("active");
            $(this).addClass("active");
            $(".job-detail .header .main").html(getHeaderInfoHtml(job));
            $(".job-detail .content").html(getDetailSectionHtml(job));
        });

    }

    this.listRecommened = function() {
        var html = AP.render(Client.pageData.recommened_jobs, getRecommenedHtml);
        $("#jobs").html(html);

    }

    this.listRecentSearch = function() {
        var html = AP.render(Client.pageData.recentSearches, function(e) {

            return getRecentSearchHtml(e);
        });

        $("#results").html(html);
    }

    this.apply = function(job_id) {
        var job = AP.array.findObj(Client.pageData.jobs, job_id);
        if (!job) alert("Job not found");

        var modal = `<div id="modal-apply" style="height: 700px">
                        <div class="header"> 
                            <div class="job-title">Nộp đơn ứng tuyển vị trí <b> ${job.title}</b>
                            </div>
                            <div class="company-name"> ${job.company_name} <span class="location"> - ${job.location} </span></div>
                            <div class="btn-close url" onclick="AP.closeDialog()">
                            ${SVG.close}
                         </div>
                        </div>
                        <form id="apply-job-fx" method="post" action="/jobs/apply" enctype="multipart/form-data">  

                            <div class="row">
                                <input type="text" name="fullname" value="${__(Client.data.viewer.fullname)}"> 
                                <label class="label">Họ và tên</label>
                            </div>
                            <div class="row">
                                <input type="text" name="email" value="${__(Client.data.viewer.email)}"> 
                                <label class="label"> Địa chỉ email</label>
                            </div>
                            <div class="row">
                                <input type="file" name="cv"> 
                                <label class="label"> CV</label>
                            </div>
                            <div class="row">
                                <input type="text" name="phone" value="${__(Client.data.viewer.phone)}"> 
                                <label class="label"> Số điện thoại</label>
                            </div>
                            <div class="row">
                                <input type="text" name="address" value="${__(Client.data.viewer.address)}"> 
                                <label class="label"> Địa chỉ</label>
                            </div>
                            <div class="row">
                            <input type="hidden" name="job_id" value='${job_id}'> 
                                <button type="submit">Nộp đơn </button>
                            </div>  
                        </form>
                     </div>`;
        AP.showPopup(modal);
        $("#apdialog").css("background", "#3e3e3e");

    }

    this.searchByRecent =
        function(ref) {
            var recentSearch = $(ref).data("recent-search");
            var params = "?";
            for (key in recentSearch) {
                params += key + "=" + recentSearch[key];
            }
            location.replace((location).attr("href") + params);
        }

    this.clearFilter = function() {
        location.replace(location.protocol + "//" + window.location.hostname + "/jobs/search-result");
    }

    this.addViewd = function(id) {
        var options = { url: "/jobs/add-viewed", data: { job_id: id } }
        AP.submitForm(options, function(res) {
            if (res.code == 0) {
                return alert(res.message);
            }
        });
    }

    this.save = function(id) {

        var options = { url: "/jobs/add-saved", data: { job_id: id } }
        AP.submitForm(options, function(res) {
            if (res.code == 0) {
                return alert(res.message);
            }
            alert(res.message);
        });
    }


    function getJobHtml(e) {
        return `<div class="item url" data-id="${e.id}" onClick="Job.addViewd(${e.id})">
                    <div class="logo"> <img src="https://media.glassdoor.com/sqls/692775/gotit-squarelogo-1496437992577.png"></div>
                    <div class="main">
                        <div class="company-name">${__(e.company_name)}</div>
                        <div class="job-title">${__(e.title)} </div>
                        <div class="location">${__(e.location)} </div>
                    </div>
                    <div class="relative">
                        <div onclick="Job.save(${e.id})"> <span><svg class="SVGInline-svg job-alert-icon-svg css-1mgba7-svg css-25qyin-svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19.66 11.864a4.626 4.626 0 000-6.51 4.569 4.569 0 00-6.491 0L12 6.53l-1.169-1.178a4.569 4.569 0 00-6.492 0 4.626 4.626 0 000 6.511L12 19.581l7.66-7.717zM12 5.111l.66-.654a5.569 5.569 0 017.71.192 5.626 5.626 0 010 7.92L12 21l-8.37-8.431a5.626 5.626 0 010-7.92 5.569 5.569 0 017.71-.192l.66.654z" fill="#00f" fill-rule="evenodd"></path></svg></span></div>
                        <div class="info">${AP.time.ago(e.since)} </div>
                    </div>
                </div>`
    }

    function getSavedHtml(e) {
        return `<div class="item url" data-id="${e.id}">
                    <div class="logo"> <img src="https://media.glassdoor.com/sqls/692775/gotit-squarelogo-1496437992577.png"></div>
                    <div class="main">
                        <div class="company-name">${__(e.company_name)}</div>
                        <div class="job-title">${__(e.title)} </div>
                        <div class="location">${__(e.location)} </div>
                    </div>
                    <div class="relative">
                 
                        <div class="info">8d </div>
                    </div>
                </div>`
    }

    function getRecentSearchHtml(e) {
        var querySearch = JSON.parse(e.query);
        return `<div class="item url" onclick="Job.homePage.continueSearch(this)" data-keyword="${__(e.company_name)}" data-location="${__(e.location)}">
                    <div class="icon-search"><span class="SVGInline css-25qyin"><svg class="SVGInline-svg css-25qyin-svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M16.854 16.147l5.002 5.002a.5.5 0 01-.707.707l-5.002-5.002a8.5 8.5 0 11.707-.707zM10.5 18a7.5 7.5 0 100-15 7.5 7.5 0 000 15z" fill="#858c94" fill-rule="evenodd"></path></svg></span></div>
                    <div class="main">
                        <div>Công việc gần ${__(querySearch.location)}</div>
                        <div class="result"> <span class="count">${e.count} kết quả </span>được tìm thấy</div>
                    </div>
                </div>`;
    }

    function getRecommenedHtml(e) {
        return `<div class="item url">
                    <div class="common-info d-flex flex-direction-row">
                        <div class="logo"> <img src="https://media.glassdoor.com/sqlm/217351/fortna-squarelogo-1484076543270.png"> </div>
                        <div class="main"  onclick="Job.homePage.continueSearch(this)" data-keyword="${__(e.company_name)}" data-location="${__(e.location)}">
                            <div class="company-name"> ${__(e.company_name)}</div>
                            <div class="job-title"> ${__(e.title)}</div>
                            <div class="location">${__(e.location)} </div>
                        </div>
                        <div class="extra-action relative url">
                            <div class="" onclick="Job.save(${e.id})"> <span><svg class="SVGInline-svg job-alert-icon-svg css-1mgba7-svg css-25qyin-svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19.66 11.864a4.626 4.626 0 000-6.51 4.569 4.569 0 00-6.491 0L12 6.53l-1.169-1.178a4.569 4.569 0 00-6.492 0 4.626 4.626 0 000 6.511L12 19.581l7.66-7.717zM12 5.111l.66-.654a5.569 5.569 0 017.71.192 5.626 5.626 0 010 7.92L12 21l-8.37-8.431a5.626 5.626 0 010-7.92 5.569 5.569 0 017.71-.192l.66.654z" fill="#00f" fill-rule="evenodd"></path></svg></span>	</div>
                            <div class="absolute time">${AP.time.ago(e.since)} </div>
                        </div>
                    </div>
                </div>`;
    }

    function getHeaderInfoHtml(e) {
        return `
            <div class="content-left col-lg-5">
                <div class="company-name">${__(e.company_name)}</div>
                <div class="job-title">${__(e.title)}</div>
                <div class="location"> ${__(e.location)}</div>
            </div>
            <div class="content-right d-flex col-lg-5"> 
                <div class="btn-apply url" onclick="Job.apply(${e.id})">
                    <span class="icon"><i class="fa fa-hand-o-right" aria-hidden="true"></i></span>
                    Apply now</div>
                <div class="btn-save url" onclick="Job.save(${e.id})"><span class="svg"><svg class="SVGInline-svg heart-svg save-svg margRtXs-svg css-zve8bc-svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="currentColor" fill-rule="evenodd"><path id="prefix__icon-save-1" d="M12 5.11l.66-.65a5.56 5.56 0 017.71.19 5.63 5.63 0 010 7.92L12 21l-8.37-8.43a5.63 5.63 0 010-7.92 5.56 5.56 0 017.71-.19zm7.66 6.75a4.6 4.6 0 00-6.49-6.51L12 6.53l-1.17-1.18a4.6 4.6 0 10-6.49 6.51L12 19.58z"></path></g></svg></span>
                 Save</div>
              
            </div>
		`;
    }

    function getDetailSectionHtml(e, company, reviews) {

        var html = "";
        var review_html = AP.render(reviews, getReviewHtml);
        return html = `<section class="job-info active">
                            ${e.description}
                        </section>
                        <section class="company-overview">
                            <div class="title">Overview </div>
                            <div class="info d-flex">
                                <div class="row"><label> Headquarter</label><span> ${company.head_quarter}</div>
                                <div class="row"><label> Size</label><span> ${company.size} employees</span></div>
                                <div class="row"><label> Founded</label><span> ${company.found}</span></div>
                                <div class="row"><label> Type</label><span> </span></div>
                                <div class="row"><label> Industry</label><span> ${company.industry}</span></div>
                                <div class="row"><label> Sector</label><span> Software</span></div>
                                <div class="row"><label> Revenue</label><span> Unknown</span></div>
                            </div>
                            <div class="link-web"> 
                                <a href="${company.website}" style="color:blue">Xem link website</a>
                            </div>
                            <div class="title-photo"> ${company.name} Photos</div>
                            <div class="photos d-flex flex-wrap"> 
                                <div class="item">
                                    <img src="https://media.glassdoor.com/lst/01/40/e6/54/seoul-team-outing-laser-tag.jpg">
                                </div>
                                <div class="item">
                                    <img src="https://media.glassdoor.com/lst/01/40/e6/54/seoul-team-outing-laser-tag.jpg">
                                </div>
                                <div class="item">
                                    <img src="https://media.glassdoor.com/lst/01/40/e6/54/seoul-team-outing-laser-tag.jpg">
                                </div>
                                <div class="item">
                                    <img src="https://media.glassdoor.com/lst/01/40/e6/54/seoul-team-outing-laser-tag.jpg">
                                </div>
                                <div class="item">
                                    <img src="https://media.glassdoor.com/lst/01/40/e6/54/seoul-team-outing-laser-tag.jpg">
                                </div>
                                <div class="item">
                                    <img src="https://media.glassdoor.com/lst/01/40/e6/54/seoul-team-outing-laser-tag.jpg">
                                </div>
                                <div class="item">
                                    <img src="https://media.glassdoor.com/lst/01/40/e6/54/seoul-team-outing-laser-tag.jpg">
                                </div>
                            </div>
                        </section>
                        
                        <section class="review-overview"> 
                            <div class="" id="reviews"> 
                                ${review_html}
                            </div>
                        </section>
                        
                    </div>
                `;


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
                            <span> <img src="https://cdn.itviec.com/employers/fpt-software/logo/w170/mir3HT3xtedbECJY5jVeRRgV/fpt-software-logo.png"> </span>
                        </div>
                        <div class="review"> 
                            <h3>"${e.headline}"</h3>
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
                </div>   <div class="sep-item"> </div>`
    }
}