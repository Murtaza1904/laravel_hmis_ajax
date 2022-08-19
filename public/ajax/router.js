function patient_identity_route() {
    event.preventDefault();
    const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        type: "get",
        url: "/patient/create",
        data: {CSRF_TOKEN},
        success: function (data) {
            $('#page').html(data);
        }
    });
}
function patient_contact_route() {
    event.preventDefault();
    const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        type: "get",
        url: "/patient/create-contact",
        data: {CSRF_TOKEN},
        success: function (data) {
            $('#page').html(data);
        }
    });
}
function patient_choice_route() {
    event.preventDefault();
    const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        type: "get",
        url: "/patient/create-choice",
        data: {CSRF_TOKEN},
        success: function (data) {
            $('#page').html(data);
        }
    });
}
function patient_employer_route() {
    event.preventDefault();
    const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        type: "get",
        url: "/patient/create-employer",
        data: {CSRF_TOKEN},
        success: function (data) {
            $('#page').html(data);
        }
    });
}
function patient_guardian_route() {
    event.preventDefault();
    const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        type: "get",
        url: "/patient/create-guardian",
        data: {CSRF_TOKEN},
        success: function (data) {
            $('#page').html(data);
        }
    });
}
function patient_stats_route() {
    event.preventDefault();
    const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        type: "get",
        url: "/patient/create-stats",
        data: {CSRF_TOKEN},
        success: function (data) {
            // console.log(data);
            $('#page').html(data);
        }
    });
}
function patient_primary_route() {
    event.preventDefault();
    const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        type: "get",
        url: "/patient/create-primary",
        data: {CSRF_TOKEN},
        success: function (data) {
            $('#page').html(data);
        }
    });
}
function patient_secondary_route() {
    event.preventDefault();
    const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        type: "get",
        url: "/patient/create-secondary",
        data: {CSRF_TOKEN},
        success: function (data) {
            $('#page').html(data);
        }
    });
}
function patient_tertiary_route() {
    event.preventDefault();
    const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        type: "get",
        url: "/patient/create-tertiary",
        data: {CSRF_TOKEN},
        success: function (data) {
            $('#page').html(data);
        }
    });
}