import { Notice } from './alpine/index.js';

const not = new Notice();


new Notice();
const forms = document.querySelectorAll('.js-form');
forms.forEach(form => {
    form.addEventListener('submit', (event) => {
        event.preventDefault();

        let data = new FormData(form);

        if (validateFormData(data, form)) {
            console.log(form);
            form.classList.add('sending');
            fetch(form.getAttribute('action'), {
                method: form.method,
                body: data,
            })
                .then(response => response.text())
                .then(data => {
                    if (IsJsonString(data)) {
                        console.log(JSON.parse(data));
                    }
                    else {
                        console.log(typeof data);
                        if (data === "success") {
                            form.classList.remove('sending');
                            form.classList.add('sent');
                            not.setNotice('Ваша заявка успешно отправлена', 5);
                            let succesSubmit = new Event("succes-submit");
                            form.dispatchEvent(succesSubmit);
                            dataLayer.push({'event': 'form_zakazatZvonok'})
                            setTimeout(function () {
                                form.classList.remove('sent');
                            }, 5000);
                        }
                    }

                })
                .catch(error => {
                    console.error('Ошибка запроса:', error);
                });
        }
        else {
            console.log('Одно из полей пустое');
        }
    }
    );
});

function IsJsonString(str) {
    try {
        JSON.parse(str);
    } catch (e) {
        return false;
    }
    return true;
}

function validateFormData(formData, form) {
    let hasEmptyFields = false;

    for (const pair of formData.entries()) {

        const [name, value] = pair;
        const field = form.querySelector(`[name="${name}"]`);

        if (name == "formName") {
            continue;
        }
        if (value === "") {
            field.classList.add('error');
            hasEmptyFields = true;
        } else {
            field.classList.remove('error');
        }
    }

    return !hasEmptyFields;
}