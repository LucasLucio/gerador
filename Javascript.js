/* Confirmar antes de deletar os dados */
$('.Deletar').on('click',function(event){
    event.preventDefault();

    var Link=$(this).attr('href');

    if(confirm("Deseja mesmo apagar esse dado?")){
        window.location.href=Link;
    }else{
        return false;
    }
});
