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

/* membre/show.html.twig */
class __TwigTemplate_0586ee55f40f88895ea1d007635810b16777fb844eef3fa9220d8b22b937a8ea extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "membre/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "membre/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "membre/show.html.twig", 1);
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

        echo "Membre";
        
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

    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <!------ Include the above in your HEAD tag ---------->

    <body>
    <div class=\"container main-secction\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 image-section\">
                <img src=\"https://png.pngtree.com/thumb_back/fw800/back_pic/00/08/57/41562ad4a92b16a.jpg\">
            </div>
            <div class=\"row user-left-part\">
                <div class=\"col-md-3 col-sm-3 col-xs-12 user-profil-part pull-left\">
                    <div class=\"row \">
                        <div class=\"col-md-12 col-md-12-sm-12 col-xs-12 user-image text-center\">
                            <img src=\"https://www.jamf.com/jamf-nation/img/default-avatars/generic-user-purple.png\" class=\"rounded-circle\">
                        </div>
                        <div class=\"col-md-12 col-sm-12 col-xs-12 user-detail-section1 text-center\">
                            <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("membre_edit", ["cin" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "cin", [], "any", false, false, false, 26)]), "html", null, true);
        echo "\">edit</a></a>
                        </div>


                    </div>
                </div>
                <div class=\"col-md-9 col-sm-9 col-xs-12 pull-right profile-right-section\">
                    <div class=\"row profile-right-section-row\">
                        <div class=\"col-md-12 profile-header\">
                            <div class=\"row\">
                                <div class=\"col-md-8 col-sm-6 col-xs-6 profile-header-section1 pull-left\">
                                    <h1>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 37, $this->source); })()), "prenom", [], "any", false, false, false, 37), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 37, $this->source); })()), "nom", [], "any", false, false, false, 37), "html", null, true);
        echo "</h1>

                                </div>

                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"row\">
                                <div class=\"col-md-8\">
                                    <ul class=\"nav nav-tabs\" role=\"tablist\">
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link active\" href=\"#profile\" role=\"tab\" data-toggle=\"tab\"><i class=\"fas fa-user-circle\"></i> Information general</a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"#buzz\" role=\"tab\" data-toggle=\"tab\"><i class=\"fas fa-info-circle\"></i> Information personnelle</a>
                                        </li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class=\"tab-content\">
                                        <div role=\"tabpanel\" class=\"tab-pane fade show active\" id=\"profile\">
                                            <div class=\"row\">
                                                <div class=\"col-md-2\">
                                                    <label>Cin</label>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <p>";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 63, $this->source); })()), "cin", [], "any", false, false, false, 63), "html", null, true);
        echo "</p>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-2\">
                                                    <label>Sexe</label>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <p>";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 71, $this->source); })()), "sexe", [], "any", false, false, false, 71), "html", null, true);
        echo "</p>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-2\">
                                                    <label>Date de naissance</label>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <p>";
        // line 79
        ((twig_get_attribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 79, $this->source); })()), "datee", [], "any", false, false, false, 79)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 79, $this->source); })()), "datee", [], "any", false, false, false, 79), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</p>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-2\">
                                                    <label>Email</label>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <p>";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 87, $this->source); })()), "email", [], "any", false, false, false, 87), "html", null, true);
        echo "</p>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-2\">
                                                    <label>Telephone</label>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <p>";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 95, $this->source); })()), "telephone", [], "any", false, false, false, 95), "html", null, true);
        echo "</p>
                                                </div>
                                            </div>

                                        </div>
                                        <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"buzz\">
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <label>Taille</label>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <p>";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 106, $this->source); })()), "taille", [], "any", false, false, false, 106), "html", null, true);
        echo "</p>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <label>Poids</label>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <p>";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 114, $this->source); })()), "poids", [], "any", false, false, false, 114), "html", null, true);
        echo "</p>
                                                </div>

                                            </div>
                                            <div  class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <label>Votre avencement </label>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <a href=\"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tracking_index");
        echo "\"> cliquez ici  </a>
                                                </div>
                                            </div>
                                            <div  class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <label>ajouter Votre avencement </label>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <a href=\"";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tracking_new");
        echo "\">ajouter</a></a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </body>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "membre/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 131,  236 => 123,  224 => 114,  213 => 106,  199 => 95,  188 => 87,  177 => 79,  166 => 71,  155 => 63,  124 => 37,  110 => 26,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Membre{% endblock %}

