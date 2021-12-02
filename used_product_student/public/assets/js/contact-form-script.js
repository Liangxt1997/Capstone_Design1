/*==============================================================*/
// Raque Contact Form  JS
/*==============================================================*/
(function ($) {
    "use strict"; // Start of use strict
    $("#contactForm").validator().on("submit", function (event) {
        if (event.isDefaultPrevented()) {
            // handle the invalid form...
            formError();
            submitMSG(false, "Did you fill in the form properly?");
        } else {
            // everything looks good!
            event.preventDefault();
            submitForm();
        }
    });
    $("#commentSub").validator().on("submit", function (event) {
        if (event.isDefaultPrevented()) {
            // handle the invalid form...
            formError();
            submitMSG(false, "Did you fill in the form properly?");
        } else {
            // everything looks good!
            event.preventDefault();
            submitFormComment();
        }
    });
    $("#feedbackForm").validator().on("submit", function (event) {
        if (event.isDefaultPrevented()) {
            // handle the invalid form...
            formError();
            submitMSG(false, "Did you fill in the form properly?");
        } else {
            // everything looks good!
            event.preventDefault();
            submitFormFeedback();
        }
    })
    function submitFormComment() {
        var title = $('#title').val();
        var description = $('#description').val();
        var product_id = $("#product_id").val();
        $.ajax({
            type: "POST",
            url: '/comment_post',
            data: "title=" + title + "&product_id=" + product_id + "&description=" + description,
            success : function(text){
                if (text.code == 0){
                    formSuccess("#commentSub");
                    location.reload();
                } else {
                    formError("#commentSub", "#commentmsgSubmit");
                    submitMSG(false,'提交失败', "#commentmsgSubmit");
                }
            }
        });
    }
    //提交留言内容
    function submitFormFeedback() {
        var email = $('#email').val();
        var content = $('#content').val();
        var real_name = $("#real_name").val();
        $.ajax({
            type: "POST",
            url: '/feedback_post',
            data: "email=" + email + "&content=" + content + "&real_name=" + real_name,
            success : function(text){
                if (text.code == 0){
                    formSuccess("#feedbackForm", '#feedbackSubmit');
                    // location.reload();
                } else {
                    formError("#feedbackForm");
                    submitMSG(false,'提交失败', "#feedbackSubmit");
                }
            }
        });
    }
    function submitForm(){
        // Initiate Variables With Form Content
        var name = $("#username").val();
        var email = $("#email").val();
        var product_id = $("#product_id").val();
        var phone_number = $("#phone_number").val();
        var content = $("#content").val();


        $.ajax({
            type: "POST",
            url: '/collection_post',
            data: "username=" + name + "&email=" + email + "&product_id=" + product_id + "&phone_number=" + phone_number + "&content=" + content,
            success : function(text){
                if (text.code == 0){
                    formSuccess("#contactForm", "#msgSubmit");
                } else {
                    formError("#contactForm");
                    submitMSG(false,'提交失败', "#contactForm");
                }
            }
        });
    }

    function formSuccess(id, id2){
        $(id)[0].reset();
        submitMSG(true, "提交成功", id2)
    }

    function formError(id){
        $(id).removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
            $(this).removeClass();
        });
    }

    function submitMSG(valid, msg, id){
        if(valid){
            var msgClasses = "h4 tada animated text-success";
        } else {
            var msgClasses = "h4 text-danger";
        }
        $(id).removeClass().addClass(msgClasses).text(msg);
    }
}(jQuery)); // End of use strict