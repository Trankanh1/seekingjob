Employer.job.form = new function __EmployerJobForm() {
    this.displayUpdate = function(job_id) {
        var job = AP.array.findObj(Client.pageData.jobs, job_id);
        if (!job)
            return alert("Job not found")

        var form = `
                    <div id="post-job">
                        <div class="main-container"> 
                        <form id="post-job-fx" method="post" action="${location.protocol}//${location.hostname}/jobs/${job.id}/update">
                        <div class="content" style="background:#fff">
                            <div class="title">
                                Sửa thông tin tuyển dụng
                                <div class="btn-close" onclick="AP.closeDialog()" style="float:right">
                                ${SVG.close}
                             </div>
                            </div>
                            
                            <div class="company-name">
                                </div>
                                                <div class="job-location"> 
                                    <label>Địa điểm</label>
                                    <div>  <input placeholder="Job location" name="location" value="${job.location}"> </div>
                                                </div>
                                                <div class="job-title"> 
                                    <label> Tên công việc </label>
                                <div>
                                <input placeholder="Job title" name="title" value="${job.title}">
                                </div>
                                    </div>
                                                <div class="job-description"> 
                                    <label>Mô tả công việc </label>

                                <div>    </div> 
                               
                                <textarea id="description" name="description" style="visibility: hidden; display: none;" value=""> </textarea></div>
                                <div> <button class="btn-continue">Sửa </button></div>
                            </div>
                        </form>
                        </div>
        </div>`;
        AP.showPopup(form);
        CKEDITOR.replace('description');
        CKEDITOR.instances['description'].setData(job.description);
    }

    this.update = function() {

    }
}