$(document).ready(function(){
    $("#openGallery").click(function(){
        $("#modalGallery").toggle();
    });
});

$(document).ready(function(){
    $("#openInfo").click(function(){
        $("#modalInfo").toggle();
        $("#modalGallery").hide();
    });
});

$(document).ready(function(){
    $("#openVideo").click(function(){
        $("#modalVideo").show();
    });
    $("#openInfo").click(function(){
        $("#modalVideo").hide();
    });
});