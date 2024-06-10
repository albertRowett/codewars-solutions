function score(dice) {
    let counts = {};

    for (die of dice) {
        if (counts[die]) {
            counts[die] += 1;
        } else {
            counts[die] = 1;
        }
    }

    let sum = 0;

    Object.entries(counts).forEach((die) => {
        if (die[0] == 1) {
            sum += die[1] * 100;
        }

        if (die[0] == 5) {
            sum += die[1] * 50;
        }

        if (die[1] >= 3) {
            sum += die[0] * 100;

            if (die[0] == 1) {
                sum += 600;
            } else if (die[0] == 5) {
                sum -= 150;
            }
        }
    });

    return sum;
}
