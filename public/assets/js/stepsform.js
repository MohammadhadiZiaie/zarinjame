$(document).ready(function () {
    function switchStep(currentStep, nextStep) {
        // تغییر مرحله فعال
        $(`.step-content[data-step="${currentStep}"]`).removeClass('active');
        $(`.step-content[data-step="${nextStep}"]`).addClass('active');

        // تغییر ظاهر مراحل در بالای فرم
        $(`.steps-indicator .step[data-step="${currentStep}"]`).removeClass('active');
        $(`.steps-indicator .step[data-step="${nextStep}"]`).addClass('active');
    }

    // مرحله 2: انتخاب زیر نقش
    $('#toStep2').click(function () {
        const roleId = $('#userRoleSelect').val();
        if (!roleId) {
            alert('لطفاً نوع کاربر را انتخاب کنید.');
            return;
        }

        $.get('/permissions/sub-roles', { role_id: roleId }, function (data) {
            $('#subRoleSelect').empty().append('<option value="">انتخاب کنید...</option>');
            $.each(data, function (key, value) {
                $('#subRoleSelect').append(`<option value="${key}">${value}</option>`);
            });
            switchStep(1, 2);
        });
    });

    // مرحله 3: تنظیم دسترسی‌ها
    $('#toStep3').click(function () {
        const subRole = $('#subRoleSelect').val();
        const roleId = $('#userRoleSelect').val();  // اضافه کردن roleId که قبلاً نادیده گرفته شده بود

        if (!subRole) {
            alert('لطفاً زیر نقش را انتخاب کنید.');
            return;
        }

        console.log('roleId:', roleId, 'subRole:', subRole);  // برای بررسی لاگ

        $.get('/permissions/access-options', { role_id: roleId, sub_role: subRole }, function (data) {
            if (data.error) {
                alert(data.error);
                return;
            }

            $('#accessOptions').empty(); // پاک کردن گزینه‌های قبلی
            $.each(data, function (index, value) {
                $('#accessOptions').append(`
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="${value}" value="${value}">
                        <label class="form-check-label" for="${value}">${value}</label>
                    </div>
                `);
            });
            switchStep(2, 3);
        });
    });

    // برگشت به مرحله 1
    $('#backToStep1').click(function () {
        switchStep(2, 1);
    });

    // برگشت به مرحله 2
    $('#backToStep2').click(function () {
        switchStep(3, 2);
    });

    // ذخیره دسترسی‌ها
    $('#savePermissions').click(function () {
        const selectedAccess = [];
        $('#accessOptions input:checked').each(function () {
            selectedAccess.push($(this).val());
        });

        const roleId = $('#userRoleSelect').val();
        const subRole = $('#subRoleSelect').val();

        $.post('/permissions/save', {
            role_id: roleId,
            sub_role: subRole,
            access: selectedAccess,
        }, function (response) {
            alert(response.message);
        });
    });
});