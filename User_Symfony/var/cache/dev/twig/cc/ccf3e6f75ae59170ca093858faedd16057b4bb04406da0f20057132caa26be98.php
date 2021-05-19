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

/* tracking/index.html.twig */
class __TwigTemplate_bb82fdc54971ee0d33be25c08bdafa929b0e4be5bfdfb79a786c4f1c3dcb1912 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tracking/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tracking/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tracking/index.html.twig", 1);
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

        echo "Tracking index";
        
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
    <!-- Start of .other-servises -->

    <section class=\"other-services\" id=\"services\">
        <div class=\"other-services__bg\">
            <img src=\"./images/jpg/other-services.jpg\">
            <div class=\"icon\">
                <img src=\"./images/png-shapes/other-services-shape.png\">
            </div>
        </div>
        <div class=\"other-services__bg-2\"></div>
        <div class=\"container\">
            <h1 class=\"section-title\">Trac <span>king</span></h1>
            <div class=\"other-services__cards\">



                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trackings"]) || array_key_exists("trackings", $context) ? $context["trackings"] : (function () { throw new RuntimeError('Variable "trackings" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tracking"]) {
            // line 24
            echo "                <div class=\"card-item\" >
                    <div class=\"icon\">
                        <svg width=\"65\" height=\"65\" viewBox=\"0 0 65 65\">
                            <path id=\"icon3.svg\" class=\"cls-5\"
                                  d=\"M2837.02,1571.38c-6.43,3.58-14.11,3.63-22.33.18a15.834,15.834,0,0,0-1.64,11.85,2.031,2.031,0,0,1-1.4,2.51,2.164,2.164,0,0,1-.56.08,2.034,2.034,0,0,1-1.95-1.48c-2.48-8.71,2.43-15.79,3.09-16.68,6.72-10.64,13.65-20.01,18.03-25.7-11.51,5.76-19.47,17.4-23.5,24.54a2.071,2.071,0,0,1-1.68,1.04,1.917,1.917,0,0,1-1.76-.88c-3.44-4.97-6.75-15.87-1.8-25.54,6.59-12.88,24.87-19.71,54.32-20.3a2.312,2.312,0,0,1,1.54.66,1.983,1.983,0,0,1,.52,1.59C2855.04,1549.06,2848.01,1565.25,2837.02,1571.38Zm-31.89-28.23c-3.51,6.86-1.86,14.14-.05,18.39,1.16-1.87,2.53-3.89,4.08-5.97,0-.01-0.01-0.03-0.01-0.04v-11.39a2.03,2.03,0,1,1,4.06,0v6.45c1.27-1.41,2.62-2.81,4.07-4.16v-7.15a2.03,2.03,0,0,1,4.06,0v3.71a40.6,40.6,0,0,1,14.54-7.27,2.03,2.03,0,0,1,2.07,3.26c-0.07.08-3.84,4.66-9.07,11.75l6.29-1.25a2.029,2.029,0,1,1,.79,3.98l-10.16,2.03a1.722,1.722,0,0,1-.39.04c-0.81,1.14-1.64,2.31-2.48,3.52l10.31-1.47a2.031,2.031,0,1,1,.58,4.02l-13.98,2q-1.47,2.19-2.95,4.48c6.85,2.74,12.95,2.66,18.14-.24,9.48-5.29,15.72-19.65,18.56-42.72C2827.48,1525.97,2810.74,1532.19,2805.13,1543.15Zm51.55,15.44c1.23,2.43,7.33,14.74,7.33,18.7a9.151,9.151,0,0,1-18.28,0c0-3.96,6.1-16.27,7.33-18.7A2.108,2.108,0,0,1,2856.68,1558.59Zm-1.81,23.33a4.872,4.872,0,0,0,5.08-4.63c0-1.76-2.58-7.87-5.08-13.14-2.5,5.27-5.08,11.38-5.08,13.14A4.872,4.872,0,0,0,2854.87,1581.92Z\"
                                  transform=\"translate(-2799 -1521)\" /></svg>
                    </div>
                    <h2 class=\"title\">Holistic Wellness</h2>
                    <h4 class=\"subtitle\">A lifestyle of holistic wellness rewards<br>you with enhanced health:</h4>
                    <ul class=\"lists\">
                        <center>
                        <li><i ></i><h4> poids</h4>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tracking"], "oldPoids", [], "any", false, false, false, 35), "html", null, true);
            echo " </li>
                        <li><i ></i><h4> IMC </h4>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tracking"], "imc", [], "any", false, false, false, 36), "html", null, true);
            echo "</li>
                        </center>
                    </ul>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tracking'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "            </div>
        </div>
    </section>
    <!-- End of .other-servises -->



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "tracking/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 41,  128 => 36,  124 => 35,  111 => 24,  107 => 23,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tracking index{% endblock %}

{% block body %}

    <!-- Start of .other-servises -->

    <section class=\"other-services\" id=\"services\">
        <div class=\"other-services__bg\">
            <img src=\"./images/jpg/other-services.jpg\">
            <div class=\"icon\">
                <img src=\"./images/png-shapes/other-services-shape.png\">
            </div>
        </div>
        <div class=\"other-services__bg-2\"></div>
        <div class=\"container\">
            <h1 class=\"section-title\">Trac <span>king</span></h1>
            <div class=\"other-services__cards\">



                {% for tracking in trackings %}
                <div class=\"card-item\" >
                    <div class=\"icon\">
                        <svg width=\"65\" height=\"65\" viewBox=\"0 0 65 65\">
                            <path id=\"icon3.svg\" class=\"cls-5\"
                                  d=\"M2837.02,1571.38c-6.43,3.58-14.11,3.63-22.33.18a15.834,15.834,0,0,0-1.64,11.85,2.031,2.031,0,0,1-1.4,2.51,2.164,2.164,0,0,1-.56.08,2.034,2.034,0,0,1-1.95-1.48c-2.48-8.71,2.43-15.79,3.09-16.68,6.72-10.64,13.65-20.01,18.03-25.7-11.51,5.76-19.47,17.4-23.5,24.54a2.071,2.071,0,0,1-1.68,1.04,1.917,1.917,0,0,1-1.76-.88c-3.44-4.97-6.75-15.87-1.8-25.54,6.59-12.88,24.87-19.71,54.32-20.3a2.312,2.312,0,0,1,1.54.66,1.983,1.983,0,0,1,.52,1.59C2855.04,1549.06,2848.01,1565.25,2837.02,1571.38Zm-31.89-28.23c-3.51,6.86-1.86,14.14-.05,18.39,1.16-1.87,2.53-3.89,4.08-5.97,0-.01-0.01-0.03-0.01-0.04v-11.39a2.03,2.03,0,1,1,4.06,0v6.45c1.27-1.41,2.62-2.81,4.07-4.16v-7.15a2.03,2.03,0,0,1,4.06,0v3.71a40.6,40.6,0,0,1,14.54-7.27,2.03,2.03,0,0,1,2.07,3.26c-0.07.08-3.84,4.66-9.07,11.75l6.29-1.25a2.029,2.029,0,1,1,.79,3.98l-10.16,2.03a1.722,1.722,0,0,1-.39.04c-0.81,1.14-1.64,2.31-2.48,3.52l10.31-1.47a2.031,2.031,0,1,1,.58,4.02l-13.98,2q-1.47,2.19-2.95,4.48c6.85,2.74,12.95,2.66,18.14-.24,9.48-5.29,15.72-19.65,18.56-42.72C2827.48,1525.97,2810.74,1532.19,2805.13,1543.15Zm51.55,15.44c1.23,2.43,7.33,14.74,7.33,18.7a9.151,9.151,0,0,1-18.28,0c0-3.96,6.1-16.27,7.33-18.7A2.108,2.108,0,0,1,2856.68,1558.59Zm-1.81,23.33a4.872,4.872,0,0,0,5.08-4.63c0-1.76-2.58-7.87-5.08-13.14-2.5,5.27-5.08,11.38-5.08,13.14A4.872,4.872,0,0,0,2854.87,1581.92Z\"
                                  transform=\"translate(-2799 -1521)\" /></svg>
                    </div>
                    <h2 class=\"title\">Holistic Wellness</h2>
                    <h4 class=\"subtitle\">A lifestyle of holistic wellness rewards<br>you with enhanced health:</h4>
                    <ul class=\"lists\">
                        <center>
                        <li><i ></i><h4> poids</h4>{{ tracking.oldPoids }} </li>
                        <li><i ></i><h4> IMC </h4>{{ tracking.imc }}</li>
                        </center>
                    </ul>
                </div>
                {% endfor %}
            </div>
        </div>
    </section>
    <!-- End of .other-servises -->



{% endblock %}
", "tracking/index.html.twig", "/Applications/MAMP/htdocs/projet_symfony/User_Symfony/templates/tracking/index.html.twig");
    }
}
