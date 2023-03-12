import { Order } from './Order.js';
import { OrderOptions } from './OrderOptions.js';

class OrderType {
    constructor() 
    {
      this.name = '';
      this.description = '';
      this.options = [];
      this.userOrder = new Order();
      this.price = 0;
      this.calories = 0;
    }
  
    getName() 
    {
      return this.name;
    }
  
    getDescription() 
    {
      return this.description;
    }
  
    getPrice() 
    {
      return this.price;
    }
  
    getCalories() 
    {
      return this.calories;
    }
  
    getOptions() 
    {
      return this.options;
    }
  
    getUserOrder() 
    {
      return this.userOrder;
    }
  
    calculatePrice() 
    {
      this.price = 0;
      this.userOrder.getOrder().forEach((selection) => {
        this.price += OrderOptions[selection].price;
      });
    }
  
    calculateCalories() 
    {
      this.calories = 0;
      this.userOrder.getOrder().forEach((selection) => {
        this.calories += OrderOptions[selection].calories;
      });
    }
  }

  export { OrderType };

  