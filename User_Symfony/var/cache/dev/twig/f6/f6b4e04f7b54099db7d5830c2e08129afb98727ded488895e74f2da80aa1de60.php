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

/* coach/show.html.twig */
class __TwigTemplate_d0c015fadbf982511fb906983eee21a08a7af77dfc5bba08c6641750b37431b1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coach/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coach/show.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "coach/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Coach";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<main class=\"content\">
    <div class=\"container-fluid p-0\">

        <h1 class=\"h3 mb-3\">Coach</h1>

        <div class=\"row\">
            <div class=\"col-xl-4\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h5 class=\"card-title mb-0\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 15, $this->source); })()), "nom", [], "any", false, false, false, 15), "html", null, true);
        echo "</h5>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row no-gutters\">
                            <div class=\"col-sm-3 col-xl-12 col-xxl-3 text-center\">
                                <img src=\"img/avatars/avatar-3.jpg\" width=\"64\" height=\"64\" class=\"rounded-circle mt-2\" alt=\"Angelica Ramos\">
                            </div>
                            <div class=\"col-sm-9 col-xl-12 col-xxl-9\">
                                <strong>About me</strong>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <table class=\"table table-sm my-2\">
                            <tbody>
                            <tr>
                                <th>Cin</th>
                                <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 31, $this->source); })()), "cin", [], "any", false, false, false, 31), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Nom</th>
                                <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 35, $this->source); })()), "nom", [], "any", false, false, false, 35), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Prenom</th>
                                <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 39, $this->source); })()), "prenom", [], "any", false, false, false, 39), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Sexe</th>
                                <td>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 43, $this->source); })()), "sexe", [], "any", false, false, false, 43), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Datee</th>
                                <td>";
        // line 47
        ((twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 47, $this->source); })()), "datee", [], "any", false, false, false, 47)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 47, $this->source); })()), "datee", [], "any", false, false, false, 47), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
                            </tr>
                            </tbody>
                        </table>

                        <hr />
                        <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coach_index");
        echo "\" class=\"btn btn-secondary\">back to list</a>
                        <span>
                        <a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coach_edit", ["cin" => twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 55, $this->source); })()), "cin", [], "any", false, false, false, 55)]), "html", null, true);
        echo "\" class=\"btn btn-danger\">edit</a>
                        ";
        // line 56
        echo twig_include($this->env, $context, "coach/_delete_form.html.twig");
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>





";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "coach/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 56,  160 => 55,  155 => 53,  146 => 47,  139 => 43,  132 => 39,  125 => 35,  118 => 31,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}Coach{% endblock %}

{% block body %}
<main class=\"content\">
    <div class=\"container-fluid p-0\">

        <h1 class=\"h3 mb-3\">Coach</h1>

        <div class=\"row\">
            <div class=\"col-xl-4\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h5 class=\"card-title mb-0\">{{ coach.nom }}</h5>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row no-gutters\">
                            <div class=\"col-sm-3 col-xl-12 col-xxl-3 text-center\">
                                <img src=\"img/avatars/avatar-3.jpg\" width=\"64\" height=\"64\" class=\"rounded-circle mt-2\" alt=\"Angelica Ramos\">
                            </div>
                            <div class=\"col-sm-9 col-xl-12 col-xxl-9\">
                                <strong>About me</strong>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <table class=\"table table-sm my-2\">
                            <tbody>
                            <tr>
                                <th>Cin</th>
                                <td>{{ coach.cin }}</td>
                            </tr>
                            <tr>
                                <th>Nom</th>
                                <td>{{ coach.nom }}</td>
                            </tr>
                            <tr>
                                <th>Prenom</th>
                                <td>{{ coach.prenom }}</td>
                            </tr>
                            <tr>
                                <th>Sexe</th>
                                <td>{{ coach.sexe }}</td>
                            </tr>
                            <tr>
                                <th>Datee</th>
                                <td>{{ coach.datee ? coach.datee|date('Y-m-d') : '' }}</td>
                            </tr>
                            </tbody>
                        </table>

                        <hr />
                        <a href=\"{{ path('coach_index') }}\" class=\"btn btn-secondary\">back to list</a>
                        <span>
                        <a href=\"{{ path('coach_edit', {'cin': coach.cin}) }}\" class=\"btn btn-danger\">edit</a>
                        {{ include('coach/_delete_form.html.twig') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>





{% endblock %}
", "coach/show.html.twig", "/Applications/MAMP/htdocs/projet_symfony/User_Symfony/templates/coach/show.html.twig");
    }
}
