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

/* base.html.twig */
class __TwigTemplate_d944de95ef5f86a48867939d0e6733f702c7e9d4c2d208b71c95bc687a7c1f77 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>



    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/icon.png"), "html", null, true);
        echo "\">
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        // line 13
        echo "</title>
    ";
        // line 14
        $this->displayBlock('css', $context, $blocks);
        // line 35
        echo "</head>




<!-- Start of .header-top -->
<header class=\"header-top\">
    <div class=\"container\">

        <!-- header-top__logo -->
        <div class=\"header-top__logo\">
            <a href=\"index.html\">
                <svg id=\"logo-white.svg\" width=\"116.09\" height=\"39\" viewBox=\"0 0 116.09 39\">
                    <path class=\"cls-1\"
                          d=\"M1045.89,144.338l5.7-9.565,5.87,8.679,5.87-8.856,5.87,9.742,7.83,0.176s-3.69,9.734-19.57,19.485c0,0-9.61-5.766-14.95-12.575h4.81a69.279,69.279,0,0,0,10.14,8.146s8.41-5.393,12.81-11.336h-3.38l-3.74-6.376-5.69,8.5-5.7-8.5-3.73,6.376h-8.01s-9.48-12.717,2.67-21.43c7.78-4.687,14.59,1.239,14.59,1.239s6.41-5.146,13.88-1.948,7.96,12.345,6.94,15.231h-3.74s2.4-9.573-5.87-12.22a10.836,10.836,0,0,0-10.85,3.365s-4.05-4.127-9.26-3.72-11.16,5.969-6.58,15.587h4.09Z\"
                          transform=\"translate(-1036.5 -125)\" />
                    <path id=\"IBNSINO\" class=\"cls-2\"
                          d=\"M1087.12,153.436h3.08V133.848h-3.08v19.588Zm9.96-19.588h-4.64v19.588h4.84c3.08,0,4.67-1.623,4.67-4.645V147.2c0-2.071-.64-3.526-2.29-4.17V142.97c1.37-.643,1.99-1.9,1.99-3.917v-0.7C1101.65,135.331,1100.27,133.848,1097.08,133.848Zm-0.19,10.773c1.4,0,1.98.56,1.98,2.379v1.707c0,1.455-.55,1.931-1.59,1.931h-1.76v-6.017h1.37Zm0.11-7.975c1.09,0,1.57.616,1.57,2.015v1.091c0,1.567-.7,2.071-1.85,2.071h-1.2v-5.177H1097Zm13.38,16.79h3.16V133.848h-2.74v11.725h-0.05l-3.11-11.725h-3.86v19.588h2.77V139.249h0.05Z\"
                          transform=\"translate(-1036.5 -125)\" />
                    <path id=\"IBNSINO_copy\" data-name=\"IBNSINO copy\" class=\"cls-1\"
                          d=\"M1115.37,138.549c0,2.239.81,3.862,3.39,6.128,2.01,1.763,2.63,2.827,2.63,4.254,0,1.4-.62,1.9-1.6,1.9s-1.59-.5-1.59-1.9v-1.4h-2.91v1.2c0,3.134,1.56,4.925,4.59,4.925s4.58-1.791,4.58-4.925c0-2.239-.81-3.862-3.38-6.128-2.02-1.763-2.63-2.827-2.63-4.254,0-1.4.56-1.93,1.54-1.93s1.54,0.531,1.54,1.93v0.812h2.91v-0.616c0-3.134-1.54-4.925-4.54-4.925S1115.37,135.415,1115.37,138.549Zm10.86,14.887h3.08V133.848h-3.08v19.588Zm11.9,0h3.16V133.848h-2.74v11.725h-0.06l-3.1-11.725h-3.86v19.588h2.77V139.249h0.05Zm8.21-15.083c0-1.4.61-1.93,1.59-1.93s1.6,0.531,1.6,1.93v10.578c0,1.4-.62,1.93-1.6,1.93s-1.59-.531-1.59-1.93V138.353Zm-3.08,10.382c0,3.134,1.65,4.925,4.67,4.925s4.67-1.791,4.67-4.925V138.549c0-3.134-1.65-4.925-4.67-4.925s-4.67,1.791-4.67,4.925v10.186Z\"
                          transform=\"translate(-1036.5 -125)\" />
                </svg>
            </a>
        </div>
        <!-- End of .header-top__logo -->

        <!-- .header-top__call -->
        <div class=\"header-top__call\">

            <!-- header-top__call-item -->
            <div class=\"header-top__call-item\">
                <svg width=\"24.375\" height=\"24.343\" viewBox=\"0 0 24.375 24.343\">
                    <path id=\"phone.svg\" class=\"header-top__call-icon cls-1\"
                          d=\"M831.817,365.478a10.864,10.864,0,0,0-10.852-10.851v-1.55a12.416,12.416,0,0,1,12.4,12.4h-1.551Zm-6.2,0a4.656,4.656,0,0,0-4.651-4.651v-1.55a6.208,6.208,0,0,1,6.2,6.2h-1.55Zm-4.651-9.3a9.312,9.312,0,0,1,9.3,9.3h-1.551a7.759,7.759,0,0,0-7.751-7.751v-1.55Zm3.779,13.4,1.938-1.937a0.578,0.578,0,0,1,.064-0.058,1.924,1.924,0,0,1,2.511-.006,0.72,0.72,0,0,1,.071.064l3.488,3.487a1.871,1.871,0,0,1,0,2.646l-2.325,2.326a5.527,5.527,0,0,1-3.942,1.314c-3.14,0-7.446-1.609-11.712-5.8l0.41-.418-0.417.41a19.929,19.929,0,0,1-5.5-9.163c-0.666-2.764-.288-5.19,1.01-6.489l2.325-2.325a1.917,1.917,0,0,1,2.647,0l3.488,3.488a0.8,0.8,0,0,1,.067.077,1.879,1.879,0,0,1-.009,2.5c-0.018.022-.038,0.043-0.058,0.064l-1.938,1.937a1.419,1.419,0,0,0,0,2l2.938,2.937h0l2.94,2.94A1.42,1.42,0,0,0,824.744,369.578Zm6.522,3.554,0.454-.454a0.322,0.322,0,0,0,0-.454l-3.434-3.433c-0.017-.015-0.034-0.029-0.049-0.045a0.277,0.277,0,0,0-.464,0c-0.015.014-.03,0.029-0.046,0.042l-0.4.4ZM817.25,359.116l0.4-.4a0.447,0.447,0,0,1,.042-0.045,0.328,0.328,0,0,0,0-.464,0.652,0.652,0,0,1-.05-0.055l-3.429-3.429a0.323,0.323,0,0,0-.455,0l-0.454.454Zm1.456,8.621h0l-2.94-2.94a2.97,2.97,0,0,1,0-4.2l0.388-.388-3.943-3.941-0.775.774c-0.9.9-1.129,2.827-.6,5.029A20.532,20.532,0,0,0,824.366,375.6c2.2,0.531,4.129.3,5.029-.6l0.775-.775-3.942-3.942-0.388.388a2.971,2.971,0,0,1-4.2,0Z\"
                          transform=\"translate(-809 -353.063)\" /></svg>
                <div class=\"header-top__call-text\">
                    <p>Call us for any question</p>
                    <a href=\"tel:+1 800 456 7890\">28299010</a>
                </div>
            </div>
            <!-- End of .header-top__call-item -->

            <!-- header-top__call-item -->
            <div class=\"header-top__call-item\">
                <svg width=\"18.88\" height=\"25.719\" viewBox=\"0 0 18.88 25.719\">
                    <path id=\"address.svg\" class=\"header-top__call-icon cls-1\"
                          d=\"M1033.75,377.71l-7.99-11.282a9.433,9.433,0,1,1,16-.04Zm0-24.133a7.845,7.845,0,0,0-6.68,11.983l6.68,9.43,6.7-9.468A7.841,7.841,0,0,0,1033.75,353.577Zm0,11.78a3.927,3.927,0,1,1,3.93-3.928A3.931,3.931,0,0,1,1033.75,365.357Zm0-6.283a2.356,2.356,0,1,0,2.36,2.355A2.362,2.362,0,0,0,1033.75,359.074Z\"
                          transform=\"translate(-1024.31 -352)\" /></svg>
                <div class=\"header-top__call-text\">
                    <p>Ariana soghra </p>
                    <a href=\"\">Tunis</a>
                </div>
            </div>
            <!-- End of .header-top__call-item -->

            <!-- header-top__call-item -->
            <div class=\"header-top__call-item\">
                <svg width=\"25.16\" height=\"25.157\" viewBox=\"0 0 25.16 25.157\">
                    <path id=\"envelope.svg\" class=\"header-top__call-icon cls-1\"
                          d=\"M1239.84,377.423v-16.85l3.15-2.723v-5.556h18.87v5.556l3.14,2.723v16.85h-25.16Zm22.48-1.57-6.57-6.557-3.33,2.884-3.33-2.884-6.56,6.557h19.79Zm-20.91-1.11,6.49-6.478-6.49-5.614v12.092Zm1.58-14.814-1.16,1,1.16,1v-2.005Zm17.29,3.359v-9.424h-15.72v9.424h-0.01l7.87,6.813,7.87-6.813h-0.01Zm1.58-3.359v2.005l1.15-1Zm1.57,2.722-6.49,5.614,6.49,6.478V362.651Zm-11.8-4.076h1.58v1.571h-1.58v-1.571Zm4.72,1.571h-1.57v-1.571h1.57v1.571Zm-7.86-1.571h1.57v1.571h-1.57v-1.571Z\"
                          transform=\"translate(-1239.84 -352.281)\" /> </svg>
                <div class=\"header-top__call-text\">
                    <p>Office Hour: 09:00am - 04:00pm</p>
                    <a href=\"mailto:inbox@medihelp.com\">Mindspace@mindspace.com</a>
                </div>
            </div>
            <!-- End of .header-top__call-item -->

        </div>
        <!-- End of .header-top__call -->
    </div>
