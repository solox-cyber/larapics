<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blade Components</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>
<body>

    {{-- @php
        
     $icon = "logo.svg"
    @endphp

    <x-icon :src="$icon" />
    <x-u-i.button /> --}}
    <x-alert type="success" dismissible id="my-alert" class="mt-4" role="flash">
      <x-slot:title>
          Success
      </x-slot>
       <p class="mb-0">Data has been sent</p>
    </x-alert>    
</body>
</html>