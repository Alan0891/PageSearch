


document.querySelector('#profile').addEventListener('click', typeWriter(15))

function typeWriter(elemento) {
  let arr = []
  for(let i = 0; i <= parseInt(elemento);i++){
    arr.push(i)
  }

  arr = arr.toString()
  const letter = arr.split(',');
  letter.forEach((letra, i) => {
      setTimeout(function () {
          document.getElementById('proj').innerHTML = ""
          document.getElementById('proj').innerHTML += letra
          document.getElementById('proj').style.fontSize = i+'pt'
      }, 75 * i);
  });
}


function Writer(e){
  let vet = [] 
   vet = e.split('')
    document.getElementById('sub_txt').innerHTML = " "
    vet.forEach((letter,y)=>{
       setTimeout(()=>{
         document.getElementById('sub_txt').innerHTML += letter
       },75 * y)
    })
}

//Writer(document.getElementById('sub_txt').innerHTML)

setTimeout(()=>{
  document.getElementById('prod').style.height = '40vh'
  document.getElementById('prod').style.width = '60vh'
},5000)

document.querySelector('#pop_closed').addEventListener('click',()=>{
  document.getElementById('prod').style.height = '0'
  document.getElementById('prod').style.width = '0'
})

function JsonReturn(json){ 
let html = '' 
for(i in json){
   html += `<div class="d-flex inline"><h5><a href=> ${json[i].title}</a></h5> <p class="pl-2" style="font-size:8pt;">${json[i].dateday}</p></div>`
   html += `<hr>`
   html += `<p>${json[i].body} </p>`
   html += `<span${json[i].nome}></span>`
 }
 document.getElementById('html').innerHTML = html
}

document.getElementById('form_pesq').addEventListener('keyup',()=>{
let p = document.getElementById('form_pesq').value
if(p.length > 0){  
fetch('http://localhost:3000/public/home/listpesq/tb_notice/'+p,{
  method: 'GET',
  headers:{
    'Content-Type':'application/json'
  }
})
.then((response)=>{return response.json()})
.then((json)=>{
    JsonReturn(json)
 })
}else{
  document.getElementById('html').innerHTML= " "
 }
})

let clock = document.querySelector('#clock p')
setInterval(showTime,1000)

function showTime(){
  let hour = new Date()
  let h= hour.getHours()
  let m = hour.getMinutes()
  let s = hour.getSeconds()

  clock.innerHTML = `${h}:${m}:${s}`
}

document.getElementById('menu_btn').addEventListener('click',()=> menuToggle())

function menuToggle(){
  let menu = document.getElementById('menu')

  if(menu.classList.contains('menu_open') == false){
       menu.classList.add('menu_open')

  }else{
       menu.classList.remove('menu_open')
  }
}

document.getElementById('top').addEventListener('click',()=>{
  window.scrollTo({top:0,left:0,behavior:'smooth'})
}) 

window.addEventListener('scroll',()=>{
  if(window,scrollY < 100){
    document.getElementById('top').style.display = "none"
  }else{
    document.getElementById('top').style.display = "block"
  }
})

let psq = document.getElementById('form_pesq')


psq.addEventListener('keyup',()=> {

  document.getElementById('pesq').innerHTML = psq.value

  if(psq.value.length > 0){
    document.querySelector('#form_pesq').classList.remove('form-control-md')
    document.querySelector('#form_pesq').classList.remove('col-12')
    document.querySelector('#form_pesq').classList.add('form-control-sm')
    document.querySelector('#form_pesq').classList.add('col-10')
    document.querySelector('#txt_pesq').classList.remove('text-center')
    document.querySelector('#txt_pesq').classList.remove('h1')
    document.querySelector('#txt_pesq').classList.add('h4')
    document.getElementById('glass').style.fontSize = '20pt'
    document.querySelector('#barra').classList.remove('form-group')
    document.querySelector('#barra').classList.add('form-inline')
    document.getElementById('suggest').innerHTML = "Você quis dizer: "
  }else{
    document.querySelector('#form_pesq').classList.add('form-control-md')
    document.querySelector('#form_pesq').classList.add('col-12')
    document.querySelector('#form_pesq').classList.remove('form-control-sm')
    document.querySelector('#form_pesq').classList.remove('col-10')
    document.querySelector('#txt_pesq').classList.add('text-center')
    document.querySelector('#txt_pesq').classList.remove('h4')
    document.querySelector('#txt_pesq').classList.add('h1')
    document.getElementById('glass').style.fontSize = '30pt'
    document.querySelector('#barra').classList.add('form-group')
    document.querySelector('#barra').classList.remove('form-inline')
    document.getElementById('suggest').innerHTML = " "
   
  }
})

console.log(Math.floor(3.23), Math.ceil(3.21), Math.round(3.37))

console.log(Math.floor(Math.random() * 100))

let obj = {
nome: 'Alan',
sobrenome: 'Rocha',
idade : `${(new Date().getFullYear()) - 1980}`,
social:{
  linkedin: 'acesarrocha',
  facebook: 'Alan Cesar',
  instagram: '@alancesar',
  email:{ 
    email1: 'acesarrocha3@hotmail.com',
    email2: 'artgio39@gmail.com'
  }
 }
}

let {nome, idade, social:{instagram,facebook, email:{email2}}} = obj

console.log(nome , idade, instagram,facebook, email2)


let arr = ['a','b','c','d','e','f','g','h','i','j']

console.log(Object.keys(arr) , ':' , Object.values(arr), ':', Object.entries(arr))

let letter = "f"

if(arr.includes(letter)){
   console.log(arr.indexOf(letter))
}

let vtr = arr.map((element)=> element += 'vsc')

let  f= vtr.find((item)=>{
  return (item == "fvsc") ? true:false
})

console.log(f)

let num = [1,2,3,4,5,6,7,8,9]
let par = []

num.map((item)=> (item % 2 == 0) ? par.push(item):false)

console.log(par)

let names = {
  list : [
  'Alan',
  'Cesar',
   2002-1980
  ]
}

let string = JSON.stringify(names)

let json = JSON.parse(string)

console.log(json.list)

let l = {
  'letra':'a',
  'letrb':'b',
  'letrc':'c',
  'letrd':'d'
}

function Prom(letra){
  let alf
  return new Promise((resolve, reject)=>{
    console.log('Estamos trabalhando na requisição')
     alf = {
       ...letra,
       'letre':'e',
       'letrf':'f',
       'letrg':'g'
     }
     setTimeout(()=>resolve(alf),3000)

     console.log('Espere mais um pouquinho...')
  })
}

Prom(l).then((result)=> console.log(result)).catch((error)=> error)


async function peoples(...name){

  let req = await fetch('https://jsonplaceholder.typicode.com/posts',{
    method : 'POST',
    body : JSON.stringify({name: [`${name}`]}),
    headers:{
        'Content-Type': 'application/json'
      }
    })
    let json = await req.json()
      console.log(json)
}


peoples('Alan','Arthur','Giovanna','Jacqueline')




document.getElementById('btnImg').addEventListener('click',()=>{
  upImg()
 })


async function upImg(){
  let file = document.getElementById('img').files[0]
  let body = new FormData()
  body.append('title','Images')
  body.append('file',file)

  let req = await fetch('http://www.acsr.com.br/upload',{
     method:'POST',
     body: body,
     headers:{
    'Content:Type':'multipart/formdata'
     }
  })
  return req
 }

 


 