</header>
<!-- End of .header-top -->


<!-- Start of .header-middle -->
<header class=\"header-middle header-middle_white-transparent\">
    <div class=\"container\">

        <!-- hidden navbar for mobiles -->
        <div class=\"navbar-logo\">
            <a href=\"index.html\">
                <svg id=\"logo-white.svg\" width=\"116.09\" height=\"39\" viewBox=\"0 0 116.09 39\">
                    <path class=\"cls-1\"
                          d=\"M1045.89,144.338l5.7-9.565,5.87,8.679,5.87-8.856,5.87,9.742,7.83,0.176s-3.69,9.734-19.57,19.485c0,0-9.61-5.766-14.95-12.575h4.81a69.279,69.279,0,0,0,10.14,8.146s8.41-5.393,12.81-11.336h-3.38l-3.74-6.376-5.69,8.5-5.7-8.5-3.73,6.376h-8.01s-9.48-12.717,2.67-21.43c7.78-4.687,14.59,1.239,14.59,1.239s6.41-5.146,13.88-1.948,7.96,12.345,6.94,15.231h-3.74s2.4-9.573-5.87-12.22a10.836,10.836,0,0,0-10.85,3.365s-4.05-4.127-9.26-3.72-11.16,5.969-6.58,15.587h4.09Z\"
                          transform=\"translate(-1036.5 -125)\" />
                    <path id=\"IBNSINO\" class=\"cls-3\"
                          d=\"M1087.12,153.436h3.08V133.848h-3.08v19.588Zm9.96-19.588h-4.64v19.588h4.84c3.08,0,4.67-1.623,4.67-4.645V147.2c0-2.071-.64-3.526-2.29-4.17V142.97c1.37-.643,1.99-1.9,1.99-3.917v-0.7C1101.65,135.331,1100.27,133.848,1097.08,133.848Zm-0.19,10.773c1.4,0,1.98.56,1.98,2.379v1.707c0,1.455-.55,1.931-1.59,1.931h-1.76v-6.017h1.37Zm0.11-7.975c1.09,0,1.57.616,1.57,2.015v1.091c0,1.567-.7,2.071-1.85,2.071h-1.2v-5.177H1097Zm13.38,16.79h3.16V133.848h-2.74v11.725h-0.05l-3.11-11.725h-3.86v19.588h2.77V139.249h0.05Z\"
                          transform=\"translate(-1036.5 -125)\" />
                    <path id=\"IBNSINO_copy\" data-name=\"IBNSINO copy\" class=\"cls-1\"
                          d=\"M1115.37,138.549c0,2.239.81,3.862,3.39,6.128,2.01,1.763,2.63,2.827,2.63,4.254,0,1.4-.62,1.9-1.6,1.9s-1.59-.5-1.59-1.9v-1.4h-2.91v1.2c0,3.134,1.56,4.925,4.59,4.925s4.58-1.791,4.58-4.925c0-2.239-.81-3.862-3.38-6.128-2.02-1.763-2.63-2.827-2.63-4.254,0-1.4.56-1.93,1.54-1.93s1.54,0.531,1.54,1.93v0.812h2.91v-0.616c0-3.134-1.54-4.925-4.54-4.925S1115.37,135.415,1115.37,138.549Zm10.86,14.887h3.08V133.848h-3.08v19.588Zm11.9,0h3.16V133.848h-2.74v11.725h-0.06l-3.1-11.725h-3.86v19.588h2.77V139.249h0.05Zm8.21-15.083c0-1.4.61-1.93,1.59-1.93s1.6,0.531,1.6,1.93v10.578c0,1.4-.62,1.93-1.6,1.93s-1.59-.531-1.59-1.93V138.353Zm-3.08,10.382c0,3.134,1.65,4.925,4.67,4.925s4.67-1.791,4.67-4.925V138.549c0-3.134-1.65-4.925-4.67-4.925s-4.67,1.791-4.67,4.925v10.186Z\"
                          transform=\"translate(-1036.5 -125)\" />
                </svg>
            </a>
        </div>

        <div class=\"navbar-icon\">
            <span></span>
        </div>
        <!-- End of hidden navbar for mobiles -->

        <!-- navbar__menu-link clicked jquery -> event.preventDefoult() -->
        <div class=\"navbar\">

            <ul class=\"navbar__menu\">
                <li class=\"navbar__menu-item\">
                    <a class=\"navbar__menu-link active\" href=\"#\">Home</a>
                    <ul class=\"navbar__submenu\">
                        <li class=\"navbar__submenu-item\">
                            <a href=\"#\" class=\"navbar__submenu-link\">Home-1</a>
                        </li>

                        <li class=\"navbar__submenu-item\">
                            <a href=\"index2.html\" class=\"navbar__submenu-link\">Home-2</a>
                        </li>

                        <li class=\"navbar__submenu-item\">
                            <a href=\"index3.html\" class=\"navbar__submenu-link\">Home-3</a>
                        </li>
                    </ul>
                </li>

                <li class=\"navbar__menu-item\">
                    <a class=\"navbar__menu-link\" href=\"#\">Pages</a>
                    <ul class=\"navbar__submenu\">
                        <li class=\"navbar__submenu-item\">
                            <a href=\"cases-3_columns.html\" class=\"navbar__submenu-link\">Cases 3 columns</a>
                        </li>

                        <li class=\"navbar__submenu-item\">
                            <a href=\"cases-3_columns-2.html\" class=\"navbar__submenu-link\">Cases 3 columns 2</a>
                        </li>

                        <li class=\"navbar__submenu-item\">
                            <a href=\"cases-3_detail.html\" class=\"navbar__submenu-link\">Case details</a>
                        </li>

                        <li class=\"navbar__submenu-item\">
                            <a href=\"doctors-3_columns.html\" class=\"navbar__submenu-link\">Doctors 3 columns</a>
                        </li>

                        <li class=\"navbar__submenu-item\">
                            <a href=\"doctors-single_right.html\" class=\"navbar__submenu-link\">Doctor Single page
                                right</a>
                        </li>

                        <li class=\"navbar__submenu-item\">
                            <a href=\"doctors-single_left.html\" class=\"navbar__submenu-link\">Doctor Single page
                                left</a>
                        </li>
                    </ul>
                </li>

                <li class=\"navbar__menu-item\">
                    <a class=\"navbar__menu-link\" href=\"#\">Services</a>
                    <ul class=\"navbar__submenu\">
                        <li class=\"navbar__submenu-item\">
                            <a href=\"departments-3_column.html\" class=\"navbar__submenu-link\">Departments 3
                                columns</a>
                        </li>

                        <li class=\"navbar__submenu-item\">
                            <a href=\"departments-3_column_icon.html\" class=\"navbar__submenu-link\">Departments 3
                                columns icon</a>
                        </li>

                        <li class=\"navbar__submenu-item\">
                            <a href=\"departments-1_column.html\" class=\"navbar__submenu-link\">Departments 1
                                column</a>
                        </li>

                        <li class=\"navbar__submenu-item\">
                            <a href=\"departments-details_right.html\" class=\"navbar__submenu-link\">Department
                                Details right</a>
                        </li>

                        <li class=\"navbar__submenu-item\">
                            <a href=\"departments-details_left.html\" class=\"navbar__submenu-link\">Department
                                Details left</a>
                        </li>

                        <li class=\"navbar__submenu-item\">
                            <a href=\"departments-details.html\" class=\"navbar__submenu-link\">Department
                                Details</a>
                        </li>

                    </ul>
                </li>

                <li class=\"navbar__menu-item\">
                    <a class=\"navbar__menu-link\" href=\"#\">Shop</a>
                    <ul class=\"navbar__submenu\">
                        <li class=\"navbar__submenu-item\">
                            <a href=\"shop.html\" class=\"navbar__submenu-link\">Shop</a>
                        </li>

                        <li class=\"navbar__submenu-item\">
                            <a href=\"shop-product_detail.html\" class=\"navbar__submenu-link\">Shop Product
                                Detail</a>
                        </li>

                        <li class=\"navbar__submenu-item\">
                            <a href=\"shop-cart.html\" class=\"navbar__submenu-link\">Shop Cart</a>
                        </li>

                        <li class=\"navbar__submenu-item\">
                            <a href=\"shop-checkout.html\" class=\"navbar__submenu-link\">Shop Checkout</a>
                        </li>
                    </ul>
                </li>

                <li class=\"navbar__menu-item\">
                    <a class=\"navbar__menu-link\" href=\"#\">About Us</a>
                    <ul class=\"navbar__submenu\">
                        <li class=\"navbar__submenu-item\">
                            <a href=\"about.html\" class=\"navbar__submenu-link\">About Us</a>
                        </li>

                        <li class=\"navbar__submenu-item\">
                            <a href=\"faqs.html\" class=\"navbar__submenu-link\">FAQs</a>
                        </li>
                    </ul>
                </li>
                ";
        // line 259
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 260
            echo "                <li class=\"navbar__menu-item\">
                    <a class=\"navbar__menu-link\" href=\"";
            // line 261
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("membre_show", ["cin" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 261, $this->source); })()), "user", [], "any", false, false, false, 261), "cin", [], "any", false, false, false, 261)]), "html", null, true);
            echo "\">Welcome: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 261, $this->source); })()), "user", [], "any", false, false, false, 261), "prenom", [], "any", false, false, false, 261), "html", null, true);
            echo "</a>

                </li>
                ";
        }
        // line 265
        echo "
            </ul>







            <div class=\"navbar__right\">

                <div class=\"navbar__bag\">
                    <svg width=\"25.16\" height=\"26\" viewBox=\"0 0 25.16 25.125\">
                        <path id=\"bag.svg\" class=\"cls-3\"
                              d=\"M1049.15,437.286h-6.46l0.94,3.736a0.794,0.794,0,0,1-.58.951,0.677,0.677,0,0,1-.19.024,0.786,0.786,0,0,1-.76-0.6l-1.03-4.116h-8.99l-1.03,4.116a0.786,0.786,0,0,1-.76.6,0.677,0.677,0,0,1-.19-0.024,0.78,0.78,0,0,1-.57-0.951l0.93-3.736H1024v-1.569h6.85l1.82-7.258a0.784,0.784,0,1,1,1.52.382l-1.72,6.876h8.21l-1.72-6.876a0.784,0.784,0,1,1,1.52-.382l1.82,7.258h6.85v1.569Zm-22.01,3.089,1.48,11.043h15.91l1.48-11.043v-1.518h1.57l-0.01,1.674-1.66,12.458h-18.67l-1.67-12.562v-1.57h1.57v1.518Z\"
                              transform=\"translate(-1024 -427.875)\" /> </svg>
                    <span class=\"navbar__bag-count\">24</span>
                    <span class=\"navbar__bag-price\">\$36,89</span>

                    <!-- checkBox -->
                    <div class=\"checkBox\">
                        <ul class=\"products\">
                            <li class=\"products-item\">
                                <div class=\"img\">
                                    <img src=\"front/images/jpg/shop-arrivales3.jpg\">
                                </div>
                                <div class=\"text\">
                                    <h1 class=\"name\">Sunglasses</h1>
                                    <p class=\"price\"><span>25.00</span>\$</p>
                                </div>
                                <i class=\"fa fa-remove\"></i>
                            </li>
                            <li class=\"products-item\">
                                <div class=\"img\">
                                    <img src=\"front/images/jpg/shop-arrivales4.jpg\">
                                </div>
                                <div class=\"text\">
                                    <h1 class=\"name\">Vitamin D-3</h1>
                                    <p class=\"price\"><span>25.00</span>\$</p>
                                </div>
                                <i class=\"fa fa-remove\"></i>
                            </li>
                        </ul>
                        <div class=\"products-total\">
                            <span>Total</span>
                            <span><span>36.89</span>\$</span>
                        </div>
                        <a href=\"shop-checkout.html\" class=\"btn btn_pink\">Check out</a>
                    </div>
                </div>


                <div class=\"navbar__search searchBox-open\">
                    <svg width=\"24.71\" height=\"25.687\" viewBox=\"0 0 24.71 24.687\">
                        <path id=\"search.svg\" class=\"cls-3\"
                              d=\"M1144.4,440.468l8.19,8.178-3.47,3.467-8.19-8.178,1.18-1.177-1.38-1.385a7.878,7.878,0,1,1,1.11-1.11l1.38,1.383Zm-2.36-5.172a6.29,6.29,0,1,0-6.29,6.282A6.293,6.293,0,0,0,1142.04,435.3Zm8.33,13.35-3.61-3.6-1.24,1.245,3.6,3.6Zm-5.97-3.465,1.25-1.246-1.25-1.245-1.24,1.245Zm-11.79-9.885h-1.57a4.715,4.715,0,0,1,4.71-4.712v1.57A3.146,3.146,0,0,0,1132.61,435.3Z\"
                              transform=\"translate(-1127.88 -427.438)\" /></svg>
                </div>
                ";
        // line 323
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 323, $this->source); })()), "user", [], "any", false, false, false, 323)) {
            // line 324
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connexion");
            echo "\" class=\"btn btn-success\" >Login</a>
                    <a href=\"";
            // line 325
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("membre_new");
            echo "\" class=\"btn btn-success\" >Inscription</a>
                ";
        } else {
            // line 327
            echo "
                    <a class=\"btn btn-success\"  href=\"";
            // line 328
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deconnexion");
            echo "\">Deconnexion</a>

                ";
        }
        // line 331
        echo "            </div>
        </div>

    </div>
