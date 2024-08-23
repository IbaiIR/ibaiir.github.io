
from flask import Flask, render_template, request
import re

app = Flask(__name__)

# Cargar el corpus
with open('LizarragaGuztiak.txt', 'r', encoding='utf-8') as file:
    LizarragaGuztiak = file.read()

def find_concordances(word):
    # Usar expresiones regulares para encontrar coincidencias
    pattern = re.compile(r'([^.]?\b' + re.escape(word) + r'\b[^.]\.)', re.IGNORECASE)
    matches = pattern.findall(corpus)
    return matches

@app.route('/konkordantzia', methods=['GET', 'POST'])
def konkordantzia():
    results = []
    if request.method == 'POST':
        word = request.form['word']
        results = find_concordances(word)
    return render_template('konkordantzia.html', results=results)

if __name__ == '__main__':
    app.run(debug=True)