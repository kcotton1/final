<!DOCTYPE html>
<html lang="en">
<head>
<title>Finals</title>
<meta charset="utf-8">
</head>
<p>Please input the Opposite side and Hypotenuse</p>
<label for="x">Opposite Side:</label>
<input type="number" id="x" name="x">
<br>
<p />
<br>
<label for="y">hypotenuse:</label>
<input type="number" id="y" name="y">
<br>
<button onclick="return calc();">Submit</button>
<p id="answer"></p>
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
            xhttp.open("POST", 'https://us-east1-capable-arbor-286903.cloudfunctions.net/function-final', true);
            xhttp.setRequestHeader("Content-type", "application/json");
            xhttp.send(JSON.stringify({x1:xval, y1:yval}));
            console.log("bye");
        }
    </script>
</html>