</header>
<!-- End of .header-middle -->
";
        // line 337
        $this->displayBlock('body', $context, $blocks);
        // line 340
        echo "<!-- Start of .footer -->
<footer class=\"footer\">
    <div class=\"footer__bg\">
        <div class=\"icon1\">
            <img src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/png-shapes/footer.png"), "html", null, true);
        echo "\">
        </div>
    </div>
    <!-- Start of .footer__top -->
    <div class=\"footer__top\">
        <div class=\"footer__logo\">
            <img src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/Logo.png"), "html", null, true);
        echo "\" alt=\"footer-logo\">
        </div>
        <div class=\"container\">
            <div>
                <div class=\"footer__top-blocks\">
                    <h1 class=\"title\">Contacts</h1>
                    <div class=\"content\">
                        <div class=\"content-item\">
                            <div class=\"icon\">
                                <svg width=\"24.375\" height=\"24.343\" viewBox=\"0 0 24.375 24.343\">
                                    <path id=\"phone.svg\" class=\"header-top__call-icon cls-1\"
                                          d=\"M831.817,365.478a10.864,10.864,0,0,0-10.852-10.851v-1.55a12.416,12.416,0,0,1,12.4,12.4h-1.551Zm-6.2,0a4.656,4.656,0,0,0-4.651-4.651v-1.55a6.208,6.208,0,0,1,6.2,6.2h-1.55Zm-4.651-9.3a9.312,9.312,0,0,1,9.3,9.3h-1.551a7.759,7.759,0,0,0-7.751-7.751v-1.55Zm3.779,13.4,1.938-1.937a0.578,0.578,0,0,1,.064-0.058,1.924,1.924,0,0,1,2.511-.006,0.72,0.72,0,0,1,.071.064l3.488,3.487a1.871,1.871,0,0,1,0,2.646l-2.325,2.326a5.527,5.527,0,0,1-3.942,1.314c-3.14,0-7.446-1.609-11.712-5.8l0.41-.418-0.417.41a19.929,19.929,0,0,1-5.5-9.163c-0.666-2.764-.288-5.19,1.01-6.489l2.325-2.325a1.917,1.917,0,0,1,2.647,0l3.488,3.488a0.8,0.8,0,0,1,.067.077,1.879,1.879,0,0,1-.009,2.5c-0.018.022-.038,0.043-0.058,0.064l-1.938,1.937a1.419,1.419,0,0,0,0,2l2.938,2.937h0l2.94,2.94A1.42,1.42,0,0,0,824.744,369.578Zm6.522,3.554,0.454-.454a0.322,0.322,0,0,0,0-.454l-3.434-3.433c-0.017-.015-0.034-0.029-0.049-0.045a0.277,0.277,0,0,0-.464,0c-0.015.014-.03,0.029-0.046,0.042l-0.4.4ZM817.25,359.116l0.4-.4a0.447,0.447,0,0,1,.042-0.045,0.328,0.328,0,0,0,0-.464,0.652,0.652,0,0,1-.05-0.055l-3.429-3.429a0.323,0.323,0,0,0-.455,0l-0.454.454Zm1.456,8.621h0l-2.94-2.94a2.97,2.97,0,0,1,0-4.2l0.388-.388-3.943-3.941-0.775.774c-0.9.9-1.129,2.827-.6,5.029A20.532,20.532,0,0,0,824.366,375.6c2.2,0.531,4.129.3,5.029-.6l0.775-.775-3.942-3.942-0.388.388a2.971,2.971,0,0,1-4.2,0Z\"
                                          transform=\"translate(-809 -353.063)\" /></svg>
                            </div>
                            <div class=\"text\">
                                <a href=\"tel:+18004567890\">+1 800 456 7890</a>
                                <a href=\"tel:+18004567890\">+1 800 456 7890</a>
                            </div>
                        </div>
                        <div class=\"content-item\">
                            <div class=\"icon\">
                                <svg width=\"18.88\" height=\"25.719\" viewBox=\"0 0 18.88 25.719\">
                                    <path id=\"address.svg\" class=\"header-top__call-icon cls-1\"
                                          d=\"M1033.75,377.71l-7.99-11.282a9.433,9.433,0,1,1,16-.04Zm0-24.133a7.845,7.845,0,0,0-6.68,11.983l6.68,9.43,6.7-9.468A7.841,7.841,0,0,0,1033.75,353.577Zm0,11.78a3.927,3.927,0,1,1,3.93-3.928A3.931,3.931,0,0,1,1033.75,365.357Zm0-6.283a2.356,2.356,0,1,0,2.36,2.355A2.362,2.362,0,0,0,1033.75,359.074Z\"
                                          transform=\"translate(-1024.31 -352)\" /></svg>
                            </div>
                            <div class=\"text\">
                                <p>1560 Holden Street San Diego, CA 92139</p>
                                <a href=\"#\" class=\"location\">Get directions on the map <i
                                            class=\"fa fa-map-marker\"></i></a>
                            </div>
                        </div>
                        <div class=\"content-item\">
                            <div class=\"icon\">
                                <svg width=\"25.16\" height=\"25.157\" viewBox=\"0 0 25.16 25.157\">
                                    <path id=\"envelope.svg\" class=\"header-top__call-icon cls-1\"
                                          d=\"M1239.84,377.423v-16.85l3.15-2.723v-5.556h18.87v5.556l3.14,2.723v16.85h-25.16Zm22.48-1.57-6.57-6.557-3.33,2.884-3.33-2.884-6.56,6.557h19.79Zm-20.91-1.11,6.49-6.478-6.49-5.614v12.092Zm1.58-14.814-1.16,1,1.16,1v-2.005Zm17.29,3.359v-9.424h-15.72v9.424h-0.01l7.87,6.813,7.87-6.813h-0.01Zm1.58-3.359v2.005l1.15-1Zm1.57,2.722-6.49,5.614,6.49,6.478V362.651Zm-11.8-4.076h1.58v1.571h-1.58v-1.571Zm4.72,1.571h-1.57v-1.571h1.57v1.571Zm-7.86-1.571h1.57v1.571h-1.57v-1.571Z\"
                                          transform=\"translate(-1239.84 -352.281)\" /> </svg>
                            </div>
                            <div class=\"text\">
                                <a href=\"mailto:inbox@medihelp.com\">inbox@medihelp.com</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"footer__top-blocks\">
                    <h1 class=\"title\">Opening hours</h1>
                    <div class=\"content\">
                        <ul class=\"work-date\">
                            <li><span>Mon - Thu</span><b>08:00 - 18:00</b></li>
                            <li><span>Wed - Thur</span><b>09:00 - 19:00</b></li>
                            <li><span>Friday</span><b>10:00 - 22:00</b></li>
                            <li><span>Saturday</span><b>09:00 - 14:00</b></li>
                            <li><span>Sunday</span><b>Closed</b></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div>
                <div class=\"footer__top-blocks\">
                    <h1 class=\"title\">Subscribe</h1>
                    <div class=\"content\">
                        <p class=\"text\">To receive email releases, simply provide us with your email address below.
                        </p>
                        <form>
                            <div class=\"email\">
                                <input type=\"email\" placeholder=\"Email Addres\">
                                <button type=\"submit\"><i class=\"fa fa-send\"></i></button>
                            </div>
                            <label>* Personal data will be encrypted</label>
                        </form>
                        <div class=\"socials\">
                            <a href=\"#\" title=\"facebook\"><i class=\"fa fa-facebook\"></i></a>
                            <a href=\"#\" title=\"twitter\"><i class=\"fa fa-twitter\"></i></a>
                            <a href=\"#\" title=\"instagram\"><i class=\"fa fa-instagram\"></i></a>
                        </div>
                    </div>
                </div>

                <div class=\"footer__top-blocks\">
                    <h1 class=\"title\">Company</h1>
                    <div class=\"content\">
                        <ul class=\"menu\">
                            <li>
                                <a href=\"#about\"><i class=\"fa fa-angle-right\"></i>About Us</a>
                            </li>
                            <li>
                                <a href=\"#departments\"><i class=\"fa fa-angle-right\"></i>Our Departments</a>
                            </li>
                            <li>
                                <a href=\"#services\"><i class=\"fa fa-angle-right\"></i>Services</a>
                            </li>
                            <li>
                                <a href=\"#why-us\"><i class=\"fa fa-angle-right\"></i>Why Us</a>
                            </li>
                            <li>
                                <a href=\"#faq\"><i class=\"fa fa-angle-right\"></i>FAQ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of .footer__top -->



