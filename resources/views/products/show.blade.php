<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('Show Products') }}
        </h2>
    </x-slot>
    <x-slot name="app_asset">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    </x-slot>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    {{ $product->name }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Details:</strong>
                    {{ $product->detail }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Harga:</strong>
                    {{ $product->price}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Latitude:</strong>
                    {{ $product->latitude}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Longitude:</strong>
                    {{ $product->longitude}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 pt-2">
                <div id="map" style="height: 250px;"></div>
            </div>
        </div>
    </div>
<x-slot name="page_script">
    <script>
        // Inisialisasi peta
        var map = L.map('map').setView([-6.200000, 106.816666], 13);
        var latitude = {{ $product->latitude }};
            var longitude = {{ $product->longitude }};

        var marker = L.marker([latitude, longitude]).addTo(map)
                .bindPopup(`<b>{{ $product->name }}</b><br>{{ $product->detail }}`)
                .openPopup();



                navigator.geolocation.getCurrentPosition(
                    (position) => {
                        const {
                            latitude,
                            longitude
                        } = position.coords;
                        // Set view ke lokasi pengguna
                        map.setView([latitude, longitude], 13);

                    },
                    (error) => {
                        alert('Error mendapatkan lokasi Anda: ' + error.message);
                    }
                );



        // Tambahkan tile layer
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
        }).addTo(map);

        // Event klik pada peta
        map.on('click', function(e) {
            var lat = e.latlng.lat;
            var lng = e.latlng.lng;

  // Perbarui form latitude dan longitude
            document.getElementById('latitude').value = lat;
            document.getElementById('longitude').value = lng;


            // Tambahkan atau pindahkan marker
            if (marker) {
                marker.setLatLng(e.latlng);
            } else {
                marker = L.marker(e.latlng).addTo(map);
            }
        });
    </script>
</x-slot>
</x-app-layout>

