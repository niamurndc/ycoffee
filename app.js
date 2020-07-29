let list = document.getElementsByClassName('list-group-item');
const taka = document.getElementById('taka').innerHTML;
const amount = document.getElementById('amount').value;

let bdt = parseInt(taka);
let amt = parseInt(amount);

let attr = [];
for(let i = 0; i < list.length; i++){
  list[i].addEventListener('click', function(){
    let text = this.innerHTML;
    
    attr.push(text);
    console.log(text);
    
    bdt = bdt + 10;
    document.getElementById('taka').innerHTML = '';
    document.getElementById('taka').innerHTML = bdt;
    document.getElementById('price').value = bdt;
    
    attr.forEach(att => { 
      document.getElementById('special').value = attr;
    })
  })
}

document.getElementById('refresh').addEventListener('click', () => {
  location.reload();
})

