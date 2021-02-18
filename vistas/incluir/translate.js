function cambiaIdioma (lang){
    lang = lang || localStorage.getItem('app-lang') || 'en';
    localStorage.setItem('app-lang', lang);
    var traduc = document.querySelectorAll('[data-tr]');
    
    $.ajax({
    url: 'vistas/incluir/lang/'+lang+'.json',
        type:'POST',
        dataType:'JSON',
        success:function (data){
            for(var i=0;i<traduc.length;i++){
                traduc[i].innerHTML = data.hasOwnProperty(lang) ? data[lang][traduc[i].dataset.tr] : traduc[i].dataset.tr;
            }
        }
    })
}
$( document ).ready(function() {
    cambiaIdioma();
    $('#opc_es').on('click', function() {
        cambiaIdioma('es')
        });
    $("#opc_en").on("click", function() {
        cambiaIdioma('en')
        });
    $("#opc_val").on("click", function() {
        cambiaIdioma('val')
    });
});