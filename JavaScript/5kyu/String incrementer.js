function incrementString(strng) {
    const len = strng.length;

    for (let i = len - 1; i >= -1; i--) {
        if (/\D/.test(strng[i]) || i === -1) {
            return (
                strng.slice(0, i + 1) +
                String(i === len - 1 ? 1 : parseInt(strng.slice(i + 1)) + 1).padStart(len - (i + 1), '0')
            );
        }
    }
}

// Notes:
// - More efficient and/or elegant solutions possible using more complicated RegExp patterns
