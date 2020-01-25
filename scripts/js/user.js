/*$(function () {
    //Showing user list
    $.get('../user/showUserList', function(o) {
        for (var i = 0; i < o.length; i++) {
            $("#listUsers").append(o[i].text);
        }
    }, 'json');

    //Insert a user by an ajax call
    $("#userCreationForm").submit(function () {
        //
        var url = $(this).attr("action");
        var data = $(this).serialize();
        $.post(url, data, function(o) {
            alert("User successfully inserted");
        });
        return false;
    });
});*/