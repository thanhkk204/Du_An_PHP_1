

// nav
//hover
let li = document.querySelectorAll('.nav>ul>li');
let i = document.querySelectorAll('.nav>ul>li>i');
let li_list = document.querySelectorAll('.nav>ul>li .li_list')
li.forEach((item,index)=>{
    item.addEventListener('mouseover',(e)=>{
        if(i[index]){
            i[index].classList.add('trans_i')
            li_list[index].classList.remove('hide')

        }
    
    })

    item.addEventListener('mouseout',(e)=>{
        if(i[index]){
        i[index].classList.remove('trans_i')
            li_list[index].classList.add('hide')
        }
        })
})
//click
i.forEach((item,index)=>{
    item.addEventListener('click',()=>{
        if(i[index]){
            li_list[index].classList.toggle('hide')
        }
    })
})