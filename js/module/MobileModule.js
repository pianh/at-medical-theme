export default function MobileModule() {
    const openIcon = document.querySelector(".open-icon");
    const closeIcon = document.querySelector(".close-icon");
    const mobileIcon = document.querySelector(".mobile-icon");
    const headerMenu = document.querySelector(".header__menu");
    const mobileOverlay = document.querySelector(".mobile__overlay");
    const mobileOverlayOpen = document.querySelector(".mobile__overlay.open");
    const body = document.getElementsByTagName("body")[0];




    let isOpen = false;
    function HandleOpen() {
        isOpen = !isOpen;
        if (isOpen) {
            mobileIcon.classList.add("active");
            headerMenu.classList.add("active");
            mobileOverlay.classList.add("open");
            body.classList.add("no-scroll");
        } else {
            mobileIcon.classList.remove("active");
            headerMenu.classList.remove("active");
            mobileOverlay.classList.remove("open");
            body.classList.remove("no-scroll");
        }
    }

    function HandleClose() {
        isOpen = false;
        mobileIcon.classList.remove("active");
        headerMenu.classList.remove("active");
        mobileOverlay.classList.remove("open");
        body.classList.remove("no-scroll");
    }
    if (openIcon) {
        openIcon.addEventListener("click", () => {
            HandleOpen()
        });
    }
    if (closeIcon) {
        closeIcon.addEventListener("click", () => {
            HandleClose()
        });
    }
    if (mobileOverlayOpen) {
        mobileOverlayOpen.addEventListener("click", () => {
            mobileOverlay.classList.remove("open");
        });
    }


}