window.onload = function() {
    var username = document.querySelector('#username');
    var res = document.querySelector('.username');

    username.onkeyup = function() {
         console.log(this.value);
        
        var xhr = new XMLHttpRequest();
        xhr.open('GET', '../php/get-denglu.php?username=' + this.value);
        xhr.send();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
              
              
              
              
                /*  
                var data = JSON.parse(xhr.responseText);
                res.innerHTML = data.msg; */
                /* if (data.hasname) {
                    res.style.color = "red";
                } else {
                    res.style.color = "green";
                } */
               
            }
        }
    }
}
