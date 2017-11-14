/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - https://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function ($, Drupal, window, document, undefined) {


// To understand behaviors, see https://drupal.org/node/756722#behaviors
Drupal.behaviors.my_custom_behavior = {
  attach: function(context, settings) {


/************  responsive menu  **************/
/*
$('body').addClass("menu-close");

$('.menu-right').on('click', function() {
  if ( $( "body" ).hasClass( "menu-close" ) ) {
          $('body').addClass("mm-opened");
          $('body').removeClass("menu-close");
  }

});

$('#mm-blocker').on('click', function() {
  if ( $( "body" ).hasClass( "mm-opened" ) ) {
          $('body').removeClass("mm-opened");
          $('body').addClass("menu-close");
  }

});
*/

/************  shipping  **************/

 
$('#edit-commerce-shipping-shipping-service-4-ta-own-taking').on('click', function() {
      $('body').addClass("messengers");
});

/************  cart  **************/

$('#block-views-shopping-top-manu-block-1 .button-cart').on('click', function() {
      $('#block-commerce-cart-cart').addClass("open");
      $('body').addClass("cart-open");
});

if ( $( "body" ).hasClass( "node-type-product" ) ) {
  if ($('div.warning').length) {
        $('#block-commerce-cart-cart').addClass("open");
        $('body').addClass("cart-open");
  }
};

$('#block-commerce-cart-cart .close-button').on('click', function() {
      $('#block-commerce-cart-cart').removeClass("open");
      $('body').removeClass("cart-open");
});

$('.wrapper-page').on('click', function() {
      $('#block-commerce-cart-cart').removeClass("open");
      $('body').removeClass("cart-open");
});

if ($("div").hasClass("cart-empty-block")){
    $('body').addClass("empty-cart");
}
/*******  store page  *******/

if (($("body").hasClass("page-node-506")) || ($("body").hasClass("section-product-term")) || ($("body").hasClass("section-store-term"))) {
   $i = 1;
   $(".views-row").each(function(){
     $class = "place"+$i++;
     $(this).addClass($class); 
      if ($i>3) { $i=1;}
    });
};

/**********  product page  ***********/

if ($("body").hasClass("node-type-product")) {
 
   $i = 0;
   $(".view-products .views-row").each(function(){
     $class = "place"+$i++;
     $(this).addClass($class); 
      if ($i>4) { $i=1;}
    });

  $('.wrapper-blue .read-more').on('click', function() {
        $(this).parent().parent().parent().addClass("open");
        $(this).html("");
  });
/*
   $(".wrapper-blue .views-field-comment-body").each(function(){
      $width = $(this).children(".field-content").width();
      if ($width < $(this).width()-80){
        $(this).parent().addClass("small");
      }
   });
*/

  $('.node-type-product .right-article .right-details .views-label, .node-type-product .right-article .field-name-field-additional-comments .views-label').on('click', function() {
        $(this).parent().toggleClass("display");
  });

  $( ".commerce-add-to-cart .form submit" ).wrapInner( "<div class='new'></div>");


/*    var scroll_pos = 0;

    $(window).scroll(function() {
      scroll_pos = $(this).scrollTop();
      var myElement = document.querySelector(".commerce-product-field-commerce-price");
      var myElement2 = document.querySelector(".commerce-add-to-cart input.form-submit");
      var myElement3 = document.querySelector(".wrapper-blue");
      if($(window).scrollTop()>0){
        myElement3.style.position = "relative";
        myElement3.style.bottom = "auto";
        myElement3.style.height = "auto";
      }
       if($(window).scrollTop() + $(window).height() > $(document).height() - 880)  {
          myElement.style.position = "absolute";
          myElement2.style.position = "absolute";
        }else{
          myElement.style.position = "fixed";
          myElement2.style.position = "fixed";
        }

    });
*/
  
  if($.trim($(".field-name-field-smell-view .field-item").html())==''){
  $("#edit-line-item-fields-field-smell").empty();
  } 

  if($.trim($(".field-name-field-pregmant-view .field-item").html())==''){
  $("#edit-line-item-fields-field-pregmant").empty();
  } 

  if($.trim($(".field-name-field-skin-view .field-item").html())==''){
  $("#edit-line-item-fields-field-skin").empty();
  } 

  if($.trim($(".field-name-field-age-view .field-item").html())==''){
  $("#edit-line-item-fields-field-age").empty();
  } 



}



  }
};





})(jQuery, Drupal, this, this.document);

