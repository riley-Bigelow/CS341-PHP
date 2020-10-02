class ShoppingCart {
    constructor() {
      this.cart = JSON.parse(localStorage.getItem('CART'));
      if(!this.cart) {
      this.cart = [];
      }
    }
     addToCart(item,quant,price) {
         if(parseInt(quant) < 1){
            alert('Unable to add '+ item +' quanitity must be greater than 0')
         }
         else{
            const foundIndex = this.cart.findIndex(cart => cart.itemName === item);
            if(foundIndex == -1){
                let newItem = {
                    itemName: item,
                    quanitity: parseInt(quant),
                    price: (price).toFixed(2),
                    totalPrice: (parseFloat((quant * price))).toFixed(2)
                    };
                this.cart.push(newItem)
                console.log(newItem)
            }
            else{
                this.updateCart(item,quant,foundIndex);
            }
            localStorage.setItem('CART', JSON.stringify(this.cart));
         }
    }
    updateCart(item,quant,index){
        this.cart[index].quanitity += parseInt(quant);
        this.cart[index].totalPrice = (parseFloat(parseInt(this.cart[index].quanitity) * parseFloat(this.cart[index].price))).toFixed(2);
        console.log( this.cart[index])

    }   

    updateItem(item,quant){
        const index = this.cart.findIndex(cart => cart.itemName === item);
        this.cart[index].quanitity = parseInt(quant);
        this.cart[index].totalPrice = (parseFloat(parseInt(quant) * parseFloat(this.cart[index].price))).toFixed(2) ;
        localStorage.setItem('CART', JSON.stringify(this.cart));
        this.displayCart();
    }   

    deleteItem(item){
        const index = this.cart.findIndex(cart => cart.itemName === item);
        this.cart.splice(index, 1);
        localStorage.setItem('CART', JSON.stringify(this.cart));
		this.displayCart();
    }

    displayCart(){
        if(this.cart.length == 0)
        {
            document.getElementById('cartMsg').innerHTML = "Your Cart is empty";
            document.getElementById('cartList').innerHTML = '';
            document.getElementById('cart-total').innerHTML = '$0.00';
        }
        else{
            document.getElementById('cartMsg').innerHTML = "Your Cart";
            console.log(this.cart)
	        let itemHtml = this.cart.reduce((html, item) => html +=  
	        this.generateItemHtml(item), '');
            document.getElementById('cartList').innerHTML = itemHtml;
            var total = 0.00;
            this.cart.forEach(item => {
                total += parseFloat(item.totalPrice);
            });
            document.getElementById('cart-total').innerHTML = '$'+total.toFixed(2);
            let button = this.generateCheckoutBtn();
            document.getElementById('check-out-btn').innerHTML = button;
        }
    }

    displayForm(){
            document.getElementById('cartMsg').innerHTML = "Cart Checkout";
            console.log(this.cart)
	        let itemHtml = this.cart.reduce((html, item) => html +=  
	        this.generateFormHtml(item), '');
            document.getElementById('checkList').innerHTML = itemHtml;
            //document.getElementById('cart-total').innerHTML = '$'+total.toFixed(2);
           // let button = this.generateCheckoutBtn();
            //document.getElementById('check-out-btn').innerHTML = button;
        }
    generateCheckoutBtn() {
        return `
        <a href="checkout.html" class="btn btn-success" role="button">Check Out</a>
        <a href="W03Assign.html" class="btn btn-warning" role="button">Continue Shopping</a>
        `;
      }
    generateItemHtml(item) {
        return `
        <div class="product">
            <div class="product-details">
                <div class="product-title">${item.itemName}</div>
            </div>
            <div class="product-price">Individual Price: $${item.price}</div>
            <div class="product-quantity">
                Quantity: <input type="number" value="${item.quanitity}" min="1", id="${item.itemName}Q">
            </div>
            <div class="product-removal">
                <button class="btn btn-warning" onClick="myCart.updateItem('${item.itemName}',document.getElementById('${item.itemName}Q').value)">
                    Update
                </button>
                <button class="btn btn-danger" onClick="myCart.deleteItem('${item.itemName}')">
                    Remove
                </button>
            </div>
                <div class="product-line-price"> Total Price: $${item.totalPrice}</div>
        </div>`;
      }
      generateFormHtml(item) {
        return `
        <div class="form-group">
            Item: <input type="text" class="form-control" id="${item.itemName}" name="${item.itemName}" value="${item.itemName}" readonly><br>
            Individual Price: <input type="text" class="form-control" id="${item.itemName}" name="${item.itemName}" value="${item.price}" readonly><br> 
             Quantity: <input type="text"class="form-control"  value="${item.quanitity}", id="${item.itemName}Q" readonly>
            Total Price: <input type="text" class="form-control" value="$${item.totalPrice}" id="${item.itemName}Q" readonly>
        </div>`;
      }

}

let myCart;
window.addEventListener("load", function() {
   myCart = new ShoppingCart();
});