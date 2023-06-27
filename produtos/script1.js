const divs = document.getElementById("cardrow");
const brasild = document.getElementById("brasil");
const europa = document.getElementById("europa");
let cards1;
let cards2;
let cards3;



function fcamisas(selecaoC) {
    console.log(selecaoC)
            for(let y = 0; y <= 9; y++){
                cards1 = `
                        <div class="col" style="display: flex; justify-content: center; border-color: black;">
                            <div class="card" style="width: 20rem; margin-bottom: 30px;   border-radius: 0;">
                                <img  src='${selecaoC.selecao.users[y].caminho}' class="card-img-top">
                                <div class="card-body" >
                                    <h5 class="card-title">${selecaoC.selecao.users[y].name}</h5>
                                    <p class="card-text">${selecaoC.selecao.users[y].informacoes}</p>
                                    <h3>R$ 60,00</h3>
                                </div>
                            </div>
                        </div> 
                    `;

                    cards2 = `
                        <div class="col" style="display: flex; justify-content: center; border-color: black;">
                            <div class="card" style="width: 20rem; margin-bottom: 30px;   border-radius: 0;">
                                <img  src='${selecaoC.brasil.usersB[y].caminho}' class="card-img-top">
                                <div class="card-body" >
                                    <h5 class="card-title">${selecaoC.brasil.usersB[y].name}</h5>
                                    <p class="card-text">${selecaoC.brasil.usersB[y].informacoes}</p>
                                    <h3>R$ 60,00</h3>
                                </div>
                            </div>
                        </div> 
                    `;

                    cards3 = `
                    <div class="col" style="display: flex; justify-content: center; border-color: black;">
                        <div class="card" style="width: 20rem; margin-bottom: 30px;   border-radius: 0;">
                            <img  src='${selecaoC.europa.usersE[y].caminho}' class="card-img-top">
                            <div class="card-body" >
                                <h5 class="card-title">${selecaoC.europa.usersE[y].name}</h5>
                                <p class="card-text">${selecaoC.europa.usersE[y].informacoes}</p>
                                <h3>R$ 60,00</h3>
                            </div>
                        </div>
                    </div> 
                `;

                    divs.innerHTML += cards1
                    brasild.innerHTML += cards2
                    europa.innerHTML += cards3
                }
                
                
            
    
}




// Fazer uma solicitação HTTP para a API
fetch('http://localhost/produtos/api.php/?endpoint=produtos')

    .then(response => {
        return response.json()
    
    })
    .then(resposta => {
        
        fcamisas(resposta)
        
    })






