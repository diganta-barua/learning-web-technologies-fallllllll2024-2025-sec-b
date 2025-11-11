function email() {
    let name = document.getElementById('name').value;
    let msg = document.getElementById('nerror');
    if (name === "") {
        document.getElementById('one').style.color = 'red';
    }
    else if (name.lenght < 2) {
        document.getElementById('two').style.color = 'red';
    }
    else if (name) {
        document.getElementById('two').style.color = 'red';
    }
    else {

    }

}