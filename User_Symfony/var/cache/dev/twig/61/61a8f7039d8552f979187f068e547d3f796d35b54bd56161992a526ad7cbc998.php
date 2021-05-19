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

/* backend/partials/footer.html.twig */
class __TwigTemplate_83971517364604bde1ce532bf3cb280e8030ced10960ed7cb351b8d65fe9c84b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/partials/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/partials/footer.html.twig"));

        // line 1
        echo "<footer class=\"footer\">
    <div class=\"container-fluid\">
        <div class=\"row text-muted\">
            <div class=\"col-6 text-left\">
                <ul class=\"list-inline\">
                    <li class=\"list-inline-item\"> <a class=\"text-muted\" href=\"#\">Support</a> </li>
                    <li class=\"list-inline-item\"> <a class=\"text-muted\" href=\"#\">Help Center</a> </li>
                    <li class=\"list-inline-item\"> <a class=\"text-muted\" href=\"#\">Privacy</a> </li>
                    <li class=\"list-inline-item\"> <a class=\"text-muted\" href=\"#\">Terms of Service</a> </li>
                </ul>
            </div>
            <div class=\"col-6 text-right\">
                <p class=\"mb-0\"> &copy; 2021 - <a href=\"index.html\" class=\"text-muted\">AppStack</a> </p>
            </div>
        </div>
    </div>
</footer>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "backend/partials/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer\">
    <div class=\"container-fluid\">
        <div class=\"row text-muted\">
            <div class=\"col-6 text-left\">
                <ul class=\"list-inline\">
                    <li class=\"list-inline-item\"> <a class=\"text-muted\" href=\"#\">Support</a> </li>
                    <li class=\"list-inline-item\"> <a class=\"text-muted\" href=\"#\">Help Center</a> </li>
                    <li class=\"list-inline-item\"> <a class=\"text-muted\" href=\"#\">Privacy</a> </li>
                    <li class=\"list-inline-item\"> <a class=\"text-muted\" href=\"#\">Terms of Service</a> </li>
                </ul>
            </div>
            <div class=\"col-6 text-right\">
                <p class=\"mb-0\"> &copy; 2021 - <a href=\"index.html\" class=\"text-muted\">AppStack</a> </p>
            </div>
        </div>
    </div>
</footer>", "backend/partials/footer.html.twig", "/Applications/MAMP/htdocs/projet_symfony/User_Symfony/templates/backend/partials/footer.html.twig");
    }
}
