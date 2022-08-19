$(document).on('click', '#add_patient', function (e) {
    e.preventDefault();
    var data = {
        'firstname': $('#firstname').val(),
        'lastname': $('#lastname').val(),
        'date_of_birth': $('#date_of_birth').val(),
        'gender': $('.gender').val(),
        'marital_status': $('#marital_status').val(),
        'national_id': $('#national_id').val(),
        'social_security_number': $('#social_security_number').val(),
        'external_id': $('#external_id').val(),
        'user_defined': $('#user_defined').val(),
        'billing_note': $('#billing_note').val(),
    }
    $.ajax({
        type: "POST",
        url: "/patient/session",
        data: data,
        success: function (response) {
            return json_encode(data);
        }
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: "POST",
        url: "/patient/create",
        data: data,
        dataType: "json",
        success: function (response) {

            if (response.status == 400) {
                $('#patient_firstname').text(response.errors.firstname);
                $('#patient_lastname').text(response.errors.lastname);
                $('#patient_date_of_birth').text(response.errors.date_of_birth);
                $('#patient_gender').text(response.errors.gender);
                $('#patient_marital_status').text(response.errors.marital_status);
                $('#patient_national_id').text(response.errors.national_id);
                $('#patient_social_security_number').text(response.errors.social_security_number);
                $('#patient_external_id').text(response.errors.external_id);
                $('#patient_user_defined').text(response.errors.user_defined);
                $('#patient_billing_note').text(response.errors.billing_note);
            }
            else {
                window.location = response.url;
                $('#success').text(response.success);
            }

        }
    });
});