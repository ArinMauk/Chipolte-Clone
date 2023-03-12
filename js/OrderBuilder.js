import { OrderOptions } from './OrderOptions.js';
import { OrderFactory } from './OrderFactory.js';

// Get the user's selection from session storage or URL parameter
let userOrderTypeSelection = sessionStorage.getItem("userOrderTypeSelection") || "Burrito";

// Use the OrderFactory to get the appropriate order type object
let orderData = OrderFactory.createOrder(userOrderTypeSelection);

// Update the DOM with the order details
document.getElementById("order-item-image").src = `../imgs/${orderData.getName().toLowerCase()}.png`;
document.getElementById("order-item-name").textContent = orderData.getName();
document.getElementById("order-item-description").textContent = orderData.getDescription();

// Generate the options HTML
let optionsHTML = "";
let options = orderData.getOptions();
for (let header in options) {
    optionsHTML += `
        <div class="food-selection">
            <div class="item-grid">
                <div class="item-grid-titles">
                    <h1>${header}</h1>
                </div>`;
        for (let choice of options[header]) {
            optionsHTML += `
                <div class="item">
                    <img src="../imgs/${OrderOptions.getOptionImgName(choice)}.png">
                    <div class="item-details">
                        <p class="item-name">${choice}</p>
                        <p class="item-price">$${OrderOptions.getOptionPrice(choice)}<span>${OrderOptions.getOptionCalories(choice)}cal</span></p>
                    </div>
                </div>`;
        }
    optionsHTML += `
            </div>
        </div>`;
}

// Add the options HTML to the DOM
document.getElementById("options-section").innerHTML = optionsHTML;


