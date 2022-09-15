let contents = document.querySelectorAll('.row:not([data-parent])');
let contentsOptional = document.querySelectorAll('.row[data-parent]');
let btnFormSubmit = document.querySelector('#btn_form_submit');
let textQuestionIndex = document.querySelector(`.qIdx`);
let contentBtnSubmit = document.querySelector(`.section-footer`);
let qIdx = 1;

document.querySelector(`.qLength`).textContent = contents.length;
textQuestionIndex.textContent = qIdx;

function initForm() {

    contents.forEach(function ( content, index ) {
        
        if (index != 0) {
            content.classList.add('off');
        }

        content.dataset.id = ++index;

        document.querySelectorAll(`[data-id='${index}'] input`).forEach(function ( input ) {
            input.classList.add(`q${index}`);
        });

    });

    contentsOptional.forEach(function ( content, index ) {

        content.classList.add('off');
        content.dataset.parentId = ++index;

        document.querySelectorAll(`[data-parent-id='${index}'] input`).forEach(function ( input ) {
            input.classList.add(`qo${index}`);
            input.dataset.contentId = index;
        });

    });

    handleForm();
}

function handleForm() {
    
    document.querySelectorAll(`.q${qIdx}`).forEach( function ( question ) {
        question.addEventListener('change', function () {
            selectOption(question);
        })
    } );

}

function handleFormOptional( child ) {
    
    document.querySelectorAll(`.qo${child}`).forEach( function ( question ) {
        question.addEventListener('change', function () {
            selectOption(question);
        })
    } );

}

function selectOption( question ) {
    
    if (question.type != 'checkbox') {

        selectQuestion( question );

    } else {

        if (contentBtnSubmit.classList.value.includes('off')) {

            contentBtnSubmit.classList.remove('off');
            clickBtn( question );

        }

    }

}

function handleQuestion( contentId ) {

    isContentIdUndefiend(contentId);
    document.querySelector(`[data-id='${++qIdx}']`).classList.remove('off');
    textQuestionIndex.textContent = qIdx;
    handleForm();

}

function handleQuestionOptional( child, contentId ) {

    isContentIdUndefiend(contentId);
    document.querySelector(`[data-parent-id='${child}']`).classList.remove('off');
    handleFormOptional( child );

}

function isContentIdUndefiend( contentId ) {
    
    if (contentId != undefined) {
        document.querySelector(`[data-parent-id='${contentId}']`).classList.add('off');
    } else {
        document.querySelector(`[data-id='${qIdx}']`).classList.add('off');
    }

}

function sendForm() {
    
    document.querySelector(`.loading`).classList.remove('off');
    document.querySelector(`.cuestionario`).classList.add('off');
    setTimeout(function () {
        form.submit()
    }, 2000);

}

function clickBtn( question ) {
    
    btnFormSubmit.addEventListener('click', function ( event ) {
        event.preventDefault();
    
        selectQuestion( question );
        contentBtnSubmit.classList.add('off');

    }, { once: true })

}

function selectQuestion( question ) {
    
    if (contents.length == qIdx) {
            
        sendForm();

    } else {
        
        setTimeout(function () {

            if (question.dataset.child != undefined) {
                handleQuestionOptional(question.dataset.child, question.dataset.contentId)
            } else {
                handleQuestion(question.dataset.contentId)
            }

        }, 500);  

    }

}

initForm();