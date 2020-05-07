Company.job = new function __CompanyJob() {
    this.list = function() {
        var html = AP.render(Client.pageData.jobs, getJobHtml);

        $("#company-jobs").html(html);

    }

    function getJobHtml(e) {
        return `<div class="item">
                <div class="item-left col-lg-10"> 
                    <div class="logo"> <img src="${Client.pageData.company.logo}">  </div>
                    <div class="main">
                        <div class="title"> ${e.title}</div>
                        <div class="company_name"> ${Client.pageData.company.name} </div> - <div class="location">${e.location}</div>
                    </div>
                </div>
                <div class="item-right col-lg-2">
                    <span class="time">${AP.time.ago(e.since)}</span>    
                </div>
            </div><div class="sep-item"> </div>`;
    }
}