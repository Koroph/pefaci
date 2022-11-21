


import './web/main';
import activeFieldParent from "./admin/partial/field";


export function webMessage() {
    const container = document.getElementById('kh-web-message');
    if (container) {
        setTimeout(()=>{
            container.remove();
        },9000);
    }
}
activeFieldParent();
webMessage()
