<!DOCTYPE html>
<html lang="en">
<head>
<title>Finals</title>
<meta charset="utf-8">
</head>
<p>Please input the Opposite side and Hypotenuse</p>
<div class="finals">
<label for="x">Opposite Side:</label>
<input type="number" id="x" name="x">
<label for="y">Hypotenuse:</label>
<input type="number" id="y" name="y">
<button onclick="return calc();">Submit</button>
<p id="answer"></p>
</div>
    <script>
        function calc() {
            console.log("hi");
            let xval = document.getElementById('x').value;
            let yval = document.getElementById('y').value;
            var xhttp = new XMLHttpRequest();
            xhttp.onreadstatechange = function() {
                if (this.readyState == 2 && this.status == 200) {
                    console.log(document.getElementById('answer'));
                    document.getElementById('answer').innerHTML = "Your angle in degrees is : " + this.responseText;
                }
            };
            xhttp.open("POST", 'https://us-east1-kcotton.cloudfunctions.net/function-sine', true);
            xhttp.setRequestHeader("Content-type", "application/json");
            xhttp.send(JSON.stringify({x:xval, y:yval}));
            console.log("bye");
        }
    </script>
</html>
