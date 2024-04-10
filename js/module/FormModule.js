export default function FormModule() {
  document.addEventListener('wpcf7mailsent', function (event) {
    window.location.href = "/xac-nhan-dat-hang/";
  }, false);
}