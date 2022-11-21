export function navBarSmallToggle(mediaQuery) {
    const nav_bar_toggle_btn = document.getElementById('btn-menu'),
        className = "show";
    if (nav_bar_toggle_btn && mediaQuery.matches) {
        nav_bar_toggle_btn.addEventListener('click',buttonBindEvent);
    }
    mediaQuery.addEventListener("change", function (e) {
        if (e.matches){
            nav_bar_toggle_btn.addEventListener('click',buttonBindEvent);
        } else {
            if(!nav_bar_toggle_btn.classList.contains(className)) nav_bar_toggle_btn.nextElementSibling.style.left = "0";
            nav_bar_toggle_btn.removeEventListener('click',buttonBindEvent);
        }
    })

    function buttonBindEvent () {
        if (this.classList.contains(className)) {
            this.classList.remove(className);
            nav_bar_toggle_btn.nextElementSibling.style.left = "-100%";
        } else {
            this.classList.add(className);
            nav_bar_toggle_btn.nextElementSibling.style.left = "0";
            nav_bar_toggle_btn.nextElementSibling.style.transition = "left 300ms ease-in";
        }
        //nav_bar_toggle_btn.nextElementSibling.style.display="none"
    }
}

export function menuToggleLink(mediaQuery) {
    const links = document.getElementsByClassName('nav-bar-main-menu-item');

    bindLinkEvent(mediaQuery);

    mediaQuery.addEventListener("change", function (e) {
        if (e.matches){
            bindLinkEvent(e)
        }else {
            unbindLinkEvent();
        }
    });


    function bindLinkEvent(mediaQuery) {
        if (links.length && mediaQuery.matches) {
            for (let i = 0; i < links.length; i++) {
                const link = links.item(i);
                if (link.children.length === 2) {
                    link.firstElementChild.classList.add("main-parent");
                    link.lastElementChild.style.display = "none";
                    link.firstElementChild.addEventListener("click", function (e) {
                        e.preventDefault();
                        if (link.lastElementChild.style.display === "none") link.lastElementChild.style.display = "block"
                        else link.lastElementChild.style.display = "none"
                    });
                    const lis = link.lastElementChild.children;
                    for (let j = 0; j < lis.length; j++) {
                        const li = lis.item(j);
                        if (li.children.length === 2) {
                            li.firstElementChild.classList.add("sub-parent");
                            li.lastElementChild.style.display = "none";
                            li.firstElementChild.addEventListener("click", function (e) {
                                e.preventDefault();
                                if (li.lastElementChild.style.display === "none") li.lastElementChild.style.display = "block"
                                else li.lastElementChild.style.display = "none"
                            });
                        }
                    }
                }
            }
        }
    }

    function unbindLinkEvent() {
        if (links.length) {
            for (let i = 0; i < links.length; i++) {
                const link = links.item(i);
                if (link.children.length === 2) {
                    link.firstElementChild.classList.remove("main-parent");
                    link.lastElementChild.style.display = "none";
                    link.firstElementChild.removeEventListener("click", function (e) {
                        e.preventDefault();
                        if (link.lastElementChild.style.display === "none") link.lastElementChild.style.display = "block"
                        else link.lastElementChild.style.display = "none"
                    });
                    const lis = link.lastElementChild.children;
                    for (let j = 0; j < lis.length; j++) {
                        const li = lis.item(j);
                        if (li.children.length === 2) {
                            li.firstElementChild.classList.remove("sub-parent");
                            li.lastElementChild.style.display = "none";
                            li.firstElementChild.removeEventListener("click", function (e) {
                                e.preventDefault();
                                if (li.lastElementChild.style.display === "none") li.lastElementChild.style.display = "block"
                                else li.lastElementChild.style.display = "none"
                            });
                        }
                    }
                }
            }
        }
    }

}
