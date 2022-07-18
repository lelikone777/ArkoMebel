// Первичное определение города
function determinecurrentcity() {
    var localcity = ymaps.geolocation.city;

    if(localcity == null){
        jQuery("#city-ajax").text('unknown');
    } else {
        jQuery("#city-ajax").text(localcity);

        $.ajax({ // Отправка данных в session
            url: "/wp-admin/admin-ajax.php",
            method: 'post',
            data: {
                action: 'ajax_city',
                city: localcity,
            }
        });

        setTimeout(function () { $(".city-descript-block").load("/wp-content/themes/magazin-3.0/city-description.php"); }, 800);
    }
};