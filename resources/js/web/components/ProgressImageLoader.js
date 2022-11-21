export default class ProgressImageLoader {

    constructor(el = "img") {
        this.animateView(document.getElementsByTagName(el))
    }

    animateView(el) {
        if ('IntersectionObserver' in window) {
            for (let i = 0; i < el.length; i++) {
                const img = el.item(i);
                if (img.hasAttribute("data-url")) {
                    const ratio = 0.5
                    const callback = function (entries, observer) {
                        entries.forEach(function (entry) {
                            if (entry.intersectionRatio > ratio) {
                                img.src = img.dataset.url;
                                img.removeAttribute("data-url");
                                observer.unobserve(entry.target);
                            }
                        });
                    }
                    const observer = new IntersectionObserver(callback, {
                        root: null,
                        threshold: ratio,
                        rootMargin: '0px'
                    });
                    observer.observe(img);
                }

            }
        } else {
            for (let i = 0; i < el.length; i++) {
                const img = el.item(i);
                if (img.hasAttribute("data-url")) {
                    img.src = img.dataset.url;
                    img.removeAttribute("data-url");
                }

            }
        }

    }

    /**
     *
     * @param {HTMLImageElement} img
     */
     afterLoadImage(img) {
        const target = img.nextElementSibling;
        if (target && target.classList.contains("inphb-mask-view")) {
            //console.log("ok")
            img.addEventListener("load",function (){
                target.remove();
                console.log("load")
            });
        }
    }
}



