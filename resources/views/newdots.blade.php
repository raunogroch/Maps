@extends('layout.app')
@section('content')

    <div id="map" class="map" data-lat="" data-lng=""></div>

@endsection
@section('scripts')
    <script src="{{ url('assets/js/maps.js') }}"></script>
    <script>
        var markers = [];
        function allMap() {
            var map = new google.maps.Map(
                document.getElementById('map'),
                {
                    zoom: 2,
                    center: {
                        lat:0,
                        lng:0
                    }
                });

            map.addListener('click', function(e) {
                addMarker(e.latLng.lat(), e.latLng.lng());
            });

            var contentString = '<div class="content_info">\n' +
                '        <div class="col-sm-12 text-center">\n' +
                '            <div class="row">\n' +
                '                <div class="col-sm-12 my-5 line_bottom">\n' +
                '                    <h5>have you been clicked here!\n</h5>' +
                '                </div>\n' +
                '            </div>\n' +
                '            <div class="row">\n' +
                '                <div class="col-sm-12 my-10 padding_none">\n' +
                '                    <span class="pull-left">Name :</span>\n' +
                '                    <input class="border_input pull-right" id="info_dot" type="text" name="name">\n' +
                '                </div>\n' +
                '            </div>\n' +
                '            <div class="row">\n' +
                '                <div class="col-sm-12">\n' +
                '                    <a class="btn btn-success btn-xs" id="loaddot" href="#">Load</a>\n' +
                '                    <a class="btn btn-danger btn-xs" id="deletedot" href="#">Delete</a>\n' +
                '                </div>\n' +
                '            </div>\n' +
                '        </div>\n' +
                '    </div>';

            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });

            function addMarker(lat, lng) {
                var marker = new google.maps.Marker({
                    position: {
                        lat: lat,
                        lng: lng
                    },
                    map: map,
                    icon: {
                        path: google.maps.SymbolPath.CIRCLE,
                        scale: 3,
                        strokeColor: '#ff0000',
                        strokeWeight: 3,
                        // fillColor: '#ff0000',
                        fillOpacity:1
                    }
                });

                if ($('.map').data('lat')){
                    deleteMarkers();
                    $('#info_dot').val('');
                }

                markers.push(marker);

                $('.map').data('lat', lat);
                $('.map').data('lng', lng);
                infowindow.open(map, marker);
            }
        }

        function setMapOnAll(map) {
            for (var i = 0; i < markers.length; i++) {
                markers[i].setMap(map);
            }
        }

        function clearMarkers() {
            setMapOnAll(null);
        }

        function deleteMarkers() {
            clearMarkers();
            markers = [];
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCz_6QoQyLUUV8S6i2DkNbGWwa9FAsa_PU&callback=allMap">
    </script>

    <script>
        $('#map').on('click', '#loaddot', function(){
            var data = {
                lat: $('.map').data('lat'),
                lng: $('.map').data('lng'),
                name: $('#info_dot').val()
            }
            console.log(data);
        });
        $('#map').on('click', '#deletedot', function(){
            deleteMarkers();
        });
    </script>
@endsection