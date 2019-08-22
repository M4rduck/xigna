$(".dial").knob({
    "cursor": false
});

$(".btn").click(function(){
    const percent = parseInt($(this).attr("data-percent"));
    let srcCepillo = $("#cepillo").attr("src").split("cepillo")[0];
    
    $(".dial").val(percent).trigger('change');

    percent === 50 ? srcCepillo += "cepillo-normal.png" : srcCepillo += "cepillo-twister.png";

    $("#cepillo").attr("src", srcCepillo);
    
    $(".btn").removeClass("desactive");

    $(".btn").not(this).addClass("desactive");    
});
