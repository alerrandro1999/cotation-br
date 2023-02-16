const moedareal =  new Intl.NumberFormat('pt-BR', { style: 'currency', currency: 'BRL' });

const builderTemplate = (logourl, name, close, volume, idStock) => `
                <div class="cotation" id="${idStock}">
                    <div class="img">
                        <img src="${logourl}" alt="imagem da empresa" width="50" height="50">
                    </div>
                    <div class="texto">
                        <p class="nome">${name}</p>
                        <p class="valor">${moedareal.format(close)} </p>
                        <p class="volume">Volume: ${volume}</p>
                    </div>
                </div>
    `
function updateStock() {
    fetch('https://brapi.dev/api/quote/list')
        .then(response => response.json())
        .then(({
            stocks
        }) => {
            for (const stock of stocks) {
                const elementFather = document.getElementById(stock.stock);
                const value = elementFather.querySelector(".valor");
                const volume = elementFather.querySelector(".volume");
                value.textContent = moedareal.format(stock.close);
                volume.textContent = `Volume: ${stock.volume}`;
            }
        })

        .catch(err => console.error('Erro de solicitação', err));
}

fetch('https://brapi.dev/api/quote/list')
    .then(response => response.json())
    .then(({
        stocks
    }) => {

        const elementFather = document.getElementById("container-cotation");
        const listStocks = [];
        for (const stock of stocks) {
            listStocks.push(builderTemplate(stock.logo, stock.name, stock.close, stock.volume, stock.stock));
        }

        elementFather.innerHTML = listStocks.join('');
    })
    .catch(err => console.error('Erro de solicitação', err));

setInterval(() => {
    updateStock();
}, 1000);