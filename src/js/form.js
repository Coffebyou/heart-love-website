document.querySelector('#submit').addEventListener('click', function() {
    let cliente = document.querySelector('#cliente').value;
    let telefono = document.querySelector('#telefono').value;
    let asunto = document.querySelector('#asunto').value;
    let mensaje = document.querySelector('#mensaje').value;

    let url = "https://api.whatsapp.com/send?phone=584127442185&text=Mi%20Nombre%20es %3A%0A"+cliente+" Mi%20Telefono%20es %3A%0A"+telefono+" Mi%20Asunto%20es%3A%0A"+asunto+"Mi%20Mensaje%20es%3A"+mensaje

    window.open(url);
})