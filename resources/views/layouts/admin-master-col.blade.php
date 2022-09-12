<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title', 'Sanjay Ram Laravel') &mdash; {{ env('APP_NAME') }}</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- General CSS Files -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> -->
  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/components.css')}}">

  <link rel="stylesheet" href="{{ asset('assets/css/sidebar.css')}}">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        @include('admin.partials.topnav')
      </nav>
      <div class="main-sidebar">
        @include('admin.partials.sidebar')
      </div>

      <!-- Main Content -->
      <div class="main-content">
        @yield('content')
      </div>
      <footer class="main-footer">
        @include('admin.partials.footer')
      </footer>
    </div>
  </div>

  <script src="{{ route('js.dynamic') }}"></script>
  <script src="{{ asset('js/app.js') }}?{{ uniqid() }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="{{ asset('assets/js/stisla.js') }}"></script>
  <script src="{{ asset('assets/js/scripts.js') }}"></script>
  @yield('scripts')

  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script> 
<link rel="stylesheet" href="{{ asset('assets/css/newctmcol.css')}}">
<script type="text/javascript">
    var $TABLE = $("#table");
    var $BTN = $("#export-btn");
    var $EXPORT = $("#export");

    var $TABLE2 = $("#table2");
    var $TABLE3 = $("#table3");

    $(".table-add2").click(function () {
      var $clone = $TABLE2
        .find("tr.hide")
        .clone(true)
        .removeClass("hide table-line");
      $TABLE2.find("table").append($clone);
    });

    $(".table-add3").click(function () {
      var $clone = $TABLE3
        .find("tr.hide")
        .clone(true)
        .removeClass("hide table-line");
      $TABLE3.find("table").append($clone);
    });


      $(".table-add").click(function () {
      var $clone = $TABLE
        .find("tr.hide")
        .clone(true)
        .removeClass("hide table-line");
      $TABLE.find("table").append($clone);
    });

    $(".table-remove").click(function () {
      $(this).parents("tr").remove();
    });

    $(".table-up").click(function () {
      var $row = $(this).parents("tr");
      if ($row.index() === 1) return; // Don't go above the header
      $row.prev().before($row.get(0));
    });

    $(".table-down").click(function () {
      var $row = $(this).parents("tr");
      $row.next().after($row.get(0));
    });

    // A few jQuery helpers for exporting only
    jQuery.fn.pop = [].pop;
    jQuery.fn.shift = [].shift;

    $BTN.click(function () {
      var $rows = $TABLE.find("tr:not(:hidden)");
      var headers = [];
      var data = [];

      // Get the headers (add special header logic here)
      $($rows.shift())
        .find("th:not(:empty)")
        .each(function () {
          headers.push($(this).text().toLowerCase().replace(/\s/g, ''));
        });

      // Turn all existing rows into a loopable array
      $rows.each(function () {
        var $td = $(this).find("td");
        var h = {};

        // Use the headers from earlier to name our hash keys
        headers.forEach(function (header, i) {
          if (i == 2 || i == 5 || i == 6) {
            h[header] = $td.eq(i).children().val();
          } else {
            h[header] = $td.eq(i).text();
          }
        });

        data.push(h);
      });

      var $rows2 = $TABLE2.find("tr:not(:hidden)");
      var headers2 = [];
      var data2 = [];

      // Get the headers (add special header logic here)
      $($rows2.shift())
        .find("th:not(:empty)")
        .each(function () {
          headers2.push($(this).text().toLowerCase().replace(/\s/g, ''));
        });

      // Turn all existing rows into a loopable array
      $rows2.each(function () {
        var $td2 = $(this).find("td");
        var h2 = {};

        // Use the headers from earlier to name our hash keys
        headers2.forEach(function (header, i) {
            h2[header] = $td2.eq(i).text();
        });

        data2.push(h2);
      });


      var $rows3 = $TABLE3.find("tr:not(:hidden)");
      var headers3 = [];
      var data3 = [];

      // Get the headers (add special header logic here)
      $($rows3.shift())
        .find("th:not(:empty)")
        .each(function () {
          headers3.push($(this).text().toLowerCase().replace(/\s/g, ''));
        });

      // Turn all existing rows into a loopable array
      $rows3.each(function () {
        var $td3 = $(this).find("td");
        var h3 = {};

        // Use the headers from earlier to name our hash keys
        headers3.forEach(function (header, i) {
            h3[header] = $td3.eq(i).text();
        });

        data3.push(h3);
      });


      let sendData = JSON.stringify(data);
      let sendData2 = JSON.stringify(data2);
      let sendData3 = JSON.stringify(data3);

      // Output the result
      // $EXPORT.text(JSON.stringify(data));
      // document.location.assign("{{ route('admin.dashboard') }}");
      $.ajax({
           type:'GET',
           url:"{{ route('createreport') }}",
           data:{"sendData": sendData, "sendData2": sendData2, "sendData3": sendData3},
           success:function(data){
              //Success code
              if (data)
                alert("Success add Columns!");
              else alert("failed to insert!");

              window.location.reload();
           }
      });
    });

</script>
</body>
</html>
