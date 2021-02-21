export class WeatherApp {
    constructor() {
        this.body = $('body');
        this.bindEventHandlers();
    }


    bindEventHandlers = () => {
        this.body.on('click', '.js-location-search', this.searchLocation);
    }

    searchLocation = async () => {
        $('.js-error').fadeOut();
        $('.js-success').fadeOut();


        const location = this.body.find('.js-city-input').val();
        const response = await fetch(`/api/find/${location}`, {
            headers : {
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            }
        });

        if (response.ok === false) {
            $('.js-error').fadeIn();
            return;
        }

        const responseData = await response.json();
        const data = JSON.parse(responseData.data);
        const weather = data.weather[0].description || '';
        const temp = data.main.temp;
        const windSpeed = Math.round(data.wind.speed * 2.237).toFixed(1);

        $('.js-weather').html(weather);
        $('.js-temp').html(`${temp}°`);
        $('.js-wind').html(`${windSpeed} Mph`);
        $('.js-success').fadeIn();
    }
}
