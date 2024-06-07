function scramble(str1, str2) {
    for (let i = 97; i < 123; i++) {
        const letter = String.fromCharCode(i);

        if (str2.includes(letter)) {
            if (!str1.includes(letter)) {
                return false;
            } else {
                const regExp = new RegExp(letter, 'g');

                if (str2.match(regExp).length > str1.match(regExp).length) {
                    return false;
                }
            }
        }
    }

    return true;
}
