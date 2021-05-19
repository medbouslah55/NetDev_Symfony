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

/* coach/PdfCoach.html.twig */
class __TwigTemplate_39a87422dcf8997edfbf4770ed960e519c98acea0216a3616beb9c8619ae3d38 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coach/PdfCoach.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coach/PdfCoach.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <style type=\"text/css\">
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,600);

        *, *:before, *:after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #105469;
            font-family: 'Open Sans', sans-serif;
        }
        table {
            background: #012B39;
            border-radius: 0.25em;
            border-collapse: collapse;
            margin: 1em;
        }
        th {
            border-bottom: 1px solid #364043;
            color: #E2B842;
            font-size: 0.85em;
            font-weight: 600;
            padding: 0.5em 1em;
            text-align: left;
        }
        td {
            color: #fff;
            font-weight: 400;
            padding: 0.65em 1em;
        }
        .disabled td {
            color: #4F5F64;
        }
        tbody tr {
            transition: background 0.25s ease;
        }
        tbody tr:hover {
            background: #014055;
        }


    </style>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
</head>
<body>
<h1 >Liste des Coachs</h1>
<table>

    <thead>
    <tr>
        <th>Cin</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Sexe</th>
        <th>Datee</th>
    </tr>
    </thead>
    <tbody>

    ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coaches"]) || array_key_exists("coaches", $context) ? $context["coaches"] : (function () { throw new RuntimeError('Variable "coaches" does not exist.', 69, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["coach"]) {
            // line 70
            echo "        <tr>
            <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "cin", [], "any", false, false, false, 71), "html", null, true);
            echo "</td>
            <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "nom", [], "any", false, false, false, 72), "html", null, true);
            echo "</td>
            <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "prenom", [], "any", false, false, false, 73), "html", null, true);
            echo "</td>
            <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "sexe", [], "any", false, false, false, 74), "html", null, true);
            echo "</td>
            <td>";
            // line 75
            ((twig_get_attribute($this->env, $this->source, $context["coach"], "datee", [], "any", false, false, false, 75)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "datee", [], "any", false, false, false, 75), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>

        </tr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coach'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "
    </tbody>
</table>
</body>
</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "coach/PdfCoach.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 80,  136 => 75,  132 => 74,  128 => 73,  124 => 72,  120 => 71,  117 => 70,  113 => 69,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <style type=\"text/css\">
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,600);

        *, *:before, *:after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #105469;
            font-family: 'Open Sans', sans-serif;
        }
        table {
            background: #012B39;
            border-radius: 0.25em;
            border-collapse: collapse;
            margin: 1em;
        }
        th {
            border-bottom: 1px solid #364043;
            color: #E2B842;
            font-size: 0.85em;
            font-weight: 600;
            padding: 0.5em 1em;
            text-align: left;
        }
        td {
            color: #fff;
            font-weight: 400;
            padding: 0.65em 1em;
        }
        .disabled td {
            color: #4F5F64;
        }
        tbody tr {
            transition: background 0.25s ease;
        }
        tbody tr:hover {
            background: #014055;
        }


    </style>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
</head>
<body>
<h1 >Liste des Coachs</h1>
<table>

    <thead>
    <tr>
        <th>Cin</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Sexe</th>
        <th>Datee</th>
    </tr>
    </thead>
    <tbody>

    {% for coach in coaches %}
        <tr>
            <td>{{ coach.cin }}</td>
            <td>{{ coach.nom }}</td>
            <td>{{ coach.prenom }}</td>
            <td>{{ coach.sexe }}</td>
            <td>{{ coach.datee ? coach.datee|date('Y-m-d') : '' }}</td>

        </tr>

    {% endfor %}

    </tbody>
</table>
</body>
</html>

", "coach/PdfCoach.html.twig", "/Applications/MAMP/htdocs/projet_symfony/User_Symfony/templates/coach/PdfCoach.html.twig");
    }
}