</footer>
<!-- End of .footer -->



";
        // line 465
        $this->displayBlock('js', $context, $blocks);
        // line 499
        echo "

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 12
        echo "            MindSpace
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 15
        echo "

        <!-- wow animation style -->
        <!-- <link rel=\"stylesheet\" href=\"./css/animate.css\"> -->

        <!-- owl-carousel -->
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/owl.carousel.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/owl.theme.default.min.css"), "html", null, true);
        echo "\">

        <!-- bootstrap style -->
        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/bootstrap.min.css"), "html", null, true);
        echo "\">

        <!-- template style -->
        <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/main.css"), "html", null, true);
        echo "\">

        <!-- Responsive -->
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\">

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 337
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 338
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 465
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 466
        echo "    <!-- Scripts + Jquery plagins -->

    <!-- .preloader  -->
    <script src=";
        // line 469
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/my-preloader.js"), "html", null, true);
        echo "></script>

    <!-- jQuery -->
    <script src=";
        // line 472
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jQuery-3.4.1.js"), "html", null, true);
        echo "></script>

    <!-- wow js animation -->
    <script src=";
        // line 475
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/wow.min.js"), "html", null, true);
        echo "></script>

    <!-- owl-carousel js -->
    <script src=";
        // line 478
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/owl.carousel.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 479
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/carousel.js"), "html", null, true);
        echo "></script>

    <!-- fancybox 3 js -->
    <script src=";
        // line 482
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.fancybox.js"), "html", null, true);
        echo "></script>

    <!-- Counter up -->
    <script src=";
        // line 485
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.waypoints.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 486
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.countup.min.js"), "html", null, true);
        echo "></script>

    <!-- bootstrap js -->
    <script src=";
        // line 489
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/bootstrap.min.js"), "html", null, true);
        echo "></script>

    <!-- customer js -->
    <script src=";
        // line 492
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/index.js"), "html", null, true);
        echo "></script>
    <!-- Scripts + Jquery plagins -->

    <!-- isotope filter card -->
    <script src=";
        // line 496
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/isotope.pkgd.min.js"), "html", null, true);
        echo "></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  712 => 496,  705 => 492,  699 => 489,  693 => 486,  689 => 485,  683 => 482,  677 => 479,  673 => 478,  667 => 475,  661 => 472,  655 => 469,  650 => 466,  640 => 465,  629 => 338,  619 => 337,  602 => 28,  596 => 25,  590 => 22,  586 => 21,  578 => 15,  568 => 14,  557 => 12,  547 => 11,  535 => 499,  533 => 465,  415 => 350,  406 => 344,  400 => 340,  398 => 337,  390 => 331,  384 => 328,  381 => 327,  376 => 325,  371 => 324,  369 => 323,  309 => 265,  300 => 261,  297 => 260,  295 => 259,  69 => 35,  67 => 14,  64 => 13,  62 => 11,  58 => 10,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>



    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"icon\" href=\"{{ asset('front/images/icon.png') }}\">
    <title>{% block title %}
            MindSpace
        {% endblock %}</title>
    {% block css %}


        <!-- wow animation style -->
        <!-- <link rel=\"stylesheet\" href=\"./css/animate.css\"> -->

        <!-- owl-carousel -->
        <link rel=\"stylesheet\" href=\"{{ asset('front/css/owl.carousel.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('front/css/owl.theme.default.min.css') }}\">

        <!-- bootstrap style -->
        <link rel=\"stylesheet\" href=\"{{ asset('front/css/bootstrap.min.css') }}\">

        <!-- template style -->
        <link rel=\"stylesheet\" href=\"{{ asset('front/css/main.css') }}\">

        <!-- Responsive -->
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\">

    {% endblock %}
