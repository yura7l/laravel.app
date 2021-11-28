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
<body class="bg-white border-t-8 border-blue-100 bg-blue-500 pt-20">

<div class="prose mx-auto">
    <h1>Create a tweet</h1>
    <div class="">
        <form action="/tweets" method="post">
            @csrf
            <input type="text" name="tweet" class="w-full p-2 border-2 border-blue-500" placeholder="What's happening?">
            <button type="submit">Tweet</button>
        </form>
    </div>
</div>

</body>
</html>
