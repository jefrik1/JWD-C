document.getElementById('loginForm').addEventListener('submit', function(event){
    event.preventDefault();

    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var errorContainer = document.getElementById('errorContainer')


    if(email == 'admin@example.com' && password == 'admin'){
        alert('Anda Berhasil Login!');
        location.replace('order.html');
    } else {
        var errorMessage = document.createElement('div');
        errorMessage.textContent = 'Email atau Password salah'
        errorMessage.classList.add('alert');
        errorContainer.innerHTML = '';
        errorContainer.appendChild(errorMessage);
    }
});

function calculateCost(){
    var menuItem = document.getElementsByName('menu');
    var totalCost = 0;
    
    for(var i=0; i < menuItem.length; i++){
        if(menuItem[i].checked){
            totalCost += parseInt(menuItem[i].value);
            menuItem[i].parentNode.style.backgroundColor = 'green';
            menuItem[i].parentNode.style.color = 'white';
        } else {
            menuItem[i].parentNode.style.backgroundColor = 'white';
            menuItem[i].parentNode.style.color = 'initial';
        }
    }

    document.getElementById('totalCost').innerHTML = '<span class="left">Total:</span><span class="right">Rp '+totalCost.toLocaleString()+'</span>'
}