<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pumps Manager</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/@mdi/font@6.x/css/materialdesignicons.min.css" rel="stylesheet">
        <link href="{{ asset('/css/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/css/admin.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/css/sb-admin-2.min.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="manager">
            testowanie
        </div>
         <script>
           window.Laravel = <?php echo json_encode([
               'csrfToken' => csrf_token(),
                    ]); ?>
          </script>
        <script src="{{asset('/js/manager.js')}}"></script>
    </body>
</html>