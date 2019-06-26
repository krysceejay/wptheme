<!DOCTYPE html>
<html lang="en">

<head>
    <title>Live Stat-Farmcrowdy</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('font/circular-font.css') }}" rel="stylesheet">
    <meta name="theme-color" content="#ACBB16">
      <link href="{{ asset('css/main.min.css') }}" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"
        integrity="sha384-kW+oWsYx3YpxvjtZjFXqazFpA7UP/MbiY4jvs+RWZo2+N94PFZ36T6TFkc9O3qoB"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body>
    <div id="app" class="live_stat_container">
        <div class="nav_logo_container">
            <div class="logo_">
                <img src="/storage/images/logo/logo-stat.png" alt="Farmcrowdy Logo">
            </div>
            <div class="nav_stat">
                <h4>Live Stats</h4>
                <div class="current_date">
                    <div>
                        <span id="date"></span>
                    </div>

                    <div class="time_clock">
                        <span id="__hour"></span> :
                        <span id="__minute"></span> :
                        <span id="__second"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="live_stat_grid">
            <div class="stat_item">
                <p class="stat_title">Farms Sponsored</p>
                <p class="stat_number">67,000</p>
                <p class="stat_more_details">
                    <span class="last_unit">6000</span>
                    <span class="stat_title">Last Sponsorship</span>
                </p>

            </div>
            <div class="stat_item">
                <p class="stat_title">Farmers Empowered</p>
                <p class="stat_number">67,000</p>

            </div>
            <div class="stat_item">
                <p class="stat_title">Farm Sponsors</p>
                <p class="stat_number">889,000</p>
                <p class="stat_more_details">
                    <span class="last_unit">800</span>
                    <span class="stat_title">Last Sponsorship</span>
                </p>

            </div>
            <div class="stat_item">
                <p class="stat_title">Farm Followers</p>
                <p class="stat_number">67,000</p>
                <p class="stat_more_details">
                    <span class="last_unit">500</span>
                    <span class="stat_title">Last 1 week</span>
                </p>

            </div>
            <div class="stat_item">
                <p class="stat_title">Birds reared</p>
                <p class="stat_number">23,009,000</p>


            </div>
            <div class="stat_item">
                <p class="stat_title">Acres Cultivated</p>
                <p class="stat_number">67,000</p>

            </div>
            <div class="stat_item">
                <p class="stat_title">States Covered</p>
                <p class="stat_number">11 <sub>/ 36</sub></p>

            </div>
            <div class="stat_item">
                <p class="stat_title">Farms Sponsored</p>
                <p class="stat_number">67,000</p>

            </div>
        </div>
        <div class="social_media_followers">
            <div class="social_media_items">
                <div>
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 512.002 512.002" style="enable-background:new 0 0 512.002 512.002;" xml:space="preserve">
                    <circle style="fill:#4E598F;" cx="256.001" cy="256" r="256"/>
                    <path style="fill:#364270;" d="M511.596,241.7L391.019,121.085c-1.998,0.605-6.982-1.714-9.173-1.274
                    c-51.717,8.62-101.71,0-151.704,13.791c-24.135,6.896-25.859,36.202-34.478,55.165c-12.067,34.478-10.343,72.404-25.859,105.158
                    c-10.343,22.411-34.478,36.202-43.098,62.061c-2.875,10.785-2.705,24.379-5.956,34.69l120.98,120.922
                    c4.725,0.26,9.48,0.403,14.269,0.403c141.384,0,256-114.616,256-256C512.001,251.201,511.858,246.434,511.596,241.7z"/>
                    <g>
                    <path style="fill:#FFFFFF;" d="M363.043,109.466H148.958c-21.809,0-39.49,17.68-39.49,39.49v214.085
                    c0,21.811,17.68,39.49,39.49,39.49h105.584l0.183-104.722h-27.21c-3.536,0-6.406-2.86-6.418-6.396l-0.133-33.759
                    c-0.014-3.553,2.867-6.444,6.42-6.444h27.162v-32.618c0-37.852,23.118-58.463,56.884-58.463h27.71c3.543,0,6.42,2.874,6.42,6.42
                    v28.463c0,3.546-2.874,6.42-6.416,6.42l-17.006,0.01c-18.363,0-21.921,8.725-21.921,21.533v28.239h40.351
                    c3.848,0,6.83,3.358,6.375,7.173l-4.001,33.759c-0.381,3.232-3.122,5.665-6.375,5.665h-36.168l-0.183,104.726h62.826
                    c21.809,0,39.49-17.682,39.49-39.491v-214.09C402.533,127.147,384.852,109.466,363.043,109.466L363.043,109.466z"/>
                    <polygon style="fill:#FFFFFF;" points="254.542,402.53 254.725,297.808 254.277,297.808 254.277,402.53 	"/>
                    </g>
                    <path style="fill:#D1D1D1;" d="M363.043,109.466H254.277v141.741h0.269V218.59c0-37.852,23.118-58.463,56.884-58.463h27.71
                    c3.543,0,6.42,2.874,6.42,6.42v28.463c0,3.546-2.874,6.42-6.416,6.42l-17.006,0.01c-18.363,0-21.921,8.725-21.921,21.533v28.238
                    h40.351c3.848,0,6.83,3.358,6.375,7.173l-4.001,33.759c-0.381,3.232-3.122,5.665-6.375,5.665h-36.168l-0.183,104.726h62.826
                    c21.809,0,39.49-17.682,39.49-39.491V148.956C402.533,127.147,384.852,109.466,363.043,109.466z"/>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    </svg>
                </div>
                <div class="follow_details">
                    <p>1,500,000</p>
                    <span>Followers</span>
                </div>
            </div>
            <div class="social_media_items">
                <div>
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                    <circle style="fill:#65A2D9;" cx="256" cy="256" r="256"/>
                    <path style="fill:#3A7CA5;" d="M393.014,139.326c-26.703,23.169-53.253,43.475-74.954,71.852
                    c-53.381,64.372-118.613,155.7-207.386,142.086l158.61,158.396c134.456-6.873,241.497-117.493,242.686-253.376L393.014,139.326z"/>
                    <path style="fill:#FFFFFF;" d="M397.872,162.471c-6.513,2.889-13.271,5.167-20.208,6.815c7.644-7.261,13.39-16.346,16.631-26.484
                    c0.926-2.893-2.219-5.398-4.832-3.848c-9.65,5.725-20.044,10.016-30.894,12.762c-0.628,0.16-1.276,0.24-1.929,0.24
                    c-1.979,0-3.896-0.733-5.411-2.065c-11.542-10.174-26.39-15.777-41.805-15.777c-6.672,0-13.405,1.04-20.016,3.091
                    c-20.487,6.353-36.295,23.254-41.257,44.103c-1.86,7.818-2.362,15.648-1.496,23.264c0.097,0.876-0.314,1.486-0.569,1.772
                    c-0.45,0.502-1.084,0.791-1.745,0.791c-0.072,0-0.15-0.003-0.224-0.01c-44.846-4.168-85.287-25.772-113.869-60.837
                    c-1.455-1.789-4.253-1.569-5.415,0.422c-5.596,9.606-8.554,20.589-8.554,31.766c0,17.127,6.884,33.27,18.837,45.039
                    c-5.027-1.193-9.893-3.07-14.414-5.582c-2.188-1.214-4.877,0.35-4.908,2.851c-0.31,25.445,14.588,48.087,36.905,58.282
                    c-0.45,0.01-0.9,0.014-1.35,0.014c-3.537,0-7.121-0.338-10.645-1.015c-2.463-0.467-4.532,1.867-3.768,4.253
                    c7.246,22.618,26.717,39.288,50.021,43.07c-19.339,12.983-41.863,19.83-65.302,19.83l-7.306-0.003c-2.255,0-4.16,1.469-4.73,3.65
                    c-0.565,2.145,0.474,4.413,2.396,5.53c26.412,15.372,56.541,23.495,87.138,23.495c26.784,0,51.838-5.313,74.466-15.798
                    c20.745-9.609,39.076-23.345,54.486-40.827c14.357-16.286,25.581-35.085,33.365-55.879c7.418-19.816,11.34-40.967,11.34-61.154
                    v-0.964c0-3.241,1.465-6.291,4.024-8.37c9.706-7.882,18.16-17.158,25.122-27.572C403.796,164.578,400.896,161.13,397.872,162.471
                    L397.872,162.471z"/>
                    <path style="fill:#D1D1D1;" d="M397.872,162.471c-6.515,2.889-13.271,5.167-20.208,6.815c7.644-7.261,13.39-16.346,16.632-26.484
                    c0.926-2.893-2.219-5.398-4.832-3.848c-9.65,5.725-20.044,10.016-30.894,12.762c-0.628,0.16-1.276,0.24-1.929,0.24
                    c-1.979,0-3.896-0.733-5.411-2.065c-11.542-10.174-26.39-15.777-41.805-15.777c-6.671,0-13.405,1.04-20.016,3.091
                    c-14.322,4.441-26.343,14.048-33.985,26.546v205.477c6.222-2.029,12.293-4.403,18.198-7.139
                    c20.745-9.609,39.076-23.345,54.486-40.827c14.357-16.287,25.581-35.085,33.365-55.879c7.418-19.816,11.34-40.967,11.34-61.154
                    v-0.964c0-3.241,1.465-6.291,4.024-8.37c9.706-7.882,18.16-17.158,25.122-27.572C403.796,164.578,400.896,161.13,397.872,162.471z"
                    />
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    </svg>
                </div>
                <div class="follow_details">
                    <p>20,200,000</p>
                    <span>Followers</span>
                </div>
            </div>
            <div class="social_media_items">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="512px" height="512px" class=""><g><circle style="fill:#ED6C32" cx="256" cy="256" r="256" data-original="#6C27B3" class="" data-old_color="#F56040"/><path style="fill:#F56040" d="M374.71,132.922c-30.587,3.872-62.479,3.737-94.575,0.681  c-44.822-3.448-110.33-24.135-134.465,17.239c-38.772,66.236-19.649,151.035-10.614,226.078l134.737,134.708  c130.388-6.923,234.886-111.407,241.831-241.79L374.71,132.922z" data-original="#501A96" class="" data-old_color="#F77737"/><g>
                        <path style="fill:#FFFFFF;" d="M315.227,109.468H196.772c-48.14,0-87.304,39.164-87.304,87.304v118.455   c0,48.138,39.164,87.305,87.305,87.305h118.455c48.138,0,87.305-39.165,87.305-87.305V196.772   C402.532,148.632,363.367,109.468,315.227,109.468L315.227,109.468z M373.05,315.228c0,31.934-25.888,57.822-57.822,57.822H196.773   c-31.934,0-57.822-25.888-57.822-57.822V196.773c0-31.934,25.888-57.823,57.822-57.823h118.455   c31.934,0,57.822,25.89,57.822,57.823V315.228z" data-original="#FFFFFF" class=""/>
                        <path style="fill:#FFFFFF;" d="M256,180.202c-41.794,0-75.798,34.004-75.798,75.798c0,41.791,34.004,75.795,75.798,75.795   s75.795-34.001,75.795-75.795S297.794,180.202,256,180.202L256,180.202z M256,302.313c-25.579,0-46.316-20.733-46.316-46.313   s20.737-46.316,46.316-46.316s46.313,20.735,46.313,46.316C302.313,281.579,281.579,302.313,256,302.313L256,302.313z" data-original="#FFFFFF" class=""/>
                        </g><g>
                            <path style="fill:#D1D1D1" d="M350.103,180.774c0,10.03-8.132,18.163-18.163,18.163c-10.03,0-18.163-8.133-18.163-18.163   c0-10.031,8.133-18.163,18.163-18.163C341.973,162.611,350.103,170.741,350.103,180.774L350.103,180.774z" data-original="#D1D1D1" class="active-path" data-old_color="#E1306C"/>
                            <path style="fill:#D1D1D1" d="M315.228,109.468h-59.802v29.482h59.802c31.934,0,57.822,25.89,57.822,57.823v118.455   c0,31.934-25.888,57.822-57.822,57.822h-59.802v29.482h59.802c48.138,0,87.304-39.165,87.304-87.305V196.772   C402.532,148.632,363.367,109.468,315.228,109.468z" data-original="#D1D1D1" class="active-path" data-old_color="#E1306C"/>
                            <path style="fill:#D1D1D1" d="M256,180.202c-0.193,0-0.381,0.014-0.574,0.014v29.482c0.191-0.002,0.381-0.014,0.574-0.014   c25.579,0,46.313,20.735,46.313,46.316c0,25.579-20.733,46.313-46.313,46.313c-0.193,0-0.383-0.012-0.574-0.014v29.482   c0.193,0.002,0.381,0.014,0.574,0.014c41.794,0,75.795-34.002,75.795-75.795C331.795,214.206,297.794,180.202,256,180.202z" data-original="#D1D1D1" class="active-path" data-old_color="#E1306C"/>
                        </g></g>
                    </svg>
                </div>
                <div class="follow_details">
                    <p>200,000</p>
                    <span>Followers</span>
                </div>
            </div>
            <div class="social_media_items">
                <div>
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 512.002 512.002" style="enable-background:new 0 0 512.002 512.002;" xml:space="preserve">
<circle style="fill:#4376B1;" cx="256.001" cy="256" r="256"/>
<path style="fill:#336699;" d="M511.016,233.634L394.729,117.198c-71.035,9.237-145.27,7.859-216.305,9.511
	c-29.306,0-58.613,13.791-53.441,46.545c10.343,65.508,15.515,129.293,3.448,196.525c-1.9,8.545-5.897,17.089-11.117,25.059
	L233.48,511.005c7.421,0.646,14.929,0.996,22.519,0.996c141.384,0,256-114.616,256-256
	C512.001,248.461,511.656,241.005,511.016,233.634z"/>