{% block body %}


    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <!------ Include the above in your HEAD tag ---------->

    <body>
    <div class=\"container main-secction\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12 image-section\">
                <img src=\"https://png.pngtree.com/thumb_back/fw800/back_pic/00/08/57/41562ad4a92b16a.jpg\">
            </div>
            <div class=\"row user-left-part\">
                <div class=\"col-md-3 col-sm-3 col-xs-12 user-profil-part pull-left\">
                    <div class=\"row \">
                        <div class=\"col-md-12 col-md-12-sm-12 col-xs-12 user-image text-center\">
                            <img src=\"https://www.jamf.com/jamf-nation/img/default-avatars/generic-user-purple.png\" class=\"rounded-circle\">
                        </div>
                        <div class=\"col-md-12 col-sm-12 col-xs-12 user-detail-section1 text-center\">
                            <a href=\"{{ path('membre_edit', {'cin': app.user.cin}) }}\">edit</a></a>
                        </div>


                    </div>
                </div>
                <div class=\"col-md-9 col-sm-9 col-xs-12 pull-right profile-right-section\">
                    <div class=\"row profile-right-section-row\">
                        <div class=\"col-md-12 profile-header\">
                            <div class=\"row\">
                                <div class=\"col-md-8 col-sm-6 col-xs-6 profile-header-section1 pull-left\">
                                    <h1>{{ membre.prenom }} {{ membre.nom }}</h1>

                                </div>

                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"row\">
                                <div class=\"col-md-8\">
                                    <ul class=\"nav nav-tabs\" role=\"tablist\">
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link active\" href=\"#profile\" role=\"tab\" data-toggle=\"tab\"><i class=\"fas fa-user-circle\"></i> Information general</a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"#buzz\" role=\"tab\" data-toggle=\"tab\"><i class=\"fas fa-info-circle\"></i> Information personnelle</a>
                                        </li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class=\"tab-content\">
                                        <div role=\"tabpanel\" class=\"tab-pane fade show active\" id=\"profile\">
                                            <div class=\"row\">
                                                <div class=\"col-md-2\">
                                                    <label>Cin</label>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <p>{{ membre.cin }}</p>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-2\">
                                                    <label>Sexe</label>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <p>{{ membre.sexe }}</p>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-2\">
                                                    <label>Date de naissance</label>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <p>{{ membre.datee ? membre.datee|date('Y-m-d') : '' }}</p>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-2\">
                                                    <label>Email</label>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <p>{{ membre.email }}</p>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-2\">
                                                    <label>Telephone</label>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <p>{{ membre.telephone }}</p>
                                                </div>
                                            </div>

                                        </div>
                                        <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"buzz\">
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <label>Taille</label>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <p>{{ membre.taille }}</p>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <label>Poids</label>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <p>{{ membre.poids }}</p>
                                                </div>

                                            </div>
                                            <div  class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <label>Votre avencement </label>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <a href=\"{{ path('tracking_index') }}\"> cliquez ici  </a>
                                                </div>
                                            </div>
                                            <div  class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <label>ajouter Votre avencement </label>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <a href=\"{{ path('tracking_new') }}\">ajouter</a></a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </body>

{% endblock %}
", "membre/show.html.twig", "/Applications/MAMP/htdocs/projet_symfony/User_Symfony/templates/membre/show.html.twig");
    }
}
