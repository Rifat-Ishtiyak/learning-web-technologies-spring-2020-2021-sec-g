function change(){
    let text=document.getElementById('h1');
    text.innerHTML="Rifat Ishtiyak";
    text.style.color='red';
}

function text(){
    let text=document.getElementById('search').value;
    document.getElementById('h1').innerHTML=text;
}


function move(){
    let a=document.getElementById('rect').style.left;

    if (a==0) {
        document.getElementById('rect').style.left='50px';
    }
    else{
        let b=parseInt(a.slice(0,3));
        let update=b+50+'px';
        // document.write(update);
        document.getElementById('rect').style.left=update;
    }
}