document.querySelector('#add-btn').addEventListener('click' , (e) => {
    // e.preventDefault();

    var title = document.getElementById('exampleInputtext1').value;
    var filelink = document.getElementById('exampleInputtext2').value;
    // var sources = document.getElementById('exampleInputtext3').value;
    // var opened = window.open("");
    // opened.document.write(
    //     `<html></html>
    //     <head><title>MyTitle</title></head>
    //     <body><class=form-holder h1>`
    //     + title +
    //     `</h1><br><p>`
    //     + body +
    //     `</p><br>`
    //     + sources +
    //     `</body>`
    //     +
    //     `</html>`
    // );
    
    var innerDiv = document.createElement('div');
    innerDiv.classList.add('card','py');
    var img = document.createElement('img');
    img.src = "Python_logo_icon.png";
    img.classList.add('pythoncard_img')
    innerDiv.appendChild(img);
    var card = document.createElement('div');
    card.classList.add('card-body');
    card.innerText = title;
    innerDiv.appendChild(card);
    var link = document.createElement('a');
    link.classList.add('btn', 'btn-primary');
    link.href = filelink;
    link.innerText = 'Start Course';
    innerDiv.appendChild(link);
    document.getElementById('container').appendChild(innerDiv);
});


function navigateProp(prop){
    window.open(`deleteProject.php?id=${prop}`);
    // alert(prop);
}

// function create(e){
    
//     // e.preventDefault();
//     var title = document.getElementById('exampleInputtext1').value;
//     // var body = document.getElementById('exampleInputtext2').value;
//     // var sources = document.getElementById('exampleInputtext3').value;
//     // var opened = window.open("");
//     // opened.document.write(
//     //     `<html>
//     //     <head><title>MyTitle</title></head>
//     //     <body><class=form-holder h1>"`
//     //     + title +
//     //     `</h1><br><p>`
//     //     + body +
//     //     `</p><br>`
//     //     + sources +
//     //     `</body>`
//     //     +
//     //     `</html>`
//     // );
    
//     var innerDiv = document.createElement('div');
//     innerDiv.classList.add('card','py');
//     var img = document.createElement('img');
//     img.src = "Python_logo_icon.png";
//     innerDiv.appendChild(img);
//     var card = document.createElement('div');
//     card.className = "card-body";
//     card.innerHTML = title;
//     innerDiv.appendChild(card);
//     document.getElementById('container').appendChild(innerDiv);
// }