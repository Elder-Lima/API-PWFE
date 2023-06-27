const divC = document.getElementById('card');
let card;

fetch('http://localhost/imagens/api.php/?endpoint=profile-image')

    .then(response => {
        return response.json()
    
    })
    .then(resposta => {
        
        console.log(resposta)
        fcard(resposta)
    })

function fcard(infos) {
    card = `
                <div class="profile-container">
                    <div class="profile-box">
                        <img src="${infos.users[0].url}" alt="Foto de Perfil" class="profile-image">
                        <h2>${infos.users[0].name}</h2>
                    </div>
                </div>
    `;

    divC.innerHTML += card;

}