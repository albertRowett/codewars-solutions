function squareSum(numbers) {
    return numbers.reduce((accumulator, currentValue) => accumulator + currentValue * currentValue, 0);
}
