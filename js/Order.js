class Order {
    constructor() {
        this.userOrder = [];
    }
    addSelection(selection) {
        this.userOrder.push(selection);
    }
    removeSelection(selection) {
        const index = this.userOrder.indexOf(selection);
        if (index !== -1) {
            this.userOrder.splice(index, 1);
        }
    }
    getOrder() {
        return this.userOrder;
    }
}

export { Order };
