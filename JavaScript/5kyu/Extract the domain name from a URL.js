function domainName(url) {
    const a = url.includes('://') ? url.slice(url.indexOf(':') + 3) : url;
    const b = a.includes('www.') ? a.slice(4) : a;
    return b.slice(0, b.indexOf('.'));
}
