
function hexToHsl(hex) {
    // Remove the leading #
    hex = hex.replace(/^#/, '');

    // Parse the r, g, b values
    let r = parseInt(hex.substring(0, 2), 16);
    let g = parseInt(hex.substring(2, 4), 16);
    let b = parseInt(hex.substring(4, 6), 16);

    // Convert r, g, b values to the range 0-1
    r /= 255;
    g /= 255;
    b /= 255;

    // Find the minimum and maximum values of r, g, b
    let max = Math.max(r, g, b);
    let min = Math.min(r, g, b);

    // Compute the lightness
    let l = (max + min) / 2;

    let h, s;

    if (max === min) {
        // If max and min are equal, the color is gray, no hue
        h = s = 0;
    } else {
        let d = max - min;

        // Compute the saturation
        s = l > 0.5 ? d / (2 - max - min) : d / (max + min);

        // Compute the hue
        switch (max) {
            case r:
                h = (g - b) / d + (g < b ? 6 : 0);
                break;
            case g:
                h = (b - r) / d + 2;
                break;
            case b:
                h = (r - g) / d + 4;
                break;
        }

        h /= 6;
    }

    // Convert h, s, l to the range 0-360, 0-100, 0-100
    h = Math.round(h * 360);
    s = Math.round(s * 100);
    l = Math.round(l * 100);

    return `hsl(${h}, ${s}%, ${l}%)`;
}

// function transformTag(tagData) {
//     console.log(tagData);
//     tagDatabg = hexToHsl(tagData.background_color);
//     tagDatatx = hexToHsl(tagData.text_color);
//     console.log(tagDatabg);
//     console.log(tagDatatx);
//     tagData.style = `--tag-bg:${tagDatabg}; --tag-text-color:${tagDatatx}`;
// }
