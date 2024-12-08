let selectedOperation = '';

function showOperationButtons() {
    document.getElementById('mainButton').classList.add('hidden');
    document.getElementById('operationButtons').classList.remove('hidden');
}

function chooseOperation(operation) {
    selectedOperation = operation;
    document.getElementById('operationButtons').classList.add('hidden');
    document.getElementById('operationInputs').classList.remove('hidden');
}

function calculate() {
    const num1 = parseFloat(document.getElementById('num1').value);
    const num2 = parseFloat(document.getElementById('num2').value);
    let result;

    switch (selectedOperation) {
        case 'suma':
            result = num1 + num2;
            break;
        case 'resta':
            result = num1 - num2;
            break;
        case 'multiplicacion':
            result = num1 * num2;
            break;
        case 'division':
            result = num1 / num2;
            break;
        default:
            alert('Operación no válida');
            return;
    }

    alert(`El resultado de la ${selectedOperation} es: ${result}`);
}

function reset() {
    document.getElementById('mainButton').classList.remove('hidden');
    document.getElementById('operationButtons').classList.add('hidden');
    document.getElementById('operationInputs').classList.add('hidden');
    document.getElementById('num1').value = '';
    document.getElementById('num2').value = '';
}
