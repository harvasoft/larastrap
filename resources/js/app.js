require("./bootstrap");
require("alpinejs");
var Turbolinks = require("turbolinks");
Turbolinks.start();

document.addEventListener("turbolinks:load", function (event) {
    window.livewire.restart();
});
