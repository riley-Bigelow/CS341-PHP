class ShoppingCart {
    constructor() {
      this.parentElement = document.getElementById('recipeList');
      this.cart = JSON.parse(localStorage.getItem('CART'));
      if(!this.cart) {
      this.cart = [];
      }
    }
}

let myCart;
window.addEventListener("load", function() {
   myCart = new ShoppingCart();
   alert('working');
});