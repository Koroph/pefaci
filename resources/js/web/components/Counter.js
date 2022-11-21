export default class Counter {

    constructor({className}) {
        // this.event = new Event("onKhCountEnd",{"bubbles":false,"cancelable":false});
        //this.event = new CustomEvent("onKhCountEnd", {"detail": "Koroph"});
        this.khCounterElements = document.getElementsByClassName(className);
        this.binding();
    }

    /**
     * @private
     * @param {HTMLElement} element
     * @param {number} number_target
     * @param length
     */
    counterAnimate(element, number_target, length) {
        if (parseInt(element.innerText) < number_target) {
            element.innerText = this.incrementWithStep(element, number_target, length);
            setTimeout(() => this.counterAnimate(element, number_target, length), 25);
        } else {
            element.removeAttribute('dataset-number');
            //element.dispatchEvent(new CustomEvent("onKhCountEnd", {"detail": element}));
        }

    }

    /**
     * @private
     * @param {HTMLElement} element
     * @param {number} inter
     * @return number
     */
    step(element, inter) {
        const num = inter - parseInt(element.innerText);
        let step = 0;
        if (num < 10) step = 1;
        if (num >= 10 && num < 1000) step = 10;
        if (num >= 1000 && num < 100000) step = 100;
        if (num >= 100000 && num < 10000000) step = 1000;
        return step;
    }

    /**
     * @private
     * @param {HTMLElement} element
     * @param {number} number_target
     * @param {number} length
     * @return string
     */
    incrementWithStep(element, number_target, length) {
        return String(parseInt(element.innerText) + this.step(element, number_target))
    }

    /**
     * @private
     */
    binding() {
        //console.log(this.khCounterElements)
        if ('IntersectionObserver' in window) {
            for (let i = 0; i < this.khCounterElements.length; i++) {
                const el = this.khCounterElements[i],_this=this,ratio = 0.5
                    const callback = function (entries, observer) {
                        entries.forEach(function (entry) {
                            if (entry.intersectionRatio > ratio) {
                               const brut_number = el.innerText,
                                    number_count = parseInt(brut_number);
                                el.setAttribute("dataset-number", _this.khCounterElements[i].innerText);
                                el.innerText = "0";
                                el.style.opacity = "1";
                                _this.counterAnimate(el, number_count, brut_number.length);
                                //observer.unobserve(entry.target);
                            }
                        });
                    }
                    const observer = new IntersectionObserver(callback, {
                        root: null,
                        threshold: ratio,
                        rootMargin: '0px'
                    });
                    observer.observe(el);
                }

        }
        /*if (this.khCounterElements != null)
            for (let i = 0; i < this.khCounterElements.length; i++) {
                const el = this.khCounterElements[i],
                    brut_number = el.innerText,
                    number_count = parseInt(brut_number);
                el.setAttribute("dataset-number", this.khCounterElements[i].innerText);
                el.innerText = "0";
                el.style.opacity = "1";
                this.counterAnimate(el, number_count, brut_number.length);
            }*/
    }

}