</head>




<!-- Start of .header-top -->
<header class=\"header-top\">
    <div class=\"container\">

        <!-- header-top__logo -->
        <div class=\"header-top__logo\">
            <a href=\"index.html\">
                <svg id=\"logo-white.svg\" width=\"116.09\" height=\"39\" viewBox=\"0 0 116.09 39\">
                    <path class=\"cls-1\"
                          d=\"M1045.89,144.338l5.7-9.565,5.87,8.679,5.87-8.856,5.87,9.742,7.83,0.176s-3.69,9.734-19.57,19.485c0,0-9.61-5.766-14.95-12.575h4.81a69.279,69.279,0,0,0,10.14,8.146s8.41-5.393,12.81-11.336h-3.38l-3.74-6.376-5.69,8.5-5.7-8.5-3.73,6.376h-8.01s-9.48-12.717,2.67-21.43c7.78-4.687,14.59,1.239,14.59,1.239s6.41-5.146,13.88-1.948,7.96,12.345,6.94,15.231h-3.74s2.4-9.573-5.87-12.22a10.836,10.836,0,0,0-10.85,3.365s-4.05-4.127-9.26-3.72-11.16,5.969-6.58,15.587h4.09Z\"
                          transform=\"translate(-1036.5 -125)\" />
                    <path id=\"IBNSINO\" class=\"cls-2\"
                          d=\"M1087.12,153.436h3.08V133.848h-3.08v19.588Zm9.96-19.588h-4.64v19.588h4.84c3.08,0,4.67-1.623,4.67-4.645V147.2c0-2.071-.64-3.526-2.29-4.17V142.97c1.37-.643,1.99-1.9,1.99-3.917v-0.7C1101.65,135.331,1100.27,133.848,1097.08,133.848Zm-0.19,10.773c1.4,0,1.98.56,1.98,2.379v1.707c0,1.455-.55,1.931-1.59,1.931h-1.76v-6.017h1.37Zm0.11-7.975c1.09,0,1.57.616,1.57,2.015v1.091c0,1.567-.7,2.071-1.85,2.071h-1.2v-5.177H1097Zm13.38,16.79h3.16V133.848h-2.74v11.725h-0.05l-3.11-11.725h-3.86v19.588h2.77V139.249h0.05Z\"
                          transform=\"translate(-1036.5 -125)\" />
                    <path id=\"IBNSINO_copy\" data-name=\"IBNSINO copy\" class=\"cls-1\"
                          d=\"M1115.37,138.549c0,2.239.81,3.862,3.39,6.128,2.01,1.763,2.63,2.827,2.63,4.254,0,1.4-.62,1.9-1.6,1.9s-1.59-.5-1.59-1.9v-1.4h-2.91v1.2c0,3.134,1.56,4.925,4.59,4.925s4.58-1.791,4.58-4.925c0-2.239-.81-3.862-3.38-6.128-2.02-1.763-2.63-2.827-2.63-4.254,0-1.4.56-1.93,1.54-1.93s1.54,0.531,1.54,1.93v0.812h2.91v-0.616c0-3.134-1.54-4.925-4.54-4.925S1115.37,135.415,1115.37,138.549Zm10.86,14.887h3.08V133.848h-3.08v19.588Zm11.9,0h3.16V133.848h-2.74v11.725h-0.06l-3.1-11.725h-3.86v19.588h2.77V139.249h0.05Zm8.21-15.083c0-1.4.61-1.93,1.59-1.93s1.6,0.531,1.6,1.93v10.578c0,1.4-.62,1.93-1.6,1.93s-1.59-.531-1.59-1.93V138.353Zm-3.08,10.382c0,3.134,1.65,4.925,4.67,4.925s4.67-1.791,4.67-4.925V138.549c0-3.134-1.65-4.925-4.67-4.925s-4.67,1.791-4.67,4.925v10.186Z\"
                          transform=\"translate(-1036.5 -125)\" />
                </svg>
            </a>
        </div>
        <!-- End of .header-top__logo -->

        <!-- .header-top__call -->
        <div class=\"header-top__call\">

            <!-- header-top__call-item -->
            <div class=\"header-top__call-item\">
                <svg width=\"24.375\" height=\"24.343\" viewBox=\"0 0 24.375 24.343\">
                    <path id=\"phone.svg\" class=\"header-top__call-icon cls-1\"
                          d=\"M831.817,365.478a10.864,10.864,0,0,0-10.852-10.851v-1.55a12.416,12.416,0,0,1,12.4,12.4h-1.551Zm-6.2,0a4.656,4.656,0,0,0-4.651-4.651v-1.55a6.208,6.208,0,0,1,6.2,6.2h-1.55Zm-4.651-9.3a9.312,9.312,0,0,1,9.3,9.3h-1.551a7.759,7.759,0,0,0-7.751-7.751v-1.55Zm3.779,13.4,1.938-1.937a0.578,0.578,0,0,1,.064-0.058,1.924,1.924,0,0,1,2.511-.006,0.72,0.72,0,0,1,.071.064l3.488,3.487a1.871,1.871,0,0,1,0,2.646l-2.325,2.326a5.527,5.527,0,0,1-3.942,1.314c-3.14,0-7.446-1.609-11.712-5.8l0.41-.418-0.417.41a19.929,19.929,0,0,1-5.5-9.163c-0.666-2.764-.288-5.19,1.01-6.489l2.325-2.325a1.917,1.917,0,0,1,2.647,0l3.488,3.488a0.8,0.8,0,0,1,.067.077,1.879,1.879,0,0,1-.009,2.5c-0.018.022-.038,0.043-0.058,0.064l-1.938,1.937a1.419,1.419,0,0,0,0,2l2.938,2.937h0l2.94,2.94A1.42,1.42,0,0,0,824.744,369.578Zm6.522,3.554,0.454-.454a0.322,0.322,0,0,0,0-.454l-3.434-3.433c-0.017-.015-0.034-0.029-0.049-0.045a0.277,0.277,0,0,0-.464,0c-0.015.014-.03,0.029-0.046,0.042l-0.4.4ZM817.25,359.116l0.4-.4a0.447,0.447,0,0,1,.042-0.045,0.328,0.328,0,0,0,0-.464,0.652,0.652,0,0,1-.05-0.055l-3.429-3.429a0.323,0.323,0,0,0-.455,0l-0.454.454Zm1.456,8.621h0l-2.94-2.94a2.97,2.97,0,0,1,0-4.2l0.388-.388-3.943-3.941-0.775.774c-0.9.9-1.129,2.827-.6,5.029A20.532,20.532,0,0,0,824.366,375.6c2.2,0.531,4.129.3,5.029-.6l0.775-.775-3.942-3.942-0.388.388a2.971,2.971,0,0,1-4.2,0Z\"
                          transform=\"translate(-809 -353.063)\" /></svg>
                <div class=\"header-top__call-text\">
                    <p>Call us for any question</p>
                    <a href=\"tel:+1 800 456 7890\">28299010</a>
                </div>
            </div>
            <!-- End of .header-top__call-item -->

            <!-- header-top__call-item -->
            <div class=\"header-top__call-item\">
                <svg width=\"18.88\" height=\"25.719\" viewBox=\"0 0 18.88 25.719\">
                    <path id=\"address.svg\" class=\"header-top__call-icon cls-1\"
                          d=\"M1033.75,377.71l-7.99-11.282a9.433,9.433,0,1,1,16-.04Zm0-24.133a7.845,7.845,0,0,0-6.68,11.983l6.68,9.43,6.7-9.468A7.841,7.841,0,0,0,1033.75,353.577Zm0,11.78a3.927,3.927,0,1,1,3.93-3.928A3.931,3.931,0,0,1,1033.75,365.357Zm0-6.283a2.356,2.356,0,1,0,2.36,2.355A2.362,2.362,0,0,0,1033.75,359.074Z\"
                          transform=\"translate(-1024.31 -352)\" /></svg>
                <div class=\"header-top__call-text\">
                    <p>Ariana soghra </p>
                    <a href=\"\">Tunis</a>
                </div>
            </div>
            <!-- End of .header-top__call-item -->

            <!-- header-top__call-item -->
            <div class=\"header-top__call-item\">
                <svg width=\"25.16\" height=\"25.157\" viewBox=\"0 0 25.16 25.157\">
                    <path id=\"envelope.svg\" class=\"header-top__call-icon cls-1\"
                          d=\"M1239.84,377.423v-16.85l3.15-2.723v-5.556h18.87v5.556l3.14,2.723v16.85h-25.16Zm22.48-1.57-6.57-6.557-3.33,2.884-3.33-2.884-6.56,6.557h19.79Zm-20.91-1.11,6.49-6.478-6.49-5.614v12.092Zm1.58-14.814-1.16,1,1.16,1v-2.005Zm17.29,3.359v-9.424h-15.72v9.424h-0.01l7.87,6.813,7.87-6.813h-0.01Zm1.58-3.359v2.005l1.15-1Zm1.57,2.722-6.49,5.614,6.49,6.478V362.651Zm-11.8-4.076h1.58v1.571h-1.58v-1.571Zm4.72,1.571h-1.57v-1.571h1.57v1.571Zm-7.86-1.571h1.57v1.571h-1.57v-1.571Z\"
                          transform=\"translate(-1239.84 -352.281)\" /> </svg>
                <div class=\"header-top__call-text\">
                    <p>Office Hour: 09:00am - 04:00pm</p>
                    <a href=\"mailto:inbox@medihelp.com\">Mindspace@mindspace.com</a>
                </div>
            </div>
            <!-- End of .header-top__call-item -->

        </div>
        <!-- End of .header-top__call -->
    </div>
