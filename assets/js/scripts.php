<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    function alertPop(type, msg) {
        let bs_class = (type == 'success') ? 'alert-success' : 'alert-danger';
        let elements = document.createElement('div');
        elements.innerHTML = `<div class="container mt-4">
    <div class="alert ${bs_class} alert-dismissible fade show custom-alert" role="alert">
        <span class="me-3">${msg}</span>
        <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>`;
        document.body.append(elements);

        setTimeout(() => {
            let alertEl = elements.querySelector('.alert');
            if (alertEl) {
                alertEl.classList.remove('show');
                alertEl.classList.add('hide');
                setTimeout(() => {
                    elements.remove();
                }, 200);
            }
        }, 1000);
    }
</script>