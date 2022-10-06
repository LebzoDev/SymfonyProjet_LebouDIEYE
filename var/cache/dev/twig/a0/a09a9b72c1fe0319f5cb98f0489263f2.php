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

/* etudiant/ListeEtudiant.html.twig */
class __TwigTemplate_fa9b1e0e226682063fa88ecb2cf86348 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'session' => [$this, 'block_session'],
            'container' => [$this, 'block_container'],
            'phpPart' => [$this, 'block_phpPart'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/ListeEtudiant.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "etudiant/ListeEtudiant.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_session($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "session"));

        // line 4
        echo "  
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 8
        echo "  <div class=\"container-fluid col-8 float-left m-0\" style=\"height: 100%;overflow: auto;\">
    <div class=\"card-header col-12 text-center mb-2 card-my\" style=\"font-size: 2vw;\">
      Liste des chambres
    </div>
    <div class=\"container\">
        <div class=\"row col-12 float-left\" style=\"font-size:1.2vw;font-weight:bold;\">
            <div class=\"col border\">Matricule</div>
            <div class=\"col border\">Prenom</div>
            <div class=\"col border\">Nom</div>
             <div class=\"col border\">Tel</div>
            <div class=\"col border\">Mail</div>
            <div class=\"col border\">DateNaiss</div>
        </div>

        <div id=\"tab\">
        
        </div>
    </div>

<div id=\"div_pagination\">
    <input type=\"hidden\" id=\"txt_rowid\" value=\"0\">
    <input type=\"hidden\" id=\"txt_allcount\" value=\"0\">
</div>
</div>
<div class=\"container-fluid col-4 float-right justify-content-center\" style=\"height: 100%;background-color:#227676\">
<div class=\"card-header col-12 bg-white text-center mb-2 card-my\">
  Inscrire un etudiant
  </div>
  <button type=\"button\" id=\"ajouterChambre\" class=\"btn btn-success mt-4\" style=\"font-size: 1.3vw;width:95%\"  onclick=\"myFunction('/AddEtudiant')\" >Appuyer pour Inscrire</button>
 <hr style=\"height: 1vw;background-color:white;\">
 <div class=\"card-header col-12 bg-white text-center mb-2 card-my\">
  Pagination
  </div>
  <div class=\"btn-group btn-group-toggle mt-4\" data-toggle=\"buttons\">
  <label class=\"btn btn-light\" style=\"font-size: 1.3vw\">
    <input type=\"radio\" name=\"precedent\" value=\"Previous\" id=\"but_prev\" id=\"option1\"  autocomplete=\"off\" checked> Precedent
  </label>
  <label class=\"btn btn-secondary\" style=\"font-size: 1.3vw\">
    <input  type=\"radio\" name=\"suivant\" value=\"Next\" id=\"but_next\" id=\"option3\" autocomplete=\"off\"> Suivant
  </label>
</div>

</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 54
    public function block_phpPart($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "phpPart"));

        // line 55
        echo " 
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "etudiant/ListeEtudiant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 59,  143 => 58,  135 => 55,  128 => 54,  77 => 8,  70 => 7,  62 => 4,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% extends \"base.html.twig\" %} 

{% block session %}
  
{% endblock %}

{% block container %}
  <div class=\"container-fluid col-8 float-left m-0\" style=\"height: 100%;overflow: auto;\">
    <div class=\"card-header col-12 text-center mb-2 card-my\" style=\"font-size: 2vw;\">
      Liste des chambres
    </div>
    <div class=\"container\">
        <div class=\"row col-12 float-left\" style=\"font-size:1.2vw;font-weight:bold;\">
            <div class=\"col border\">Matricule</div>
            <div class=\"col border\">Prenom</div>
            <div class=\"col border\">Nom</div>
             <div class=\"col border\">Tel</div>
            <div class=\"col border\">Mail</div>
            <div class=\"col border\">DateNaiss</div>
        </div>

        <div id=\"tab\">
        
        </div>
    </div>

<div id=\"div_pagination\">
    <input type=\"hidden\" id=\"txt_rowid\" value=\"0\">
    <input type=\"hidden\" id=\"txt_allcount\" value=\"0\">
</div>
</div>
<div class=\"container-fluid col-4 float-right justify-content-center\" style=\"height: 100%;background-color:#227676\">
<div class=\"card-header col-12 bg-white text-center mb-2 card-my\">
  Inscrire un etudiant
  </div>
  <button type=\"button\" id=\"ajouterChambre\" class=\"btn btn-success mt-4\" style=\"font-size: 1.3vw;width:95%\"  onclick=\"myFunction('/AddEtudiant')\" >Appuyer pour Inscrire</button>
 <hr style=\"height: 1vw;background-color:white;\">
 <div class=\"card-header col-12 bg-white text-center mb-2 card-my\">
  Pagination
  </div>
  <div class=\"btn-group btn-group-toggle mt-4\" data-toggle=\"buttons\">
  <label class=\"btn btn-light\" style=\"font-size: 1.3vw\">
    <input type=\"radio\" name=\"precedent\" value=\"Previous\" id=\"but_prev\" id=\"option1\"  autocomplete=\"off\" checked> Precedent
  </label>
  <label class=\"btn btn-secondary\" style=\"font-size: 1.3vw\">
    <input  type=\"radio\" name=\"suivant\" value=\"Next\" id=\"but_next\" id=\"option3\" autocomplete=\"off\"> Suivant
  </label>
</div>

</div>

{% endblock %}

{% block phpPart %}
 
{% endblock %}

{% block javascripts %}

{% endblock %}", "etudiant/ListeEtudiant.html.twig", "/Users/lebzodev123/projects/symfony/allocationChambreSA/templates/etudiant/ListeEtudiant.html.twig");
    }
}
