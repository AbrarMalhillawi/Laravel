let menubar = document.querySelector('#menu-bars');
let mynav = document.querySelector('.navbar');


menubar.onclick = () =>{
    menubar.classList.toggle('fa-times')
    mynav.classList.toggle('active')
}

////////////////start index page//////////////////

const header = document.querySelector("header");

window.addEventListener ("scroll", function() {
	header.classList.toggle ("sticky", window.scrollY > 0);
});

let menu = document.querySelector('#menu-icon');
let navlist = document.querySelector('.navlist');

menu.onclick = () => {
	menu.classList.toggle('bx-x');
	navlist.classList.toggle('open');
};

window.onscroll = () => {
	menu.classList.remove('bx-x');
	navlist.classList.remove('open');
};

const sr = ScrollReveal ({
	distance: '30px',
	duration: 2600,
	reset: true
})

sr.reveal('.home-text',{delay:280, origin:'bottom'})

sr.reveal('.featured,.cta,.new,.brand,.contact',{delay:200, origin:'bottom'})


/////////////end index page //////////////////////