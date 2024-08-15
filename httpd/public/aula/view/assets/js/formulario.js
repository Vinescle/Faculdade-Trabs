$("form#formnovo").submit(function(e) {
    
    e.preventDefault();
    
    let end = document.getElementById("formulario").value;
    let loc = document.getElementById("local").value;
    var data = new FormData(this);
    
    $.ajax({
        url: "controller/"+end+".php",
        type: "POST",
        data: data,
        mimeType: "multipart/form-data",
        contentType: false,
        cache: false,
        processData:false,
        beforeSend: function () {
                //Aqui adicionas o loader
                $(loc).html("<div class=\"text-center\"><div class=\"spinner-border\" role=\"status\"></div><div class=\"spinner-grow text-danger\" role=\"status\"></div></div>");
        },
        success: function(result){        
            $(loc).html(result);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            $(loc).html(textStatus + errorThrown);
        }
    });
});