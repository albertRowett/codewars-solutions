export const makeNegative = (num: number): number => {
    if (num > 0) {
        return num - 2 * num;
    }

    return num;
};
