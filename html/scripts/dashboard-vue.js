Vue.component('button-counter', {
    data: function () {
        return {
            count: 0
        }
    },
    props: {
        name: String
    },
    template: '<button v-on:click="count++"> {{ name }} clicked me {{ count }} times.</button>'
})

new Vue({ el: '#components-demo' })




Vue.component('appointmentModule', {

    props: {
        patient: String,
        date: String,
        notes: String,
        treatment: String,
    },

    template: "    <div class=\"appointment\">\n" +
        "        <span class=\"appointmentContentPatient\">Patient: {{patient}}  </span>\n" +
        "        <span class=\"appointmentContentDate\"> {{date}}</span> <br>\n" +
        "        <span class=\"appointmentContentNotes\">Notes: {{notes}}</span> <br/>\n" +
        "        <span class=\"appointmentContentNotes\">Treatment: <br/> {{treatment}}</span>" +
        "        <a href='#'><input type=\"button\" class=\"appointmentContentVisitPanel\" value=\"Visit panel\"></a>\n" +
        "        <a href='#'><input type=\"button\" class=\"appointmentContentVisitPanel\" value=\"Options\"></a>\n" +
        "\n" +
        "    </div>"


})


new Vue({
    el: '#appointmentsContainer',


})