{% for result in results %}
  Title: {{ result.title.text|e }}<br/>
{% endfor %}