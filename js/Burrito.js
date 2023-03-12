import { OrderType } from './OrderType.js';

class Burrito extends OrderType {
    constructor() {
      super();
      this.name = "BURRITO";
      this.description = "Your choice of freshly grilled meat or sofritas wrapped in a warm flour tortilla with rice, beans, or fajita veggies, and topped with guac, salsa, queso blanco, sour cream or cheese.";
      this.options = {
        "PROTEIN OR VEGGIE": ["CHICKEN", "STEAK", "BARBACOA", "CARNITAS", 'SOFRITAS', 'VEGGIE'],
        "RICE": ["WHITE RICE", "BROWN RICE"],
        "BEANS": ["BLACK BEANS", "PINTO BEANS"],
        "TOPPINGS": ["GUACAMOLE", "FRESH_TOMATO_SALSA", "ROASTED_CHILI-CORN_SALSA", "TOMATILLO-GREEN_CHILI_SALSA", "TOMATILLO-RED_CHILI_SALSA", "SOUR CREAM", "FAJITA VEGGIES", "CHEESE", "ROMAINE LETTUCE", "QUESO BLANCO"]
      };
    }
  }
  
  export { Burrito };
