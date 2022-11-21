import AlertDialog from "@/admin/components/AlertDialog";


export default function validatePayment() {
    const inputSearch = document.getElementById("recharge-search-field"),
        btn = document.getElementById("_recharge-search-button"),
        last_name = document.getElementById("last_name"),
        first_name = document.getElementById("first_name"),
        project = document.getElementById("project"),
        amount = document.getElementById("amount"),
        subscription_id = document.getElementById("_subscription_id"),
        total_payment = document.getElementById("total_payment"),
        total_done = document.getElementById("total_done"),
        total_not_done = document.getElementById("total_not_done"),
        loader = document.getElementById("account-search-loader"),
        account_exist_view = document.getElementById("account-exist-view"),
        btnSubmit = document.getElementsByName('_btn'),
        _alert = new AlertDialog();

    if (inputSearch && btn) {
        btn.addEventListener("click", function () {
            const _matricule = inputSearch.value.toString().trim(),
                formData = new FormData(),
                url = account_exist_view.dataset.url;

            if (_matricule !== "") {

                if (_matricule.length>=16 && _matricule.length<=19){
                    loader.style.display = "flex";
                    formData.append("_ref", _matricule.toLowerCase().replaceAll("-",""))
                    resetView();
                    axios.post(url, formData).then(response => {
                        const _data = response.data.data;
                        console.log(_data)
                        if (_data !== null) {
                            subscription_id.value = _data.id;
                            last_name.value = _data.last_name;
                            first_name.value = _data.first_name;
                            project.value = _data.project;
                            amount.value = _data.amount;
                            total_payment.value = _data.total_payment;
                            total_done.value = _data.total_done;
                            total_not_done.value = _data.total_not_done;
                        } else {
                            _alert.setYesOnly = true
                            _alert.type = "d";
                            _alert.yes = "D'ACCORD";
                            _alert.setMessage = response.data.message ?? "Cette reference de souscription  n'existe pas,<br> Veuillez vérifier la reference et réessayer."
                            _alert.setHeader = "Information";
                            _alert.show();
                        }
                        loader.style.display = "none";

                    }).catch(error => {
                        // console.log(error)
                        loader.style.display = "none";
                        resetView();
                        submitButtonState();
                    });
                }else {
                    _alert.setYesOnly = true
                    _alert.type = "w";
                    _alert.yes = "Oui";
                    _alert.setMessage = "Veuillez remplir correctement le champ de recherche";
                    _alert.setHeader = "Avertissement";
                    _alert.show();
                    submitButtonState();
                }
            } else {
                _alert.setYesOnly = true
                _alert.type = "w";
                _alert.yes = "Oui";
                _alert.setMessage = "Veuillez remplir correctement le champ de recherche";
                _alert.setHeader = "Avertissement";
                _alert.show();
                submitButtonState();
            }

        });
    }

    function resetView() {
        last_name.value = "";
        first_name.value = "";
        project.value = "";
        amount.value = "";
        account_exist_view.style.display = "none";
    }

    function submitButtonState(isActive = true) {
        for (let i = 0; i < btnSubmit.length; i++) {
            if (isActive) {
                if (btnSubmit.item(i).hasAttribute("disabled"))
                    btnSubmit.item(i).removeAttribute("disabled")
            } else {
                for (let i = 0; i < btnSubmit.length; i++) {
                    btnSubmit.item(i).setAttribute("disabled", "disabled")
                }
            }

        }
    }
}
