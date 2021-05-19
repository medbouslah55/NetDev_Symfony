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

/* membre/search.html.twig */
class __TwigTemplate_876f935b68d5d9bdf26e944fb442581cab533589f2973268656c9f61ef47dba6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "membre/search.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "membre/search.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["membres"]) || array_key_exists("membres", $context) ? $context["membres"] : (function () { throw new RuntimeError('Variable "membres" does not exist.', 1, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
            // line 2
            echo "    <tr>
        <td>";
            // line 3
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["membre"], "cin", [], "any", false, false, false, 3), "html", null, true);
            echo "</td>
        <td>";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["membre"], "nom", [], "any", false, false, false, 4), "html", null, true);
            echo "</td>
        <td>";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["membre"], "prenom", [], "any", false, false, false, 5), "html", null, true);
            echo "</td>
        <td>";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["membre"], "sexe", [], "any", false, false, false, 6), "html", null, true);
            echo "</td>
        <td>";
            // line 7
            ((twig_get_attribute($this->env, $this->source, $context["membre"], "datee", [], "any", false, false, false, 7)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["membre"], "datee", [], "any", false, false, false, 7), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
        <td>";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["membre"], "taille", [], "any", false, false, false, 8), "html", null, true);
            echo "</td>
        <td>";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["membre"], "poids", [], "any", false, false, false, 9), "html", null, true);
            echo "</td>
        <td>";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["membre"], "email", [], "any", false, false, false, 10), "html", null, true);
            echo "</td>
        <td>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["membre"], "telephone", [], "any", false, false, false, 11), "html", null, true);
            echo "</td>
        <td>
            ";
            // line 13
            echo twig_include($this->env, $context, "membre/_delete_form.html.twig");
            echo "
        </td>
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
            // line 17
            echo "    <tr>
        <td colspan=\"11\">no records found</td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "membre/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 17,  101 => 13,  96 => 11,  92 => 10,  88 => 9,  84 => 8,  80 => 7,  76 => 6,  72 => 5,  68 => 4,  64 => 3,  61 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for membre in membres %}
    <tr>
        <td>{{ membre.cin }}</td>
        <td>{{ membre.nom }}</td>
        <td>{{ membre.prenom }}</td>
        <td>{{ membre.sexe }}</td>
        <td>{{ membre.datee ? membre.datee|date('Y-m-d') : '' }}</td>
        <td>{{ membre.taille }}</td>
        <td>{{ membre.poids }}</td>
        <td>{{ membre.email }}</td>
        <td>{{ membre.telephone }}</td>
        <td>
            {{ include('membre/_delete_form.html.twig') }}
        </td>
    </tr>
{% else %}
    <tr>
        <td colspan=\"11\">no records found</td>
    </tr>
{% endfor %}", "membre/search.html.twig", "/Applications/MAMP/htdocs/projet_symfony/User_Symfony/templates/membre/search.html.twig");
    }
}
