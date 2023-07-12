var busca = document.querySelector('#busca');
var autocomplete = document.querySelector("#autocomplete");


busca.addEventListener('input', _.throttle(async event => {

    try {
        if (event.target.value.length >= 3) {
            const { data } = await axios.get('produtos.php', {
                params: {
                    produto: event.target.value
                }
            });
            if(!data.length){
                autocomplete.classList.remove("d-none");
                autocomplete.innerHTML = '<div>Nenhum Produto Encontrado</div>';
                return;
            }
            autocomplete.classList.remove("d-none");
            var produtos = '<ul>';
            produtos += data.map(produto =>{
                return `
                <li>${produto.descricao}</li>
                `
            }).join('');
            produtos += '</ul>';
            autocomplete.innerHTML = produtos;
            console.log(data);
        }

    } catch (error) {
        console.log(error)
    }


}, 500));