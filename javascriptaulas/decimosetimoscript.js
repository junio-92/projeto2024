

        let a = window.document.getElementById('parte')
        a.addEventListener('click', executando)
        a.addEventListener('mouseenter', passar)
        a.addEventListener('mouseout', retirar)

        function executando() {
            
            a.innerText = 'Executado'
            a.style.background ='red'
        }
        function passar() {
            a.innerText = 'Passou'
            
        }
        function retirar() {
            a.innerText = 'Retirou'
            a.style.background = 'orange'
            
        }
    