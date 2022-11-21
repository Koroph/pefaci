export default function videoAction() {
    const container = document.getElementById('inphb-video-modal'),
        btn_play = document.getElementById('inphb-video-play-content'),
        btn_close = document.getElementById('inphb-video-modal-button-close'),
        video_container = document.getElementById('inphb-video-modal-container-frame');

    if (container && btn_close && video_container) {
        const iframeVideo = video_container.firstElementChild;
        btn_close.addEventListener('click', function () {
            iframeVideo.removeAttribute("src");
            container.style.display = "none";
            iframeVideo.nextElementSibling.style.display = "flex";

        });

        btn_play.addEventListener('click', function () {
            container.style.display = "flex";
            if (iframeVideo) {
                iframeVideo.setAttribute("src",iframeVideo.dataset.url);
            }
        });

        iframeVideo.addEventListener("load", function () {
            const sl = this.nextElementSibling;
            if (sl && iframeVideo.src !== "") sl.style.display = "none";

        });
    }
}
