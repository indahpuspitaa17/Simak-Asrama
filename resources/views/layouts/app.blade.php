<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $title ?? '' }}</title>
    <meta name="description" content="IPB University">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{ asset('sites/images/favicon.png') }}">
    <link rel="shortcut icon" href="{{ asset('sites/images/favicon.png') }}">
    <link rel="stylesheet"
        href="{{ asset('sites/assets/air-datepicker/dist/css/datepicker.css') }}">
    <link rel="stylesheet"
        href="{{ asset('sites/assets/air-datepicker/dist/css/datepicker.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ asset('sites/assets/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('sites/assets/css/style.css') }}">
    <link rel="stylesheet"
        href="{{ asset('sites/assets/css/lib/datatable/dataTables.bootstrap.min.css') }}">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" /> -->

    <style>
        .datepicker {
            z-index: 1151;
        }
    </style>

</head>


<body onload="startTime()">
    @include('layouts.components.navbar')

    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        @include('layouts.components.header')
        <!-- Content -->

        @yield('content')

        @include('layouts.components.footer')

    </div>

    <script type=text/javascript>
        $('#my-element').datepicker([options]) // Access instance of plugin $('#my-element').data('datepicker') 
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#bootstrap-data-table-export').DataTable();
        });
    </script>

    <!-- JAM SCRIPT -->
    <script>
        function startTime() {
            var today = new Date();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById('jam').innerHTML =
                h + ":" + m + ":" + s;
            var t = setTimeout(startTime, 500);
        }

        function checkTime(i) {
            if (i < 10) {
                i = "0" + i
            }; // add zero in front of numbers < 10
            return i;
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="{{ asset('sites/assets/js/main.js') }}"></script>
    <script src="{{ asset('sites/assets/air-datepicker/dist/js/datepicker.js') }}"></script>
    <script src="{{ asset('sites/assets/air-datepicker/dist/js/datepicker.min.js') }}">
    </script>
    <script
        src="{{ asset('sites/assets/air-datepicker/dist/js/i18n/datepicker.en.js') }}">
    </script>

    <script src="{{ asset('sites/assets/js/lib/data-table/datatables.min.js') }}"></script>
    <script src="{{ asset('sites/assets/js/lib/data-table/dataTables.bootstrap.min.js') }}">
    </script>
    <script src="{{ asset('sites/assets/js/lib/data-table/dataTables.buttons.min.js') }}">
    </script>
    <script src="{{ asset('sites/assets/js/lib/data-table/buttons.bootstrap.min.js') }}">
    </script>
    <script src="{{ asset('sites/assets/js/lib/data-table/jszip.min.js') }}"></script>
    <script src="{{ asset('sites/assets/js/lib/data-table/vfs_fonts.js') }}"></script>
    <script src="{{ asset('sites/assets/js/lib/data-table/buttons.html5.min.js') }}">
    </script>
    <script src="{{ asset('sites/assets/js/lib/data-table/buttons.print.min.js') }}">
    </script>
    <script src="{{ asset('sites/assets/js/lib/data-table/buttons.colVis.min.js') }}">
    </script>
    <script src="{{ asset('sites/assets/js/init/datatables-init.js') }}"></script>

    <!-- DATE SCRIPT -->
    <script>
        document.getElementById("date").innerHTML = formatAMPM();

        function formatAMPM() {
            var d = new Date(),
                months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September',
                    'Oktober', 'November', 'Desember'
                ],
                days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
            return days[d.getDay()] + ', ' + d.getDate() + ' ' + months[d.getMonth()] + ' ' + d.getFullYear();
        }
    </script>
</body>

</html>