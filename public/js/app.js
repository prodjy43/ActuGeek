$(document).ready(function() {
    $('.nav-mobile h1').on('click', function() {
        $('.nav-mobile ul').toggleClass('open')
    })
    var quill = new Quill('#editor', {
        theme: 'snow'
    })
})