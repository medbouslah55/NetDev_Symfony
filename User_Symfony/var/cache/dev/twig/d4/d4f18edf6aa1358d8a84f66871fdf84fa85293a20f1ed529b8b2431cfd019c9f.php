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

/* LoginMembre.html.twig */
class __TwigTemplate_d5639d7b5610cd97b1656de2cde4d611186335388b43e025f7375d83ae06e5cc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "LoginMembre.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "LoginMembre.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "LoginMembre.html.twig", 1);
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

        echo "Login";
        
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
        echo "    <!-- Start of .benefits-form -->
    <div class=\"container\">
        <div class=\"benefits-form\">
            <div class=\"benefits-form__benefits\">

                <div class=\"benefits-form__benefits-item\">
                    <div class=\"icon\">
                        <svg width=\"38\" height=\"38\" viewBox=\"0 0 38 38\">
                            <path id=\"icon7.svg\" class=\"cls-2\"
                                  d=\"M1382.51,4623.58a0.01,0.01,0,0,1,.01.01,1.667,1.667,0,0,0,.2.08c0.03,0.01.06,0.03,0.09,0.04a1.153,1.153,0,0,0,.26.03,0.433,0.433,0,0,0,.05.01h0a0.433,0.433,0,0,1,.05-0.01,1.068,1.068,0,0,0,.25-0.03c0.03-.01.06-0.03,0.09-0.04a1.192,1.192,0,0,0,.2-0.08c0-.01.01-0.01,0.02-0.01,0.46-.28,11.26-6.83,11.26-15.27,0-4.13-2.36-8.31-6.89-8.31-2.12,0-3.83,1.47-4.98,2.48-1.15-1.01-2.86-2.48-4.99-2.48-4.52,0-6.89,4.18-6.89,8.31C1371.24,4616.75,1382.05,4623.3,1382.51,4623.58Zm-4.38-21.21c1.27,0,2.49,1.08,3.48,1.94,0.28,0.25.55,0.48,0.78,0.66a0.2,0.2,0,0,0,.08.04,0.906,0.906,0,0,0,.22.11,0.8,0.8,0,0,0,.2.07c0.08,0.01.15,0.01,0.22,0.02a0.974,0.974,0,0,0,.24-0.02,0.731,0.731,0,0,0,.19-0.07,0.973,0.973,0,0,0,.23-0.11,0.251,0.251,0,0,0,.07-0.04c0.24-.18.5-0.41,0.79-0.66,0.98-.86,2.21-1.94,3.47-1.94,2.97,0,4.52,2.99,4.52,5.94,0,6.08-7.34,11.4-9.5,12.84-2.17-1.44-9.5-6.76-9.5-12.84C1373.62,4605.36,1375.17,4602.37,1378.13,4602.37Zm11.68,24.78c-0.71.18-1.42,0.38-2.13,0.58a40.449,40.449,0,0,1-4.76,1.11c-0.52-1.94-2.45-3.8-6.35-3.27-2.35.33-2.9-.4-3.55-1.23a4.1,4.1,0,0,0-1.34-1.27c-2.17-1.13-5.44-.18-7.56.92v-3.8a1.186,1.186,0,0,0-1.19-1.19h-4.75a1.184,1.184,0,0,0-1.18,1.19v16.62a1.184,1.184,0,0,0,1.18,1.19h4.75a1.186,1.186,0,0,0,1.19-1.19v-2.32c3.44,1.11,11.23,3.51,13.93,3.51,2.88,0,13.18-3.72,16.12-5.59,0.96-.61,1.08-1.77.36-3.45C1394.01,4627.72,1392.76,4626.4,1389.81,4627.15Zm-28.06,8.47h-2.38v-14.25h2.38v14.25Zm16.3,0c-2.3,0-10.19-2.41-13.93-3.63v-5.38a1.068,1.068,0,0,0,.48-0.17c1.85-1.15,4.69-1.93,5.98-1.26a2.568,2.568,0,0,1,.55.6c0.81,1.06,2.05,2.66,5.76,2.15,1.57-.22,2.73.05,3.34,0.79a1.847,1.847,0,0,1,.44,1.12c-0.15.06-.32,0.13-0.49,0.21a7.905,7.905,0,0,1-2.78.81c-0.9-.25-5.56-1.56-7.4-2.07a1.182,1.182,0,0,0-1.46.82,1.17,1.17,0,0,0,.82,1.46c1.84,0.52,6.52,1.84,7.42,2.08a2.783,2.783,0,0,0,.76.1,10.1,10.1,0,0,0,3.57-1.02c0.3-.12.57-0.24,0.81-0.32a1.6,1.6,0,0,0,.77-0.64,38.064,38.064,0,0,0,5.64-1.26c0.69-.19,1.38-0.38,2.07-0.56,1.58-.4,1.79.08,1.93,0.43a3.839,3.839,0,0,1,.25.71C1389.47,4632.39,1380.21,4635.62,1378.05,4635.62Z\"
                                  transform=\"translate(-1357 -4600)\" /></svg>
                    </div>
                    <p class=\"text\">Inscreption</p>
                </div>

                <div class=\"benefits-form__benefits-item\">
                    <div class=\"icon\">
                        <svg width=\"38\" height=\"38\" viewBox=\"0 0 38 38\">
                            <path id=\"icon8.svg\" class=\"cls-2\"
                                  d=\"M1390.84,4722h-30.68a3.158,3.158,0,0,0-3.16,3.15v23.75a3.167,3.167,0,0,0,3.16,3.16h30.68a3.167,3.167,0,0,0,3.16-3.16v-23.75A3.158,3.158,0,0,0,1390.84,4722Zm-30.68,2.31h30.68a0.847,0.847,0,0,1,.85.84v17.66h-32.38v-17.66A0.847,0.847,0,0,1,1360.16,4724.31Zm30.68,25.44h-30.68a0.849,0.849,0,0,1-.85-0.85v-3.78h32.38v3.78A0.849,0.849,0,0,1,1390.84,4749.75Zm-18.81-12.72h3.47a1.156,1.156,0,0,0,1.13-.93l0.37-1.81,2.04,5.46a1.167,1.167,0,0,0,1.08.75h0.1a1.169,1.169,0,0,0,1.04-.93l1.38-6.89,1,3.51a1.146,1.146,0,0,0,1.11.84h3.47a1.155,1.155,0,0,0,0-2.31h-2.6l-2.07-7.26a1.133,1.133,0,0,0-1.16-.84,1.181,1.181,0,0,0-1.09.93l-1.52,7.59-2.04-5.45a1.158,1.158,0,0,0-2.22.17l-0.97,4.86h-2.52A1.155,1.155,0,1,0,1372.03,4737.03Zm-8.09-9.25h-2.32v2.31h2.32v-2.31Zm0,4.63h-2.32v2.31h2.32v-2.31Zm0,4.62h-2.32v2.31h2.32v-2.31Zm4.62-9.25h-2.31v2.31h2.31v-2.31Zm0,4.63h-2.31v2.31h2.31v-2.31Zm0,4.62h-2.31v2.31h2.31v-2.31Zm16.19,19.66h-2c-0.37-.29-1.47-1.43-1.47-4.63h-2.31a10.38,10.38,0,0,0,.92,4.63h-8.78a10.38,10.38,0,0,0,.92-4.63h-2.31c0,3.48-1.08,4.31-1.48,4.63h-1.99a1.155,1.155,0,1,0,0,2.31h18.5A1.155,1.155,0,1,0,1384.75,4756.69Z\"
                                  transform=\"translate(-1357 -4722)\" /></svg>
                    </div>
                    <p class=\"text\">Modern meditation </p>
                </div>

            </div>
            <div class=\"benefits-form__form\">
                <h1 class=\"section-title\">Looking for <span>a quality meditation services?</span></h1>

                <form action=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("loginadmin");
        echo "\" method=\"post\">
                    <h1 class=\"section-title\">make an appointment</h1>


                    <div class=\"input-box\">
                        <label for=\"popup-email\">Email *</label>
                        <input type=\"text\" id=\"popup-email\" required name=\"_username\">
                    </div>

                    <div class=\"input-box\">
                        <label for=\"popup-phone\">Password *</label>
                        <input type=\"password\" id=\"popup-phone\" required name=\"_password\">
                    </div>

                    <button type=\"submit\" class=\"btn btn-success\">connexion</button>

                </form>
                <a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_password_backup");
        echo "\" >mot de passe oublier</a>

            </div>
        </div>
    </div>
    <!-- End of .header-bottom -->


    <a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connect_google_start");
        echo "\">
        Google
    </a>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "LoginMembre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 60,  139 => 52,  119 => 35,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Login{% endblock %}

