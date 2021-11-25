<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tweets</title>

    <!-- Tailwind -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/@tailwindcss/typography@0.2.x/dist/typography.min.css" rel="stylesheet">

</head>
<body class="bg-white border-t-8 border-blue-500 pt-20">

<div class="prose mx-auto">
    <h1>List of notes</h1>
    <div class="">
        @foreach($data as $note)
            <div class="border-b-2 border-blue-400 p-2">
                <div class="text-blue">{{ $note->body }}</div>
            </div>
        @endforeach
    </div>
</div>

</body>
</html>
