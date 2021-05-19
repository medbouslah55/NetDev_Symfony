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

/* coach/index.html.twig */
class __TwigTemplate_453dcd1a8ba41cec951468831095a0d562b21f7b837a36d077314a79920b5af0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coach/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coach/index.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "coach/index.html.twig", 1);
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

        echo "Coach index";
        
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
        echo "
<main class=\"content\">
    <div class=\"container-fluid p-0\">

        <h1 class=\"h3 mb-3\">Coachs</h1>

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
                        <h5 class=\"card-title mb-0\">Coachs</h5>
                    </div>
                    <form method=\"post\">
                        <br>
                        <label>Chercher</label>
                        <input class=\"col-10\" type=\"text\" name=\"AfficherClasse\" onkeyup=\"myFunction()\" placeholder=\"Nom (EX:med)\" id=\"myInput\">
                        <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("TrierParNomDESC");
        echo "\"><i class=\"align-middle\" data-feather=\"arrow-down\"></i></a>
                        <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("TrierParNomASC");
        echo "\"><i class=\"align-middle\" data-feather=\"arrow-up\"></i></a>
                        <a class=\"btn btn-success\" href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("PDF");
        echo "\">  PDF </a>
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
                                <th>Detaille</th>
                                <th>Supprimer</th>
                                <th>Modifier</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coaches"]) || array_key_exists("coaches", $context) ? $context["coaches"] : (function () { throw new RuntimeError('Variable "coaches" does not exist.', 54, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["coach"]) {
            // line 55
            echo "                                <tr>
                                    <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "cin", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                                    <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "nom", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                                    <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "prenom", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                                    <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "sexe", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                                    <td>";
            // line 60
            ((twig_get_attribute($this->env, $this->source, $context["coach"], "datee", [], "any", false, false, false, 60)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "datee", [], "any", false, false, false, 60), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                                    <td>
                                        <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coach_show", ["cin" => twig_get_attribute($this->env, $this->source, $context["coach"], "cin", [], "any", false, false, false, 62)]), "html", null, true);
            echo "\"><i class=\"align-middle\" data-feather=\"align-center\"></i></a>

                                    </td>
                                    <td>
                                        ";
            // line 66
            echo twig_include($this->env, $context, "coach/_delete_form.html.twig");
            echo "
                                    </td>
                                    <td><a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coach_edit", ["cin" => twig_get_attribute($this->env, $this->source, $context["coach"], "cin", [], "any", false, false, false, 68)]), "html", null, true);
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
            // line 71
            echo "                                <tr>
                                    <td colspan=\"6\">no records found</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coach'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Cin</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Date de naissance</th>
                                <th>Sexe</th>
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

    <main class=\"content\">
        <div class=\"container-fluid p-0\">

            <h1 class=\"h3 mb-3\">Coach</h1>

            <div class=\"row\">
                <div class=\"col-xl-4\">
                    ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coaches"]) || array_key_exists("coaches", $context) ? $context["coaches"] : (function () { throw new RuntimeError('Variable "coaches" does not exist.', 104, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["coach"]) {
            // line 105
            echo "                    <div class=\"card\">

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
                            <table class=\"table table-sm my-2\" >
                                <tbody>

                                <tr>
                                    <th>Cin</th>
                                    <td>";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "cin", [], "any", false, false, false, 122), "html", null, true);
            echo "</td>
                                </tr>
                                <tr>
                                    <th>Nom</th>
                                    <td>";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "nom", [], "any", false, false, false, 126), "html", null, true);
            echo "</td>
                                </tr>
                                <tr>
                                    <th>Prenom</th>
                                    <td>";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "prenom", [], "any", false, false, false, 130), "html", null, true);
            echo "</td>
                                </tr>
                                <tr>
                                    <th>Sexe</th>
                                    <td>";
            // line 134
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "sexe", [], "any", false, false, false, 134), "html", null, true);
            echo "</td>
                                </tr>
                                <tr>
                                    <th>Datee</th>
                                    <td>";
            // line 138
            ((twig_get_attribute($this->env, $this->source, $context["coach"], "datee", [], "any", false, false, false, 138)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "datee", [], "any", false, false, false, 138), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                                </tr>
                                <tr>
                                    <th>afficher</th>
                                    <td><a href=\"";
            // line 142
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coach_show", ["cin" => twig_get_attribute($this->env, $this->source, $context["coach"], "cin", [], "any", false, false, false, 142)]), "html", null, true);
            echo "\"><i class=\"align-middle\" data-feather=\"align-center\"></i></a></td>

                                </tr>
                                <tr>
                                    <th>Supprimer</th>
                                    <td>";
            // line 147
            echo twig_include($this->env, $context, "coach/_delete_form.html.twig");
            echo "</td>
                                </tr>
                                <tr>
                                    <th>Modifier</th>
                                    <td><a href=\"";
            // line 151
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coach_edit", ["cin" => twig_get_attribute($this->env, $this->source, $context["coach"], "cin", [], "any", false, false, false, 151)]), "html", null, true);
            echo "\"><i class=\"align-middle\" data-feather=\"edit\"></i></a></td>
                                </tr>

                                </tbody>
                            </table>

                            <hr />
                        </div>
                    </div>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coach'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "                </div>
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
        return "coach/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  367 => 161,  343 => 151,  336 => 147,  328 => 142,  321 => 138,  314 => 134,  307 => 130,  300 => 126,  293 => 122,  274 => 105,  257 => 104,  226 => 75,  217 => 71,  201 => 68,  196 => 66,  189 => 62,  184 => 60,  180 => 59,  176 => 58,  172 => 57,  168 => 56,  165 => 55,  147 => 54,  127 => 37,  123 => 36,  119 => 35,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}Coach index{% endblock %}

{% block body %}

<main class=\"content\">
    <div class=\"container-fluid p-0\">

        <h1 class=\"h3 mb-3\">Coachs</h1>

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
                        <h5 class=\"card-title mb-0\">Coachs</h5>
                    </div>
                    <form method=\"post\">
                        <br>
                        <label>Chercher</label>
                        <input class=\"col-10\" type=\"text\" name=\"AfficherClasse\" onkeyup=\"myFunction()\" placeholder=\"Nom (EX:med)\" id=\"myInput\">
                        <a href=\"{{path('TrierParNomDESC') }}\"><i class=\"align-middle\" data-feather=\"arrow-down\"></i></a>
                        <a href=\"{{path('TrierParNomASC') }}\"><i class=\"align-middle\" data-feather=\"arrow-up\"></i></a>
                        <a class=\"btn btn-success\" href=\"{{path('PDF') }}\">  PDF </a>
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
                                <th>Detaille</th>
                                <th>Supprimer</th>
                                <th>Modifier</th>
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
                                    <td>
                                        <a href=\"{{ path('coach_show', {'cin': coach.cin}) }}\"><i class=\"align-middle\" data-feather=\"align-center\"></i></a>

                                    </td>
                                    <td>
                                        {{ include('coach/_delete_form.html.twig') }}
                                    </td>
                                    <td><a href=\"{{ path('coach_edit', {'cin': coach.cin}) }}\"><i class=\"align-middle\" data-feather=\"edit\"></i></a></td>
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
                                <th>Date de naissance</th>
                                <th>Sexe</th>
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

    <main class=\"content\">
        <div class=\"container-fluid p-0\">

            <h1 class=\"h3 mb-3\">Coach</h1>

            <div class=\"row\">
                <div class=\"col-xl-4\">
                    {% for coach in coaches %}
                    <div class=\"card\">

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
                            <table class=\"table table-sm my-2\" >
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
                                <tr>
                                    <th>afficher</th>
                                    <td><a href=\"{{ path('coach_show', {'cin': coach.cin}) }}\"><i class=\"align-middle\" data-feather=\"align-center\"></i></a></td>

                                </tr>
                                <tr>
                                    <th>Supprimer</th>
                                    <td>{{ include('coach/_delete_form.html.twig') }}</td>
                                </tr>
                                <tr>
                                    <th>Modifier</th>
                                    <td><a href=\"{{ path('coach_edit', {'cin': coach.cin}) }}\"><i class=\"align-middle\" data-feather=\"edit\"></i></a></td>
                                </tr>

                                </tbody>
                            </table>

                            <hr />
                        </div>
                    </div>
                    {% endfor %}
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
", "coach/index.html.twig", "/Applications/MAMP/htdocs/projet_symfony/User_Symfony/templates/coach/index.html.twig");
    }
}