</header>
<!-- End of .header-top -->


<!-- Start of .header-middle -->
<header class=\"header-middle header-middle_white-transparent\">
    <div class=\"container\">

        <!-- hidden navbar for mobiles -->
        <div class=\"navbar-logo\">
            <a href=\"index.html\">
                <svg id=\"logo-white.svg\" width=\"116.09\" height=\"39\" viewBox=\"0 0 116.09 39\">
                    <path class=\"cls-1\"
                          d=\"M1045.89,144.338l5.7-9.565,5.87,8.679,5.87-8.856,5.87,9.742,7.83,0.176s-3.69,9.734-19.57,19.485c0,0-9.61-5.766-14.95-12.575h4.81a69.279,69.279,0,0,0,10.14,8.146s8.41-5.393,12.81-11.336h-3.38l-3.74-6.376-5.69,8.5-5.7-8.5-3.73,6.376h-8.01s-9.48-12.717,2.67-21.43c7.78-4.687,14.59,1.239,14.59,1.239s6.41-5.146,13.88-1.948,7.96,12.345,6.94,15.231h-3.74s2.4-9.573-5.87-12.22a10.836,10.836,0,0,0-10.85,3.365s-4.05-4.127-9.26-3.72-11.16,5.969-6.58,15.587h4.09Z\"
                          transform=\"translate(-1036.5 -125)\" />
                    <path id=\"IBNSINO\" class=\"cls-3\"
                          d=\"M1087.12,153.436h3.08V133.848h-3.08v19.588Zm9.96-19.588h-4.64v19.588h4.84c3.08,0,4.67-1.623,4.67-4.645V147.2c0-2.071-.64-3.526-2.29-4.17V142.97c1.37-.643,1.99-1.9,1.99-3.917v-0.7C1101.65,135.331,1100.27,133.848,1097.08,133.848Zm-0.19,10.773c1.4,0,1.98.56,1.98,2.379v1.707c0,1.455-.55,1.931-1.59,1.931h-1.76v-6.017h1.37Zm0.11-7.975c1.09,0,1.57.616,1.57,2.015v1.091c0,1.567-.7,2.071-1.85,2.071h-1.2v-5.177H1097Zm13.38,16.79h3.16V133.848h-2.74v11.725h-0.05l-3.11-11.725h-3.86v19.588h2.77V139.249h0.05Z\"
                          transform=\"translate(-1036.5 -125)\" />
                    <path id=\"IBNSINO_copy\" data-name=\"IBNSINO copy\" class=\"cls-1\"
                          d=\"M1115.37,138.549c0,2.239.81,3.862,3.39,6.128,2.01,1.763,2.63,2.827,2.63,4.254,0,1.4-.62,1.9-1.6,1.9s-1.59-.5-1.59-1.9v-1.4h-2.91v1.2c0,3.134,1.56,4.925,4.59,4.925s4.58-1.791,4.58-4.925c0-2.239-.81-3.862-3.38-6.128-2.02-1.763-2.63-2.827-2.63-4.254,0-1.4.56-1.93,1.54-1.93s1.54,0.531,1.54,1.93v0.812h2.91v-0.616c0-3.134-1.54-4.925-4.54-4.925S1115.37,135.415,1115.37,138.549Zm10.86,14.887h3.08V133.848h-3.08v19.588Zm11.9,0h3.16V133.848h-2.74v11.725h-0.06l-3.1-11.725h-3.86v19.588h2.77V139.249h0.05Zm8.21-15.083c0-1.4.61-1.93,1.59-1.93s1.6,0.531,1.6,1.93v10.578c0,1.4-.62,1.93-1.6,1.93s-1.59-.531-1.59-1.93V138.353Zm-3.08,10.382c0,3.134,1.65,4.925,4.67,4.925s4.67-1.791,4.67-4.925V138.549c0-3.134-1.65-4.925-4.67-4.925s-4.67,1.791-4.67,4.925v10.186Z\"
                          transform=\"translate(-1036.5 -125)\" />
                </svg>
            </a>
        </div>

        <div class=\"navbar-icon\">
            <span></span>
        </div>
        <!-- End of hidden navbar for mobiles -->

        <!-- navbar__menu-link clicked jquery -> event.preventDefoult() -->
        <div class=\"navbar\">

            <ul class=\"navbar__menu\">
                <li class=\"navbar__menu-item\">
                    <a class=\"navbar__menu-link active\" href=\"#\">Home</a>
                    <ul class=\"navbar__submenu\">
                        <li class=\"navbar__submenu-item\">
                            <a href=\"#\" class=\"navbar__submenu-link\">Home-1</a>
                        </li>

                        <li class=\"navbar__submenu-item\">
                            <a href=\"index2.html\" class=\"navbar__submenu-link\">Home-2</a>
                        </li>

                        <li class=\"navbar__submenu-item\">
                            <a href=\"index3.html\" class=\"navbar__submenu-link\">Home-3</a>
                        </li>
                    </ul>
                </li>

                <li class=\"navbar__menu-item\">
                    <a class=\"navbar__menu-link\" href=\"#\">Pages</a>
                    <ul class=\"navbar__submenu\">
                        <li class=\"navbar__submenu-item\">
                            <a href=\"cases-3_columns.html\" class=\"navbar__submenu-link\">Cases 3 columns</a>
                        </li>

                        <li class=\"navbar__submenu-item\">
                            <a href=\"cases-3_columns-2.html\" class=\"navbar__submenu-link\">Cases 3 columns 2</a>
                        </li>

                        <li class=\"navbar__submenu-item\">
                            <a href=\"cases-3_detail.html\" class=\"navbar__submenu-link\">Case details</a>
                        </li>

                        <li class=\"navbar__submenu-item\">
                            <a href=\"doctors-3_columns.html\" class=\"navbar__submenu-link\">Doctors 3 columns</a>
                        </li>

                        <li class=\"navbar__submenu-item\">
                            <a href=\"doctors-single_right.html\" class=\"navbar__submenu-link\">Doctor Single page
                                right</a>
                        </li>

                        <li class=\"navbar__submenu-item\">
                            <a href=\"doctors-single_left.html\" class=\"navbar__submenu-link\">Doctor Single page
                                left</a>
                        </li>
                    </ul>
                </li>

                <li class=\"navbar__menu-item\">
                    <a class=\"navbar__menu-link\" href=\"#\">Services</a>
                    <ul class=\"navbar__submenu\">
                        <li class=\"navbar__submenu-item\">
                            <a href=\"departments-3_column.html\" class=\"navbar__submenu-link\">Departments 3
                                columns</a>
                        </li>

                        <li class=\"navbar__submenu-item\">
                            <a href=\"departments-3_column_icon.html\" class=\"navbar__submenu-link\">Departments 3
                                columns icon</a>
                        </li>

                        <li class=\"navbar__submenu-item\">
                            <a href=\"departments-1_column.html\" class=\"navbar__submenu-link\">Departments 1
                                column</a>
                        </li>

                        <li class=\"navbar__submenu-item\">
                            <a href=\"departments-details_right.html\" class=\"navbar__submenu-link\">Department
                                Details right</a>
                        </li>

                        <li class=\"navbar__submenu-item\">
                            <a href=\"departments-details_left.html\" class=\"navbar__submenu-link\">Department
                                Details left</a>
                        </li>

                        <li class=\"navbar__submenu-item\">
                            <a href=\"departments-details.html\" class=\"navbar__submenu-link\">Department
                                Details</a>
                        </li>

                    </ul>
                </li>

                <li class=\"navbar__menu-item\">
                    <a class=\"navbar__menu-link\" href=\"#\">Shop</a>
                    <ul class=\"navbar__submenu\">
                        <li class=\"navbar__submenu-item\">
                            <a href=\"shop.html\" class=\"navbar__submenu-link\">Shop</a>
                        </li>

                        <li class=\"navbar__submenu-item\">
                            <a href=\"shop-product_detail.html\" class=\"navbar__submenu-link\">Shop Product
                                Detail</a>
                        </li>

                        <li class=\"navbar__submenu-item\">
                            <a href=\"shop-cart.html\" class=\"navbar__submenu-link\">Shop Cart</a>
                        </li>

                        <li class=\"navbar__submenu-item\">
                            <a href=\"shop-checkout.html\" class=\"navbar__submenu-link\">Shop Checkout</a>
                        </li>
                    </ul>
                </li>

                <li class=\"navbar__menu-item\">
                    <a class=\"navbar__menu-link\" href=\"#\">About Us</a>
                    <ul class=\"navbar__submenu\">
                        <li class=\"navbar__submenu-item\">
                            <a href=\"about.html\" class=\"navbar__submenu-link\">About Us</a>
                        </li>

                        <li class=\"navbar__submenu-item\">
                            <a href=\"faqs.html\" class=\"navbar__submenu-link\">FAQs</a>
                        </li>
                    </ul>
                </li>
                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                <li class=\"navbar__menu-item\">
                    <a class=\"navbar__menu-link\" href=\"{{ path('membre_show', {'cin': app.user.cin}) }}\">Welcome: {{ app.user.prenom }}</a>

                </li>
                {% endif %}

            </ul>







            <div class=\"navbar__right\">

                <div class=\"navbar__bag\">
                    <svg width=\"25.16\" height=\"26\" viewBox=\"0 0 25.16 25.125\">
                        <path id=\"bag.svg\" class=\"cls-3\"
                              d=\"M1049.15,437.286h-6.46l0.94,3.736a0.794,0.794,0,0,1-.58.951,0.677,0.677,0,0,1-.19.024,0.786,0.786,0,0,1-.76-0.6l-1.03-4.116h-8.99l-1.03,4.116a0.786,0.786,0,0,1-.76.6,0.677,0.677,0,0,1-.19-0.024,0.78,0.78,0,0,1-.57-0.951l0.93-3.736H1024v-1.569h6.85l1.82-7.258a0.784,0.784,0,1,1,1.52.382l-1.72,6.876h8.21l-1.72-6.876a0.784,0.784,0,1,1,1.52-.382l1.82,7.258h6.85v1.569Zm-22.01,3.089,1.48,11.043h15.91l1.48-11.043v-1.518h1.57l-0.01,1.674-1.66,12.458h-18.67l-1.67-12.562v-1.57h1.57v1.518Z\"
                              transform=\"translate(-1024 -427.875)\" /> </svg>
                    <span class=\"navbar__bag-count\">24</span>
                    <span class=\"navbar__bag-price\">\$36,89</span>

                    <!-- checkBox -->
                    <div class=\"checkBox\">
                        <ul class=\"products\">
                            <li class=\"products-item\">
                                <div class=\"img\">
                                    <img src=\"front/images/jpg/shop-arrivales3.jpg\">
                                </div>
                                <div class=\"text\">
                                    <h1 class=\"name\">Sunglasses</h1>
                                    <p class=\"price\"><span>25.00</span>\$</p>
                                </div>
                                <i class=\"fa fa-remove\"></i>
                            </li>
                            <li class=\"products-item\">
                                <div class=\"img\">
                                    <img src=\"front/images/jpg/shop-arrivales4.jpg\">
                                </div>
                                <div class=\"text\">
                                    <h1 class=\"name\">Vitamin D-3</h1>
                                    <p class=\"price\"><span>25.00</span>\$</p>
                                </div>
                                <i class=\"fa fa-remove\"></i>
                            </li>
                        </ul>
                        <div class=\"products-total\">
                            <span>Total</span>
                            <span><span>36.89</span>\$</span>
                        </div>
                        <a href=\"shop-checkout.html\" class=\"btn btn_pink\">Check out</a>
                    </div>
                </div>


                <div class=\"navbar__search searchBox-open\">
                    <svg width=\"24.71\" height=\"25.687\" viewBox=\"0 0 24.71 24.687\">
                        <path id=\"search.svg\" class=\"cls-3\"
                              d=\"M1144.4,440.468l8.19,8.178-3.47,3.467-8.19-8.178,1.18-1.177-1.38-1.385a7.878,7.878,0,1,1,1.11-1.11l1.38,1.383Zm-2.36-5.172a6.29,6.29,0,1,0-6.29,6.282A6.293,6.293,0,0,0,1142.04,435.3Zm8.33,13.35-3.61-3.6-1.24,1.245,3.6,3.6Zm-5.97-3.465,1.25-1.246-1.25-1.245-1.24,1.245Zm-11.79-9.885h-1.57a4.715,4.715,0,0,1,4.71-4.712v1.57A3.146,3.146,0,0,0,1132.61,435.3Z\"
                              transform=\"translate(-1127.88 -427.438)\" /></svg>
                </div>
                {% if not app.user %}
                    <a href=\"{{ path('connexion') }}\" class=\"btn btn-success\" >Login</a>
                    <a href=\"{{ path('membre_new') }}\" class=\"btn btn-success\" >Inscription</a>
                {% else %}

                    <a class=\"btn btn-success\"  href=\"{{ path('deconnexion') }}\">Deconnexion</a>

                {% endif %}
            </div>
        </div>

    </div>
