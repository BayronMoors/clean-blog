// ./piblic/js/posts/show.js


const editable = document.querySelectorAll('.editable')

function blur(input, text){
    input.onblur = function(){
        const id = document.querySelector('.postDetails').dataset.id
        const field = text.dataset.field
        const value = input.value
        input.style.display = "none";
        text.style.display = "block";
        text.innerText = input.value;
        axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
        axios.get(`?update&id=${id}&field=${field}&value=${value}`)
          .then(function() {
          })
          .catch((err) => {
            console.log(err);
          })
    }
}

editable.forEach(link => link.ondblclick = function (e) {
    const contenu = this.innerHTML
    const code = document.createElement('textarea');
    code.classList.add('edite');
    code.style.width = "100%";
    code.value = contenu;
    let parent = this.closest('div');
    parent.append(code);
    this.style.display = "none";
    blur(code, this);
})

