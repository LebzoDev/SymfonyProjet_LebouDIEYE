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

/* chambre/ListeChambre.html.twig */
class __TwigTemplate_7a10fac780ede1dd218b51494d89ef7aa5b5f1be3c68eee832307dd32b28c081 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chambre/ListeChambre.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "chambre/ListeChambre.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_session($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "session"));

        // line 4
        echo "  ";
        echo twig_escape_filter($this->env, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 8
        echo "  <div class=\"container-fluid col-8 float-left m-0\" style=\"height: 100%;overflow: auto;\">
    <div class=\"card-header col-12 text-center mb-2 card-my\" style=\"font-size: 2vw;\">
      Liste des chambres
    </div>
    <div class=\"container\">
        <div class=\"row col-10 float-left\" style=\"font-size:1.2vw;font-weight:bold;\">
            <div class=\"col border\">Numero</div>
            <div class=\"col border\">Numero Batiment</div>
            <div class=\"col border\">Type</div>
        </div>

        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resultats"]) || array_key_exists("resultats", $context) ? $context["resultats"] : (function () { throw new RuntimeError('Variable "resultats" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["resultat"]) {
            // line 20
            echo "        <div class=\"row col-10 float-left\" style=\"font-size:1.2vw;\">
            <div class=\"col border\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resultat"], "numeroChambre", [], "any", false, false, false, 21), "html", null, true);
            echo "</div>
            <div class=\"col border\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resultat"], "numeroBatiment", [], "any", false, false, false, 22), "html", null, true);
            echo "</div>
            <div class=\"col border\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resultat"], "typeChambre", [], "any", false, false, false, 23), "html", null, true);
            echo "</div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resultat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
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
  Ajaouter une chambre
  </div>
  <button type=\"button\" id=\"ajouterChambre\" class=\"btn btn-success mt-4\" style=\"font-size: 1.3vw;width:95%\"  onclick=\"myFunction('/CreateChambre')\" >Apputer pour ajouter</button>
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

<div class=\"navigation\">
            ";
        // line 56
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["resultats"]) || array_key_exists("resultats", $context) ? $context["resultats"] : (function () { throw new RuntimeError('Variable "resultats" does not exist.', 56, $this->source); })()));
        echo "
</div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 62
    public function block_phpPart($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "phpPart"));

        // line 63
        echo "  ";
        echo twig_escape_filter($this->env, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 63, $this->source); })()), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 67
        echo "<script src=\"js/ListerChambre.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "chambre/ListeChambre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 67,  177 => 66,  167 => 63,  160 => 62,  148 => 56,  116 => 26,  107 => 23,  103 => 22,  99 => 21,  96 => 20,  92 => 19,  79 => 8,  72 => 7,  62 => 4,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block session %}
  {{ session }}
{% endblock %}

{% block container %}
  <div class=\"container-fluid col-8 float-left m-0\" style=\"height: 100%;overflow: auto;\">
    <div class=\"card-header col-12 text-center mb-2 card-my\" style=\"font-size: 2vw;\">
      Liste des chambres
    </div>
    <div class=\"container\">
        <div class=\"row col-10 float-left\" style=\"font-size:1.2vw;font-weight:bold;\">
            <div class=\"col border\">Numero</div>
            <div class=\"col border\">Numero Batiment</div>
            <div class=\"col border\">Type</div>
        </div>

        {% for resultat in resultats %}
        <div class=\"row col-10 float-left\" style=\"font-size:1.2vw;\">
            <div class=\"col border\">{{ resultat.numeroChambre }}</div>
            <div class=\"col border\">{{ resultat.numeroBatiment }}</div>
            <div class=\"col border\">{{ resultat.typeChambre }}</div>
        </div>
        {% endfor %}

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
  Ajaouter une chambre
  </div>
  <button type=\"button\" id=\"ajouterChambre\" class=\"btn btn-success mt-4\" style=\"font-size: 1.3vw;width:95%\"  onclick=\"myFunction('/CreateChambre')\" >Apputer pour ajouter</button>
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

<div class=\"navigation\">
            {{ knp_pagination_render(resultats) }}
</div>
</div>

{% endblock %}

{% block phpPart %}
  {{ content }}
{% endblock %}

{% block javascripts %}
<script src=\"js/ListerChambre.js\"></script>
{% endblock %}", "chambre/ListeChambre.html.twig", "C:\\xampp\\htdocs\\ProjetSymfony\\templates\\chambre\\ListeChambre.html.twig");
    }
}
