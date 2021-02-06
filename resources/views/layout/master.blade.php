<!DOCTYPE html>
<html lang="en">
    <head>
        <script src="{{ asset('/js/jquery/jquery.min.js')}}"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>ielts unida</title>
            
        <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet"> <!-- (asset)adlh fungsi helper u/ manggil file" asset, cukup nyebutkan path lanjutannya dn nma filenya saja (css/bootstrap.min.css) setelah foder reading_ielts/public/ -->
    </head>
<body>
    @include('layout.header')
    @yield('content')<!-- @ yield sintak blade punya fungsi u/ tanda yg mau di tempati potongan kode dgn sebutan section, content= contoh nama sectionnya-->

    
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    

</body>
</html>