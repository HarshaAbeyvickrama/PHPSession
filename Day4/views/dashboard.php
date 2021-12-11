<h1>Dash</h1>

<p id="assetName"></p>

<script>
     let xhr = new XMLHttpRequest();
        xhr.open('GET' , 'http://localhost/php/assetpro/asset/get/6'); //method/params
        xhr.onload = function(){
            res = JSON.parse(this.responseText);
            console.log(res);
            document.getElementById('assetName').innerHTML = `Asset Status : ${res.Status}`;
        }
        xhr.send();
</script>