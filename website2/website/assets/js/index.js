const $ = document.querySelector.bind(document);
const toastContainer = $(".toast-help");
const toastInner = $(".toast-help-inner");
const toastClose = $(".js-toast-close");

function showSupport() {
    toastContainer.classList.add("show");
    document.body.style.overflow = "hidden";
}
function hideSupport() {
    toastContainer.classList.remove("show");
    document.body.style.overflow = "";
}
toastClose.addEventListener("click", hideSupport);
toastContainer.addEventListener("click", hideSupport);
toastInner.addEventListener("click", (e) => {
    e.stopPropagation();
});
