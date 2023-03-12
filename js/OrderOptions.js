class OrderOptions {
    static CHICKEN = { calories: 180, price: 9.40, imgName: 'chicken-order' };
    static STEAK = { calories: 150, price: 11.15, imgName: 'steak-order' };
    static BARBACOA = { calories: 170, price: 11.15, imgName: 'barbacoa-order' };
    static CARNITAS = { calories: 210, price: 10.05, imgName: 'carnitas-order' };
    static SOFRITAS = { calories: 150, price: 9.40, imgName: 'sofritas-order' };
    static FAJITA_VEGGIES = { calories: 20, price: 9.40, imgName: 'fajita-veggies' };
    static CHEESE = { calories: 0, price: 9.40, imgName: 'cheese' };
    static FRESH_TOMATO_SALSA = { calories: 25, price: 0, imgName: 'tomato-salsa' };
    static ROASTED_CHILI_CORN_SALSA = { calories: 80, price: 0, imgName: 'roasted-chili-corn-salsa' };
    static TOMATILLO_GREEN_CHILI_SALSA = { calories: 15, price: 0, imgName: 'tomatillo-green-chili-salsa' };
    static TOMATILLO_RED_CHILI_SALSA = { calories: 30, price: 0, imgName: 'tomatillo-red-chili-salsa' };
    static SOUR_CREAM = { calories: 110, price: 0, imgName: 'sour-cream' };
    static WHITE_RICE = { calories: 210, price: 0, imgName: 'white-rice-order' };
    static BROWN_RICE = { calories: 210, price: 0, imgName: 'brown-rice-order' };
    static BLACK_BEANS = { calories: 130, price: 0, imgName: 'black-beans-order' };
    static PINTO_BEANS = { calories: 130, price: 0, imgName: 'pinto-beans-order' };
    static GUACAMOLE = { calories: 230, price: 2.65, imgName: 'veggie-order' };
    static QUESO_BLANCO = { calories: 240, price: 2.65, imgName: 'queso-blanco' };
    static VEGGIE = { calories: 0, price: 8.85, imgName: 'veggie-order' };
    static ROMAINE_LETTUCE = { calories: 5, price: 0, imgName: 'romaine-lettuce' };
    static NO_SELECTION = { calories: 0, price: 0, imgName: 'no-selection' };

    static orderOptions = {
        'CHICKEN': OrderOptions.CHICKEN,
        'STEAK': OrderOptions.STEAK,
        'BARBACOA': OrderOptions.BARBACOA,
        'CARNITAS': OrderOptions.CARNITAS,
        'SOFRITAS': OrderOptions.SOFRITAS,
        'FAJITA VEGGIES': OrderOptions.FAJITA_VEGGIES,
        'CHEESE': OrderOptions.CHEESE,
        'FRESH_TOMATO_SALSA': OrderOptions.FRESH_TOMATO_SALSA,
        'ROASTED_CHILI-CORN_SALSA': OrderOptions.ROASTED_CHILI_CORN_SALSA,
        'TOMATILLO-GREEN_CHILI_SALSA': OrderOptions.TOMATILLO_GREEN_CHILI_SALSA,
        'TOMATILLO-RED_CHILI_SALSA': OrderOptions.TOMATILLO_RED_CHILI_SALSA,
        'SOUR CREAM': OrderOptions.SOUR_CREAM,
        'WHITE RICE': OrderOptions.WHITE_RICE,
        'BROWN RICE': OrderOptions.BROWN_RICE,
        'BLACK BEANS': OrderOptions.BLACK_BEANS,
        'PINTO BEANS': OrderOptions.PINTO_BEANS,
        'GUACAMOLE': OrderOptions.GUACAMOLE,
        'QUESO BLANCO': OrderOptions.QUESO_BLANCO,
        'VEGGIE': OrderOptions.VEGGIE,
        'ROMAINE LETTUCE': OrderOptions.ROMAINE_LETTUCE,
        'NO_SELECTION': OrderOptions.NO_SELECTION
    };

    static getOrderOptions() {
        return this.orderOptions;
    }

    static getOptionPrice(optionName) {
        return this.orderOptions[optionName]['price'];
    }

    static getOptionCalories(optionName) {
        return this.orderOptions[optionName]['calories'];
    }

    static getOptionImgName(optionName) {
        console.log("Inside getOptionImgName. Here is chicken: calories: {}, price: {}", this.orderOptions['CHICKEN']['calories'], this.orderOptions['CHICKEN']['price']);
        return this.orderOptions[optionName]['imgName'];
    }

}

export { OrderOptions };
