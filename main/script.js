document.addEventListener('DOMContentLoaded', () => {
    const formCalculator = document.getElementById('calculator');
    const formCalculatorFields = formCalculator.querySelectorAll('.field');
    const sendCalculatorButton = formCalculator.querySelector('.calculator-button');
    const responseCalculator = formCalculator.querySelector('.response');

    sendCalculatorButton.addEventListener('click', () => {
        let fieldsNotEmpty = true;
        const formData = new FormData();
        formCalculatorFields.forEach((field) => {
            field.classList.remove('error');
            formData.append(field.name, JSON.stringify({
                'value': field.value,
                'name': field.placeholder
            }));
            if(field.value.trim().length === 0) {
                field.classList.toggle('error');
                fieldsNotEmpty = false;
                return;
            }
        });

        if(fieldsNotEmpty) {
            const params = {
                method: 'POST',
                body: formData
            }
            sendCalculatorButton.classList.toggle('disable');
            responseCalculator.classList.remove('show');
            fetch('/ajax/calc.php', params).then((response) => {
                return response.json();
            }).then((json) => {
                sendCalculatorButton.classList.toggle('disable');
                responseCalculator.classList.add('show');
                responseCalculator.textContent = JSON.stringify(json);
            }).catch((error) => {
                sendCalculatorButton.classList.toggle('disable');
                console.log(error);
            })
        } else {

        }
    });
});