<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <title>Laravel</title>
        @livewireStyles
        
    </head>
    <body class="bg-gray-600 flex justify-center items-center h-screen">
        <div class="w-2/3 flex flex-col bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="bg-gray-200 text-gray-700 text-lg px-6 py-4">Basic File Upload</div>
            
            <div class="px-6 py-4 border-t border-gray-200">
                <div class="border rounded-lg p-4 bg-gray-200">
                   @livewire('students-controller')
                </div>
            </div>
            
        </div>
        @livewireScripts
    </body>
</html>
