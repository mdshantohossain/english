function title(){
    let label = document.createElement('label');
    label.classList.add('col-md-12');
    label.classList.add('question_title');
    label.innerHTML = 'Question Title';

    let input = document.createElement('input');
    input.type = 'text';
    input.classList.add('form-control');
    input.name = 'title[]';
    input.placeholder = 'Question title*'

    let inputDiv = document.createElement('div');
    inputDiv.classList.add('col-md-12');


    inputDiv.appendChild(input);

    let mainDiv = document.createElement('div');
    mainDiv.classList.add('mb-3');

    mainDiv.appendChild(label);
    mainDiv.appendChild(inputDiv);
    let body = document.getElementById('body');

    body.appendChild(mainDiv);
}

function body(){
    let label = document.createElement('label');
    label.classList.add('col-md-12');
    label.classList.add('question_title');
    label.innerHTML = 'Question body';

    let textarea = document.createElement('textarea');
    textarea.classList.add('form-control');
    textarea.name = 'body[]';
    textarea.placeholder = 'Question body'
    textarea.row = '5'

    let inputDiv = document.createElement('div');
    inputDiv.classList.add('col-md-12');

    inputDiv.appendChild(textarea);

    let mainDiv = document.createElement('div');
    mainDiv.classList.add('mb-3');

    mainDiv.appendChild(label);
    mainDiv.appendChild(inputDiv);
    let body = document.getElementById('body');

    body.appendChild(mainDiv);
}

function point(){
    let label = document.createElement('label');
    label.classList.add('col-md-12');
    label.classList.add('question_title');
    label.innerHTML = 'Point';

    let input = document.createElement('input');
    input.classList.add('form-control');
    input.name = 'point[]';
    input.placeholder = 'example: 20 points'

    let inputDiv = document.createElement('div');
    inputDiv.classList.add('col-md-12');

    inputDiv.appendChild(input);

    let mainDiv = document.createElement('div');
    mainDiv.classList.add('mb-3');

    mainDiv.appendChild(label);
    mainDiv.appendChild(inputDiv);
    let body = document.getElementById('body');

    body.appendChild(mainDiv);
}

function makeQuestion(){

    title();
    body();
    point();
}
