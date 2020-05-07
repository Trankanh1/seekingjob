var AP = new function __APDialog(){
    /**
     * @desc close the popup
     */
    this.closeDialog = function(){
        $("#apdialog").css("display", "none").css("width", 0).html("");
    }

    /**
     * @desc show the popup
     */
    this.showPopup = function (content){
        $("#apdialog").css("display", "block").css("width", $(window).width()).html(content);
    }

    this.submitForm = function (options){
    
        $.ajax({
            type: "post",
            url: options.url,
            data: options.data,
            success: function (res){

            },
            error: function (res){

            }
        })
    }
}