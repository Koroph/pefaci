export function searchView() {
    let productData = [];
    const searchField = document.getElementById('search-field'),
        container = document.getElementById('search-container-content-link-container');


    if (searchField && container) {
        searchField.addEventListener("input", e => {
            const text = e.target.value.toString().trim().toLowerCase();
            const data = productData.filter(a => {
                return text !== "" &&
                    (a.dataset.title.toLowerCase().indexOf(text) > -1 ||
                    a.dataset.location.toLowerCase().indexOf(text) > -1 ||
                    a.dataset.seodescription.toLowerCase().indexOf(text) > -1 ||
                    a.dataset.seokeywords.toLowerCase().indexOf(text) > -1);
            });
            container.innerHTML = null;
            if (data.length > 0) {
                container.append(...data);
            }
        });
        searchField.addEventListener("focus", e => {
            if (productData.length === 0) {
                axios.get(searchField.dataset.url)
                    .then((rep) => {
                        //console.log(rep.data);
                        for (let i = 0; i < rep.data.length; i++) {
                            productData.push(productLink(rep.data[i]));
                        }
                    })
                    .catch(e => console.log(e));
            }
        });

    }

    /**
     *
     * @param {object} product
     */
    function productLink(product) {
        const link = document.createElement('a');
        link.classList.add("search-container-content-link-container-item");
        link.setAttribute("data-title", product.title);
        link.setAttribute("data-location", product.location);
        link.setAttribute("data-seodescription", product.seo_description);
        link.setAttribute("data-seokeywords", product.seo_keywords);
        link.innerText = product.title;
        link.href = product.path;
        return link;
    }

}
