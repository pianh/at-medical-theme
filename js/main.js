import AosModule from "./module/AosModule.js";
import PopupModule from "./module/PopupModule.js";
import SwiperModule from "./module/SwiperModule.js";
import MobileModule from "./module/MobileModule.js";
import HeaderModule from "./module/HeaderModule.js";
import OpenClosePopup from "./module/OpenClosePopup.js";
import TabModule from "./module/TabModule.js";
import CollapseModule from "./module/CollapseModule.js";

window.addEventListener("DOMContentLoaded", () => {
    OpenClosePopup();
    TabModule();
    SwiperModule();
    MobileModule();
    HeaderModule();
    PopupModule();
    CollapseModule();
});