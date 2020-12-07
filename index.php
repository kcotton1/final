<!DOCTYPE html>
/* Kenji Cotton
IT 5236
12/2/2020 */
<html lang="en">
<head>
<title>Finals</title>
<meta charset="utf-8">
</head>
<p>Please input the Opposite side and Hypotenuse</p>
<label for="x">Opposite Side:</label>
<input type="number" id="x" name="x"> 
<label for="y">hypotenuse:</label>
<input type="number" id="y" name="y"> 
<button onclick="return calc();">Submit</button>
<p id="answer"></p>
    <script>
        function calc() {
            console.log("hi");
            let xval1 = document.getElementById('x1').value;
            let yval1 = document.getElementById('y1').value;
            let xval2 = document.getElementById('x2').value;
            let yval2 = document.getElementById('y2').value;
            var xhttp = new XMLHttpRequest();
            xhttp.onreadstatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    console.log(document.getElementById('answer'));
                    document.getElementById('answer').innerHTML = "Your angle in degrees is : " + this.responseText;
                }
            };
            xhttp.open("POST", 'https://us-east1-capable-arbor-286903.cloudfunctions.net/function-final', true);
            xhttp.setRequestHeader("Content-type", "application/json");
            xhttp.send(JSON.stringify({x1:xval1, y1:yval1, x2:xval2, y2:yval2}));
            console.log("bye");
        }
    </script>
</html>
