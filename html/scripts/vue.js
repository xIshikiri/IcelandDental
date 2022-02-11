



Vue.component('nav-bar', {

    template: "<nav id=\"nav\">\n" +
        "    <div id=\"logIn\">\n" +
        "        <a href=\"\" >log in</a>\n" +
        "    </div>\n" +
        "    <span>\n" +
        "        <a href=\"\">Home</a>\n" +
        "        <a href=\"\">About us</a>\n" +
        "        <a href=\"\">Offer</a>\n" +
        "        <a href=\"\">Contact</a>\n" +
        "        <a href=\"\">Patient Hub</a>\n" +
        "    </span>\n" +
        "</nav>"
})

new Vue({
    el: "#app"

})
