//Avatar button trigger
$(document.body).on("click", "#signup-avatar", function(event) {
    event.preventDefault()
    $("#profile-image-change-button").trigger('click');
})

//read image from browse button
function readImageURL(input) {
    console.log("Get create image")
    if (input.files) {
        console.log("Files", input.files)
        var reader = new FileReader();
        reader.onload = function(e) {
            console.log(e.target.result)
            document.getElementById("signup-avatar").src = e.target.result
        };
        reader.readAsDataURL(input.files[0]);
    }
}

//Check for non-empty fields 
$('input[value!=""]').addClass('notempty');
$('input').keyup(function() {
    if ($(this).val() != "") {
        $(this).addClass("notempty");
    } else {
        $(this).removeClass("notempty");
    }
});






$(".toggle-password").click(function() {
    $('#toggle-password1').toggleClass("fa-eye fa-eye-slash");
    var input1 = $($(this).attr("toggle1"));
    if (input1.attr("type") == "password") {
        input1.attr("type", "text");
    } else {
        input1.attr("type", "password");
    }
});


$(".passwd").on("focus", function(e) {
    console.log("hello")
    var input1 = $($('.toggle-password').attr("toggle1"));
    console.log(input1)
    input1.attr("type", "password");
    try {
        $('.toggle-password').addClass("fa-eye-slash");
        $('.toggle-password').removeClass("fa-eye");
    } catch {
        console.log()
    }
});