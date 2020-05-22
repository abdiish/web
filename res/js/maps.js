function initMap() {
    //var keyMap = AIzaSyD3n1ci95kFbFTboA_nlzisCGDkJKFJh8I;
    var uluru = {lat: 19.6239742, lng: -98.1054412};
    var map = new google.maps.Map(document.getElementById('map-google'), {
        zoom: 16,
        center: uluru
        });
                    
    var contentString = '<div id="content">'
                        +'<div id="siteNotice">'
                        +'</div>'
                        +'<h4 id="firstHeading" class="firstHeading">INSTITUTO DE EDUCACIÓN INTEGRAL MAGDALENA CERVANTES, A.C.</h4>'
                        +'<div id="bodyContent">'
                        +'<p> Calle Revolución Mexicana y 12 de Diciembre, C.P. 90250  Tlaxco,Tlax. México'
                        +'</p>'
                        +'<p>Teléfonos: +55 241 123 18 47'
                        +'</p>'
                        +'<img src="img/logo.jpg" style="width:75px; height:70px; display:block; margin:0 auto 0 auto;">'
                        +'</img>'
                        +'</div>'
                        +'</div>';                    

    var infowindow = new google.maps.InfoWindow({content: contentString});	

    var iconBase = 'img/';
    var marker = new google.maps.Marker({
        position: uluru,
        map: map,
        title: 'INSTITUTO DE EDUCACIÓN INTEGRAL MAGDALENA CERVANTES, A.C.',
        icon: iconBase+'valid.png' 
        });
        marker.addListener('click', function() {
        infowindow.open(map, marker);
        });
}