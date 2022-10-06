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

/* chambre/AddEtudiant.html.twig */
class __TwigTemplate_46bc54f0ded73d809af9064e9a330918 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chambre/AddEtudiant.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "chambre/AddEtudiant.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 4
        echo "
<div class=\"container-fluid col-7 float-left m-0\" style=\"height: 100%;\">
<div class=\"card-header col-12 text-center mb-2 card-my\" style=\"font-size: 2vw;\">
    Creer un(e) nouveau(nouvelle) étudiant(e)
  </div>
 <div class=\"champObligatoire col-8 m-auto\" id=\"error-1\" ></div>
    <div class=\"input-group col-10 mb-2\" style=\"height:3vw;\">
      <div class=\"input-group-prepend\">
        <span class=\"input-group-text span-size input-group-my\"> Prenom: </span>
      </div>
      <input id=\"prenom\" type=\"text\" aria-label=\"First name\" name=\"prenom\" class=\"form-control\">
    </div>
<div class=\"champObligatoire col-8 m-auto\" id=\"error-2\" ></div>
  <div class=\"input-group col-10 mb-2\" style=\"height:3vw\">
    <div class=\"input-group-prepend\">
      <span class=\"input-group-text span-size input-group-my\"> Nom: </span>
    </div>
    <input id=\"nom\" type=\"text\" aria-label=\"First name\"  name=\"nom\" class=\"form-control\">
  </div>
<div class=\"champObligatoire col-8 m-auto\" id=\"error-3\" ></div>
  <div class=\"input-group col-10 mb-2\" style=\"height:3vw;\">
    <div class=\"input-group-prepend\">
      <span class=\"input-group-text span-size input-group-my\"> Tel: </span>
    </div>
    <input id=\"tel\" type=\"tel\" aria-label=\"First name\" name=\"tel\" class=\"form-control\">
  </div>
<div class=\"champObligatoire col-8 m-auto\" id=\"error-4\" ></div>
  <div class=\"input-group col-10 mb-2\" style=\"height:3vw;\">
    <div class=\"input-group-prepend\">
      <span class=\"input-group-text span-size input-group-my\"> Email: </span>
    </div>
    <input id=\"email\" type=\"email\" aria-label=\"First name\" name=\"email\" class=\"form-control\">
  </div>
<div class=\"champObligatoire col-8 m-auto\" id=\"error-5\" ></div>
  <div class=\"input-group col-10 mb-2\" style=\"height:3vw;\">
    <div class=\"input-group-prepend\">
      <span class=\"input-group-text span-size input-group-my\"> Date de Naissance: </span>
    </div>
    <input id=\"dateNaiss\" type=\"date\" aria-label=\"First name\" name=\"dateNaiss\" class=\"form-control\">
  </div>
<button class=\"btn btn-secondary m-auto btn-lg btn-block col-6\" style=\"height:3vw;font-size:2vw; width:15vw\" name=\"creerEtudiant\" id=\"creerEtudiant\" type=\"submit\">Valider</button>

</div>
<div class=\"container-fluid col-5 float-right justify-content-center\" style=\"height: 100%;background-color:#227676\">
<div class=\"card-header col-12 bg-white text-center mb-2 card-my\">
   Configurations partielles
  </div>
  <br>
<div class=\"input-group col-10 m-auto\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text span-size\">Bourse</span>
  </div>
  <select class=\"custom-select custom-select-lg span-size\" id=\"bourse\" name=\"bourse\">
  <option selected>Non</option>
  <option value=\"20000\">20 200</option>
  <option value=\"40000\">40 000</option>
</select>
</div>
<br>
<div class=\"input-group col-10 m-auto\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text span-size\">Logement</span>
  </div>
  <select class=\"custom-select custom-select-lg span-size\" id=\"logement\" name=\"logement\">
  <option selected>Veuillez choisir</option>
  <option value=\"Oui\">Oui</option>
  <option value=\"Non\">Non</option>
</select>
</div>
<br>
<div class=\"input-group col-10 m-auto\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text span-size\"> Adresse: </span>
  </div>
  <input id=\"adresse\" type=\"text\" aria-label=\"First name\" name=\"adresse\" class=\"form-control\">
</div>
<br>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 84
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 85
        echo "<script src=\"js/ValidationEtudiant.js\" ></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 88
    public function block_phpPart($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "phpPart"));

        // line 89
        echo " 
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "chambre/AddEtudiant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 89,  161 => 88,  153 => 85,  146 => 84,  61 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block container %}

