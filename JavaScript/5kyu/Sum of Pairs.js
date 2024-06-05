function sumPairs(ints, s) {
    for (let i = 1; i < ints.length; i++) {
        // Find 'a' where 'a + b = sum' and 'b' is a subsequent int in the list
        const a = ints.slice(0, i).find((a) => a === s - ints[i]);

        if (a !== undefined) {
            return [a, ints[i]];
        }

        // Remove all subsequent instances of 'b' except one from the list
        let count = 0;

        for (let j = ints.length; j > i; j--) {
            if (ints[j] === ints[i]) {
                count++;

                if (count > 1) {
                    ints.splice(j, 1);
                }
            }
        }
    }

    return undefined;
}

// Notes:
// - Simpler solutions possible using an object/set to store 'seen' numbers and checking for 'a' among these
