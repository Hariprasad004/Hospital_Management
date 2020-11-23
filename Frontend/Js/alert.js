//type should be success or error
const showAlert = (type, msg) => {
    hideAlert();
    const markup = `<div class="alert alert--${msg}">${type}</div>`;
    document.querySelector('body').insertAdjacentHTML('afterbegin', markup);
    window.setTimeout(hideAlert, 4000);
};

const hideAlert = () => {
    const el = document.querySelector('.alert');
    if (el) el.parentElement.removeChild(el);
}