</header>
<!-- End of .header-middle -->
{% block body %}

{% endblock %}
<!-- Start of .footer -->
<footer class=\"footer\">
    <div class=\"footer__bg\">
        <div class=\"icon1\">
            <img src=\"{{ asset('front/images/png-shapes/footer.png') }}\">
        </div>
    </div>
    <!-- Start of .footer__top -->
    <div class=\"footer__top\">
        <div class=\"footer__logo\">
            <img src=\"{{ asset('front/images/Logo.png') }}\" alt=\"footer-logo\">
        </div>
        <div class=\"container\">
            <div>
                <div class=\"footer__top-blocks\">
                    <h1 class=\"title\">Contacts</h1>
                    <div class=\"content\">
                        <div class=\"content-item\">
                            <div class=\"icon\">
                                <svg width=\"24.375\" height=\"24.343\" viewBox=\"0 0 24.375 24.343\">
                                    <path id=\"phone.svg\" class=\"header-top__call-icon cls-1\"
                                          d=\"M831.817,365.478a10.864,10.864,0,0,0-10.852-10.851v-1.55a12.416,12.416,0,0,1,12.4,12.4h-1.551Zm-6.2,0a4.656,4.656,0,0,0-4.651-4.651v-1.55a6.208,6.208,0,0,1,6.2,6.2h-1.55Zm-4.651-9.3a9.312,9.312,0,0,1,9.3,9.3h-1.551a7.759,7.759,0,0,0-7.751-7.751v-1.55Zm3.779,13.4,1.938-1.937a0.578,0.578,0,0,1,.064-0.058,1.924,1.924,0,0,1,2.511-.006,0.72,0.72,0,0,1,.071.064l3.488,3.487a1.871,1.871,0,0,1,0,2.646l-2.325,2.326a5.527,5.527,0,0,1-3.942,1.314c-3.14,0-7.446-1.609-11.712-5.8l0.41-.418-0.417.41a19.929,19.929,0,0,1-5.5-9.163c-0.666-2.764-.288-5.19,1.01-6.489l2.325-2.325a1.917,1.917,0,0,1,2.647,0l3.488,3.488a0.8,0.8,0,0,1,.067.077,1.879,1.879,0,0,1-.009,2.5c-0.018.022-.038,0.043-0.058,0.064l-1.938,1.937a1.419,1.419,0,0,0,0,2l2.938,2.937h0l2.94,2.94A1.42,1.42,0,0,0,824.744,369.578Zm6.522,3.554,0.454-.454a0.322,0.322,0,0,0,0-.454l-3.434-3.433c-0.017-.015-0.034-0.029-0.049-0.045a0.277,0.277,0,0,0-.464,0c-0.015.014-.03,0.029-0.046,0.042l-0.4.4ZM817.25,359.116l0.4-.4a0.447,0.447,0,0,1,.042-0.045,0.328,0.328,0,0,0,0-.464,0.652,0.652,0,0,1-.05-0.055l-3.429-3.429a0.323,0.323,0,0,0-.455,0l-0.454.454Zm1.456,8.621h0l-2.94-2.94a2.97,2.97,0,0,1,0-4.2l0.388-.388-3.943-3.941-0.775.774c-0.9.9-1.129,2.827-.6,5.029A20.532,20.532,0,0,0,824.366,375.6c2.2,0.531,4.129.3,5.029-.6l0.775-.775-3.942-3.942-0.388.388a2.971,2.971,0,0,1-4.2,0Z\"
                                          transform=\"translate(-809 -353.063)\" /></svg>
                            </div>
                            <div class=\"text\">
                                <a href=\"tel:+18004567890\">+1 800 456 7890</a>
                                <a href=\"tel:+18004567890\">+1 800 456 7890</a>
                            </div>
                        </div>
                        <div class=\"content-item\">
                            <div class=\"icon\">
                                <svg width=\"18.88\" height=\"25.719\" viewBox=\"0 0 18.88 25.719\">
                                    <path id=\"address.svg\" class=\"header-top__call-icon cls-1\"
                                          d=\"M1033.75,377.71l-7.99-11.282a9.433,9.433,0,1,1,16-.04Zm0-24.133a7.845,7.845,0,0,0-6.68,11.983l6.68,9.43,6.7-9.468A7.841,7.841,0,0,0,1033.75,353.577Zm0,11.78a3.927,3.927,0,1,1,3.93-3.928A3.931,3.931,0,0,1,1033.75,365.357Zm0-6.283a2.356,2.356,0,1,0,2.36,2.355A2.362,2.362,0,0,0,1033.75,359.074Z\"
                                          transform=\"translate(-1024.31 -352)\" /></svg>
                            </div>
                            <div class=\"text\">
                                <p>1560 Holden Street San Diego, CA 92139</p>
                                <a href=\"#\" class=\"location\">Get directions on the map <i
                                            class=\"fa fa-map-marker\"></i></a>
                            </div>
                        </div>
                        <div class=\"content-item\">
                            <div class=\"icon\">
                                <svg width=\"25.16\" height=\"25.157\" viewBox=\"0 0 25.16 25.157\">
                                    <path id=\"envelope.svg\" class=\"header-top__call-icon cls-1\"
                                          d=\"M1239.84,377.423v-16.85l3.15-2.723v-5.556h18.87v5.556l3.14,2.723v16.85h-25.16Zm22.48-1.57-6.57-6.557-3.33,2.884-3.33-2.884-6.56,6.557h19.79Zm-20.91-1.11,6.49-6.478-6.49-5.614v12.092Zm1.58-14.814-1.16,1,1.16,1v-2.005Zm17.29,3.359v-9.424h-15.72v9.424h-0.01l7.87,6.813,7.87-6.813h-0.01Zm1.58-3.359v2.005l1.15-1Zm1.57,2.722-6.49,5.614,6.49,6.478V362.651Zm-11.8-4.076h1.58v1.571h-1.58v-1.571Zm4.72,1.571h-1.57v-1.571h1.57v1.571Zm-7.86-1.571h1.57v1.571h-1.57v-1.571Z\"
                                          transform=\"translate(-1239.84 -352.281)\" /> </svg>
                            </div>
                            <div class=\"text\">
                                <a href=\"mailto:inbox@medihelp.com\">inbox@medihelp.com</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"footer__top-blocks\">
                    <h1 class=\"title\">Opening hours</h1>
                    <div class=\"content\">
                        <ul class=\"work-date\">
                            <li><span>Mon - Thu</span><b>08:00 - 18:00</b></li>
                            <li><span>Wed - Thur</span><b>09:00 - 19:00</b></li>
                            <li><span>Friday</span><b>10:00 - 22:00</b></li>
                            <li><span>Saturday</span><b>09:00 - 14:00</b></li>
                            <li><span>Sunday</span><b>Closed</b></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div>
                <div class=\"footer__top-blocks\">
                    <h1 class=\"title\">Subscribe</h1>
                    <div class=\"content\">
                        <p class=\"text\">To receive email releases, simply provide us with your email address below.
                        </p>
                        <form>
                            <div class=\"email\">
                                <input type=\"email\" placeholder=\"Email Addres\">
                                <button type=\"submit\"><i class=\"fa fa-send\"></i></button>
                            </div>
                            <label>* Personal data will be encrypted</label>
                        </form>
                        <div class=\"socials\">
                            <a href=\"#\" title=\"facebook\"><i class=\"fa fa-facebook\"></i></a>
                            <a href=\"#\" title=\"twitter\"><i class=\"fa fa-twitter\"></i></a>
                            <a href=\"#\" title=\"instagram\"><i class=\"fa fa-instagram\"></i></a>
                        </div>
                    </div>
                </div>

                <div class=\"footer__top-blocks\">
                    <h1 class=\"title\">Company</h1>
                    <div class=\"content\">
                        <ul class=\"menu\">
                            <li>
                                <a href=\"#about\"><i class=\"fa fa-angle-right\"></i>About Us</a>
                            </li>
                            <li>
                                <a href=\"#departments\"><i class=\"fa fa-angle-right\"></i>Our Departments</a>
                            </li>
                            <li>
                                <a href=\"#services\"><i class=\"fa fa-angle-right\"></i>Services</a>
                            </li>
                            <li>
                                <a href=\"#why-us\"><i class=\"fa fa-angle-right\"></i>Why Us</a>
                            </li>
                            <li>
                                <a href=\"#faq\"><i class=\"fa fa-angle-right\"></i>FAQ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of .footer__top -->



