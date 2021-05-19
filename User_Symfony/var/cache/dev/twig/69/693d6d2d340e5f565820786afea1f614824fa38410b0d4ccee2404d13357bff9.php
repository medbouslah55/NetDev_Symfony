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

/* admin/show.html.twig */
class __TwigTemplate_d178486c1fdbc44ac672fc1a2a9e9fb7735eff5dc632df25ddf1300e76f9f3be extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/show.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/show.html.twig", 1);
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

        echo "Admin";
        
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
        echo "    <main class=\"content\">
        <div class=\"container-fluid p-0\">

            <h1 class=\"h3 mb-3\">Admin</h1>

            <div class=\"row\">
                <div class=\"col-xl-4\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h5 class=\"card-title mb-0\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 15, $this->source); })()), "nom", [], "any", false, false, false, 15), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 31, $this->source); })()), "cin", [], "any", false, false, false, 31), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Nom</th>
                                    <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 35, $this->source); })()), "nom", [], "any", false, false, false, 35), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Prenom</th>
                                    <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 39, $this->source); })()), "prenom", [], "any", false, false, false, 39), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Sexe</th>
                                    <td>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 43, $this->source); })()), "sexe", [], "any", false, false, false, 43), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Datee</th>
                                    <td>";
        // line 47
        ((twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 47, $this->source); })()), "datee", [], "any", false, false, false, 47)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 47, $this->source); })()), "datee", [], "any", false, false, false, 47), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 51, $this->source); })()), "email", [], "any", false, false, false, 51), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Password</th>
                                    <td>";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 55, $this->source); })()), "password", [], "any", false, false, false, 55), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Telephone</th>
                                    <td>";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 59, $this->source); })()), "telephone", [], "any", false, false, false, 59), "html", null, true);
        echo "</td>
                                </tr>
                                </tbody>
                            </table>

                            <hr />
                            <a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
        echo "\" class=\"btn btn-secondary\">back to list</a>
                            <span>
                        <a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_edit", ["cin" => twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 67, $this->source); })()), "cin", [], "any", false, false, false, 67)]), "html", null, true);
        echo "\" class=\"btn btn-danger\">edit</a>
                        ";
        // line 68
        echo twig_include($this->env, $context, "admin/_delete_form.html.twig");
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>




    <table class=\"table\">

    </table>

    <a href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_edit", ["cin" => twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 85, $this->source); })()), "cin", [], "any", false, false, false, 85)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 87
        echo twig_include($this->env, $context, "admin/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 87,  208 => 85,  203 => 83,  185 => 68,  181 => 67,  176 => 65,  167 => 59,  160 => 55,  153 => 51,  146 => 47,  139 => 43,  132 => 39,  125 => 35,  118 => 31,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}Admin{% endblock %}

{% block body %}
    <main class=\"content\">
        <div class=\"container-fluid p-0\">

            <h1 class=\"h3 mb-3\">Admin</h1>

            <div class=\"row\">
                <div class=\"col-xl-4\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h5 class=\"card-title mb-0\">{{ admin.nom }}</h5>
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
                                    <td>{{ admin.cin }}</td>
                                </tr>
                                <tr>
                                    <th>Nom</th>
                                    <td>{{ admin.nom }}</td>
                                </tr>
                                <tr>
                                    <th>Prenom</th>
                                    <td>{{ admin.prenom }}</td>
                                </tr>
                                <tr>
                                    <th>Sexe</th>
                                    <td>{{ admin.sexe }}</td>
                                </tr>
                                <tr>
                                    <th>Datee</th>
                                    <td>{{ admin.datee ? admin.datee|date('Y-m-d') : '' }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ admin.email }}</td>
                                </tr>
                                <tr>
                                    <th>Password</th>
                                    <td>{{ admin.password }}</td>
                                </tr>
                                <tr>
                                    <th>Telephone</th>
                                    <td>{{ admin.telephone }}</td>
                                </tr>
                                </tbody>
                            </table>

                            <hr />
                            <a href=\"{{ path('admin_index') }}\" class=\"btn btn-secondary\">back to list</a>
                            <span>
                        <a href=\"{{ path('admin_edit', {'cin': admin.cin}) }}\" class=\"btn btn-danger\">edit</a>
                        {{ include('admin/_delete_form.html.twig') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>




    <table class=\"table\">

    </table>

    <a href=\"{{ path('admin_index') }}\">back to list</a>

    <a href=\"{{ path('admin_edit', {'cin': admin.cin}) }}\">edit</a>

    {{ include('admin/_delete_form.html.twig') }}
{% endblock %}
", "admin/show.html.twig", "/Applications/MAMP/htdocs/projet_symfony/User_Symfony/templates/admin/show.html.twig");
    }
}
