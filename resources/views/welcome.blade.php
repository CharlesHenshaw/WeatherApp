<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Weather App</title>

        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body>
        <div class="content">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-6 offset-3 text-center pt-4 pb-4">
                        <h1>Weather App</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 offset-4 text-center">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control city-input js-city-input" placeholder="location">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary city-search js-location-search" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-10 js-error" style="display: none;">
                    <div class="col-sm-4 offset-4 text-center">
                        <div class="alert alert-danger" role="alert">
                            An error has occurred, please try again
                        </div>
                    </div>
                </div>
                <div class="row js-success" style="display: none;">
                    <div class="col-sm-4 offset-4 text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud" viewBox="0 0 16 16">
                            <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
                        </svg>
                        <span class="js-weather"></span>
                    </div>
                </div>
                <div class="row js-success" style="display: none;">
                    <div class="col-sm-4 offset-4 text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-thermometer" viewBox="0 0 16 16">
                            <path d="M6 2a2 2 0 1 1 4 0v7.627a3.5 3.5 0 1 1-4 0V2zm2-1a1 1 0 0 0-1 1v7.901a.5.5 0 0 1-.25.433A2.499 2.499 0 0 0 8 15a2.5 2.5 0 0 0 1.25-4.666.5.5 0 0 1-.25-.433V2a1 1 0 0 0-1-1z"/>
                            <path d="M9.5 12.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                        </svg>
                        <span class="js-temp"></span>
                    </div>
                </div>
                <div class="row js-success" style="display: none;">
                    <div class="col-sm-4 offset-4 text-center">
                        <img src="{{asset('images/wind.svg')}}" style="height:16px; width:16px;">
                        <span class="js-wind"></span>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
