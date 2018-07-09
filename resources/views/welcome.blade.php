@extends('layout.app')
@section('content')
    <div id="map" class="map"></div>
@endsection
@section('scripts')
    <script src="{{ url('assets/js/maps.js') }}"></script>
    <script>
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
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCz_6QoQyLUUV8S6i2DkNbGWwa9FAsa_PU&callback=allMap">
    </script>
@endsection