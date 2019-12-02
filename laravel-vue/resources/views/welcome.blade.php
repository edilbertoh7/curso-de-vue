<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap4.css') }}">
<body>
    <div id="main" class="container">
        <div class="row">
            <div class="col-sm-4">
                <h1>lista laravel VUEjs -AJAX</h1>
                <ul class="list-group">
                    <li v-for="item in lists" class="list-group-item">
                    @{{item.name}} <strong>  @{{item.email}}</strong> </li>
                </ul>
            </div>
            <div class="col-sm-8">
                <h1>JSON</h1>
                <pre>
                    @{{ $data | json }}
                </pre>
            </div>
        </div>
    </div>
    </div>
{{-- <script type="text/javascript" src="{{ asset('js/vue.js') }}"></script> --}}
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
