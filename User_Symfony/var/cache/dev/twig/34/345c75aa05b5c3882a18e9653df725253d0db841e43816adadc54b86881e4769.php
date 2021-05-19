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

/* admin/index.html.twig */
class __TwigTemplate_d0f667a59b24e3f83146f193ecfa542bcf3442e75edd85ec3732842ab305142a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/index.html.twig", 1);
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

        echo "Admin index";
        
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
                <div class=\"col-12\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <div class=\"card-actions float-right\">
                                <div class=\"dropdown show\">
                                    <a href=\"#\" data-toggle=\"dropdown\" data-display=\"static\">
                                        <i class=\"align-middle\" data-feather=\"more-horizontal\"></i>
                                    </a>

                                    <div class=\"dropdown-menu dropdown-menu-right\">
                                        <a class=\"dropdown-item\" href=\"#\">Action</a>
                                        <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                        <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <h5 class=\"card-title mb-0\">Admin</h5>
                        </div>
                        <form method=\"post\">
                            <br>
                            <label>Chercher</label>
                            <input class=\"col-12\" type=\"text\" name=\"AfficherClasse\" onkeyup=\"myFunction()\" placeholder=\"Nom (EX:med)\" id=\"myInput\">

                        </form>
                        <div class=\"card-body\" id=\"mytable\">
                            <table id=\"datatables-clients\" class=\"table table-striped\" style=\"width:100%\">
                                <thead>
                                <tr>
                                    <th>Cin</th>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Sexe</th>
                                    <th>Datee</th>
                                    <th>Email</th>
                                    <th>Telephone</th>
                                    <th>Detaille</th>
                                    <th>Supprimer</th>
                                    <th>Modifier</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["admins"]) || array_key_exists("admins", $context) ? $context["admins"] : (function () { throw new RuntimeError('Variable "admins" does not exist.', 53, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
            // line 54
            echo "                                    <tr>
                                        <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin"], "cin", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                                        <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin"], "nom", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                                        <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin"], "prenom", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                                        <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin"], "sexe", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                                        <td>";
            // line 59
            ((twig_get_attribute($this->env, $this->source, $context["admin"], "datee", [], "any", false, false, false, 59)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin"], "datee", [], "any", false, false, false, 59), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                                        <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin"], "email", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                                        <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin"], "telephone", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                                        <td>
                                            <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_show", ["cin" => twig_get_attribute($this->env, $this->source, $context["admin"], "cin", [], "any", false, false, false, 63)]), "html", null, true);
            echo "\"><i class=\"align-middle\" data-feather=\"align-center\"></i></a>

                                        </td>
                                        <td>
                                            ";
            // line 67
            echo twig_include($this->env, $context, "admin/_delete_form.html.twig");
            echo "
                                        </td>
                                        <td><a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_edit", ["cin" => twig_get_attribute($this->env, $this->source, $context["admin"], "cin", [], "any", false, false, false, 69)]), "html", null, true);
            echo "\"><i class=\"align-middle\" data-feather=\"edit\"></i></a></td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 72
            echo "                                    <tr>
                                        <td colspan=\"6\">no records found</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Cin</th>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Sexe</th>
                                    <th>Datee</th>
                                    <th>Email</th>
                                    <th>Telephone</th>
                                    <th>Detaille</th>
                                    <th>Supprimer</th>
                                    <th>Modifier</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        function myFunction() {
            var input, filter, table, tr, td, i,j, txtValue;
            input = document.getElementById(\"myInput\");
            filter = input.value.toUpperCase();
            table = document.getElementById(\"mytable\");
            tr = table.getElementsByTagName(\"tr\");
//   alert(td.length);
            for (i = 0; i < tr.length; i++) {
                td= tr[i].getElementsByTagName(\"td\")[1];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = \"\";
                    } else {
                        tr[i].style.display = \"none\";
                    }
                }
            }
        }


    </script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 76,  215 => 72,  199 => 69,  194 => 67,  187 => 63,  182 => 61,  178 => 60,  174 => 59,  170 => 58,  166 => 57,  162 => 56,  158 => 55,  155 => 54,  137 => 53,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}Admin index{% endblock %}

{% block body %}
    <main class=\"content\">
        <div class=\"container-fluid p-0\">

            <h1 class=\"h3 mb-3\">Admin</h1>

            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <div class=\"card-actions float-right\">
                                <div class=\"dropdown show\">
                                    <a href=\"#\" data-toggle=\"dropdown\" data-display=\"static\">
                                        <i class=\"align-middle\" data-feather=\"more-horizontal\"></i>
                                    </a>

                                    <div class=\"dropdown-menu dropdown-menu-right\">
                                        <a class=\"dropdown-item\" href=\"#\">Action</a>
                                        <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                        <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <h5 class=\"card-title mb-0\">Admin</h5>
                        </div>
                        <form method=\"post\">
                            <br>
                            <label>Chercher</label>
                            <input class=\"col-12\" type=\"text\" name=\"AfficherClasse\" onkeyup=\"myFunction()\" placeholder=\"Nom (EX:med)\" id=\"myInput\">

                        </form>
                        <div class=\"card-body\" id=\"mytable\">
                            <table id=\"datatables-clients\" class=\"table table-striped\" style=\"width:100%\">
                                <thead>
                                <tr>
                                    <th>Cin</th>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Sexe</th>
                                    <th>Datee</th>
                                    <th>Email</th>
                                    <th>Telephone</th>
                                    <th>Detaille</th>
                                    <th>Supprimer</th>
                                    <th>Modifier</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for admin in admins %}
                                    <tr>
                                        <td>{{ admin.cin }}</td>
                                        <td>{{ admin.nom }}</td>
                                        <td>{{ admin.prenom }}</td>
                                        <td>{{ admin.sexe }}</td>
                                        <td>{{ admin.datee ? admin.datee|date('Y-m-d') : '' }}</td>
                                        <td>{{ admin.email }}</td>
                                        <td>{{ admin.telephone }}</td>
                                        <td>
                                            <a href=\"{{ path('admin_show', {'cin': admin.cin}) }}\"><i class=\"align-middle\" data-feather=\"align-center\"></i></a>

                                        </td>
                                        <td>
                                            {{ include('admin/_delete_form.html.twig') }}
                                        </td>
                                        <td><a href=\"{{ path('admin_edit', {'cin': admin.cin}) }}\"><i class=\"align-middle\" data-feather=\"edit\"></i></a></td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"6\">no records found</td>
                                    </tr>
                                {% endfor %}

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Cin</th>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Sexe</th>
                                    <th>Datee</th>
                                    <th>Email</th>
                                    <th>Telephone</th>
                                    <th>Detaille</th>
                                    <th>Supprimer</th>
                                    <th>Modifier</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        function myFunction() {
            var input, filter, table, tr, td, i,j, txtValue;
            input = document.getElementById(\"myInput\");
            filter = input.value.toUpperCase();
            table = document.getElementById(\"mytable\");
            tr = table.getElementsByTagName(\"tr\");
//   alert(td.length);
            for (i = 0; i < tr.length; i++) {
                td= tr[i].getElementsByTagName(\"td\")[1];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = \"\";
                    } else {
                        tr[i].style.display = \"none\";
                    }
                }
            }
        }


    </script>


{% endblock %}
", "admin/index.html.twig", "/Applications/MAMP/htdocs/projet_symfony/User_Symfony/templates/admin/index.html.twig");
    }
}
