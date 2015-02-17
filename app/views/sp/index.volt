<h2>Kimono</h2>
{% for result in results %}
  Title: {{ result.title.text|e }}<br/>
{% endfor %}

<h2>SlideShare</h2>
{% for result in results %}
  testTitle: {{ result.title.text|e }}<br/>
{% endfor %}

