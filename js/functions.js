$(document).ready(function() {

    // Close nav-category-list in desktop
    $(function(){
        $('.close-btn').click(function(e){
            e.preventDefault();
            $('.nav-category-list').removeClass('show');
        });
    }); 


    // Burger menu overlay
    $(function() {
        $('.nav__toggle').on('click', function(e) {
            $('.menu-overlay').toggleClass("disp"); 
            e.preventDefault();
        });
    });


    //Cookie banner

    /* Shows the Cookie banner */
    function showCookieBanner(){
        let cookieBanner = document.getElementById("cookie-banner");
        cookieBanner.style.display = "flex";
   }
   
   /* Hides the Cookie banner and saves the value to localstorage */
   function hideCookieBanner(){
        localStorage.setItem("cb_isCookieAccepted", "yes");
        let cookieBanner = document.getElementById("cookie-banner");
        cookieBanner.style.display = "none";
   }
   
   /* Checks the localstorage and shows Cookie banner based on it. */
   function initializeCookieBanner(){
        let isCookieAccepted = localStorage.getItem("cb_isCookieAccepted");
        if(isCookieAccepted === null)
        {
        localStorage.setItem("cb_isCookieAccepted", "no");
        showCookieBanner();
        }
        if(isCookieAccepted === "no"){
        showCookieBanner();
        }
   }
   
   // Assigning values to window object
   window.onload = initializeCookieBanner();
   window.cb_hideCookieBanner = hideCookieBanner; 


   /* Shows banner */
    function showBanner(){
        let banner = document.getElementById("banner");
        banner.style.display = "block";
   }
   
   /* Hides the banner and saves the value to localstorage */
   function hideBanner(){
        localStorage.setItem("isBannerAccepted", "yes");
        let banner = document.getElementById("banner");
        banner.style.display = "none";
   }
   
   /* Checks the localstorage and shows banner based on it. */
   function initializeBanner(){
        let isBannerAccepted = localStorage.getItem("isBannerAccepted");
        if(isBannerAccepted === null) {
            localStorage.setItem("isBannerAccepted", "no");
            showBanner();
        }
        if(isBannerAccepted === "no") {
            showBanner();
        }
   }
   
   // Assigning values to window object
   window.onload = initializeBanner();
   window.cd_hideBanner = hideBanner; 


   // Toggle product grid and list
   $(function() {
        $('#product-list').click(function(event){
            event.preventDefault();
            $('.products').removeClass('products__grid');
            $('.products').addClass('products__list');
        });

        $('#product-grid').click(function(event){
            event.preventDefault();
            $('.products').removeClass('products__list');
            $('.products').addClass('products__grid');
        });
    });


    // Kauba saaja on erinev
    $(function() {
        $("#ship-to-different-address-checkbox").on("click",function() {
            $(".different-address").toggle(this.checked);
        });
    });


    // Peida/näita tarnemeetodite valikut
    $(function() {
        $("input[name$='shipping_method']").click(function() {
            var test = $(this).val();

            $("div.shipping-container").hide();
            $("#shipping_container-" + test).show();
        });
    });

    const collapse = $('[data-categories-collapse]');
    collapse.on('show.bs.collapse', '.collapse', function () {
        collapse.find('.collapse.show').collapse('hide');
    });

    $('.menu-overlay').on('click', function () {
        $('body').find('.collapse.show').collapse('hide');
        $(this).removeClass('disp');
    });
});




// Quantity buttons
function increaseValue() {
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('number').value = value;
}


function decreaseValue() {
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    value < 1 ? value = 1 : '';
    value--;
    document.getElementById('number').value = value;
}


// Added to cart popup
function toggleCart() {
    document.querySelector('.sidecart').classList.toggle('open-cart');
}


//Product image and thumbnails
function change_image(image){
    var container = document.getElementById("main-image");

    container.src = image.src;
}

document.addEventListener("DOMContentLoaded", function(event) {

});