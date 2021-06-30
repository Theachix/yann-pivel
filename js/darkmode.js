const Switch = document.getElementById('flexSwitchCheckChecked');

Switch.addEventListener('click', () => {
    const body = document.body

    if(body.classList.contains('dark')){
        body.classList.add('light')
        body.classList.remove('dark')
    } else if (body.classList.contains('light')){
        body.classList.add('dark')
        body.classList.remove('light')
    }
})