export class WeatherApp {
    constructor() {
        this.body = $('body');
        this.bindEventHandlers();
    }


    bindEventHandlers = () => {
        this.body.on('click', '.js-location-search', this.searchLocation);
    }

    searchLocation = async () => {
        const location = this.body.find('.js-city-input').val();

        const response = await fetch(`/api/find/${location}`, {
            headers : {
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            }
        });
        const data = await response.json();

        console.log(await data);
    }
}
