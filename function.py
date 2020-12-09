import math
#Kenji Cotton
#IT 5236
#12/2/2020
#source for the response code: https://stackoverflow.com/questions/44353455/how-to-send-a-status-200-answering-to-a-https-post-in-python
#source for the CORS bypass: https://cloud.google.com/functions/docs/writing/http#functions_http_cors-python
def sine(request):
    if request.method == 'OPTIONS':
        headers = {
            'Access-Control-Allow-Origin': '*',
            'Access-Control-Allow-Methods': 'POST',
            'Access-Control-Allow-Headers': 'Content-Type',
            'Access-Control-Max-Age': '3600'
        }

        return ('', 204, headers)
    headers = {
        'Access-Control-Allow-Origin': '*'
    }
    request_json = request.get_json()
    x = request_json.get("x")
    y = request_json.get("y")
    try:
        x = float(x)
        y = float(y)
        result = x / y
        inverse = math.asin(result)
        angle = (inverse * 180)/math.pi
        return str((angle, 200, headers))
    except:
        return ('bad request', 400, headers)
    