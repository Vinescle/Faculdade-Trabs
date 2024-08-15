function abrir(url, dados , div){
    $.ajax({
        method: "POST",
        url: url,
        data: dados,
        beforeSend: function () {
            //Aqui adicionas o loader
            $(div).html("<div class=\"text-center\"><div class=\"spinner-border\" role=\"status\"></div><div class=\"spinner-grow text-danger\" role=\"status\"></div></div>");
        },
        success: function(result)
        {
          $(div).html(result);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            $(div).html(textStatus);
        }
    });
}