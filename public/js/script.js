function comprobar() {
    $.ajax({
        url:'/comprobacion',
        data:$('#usuario').serialize(),
        type: 'GET',
        success:function (r) {
            let valor =false;
            let input = document.getElementById('usuario').value;
            for (let i = 0; i < r.length; i++) {
                if (input===r[i]['users']){
                    valor=true;
                }
            }

            if(valor===true){
                document.getElementById('usuario').classList.add('is-invalid');
                document.getElementById('usuario').classList.remove('is-valid');
                document.getElementById('leyenda').style.visibility='visible';
                document.getElementById('registrarse').disabled=true;
            }else {
                document.getElementById('usuario').classList.remove('is-invalid');
                document.getElementById('usuario').classList.add('is-valid');
                document.getElementById('leyenda').style.visibility='hidden';
                document.getElementById('registrarse').disabled=false;
            }
        }
    })

}