<div class=\"container-fluid col-7 float-left m-0\" style=\"height: 100%;\">
<div class=\"card-header col-12 text-center mb-2 card-my\" style=\"font-size: 2vw;\">
    Creer un(e) nouveau(nouvelle) étudiant(e)
  </div>
 <div class=\"champObligatoire col-8 m-auto\" id=\"error-1\" ></div>
    <div class=\"input-group col-10 mb-2\" style=\"height:3vw;\">
      <div class=\"input-group-prepend\">
        <span class=\"input-group-text span-size input-group-my\"> Prenom: </span>
      </div>
      <input id=\"prenom\" type=\"text\" aria-label=\"First name\" name=\"prenom\" class=\"form-control\">
    </div>
<div class=\"champObligatoire col-8 m-auto\" id=\"error-2\" ></div>
  <div class=\"input-group col-10 mb-2\" style=\"height:3vw\">
    <div class=\"input-group-prepend\">
      <span class=\"input-group-text span-size input-group-my\"> Nom: </span>
    </div>
    <input id=\"nom\" type=\"text\" aria-label=\"First name\"  name=\"nom\" class=\"form-control\">
  </div>
<div class=\"champObligatoire col-8 m-auto\" id=\"error-3\" ></div>
  <div class=\"input-group col-10 mb-2\" style=\"height:3vw;\">
    <div class=\"input-group-prepend\">
      <span class=\"input-group-text span-size input-group-my\"> Tel: </span>
    </div>
    <input id=\"tel\" type=\"tel\" aria-label=\"First name\" name=\"tel\" class=\"form-control\">
  </div>
<div class=\"champObligatoire col-8 m-auto\" id=\"error-4\" ></div>
  <div class=\"input-group col-10 mb-2\" style=\"height:3vw;\">
    <div class=\"input-group-prepend\">
      <span class=\"input-group-text span-size input-group-my\"> Email: </span>
    </div>
    <input id=\"email\" type=\"email\" aria-label=\"First name\" name=\"email\" class=\"form-control\">
  </div>
<div class=\"champObligatoire col-8 m-auto\" id=\"error-5\" ></div>
  <div class=\"input-group col-10 mb-2\" style=\"height:3vw;\">
    <div class=\"input-group-prepend\">
      <span class=\"input-group-text span-size input-group-my\"> Date de Naissance: </span>
    </div>
    <input id=\"dateNaiss\" type=\"date\" aria-label=\"First name\" name=\"dateNaiss\" class=\"form-control\">
  </div>
<button class=\"btn btn-secondary m-auto btn-lg btn-block col-6\" style=\"height:3vw;font-size:2vw; width:15vw\" name=\"creerEtudiant\" id=\"creerEtudiant\" type=\"submit\">Valider</button>

</div>
<div class=\"container-fluid col-5 float-right justify-content-center\" style=\"height: 100%;background-color:#227676\">
<div class=\"card-header col-12 bg-white text-center mb-2 card-my\">
   Configurations partielles
  </div>
  <br>
<div class=\"input-group col-10 m-auto\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text span-size\">Bourse</span>
  </div>
  <select class=\"custom-select custom-select-lg span-size\" id=\"bourse\" name=\"bourse\">
  <option selected>Non</option>
  <option value=\"20000\">20 200</option>
  <option value=\"40000\">40 000</option>
</select>
</div>
<br>
<div class=\"input-group col-10 m-auto\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text span-size\">Logement</span>
  </div>
  <select class=\"custom-select custom-select-lg span-size\" id=\"logement\" name=\"logement\">
  <option selected>Veuillez choisir</option>
  <option value=\"Oui\">Oui</option>
  <option value=\"Non\">Non</option>
</select>
</div>
<br>
<div class=\"input-group col-10 m-auto\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text span-size\"> Adresse: </span>
  </div>
  <input id=\"adresse\" type=\"text\" aria-label=\"First name\" name=\"adresse\" class=\"form-control\">
</div>
<br>
</div>
{% endblock %}

{% block javascripts %}
<script src=\"js/ValidationEtudiant.js\" ></script>
{% endblock %}

{% block phpPart %}
 
{% endblock %}", "chambre/AddEtudiant.html.twig", "/Users/lebzodev123/projects/symfony/allocationChambreSA/templates/chambre/AddEtudiant.html.twig");
    }
}
