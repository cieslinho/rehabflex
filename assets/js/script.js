const navBtn = document.querySelector('.nav__btn')
const menu = document.querySelector('.nav__menu')
const navOverlay = document.querySelector('.nav__overlay')
const navLinks = document.querySelectorAll('.nav__link')
const navBottom = document.querySelector('.nav__bottom')

const handleNav = () => {
	navBtn.classList.toggle('active')
	menu.classList.toggle('active')
	navOverlay.classList.toggle('active')

	navLinks.forEach(link => {
		link.addEventListener('click', () => {
			navBtn.classList.remove('active')
			menu.classList.remove('active')
			navOverlay.classList.remove('active')
		})
	})

	navOverlay.addEventListener('click', () => {
		navBtn.classList.remove('active')
		menu.classList.remove('active')
		navOverlay.classList.remove('active')
	})
}

var swiper = new Swiper('.header__swiper', {
	spaceBetween: 30,
	effect: 'fade',

	autoplay: {
		delay: 2500,
		disableOnInteraction: false,
	},
	pagination: {
		el: '.header__pagination',
		clickable: true,
	},
})

var aboutSwiper = new Swiper('.about__swiper', {
	slidesPerView: 1,
	spaceBetween: 20,
	autoplay: {
		delay: 2500,
		disableOnInteraction: false,
	},
	breakpoints: {
		640: {
			slidesPerView: 2,
			spaceBetween: 10,
		},
		992: {
			slidesPerView: 3,
			spaceBetween: 10,
		},
	},
})

var gallerySwiper = new Swiper('.gallery__swiper', {
	// spaceBetween: 30,
	centeredSlides: true,
	slidesPerView: 1,
	loop: true,
	autoplay: {
		delay: 2500,
		disableOnInteraction: false,
	},

	pagination: {
		el: '.gallery__pagination',
		clickable: true,
	},
	navigation: {
		nextEl: '.gallery__next',
		prevEl: '.gallery__prev',
	},
	breakpoints: {
		576: {
			slidesPerView: 2,
			// spaceBetween: 10,
		},
		768: {
			slidesPerView: 3,
			// spaceBetween: 10,
		},
		992: {
			slidesPerView: 4,
			// spaceBetween: 10,
		},
	},
})

let prevScrollPos = window.pageYOffset

window.addEventListener('scroll', function () {
	// current scroll position
	const currentScrollPos = window.pageYOffset

	if (prevScrollPos > currentScrollPos) {
		// user has scrolled up
		navBottom.classList.remove('hide')
	} else {
		// user has scrolled down
		navBottom.classList.add('hide')
	}

	// update previous scroll position
	prevScrollPos = currentScrollPos
})

navBtn.addEventListener('click', handleNav)
