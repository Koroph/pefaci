export default function rightMenu() {
    const menuBtn = document.getElementsByClassName('right-menu-item-btn'),
        btnHidden = document.getElementById('btn-right-menu_hidden'),
        rightMenu = document.getElementById('right-menu'),
        classNameClose = "close", classNameOpen = "open", hiddenClassName = "hidden",
        key = "key.inphb.right.menu";

    if (menuBtn.length && btnHidden && rightMenu) {
        for (let i = 0; i < menuBtn.length; i++) {

            const btn = menuBtn.item(i),
                page = document.getElementById(btn.dataset.target);
            if (page) {
                if (btn.dataset.target.toString().includes("page")) {
                    const frame = page.lastElementChild.firstElementChild;
                    btn.addEventListener("click", function () {
                        page.classList.add(classNameOpen);
                        frame.src = frame.dataset.url;
                    });
                    page.style.display = "flex";
                    page.firstElementChild.lastElementChild.firstElementChild.addEventListener("click", function () {
                        page.classList.remove(classNameOpen);
                    });
                } else {
                    btn.addEventListener("click", function () {
                        page.classList.add(classNameOpen);
                        btn.parentElement.parentElement.classList.add(classNameClose)
                    });
                    page.firstElementChild.firstElementChild.firstElementChild.addEventListener("click", function () {
                        page.classList.remove(classNameOpen);
                        btn.parentElement.parentElement.classList.remove(classNameClose);
                    });
                }
            }
        }

        if (sessionStorage.getItem(key) !== hiddenClassName) {
            rightMenu.classList.remove(hiddenClassName);
        }
        btnHidden.addEventListener("click", function () {
            if (!rightMenu.classList.contains(hiddenClassName)) {
                rightMenu.classList.add(hiddenClassName);
                sessionStorage.setItem(key, hiddenClassName);
            } else {
                rightMenu.classList.remove(hiddenClassName);
                sessionStorage.setItem(key, "");
            }
        });
    }
}
