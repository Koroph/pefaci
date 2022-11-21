/*import GLightbox from 'glightbox';
import Isotope from 'isotope-layout';*/

export function navBarScrollFixed(header){
   const  classNameFixed="fixed-top",
     classNameRelative="position-relative";


    if (document.documentElement.scrollTop > 32 ){
        if (header.classList.contains(classNameRelative)) {
            header.classList.add(classNameFixed);
            header.classList.remove(classNameRelative);
        }
    }else {
        if (header.classList.contains(classNameFixed)) {
            header.classList.remove(classNameFixed);
            header.classList.add(classNameRelative);
        }
    }
}


export default function navBarAction(){

        "use strict";

        /**
         * Easy selector helper function
         */
        const select = (el, all = false) => {
            el = el.trim()
            if (all) {
                return [...document.querySelectorAll(el)]
            } else {
                return document.querySelector(el)
            }
        }

        /**
         * Easy event listener function
         */
        const on = (type, el, listener, all = false) => {
            let selectEl = select(el, all)
            if (selectEl) {
                if (all) {
                    selectEl.forEach(e => e.addEventListener(type, listener))
                } else {
                    selectEl.addEventListener(type, listener)
                }
            }
        }

        /**
         * Easy on scroll event listener
         */
        const onscroll = (el, listener) => {
            el.addEventListener('scroll', listener)
        }

        /**
         * Navbar links active state on scroll
         */

        let navbarlinks = select('#navbar .scrollto', true)
        const navbarlinksActive = () => {
          let position = window.scrollY + 200
          navbarlinks.forEach(navbarlink => {
            if (!navbarlink.hash) return
            let section = select(navbarlink.hash)
            if (!section) return
            if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
              navbarlink.classList.add('active')
            } else {
              navbarlink.classList.remove('active')
            }
          })
        }
        window.addEventListener('load', navbarlinksActive)
        onscroll(document, navbarlinksActive)


        /**
         * Scrolls to an element with header offset
         */
        const scrollto = (el) => {
            let header = select('#header')
            let offset = header.offsetHeight

            console.log(header)

            if (!header.classList.contains('header-scrolled')) {
                offset -= 10
            }

            let elementPos = select(el).offsetTop
            window.scrollTo({
                top: elementPos - offset,
                behavior: 'smooth'
            })
        }

        /**
         * Toggle .header-scrolled class to #header when page is scrolled
         */
        let selectHeader = select('#header')
        if (selectHeader) {
            const headerScrolled = () => {
                if (window.scrollY > 100) {
                    selectHeader.classList.add('header-scrolled')
                } else {
                    selectHeader.classList.remove('header-scrolled')
                }
            }
            window.addEventListener('load', headerScrolled)
            onscroll(document, headerScrolled)
        }

        /**
         * Back to top button
         */
         let backtotop = select('.back-to-top')
         if (backtotop) {
           const toggleBacktotop = () => {
             if (window.scrollY > 100) {
               backtotop.classList.add('active')
             } else {
               backtotop.classList.remove('active')
             }
           }
           window.addEventListener('load', toggleBacktotop)
           onscroll(document, toggleBacktotop)
         }

        /**
         * Mobile nav toggle
         */
        on('click', '.mobile-nav-toggle', function(e) {
            select('#navbar').classList.toggle('navbar-mobile')
            this.classList.toggle('bi-list')
            this.classList.toggle('bi-x')
        })

        /**
         * Mobile nav dropdowns activate
         */
        on('click', '.navbar .dropdown > a', function(e) {
            if (select('#navbar').classList.contains('navbar-mobile')) {
                e.preventDefault()
                this.nextElementSibling.classList.toggle('dropdown-active')
            }
        }, true)

        /**
         * Scrool with ofset on links with a class name .scrollto
         */
         on('click', '.scrollto', function(e) {
           if (select(this.hash)) {
             e.preventDefault()

             let navbar = select('#navbar')
             if (navbar.classList.contains('navbar-mobile')) {
               navbar.classList.remove('navbar-mobile')
               let navbarToggle = select('.mobile-nav-toggle')
               navbarToggle.classList.toggle('bi-list')
               navbarToggle.classList.toggle('bi-x')
             }
             scrollto(this.hash)
           }
         }, true)

        /**
         * Scroll with ofset on page load with hash links in the url
         */
        window.addEventListener('load', () => {
            if (window.location.hash) {
                if (select(window.location.hash)) {
                    scrollto(window.location.hash)
                }
            }
        });


 /*   /!**
     * Porfolio isotope and filter
     *!/
    window.addEventListener('load', () => {
        let portfolioContainer = select('.portfolio-container');
        if (portfolioContainer) {
            let portfolioIsotope = new Isotope(portfolioContainer, {
                itemSelector: '.portfolio-item',
                layoutMode: 'fitRows',
            });
            portfolioIsotope.arrange({
                filter: '.filter-image'
            });
            let portfolioFilters = select('#portfolio-flters li', true);

            on('click', '#portfolio-flters li', function(e) {
                e.preventDefault();
                portfolioFilters.forEach(function(el) {
                    el.classList.remove('filter-active');
                });
                this.classList.add('filter-active');

                portfolioIsotope.arrange({
                    filter: this.getAttribute('data-filter')
                });

            }, true);
        }

    });

    /!**
     * Initiate portfolio lightbox
     *!/
    const portfolioLightbox = GLightbox({
        selector: '.portfolio-lightbox'
    });*/


}


export function navBarAutoPositionMenu(){
    const _d = document.querySelectorAll('.dropdown .dropdown'),
        query=matchMedia("(max-width:768px)");

    if (!query.matches){
        for (let i = 0; i < _d.length; i++) {
            const _ul = _d[i].lastElementChild;
            if (_ul && _ul.nodeName === "UL") {
                _d[i].addEventListener("mouseenter", function (e) {
                    //console.log((window.innerWidth - e.pageX)-_d[i].getBoundingClientRect().width)
                    if (_ul.style.left !== "auto") {
                        if ((window.innerWidth - (_d[i].getBoundingClientRect().left + _d[i].getBoundingClientRect().width + _ul.getBoundingClientRect().width)) < 0) {
                            _ul.style.left = "auto";
                            _ul.style.right = "100%"
                        }
                    }
                });
            }
        }
    }
}


