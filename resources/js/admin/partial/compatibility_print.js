
import AlertDialog from "../components/AlertDialog";

export default class CompatibilityPrint {

    constructor() {
        this._option = document.getElementById("_option");
        this._date_end = document.getElementById("_date_end");
        this._date_start = document.getElementById("_date_start")
        this.btnFilter = document.getElementById("load_state_data");
        this.preview = document.getElementById("state_preview");
        this.btnPrint = document.getElementById("load_state_print");
        this.loader_start = document.getElementById("print_state_view_start");
        this.loader_running = document.getElementById("print_state_view_running");

        if (this._date_end && this._option) {
            this.btnFilter.addEventListener("click", function () {

                const url = this.generateURL();
                if (url) {
                    if (this.loader_start.style.display === "flex") this.loader_start.style.display = "none"
                    this.loader_running.style.display = "flex"
                    this.preview.src = url;
                }


            }.bind(this));

            this.btnPrint.addEventListener("click", function () {
                this.preview.contentWindow.print();
            }.bind(this));
        }

    }

    /**
     * @returns {string|null}
     */
    generateURL() {
        let rawURL = this.btnFilter.parentElement.parentElement.dataset.url + '?';
        const _alertDialog = new AlertDialog();
        rawURL += "date_start=" + this._date_start.value;
        rawURL += "&date_end=" + this._date_end.value;

        if (this._option) {
            if (this._option.value.toString() !== "") {
                rawURL += "&option=" + this._option.value.toString();
            } else {
                _alertDialog.yesOnly = true;
                _alertDialog.header = "Avertissement";
                _alertDialog.setMessage = "Veuillez sélectionner un prestataire";
                _alertDialog.yes = "OK";
                _alertDialog.setType = "w"
                _alertDialog.show()
                return null;
            }

        }
        return rawURL;
    }
}
