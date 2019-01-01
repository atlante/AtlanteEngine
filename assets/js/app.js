/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you require will output into a single css file (app.css in this case)
require('../../vendor/semantic/ui/dist/semantic.css');
require('../css/app.css');

// Need jQuery? Install it with "yarn add jquery", then uncomment to require it.
var $ = require('jquery');

window.onload = function() {
    if (window.jQuery) {
        // jQuery is loaded
        console.info("jQuery OK");
    } else {
        // jQuery is not loaded
        console.error("jQuery KO");
    }
}