<path style="fill:#FFFFFF;" d="M376.023,109.468H135.979c-14.643,0-26.51,11.867-26.51,26.51V376.02
	c0,14.639,11.867,26.51,26.51,26.51h240.042c14.639,0,26.51-11.871,26.51-26.51V135.978
	C402.533,121.335,390.662,109.468,376.023,109.468L376.023,109.468z M200.155,362.517c0,4.263-3.453,7.716-7.716,7.716h-32.837
	c-4.263,0-7.716-3.455-7.716-7.716V224.856c0-4.263,3.455-7.716,7.716-7.716h32.839c4.263,0,7.716,3.455,7.716,7.716v137.661
	H200.155z M176.02,204.162c-17.23,0-31.196-13.969-31.196-31.201c0-17.229,13.965-31.196,31.196-31.196
	c17.232,0,31.198,13.969,31.198,31.196C207.218,190.195,193.251,204.162,176.02,204.162L176.02,204.162z M371.773,363.139
	c0,3.918-3.175,7.096-7.09,7.096h-35.242c-3.915,0-7.092-3.177-7.092-7.096v-64.574c0-9.63,2.826-42.21-25.172-42.21
	c-21.719,0-26.124,22.3-27.008,32.304v74.478c0,3.918-3.175,7.096-7.094,7.096h-34.082c-3.918,0-7.096-3.177-7.096-7.096V224.234
	c0-3.918,3.177-7.096,7.096-7.096h34.082c3.918,0,7.094,3.177,7.094,7.096v12.009c8.054-12.085,20.023-21.416,45.502-21.416
	c56.425,0,56.105,52.717,56.105,81.686v66.627H371.773z"/>
<path style="fill:#D1D1D1;" d="M376.023,109.468H255.427v107.67h7.647c3.918,0,7.094,3.177,7.094,7.096v12.009
	c8.054-12.085,20.023-21.416,45.503-21.416c56.425,0,56.105,52.717,56.105,81.686v66.625c0,3.918-3.175,7.096-7.09,7.096h-35.242
	c-3.915,0-7.092-3.177-7.092-7.096v-64.574c0-9.63,2.826-42.21-25.172-42.21c-21.719,0-26.124,22.3-27.008,32.304v74.478
	c0,3.918-3.175,7.096-7.094,7.096h-7.647v32.301h120.596c14.639,0,26.51-11.871,26.51-26.51V135.978
	C402.533,121.335,390.662,109.468,376.023,109.468z"/>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
                    </svg>
                </div>
                <div class="follow_details">
                    <p>20,000</p>
                    <span>Followers</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    {{-- <script>

    var conn = new WebSocket('ws://127.0.0.1:8000');
      conn.onopen = function(e) {
        console.log("Connection established!");
      };

      conn.onmessage = function(e) {
        console.log(e.data);
      };
    </script> --}}

</body>

</html>
