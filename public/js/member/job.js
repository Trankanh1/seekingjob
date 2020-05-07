Member.job = new function __MemberJob() {
    this.listApplied = function() {
        var html = AP.render(Client.pageData.applications, getAppliedJobHtml);

        $("#job-vieweds").html(html);
    }

    this.showJobAppliedDetail = function(application_id) {
        var application = AP.array.findObj(Client.pageData.applications, application_id);
        if (!application) alert("Application not found");
        var job = JSON.parse(application.job_export);
        var modal = `<div id="modal-apply" style="height: 1000px">
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
                                <input type="text" name="fullname"  value="${__(application.fullname)}"> 
                                <label class="label">Họ và Tên </label>
                            </div>
                            <div class="row">
                                <input type="text" name="email" value="${__(application.email)}"> 
                                <label class="label"> Địa chỉ email</label>
                            </div>
                         
                            <div class="row">
                                <input type="text" name="phone" value="${__(application.phone)}"> 
                                <label class="label"> Số điện thoại</label>
                            </div>
                            <div class="row">
                                <input type="text" name="address" value="${__(application.address)}"> 
                                <label class="label"> Địa chỉ</label>
                            </div>
                            <div class="row">
                            <div class=""> CV</label>
                            <div class="embed-cv">
                                <iframe src="${__(application.file)}"> </iframe> 
                            </div>
                        </div>
                        </form>
                     </div>`;
        AP.showPopup(modal);
    }

    function getAppliedJobHtml(e) {
        var job_info = JSON.parse(e.job_export);

        return `<div class="item url col-lg-3" onclick="Member.job.showJobAppliedDetail(${e.id})"> 
                    <div class="content d-flex align-item-center"> 
                        <div class="logo">
                            <img src="https://media.glassdoor.com/sqlm/780684/fpt-squarelogo-1447678981694.png">
                        </div>
                        <div class="main relative"> 
                            <div class="company-name"> FPT Software</div>
                            <div class="job-title">${job_info.title}</div>
                            <div class="location"> ${job_info.location}</div>
                        </div>
                    </div>
                </div>`;
    }
}