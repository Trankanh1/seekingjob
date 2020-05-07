var Guest = new function __Guest() {
    /**
     * @desc User login
     */
    this.signIn = function() {
        var modal = `<div id="modal-signin"> 
                        <div class="wrapper">
                            <form method="post" action="user/login" id="signin-fx">
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
                                <input type="username" name="username" class="email" placeholder="Nhập email">
                                <input type="password" name="password" class="psw" placeholder="Nhập password">
                                <div class="btn-signin"> Đăng nhập</div>
                                <div class="forgot-psw"><a> Quên mật khẩu </a></div>
                                <div class="sign-up url">Chưa có tài khoản? <a onclick="Guest.signUp()"> Đăng ký</a> </div>
                                </div>
                            </form>
                        </div>
                    </div>`;
        AP.showPopup(modal);
        $(".btn-signin").on("click", function() {
            var data = $("#signin-fx").serialize();
            var options = { url: "user/login", data: data }
            AP.submitForm(options, function(res) {

                if (res.code == 0) {
                    return alert(res.message);
                }

                AP.toUrl('member/home');
            });
        })

    }

    this.signUp = function() {
        var modal = `<div id="modal-signin"> 
                        <div class="wrapper">
                            <form method="post" action="user/signup" id="signup-fx">
                                <div class="btn-close" onclick="AP.closeDialog()">
                                ${SVG.close}
                                </div>
                                <div class="title">Đăng ký tài khoản</div>
                                <div class="content"> 
                                <input type="username" name="username" class="email" placeholder="Nhập email">
                                <input type="password" name="password" class="psw" placeholder="Nhập password">
                                <input type="password" name="confirm_password" class="psw" placeholder="Nhập lại mật khẩu">
                                <div class="btn-signup"> Đăng ký</div>
                                <div class="sign-in url">Đã có tài khoản ?<a onclick="Guest.signIn()"> Đăng nhập</a> </div>
                                </div>
                            </form>
                        </div>
                    </div>`;

        AP.showPopup(modal);
        $(".btn-signup").on("click", function() {
            var data = $("#signup-fx").serialize();
            var options = { url: "user/signup", data: data }
            AP.submitForm(options, function(res) {
                if (res.code == 0) {
                    return alert(res.message);
                }

                alert(res.message);
                AP.toUrl('member/home');
            });
        })
    }
}