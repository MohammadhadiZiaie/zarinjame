$(document).ready(function () {
    // خواندن توکن CSRF و تنظیم آن در هدرهای AJAX
    const csrfToken = $('meta[name="csrf-token"]').attr('content');

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': csrfToken
        }
    });

    function switchStep(currentStep, nextStep) {
        // تغییر مرحله فعال
        $(`.step-content[data-step="${currentStep}"]`).removeClass('active');
        $(`.step-content[data-step="${nextStep}"]`).addClass('active');

        // تغییر ظاهر مراحل در بالای فرم
        $(`.steps-indicator .step[data-step="${currentStep}"]`).removeClass('active');
        $(`.steps-indicator .step[data-step="${nextStep}"]`).addClass('active');
    }

    // مرحله ۲: انتخاب زیر نقش
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
        }).fail(function(){
            alert('خطایی در دریافت زیر نقش‌ها رخ داد.');
        });
    });

    // مرحله ۳: تنظیم دسترسی‌ها
    $('#toStep3').click(function () {
        const subRole = $('#subRoleSelect').val();
        const roleId = $('#userRoleSelect').val();

        if (!subRole) {
            alert('لطفاً زیر نقش را انتخاب کنید.');
            return;
        }

        $.get('/permissions/access-options', { role_id: roleId, sub_role: subRole }, function (data) {
            if (data.error) {
                alert(data.error);
                return;
            }

            $('#accessOptions').empty(); // پاک کردن گزینه‌های قبلی

            let mergedPermissions = data.mergedPermissions;
            const allPermissions = data.allPermissions;

            // اطمینان از اینکه mergedPermissions یک آرایه است
            if (typeof mergedPermissions === 'string') {
                try {
                    mergedPermissions = JSON.parse(mergedPermissions);
                } catch (e) {
                    console.error('Error parsing mergedPermissions:', e);
                    mergedPermissions = [];
                }
            }

            // نمایش تمام دسترسی‌ها با تیک زدن دسترسی‌های موجود
            $.each(allPermissions, function (key, label) {
                const isChecked = mergedPermissions.includes(key) ? 'checked' : '';
                $('#accessOptions').append(`
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="permission_${key}" name="permissions[]" value="${key}" ${isChecked}>
                        <label class="form-check-label" for="permission_${key}">
                            ${label}
                        </label>
                    </div>
                `);
            });

            switchStep(2, 3);
        }).fail(function(xhr){
            alert(xhr.responseJSON.error || 'خطایی رخ داد.');
        });
    });

    // برگشت به مرحله ۱
    $('#backToStep1').click(function () {
        switchStep(2, 1);
    });

    // برگشت به مرحله ۲
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
            location.reload();
        }).fail(function(xhr){
            alert(xhr.responseJSON.error || 'خطایی رخ داد.');
        });
    });
});