</footer>
<!-- End of .footer -->



{% block js %}
    <!-- Scripts + Jquery plagins -->

    <!-- .preloader  -->
    <script src={{ asset('front/js/my-preloader.js')}}></script>

    <!-- jQuery -->
    <script src={{ asset('front/js/jQuery-3.4.1.js')}}></script>

    <!-- wow js animation -->
    <script src={{ asset('front/js/wow.min.js')}}></script>

    <!-- owl-carousel js -->
    <script src={{ asset('front/js/owl.carousel.min.js')}}></script>
    <script src={{ asset('front/js/carousel.js')}}></script>

    <!-- fancybox 3 js -->
    <script src={{ asset('front/js/jquery.fancybox.js')}}></script>

    <!-- Counter up -->
    <script src={{ asset('front/js/jquery.waypoints.min.js')}}></script>
    <script src={{ asset('front/js/jquery.countup.min.js')}}></script>

    <!-- bootstrap js -->
    <script src={{ asset('front/js/bootstrap.min.js')}}></script>

    <!-- customer js -->
    <script src={{ asset('front/js/index.js')}}></script>
    <!-- Scripts + Jquery plagins -->

    <!-- isotope filter card -->
    <script src={{ asset('front/js/isotope.pkgd.min.js') }}></script>

{% endblock %}


</html>", "base.html.twig", "/Applications/MAMP/htdocs/projet_symfony/User_Symfony/templates/base.html.twig");
    }
}