{% block body %}
    <!-- Start of .benefits-form -->
    <div class=\"container\">
        <div class=\"benefits-form\">
            <div class=\"benefits-form__benefits\">

                <div class=\"benefits-form__benefits-item\">
                    <div class=\"icon\">
                        <svg width=\"38\" height=\"38\" viewBox=\"0 0 38 38\">
                            <path id=\"icon7.svg\" class=\"cls-2\"
                                  d=\"M1382.51,4623.58a0.01,0.01,0,0,1,.01.01,1.667,1.667,0,0,0,.2.08c0.03,0.01.06,0.03,0.09,0.04a1.153,1.153,0,0,0,.26.03,0.433,0.433,0,0,0,.05.01h0a0.433,0.433,0,0,1,.05-0.01,1.068,1.068,0,0,0,.25-0.03c0.03-.01.06-0.03,0.09-0.04a1.192,1.192,0,0,0,.2-0.08c0-.01.01-0.01,0.02-0.01,0.46-.28,11.26-6.83,11.26-15.27,0-4.13-2.36-8.31-6.89-8.31-2.12,0-3.83,1.47-4.98,2.48-1.15-1.01-2.86-2.48-4.99-2.48-4.52,0-6.89,4.18-6.89,8.31C1371.24,4616.75,1382.05,4623.3,1382.51,4623.58Zm-4.38-21.21c1.27,0,2.49,1.08,3.48,1.94,0.28,0.25.55,0.48,0.78,0.66a0.2,0.2,0,0,0,.08.04,0.906,0.906,0,0,0,.22.11,0.8,0.8,0,0,0,.2.07c0.08,0.01.15,0.01,0.22,0.02a0.974,0.974,0,0,0,.24-0.02,0.731,0.731,0,0,0,.19-0.07,0.973,0.973,0,0,0,.23-0.11,0.251,0.251,0,0,0,.07-0.04c0.24-.18.5-0.41,0.79-0.66,0.98-.86,2.21-1.94,3.47-1.94,2.97,0,4.52,2.99,4.52,5.94,0,6.08-7.34,11.4-9.5,12.84-2.17-1.44-9.5-6.76-9.5-12.84C1373.62,4605.36,1375.17,4602.37,1378.13,4602.37Zm11.68,24.78c-0.71.18-1.42,0.38-2.13,0.58a40.449,40.449,0,0,1-4.76,1.11c-0.52-1.94-2.45-3.8-6.35-3.27-2.35.33-2.9-.4-3.55-1.23a4.1,4.1,0,0,0-1.34-1.27c-2.17-1.13-5.44-.18-7.56.92v-3.8a1.186,1.186,0,0,0-1.19-1.19h-4.75a1.184,1.184,0,0,0-1.18,1.19v16.62a1.184,1.184,0,0,0,1.18,1.19h4.75a1.186,1.186,0,0,0,1.19-1.19v-2.32c3.44,1.11,11.23,3.51,13.93,3.51,2.88,0,13.18-3.72,16.12-5.59,0.96-.61,1.08-1.77.36-3.45C1394.01,4627.72,1392.76,4626.4,1389.81,4627.15Zm-28.06,8.47h-2.38v-14.25h2.38v14.25Zm16.3,0c-2.3,0-10.19-2.41-13.93-3.63v-5.38a1.068,1.068,0,0,0,.48-0.17c1.85-1.15,4.69-1.93,5.98-1.26a2.568,2.568,0,0,1,.55.6c0.81,1.06,2.05,2.66,5.76,2.15,1.57-.22,2.73.05,3.34,0.79a1.847,1.847,0,0,1,.44,1.12c-0.15.06-.32,0.13-0.49,0.21a7.905,7.905,0,0,1-2.78.81c-0.9-.25-5.56-1.56-7.4-2.07a1.182,1.182,0,0,0-1.46.82,1.17,1.17,0,0,0,.82,1.46c1.84,0.52,6.52,1.84,7.42,2.08a2.783,2.783,0,0,0,.76.1,10.1,10.1,0,0,0,3.57-1.02c0.3-.12.57-0.24,0.81-0.32a1.6,1.6,0,0,0,.77-0.64,38.064,38.064,0,0,0,5.64-1.26c0.69-.19,1.38-0.38,2.07-0.56,1.58-.4,1.79.08,1.93,0.43a3.839,3.839,0,0,1,.25.71C1389.47,4632.39,1380.21,4635.62,1378.05,4635.62Z\"
                                  transform=\"translate(-1357 -4600)\" /></svg>
                    </div>
                    <p class=\"text\">Inscreption</p>
                </div>

                <div class=\"benefits-form__benefits-item\">
                    <div class=\"icon\">
                        <svg width=\"38\" height=\"38\" viewBox=\"0 0 38 38\">
                            <path id=\"icon8.svg\" class=\"cls-2\"
                                  d=\"M1390.84,4722h-30.68a3.158,3.158,0,0,0-3.16,3.15v23.75a3.167,3.167,0,0,0,3.16,3.16h30.68a3.167,3.167,0,0,0,3.16-3.16v-23.75A3.158,3.158,0,0,0,1390.84,4722Zm-30.68,2.31h30.68a0.847,0.847,0,0,1,.85.84v17.66h-32.38v-17.66A0.847,0.847,0,0,1,1360.16,4724.31Zm30.68,25.44h-30.68a0.849,0.849,0,0,1-.85-0.85v-3.78h32.38v3.78A0.849,0.849,0,0,1,1390.84,4749.75Zm-18.81-12.72h3.47a1.156,1.156,0,0,0,1.13-.93l0.37-1.81,2.04,5.46a1.167,1.167,0,0,0,1.08.75h0.1a1.169,1.169,0,0,0,1.04-.93l1.38-6.89,1,3.51a1.146,1.146,0,0,0,1.11.84h3.47a1.155,1.155,0,0,0,0-2.31h-2.6l-2.07-7.26a1.133,1.133,0,0,0-1.16-.84,1.181,1.181,0,0,0-1.09.93l-1.52,7.59-2.04-5.45a1.158,1.158,0,0,0-2.22.17l-0.97,4.86h-2.52A1.155,1.155,0,1,0,1372.03,4737.03Zm-8.09-9.25h-2.32v2.31h2.32v-2.31Zm0,4.63h-2.32v2.31h2.32v-2.31Zm0,4.62h-2.32v2.31h2.32v-2.31Zm4.62-9.25h-2.31v2.31h2.31v-2.31Zm0,4.63h-2.31v2.31h2.31v-2.31Zm0,4.62h-2.31v2.31h2.31v-2.31Zm16.19,19.66h-2c-0.37-.29-1.47-1.43-1.47-4.63h-2.31a10.38,10.38,0,0,0,.92,4.63h-8.78a10.38,10.38,0,0,0,.92-4.63h-2.31c0,3.48-1.08,4.31-1.48,4.63h-1.99a1.155,1.155,0,1,0,0,2.31h18.5A1.155,1.155,0,1,0,1384.75,4756.69Z\"
                                  transform=\"translate(-1357 -4722)\" /></svg>
                    </div>
                    <p class=\"text\">Modern meditation </p>
                </div>

            </div>
            <div class=\"benefits-form__form\">
                <h1 class=\"section-title\">Looking for <span>a quality meditation services?</span></h1>

                <form action=\"{{ path('loginadmin') }}\" method=\"post\">
                    <h1 class=\"section-title\">make an appointment</h1>


                    <div class=\"input-box\">
                        <label for=\"popup-email\">Email *</label>
                        <input type=\"text\" id=\"popup-email\" required name=\"_username\">
                    </div>

                    <div class=\"input-box\">
                        <label for=\"popup-phone\">Password *</label>
                        <input type=\"password\" id=\"popup-phone\" required name=\"_password\">
                    </div>

                    <button type=\"submit\" class=\"btn btn-success\">connexion</button>

                </form>
                <a href=\"{{ path('user_password_backup') }}\" >mot de passe oublier</a>

            </div>
        </div>
    </div>
    <!-- End of .header-bottom -->


    <a href=\"{{ path('connect_google_start') }}\">
        Google
    </a>

{% endblock %}
", "LoginMembre.html.twig", "/Applications/MAMP/htdocs/projet_symfony/User_Symfony/templates/LoginMembre.html.twig");
    }
}
