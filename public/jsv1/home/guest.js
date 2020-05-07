var Guest = new function __Guest(){
    this.signIn = function (){
        var modal = `<div id="modal-signin"> 
                        <div class="wrapper">
                            <form method="post" id="signin-fx">
                                <div class="btn-close" onclick="AP.closeDialog()">
                                   ${SVG.close}
                                </div>
                                <div class="title">Đăng nhập để xem việc làm nhiều hơn</div>
                                <div class="content"> 
                                    <div class="btn-google" > 
                                    <span class="svg"> 
                                        ${SVG.google}
                                    </span>
                                <span>Đăng nhập với google</span>
                                </div>
                                <input type="email" class="email">
                                <input type="password" class="psw">
                                <div class="btn-signin"> Đăng nhập</div>
                                <div class="forgot-psw"><a> Quên mật khẩu </a></div>
                                <div class="btn-signup">Quên mật khẩu? <a> Đăng ký</a> </div>
                                </div>
                            </form>
                        </div>
                        </div>`;
        AP.showPopup(modal);
        $(".btn-signin").on("click", function(){
            var data = $("#signin-fx").serialize();
            var options = {url: "/guest/sign-in", data: data}
            AP.submitForm(options);
        })
      
    }
}