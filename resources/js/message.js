$("#contactForm").on('submit', function (e) {
    e.preventDefault()
    const form = $(this)
    const fields = form.find(".form-control");
    const data = form.serialize();
    const button = form.find('button span');
    const svg = form.find('svg');
    svg.css('display', 'block')
    button.html('Sending')
    axios.post('messagesend', data).then(
        res => {
            const successAlert = $("[data-success-message]");
            successAlert.removeClass('d-none')
            setTimeout(() => {
                successAlert.fadeOut('slow')
            }, 3000)
            form.trigger('reset')
        }
    ).catch(err => {
        const errors = err.response.data.errors
        Object.keys(errors).forEach(field => {
            const el = form.find(`[name='${field}']`);
            const feedbackDiv = el.next();
            el.addClass('is-invalid')
            feedbackDiv.html(errors[field])
            const errorAlert = $("[data-error-message]")
            errorAlert.removeClass('d-none')
            errorAlert.delay(2000).fadeOut('slow')
        })
    });
    svg.css('display', 'none');
    button.html('Send');
})

const form = $("#contactForm");
$('#contactForm .form-control').on('input', (e) => {
    if ($(e.target).hasClass('is-invalid')) {
        $(e.target).removeClass('is-invalid')
    }
});
