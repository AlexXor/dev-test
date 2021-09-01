document.querySelector('.btn').addEventListener('click', () => {
    let data = +document.querySelector('.i-1').value;
    document.querySelector('.out-1').innerHTML += data;
})