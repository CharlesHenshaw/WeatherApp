export class WeatherApp {
    constructor() {
        this.body = $('body');
        this.bindEventHandlers();
    }


    bindEventHandlers = () => {
        this.body.on('click', '.js-location-search', this.searchLocation);
    }

    searchLocation = () => {
    }
}
