
<head>
    <title>App Name - @yield('title')</title>

    <link href="{{ asset('css/global.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/layout.css') }}" rel="stylesheet" type="text/css" media="all" />
        <!--//tags -->
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet">
    <link href="{{ asset('css/interview.css') }}" rel="stylesheet">
    <link href="{{ asset('css/company.css') }}" rel="stylesheet">
    <link href="{{ asset('css/job.css') }}" rel="stylesheet">
    <link href="{{ asset('css/search.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <!-- //for bootstrap working -->
    <!--<link href="//fonts.googleapis.com/css?family=Roboto:200,300,400,500,600,700" rel="stylesheet">-->
    <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic'
        rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- js -->
    <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/svg.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/common/ap.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="{{ asset('js/home/guest.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/circles.min.js') }}"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"> </script>
</head>
<body>
    <div id="add-review">
        <div class="header"> 
            <div class="content"> 
                <div class="logo">Seekingjob </div>
            </div>
        </div>
        <div class="main-container"> 
            <div class="title">Tạo bình luận về lần phỏng vấn dần nhất của bạn </div>
            <div class="content-wrapper">
                <form action="{{ route('add-interview') }}" method="post"> 
                    <div class="employer-info"> 
                        <div> Tên nhà tuyển dụng</div>
                        <input type="text" name="employer_name">
                    </div>
                    <div class="rate-experience"><div class="title">
                            Đánh giá trả nghiệm 
                        </div>
                        <div class="rate"> 
                            <div class="positive" title="Tích cực"> 
                                <span> <i class="fa fa-thumbs-o-up" aria-hidden="true"></i></span>
                                <input type="radio" name="process_experience" aria-label="process_experience" value="3">
                            </div>
                            <div class="normal" title="Bình thường"> 
                                <span> <i class="fa fa-minus" aria-hidden="true"></i></span>
                                <input type="radio" name="process_experience" aria-label="process_experience" value="2">
                            </div>
                            <div class="negative" title="Tiêu cực"> 
                                <span><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></span>
                                <input type="radio" name="process_experience" aria-label="process_experience" value="1">

                            </div>
                        </div>
                    </div>
                    <div class="job-title">
                        <div class="title"> Tên công việc</div>
                        <input name="job_title" type="text" placeholder="Nhập tên công việc ứng tuyển">
                    </div>
                    <div class="desc-interview-process"> 
                        <div class="title">Mô tả quá trình phỏng vấn</div>
                        <textarea name="interview_description" id="" cols="30" rows="10" placeholder="Mô tả quá trình phỏng vấn"></textarea>
                    </div>
                    <div class="interview-question"> 
                        <div class="questions"> 
                            <div class="row"> 
                                <div class="question"> 
                                    <textarea name="questions[]" placeholder="Câu hỏi của nhà tuyển dụng" id="" cols="30" rows="10"></textarea>
                                </div>
                                <div class="answer"> 
                                    <textarea name="answers[]" placeholder="Câu trả lời của bạn (Có thể điền hoặc không)" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                    
                        <div class="btn-add-question"> 
                            Tạo câu hỏi
                        </div>
                    </div>
                    <div class="interview_difficulty"><div class="title">Đánh giá câu hỏi phòng vấn </div><select name="interview_difficulty" id="">
                            <option value="1">Rất dễ </option>
                            <option value="2">Dễ </option>
                            <option value="3">Trung bình</option>
                            <option value="4">Khó </option>
                            <option value="5">Rất khó </option>
                        </select>
                    </div>
                    <div class="interview-outcome"> 
                        <div class="title">Bạn có được offer không</div>
                        <div class="rating">
                            <div title="Không"> 
                                <span><i class="fa fa-times" aria-hidden="true"></i></span>
                                <input type="radio" name="interview_outcome" aria-label="interview_outcome" value="1">
                            </div>
                            <div title="Có nhưng tôi đã từ chối">
                            <span> <i class="fa fa-minus" aria-hidden="true"></i></span>
                                <input type="radio" name="interview_outcome" aria-label="interview_outcome" value="2">
                            </div>
                            <div title="Có, tôi đã nhận offer">
                                <span><i class="fa fa-check" aria-hidden="true"></i></span>
                                <input type="radio" name="interview_outcome" aria-label="interview_outcome" value="3">
                            </div>
                        </div>
                    </div>
                    <div class="interview-place"> 
                        <div class="title">Nơi phỏng vấn  </div>
                        <input type="text" name="interview_place">
                    </div>
                    <div class="btn-submit"> <button type="submit"> Submit interview</button></div>
                
                </form>
            </div>
            
        </div>
    </div>
<script> 
    $(".rate div").on("click", function(){
        $(".rate div").removeClass("selected");
        $(this).addClass("selected");
        $(this).find("input").prop("checked", true);

    })

    $(".interview-outcome .rating div").on("click", function(){
        $(".interview-outcome .rating div").removeClass("selected");
        $(this).addClass("selected");
         $(this).find("input").prop("checked", true);
    })
    var questionRowHtml = `<div class="row"> 
                                <div class="question"> 
                                    <textarea name="questions[]" placeholder="Câu hỏi của nhà tuyển dụng" id="" cols="30" rows="10"></textarea>
                                </div>
                                <div class="answer"> 
                                    <textarea name="answers[]" placeholder="Câu trả lời của bạn (Có thể điền hoặc không)" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>`;

    $(".btn-add-question").on("click", function(){
        $(".questions").append(questionRowHtml);
    })
</script>
</body>