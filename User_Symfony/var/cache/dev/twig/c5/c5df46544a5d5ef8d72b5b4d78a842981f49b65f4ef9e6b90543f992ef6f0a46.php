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

/* backend/partials/sidenav.html.twig */
class __TwigTemplate_dc2c5d9557dcfb753e1b5cb572ec50fabab247396b7173621954bf8f0cdc90f1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/partials/sidenav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/partials/sidenav.html.twig"));

        // line 1
        echo "<nav id=\"sidebar\" class=\"sidebar\">
    <div class=\"sidebar-content \">
        <a class=\"sidebar-brand\" href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backend");
        echo "\"> <i class=\"align-middle\" data-feather=\"box\"></i> <span class=\"align-middle\">MindSpace</span> </a>
        <ul class=\"sidebar-nav\">
            <li class=\"sidebar-header\"> Pages </li>

            <li class=\"sidebar-item\">
                <a href=\"#admin\" data-toggle=\"collapse\" class=\"sidebar-link collapsed\"> <i class=\"align-middle\" data-feather=\"user\"></i> <span class=\"align-middle\">Admin</span> </a>
                <ul id=\"admin\" class=\"sidebar-dropdown list-unstyled collapse \" data-parent=\"#sidebar\">
                    <li class=\"sidebar-item\"><a class=\"sidebar-link\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_new");
        echo "\">Ajouter un Admin</a></li>
                    <li class=\"sidebar-item\"><a class=\"sidebar-link\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
        echo "\">Afficher les Admins</a></li>
                </ul>
            </li>

            <li class=\"sidebar-item\">
                <a href=\"#membre\" data-toggle=\"collapse\" class=\"sidebar-link collapsed\"> <i class=\"align-middle\" data-feather=\"users\"></i> <span class=\"align-middle\">Membres</span> </a>
                <ul id=\"membre\" class=\"sidebar-dropdown list-unstyled collapse \" data-parent=\"#sidebar\">
                    <li class=\"sidebar-item\"><a class=\"sidebar-link\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("membre_index");
        echo "\">Afficher les Membres</a></li>


                </ul>
            </li>
            <li class=\"sidebar-item\">
                <a href=\"#coach\" data-toggle=\"collapse\" class=\"sidebar-link collapsed\"> <i class=\"align-middle\" data-feather=\"user\"></i> <span class=\"align-middle\">Coachs</span> </a>
                <ul id=\"coach\" class=\"sidebar-dropdown list-unstyled collapse \" data-parent=\"#sidebar\">
                    <li class=\"sidebar-item\"><a class=\"sidebar-link\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coach_new");
        echo "\">Ajouter un Coach</a></li>
                    <li class=\"sidebar-item\"><a class=\"sidebar-link\" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coach_index");
        echo "\">Afficher les Coachs</a></li>


                </ul>
            </li>

        </ul>
        <div class=\"sidebar-bottom d-none d-lg-block\">
            <div class=\"media\"> <img class=\"rounded-circle mr-3\" src=\"/admin/img/avatars/avatar.jpg\" alt=\"Chris Wood\" width=\"40\" height=\"40\">
                <div class=\"media-body\">
                    <h5 class=\"mb-1\">Chris Wood</h5>
                    <div> <i class=\"fas fa-circle text-success\"></i> Online </div>
                </div>
            </div>
        </div>
    </div>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "backend/partials/sidenav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 27,  82 => 26,  71 => 18,  61 => 11,  57 => 10,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav id=\"sidebar\" class=\"sidebar\">
    <div class=\"sidebar-content \">
        <a class=\"sidebar-brand\" href=\"{{path('backend')}}\"> <i class=\"align-middle\" data-feather=\"box\"></i> <span class=\"align-middle\">MindSpace</span> </a>
        <ul class=\"sidebar-nav\">
            <li class=\"sidebar-header\"> Pages </li>

            <li class=\"sidebar-item\">
                <a href=\"#admin\" data-toggle=\"collapse\" class=\"sidebar-link collapsed\"> <i class=\"align-middle\" data-feather=\"user\"></i> <span class=\"align-middle\">Admin</span> </a>
                <ul id=\"admin\" class=\"sidebar-dropdown list-unstyled collapse \" data-parent=\"#sidebar\">
                    <li class=\"sidebar-item\"><a class=\"sidebar-link\" href=\"{{path('admin_new')}}\">Ajouter un Admin</a></li>
                    <li class=\"sidebar-item\"><a class=\"sidebar-link\" href=\"{{path('admin_index')}}\">Afficher les Admins</a></li>
                </ul>
            </li>

            <li class=\"sidebar-item\">
                <a href=\"#membre\" data-toggle=\"collapse\" class=\"sidebar-link collapsed\"> <i class=\"align-middle\" data-feather=\"users\"></i> <span class=\"align-middle\">Membres</span> </a>
                <ul id=\"membre\" class=\"sidebar-dropdown list-unstyled collapse \" data-parent=\"#sidebar\">
                    <li class=\"sidebar-item\"><a class=\"sidebar-link\" href=\"{{path('membre_index')}}\">Afficher les Membres</a></li>


                </ul>
            </li>
            <li class=\"sidebar-item\">
                <a href=\"#coach\" data-toggle=\"collapse\" class=\"sidebar-link collapsed\"> <i class=\"align-middle\" data-feather=\"user\"></i> <span class=\"align-middle\">Coachs</span> </a>
                <ul id=\"coach\" class=\"sidebar-dropdown list-unstyled collapse \" data-parent=\"#sidebar\">
                    <li class=\"sidebar-item\"><a class=\"sidebar-link\" href=\"{{path('coach_new')}}\">Ajouter un Coach</a></li>
                    <li class=\"sidebar-item\"><a class=\"sidebar-link\" href=\"{{path('coach_index')}}\">Afficher les Coachs</a></li>


                </ul>
            </li>

        </ul>
        <div class=\"sidebar-bottom d-none d-lg-block\">
            <div class=\"media\"> <img class=\"rounded-circle mr-3\" src=\"/admin/img/avatars/avatar.jpg\" alt=\"Chris Wood\" width=\"40\" height=\"40\">
                <div class=\"media-body\">
                    <h5 class=\"mb-1\">Chris Wood</h5>
                    <div> <i class=\"fas fa-circle text-success\"></i> Online </div>
                </div>
            </div>
        </div>
    </div>
</nav>", "backend/partials/sidenav.html.twig", "/Applications/MAMP/htdocs/projet_symfony/User_Symfony/templates/backend/partials/sidenav.html.twig");
    }
}
