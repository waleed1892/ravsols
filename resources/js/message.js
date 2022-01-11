$("#contactForm").on('submit', function (e) {
    e.preventDefault()
    const form = $(this)
    const fields = form.find(".form-control");
    const data = form.serialize();
    $("#send-btn").text('sending...');
    // const button = form.find('button span');
    // const svg = form.find('svg');
    // svg.css('display', 'block')
    // button.text('Sending')
    // $("#send-btn").text("Hello world!");
    axios.post('messageSend', data).then(
        res => {
            const successAlert = $("[data-success-message]");
            $("#send-btn").text('send');
            successAlert.removeClass('d-none')
            setTimeout(() => {
                successAlert.fadeOut('slow')
            }, 3000)
            form.trigger('reset')
        }
    ).catch(err => {
        $("#send-btn").text('send');
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
    $("#send-btn").text('send');
    // button.html('Send');
})

const form = $("#contactForm");
$('#contactForm .form-control').on('input', (e) => {
    if ($(e.target).hasClass('is-invalid')) {
        $(e.target).removeClass('is-invalid')
    }else{
    }
});
