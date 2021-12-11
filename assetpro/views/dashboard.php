<h1>Dash</h1>

<p id="assetName"></p>

<script>
     let xhr = new XMLHttpRequest();
        xhr.open('GET' , 'http://localhost/php/Day4/asset/get/6'); //controller/method/params
        xhr.onload = function(){
            res = JSON.parse(this.responseText);
            console.log(res);
            document.getElementById('assetName').innerHTML = `Asset Status : ${res.Status}`;
        }
        xhr.send();
</script>