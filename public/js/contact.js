/**
 * Created by Xiaoyu on 3/9/2015.
 */
$(function(){
    $("input#submit.button").click(function() {
        var name = $("#name").val();
        var email = $("#email").val();
        var msg = $("#message").val();
        if (name == '' || email.indexOf('@') == -1 || msg == '') {
            alert("Insertion Failed Some Fields are Blank (or invalid)....!!");
        } else {
            // Returns successful data submission message when the entered information is stored in database.
            $.post("functions.php", {
                "name": name,
                "email": email,
                "message": msg
            }, function(data) {
                $('#form').html("<h2>Thanks! Your Email has been sent!</h2>"); // To reset form fields
            });
        }
    });
})