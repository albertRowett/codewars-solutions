function num(numStr, operation) {
    return operation ? Math.trunc(eval(numStr + operation)) : numStr;
}

function zero(operation) {
    return num('0', operation);
}
function one(operation) {
    return num('1', operation);
}
function two(operation) {
    return num('2', operation);
}
function three(operation) {
    return num('3', operation);
}
function four(operation) {
    return num('4', operation);
}
function five(operation) {
    return num('5', operation);
}
function six(operation) {
    return num('6', operation);
}
function seven(operation) {
    return num('7', operation);
}
function eight(operation) {
    return num('8', operation);
}
function nine(operation) {
    return num('9', operation);
}

function plus(secondNumber) {
    return '+' + secondNumber;
}
function minus(secondNumber) {
    return '-' + secondNumber;
}
function times(secondNumber) {
    return '*' + secondNumber;
}
function dividedBy(secondNumber) {
    return '/' + secondNumber;
}
