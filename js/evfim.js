//categories
let cat_btn = document.querySelector('.cat-list-toggler');
let cat_mb = document.querySelector('.categories-mobile');
let cat_list = document.querySelector('.categories');

function openCats() {
    this.classList.toggle('active');
    cat_list.classList.toggle('show');
    check()
}

if (cat_btn || cat_mb || cat_list) {
    cat_btn.onclick = openCats;
    cat_mb.onclick = openCats;
}

let locpage = location.href;
let sub = '/sayt';
let catpage = '/categories';

function check() {
    if (cat_list.classList.contains('show')) {
        document.querySelector('.left-sidebar').classList.add('active');
    } else {
        document.querySelector('.left-sidebar').classList.remove('active');
    }
}
if (window.innerWidth < 992) {
    if (window.location.pathname == '/categories.html') {
        document.querySelector('.options').style.display = 'block';
        console.log('1')
    } else {
        document.querySelector('.options').style.display = 'none';
        console.log('2')
    }
}
$(document).ready(function() {
    if (window.innerWidth < 992) {
        document.querySelector('.left-sidebar').classList.remove('active');
        openCats.bind(cat_btn);

    } else {
        if (loc.includes(sub) && !locpage.includes("?")) {
            cat_btn.classList.toggle('active');
            cat_list.classList.toggle('show');
            cat_btn.onclick = () => {
                return false
            }
            check();
        };
    }
    if (loc.includes(sub) && !locpage.includes("?") && (window.innerWidth < 576)) {
        document.querySelector('.left-sidebar').style.marginTop = '165px';
    }
    console.log('work')


});


//properties
let props = document.querySelectorAll('.properties ul li');
let props_btn = document.querySelector('.all-properties');
let props_btn_close = document.querySelector('.close-props');

function propsToggle(arr, max = null, show) {
    arr.forEach((item, i) => {
        if (show == false) {
            if (i > max) {
                item.classList.add('hide');
            }
        } else if (show == true) {
            item.classList.remove('hide');
        } else {
            window.location.reload();
        }
    });
};

propsToggle(props, 4, false);

if (props || props_btn || props_btn_close) {
    props_btn.onclick = () => {
        props_btn.classList.remove('show');
        props_btn_close.classList.add('show');
        propsToggle(props, 5, true);
    };
    props_btn_close.onclick = () => {
        props_btn_close.classList.remove('show');
        props_btn.classList.add('show');
        propsToggle(props, 4, false);
    }
}

//cart
let btn_plus = document.querySelector('.add-to-cart-single .plus');
let btn_minus = document.querySelector('.add-to-cart-single .minus');
let cart_counter = document.querySelector('.add-to-cart-single .count');

btn_plus.onclick = () => {
    let num = Number(cart_counter.value);
    return cart_counter.value = num + 1;
}
btn_minus.onclick = () => {
    let num = Number(cart_counter.value);
    if (num != 0) {
        return cart_counter.value = num - 1;
    } else {
        return cart_counter.value = 0;
    }
}
cart_counter.oninput = () => {
        let str = cart_counter.value;
        cart_counter.value = str.replace(/[^+\d]/g, '');
    }
    //product images slider
$('#top-product-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '#bottom-product-slider'
});
$('#bottom-product-slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '#top-product-slider',
    focusOnSelect: true
});