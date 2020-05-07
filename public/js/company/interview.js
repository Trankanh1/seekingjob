Company.interview = new function __CompanyInterview() {

    this.offerRating = [{
            description: "Không được offer",
            class: "no-offer",
        },
        {
            description: "Có, nhưng tôi đã từ tối",
            class: "declined"
        },
        {
            description: "Có, tôi đã đồng ý",

            class: "accepted"
        }
    ];

    var _this = this;

    this.processExperienceRating = [{
            description: "Tiêu cực",
            class: "negative"
        },
        {
            description: "Bình thường",
            class: "normal"
        }, {
            description: "Tích cực",
            class: "positive"
        }
    ];

    this.interviewDifficultyRating = [{
            description: "Rất dễ",
            class: "too_easy"
        },
        {
            description: "Dễ",
            class: "easy"
        },
        {
            description: "Trung bình",
            class: "avg"
        },
        {
            description: "Khó",
            class: "difficult"
        },
        {
            description: "Rất khó",
            class: "too_difficult"
        }
    ]

    this.list = function() {
        var html = AP.render(Client.pageData.interviews, getInterviewReviewHtml);
        $("#reviews").html(html);
    }


    this.listSearchResultInterview = function() {
        var html = "";

        if (Client.pageData.companies) {

            html = this.listCompanyInterview();

        } else {
            html = this.listJobInterview();
        }

        $("#js-companies").html(html);
        AP.redirecToUrl();
    }

    this.listCompanyInterview = function() {
        return AP.render(Client.pageData.companies, function(e) {

            return `<div class="item" >
                        <div class="logo"> 
                            <span class="img"> 
                                <img src="${e.logo}">
                            </span>
                        </div>
                        <div class="main d-flex align-item-flex-end url" data-url="/companies/${e.id}/detail">
                            <div class="info">
                                <div class="company-name">
                                    ${e.name}
                                </div>
                                <div class="rating"> </div>
                                <div class="location"> ${e.head_quarter}</div>
                                <div class="site"> ${e.website}</div>
                            </div>
                            <div class="side-right">
                                <span class="rating">
                                    <i></i> 
                                    <i></i> 
                                    <i></i> 
                                    <i></i> 
                                    <i></i>    
                                </span>
                                <span class="number">2.0 Dễ </span>
                            </div>
                        </div>
                    </div>`;
        });
    }

    this.listJobInterview = function() {
        return AP.render(Client.pageData.interviews, function(e) {
            var question = null;

            if (JSON.parse(e.questions).length > 0) {
                question = JSON.parse(e.questions)[0].question;
            }

            return `<div class="item interview url" data-url="http://${window.location.hostname}/companies/${e.company_id}/interviews">
                            <div class="logo"> 
                                <span class="img"> 
                                    <img src="https://media.glassdoor.com/sqls/692775/gotit-squarelogo-1496437992577.png">
                                </span>
                            </div>
                            <div class="main d-flex align-item-flex-end">
                                <div class="info">
                                    <div class="job-title">
                                        ${e.job_title}
                                    </div>
                                   <div>
                                    <div class="question"> ${question}</div>
                                    <di class="more"> Xem chi tiết</div>
                                </div>
                                <div class="side-right">
                                   
                                    <span class="number">Nov 2020 </span>
                                    </div>
                            </div>
                            </div>
                        </div>`;
        });
    }

    function getInterviewReviewHtml(e) {

        var question_html = "Không có câu hỏi nào";

        if (e.questions) {
            var questions = e.questions.replace(/'/g, '"');
            var questions = JSON.parse(questions);
            question_html = AP.render(questions, function(e) {
                return `<div class="question-row">
                           ${e.question     }
                        </div>`;
            });
        }

        //  Client.pageData.company = JSON.parse(Client.pageData.company);

        return `
                <div class="item">
                    <div class="time"> 
                        <span>${AP.time.time("%M %d %Y")}</span>
                    </div>
                    <div class="main"> 
                        <div class="logo"> 
                            <span> <img src="${Client.pageData.company.logo}"> </span>
                        </div>
                        <div class="interview-container"> 
                            <div class="job-title"> ${e.job_title}
                            </div>
                            <div class="employee_name">Anonymous Interview Candidate in ${e.interview_place} </div>
                            <div class="rating">
                                ${getOfferRating(e)}
                                ${getProcessExperienceRating(e)}
                                ${getInterviewDifficultyRating(e)}
                            </div>
                            <div class="interview-description"> 
                                <div class="title"> Quá trình phỏng vấn</div>
                                <div> 
                                ${e.interview_description}
                                </div>
                            </div>
                            <div class="interview-questions">
                                <div class="title"> Câu hỏi phỏng vấn</div>
                                ${question_html}
                            </div>
                        </div>
                    </div>
                </div>
        `
    }

    function getOfferRating(e) {

        var obj = _this.offerRating[e.interview_outcome - 1];
        return `<div class="offer col-lg-4">
                    <span class="${obj.class} symbol"> </span> 
                    <span>${obj.description}</span>
                </div>`
    }

    function getProcessExperienceRating(e) {
        var obj = _this.processExperienceRating[e.process_exp - 1];
        return `<div class="exper col-lg-4">
                    <span class="${obj.class} symbol"> </span> 
                    <span>${obj.description}</span>
                </div>`
    }

    function getInterviewDifficultyRating(e) {
        var obj = _this.interviewDifficultyRating[e.interview_difficulty - 1];
        return `<div class="difficulty col-lg-4">
                    <span class="${obj.class} symbol"> </span> 
                    <span>${obj.description}</span>
                </div>`
    }
}