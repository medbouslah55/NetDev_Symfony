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

/* membre/index.html.twig */
class __TwigTemplate_08ea2bd22d5c1b304c2938c9c53f2222af3cb3c00729fa55a3b68ab19eac75b6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "membre/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "membre/index.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "membre/index.html.twig", 1);
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

        echo "Membre index";
        
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

            <h1 class=\"h3 mb-3\">Membres</h1>

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
                            <h5 class=\"card-title mb-0\">Membres</h5>
                        </div>
                        <script type=\"text/javascript\">
                            function imprimer_page(){
                                window.print();
                            }
                        </script>
                        <form>
                            <input id=\"impression\" class=\"js-programmatic-set-val btn btn-outline-primary mr-1 mb-1s\" name=\"impression\" type=\"button\" onclick=\"imprimer_page()\" value=\"Print this page\" />
                        </form>
                        <div class=\"container d-flex align-items-center mt-5\">
                            <input class=\"form-control\" type=\"search\" id=\"search\" placeholder=\"Search by Nom\">
                            <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\"><i class=\"fa fa-sort\"></i></a>
                        </div>

                        <div class=\"card-body\">
                            <table id=\"datatables-clients\" class=\"table table-striped\" style=\"width:100%\">
                                <thead>
                                <tr>
                                    <th>Cin</th>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Sexe</th>
                                    <th>Datee</th>
                                    <th>Taille</th>
                                    <th>Poids</th>
                                    <th>Email</th>

                                    <th>Telephone</th>

                                    <th>Supprimer</th>
                                </tr>
                                </thead>
                                <tbody id=\"all\">
                                ";
        // line 62
        $this->loadTemplate("membre/search.html.twig", "membre/index.html.twig", 62)->display($context);
        // line 63
        echo "                                <div class=\"nk-pagination nk-pagination-center\">
                                    ";
        // line 64
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["membres"]) || array_key_exists("membres", $context) ? $context["membres"] : (function () { throw new RuntimeError('Variable "membres" does not exist.', 64, $this->source); })()));
        echo "

                                </div>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Cin</th>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Sexe</th>
                                    <th>Datee</th>
                                    <th>Taille</th>
                                    <th>Poids</th>
                                    <th>Email</th>
                                    <th>Telephone</th>
                                    <th>Supprimer</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <script>
        \$( document ).ready(function() {
            var currentRequest = null;
            \$(\"#search\").keyup(function(e){
                var value = \$(this).val();
                if(currentRequest != null) {
                    currentRequest.abort();
                }
                currentRequest = \$.ajax({
                    url : \"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "request", [], "any", false, false, false, 101), "get", [0 => "id"], "method", false, false, false, 101)]), "html", null, true);
        echo "\",
                    type : 'GET',
                    data: {
                        'searchValue' : value
                    },
                    success : function(retour)
                    {
                        \$('#all').html(retour);
                    },
                });
                return false;
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "membre/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 101,  154 => 64,  151 => 63,  149 => 62,  124 => 40,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}Membre index{% endblock %}

{% block body %}
    <main class=\"content\">
        <div class=\"container-fluid p-0\">

            <h1 class=\"h3 mb-3\">Membres</h1>

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
                            <h5 class=\"card-title mb-0\">Membres</h5>
                        </div>
                        <script type=\"text/javascript\">
                            function imprimer_page(){
                                window.print();
                            }
                        </script>
                        <form>
                            <input id=\"impression\" class=\"js-programmatic-set-val btn btn-outline-primary mr-1 mb-1s\" name=\"impression\" type=\"button\" onclick=\"imprimer_page()\" value=\"Print this page\" />
                        </form>
                        <div class=\"container d-flex align-items-center mt-5\">
                            <input class=\"form-control\" type=\"search\" id=\"search\" placeholder=\"Search by Nom\">
                            <a href=\"{{ path('search') }}\"><i class=\"fa fa-sort\"></i></a>
                        </div>

                        <div class=\"card-body\">
                            <table id=\"datatables-clients\" class=\"table table-striped\" style=\"width:100%\">
                                <thead>
                                <tr>
                                    <th>Cin</th>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Sexe</th>
                                    <th>Datee</th>
                                    <th>Taille</th>
                                    <th>Poids</th>
                                    <th>Email</th>

                                    <th>Telephone</th>

                                    <th>Supprimer</th>
                                </tr>
                                </thead>
                                <tbody id=\"all\">
                                {% include 'membre/search.html.twig' %}
                                <div class=\"nk-pagination nk-pagination-center\">
                                    {{ knp_pagination_render(membres) }}

                                </div>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Cin</th>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Sexe</th>
                                    <th>Datee</th>
                                    <th>Taille</th>
                                    <th>Poids</th>
                                    <th>Email</th>
                                    <th>Telephone</th>
                                    <th>Supprimer</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <script>
        \$( document ).ready(function() {
            var currentRequest = null;
            \$(\"#search\").keyup(function(e){
                var value = \$(this).val();
                if(currentRequest != null) {
                    currentRequest.abort();
                }
                currentRequest = \$.ajax({
                    url : \"{{ path('search', {'id': app.request.get('id')}) }}\",
                    type : 'GET',
                    data: {
                        'searchValue' : value
                    },
                    success : function(retour)
                    {
                        \$('#all').html(retour);
                    },
                });
                return false;
            });
        });
    </script>
{% endblock %}
", "membre/index.html.twig", "/Applications/MAMP/htdocs/projet_symfony/User_Symfony/templates/membre/index.html.twig");
    }
}
