{% form_theme form 'ContactBundle:Theme:contact.html.twig' %}
  <form action="{{ path('new_contact', {'blank_layout':blank_layout}) }}" method="post" {{ form_enctype(form) }}>
    <p>Please note, all fields marked with a <span class="required">*</span> are required</p>
    <div id="contact">
        <div class="form-errors">
            {{ form_errors(form) }}  
        </div>
        {{ form_widget(form) }}  
        <input type="submit" value="send" class="contact-send" />
    </div>
  </form>