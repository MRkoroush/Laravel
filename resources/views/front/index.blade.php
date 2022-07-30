<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('fronts/style/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('fronts/style/style.css') }}">
    <title>My personal Page</title>
</head>

<body>

   @include('front.navbar')

   @include('front.home')

   @include('front.skill')
   
   @include('front.blogs')

   @include('front.footer')
   
</body>
<script src="{{asset('fronts/js/bootstrap.bundle.min.js')}}">
</script>

</html>