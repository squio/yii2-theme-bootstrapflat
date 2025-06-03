const fs = require('fs');
const cleanCSS = require('clean-css');

const inputFilePath = './src/css/bootstrap-flat.css';
const outputFilePath = './assets/css/bootstrap-flat.min.css';

// Read the CSS file
fs.readFile(inputFilePath, 'utf8', (err, data) => {
    if (err) {
        console.error('Error reading the CSS file:', err);
        return;
    }

    // Minify the CSS
    const output = new cleanCSS().minify(data);

    // Write the minified CSS to a new file
    fs.writeFile(outputFilePath, output.styles, (err) => {
        if (err) {
            console.error('Error writing the minified CSS file:', err);
            return;
        }
        console.log('CSS minification completed successfully. Minified file created at:', outputFilePath);
    });
});