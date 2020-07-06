<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* chambre/AddChambre.html.twig */
class __TwigTemplate_d56c70421f420c807767c58a733e290d190c5bf1e053d193c5c2ffa3abb7c58a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'container' => [$this, 'block_container'],
            'javascripts' => [$this, 'block_javascripts'],
            'phpPart' => [$this, 'block_phpPart'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chambre/AddChambre.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "chambre/AddChambre.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 4
        echo "<div class=\"card-header col-6 text-center m-auto\" style=\"font-size: 2vw;color:#227676;font-weight:bold;cursor:pointer\" onclick=\"myFunction('/chambre')\">
 Retour à la liste des chambres
  </div>
  <br>
<div class=\"champObligatoire col-8 m-auto\" id=\"error-1\" ></div>
<div class=\"input-group col-10 m-auto\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text span-size\"> Numero: </span>
  </div>
  <input id=\"numero\" placeholder=\"Generate automatically\" value=\"\" readonly=\"readonly\" type=\"text\" aria-label=\"First name\" name=\"numero\" class=\"form-control\">
</div>
<br>
<div class=\"champObligatoire col-8 m-auto\" id=\"error-2\"></div>
<div class=\"input-group col-10 m-auto\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text span-size\">Numero Batiment:</span>
  </div>
  <input id=\"numeroBatiment\" type=\"text\" pattern=\"[0-9]{3}\" aria-label=\"First name\" name=\"numeroBatiment\" class=\"form-control\">
</div>
<br>
<div class=\"champObligatoire col-8 m-auto\" id=\"error-3\"></div>
<div class=\"input-group col-10 m-auto\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text span-size\">Type de Chambre</span>
  </div>
  <select class=\"custom-select custom-select-lg\" id=\"type\" name=\"type\">
  <option selected>Veuillez choisir</option>
  <option value=\"individuel\">Individuel</option>
  <option value=\"Binome\">Binome</option>
</select>
</div>
<br>
<button class=\"btn btn-secondary m-auto btn-lg btn-block col-6\" name=\"creerChambre\" id=\"creerChambre\" type=\"submit\">Valider Chambre</button>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo "<script>
  \$(function(){
  \$('#loginForm').on('submit',function(e) {
          //e.preventDefault();
         // only neccessary if something above is listening to the (default-)event too
         //e.stopPropagation();      
      var erreur
      var numeroBatiment = \$('#numeroBatiment').val();
      var type = \$('#type').val();
     
      var erreur;
      if (numeroBatiment==null  | numeroBatiment=='') {
        \$('#error-2').html('*Ce champ est obligatoire...');
        erreur = true;
      }
      if ((type == \"Veuillez choisir\")){
        \$('#error-3').html('*Veuillez choisir un type...');
        erreur = true;
      }
      if (erreur) {
        e.preventDefault();
        return false;
      }
    });

      \$(\"#numeroBatiment\").keyup(function(){
          \$('#error-2').html('');
      })
      \$(\"#type\").click(function(){
          \$('#error-3').html('');
      })
      
    })   
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 74
    public function block_phpPart($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "phpPart"));

        // line 75
        echo "  ";
        echo twig_escape_filter($this->env, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 75, $this->source); })()), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "chambre/AddChambre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 75,  149 => 74,  108 => 39,  101 => 38,  61 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block container %}
<div class=\"card-header col-6 text-center m-auto\" style=\"font-size: 2vw;color:#227676;font-weight:bold;cursor:pointer\" onclick=\"myFunction('/chambre')\">
 Retour à la liste des chambres
  </div>
  <br>
<div class=\"champObligatoire col-8 m-auto\" id=\"error-1\" ></div>
<div class=\"input-group col-10 m-auto\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text span-size\"> Numero: </span>
  </div>
  <input id=\"numero\" placeholder=\"Generate automatically\" value=\"\" readonly=\"readonly\" type=\"text\" aria-label=\"First name\" name=\"numero\" class=\"form-control\">
</div>
<br>
<div class=\"champObligatoire col-8 m-auto\" id=\"error-2\"></div>
<div class=\"input-group col-10 m-auto\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text span-size\">Numero Batiment:</span>
  </div>
  <input id=\"numeroBatiment\" type=\"text\" pattern=\"[0-9]{3}\" aria-label=\"First name\" name=\"numeroBatiment\" class=\"form-control\">
</div>
<br>
<div class=\"champObligatoire col-8 m-auto\" id=\"error-3\"></div>
<div class=\"input-group col-10 m-auto\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text span-size\">Type de Chambre</span>
  </div>
  <select class=\"custom-select custom-select-lg\" id=\"type\" name=\"type\">
  <option selected>Veuillez choisir</option>
  <option value=\"individuel\">Individuel</option>
  <option value=\"Binome\">Binome</option>
</select>
</div>
<br>
<button class=\"btn btn-secondary m-auto btn-lg btn-block col-6\" name=\"creerChambre\" id=\"creerChambre\" type=\"submit\">Valider Chambre</button>
 {% endblock %}
 {% block javascripts %}
<script>
  \$(function(){
  \$('#loginForm').on('submit',function(e) {
          //e.preventDefault();
         // only neccessary if something above is listening to the (default-)event too
         //e.stopPropagation();      
      var erreur
      var numeroBatiment = \$('#numeroBatiment').val();
      var type = \$('#type').val();
     
      var erreur;
      if (numeroBatiment==null  | numeroBatiment=='') {
        \$('#error-2').html('*Ce champ est obligatoire...');
        erreur = true;
      }
      if ((type == \"Veuillez choisir\")){
        \$('#error-3').html('*Veuillez choisir un type...');
        erreur = true;
      }
      if (erreur) {
        e.preventDefault();
        return false;
      }
    });

      \$(\"#numeroBatiment\").keyup(function(){
          \$('#error-2').html('');
      })
      \$(\"#type\").click(function(){
          \$('#error-3').html('');
      })
      
    })   
</script>
{% endblock %}
{% block phpPart %}
  {{ content }}
{% endblock %}", "chambre/AddChambre.html.twig", "C:\\xampp\\htdocs\\ProjetSymfony\\templates\\chambre\\AddChambre.html.twig");
    }
}
