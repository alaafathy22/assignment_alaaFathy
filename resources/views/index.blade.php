<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
</head>

<body class="">
    <div>
        @include('create_album')
        @include('create_picture')
        @include('delete_and_edit')
    </div>
</body>

</html>
