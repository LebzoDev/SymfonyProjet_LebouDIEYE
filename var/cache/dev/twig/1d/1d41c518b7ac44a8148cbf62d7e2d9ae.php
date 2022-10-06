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

/* base.html.twig */
class __TwigTemplate_90ab7e43a2046652fa14b01e941ae8d6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'session' => [$this, 'block_session'],
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'container' => [$this, 'block_container'],
            'phpPart' => [$this, 'block_phpPart'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        $this->displayBlock('session', $context, $blocks);
        // line 4
        echo "<!DOCTYPE html>
<html>
    <head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"dist/css/bootstrap.css\">
    <link rel=\"stylesheet\" href=\"css/style.css\">
        <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    </head>
    <body>
        ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "      
      

<div class=\"general\">
<div class=\"general-title\">
    UNIVERSITY ROOM'S ALLOCATION
</div >
<form method=\"POST\" id=\"loginForm\" >
<div class=\"container\">
<div class=\"row border text-white row-my\" >
    <div class=\"col border border-white col-my\" onclick=\"myFunction('/')\"  id=\"etudiantButton\" name=\"etudiantButton\">
     GESTION ETUDIANT
     </div>
    <div class=\"col border border-white col-my\" onclick=\"myFunction('/chambre')\" id=\"chambreButton\" name=\"chambreButton\">
      GESTION CHAMBRE
    </div>
    <div class=\"col border border-white col-my\" onclick=\"myFunction('/allocation')\">GESTION ALLOCATION</div>
</div>
</div>

<div class=\"container container-treatment\" id=\"conteneur\">
  ";
        // line 38
        $this->displayBlock('container', $context, $blocks);
        // line 41
        echo "</div>
</form>
";
        // line 43
        $this->displayBlock('phpPart', $context, $blocks);
        // line 45
        echo "  
<footer class=\"card-footer text-center font-weight-bold footer-my\" >
    2020 COPYRIGHT @ NMSD LND BINOME G2T3
</footer>
</div>

<script src=\"js/jquery.js\"></script>
<script>
function myFunction(\$chemin) {
  location.replace(\$chemin);
}
</script>
 ";
        // line 57
        $this->displayBlock('javascripts', $context, $blocks);
        // line 61
        echo "  
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_session($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "session"));

        // line 2
        echo " 
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 38
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 39
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 43
    public function block_phpPart($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "phpPart"));

        // line 44
        echo "    
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 58
        echo "<!--script src=\"js/ValidationChambre.js\"  id=\"ValidationChambre\"></script-->
<!--script src=\"js/ListerChambre.js\"></-script-->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  218 => 58,  211 => 57,  203 => 44,  196 => 43,  188 => 39,  181 => 38,  174 => 16,  167 => 15,  155 => 12,  142 => 11,  134 => 2,  127 => 1,  117 => 61,  115 => 57,  101 => 45,  99 => 43,  95 => 41,  93 => 38,  70 => 17,  68 => 15,  64 => 13,  62 => 12,  58 => 11,  49 => 4,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block session %}
 
{% endblock %}
<!DOCTYPE html>
<html>
    <head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"dist/css/bootstrap.css\">
    <link rel=\"stylesheet\" href=\"css/style.css\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        {% block body %}
        {% endblock %}
      
      

<div class=\"general\">
<div class=\"general-title\">
    UNIVERSITY ROOM'S ALLOCATION
</div >
<form method=\"POST\" id=\"loginForm\" >
<div class=\"container\">
<div class=\"row border text-white row-my\" >
    <div class=\"col border border-white col-my\" onclick=\"myFunction('/')\"  id=\"etudiantButton\" name=\"etudiantButton\">
     GESTION ETUDIANT
     </div>
    <div class=\"col border border-white col-my\" onclick=\"myFunction('/chambre')\" id=\"chambreButton\" name=\"chambreButton\">
      GESTION CHAMBRE
    </div>
    <div class=\"col border border-white col-my\" onclick=\"myFunction('/allocation')\">GESTION ALLOCATION</div>
</div>
</div>

<div class=\"container container-treatment\" id=\"conteneur\">
  {% block container %}

    {% endblock %}
</div>
</form>
{% block phpPart %}
    
  {% endblock %}  
<footer class=\"card-footer text-center font-weight-bold footer-my\" >
    2020 COPYRIGHT @ NMSD LND BINOME G2T3
</footer>
</div>

<script src=\"js/jquery.js\"></script>
<script>
function myFunction(\$chemin) {
  location.replace(\$chemin);
}
</script>
 {% block javascripts %}
<!--script src=\"js/ValidationChambre.js\"  id=\"ValidationChambre\"></script-->
<!--script src=\"js/ListerChambre.js\"></-script-->
{% endblock %}
  
</body>
</html>
", "base.html.twig", "/Users/lebzodev123/projects/symfony/allocationChambreSA/templates/base.html.twig");
    }
}
