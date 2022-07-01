window.onload = function(){
    document.querySelector('.excluir').addEventListener('click', 
    function(event){
        event.preventDefault();
        if (confirm('Deseja mes excluir esse livro?')){
            return true;
        }
    })
}