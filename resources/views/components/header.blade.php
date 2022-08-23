<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$title}}</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')
    </head>
    <body>

        <nav>
            <ul class="flex justify-around mb-9">
              <li>
                <a href="/">Welcome</a>
              </li>
              <li>
              <li>
                <a href="/home">Home</a>
              </li>
              <li>
                <a href="/about">About Us</a>
              </li>
              <li>
                <a href="/users">Users</a>
              </li>
              <li>
                <a href="/test">Tests</a>
              </li>
            </ul>
        </nav>