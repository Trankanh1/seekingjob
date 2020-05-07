Employer.job = new function __EmployerJob() {
    this.list = function() {
        var html = AP.render(Client.pageData.jobs, getJobHtml);
        $(".js-jobs tbody").html(html);
    }

    function getJobHtml(e) {
        var job_status = getJobStatus(e);
        var salary = e.salary ? e.salary : "Theo năng lực";
        return `<tr> 
                    <td class="text-left"> 
                        <div class="d-flex relative align-item-center"> 
                            <div class="logo">
                                <img src="https://media.glassdoor.com/sqlm/780684/fpt-squarelogo-1447678981694.png">
                            </div>
                            <div class="job-title"> ${e.title}</div>
                        </div>
                    </td>
                    <td class="text-left"> 
                        ${e.location}
                    </td><td>${salary}</td>
                    <td class="text-center"> ${AP.time.time("%M %d %Y ",e.since)}</td>
                    <td class="text-center"> <span class="status ${job_status.class_name}"> ${job_status.description}</span></td>
                    <td class="mopt relative">
                        <span><i class="fa fa-ellipsis-h" aria-hidden="true"></i> </span> 
                        <div class="opts" style="right:0;top:20px;text-align:center;width:111px"> 
                            <div class="opt url" onclick="Employer.job.form.displayUpdate(${e.id})"> Sửa </div>
                            <div class="sep-item"> </div>
                            <div class="opt url" data-url="/jobs/${e.id}/delete">Xoá </div>
                    </div>
                    </td>
                </tr>`;
    }

    function getJobStatus(e) {
        var today = AP.time.now();
        var status = {};
        if (!e.expire_time || (e.expire_time >= today)) {
            status["class_name"] = "going";
            status["description"] = "Đang diễn ra";
        } else {
            status["class_name"] = "expired";
            status["description"] = "Hết thời hạn";
        }

        return status;
    }
}