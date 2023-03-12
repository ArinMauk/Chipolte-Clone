import { Burrito } from './Burrito.js';

class OrderFactory 
{
  static orderTypes = [
    'Burrito',
    'BurritoBowl',
    'LifeStyleBowl',
    'Quesadilla',
    'Salad',
    'Tacos',
    'KidsMeal',
    'SidesAndDrinks'
  ];

  static createOrder(orderType) 
  {
    if (!this.orderTypes.includes(orderType)) 
    {
      throw new Error('Invalid order type');
    }

    const className = orderType;
    const order = new window[className]();

    return order;
  }
}

window.Burrito = Burrito;

export { OrderFactory };
