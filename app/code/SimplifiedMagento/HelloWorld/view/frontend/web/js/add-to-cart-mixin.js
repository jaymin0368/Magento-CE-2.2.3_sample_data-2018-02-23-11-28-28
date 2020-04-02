define(['jquery'], function ($) {
   'use_strict';
   
   return function (catalogAddToCart) {
       $.widget('mage.catalogAddToCart',catalogAddToCart,{
            submitForm: function (form) {
                console.log("Add to cart successfully intercepted");
                console.log(form);
                //calling parent constructor
                return this._super(form);
            }
       });
       return $.mage.catalogAddToCart;
   };
})