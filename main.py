from flask import Flask

app = Flask(__name__)

@app.route('/')
def hello():
    return "Hello from Flask!"

@app.route('/json')
def hello_json():
    return {"message": "Hello from Flask in JSON!"}

