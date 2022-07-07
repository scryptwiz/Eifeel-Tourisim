// Loader Section
function callback() {
    setTimeout(function () {
        var main = document.getElementById('main');
        var loader = document.getElementById('loader_bg');
        loader.style.display = 'block';
    },1000)
}

function loading(callback){
    setTimeout(callback,1000);
}

function hideloader() {
    var loader = document.getElementById('loader_bg');
    var main_div = document.getElementById('main');
    loader.style.display = 'none';
    main_div.style.display = 'block';
}

loading(function(){
        hideloader();
    }
);

const user = () => {
    document.getElementById('dropdown_content').style.display = 'flex'
}

