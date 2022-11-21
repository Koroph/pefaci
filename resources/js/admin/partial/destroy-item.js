import AlertDialog from "../components/AlertDialog";

export default function destroyItemEvent() {
    const _btn_item = document.getElementsByClassName('destroy-item'),
        _alert = new AlertDialog();
    _alert.header = "suppression";

    _alert.yes = "Oui";
    _alert.no = "Non";
    _alert.type = "d";
    if (_btn_item.length) {
        for (let i = 0; i < _btn_item.length; i++) {
            _btn_item.item(i).addEventListener('click', function () {
                if (this.hasAttribute('data-message'))
                    _alert.setMessage = this.dataset.message;
                else _alert.setMessage = "Voulez-vous vraiment supprimer cette donnée ?";
                _alert.show().then(resp => {
                    if (resp)
                        this.parentElement.submit();
                })
            });
        }
    }
}
